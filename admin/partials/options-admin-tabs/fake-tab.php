
<?php 

 if($option_identificator === "op3") {
    $option_number = "Option 3";} 
    else if ($option_identificator === "op4") {
    $option_number = "Option 4";}
     else if ($option_identificator === "op5") {
        $option_number = "Option 5";}   
        else if ($option_identificator === "op6") {
            $option_number = "Option 6";}
            else if ($option_identificator === "op7") {
                $option_number = "Option 7";}

$allowed_html_tags = ['span' => array('style' =>array(), 'id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
'class' => array(),), 'a' => array('target' => array(), 'rel' => array(), 'href' => array(), 'id' => array(), 'class' => array(),),];

$product_url = get_permalink($product_id);

$view_product_btn = "<a target=\"_blank\" rel=\"noopener noreferrer\" href=". $product_url." id=\"top_preview_btn\" class=\"preview button\">". __('View Product', 'custom-product-manager') ."</a>";

echo "<div class=\"top_info_div\"><span> <i class=\"fa fa-eye-slash title_fa\"></i> " . esc_html($option_number). " => " . esc_html__('Available only in pro version', 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";


woocommerce_wp_text_input([
    'id' => 'fake_option_name',
    'label' => __('Option label :', 'custom-product-manager'),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Write your option label','custom-product-manager'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


woocommerce_wp_select([
    'id' => 'fake_field_type',
    'label' => __('Option type :', 'custom-product-manager'),
    'class' => 'required short',
    'options' => array(
        '' => __('Select an option type','custom-product-manager'),
    ),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);


woocommerce_wp_textarea_input([
    'id' =>'fake_input_description',
    'label' => __('Option description : ', 'custom-product-manager'),
    'type' => 'text',
    'placeholder' => __('Input description', 'custom-product-manager'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);

woocommerce_wp_textarea_input([
    'id' => 'fake_input_helptip',
    'label' => __('Option help-tip : ', 'custom-product-manager'),
    'type' => 'text',
    'placeholder' => __('Input help-tip', 'custom-product-manager'),
    'custom_attributes' => array(
        'disabled' => 'disabled',
    )
]);



echo "<p class=\"form-field\"><label>" .esc_html__('Information :', 'custom-product-manager') ."</label><span class=\"short cpm_info_field\">" . wp_kses(__('Check our <a href=\"https://new-altitude-solutions.com\">official website</a> for pro version.', 'custom-product-manager'), $allowed_html_tags) ."</span>
</p>";

