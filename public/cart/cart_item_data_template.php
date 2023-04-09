<?php 

   use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

/* 
   Add option to price if option choose
*/

    $product = wc_get_product( $product_id );
    $price = $product->get_price();

    $optionValue = $product->get_meta($option_identificator.'_field_value');
    $optionValue_2 = $product->get_meta($option_identificator.'_field_value_2');
    $optionValue_3 = $product->get_meta($option_identificator.'_field_value_3');
    $optionValue_4 = $product->get_meta($option_identificator.'_field_value_4');
    $selectedOptionValueCart =  sanitize_text_field($_POST[$option_identificator.'_select_input']);
    $textExtraValue = $product->get_meta($option_identificator.'_text_input_extra_value');
    $text_area_extra = $product->get_meta($option_identificator.'_text_area_extra_value');
    $number_extra_value = $product->get_meta($option_identificator.'_number_input_extra_value');
    $url_extra_value = $product->get_meta($option_identificator.'_url_extra_value');
    $radioButtonValue =  sanitize_text_field($_POST[$option_identificator.'_radio_value']);
    $imgValue =  sanitize_text_field($_POST[$option_identificator.'_img_radio']);
    $emailValue = $product->get_meta($option_identificator.'_email_extra_value');
    $btnValue =  sanitize_text_field($_POST[$option_identificator.'_btn_radio']);
    $colorExtraValue = $product->get_meta($option_identificator.'_color_extra_value');
    $chooseColor = sanitize_hex_color($_POST[$option_identificator.'_color_custom_field']);
    $calculFormula = $product->get_meta($option_identificator.'_calcul_formula');
    $upload_charge = $product->get_meta($option_identificator.'_upload_value');
    $phone_charge = $product->get_meta($option_identificator.'_phone_extra_value');



    if(!empty($_FILES[$option_identificator.'_upload_input']['name'])) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {   
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($upload_charge); }
            else {$cart_item_data['new_price'] = floatval($price) + floatval($upload_charge);}

        $cart_item_data[$option_identificator.'_file_name'] = sanitize_file_name($_FILES[$option_identificator.'_upload_input']['name']);
        $file_type = $_FILES[$option_identificator.'_upload_input']['type'];
        
        /* used for display image in cart -- if is image */
        if(str_contains($file_type, 'image')) 
         {$cart_item_data[$option_identificator.'_file_is_image'] = true;} 
         else {$cart_item_data[$option_identificator.'_file_is_image'] = false;};
    } 

    if(!empty($_POST[$option_identificator.'_text_input'] && isset($_POST[$option_identificator.'_text_input'])) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {   
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($textExtraValue); }
        else {$cart_item_data['new_price'] = floatval($price) + floatval($textExtraValue);}
        $cart_item_data[$option_identificator.'_check_text'] = sanitize_text_field($_POST[$option_identificator.'_text_input']);
    } 
    
    
    if( !empty($_POST[$option_identificator.'_select_input'])) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {  
            $cart_item_data['new_price'] =  $cart_item_data['new_price']  + floatval($selectedOptionValueCart);  }
        else {
        $cart_item_data['new_price'] = floatval($price) + floatval($selectedOptionValueCart);}
        $cart_item_data[$option_identificator.'_selected_option'] = floatval($selectedOptionValueCart);
        $cart_item_data[$option_identificator.'_selected_index'] = absint($_POST[$option_identificator.'_selector_index']);
    } 




    if( !empty($_POST[$option_identificator.'_number_custom_field'] && !($_POST[$option_identificator.'_number_custom_field'] == " ")) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) { 
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($number_extra_value);  }
        else {
        $cart_item_data['new_price'] = floatval($price) + floatval($number_extra_value);}
        $cart_item_data[$option_identificator.'_custom_number'] = sanitize_text_field($_POST[$option_identificator.'_number_custom_field']);
    } 


    if( !empty($_POST[$option_identificator.'_text_area_input'] && !($_POST[$option_identificator.'_text_area_input'] == " ")) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {  
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($text_area_extra); } else {
            $cart_item_data['new_price'] = floatval($price) + floatval($text_area_extra);
        }
     
        $cart_item_data[$option_identificator.'_textarea_content'] = sanitize_textarea_field($_POST[$option_identificator.'_text_area_input']);
    } 


    if( !empty($_POST[$option_identificator.'_email_field'] && !($_POST[$option_identificator.'_email_field'] == " ")) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {  
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($emailValue); }
        else {  $cart_item_data['new_price'] = floatval($price) + floatval($emailValue);}
    
        $cart_item_data[$option_identificator.'_email_content'] = sanitize_email($_POST[$option_identificator.'_email_field']);

    } 

    if( !empty($_POST[$option_identificator.'_url_field'] && !($_POST[$option_identificator.'_url_field'] == " ")) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($url_extra_value); }
        else {    $cart_item_data['new_price'] = floatval($price) + floatval($url_extra_value);}
        $cart_item_data[$option_identificator.'_choose_url'] = sanitize_url($_POST[$option_identificator.'_url_field']);
    } 


    if($_POST[$option_identificator.'_radio_value']!="")
     {
        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {
            $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($radioButtonValue); }
        else { $cart_item_data['new_price'] = floatval($price) + floatval($radioButtonValue);}
        $cart_item_data[$option_identificator.'_radio'] =  floatval($radioButtonValue);
        $cart_item_data[$option_identificator.'_radio_index'] = absint($_POST[$option_identificator.'_radio_indexer']);
    }


    if($_POST[$option_identificator.'_img_radio']!="")
     {
        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {
            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($imgValue);}
        else { $cart_item_data['new_price'] = floatval($price) + floatval($imgValue);}
        $cart_item_data[$option_identificator.'_img_val'] =  floatval($imgValue);
        $cart_item_data[$option_identificator.'_img_index'] = absint($_POST[$option_identificator.'_img_indexer']);
    }

   
    if($_POST[$option_identificator.'_btn_radio']!="")
     {
        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {
            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($btnValue);} 
            else {
            $cart_item_data['new_price'] = floatval($price) + floatval($btnValue);}
        $cart_item_data[$option_identificator.'_btn_val'] =  floatval($btnValue);
        $cart_item_data[$option_identificator.'_btn_index'] = absint($_POST[$option_identificator.'_btn_indexer']);
    }


    if( !empty($_POST[$option_identificator.'_color_custom_field'] && !($_POST[$option_identificator.'_color_custom_field'] == "#a4a4a4")) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {
            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($colorExtraValue);} 
            else {
            $cart_item_data['new_price'] = floatval($price) + floatval($colorExtraValue); }
        $cart_item_data[$option_identificator.'_choose_color'] = sanitize_hex_color($_POST[$option_identificator.'_color_custom_field']);
    } 

    if(!empty($_POST[$option_identificator.'_phone_post']) && isset($_POST[$option_identificator.'_phone_post']) ) {

        $cart_item_data['old_price'] = floatval($price);
        if($cart_item_data['new_price']) {   
        $cart_item_data['new_price'] = $cart_item_data['new_price']  + floatval($phone_charge); }
        else {$cart_item_data['new_price'] = floatval($price) + floatval($phone_charge);}
        $cart_item_data[$option_identificator.'_phone_number'] = sanitize_text_field($_POST[$option_identificator.'_phone_input']);
    } 


    if( !empty($_POST[$option_identificator.'_calcul_number_custom_field'] && !($_POST[$option_identificator.'_calcul_number_custom_field'] == " ")) ) {


        $cart_item_data['old_price'] = floatval($price);

        $user_value = sanitize_text_field($_POST[$option_identificator.'_calcul_number_custom_field']);
        $user_value_2 = sanitize_text_field($_POST[$option_identificator.'_calcul_number_custom_field_2']);

        $cart_item_data[$option_identificator.'_custom_calcul_value'] = $user_value;
        $cart_item_data[$option_identificator.'_custom_calcul_value_2'] = $user_value_2;

        $result_operation  = str_ireplace('$user_value', $user_value, $calculFormula);

        if($user_value_2) {
        $str = ['$user_value','$second_user_value'];
        $rplc =[$user_value, $user_value_2];
        $result_operation  = str_ireplace($str, $rplc, $calculFormula);
        }

        /* Use of Symfony ExpressionLanguage because eval() function disallowed */
        
        $expressionLanguage = new ExpressionLanguage();
        $result = $expressionLanguage->evaluate($result_operation); 
       
        $cart_item_data[$option_identificator.'_result'] = floatval($result);
        if ($cart_item_data['new_price']) {
            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($result);
        } else {
            $cart_item_data['new_price'] = floatval($price) + floatval($result);
        }

    } 

    
