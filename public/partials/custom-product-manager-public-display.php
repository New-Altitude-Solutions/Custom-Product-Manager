<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/New-Altitude-Solutions 
 * @since      1.0.0
 *
 * @package    Custom_Product_Manager
 * @subpackage Custom_Product_Manager/public/partials
 */

                /**
                 * 
                 *  Display options fields on product page before add to cart button
                 * 
                 */
                

echo "<div class=\"cpm_form\">";

$option_identificator = ["op1", "op2"];
$active_option = 0;

foreach($option_identificator as $index => $value) {

    echo "<div class=\"cpm_form_fields\">";

            $option_identificator = $value;

            require plugin_dir_path( __FILE__ ) . 'display_options/display_template.php';
            
            if($product->get_meta($option_identificator . '_field_type')) {

                $active_option++;

            } 
 
}

            if($active_option > 0) {
                
                ?>

            <div class="woo_quantity_new_input">

            <fieldset>
            <legend for="get_woo_quantity_input"><?php esc_html_e('Quantity', 'custom-product-manager'); ?></legend>

            <div class="wpcb_input_container">

            <input type="number" id="get_woo_quantity_input" class="wpcb_icon_inputs" placeholder="<?php esc_html_e('Quantity', 'custom-product-manager'); ?>" name="quantity" value="1" min="1" step="1">
            </div>
     

            </fieldset>
        
            </div>

            <?php 

            };

echo "</div>";