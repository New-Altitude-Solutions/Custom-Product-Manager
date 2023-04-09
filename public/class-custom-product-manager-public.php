<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/New-Altitude-Solutions 
 * @since      1.0.0
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/public
 * @author     New-Altitude-Solutions <contact@new-altitude-solutions.com> 
 */

class Custom_Product_Manager_Public

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	public function __construct($custom_product_manager, $version)

	{

		$this->plugin_name = $custom_product_manager;
		$this->version = $version;

		add_filter('woocommerce_loop_add_to_cart_link', array($this, 'change_add_to_cart_button_text_if_option'), 10);
		add_action('woocommerce_before_add_to_cart_button', array($this, 'woocommerce_options_fields_display'), 30);
		add_filter('woocommerce_add_cart_item_data', array($this, 'add_cart_item_data'), 10, 3);


		add_filter('woocommerce_cart_item_name', array($this, 'display_options_in_cart_page'), 10, 2);

		add_filter('upload_dir', array($this, 'change_default_upload_subdir'), 10, 1);

		if (is_admin()) {
			//is_admin() check required for ajax script (even in front-end for non-logged user)
			add_action('wp_ajax_front_end_ajax', array($this, 'front_end_ajax'), 10, 1);
			add_action('wp_ajax_nopriv_front_end_ajax', array($this, 'front_end_ajax'), 10, 1);
		}

		$option_quantity_related = get_option('quantity_related');

		if ($option_quantity_related) {
			add_action('woocommerce_before_calculate_totals', array($this, 'add_option_cost_to_product_price'), 10, 1);
			/* Add new lines in summary text to summarize all option cost incl. in products price */
			add_action('woocommerce_cart_totals_after_order_total', array($this, 'add_summary_row'), 10);
			add_action('woocommerce_review_order_after_order_total', array($this, 'add_summary_row'), 10);
			/* see filter 'woocommerce_get_order_item_totals' if needed in emails/order received/ Account view order */
		} else {
			/* Add fee and new line in summary text to summarize all option cost added to total */
			add_action('woocommerce_cart_calculate_fees', array($this, 'add_summary_fee'), 10, 1);
		};
	}



	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/custom-product-manager-public.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name . 'fafa', plugin_dir_url(__DIR__) . 'admin/assets/fontawesome/css/all.css', array(), $this->version, 'all');

		if (is_checkout()) {
		wp_enqueue_style($this->plugin_name . 'cart_checkout_css', plugin_dir_url(__FILE__) . 'css/cpm_checkout.css', array(), $this->version, 'all');
		}
	}



	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//enqueue jquery accordion
		wp_enqueue_script('jquery-ui-accordion');

		wp_enqueue_script($this->plugin_name . 'jquery-ui-accord', plugin_dir_url(__FILE__) . 'js/cart-accordion.js', array('jquery'), $this->version, true);


		if (is_product()) {

			//enqueue select menu
			wp_enqueue_script('jquery-ui-selectmenu');

			//enqueue select menu
			wp_enqueue_script('jquery-ui-checkboxradio');

			//JS dom ready events + swap
			wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/custom-product-manager-public.js', array('jquery'), $this->version, false);

			//Dynamic Pricing
			wp_enqueue_script($this->plugin_name . 'change_js', plugin_dir_url(__FILE__) . 'js/options_fields/public_side_change.js', array('jquery'), $this->version, false);
			wp_enqueue_script($this->plugin_name . 'quantity_js', plugin_dir_url(__FILE__) . 'js/options_fields/public_side_quantity.js', array('jquery'), $this->version, false);

			// Getting PHP values and pass them to JS File -> wp_add_inline_script() 
			wp_register_script($this->plugin_name . 'public_js_inline_script', '', array("jquery"), '', true);
			wp_enqueue_script($this->plugin_name . 'public_js_inline_script');
			global $post;
			$product = wc_get_product($post->ID);

			if (!empty($product)) {
				require plugin_dir_path(__FILE__) . 'data/public-inline-script.php';
			}

			//Ajax public side register
			$upload_nonce = wp_create_nonce('upload_nonce');

			wp_enqueue_script(
				'ajax-script',
				plugins_url('/js/options_fields/public_side_ajax.js', __FILE__),
				array('jquery'),
				'1.0.,0',
				true
			);

			wp_localize_script(
				'ajax-script',
				'front_end_ajax',
				array(
					'ajax_url' => admin_url('admin-ajax.php'),
					'nonce'    => $upload_nonce,
					'currency' => get_woocommerce_currency_symbol(),
					'currency_position' => get_option('woocommerce_currency_pos'),
				)
			);


		}
	}

	/* "Customize" button instead of "Add to cart" button on shop page if product option set*/

	function change_add_to_cart_button_text_if_option($button)
	{
		global $post;
		$product = wc_get_product($post->ID);
		$optionName = $product->get_meta('op1_option_name');
		$optionName_2 = $product->get_meta('op2_option_name');
		if ($optionName || $optionName_2) {
			$button_text = get_option('add_to_cart_text');
			$button = '<a class="button wp-element-button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
		}
		return $button;
	}

	/* Display fields on the product page before the add to cart button */

	function woocommerce_options_fields_display()
	{
		require plugin_dir_path(__FILE__) . 'partials/custom-product-manager-public-display.php';
	}

	/* Cart item data */

	function add_cart_item_data($cart_item_data, $product_id, $variation_id)
	{
		$option_identificator = "op1";
		require plugin_dir_path(__FILE__) . 'cart/cart_item_data_template.php';
		$option_identificator = "op2";
		require plugin_dir_path(__FILE__) . 'cart/cart_item_data_template.php';
		return $cart_item_data;
	}


	function add_option_cost_to_product_price($cart)
	{

		/*if ( is_admin() && ! defined( 'DOING_AJAX' ) )
				return;*/

		foreach ($cart->get_cart() as $index => $cart_item) {
			if (isset($cart_item['new_price'])) {
				$price = $cart_item['new_price'];
				$cart_item['data']->set_price(($price));
			}
		};
	}

	function add_summary_row()
	{
		$total_option_cost_included = 0;
		foreach (WC()->cart->get_cart() as $cart_item) {
			$total_options_cost = $cart_item['new_price'] - $cart_item['old_price'];
			$total_option_cost_included += (float)$total_options_cost;
		}

		echo '<tr>
		<th>' . get_option('total_price_summary_text') . '</th>
		<td>' . wc_price($total_option_cost_included) . '</td>
		</tr>';
	}

	function add_summary_fee($cart)
	{

		/*if ( is_admin() && ! defined( 'DOING_AJAX' ) )
				return;*/

		/*if ( did_action( 'woocommerce_calculate_totals' ) >= 2 )
				return;*/

		$new_total = 0;

		foreach ($cart->get_cart() as $index => $cart_item) {
			$total_options_cost = $cart_item['new_price'] - $cart_item['old_price'];
			$new_total += (float)$total_options_cost;
		}

		$cart->add_fee(get_option('total_cost_summary_text'), $new_total);
	}



	/**
	 * Cart product title. Display Options selected & values on cart page under Product title.
	 *
	 * @param string $title - The product title.
	 * @param array  $cart_item - The array of cart item product data.
	 * @return string
	 * 
	 */

	function display_options_in_cart_page($title, $cart_item)
	{
		global $_product;
		$option_identificator = "op1";
		require plugin_dir_path(__FILE__) . 'cart/cart_product_options_template.php';
		$option_identificator = "op2";
		require plugin_dir_path(__FILE__) . 'cart/cart_product_options_template.php';

		$quantity_related = get_option('quantity_related');

		$total_option = $cart_item['new_price'] - $cart_item['old_price'];
		if (!empty($quantity_related) && $cart_item['new_price'] && $total_option != "0") {
			return  $title . '<div class=\"accordion\"><h3>' . get_option('total_price_header_text') . '</h3><div><table class="product_options">

				<tr>
				<th>' . esc_html__('Initial price', 'custom-product-manager') . '</th>
				<th>' . esc_html__('Total cost', 'custom-product-manager') . '</th>
				<th>' . esc_html__('New price', 'custom-product-manager') . '</th>
				</tr>
				<tr>
				<td>' . wc_price($_product->get_regular_price()) . '</td>
				<td>' . wc_price($total_option) . '</td>
				<td>' . wc_price($_product->get_regular_price() + $total_option) . '</td>
				</tr>
				
				</table></div></div>';
		} else if (empty($quantity_related) && $cart_item['new_price'] && $total_option != "0") {
			return  $title . '<div class=\"accordion\"><h3>' . get_option('total_cost_header_text') . '</h3><div><table class="product_options">

				<tr>
				<td> + ' . wc_price($total_option) . '</td>
				</tr>
				
				</table></div></div>';
		} else {
			return  $title;
		}
	}


	//Change defaut upload sub directory to /customer-uploads

	function change_default_upload_subdir($upload_dir)
	{

		global $wp_filter; //check if the filter doesn't already exists before.
		if (!isset($wp_filter['upload_dir'])) {
			return;
		} else if (doing_action('wp_ajax_front_end_ajax') || doing_action('wp_ajax_nopriv_front_end_ajax')) {
			$upload_dir['subdir'] = '/front-uploads';
			$upload_dir['path'] = $upload_dir['basedir'] . $upload_dir['subdir'];
			$upload_dir['url'] = $upload_dir['baseurl'] . $upload_dir['subdir'];
		} else {
			$upload_dir['path'] = $upload_dir['basedir'];
			$upload_dir['url'] = $upload_dir['baseurl'];
		}
		return $upload_dir;
	}

	//Front-end Ajax file upload 

	function front_end_ajax($cart_item_data)
	{

		// Check nonce
		if (
			isset($_POST['upload_nonce'])
			&& wp_verify_nonce($_POST['upload_nonce'], 'upload_nonce')
		) {

			// These files need to be included as dependencies when upload on front end
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			require_once(ABSPATH . 'wp-admin/includes/file.php');
			require_once(ABSPATH . 'wp-admin/includes/media.php');

			//Handling upload
			$uploaded_file_name = $_POST['file_name'];
			$uploaded_file = $_FILES['file'];
			$product_id = $_POST['product_id'];
			$option_identificator = $_POST['option_id'];
			$quantity = $_POST['quantity'];
			$upload_charge = $_POST['upload_charge'];
			$upload_overrides = ['test_form' => false];

			$mimes_types = get_allowed_mime_types();
			$product = wc_get_product($product_id);
			foreach ($mimes_types as $mime) {
				$i = 0;
				$file_mime_type = mime_content_type($_FILES['file']['tmp_name']);
				$product_allowed_mime_type = $product->get_meta($option_identificator . '_' . $mime);
				if ($file_mime_type === $product_allowed_mime_type) {
					$i = 1;
					break;
				}
			}
			if ($i < 1) {
				return;
			}

			//Check file size
			$admin_allowed_max_size = floatval($product->get_meta($option_identificator . '_upload_max_size'));
			$file_size = $_FILES['file']['size']; //bytes 
			$filesize = round($file_size / 1024 / 1024, 1); //Megabytes

			if (!empty($admin_allowed_max_size) && $filesize > $admin_allowed_max_size) {
				echo '<p class="cp_output"><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;' . esc_html__('File size exceeds the maximum limit. Unallowed.', 'custom-product-manager') . '</p>';
				die;
			}

			//Handle upload
			$movefile = wp_handle_upload($uploaded_file, $upload_overrides);

			if ($movefile && !isset($movefile['error'])) {

				//Sucess response

				$disable_output = $product->get_meta($option_identificator . '_disable_output');
				$quantity_related = get_option('quantity_related');

				if ($quantity_related) {
					$option_fees = $upload_charge * $quantity;
					/* Input to tell JS quantity is related for calculation in response */
					echo "<input type=\"hidden\" name=\"quantity_related\" value=\"true\" />";
				} else {
					$option_fees = $upload_charge;
					echo "<input type=\"hidden\" name=\"quantity_related\" value=\"false\" />";
				};

				if (!$disable_output && $upload_charge > 0) {
					echo '<p class="cp_output" id=' . $option_identificator . '_output_upload_value' . '>'  . get_option('cost_option_text') . ' ' .  wc_price($option_fees) . '</p>';
				} else if (!$disable_output && $upload_charge == 0) {
					echo '<p class="cp_output" id=' . $option_identificator . '_output_upload_value' . '>' . get_option('cost_option_text') . ' ' . get_option('free_option_text') . '</p>';
				} else {
					return;
				}

				echo '<p class="cp_output" style="margin-bottom:10px;">' . esc_html__('File was successfully uploaded.', 'custom-product-manager') . '</p>';
				$upload_dir = wp_upload_dir();
				$file_path = $upload_dir['url'] . '/' . $uploaded_file_name;

				if (strpos($file_mime_type, 'image') !== false) {
					//File is an image
					echo '<img style="border:1px solid #e7e7e7" src=' . $file_path . ' width=200 height=200 />';
				} else {
					//File is not an image
					echo '<p class="cp_output">' . $uploaded_file_name . '</p>';
				}
			} else {
				/*
								* Error response [generated by _wp_handle_upload()]
								*/
				echo '<p class="cp_output">' . $movefile['error'] . '</p>';
			}
		}

		wp_die();
	}
}