// checkbox 1
if (!empty($_POST[$option_identificator.'_checkbox'])) {

    $cart_item_data['old_price'] = floatval($price);
    $cart_item_data[$option_identificator.'_check1'] = absint($_POST[$option_identificator.'_checkbox']);

    if ($cart_item_data['new_price']) {
        $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue);
    } else {
        $cart_item_data['new_price'] = floatval($price) + floatval($optionValue);
    }

                    if (!empty($_POST[$option_identificator.'_checkbox_2'])) {

                        $cart_item_data[$option_identificator.'_check2'] = absint($_POST[$option_identificator.'_checkbox_2']);
                        $cart_item_data['old_price'] = floatval($price);
                       
                        if ($cart_item_data['new_price']) {
                            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_2);
                        } else {
                            $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2);
                        }
                    }

                    if (!empty($_POST[$option_identificator.'_checkbox_3'])) {

                        $cart_item_data[$option_identificator.'_check3'] = absint($_POST[$option_identificator.'_checkbox_3']);
                        $cart_item_data['old_price'] = floatval($price);

                        if ($cart_item_data['new_price']) {
                            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
                        } else {
                            $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2) + floatval($optionValue_3);
                        }
                    }

                    if(! empty( $_POST[$option_identificator.'_checkbox_4'])) {   

                        $cart_item_data[$option_identificator.'_check4'] = absint($_POST[$option_identificator.'_checkbox_4']);
                        $cart_item_data['old_price'] = floatval($price);

                        if($cart_item_data['new_price']) {
                            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                            } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue) + floatval($optionValue_2) + floatval($optionValue_3) + floatval($optionValue_4);
                    }
                }
 }

              
