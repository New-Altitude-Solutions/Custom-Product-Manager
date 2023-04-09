<?php

/*
 *
 *  Display options admin tab contents 
 * 
 */

 /*
$meta_values = get_post_meta( get_the_ID() );
print_r( $meta_values ); 
*/

 if($option_identificator === "op1") {
    $option_number = "Option 1";} 
    else if ($option_identificator === "op2") {
    $option_number = "Option 2";};

$allowed_html_tags = ['span' => array('style' =>array(), 'id' => array(), 'class' => array(), 'data-tip' => array(),), 'b' => array(), 'i' => array(
                     'class' => array(),), 'a' => array('target' => array(), 'rel' => array(), 'href' => array(), 'id' => array(), 'class' => array(),),];

$inputType = $product->get_meta($option_identificator . '_field_type');

$img_1_id = $product->get_meta($option_identificator . '_img_1');
$img_2_id = $product->get_meta($option_identificator . '_img_2');
$img_3_id = $product->get_meta($option_identificator . '_img_3');
$img_4_id = $product->get_meta($option_identificator . '_img_4');

       //use to check if image not has been deleted from upload folder
       if(wp_get_attachment_image_src($img_1_id)[3] !== true) { $img_1_id = "";};
       if(wp_get_attachment_image_src($img_2_id)[3] !== true) { $img_2_id = "";};
       if(wp_get_attachment_image_src($img_3_id)[3] !== true) { $img_3_id = "";};
       if(wp_get_attachment_image_src($img_4_id)[3] !== true) { $img_4_id = "";};
  

$product_url = get_permalink($product_id);

/* target="_blank" => open link in a new tab
* rel="noopener noreferrer" => prevent tabnabbing */
$view_product_btn = "<a target=\"_blank\" rel=\"noopener noreferrer\" href=".$product_url." id=\"top_preview_btn\" class=\"preview button\">". __('View Product', 'custom-product-manager') ."</a>";

if ($inputType === "1") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Text input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "2") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Select dropdown displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "3") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Checkbox input displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "4") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number). " => " . esc_html__("Text area input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "5") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Radio input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "6") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Number input displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "7") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Image swap displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "8") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Email input displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "9") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Button swap displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "10") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number). " => " . esc_html__("Color input displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "11") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Calculation input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "12") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Url input displayed.", 'custom-product-manager'). "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
} else if ($inputType === "13") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Upload input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
}else if ($inputType === "14") {
    echo "<div class=\"top_info_div\"><span><i class=\"fa fa-tv title_fa\"></i> " . esc_html($option_number) . " => " . esc_html__("Phone input displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
}else {
    echo "<div class=\"top_info_div\"><span> <i class=\"fa fa-eye-slash title_fa\"></i> " . esc_html($option_number) . " => " .esc_html__("No input currently displayed.", 'custom-product-manager') . "</span>". wp_kses($view_product_btn, $allowed_html_tags) ."</div>";
};


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_option_name',
    'label' => __('Option label', 'custom-product-manager') . ' '  . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'wrapper_class' => 'show_if_simple',
    'class' => 'required short',
    'placeholder' => __('Write your option label','custom-product-manager'),
    'description' => wp_kses($input_label_help_tip, $allowed_html_tags),
]);


woocommerce_wp_select([
    'id' => esc_attr($option_identificator). '_field_type',
    'label' => __('Option type', 'custom-product-manager') . ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'class' => 'required short',
    'options' => array(
        '' => __('Select an option type','custom-product-manager'),
        '1' => __('Text', 'custom-product-manager'),
        '2' => __('Select dropdown', 'custom-product-manager'),
        '3' => __('Checkboxes', 'custom-product-manager'),
        '4' => __('Textarea', 'custom-product-manager'),
        '5' => __('Radio buttons', 'custom-product-manager'),
        '6' => __('Number', 'custom-product-manager'),
        '7' => __('Images', 'custom-product-manager'),
        '8' => __('Email', 'custom-product-manager'),
        '9' => __('Buttons','custom-product-manager'),
        '10' => __('Color','custom-product-manager'),
        '11' => __('Number calculation', 'custom-product-manager'),
        '12' => __('Url', 'custom-product-manager'),
        '13' => __('Upload ajax', 'custom-product-manager'),
        '14' => __('Phone', 'custom-product-manager'),
 ),
]);


