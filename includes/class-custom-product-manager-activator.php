<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/New-Altitude-Solutions
 * @since      1.0.0
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/includes
 * @author     New-Altitude-Solutions <contact@new-altitude-solutions.com> 
 */
class Custom_Product_Manager_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {



									// Test to see if WooCommerce is active (including network activated).
									$plugin_path = trailingslashit( WP_PLUGIN_DIR ) . 'woocommerce/woocommerce.php';
								

									if (
										!in_array( $plugin_path, wp_get_active_and_valid_plugins() )
										 
									) {

										deactivate_plugins( plugin_basename( __FILE__ ) );
										wp_die('<h1>' . esc_html__('WooCommerce is required', 'custom-product-manager') . '</h1><br><br><strong></strong>' . esc_html__('CPM Plugin activation cancelled', 'custom-product-manager') . '<br><br><a href="' . get_site_url() .'/wp-admin/plugins.php">' . esc_html__('Go back to plugins', 'custom-product-manager') . '</a>');
									
									} 
									
									/* else {

									 //Create automatically new product "Custom_Product" on activation

									 $post_id = wp_insert_post( array('post_content' => '<h2>Customize your product</h2>This is a default custom product demo, automatically created.', 'post_title' => 'Custom_Product', 'post_type' => 'product', 'post_status' => 'publish') );

									 // Update product short description
										   $my_post = array(
											 'ID'           => $post_id,
											 'post_excerpt'   => 'Custom product auto created. Example demo.',
										 );
	 
									   // Update the post into the database
										 wp_update_post( $my_post );
	 
	 
										 //woocommerce support to the theme
										 add_theme_support( 'woocommerce' );
										 add_theme_support( 'post-thumbnails' );
									}
									
									*/

	}

}