// checkbox 2
else if( ! empty( $_POST[$option_identificator.'_checkbox_2'] ) ) {    

    $cart_item_data[$option_identificator.'_check2'] = absint($_POST[$option_identificator.'_checkbox_2']);
    $cart_item_data['old_price'] = floatval($price);
                                        
    if($cart_item_data['new_price']) {
        $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_2);
        } else {
$cart_item_data['new_price'] = floatval($price) + floatval($optionValue_2);
                }

                        if(! empty( $_POST[$option_identificator.'_checkbox_3'])) {   

                            $cart_item_data[$option_identificator.'_check3'] = absint($_POST[$option_identificator.'_checkbox_3']);
                            $cart_item_data['old_price'] = floatval($price);

                            if($cart_item_data['new_price']) {
                                $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
                                } else {
                        $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_2) + floatval($optionValue_3);
                        }
                    }

                    if(! empty( $_POST[$option_identificator.'_checkbox_4'])) {   

                        $cart_item_data[$option_identificator.'_check4'] = absint($_POST[$option_identificator.'_checkbox_4']);
                        $cart_item_data['old_price'] = floatval($price);
    
                        if($cart_item_data['new_price']) {
                            $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                            } else {
                    $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4) + floatval($optionValue_2) + floatval($optionValue_3);
                    }
    
                }

            }


// checkbox 3
else if (!empty($_POST[$option_identificator.'_checkbox_3'])) {

    $cart_item_data[$option_identificator.'_check3'] = absint($_POST[$option_identificator.'_checkbox_3']);
    $cart_item_data['old_price'] = floatval($price);

    if ($cart_item_data['new_price']) {
        $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_3);
    } else {
        $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_3);
    }


                if (!empty($_POST[$option_identificator.'_checkbox_4'])) {
                    $cart_item_data[$option_identificator.'_check4'] = absint($_POST[$option_identificator.'_checkbox_4']);
                    $cart_item_data['old_price'] = floatval($price);

                    if ($cart_item_data['new_price']) {
                        $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
                    } else {
                        $cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4) + floatval($optionValue_3);
                    }
                }
}

//checkbox 4
else if( ! empty( $_POST[$option_identificator.'_checkbox_4'] ) ) {   
    $cart_item_data[$option_identificator.'_check4'] = absint($_POST[$option_identificator.'_checkbox_4']);
    $cart_item_data['old_price'] = floatval($price);

    if($cart_item_data['new_price']) {
        $cart_item_data['new_price'] = $cart_item_data['new_price'] + floatval($optionValue_4);
        } else {
$cart_item_data['new_price'] = floatval($price) + floatval($optionValue_4);
                }

}