woocommerce_wp_textarea_input([
    'id' => esc_attr($option_identificator) . '_input_description',
    'label' => __('Option description : ', 'custom-product-manager'),
    'type' => 'text',
    'placeholder' => __('Input description', 'custom-product-manager'),
    'description' => wp_kses($input_description_help_tip, $allowed_html_tags),
]);

woocommerce_wp_textarea_input([
    'id' => esc_attr($option_identificator) . '_input_helptip',
    'label' => __('Option help-tip : ', 'custom-product-manager'),
    'type' => 'text',
    'placeholder' => __('Input help-tip', 'custom-product-manager'),
    'description' => wp_kses($input_info_tip_help_tip, $allowed_html_tags),
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_input_placeholder',
    'label' => __('Option placeholder : ', 'custom-product-manager'),
    'type' => 'text',
    'placeholder' => __('Input placeholder', 'custom-product-manager'),
]);

woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_requiredCheck',
    'label' => __('Option required :', 'custom-product-manager'),
    'description' => __('Enable if option is required.', 'custom-product-manager'),
]);


woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_disable_output',
    'label' => __('Hide option output :', 'custom-product-manager'),
    'description' => __('Enable to hide option cost output.', 'custom-product-manager'),
]);


/*Text*/

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ). "_text_div>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_extra_value',
    'label' => __('Option cost :', 'custom-product-manager') . ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Text option cost','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_min_length',
    'label' => __('Text min length :', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_input_max_length',
    'label' => __('Text max length :', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '40',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_checkbox([
    'id' => esc_attr($option_identificator) . '_only_letters',
    'label' => __('Only letters :', 'custom-product-manager'),
    'description'        => __('Enable to allow only letters and disallowed numbers.', 'custom-product-manager'),
]);

echo "</div>";


/* Textarea */

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ) . "_textarea_div>";

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_area_extra_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Textarea option cost','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_text_area_max_length',
    'label' => __('Textarea max length : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '260',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


echo "</div>";

/*URL */

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_url_div>";

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_extra_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Url link option cost','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_min_length',
    'label' => __('Url min length : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_url_max_length',
    'label' => __('Url max length : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '40',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_select([
    'id' => esc_attr($option_identificator) . '_url_pattern',
    'label' => __('Url pattern.', 'custom-product-manager') . ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'class' => 'required short',
    'options' => array(
        '' => 'Select a pattern',
        '1' => 'Accept http:// or https://',
        '2' => 'Only http://',
        '3' => 'Only https://',
    ),
]);

echo "</div>";



/* E-mail*/

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ). "_email_div>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_email_extra_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Email option cost','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_email_max_length',
    'label' => __('Email max length : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '40',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


echo "</div>";


/* Number */

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ). "_number_div>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_input_extra_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Number option cost','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_min_value',
    'label' => __('Number min value: ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '0',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_max_value',
    'label' => __('Number max value : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '100000000',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_number_step_value',
    'label' => __('Number step value : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '1',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


echo "</div>";


/*Checkbox*/

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_checkbox_div>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_checkbox_name',
    'label' => __('Option label 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'text',
    'class' => 'required short',
    'placeholder' => __('Checkbox option label 1','custom-product-manager'),
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_field_value',
    'label' => __('Option cost 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'class' => 'required short',
    'placeholder' => __('Checkbox option cost 1','custom-product-manager'),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_chk"; ?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_chk button";?>">
     <?php esc_html_e('Add new checkbox', 'custom-product-manager');?>
    </button>

</div>

<div class="<?php echo esc_attr($option_identificator) . "_2nd_checkbox";?>" style="display:none;">

    <?php


echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_chk button" . "\" >"
. esc_html__('Remove checkbox 2', 'custom-product-manager') .
"</button>";


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_2',
        'label' => __('Option label 2 :', 'custom-product-manager'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 2','custom-product-manager'),
    ]);


    woocommerce_wp_text_input([
        'id' =>  esc_attr($option_identificator) . '_field_value_2',
        'label' => __('Option cost 2 :', 'custom-product-manager'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 2','custom-product-manager'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);



    echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_chk_2 button" . "\" >"
    . esc_html__('Add new checkbox', 'custom-product-manager') .
    "</button>";


    echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_3rd_checkbox>";


    echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_chk_2 button" . "\" >"
    . esc_html__('Remove checkbox 3', 'custom-product-manager') .
"</button>";


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_3',
        'label' => __('Option label 3 :', 'custom-product-manager'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 3','custom-product-manager'),
    ]);


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_field_value_3',
        'label' => __('Option cost 3 :', 'custom-product-manager'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 3','custom-product-manager'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    

    echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_chk_3 button" . "\" >"
    . esc_html__('Add new checkbox', 'custom-product-manager') .
    "</button>";


    echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator). "_4th_checkbox\">";


    echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_chk_3 button" . "\" >"
    . esc_html__('Remove checkbox 4', 'custom-product-manager') .
"</button>";

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_checkbox_name_4',
        'label' => __('Option label 4 :', 'custom-product-manager'),
        'type' => 'text',
        'class' => 'required short',
        'placeholder' => __('Checkbox option label 4','custom-product-manager'),
    ]);


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_field_value_4',
        'label' => __('Option cost 4 :', 'custom-product-manager'),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Checkbox option cost 4','custom-product-manager'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";


    /* Select */

    echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_select_div>";


    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_select_no_option',
        'label' => __('Default text :', 'custom-product-manager'),
        'wrapper_class' => 'show_if_simple',
        'placeholder' => __('Write your select default text','custom-product-manager'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_sub_1_name',
        'label' => __('Option label 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 1','custom-product-manager'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_Sub_1_value',
        'label' => __('Option cost 1 :', 'custom-product-manager') . ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 1','custom-product-manager'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_sub_2_name',
        'label' => __('Option label 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
        'wrapper_class' => 'show_if_simple',
        'class' => 'required short',
        'placeholder' => __('Select option label 2','custom-product-manager'),
    ]);

    woocommerce_wp_text_input([
        'id' => esc_attr($option_identificator) . '_Sub_2_value',
        'label' => __('Option cost 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
        'type' => 'number',
        'class' => 'required short',
        'placeholder' => __('Select option cost 2','custom-product-manager'),
        'custom_attributes' => array(
            'step' => 'any',
            'min' => '0'
        )
    ]);


    ?>

    <div class="<?php echo esc_attr($option_identificator) . "_add_select";?>">

        <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_select button";?>">
        <?php esc_html_e('Add sub option', 'custom-product-manager');?>
        </button>

    </div>

    <div class="<?php echo esc_attr($option_identificator) . "_3rd_option";?>" style="display:none;">

  
        <?php


echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_select button" . "\" >"
. esc_html__('Remove select 3', 'custom-product-manager') .
"</button>";

        woocommerce_wp_text_input([
            'id' => esc_attr($option_identificator) . '_sub_3_name',
            'label' => __('Option label 3 :', 'custom-product-manager'),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Select option label 3','custom-product-manager'),
        ]);


        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_Sub_3_value',
            'label' => __('Option cost 3 :', 'custom-product-manager'),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Select option cost 3','custom-product-manager'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

  
   

        echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_select_2 button" . "\" >"
        . esc_html__('Add sub option', 'custom-product-manager') .
"</button>";


echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator). "_4th_option\">";


echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_select_2 button" . "\" >"
. esc_html__('Remove select 4', 'custom-product-manager') .
"</button>";

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_sub_4_name',
            'label' => __('Option label 4 :', 'custom-product-manager'),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Select option label 4','custom-product-manager'),
        ]);

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_Sub_4_value',
            'label' => __('Option cost 4 :', 'custom-product-manager'),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Select option cost 4','custom-product-manager'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

    
        echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_select_3 button" . "\" >"
        . esc_html__('Add sub option', 'custom-product-manager') .
        "</button>";
        

                echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator). "_5th_option\">";
        
             
                echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_select_3 button" . "\" >"
                . esc_html__('Remove select 5', 'custom-product-manager') .
                "</button>";
        
        
                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_sub_5_name',
                    'label' => __('Option label 5 :', 'custom-product-manager'),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Select option label 5','custom-product-manager'),
                ]);
        
        
                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_Sub_5_value',
                    'label' => __('Option cost 5 :', 'custom-product-manager'),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Select option cost 5','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);

           
                echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_select_4 button" . "\" >"
                . esc_html__('Add sub option', 'custom-product-manager') .
                "</button>";

                echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator). "_6th_option\">";

                 
                    echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_select_4 button" . "\" >"
                    . esc_html__('Remove select 6', 'custom-product-manager') .
                "</button>";


                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_sub_6_name',
                        'label' => __('Option label 6 :', 'custom-product-manager'),
                        'wrapper_class' => 'show_if_simple',
                        'class' => 'required short',
                        'placeholder' => __('Select option label 6','custom-product-manager'),
                    ]);


                    woocommerce_wp_text_input([
                        'id' =>  esc_attr($option_identificator) . '_Sub_6_value',
                        'label' => __('Option cost 6 :', 'custom-product-manager'),
                        'type' => 'number',
                        'class' => 'required short',
                        'placeholder' => __('Select option cost 6','custom-product-manager'),
                        'custom_attributes' => array(
                            'step' => 'any',
                            'min' => '0'
                        )
                    ]);

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";



        /*Radio*/

 echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_radio_div>";


        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_name_1',
            'label' => __('Option label 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Radio option label 1','custom-product-manager'),
        ]);


        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_value_1',
            'label' => __('Option cost 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Radio option cost 1','custom-product-manager'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_name_2',
            'label' => __('Option label 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
            'wrapper_class' => 'show_if_simple',
            'class' => 'required short',
            'placeholder' => __('Radio option label 2','custom-product-manager'),
        ]);


        woocommerce_wp_text_input([
            'id' =>  esc_attr($option_identificator) . '_radio_value_2',
            'label' => __('Option cost 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
            'type' => 'number',
            'class' => 'required short',
            'placeholder' => __('Radio option cost 2','custom-product-manager'),
            'custom_attributes' => array(
                'step' => 'any',
                'min' => '0'
            )
        ]);

        ?>


        <div class="<?php echo esc_attr($option_identificator) . "_add_radio"?>">

            <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_radio button"?>">
               <?php esc_html_e('Add new radio', 'custom-product-manager');?> 
            </button>

        </div>

        <div class="<?php echo esc_attr($option_identificator) . "_3rd_radio" ?>" style="display:none;">

            <?php


            echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_radio button" . "\" >"
            . esc_html__('Remove radio 3', 'custom-product-manager') .
"</button>";

            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_name_3',
                'label' => __('Option label 3 :', 'custom-product-manager'),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Radio option label 3','custom-product-manager'),
            ]);


            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_value_3',
                'label' => __('Option cost 3 :', 'custom-product-manager'),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Radio option cost 3','custom-product-manager'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);

   
            echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_add_radio_2 button" . "\" >"
            . esc_html__('Add new radio', 'custom-product-manager') .
            "</button>";

    
            echo "<div style=\"display:none;\" class=\"" . esc_attr($option_identificator). "_4th_option_radio\">";
            
            echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_radio_2 button" . "\" >"
            . esc_html__('Remove radio ', 'custom-product-manager') .
            "</button>";

            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_radio_name_4',
                'label' => __('Option label 4 :', 'custom-product-manager'),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Radio option label 4','custom-product-manager'),
            ]);

            woocommerce_wp_text_input([
                'id' =>  esc_attr($option_identificator) . '_radio_value_4',
                'label' => __('Option cost 4 :', 'custom-product-manager'),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Radio option cost 4','custom-product-manager'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);

            echo "</div>";
            echo "</div>";
            echo "</div>";


            /*Image Swap (Base on radio */

            echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_image_div>";

  

            if ($image = wp_get_attachment_image_src($image_id)) {

     

                echo '<p class="form-field"><label>Image ID 1</label> <a href="#"class="' .  esc_attr($option_identificator) . '_img-upl"><img src="' . esc_attr($image[0]) . '"></a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv">"' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" name="' .  esc_attr($option_identificator) . '_img_1" value="' . esc_attr($image_id) . '"  readonly></p>';
        } else {

                echo '<p class="form-field"><label for="op1_img_1">Image ID 1</label> <a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'custom-product-manager') .'</a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" placeholder="Upload image ID" name="' .  esc_attr($option_identificator) . '_img_1" value="' .esc_attr($img_1_id) .'" readonly></p>';
     
            }


            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_img_name_1',
                'type' => 'text',
                'label' => __('Option label 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Image option label 1','custom-product-manager'),
                'custom_attributes' => array(
                )
            ]);


            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_img_value_1',
                'label' => __('Option cost 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Image option cost 1','custom-product-manager'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);



            if ($image = wp_get_attachment_image_src($image_id)) {

                echo '<p class="form-field"><label>Image ID 2</label><a href="#"class="' .  esc_attr($option_identificator) . '_img-upl"><img src="' . esc_attr($image[0]) . '"/></a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" name="' .  esc_attr($option_identificator) . '_img_2 value="' . esc_attr($image_id) . '" readonly></p>';
            } else {
                echo '<p class="form-field"><label>Image ID 2</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'custom-product-manager') .'</a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" placeholder="Upload image ID"  name="' .  esc_attr($option_identificator) . '_img_2" value="' . esc_attr($img_2_id) . '" readonly></p>';
            }


            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_img_name_2',
                'label' => __('Option label 2', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                'wrapper_class' => 'show_if_simple',
                'class' => 'required short',
                'placeholder' => __('Image option label 2','custom-product-manager'),
            ]);


            woocommerce_wp_text_input([
                'id' => esc_attr($option_identificator) . '_img_value_2',
                'label' => __('Option cost 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                'type' => 'number',
                'class' => 'required short',
                'placeholder' => __('Image option cost 2 :','custom-product-manager'),
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0'
                )
            ]);

            ?>

            <div class="<?php echo esc_attr($option_identificator) . "_add_image" ?>";>

                <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_image button"?>">
                    <?php esc_html_e('Add new image', 'custom-product-manager') ?>
                </button>

            </div>

            <div class="<?php echo esc_attr($option_identificator) . "_3rd_img"?>" style="display:none;">

                <?php
            
             
                echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_image button" . "\" >" . esc_html__('Remove Image 3', 'custom-product-manager') . "</button>";


                if ($image = wp_get_attachment_image_src($image_id)) {

                    echo '<p class="form-field"><label>Image ID 3</label><a href="#"class="' .  esc_attr($option_identificator) . '_img-upl"><img src="' . esc_attr($image[0]) . '"/></a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" name="' .  esc_attr($option_identificator) . '_img_3" value="' . esc_attr($image_id) . '" readonly></p>';
                } else {
                    echo '<p class="form-field"><label>Image ID 3</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'custom-product-manager') .'</a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" placeholder="Upload image ID"  name="' .  esc_attr($option_identificator) . '_img_3" value="' . esc_attr($img_3_id) . '" readonly></p>';
                }


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_img_name_3',
                    'label' => __('Option label 3', 'custom-product-manager'),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Image option label 3','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_img_value_3',
                    'label' => __('Option cost 3', 'custom-product-manager'),
                    'type' => 'number',
                    'placeholder' => __('Image option cost 3','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);
        
            ?>

            <div class="<?php echo esc_attr($option_identificator) . "_add_image_2"?>">

                <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_image_2 button"?>">
                    <?php esc_html_e('Add new image', 'custom-product-manager')?>
                </button>

            </div>

            <div class="<?php echo esc_attr($option_identificator) . "_4th_img"?>" style="display:none;">

                <?php

  
      
                echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_remove_image_2 button" . "\">" .esc_html__('Remove Image 4', 'custom-product-manager') . "</button>";

                if ($image = wp_get_attachment_image_src($image_id)) {

                    echo '<p class="form-field"><label>Image ID 4</label><a href="#"class="' .  esc_attr($option_identificator) . '_img-upl"><img src="' . esc_attr($image[0]) . '"/></a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" name="' .  esc_attr($option_identificator) . '_img_4" value="' . esc_attr($image_id) . '" readonly></p>';
                } else {
                    echo '<p class="form-field"><label>Image ID 4</label><a href="#" class="' .  esc_attr($option_identificator) . '_img-upl" style="margin-left:5px;">' . esc_html__('Upload image', 'custom-product-manager') .'</a>
	      <a href="#" class="' .  esc_attr($option_identificator) . '_img-rmv" style="display:none;margin-left:5px;">' . esc_html__('Remove image', 'custom-product-manager') .'</a>
	      <input type="text" class="required short" placeholder="Upload image id"  name="' .  esc_attr($option_identificator) . '_img_4" value="' . esc_attr($img_4_id) . '" readonly></p>';
                }


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_img_name_4',
                    'label' => __('Option label 4 :', 'custom-product-manager'),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Image option label 4','custom-product-manager'),
                ]);

                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_img_value_4',
                    'label' => __('Option cost 4 :', 'custom-product-manager'),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Image option cost 4','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                echo "</div>";
                echo "</div>";
                echo "</div>";


                // Button Swap 

                echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_button_swap_div>";
               
                woocommerce_wp_select([
                    'id' => esc_attr($option_identificator) . '_btnswap_number',
                    'label' => __('Buttons number :', 'custom-product-manager'),
                    'style' => 'background-color:#f7f7f7;',
                    'placeholder' => __('Number of displayed buttons','custom-product-manager'),
                    'options' => array(
                        '' => '3',
                        '1' => '4',
                        '2' => '5',
                        '3' => '6',
                    )
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_name_1',
                    'label' => __('Option label 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 1','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_value_1',
                    'label' => __('Option cost 1 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 1','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);

                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_btnswap_name_2',
                    'label' => __('Option label 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 2','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_value_2',
                    'label' => __('Option cost 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 2','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_name_3',
                    'label' => __('Option label 3 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 3','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_value_3',
                    'label' => __('Option cost 3 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 3','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);

         
               
                echo "<div style=\"display:none;\" class=\"".esc_attr($option_identificator) . "_button_swap_4" . "\">";

                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_name_4',
                    'label' => __('Option label 4 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 4','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_value_4',
                    'label' => __('Option cost 4 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 4','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                echo "</div>";
             

                echo "<div style=\"display:none;\" class=\"".esc_attr($option_identificator) . "_button_swap_5" . "\">";

                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_name_5',
                    'label' => __('Option label 5 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 5','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_btnswap_value_5',
                    'label' => __('Option cost 5 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 5','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                echo "</div>";

             
                echo "<div style=\"display:none;\" class=\"".esc_attr($option_identificator) . "_button_swap_6" . "\">";
               

                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_name_6',
                    'label' => __('Option label 6 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'wrapper_class' => 'show_if_simple',
                    'class' => 'required short',
                    'placeholder' => __('Button option label 6','custom-product-manager'),
                ]);


                woocommerce_wp_text_input([
                    'id' =>  esc_attr($option_identificator) . '_btnswap_value_6',
                    'label' => __('Option cost 6 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Button option cost 6','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);



                echo "</div>";
                echo "</div>";


                /* Color input */

                echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_color_div>";

                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_color_extra_value',
                    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'number',
                    'class' => 'required short',
                    'placeholder' => __('Color option cost','custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                echo "</div>";


                /* Calculation div */

                echo "<div style=\"display:none;\" class=". esc_attr($option_identificator). "_calculation_div>";
 

                woocommerce_wp_textarea_input([
                    'id' => esc_attr($option_identificator) . '_calcul_formula',
                    'label' => __('Calcul formula', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                    'type' => 'text',
                    'class' => 'required short',
                    'placeholder' => '($user_value * 0.1) + ((4/2)-1)',
                    'description' => wp_kses($calcul_help_tip, $allowed_html_tags),
                ]);

                echo "<p class=\"form-field\">
                <label>" . esc_html__('Information :', 'custom-product-manager') . "</label><span class=\"short cpm_info_field\">'<strong>\$user_value</strong>' " . esc_html__('is required in the calcul formula and refers to the value gived by the customer on the product page.', 'custom-product-manager') .
                "</span>
                </p>";


                 echo "<p class=\"form-field\">
                 <label>" . esc_html__('Example :', 'custom-product-manager') . "</label>
                 <span class=\"short cpm_info_field\"><strong>(\$user_value * 0.1) + 10  </strong><br>" .
                 esc_html__('In this case, if user write 100, 20 will be dynamically added to price ((100 * 0.1) + 10). 
                 If product initial regular price was 30$, his new price is 50$.', 'custom-product-manager') .
                 "</span>
                 </p>";


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_calcul_number_min_value',
                    'label' => __('Number min value: ', 'custom-product-manager'),
                    'type' => 'number',
                    'placeholder' => '0',
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);

                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_calcul_number_max_value',
                    'label' => __('Number max value : ', 'custom-product-manager'),
                    'type' => 'number',
                    'placeholder' =>__('no limit', 'custom-product-manager'),
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);


                woocommerce_wp_text_input([
                    'id' => esc_attr($option_identificator) . '_calcul_number_step_value',
                    'label' => __('Number step value : ', 'custom-product-manager'),
                    'type' => 'number',
                    'placeholder' => '0.1',
                    'custom_attributes' => array(
                        'step' => 'any',
                        'min' => '0'
                    )
                ]);

                ?>

                <div class="<?php echo esc_attr($option_identificator) . "_add_calcul"?>">

                    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_calcul button"?>">
                        <?php esc_html_e('Add new calcul input', 'custom-product-manager');?>
                    </button>

                </div>
             
                <div class="<?php echo esc_attr($option_identificator) . "_2nd_calcul"?>" style="display:none;">

                    <?php


                    echo "<button type=\"button\" style=\"margin-bottom:10px\"  class=\"".esc_attr($option_identificator) . "_remove_calcul button" . "\" >"
                    . esc_html__('Remove second input', 'custom-product-manager') .
                   "</button>";

                    echo "<p class=\"form-field\">
                    <label>" . esc_html__('Information :', 'custom-product-manager') . "</label><span class=\"short cpm_info_field\"><strong>\$second_user_value</strong> "  .esc_html__('is now required in the calcul formula.', 'custom-product-manager') .
                    "</span>
                    </p>";

                    echo "<p class=\"form-field\">
                    <label>" . esc_html__('Example :', 'custom-product-manager') . "</label>
                    <span class=\"short cpm_info_field\"><strong>(\$user_value * \$second_user_value) + 10</strong><br>" .
                    esc_html__('In this case, if user write 3 and 4, 22 will be dynamically added to price ((3 * 4) + 10).
                    If product initial regular price was 30$, his new price is 52$.', 'custom-product-manager') .
                    "</span>
                    </p>";


                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) .'_calcul_label_2',
                        'label' => __('Input label 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                        'type' => 'text',
                        'class' => 'required short',
                        'placeholder' => 'Second input option label',
                    ]);

                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) .'_calcul_description_2',
                        'label' => __('Input description 2 :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
                        'type' => 'text',
                        'class' => 'required short',
                        'placeholder' => __('Second input description', 'custom-product-manager'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) .'_input_calcul_helptip_2',
                        'label' => __('Description helptip 2 :', 'custom-product-manager'),
                        'type' => 'text',
                        'placeholder' => __('Second input helptip', 'custom-product-manager'),
                    ]);

                    woocommerce_wp_text_input([
                        'id' => esc_attr($option_identificator) . '_input_placeholder_2',
                        'label' => __('Input placeholder 2 :', 'custom-product-manager'),
                        'type' => 'text',
                        'placeholder' => __('Second input placeholder', 'custom-product-manager'),
                    ]);


                    echo "</div>";
                    echo "</div>";


                    

/* Upload div */

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ) . "_upload_div>";

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_upload_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'placeholder' => __('Upload option cost','custom-product-manager'),
    'class' => 'required short',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) .'_upload_max_size',
    'label' => __('Upload max size : ', 'custom-product-manager'),
    'placeholder' => esc_attr(ini_get("upload_max_filesize")),
    'type' => 'number',
    'description' => wp_kses(__($upload_help_tip, 'custom-product-manager'), $allowed_html_tags),
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0',
    )
]);

?>

<div class="<?php echo esc_attr($option_identificator) . "_add_upload_restriction"?>">

    <button type="button" class="<?php echo esc_attr($option_identificator) . "_add_upload_restriction button"?>">
       <?php esc_html_e('Set file types restriction', 'custom-product-manager') ?> 
    </button> 

</div>

<div class="<?php echo esc_attr($option_identificator) . "_upload_restriction"?>" style="display:none;">

    <?php


echo "<button type=\"button\" class=\"".esc_attr($option_identificator) . "_close_restriction button" . "\" >"
.esc_html__('Close', 'custom-product-manager') . "&hairsp;<i class=\"fa-solid fa-close\"></i>
</button>";

echo "<div class=\"file_types_chk\">";

echo "<button type=\"button\" class=\"_check_all button\">"
. esc_html__('Toggle all mimes types', 'custom-product-manager') .
"</button>";


$mimes_types = get_allowed_mime_types();


/*esc_html(count($mimes_types)) */
echo "<p class=\"form-field\">
<label>" .esc_html__('Information :', 'custom-product-manager') . "</label>
<span class=\"short cpm_info_field\">" .
esc_html__('Check / uncheck to allow / disallow corresponding file type and restrict upload. By default, these 100 file mime types are disallowed. At least one type allowed is required.', 'custom-product-manager')  .
"</span>
</p>";



foreach($mimes_types as $regex => $mime_types) {

    $product_mimes_types = $product->get_meta($option_identificator ."_".$mime_types);


    if($mime_types === "image/jpeg") {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Image', 'custom-product-manager') ."</label></p>";}
    if($mime_types === "video/x-ms-asf") {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Video', 'custom-product-manager') ."</label></p>";}
    if($mime_types === "text/plain") {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Text', 'custom-product-manager') ."</label></p>";}
    if($mime_types === "audio/mpeg") {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Audio', 'custom-product-manager') ."</label></p>";}
    if($mime_types === "application/rtf") {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">" .esc_html__('Application', 'custom-product-manager') ."</label></p>";}
    if($mime_types === "font/ttf" ) {echo "<p class=\"form-field\"><label style=\"font-weight:bold;\">Plugin extra type</label></p>";}

    
    woocommerce_wp_checkbox([
        'class' => esc_attr($option_identificator) . '_mimes_checkboxes',
        'name' => esc_attr($option_identificator) . '_mimes_types[]',
        'label' => __(substr($regex,0,10) . ' : ', 'custom-product-manager'),
        'description' => esc_attr(__($mime_types, 'custom-product-manager')),
        //if cbvalue === value => checkbox checked
        'cbvalue' => esc_attr(__($mime_types, 'custom-product-manager')),
        'value' => esc_attr(__($product_mimes_types, 'custom-product-manager')),
    ]);
};


echo "</div>";
echo "</div>";
echo "</div>";



/* Phone */

echo "<div style=\"display:none;\" class=". esc_attr($option_identificator ). "_phone_div>";


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_phone_extra_value',
    'label' => __('Option cost :', 'custom-product-manager'). ' ' . wp_kses('<span style="color:red">*</span> :', $allowed_html_tags),
    'type' => 'number',
    'placeholder' => __('Phone option cost','custom-product-manager'),
    'class' => 'required short',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);


woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_phone_minlength',
    'label' => __('Phone min length: ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '7',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

woocommerce_wp_text_input([
    'id' => esc_attr($option_identificator) . '_phone_maxlength',
    'label' => __('Phone max length : ', 'custom-product-manager'),
    'type' => 'number',
    'placeholder' => '30',
    'custom_attributes' => array(
        'step' => 'any',
        'min' => '0'
    )
]);

?>



<div class="<?php echo esc_attr($option_identificator) . "_national_phone"?>">

<?php

require_once ABSPATH . '/wp-content/plugins/' . $this->plugin_name . '/public/data/country-code-array.php';

$choose_national_code = $product->get_meta($option_identificator. '_national_code');


foreach($countryArray as $index => $value) {
    $admin_country[$index] = ucfirst(strtolower($value['name'])) . ' +' . $value['code'];
};


if($choose_national_code === "") {

    $admin_country[null] = __('Select default country', 'custom-product-manager');

woocommerce_wp_select([
    'id' => esc_attr($option_identificator). '_national_code',
    'label' => __('Dialling code:', 'custom-product-manager'),
    'class' => 'required short',
    //'cbvalue' => $choose_national_code,
    'value' => esc_attr($admin_country['index']),
    'options' => array_map('esc_attr', $admin_country),
]);

} else {
    woocommerce_wp_select([
        'id' => esc_attr($option_identificator). '_national_code',
        'label' => __('Dialling code:', 'custom-product-manager'),
        'class' => 'required short',
        //'cbvalue' => $choose_national_code,
        'value' => esc_attr($choose_national_code),
        'options' => array_map('esc_attr', $admin_country),
    ]);
};

echo "</div>";
echo "</div>";

?>
                  <div id="<?php echo esc_attr($option_identificator) . "_validation_message";?>"></div>
              
                   <div class="admin_save_delete_button_div">


                    <div class="save_delete_container cpm_save">
                    <span class="save_delete_icons"><i class="fa-solid fa-floppy-disk"></i></span>
                    <button type="submit" class="save_button" id="<?php echo esc_attr($option_identificator) . "_option_submit";?>" 
                    name="<?php echo esc_attr($option_identificator) . "_option_submit";?>" value="Save and display option"><?php esc_html_e('Save and display', 'custom-product-manager')?><?php echo ' ' . esc_html(strtolower($option_number));?>
                    </button>
                    </div>

                    <div class="save_delete_container cpm_delete">
                    <span class="save_delete_icons"><i class="fa-solid fa-trash-arrow-up"></i></span>
                    <button type="submit" class="remove_button"  value="Remove option" id="<?php echo esc_attr($option_identificator) . "_delete-submit";?>"
                    name="<?php echo esc_attr($option_identificator) . "_delete-submit";?>"><?php esc_html_e('Remove', 'custom-product-manager')?><?php echo ' ' . esc_html(strtolower($option_number));?>
                    </button>


                    </div>


    </div>

         

           

