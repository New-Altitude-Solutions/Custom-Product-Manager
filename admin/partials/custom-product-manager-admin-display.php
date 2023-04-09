<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/New-Altitude-Solutions
 * @since      1.0.0
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/admin/partials
 */

      global $post;
      $product = wc_get_product($post->ID);
      $price = $product->get_regular_price();

      //Option 1 check
      $isOption1_active =  $product->get_meta('op1_field_type');

      //Option 2 check
      $isOption2_active =  $product->get_meta('op2_field_type');

      //HELP TIPS
      $input_label_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Displayed above option input', 'custom-product-manager') . "\"></span>";
      $input_description_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Displayed under option name. Leave blank if you dont need it.', 'custom-product-manager') . "\"></span>";
      $input_info_tip_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Displayed beside option name. Leave blank if you dont need it.', 'custom-product-manager') . "\"></span>";
      $calcul_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Use $user_value with numbers and basic mathematic operators : + - / * ( ) . 
      $user_value is required and refers to the value given by the user on the product page.
      Use also $second_user_value if you choose to add another input.', 'custom-product-manager') . "\"></span>";
      $upload_help_tip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('By default, upload max size depends on the settings of your web hosting provider. You can also restrict it here by giving a value in Megabytes (Default PHP upload max size value is usually around 2M).', 'custom-product-manager') . "\"></span>";
      
      $settings_free_text =  "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('If option output is enabled, this text will appear after user interaction when the option is free.', 'custom-product-manager') . "\"></span>";
      $settings_cost_text =  "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('If option output is enabled, this text will appear after user interaction just before the custom option price.', 'custom-product-manager') . "\"></span>";
      
      $settings_help_tip_quantity_related =  "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Product page & cart : if enabled, option cost will be correlated with the product quantity. If disabled, option cost will be added only once to the cart total.', 'custom-product-manager') . "\"></span>";
      
      $cart_header_helptip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Last product accordion header text.', 'custom-product-manager') . "\"></span>";
     
      $cart_summury_helptip = "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('Cart total text.', 'custom-product-manager') . "\"></span>";
      
      $settings_shop_text =  "<span class=\"woocommerce-help-tip cpm\" data-tip=\"" . __('if an option has been set, the add to cart btn of shop page becomes a link to the product with a custom text.', 'custom-product-manager') . "\"></span>";

         ?>

    <div id="custom_produts_manager" class="panel woocommerce_options_panel hidden">

<div class="tab">

<a class="tablinks"> <?php if(!$isOption1_active) {
    echo "<i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> ";} else {
      echo "<i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> ";} esc_html_e('Field 1', 'custom-product-manager');?> 
</a>

<a class="tablinks"> <?php if(!$isOption2_active) {
    echo "<i class=\"fa fa-toggle-off\" aria-hidden=\"true\"></i> ";} else {
    echo "<i class=\"fa fa-toggle-on\" aria-hidden=\"true\"></i> ";}  esc_html_e('Field 2', 'custom-product-manager');?> 
</a>

<a class="tablinks" ><i class="fa fa-toggle-off" aria-hidden="true"></i> <?php esc_html_e('Field 3', 'custom-product-manager');?></a>
<a class="tablinks" ><i class="fa fa-toggle-off" aria-hidden="true"></i> <?php esc_html_e('Field 4', 'custom-product-manager');?></a>
<a class="tablinks" ><i class="fa fa-toggle-off" aria-hidden="true"></i> <?php esc_html_e('Field 5', 'custom-product-manager');?></a>
<a class="tablinks" ><i class="fa fa-toggle-off" aria-hidden="true"></i> <?php esc_html_e('Field 6', 'custom-product-manager');?></a>
<a class="tablinks" ><i class="fa fa-toggle-off" aria-hidden="true"></i> <?php esc_html_e('Field 7', 'custom-product-manager');?></a>
<a class="tablinks" ><i class="fa fa-cog" aria-hidden="true"></i> <?php esc_html_e('Settings', 'custom-product-manager');?></a>
</div>


<div id="London" class="tabcontent">
<?php if (!$price) { echo "<div><p class=\"error notice\" style=\"border-left:3px solid red;\">" . esc_html__('Product regular price has to be set.', 'custom-product-manager') . "</p></div>";} 
else {
  $option_identificator = "op1";
  require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/admin_tab_template.php';
  } ?>
</div>


<div id="Paris" class="tabcontent">
<?php if (!$price) { echo "<div><p class=\"error notice\" style=\"border-left:3px solid red;\">" . esc_html__('Product regular price has to be set.', 'custom-product-manager') . "</p></div>";} 
else {
  $option_identificator = "op2";
  require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/admin_tab_template.php';
  } ?>
</div>


<div id="Tokyo" class="tabcontent">
<?php   $option_identificator = "op3";
require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/fake-tab.php'; ?>
</div>


<div id="Berlin" class="tabcontent">
<?php   $option_identificator = "op4";
require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/fake-tab.php'; ?>
</div>


<div id="Roma" class="tabcontent">
<?php   $option_identificator = "op5";
require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/fake-tab.php'; ?>
</div>

<div id="Nantes" class="tabcontent">
<?php   $option_identificator = "op6";
require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/fake-tab.php'; ?>
</div>

<div id="Bruxelles" class="tabcontent">
<?php   $option_identificator = "op7";
require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/fake-tab.php'; ?>
</div>


<div id="Helsinki" class="tabcontent">
  <?php require plugin_dir_path( __FILE__ ) . 'options-admin-tabs/settings_tab.php'; ?>
</div>

<div id="New-york" class="tabcontent">

</div>
