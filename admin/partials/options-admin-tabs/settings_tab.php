<?php 

?>


<div class="top_info_div"><span><i class="fa fa-cog"></i> &nbsp;<?php echo esc_html__('General settings', 'custom-product-manager') ?></span></div>


<!-- <p>Settings applied for each product.</p> -->

<?php 

$allowed_html_tags = ['span' => array('id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
    'class' => array(),), 'a' => array('href' => array(), 'id' => array(), 'class' => array(),),];


echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" . esc_html__('Calculation type', 'custom-product-manager') ."</label></p>";

woocommerce_wp_checkbox([
    'id' => 'quantity_related',
    'name' => 'quantity_related',
    'label' => __('Quantity related :', 'custom-product-manager'),
    'description' => __('Option costs fluctuate with quantity.', 'custom-product-manager'),
     //if cbvalue = value => checkbox checked
    'value' => get_option('quantity_related'),
]);


echo "<p class=\"form-field q_info_2\"><label>" . esc_html__('Enabled :', 'custom-product-manager') . "</label><span class=\"short cpm_info_field\">"
. esc_html__('Option cost are added to the product price and are quantity related.', 'custom-product-manager') .
"</span>
<span class=\"short cpm_info_field\">"
. esc_html__('1 - Cast page product accordion last header default title : "Total price"', 'custom-product-manager') .
"</span>
<span class=\"short cpm_info_field\">"
. esc_html__('2 - New cart page summary default text : "Total cost incl"', 'custom-product-manager') .
"</span>
</p>";

echo "<p class=\"form-field q_info_2\"><label>" . esc_html__('Disabled :', 'custom-product-manager') . "</label><span class=\"short cpm_info_field\">"
. esc_html__('Option cost are added to the total but are not quantity related.', 'custom-product-manager') .
"</span>
<span class=\"short cpm_info_field\">"
. esc_html__('1 - Cast page product accordion last header default title : "Total option"', 'custom-product-manager') .
"</span>
<span class=\"short cpm_info_field\">"
. esc_html__('2 - New cart page summary default text : "Total cost"', 'custom-product-manager') .
"</span>
</p>";

echo "<p class=\"form-field q_info_2\"><label>" .esc_html__('Information :', 'custom-product-manager') ."</label><span class=\"short cpm_info_field\">"
. esc_html__('You can modify the text of these 2 headers in the Cart page section below.', 'custom-product-manager') . 
"</span>
</p>";


echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Cart page', 'custom-product-manager') ."</label></p>";

woocommerce_wp_text_input([
    'id' => 'total_price_header_text',
    'label' => __('Accordion header text : ', 'custom-product-manager'),
    'description' =>  wp_kses($cart_header_helptip, $allowed_html_tags),
    'type' => 'text',
    'placeholder' => get_option('total_price_header_text'),
]);

woocommerce_wp_text_input([
    'id' => 'total_price_summary_text',
    'label' => __('Cart summary text : ', 'custom-product-manager'),
    'description' =>  wp_kses($cart_summury_helptip, $allowed_html_tags),
    'type' => 'text',
    'placeholder' => get_option('total_price_summary_text'),
]);

woocommerce_wp_text_input([
    'id' => 'total_cost_header_text',
    'label' => __('Accordion header text : ', 'custom-product-manager'),
    'description' =>  wp_kses($cart_header_helptip, $allowed_html_tags),
    'placeholder' => get_option('total_cost_header_text'),
]);

woocommerce_wp_text_input([
    'id' => 'total_cost_summary_text',
    'label' => __('Cart summary text : ', 'custom-product-manager'),
    'description' =>  wp_kses($cart_summury_helptip, $allowed_html_tags),
    'placeholder' => get_option('total_cost_summary_text'),
]);




echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">". esc_html__('Product page', 'custom-product-manager') ."</label></p>";

woocommerce_wp_text_input([
    'id' => 'free_option_text',
    'label' => __('Free option text : ', 'custom-product-manager'),
    'description' =>  wp_kses($settings_free_text, $allowed_html_tags),
    'type' => 'text',
    'placeholder' => get_option('free_option_text'),
]);


woocommerce_wp_text_input([
    'id' => 'cost_option_text',
    'label' => __('Cost option text : ', 'custom-product-manager'),
    'description' => wp_kses($settings_cost_text, $allowed_html_tags),
    'type' => 'text',
    'placeholder' => get_option('cost_option_text'),
]);


echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Shop page', 'custom-product-manager') ."</label></p>";

woocommerce_wp_text_input([
    'id' => 'add_to_cart_text',
    'label' => __('Add cart button text : ', 'custom-product-manager'),
    'description' => wp_kses($settings_shop_text, $allowed_html_tags),
    'type' => 'text',
    'placeholder' => get_option('add_to_cart_text'),
]);




?>
    <div class="admin_save_delete_button_div">


    <div class="save_delete_container cpm_save short">
                    <span class="save_delete_icons"><i class="fa-solid fa-floppy-disk"></i></span>
   <button type="submit" class="save_button" name="save_settings" value="Save settings" ><?php esc_html_e('Save settings', 'custom-product-manager')?></button>
</div>

<div class="save_delete_container cpm_delete short">
<span class="save_delete_icons"><i class="fa-solid fa-trash-arrow-up"></i></span>
   <button type="submit" class="remove_button" name="remove_settings" value="Reset settings">
   <?php esc_html_e('Reset settings', 'custom-product-manager')?></button>
   </div>

  </div>