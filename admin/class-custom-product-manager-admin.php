<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/New-Altitude-Solutions 
 * @since      1.0.0
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/admin
 * @author     New-Altitude-Solutions <contact@new-altitude-solutions.com>
 */
class Custom_Product_Manager_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($custom_product_manager, $version)
	{

		$this->plugin_name = $custom_product_manager;
		$this->version = $version;

		add_filter('woocommerce_product_data_tabs', array($this, 'woocommerce_create_product_data_tab'), 30);
		add_action('admin_head', array($this, 'logo_admin_head'), 30);
		add_action('woocommerce_product_data_panels', array($this, 'admin_tabs_contents'), 30);
		if (is_admin()) {
			add_action('woocommerce_process_product_meta', array($this, 'options_save_and_delete'), 30);
		}
		add_filter('upload_mimes', array($this, 'allowing_more_mimes_types'), 10, 3);

		add_action('admin_init', [$this, 'cpm_settings']);
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/custom-product-manager-admin.css', array(), $this->version, 'all');

		//Admin fontawesome
		$admin_handle = 'admin_css';
		$admin_fontawsome = plugin_dir_url(__FILE__) . '/assets/fontawesome/css/all.css';
		wp_enqueue_style($admin_handle, $admin_fontawsome);

		//Wp_color_picker
		wp_enqueue_style('wp-color-picker');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *, 
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */



		//IRIS Wp_color_picker
		wp_enqueue_script('iris', admin_url('js/iris.min.js'), array('jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-down'), false, 1);

		$screen = get_current_screen();
		if ($screen->id === 'product') {

			wp_enqueue_script($this->plugin_name . 'admin_js', plugin_dir_url(__FILE__) . 'js/admin_side.js', array('jquery'), $this->version, false);
			// Getting PHP values and pass them to JS File -> wp_add_inline_script() 
			wp_register_script($this->plugin_name . 'admin_js_inline_script', '', array("jquery"), '', true);
			wp_enqueue_script($this->plugin_name . 'admin_js_inline_script');
		}

		global $post;
		$product = wc_get_product($post->ID);
		if (!empty($product)) {
			require_once plugin_dir_path(__FILE__) . 'data/admin-inline-script.php';
		}
	}

	// Create a new tab in the WooCommerce product data tab
	function woocommerce_create_product_data_tab($tab)
	{
		$tab['Admin_product_menu'] = [
			'label' => __('Custom Product Manager', 'custom-product-manager'),
			'target' => 'custom_produts_manager',
			'class' => ['tabs_custom'],
			'priority' => 25
		];
		return $tab;
	}


	// Add icon to the admin menu tab

	function logo_admin_head()
	{
		echo '<style>
			#woocommerce-product-data ul.wc-tabs li.Admin_product_menu_options.Admin_product_menu_tab a::before {
				content: "\f501";
			} 
			</style>';
	}

	function admin_tabs_contents()
	{

		require plugin_dir_path(__FILE__) . 'partials/custom-product-manager-admin-display.php';
	}


	function allowing_more_mimes_types($mimes)
	{

		// New allowed mime types : fonts
		$mimes['ttf']   = 'font/ttf';
		$mimes['woff']  = 'font/woff';
		$mimes['woff2'] = 'font/woff2';

		//Numeric books, json
		$mimes['epub'] = 'application/epub+zip';
		$mimes['json'] = 'application/json';
		$mimes['jsonld'] = 'application/ld+json';

		//image SVG
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';

		//unset($mimes['gif']);

		return $mimes;
	}


	function options_save_and_delete($post_id)

	{	//apply_filters('allowing_more_mimes_types', $mimes);

		if ($_POST['op1_option_submit'] || $_POST['op1_delete-submit']) {
			$option_identificator = "op1";
			require_once plugin_dir_path(__FILE__) . 'data/save_delete_template.php';
		}

		if ($_POST['op2_option_submit'] || $_POST['op2_delete-submit']) {
			$option_identificator = "op2";
			require_once plugin_dir_path(__FILE__) . 'data/save_delete_template.php';
		}
	}

	function cpm_settings()
	{

		/******* Settings tab ******/

		if (get_option('quantity_related') === false) {
			add_option('quantity_related', 'true', '', 'yes');
		}
		if (get_option('free_option_text') === false) {
			add_option('free_option_text', __('Free option', 'custom-product-manager'), '', 'yes');
		}
		if (get_option('cost_option_text') === false) {
			add_option('cost_option_text', __('Option cost : ', 'custom-product-manager'), '', 'yes');
		}
		if (get_option('add_to_cart_text') === false) {
			add_option('add_to_cart_text', __('Customize', 'custom-product-manager'), '', 'yes');
		}

		if (get_option('total_price_header_text') === false) {
			add_option('total_price_header_text', __('Total price', 'custom-product-manager'), '', 'yes');
		}
		if (get_option('total_price_summary_text') === false) {
			add_option('total_price_summary_text', __('Total cost incl.', 'custom-product-manager'), '', 'yes');
		}
		if (get_option('total_cost_header_text') === false) {
			add_option('total_cost_header_text', __('Total option', 'custom-product-manager'), '', 'yes');
		}
		if (get_option('total_cost_summary_text') === false) {
			add_option('total_cost_summary_text', __('Total cost', 'custom-product-manager'), '', 'yes');
		}

		if ($_POST['save_settings']) {

			update_option('quantity_related', sanitize_key($_POST['quantity_related']));
			if (isset($_POST['free_option_text']) && !empty($_POST['free_option_text'])) {
				update_option('free_option_text', sanitize_text_field($_POST['free_option_text']));
			}
			if (isset($_POST['cost_option_text']) && !empty($_POST['cost_option_text'])) {
				update_option('cost_option_text', sanitize_text_field($_POST['cost_option_text']));
			}
			if (isset($_POST['add_to_cart_text']) && !empty($_POST['add_to_cart_text'])) {
				update_option('add_to_cart_text', sanitize_text_field($_POST['add_to_cart_text']));
			}

			if (isset($_POST['total_price_header_text']) && !empty($_POST['total_price_header_text'])) {
				update_option('total_price_header_text', sanitize_text_field($_POST['total_price_header_text']));
			}
			if (isset($_POST['total_price_summary_text']) && !empty($_POST['total_price_summary_text'])) {
				update_option('total_price_summary_text', sanitize_text_field($_POST['total_price_summary_text']));
			}
			if (isset($_POST['total_cost_header_text']) && !empty($_POST['total_cost_header_text'])) {
				update_option('total_cost_header_text', sanitize_text_field($_POST['total_cost_header_text']));
			}
			if (isset($_POST['total_cost_summary_text']) && !empty($_POST['total_cost_summary_text'])) {
				update_option('total_cost_summary_text', sanitize_text_field($_POST['total_cost_summary_text']));
			}
		}


		if ($_POST['remove_settings']) {
			update_option('quantity_related', 'yes');
			update_option('free_option_text', __('Free option', 'custom-product-manager'));
			update_option('cost_option_text', __('Option cost :', 'custom-product-manager'));
			update_option('add_to_cart_text', __('Customize', 'custom-product-manager'));

			update_option('total_price_header_text', __('Total price', 'custom-product-manager'));
			update_option('total_price_summary_text', __('Total cost incl.', 'custom-product-manager'));
			update_option('total_cost_header_text', __('Total option', 'custom-product-manager'));
			update_option('total_cost_summary_text', __('Total cost', 'custom-product-manager'));
		}
	}
}
