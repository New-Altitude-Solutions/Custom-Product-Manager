<?php

/**
 * 
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/New-Altitude-Solutions
 * @since             1.0.0
 * @package           Custom_Product_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Product Manager
 * Plugin URI:        
 * Description:       Product extra-options with dynamic pricing for WooCommerce : Custom Product Manager turns any product into a customizable product. Choose or create a product and select "custom product manager" in the product data panel. 

 * Version:           1.0.0
 * Author:            New-Altitude-Solutions
 * Author URI:        https://new-altitude-solutions.com
 * License:           GPLv2 
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-product-manager
 * Domain Path:       /languages
 */

		// If this file is called directly, abort.
		if (!defined('WPINC')) {
			die;
		}

		/**
		 * Currently plugin version.
		 * Start at version 1.0.0 and use SemVer - https://semver.org
		 * update here when new versions releases.
		 */
		define('CUSTOM_PRODUCT_MANAGER_VERSION', '1.0.0');

		/**
		 * The code that runs during plugin activation.
		 */
		function activate_custom_product_manager()
		{
			require_once plugin_dir_path(__FILE__) . 'includes/class-custom-product-manager-activator.php';
			Custom_Product_Manager_Activator::activate();
		}

		/**
		 * The code that runs during plugin deactivation.
		 */
		function deactivate_custom_product_manager()
		{
			require_once plugin_dir_path(__FILE__) . 'includes/class-custom-product-manager-deactivator.php';
			Custom_Product_Manager_Deactivator::deactivate();
		}

		register_activation_hook(__FILE__, 'activate_custom_product_manager');
		register_deactivation_hook(__FILE__, 'deactivate_custom_product_manager');

		/**
		 * The core plugin class that is used to define internationalization,
		 * admin-specific hooks, and public-facing site hooks.
		 */
		require plugin_dir_path(__FILE__) . 'includes/class-custom-product-manager.php';

		/**
		 * Composer is a tool for dependency management in PHP.
		 * It allows you to declare the libraries your project depends on and it will manage them.
		 * This project use the Symfony ExpressionLanguage Component.
		 */
		require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

		/**
		 * Begins execution of the plugin.
		 *
		 * Since everything within the plugin is registered via hooks,
		 * then kicking off the plugin from this point in the file does
		 * not affect the page life cycle.
		 *
		 * @since    1.0.0
		 */
		function run_custom_product_manager()
		{

			$plugin = new Custom_Product_Manager();
			$plugin->run();

		}

		run_custom_product_manager();
