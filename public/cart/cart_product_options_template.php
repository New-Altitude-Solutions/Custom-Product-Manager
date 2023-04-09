<?php
$_product = $cart_item['data'];
 $checker = $cart_item['new_price'];

 $quantity = $cart_item['quantity'];
 $currency = get_woocommerce_currency_symbol();

 $currency_pos = get_option('woocommerce_currency_pos');

 $optionName = $_product->get_meta($option_identificator.'_option_name', true );

 $checkName_1 = $_product->get_meta($option_identificator.'_checkbox_name');
 $checkName_2 = $_product->get_meta($option_identificator.'_checkbox_name_2');
 $checkName_3 = $_product->get_meta($option_identificator.'_checkbox_name_3');
 $checkName_4 = $_product->get_meta($option_identificator.'_checkbox_name_4');
 $checkboxVal_1 = $_product->get_meta($option_identificator.'_field_value');
 $checkboxVal_2 = $_product->get_meta($option_identificator.'_field_value_2');
 $checkboxVal_3 = $_product->get_meta($option_identificator.'_field_value_3');
 $checkboxVal_4 = $_product->get_meta($option_identificator.'_field_value_4');

 $checkboxPost = $cart_item[$option_identificator.'_check1'];
 $checkboxPost_2 = $cart_item[$option_identificator.'_check2'];
 $checkboxPost_3 = $cart_item[$option_identificator.'_check3'];
 $checkboxPost_4 = $cart_item[$option_identificator.'_check4'];

 $textInputExtraValue = $_product->get_meta($option_identificator.'_text_input_extra_value');
 $checkTest =  $cart_item[$option_identificator.'_check_text'];

 $urlExtraValue = $_product->get_meta($option_identificator.'_url_extra_value');
 $choose_url =  $cart_item[$option_identificator.'_choose_url'];
 
     $textAreaExtraValue = $_product->get_meta($option_identificator.'_text_area_extra_value');
     $textAreaContent =  $cart_item[$option_identificator.'_textarea_content'];

     $number_extra_value = $_product->get_meta($option_identificator.'_number_input_extra_value');
     $custom_number =  $cart_item[$option_identificator.'_custom_number'];

     $email_value = $_product->get_meta($option_identificator.'_email_extra_value');
     $email_content = $cart_item[$option_identificator.'_email_content'];

 $selectedOption1Value= $_product->get_meta($option_identificator.'_Sub_1_value');
 $selectedOption2Value= $_product->get_meta($option_identificator.'_Sub_2_value');
 $selectedOption3Value= $_product->get_meta( $option_identificator.'_Sub_3_value');
 $selectedOption4Value= $_product->get_meta( $option_identificator.'_Sub_4_value');
 $selectedOption5Value= $_product->get_meta( $option_identificator.'_Sub_5_value');
 $selectedOption6Value= $_product->get_meta( $option_identificator.'_Sub_6_value');

 $selectOptName1 = $_product->get_meta($option_identificator.'_sub_1_name');
 $selectOptName2 = $_product->get_meta($option_identificator.'_sub_2_name');
 $selectOptName3 = $_product->get_meta( $option_identificator.'_sub_3_name');
 $selectOptName4 = $_product->get_meta( $option_identificator.'_sub_4_name');
 $selectOptName5 = $_product->get_meta( $option_identificator.'_sub_5_name');
 $selectOptName6 = $_product->get_meta( $option_identificator.'_sub_6_name');

 $selectOption = $cart_item[$option_identificator.'_selected_option'];
 $selected_index = $cart_item[$option_identificator.'_selected_index'];

 $radioButtonValue = $cart_item[$option_identificator.'_radio'];
 $radioValue_1 = $_product->get_meta( $option_identificator.'_radio_value_1');
 $radioValue_2 = $_product->get_meta( $option_identificator.'_radio_value_2');
 $radioValue_3 = $_product->get_meta( $option_identificator.'_radio_value_3');
 $radioValue_4 = $_product->get_meta( $option_identificator.'_radio_value_4');
 $radioName1 = $_product->get_meta( $option_identificator.'_radio_name_1');
 $radioName2 = $_product->get_meta( $option_identificator.'_radio_name_2');
 $radioName3 = $_product->get_meta( $option_identificator.'_radio_name_3');
 $radioName4 = $_product->get_meta( $option_identificator.'_radio_name_4');

 $radio_index = $cart_item[$option_identificator.'_radio_index'];

 $imgValue = $cart_item[$option_identificator.'_img_val'];

 $imgValue_1 = $_product->get_meta( $option_identificator.'_img_value_1');
 $imgValue_2 = $_product->get_meta( $option_identificator.'_img_value_2');
 $imgValue_3 = $_product->get_meta( $option_identificator.'_img_value_3');
 $imgValue_4 = $_product->get_meta( $option_identificator.'_img_value_4');

 $imgName1 = $_product->get_meta( $option_identificator.'_img_name_1');
 $imgName2 = $_product->get_meta( $option_identificator.'_img_name_2');
 $imgName3 = $_product->get_meta( $option_identificator.'_img_name_3');
 $imgName4 = $_product->get_meta( $option_identificator.'_img_name_4');

 $img_index = $cart_item[$option_identificator.'_img_index'];

 $img_1_id = $_product->get_meta($option_identificator.'_img_1');
 $img_2_id = $_product->get_meta($option_identificator.'_img_2');
 $img_3_id = $_product->get_meta($option_identificator.'_img_3');
 $img_4_id = $_product->get_meta($option_identificator.'_img_4');

 $btnValue = $cart_item[$option_identificator.'_btn_val'];

 $btnValue_1 = $_product->get_meta( $option_identificator.'_btnswap_value_1');
 $btnValue_2 = $_product->get_meta( $option_identificator.'_btnswap_value_2');
 $btnValue_3 = $_product->get_meta( $option_identificator.'_btnswap_value_3');
 $btnValue_4 = $_product->get_meta( $option_identificator.'_btnswap_value_4');
 $btnValue_5 = $_product->get_meta( $option_identificator.'_btnswap_value_5');
 $btnValue_6 = $_product->get_meta( $option_identificator.'_btnswap_value_6');

 $btnName1 = $_product->get_meta( $option_identificator.'_btnswap_name_1');
 $btnName2 = $_product->get_meta( $option_identificator.'_btnswap_name_2');
 $btnName3 = $_product->get_meta( $option_identificator.'_btnswap_name_3');
 $btnName4 = $_product->get_meta( $option_identificator.'_btnswap_name_4');
 $btnName5 = $_product->get_meta( $option_identificator.'_btnswap_name_5');
 $btnName6 = $_product->get_meta( $option_identificator.'_btnswap_name_6');

 $btn_index = $cart_item[$option_identificator.'_btn_index'];

 $chooseColor = $cart_item[$option_identificator.'_choose_color'];
 $color_option_cost = $_product->get_meta( $option_identificator.'_color_extra_value');

 $calculValue = $cart_item[$option_identificator.'_custom_calcul_value'];
 $calculValue_2 = $cart_item[$option_identificator.'_custom_calcul_value_2'];
 $calcul_result = $cart_item[$option_identificator.'_result'];

 $calcul_label_2 = $_product->get_meta($option_identificator.'_calcul_label_2');

 $upload_value = $_product->get_meta($option_identificator.'_upload_value');
 $upload_file_name = $cart_item[$option_identificator.'_file_name'];
 $file_upload_is_image = $cart_item[$option_identificator.'_file_is_image'];
 $upload_dir = wp_upload_dir(); 
 $file_path = $upload_dir['url'] .'/' . 'front-uploads' . '/';

 $phone_number = $cart_item[$option_identificator.'_phone_number'];
 $phone_value = $_product->get_meta($option_identificator.'_phone_extra_value');

$opt_number = preg_replace('~\D~', '', $option_identificator);



 if($checker) {   

    if($checkboxPost=="1") {

        //checkbox1
          
             $title = $title. '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' ' . esc_html($opt_number) . '</h3><div><table class="product_options">
       
             <tr>
                <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
             <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
             <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
             </tr>
             <tr>
               <td>' . esc_html($optionName) . '</td>
               <td>' .esc_html($checkName_1) . '</td>
               <td>' . ($checkboxVal_1 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_1)) .'</td>
             </tr>'
             
             . ($checkboxPost_2=="2" ?  '<tr>
             <td>' .esc_html($optionName) . '</td>
             <td>' .esc_html($checkName_2) . '</td>
             <td>' . ($checkboxVal_2 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_2)) .'</td>
           </tr>' :  '')


           . ($checkboxPost_3=="3" ?  '<tr>
           <td>' .esc_html($optionName) . '</td>
           <td>' .esc_html($checkName_3) . '</td>
           <td>' . ($checkboxVal_3 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_3)) .'</td>
         </tr>' :  '')

         . ($checkboxPost_4=="4" ?  '<tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($checkName_4) . '</td>
         <td>' . ($checkboxVal_4 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_4)) .'</td>
       </tr>' :  '')

             .
        
          '</table></div></div>';
    
                                                  
                                                      }
                                                      
                                                      
                                                      else if($checkboxPost_2=="2") {


                                                 
         $title = $title. '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '.  esc_html($opt_number) . '</h3><div><table class="product_options">
       
             <tr>
             <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
             <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
             <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
             </tr>
             <tr>
               <td>' .esc_html($optionName) . '</td>
               <td>' .esc_html($checkName_2) . '</td>
               <td>' . ($checkboxVal_2 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_2)) .'</td>
             </tr>'
             
             . ($checkboxPost_3=="3" ?  '<tr>
             <td>' .esc_html($optionName) . '</td>
             <td>' .esc_html($checkName_3) . '</td>
             <td>' . ($checkboxVal_3 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_3)) .'</td>
           </tr>' :  '')


           . ($checkboxPost_4=="4" ?  '<tr>
           <td>' .esc_html($optionName) . '</td>
           <td>' .esc_html($checkName_4) . '</td>
           <td>' . ($checkboxVal_4 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_4)) .'</td>
         </tr>' :  '') . '</table></div></div>';
    
                                              
                                                        
                                                      }
                                                      else if ($checkboxPost_3=="3") {
    //checkbox3



    
    $title = $title. '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '.  esc_html($opt_number) . '</h3><div><table class="product_options">
       
    <tr>
    <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
    </tr>
    <tr>
      <td>' .esc_html($optionName) . '</td>
      <td>' .esc_html($checkName_3). '</td>
      <td>' . ($checkboxVal_3 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_3)) .'</td>
    </tr>'
    
    . ($checkboxPost_4=="4" ?  '<tr>
    <td>' .esc_html($optionName) . '</td>
    <td>' .esc_html($checkName_4) . '</td>
    <td>' . ($checkboxVal_4 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_4)) .'</td>
  </tr>' :  '') . '</table></div></div>';

    
                                                      }
    
                                                      else if ($checkboxPost_4=="4") {
        //checkbox4

    
    
    $title = $title. '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '.  esc_html($opt_number) . '</h3><div><table class="product_options">
       
    <tr>
    <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
    </tr>
    <tr>
      <td>' .esc_html($optionName) . '</td>
      <td>' .esc_html($checkName_4). '</td>
      <td>' . ($checkboxVal_4 == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($checkboxVal_4)) .'</td>
    </tr>

  </table></div></div>';
    
    
                                                      }


     

else if ($selected_index=="1") {

         //select

       //VERTICAL
      
       $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
       <tr>
       <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
       </tr>
       <tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($selectOptName1) . '</td>
         <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
       </tr>
  
     </table></div></div>';


     } 
     
     else if ($selected_index=="2") 
     
     {



       //VERTICAL
      
       $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
       <tr>
       <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
       </tr>
       <tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($selectOptName2) . '</td>
         <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
       </tr>
  
     </table></div></div>';

   
   
   
                         } else if ($selected_index=="3") 
     
     {

        

                               //VERTICAL
      
       $title .='<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
       <tr>
       <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
       </tr>
       <tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($selectOptName3) . '</td>
         <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
       </tr>
  
     </table></div></div>';

     }

                     else if ($selected_index=="4")  {


       $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
       <tr>
       <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
       </tr>
       <tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($selectOptName4) . '</td>
         <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
       </tr>
  
     </table></div></div>';


}   


else if ($selected_index=="5")  {



$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($selectOptName5) . '</td>
  <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
</tr>

</table></div></div>';


}


else if ($selected_index=="6")  {


$title .='<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($selectOptName6) . '</td>
  <td>' . ($selectOption == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($selectOption)) .'</td>
</tr>

</table></div></div>';




}

     
else if ($textInputExtraValue!="" && !empty($checkTest)){

         //text input


        //VERTICAL
      
           $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
           <tr>
           <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
           <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
           <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
           </tr>
           <tr>
             <td>' .esc_html($optionName) . '</td>
             <td>' .esc_html($checkTest) . '</td>
             <td>' . ($textInputExtraValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($textInputExtraValue)) .'</td>
           </tr>
      
         </table></div></div>';

     } else if ($textAreaExtraValue!="" && !empty($textAreaContent)){


     
       //VERTICAL
    
       $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
       <tr>
       <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
       <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
       </tr>
       <tr>
         <td>' .esc_html($optionName) . '</td>
         <td>' .esc_html($textAreaContent) . '</td>
         <td>' . ($textAreaExtraValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($textAreaExtraValue)) .'</td>
       </tr>
  
     </table></div></div>';

    
    
     }



else if ($radio_index=="0") {

   

$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($radioName1) . '</td>
  <td>' . ($radioButtonValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($radioButtonValue)) .'</td>
</tr>

</table></div></div>';

                  
                             }

                    else if($radio_index=="1") {

                      
                        $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                        <tr>
                        <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                        </tr>
                        <tr>
                          <td>' .esc_html($optionName) . '</td>
                          <td>' .esc_html($radioName2) . '</td>
                          <td>' . ($radioButtonValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($radioButtonValue)) .'</td>
                        </tr>
                        
                        </table></div></div>';                 }

                    else if($radio_index=="2") {
  
                        $title .=  '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                        <tr>
                        <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                        </tr>
                        <tr>
                          <td>' .esc_html($optionName) . '</td>
                          <td>' .esc_html($radioName3) . '</td>
                          <td>' . ($radioButtonValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($radioButtonValue)) .'</td>
                        </tr>
                        
                        </table></div></div>';            }


                         if($radio_index=="3") {

                          
                            $title .=  '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                            <tr>
                            <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                            <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                            <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                            </tr>
                            <tr>
                              <td>' .esc_html($optionName) . '</td>
                              <td>' .esc_html($radioName4) . '</td>
                              <td>' . ($radioButtonValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($radioButtonValue)) .'</td>
                            </tr>
                            
                            </table></div></div>';                       }
     
   
     else if ($number_extra_value!="" && !empty($custom_number)) {


                     $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                     <tr>
                     <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                     <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                     <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                     </tr>
                     <tr>
                       <td>' .esc_html($optionName) . '</td>
                       <td>' .esc_html($custom_number) . '</td>
                       <td>' . ($number_extra_value == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($number_extra_value)) .'</td>
                     </tr>
                     
                     </table></div></div>';

     }


     else if ($email_value!="" && !empty($email_content)) {


                   $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
    
                   <tr>
                   <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                   <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                   <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                   </tr>
                   <tr>
                     <td>' .esc_html($optionName) . '</td>
                     <td>' .esc_html($email_content) . '</td>
                     <td>' . ($email_value == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($email_value)) .'</td>
                   </tr>
                   
                   </table></div></div>';

   }


     


     
else if ($img_index=="0") {
  

                 
                                $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                                <tr>
                                <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                                <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                                <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                                </tr>
                                <tr>
                                  <td>' .esc_html($optionName) . '</td>
                                  <td>' .wp_get_attachment_image( $img_1_id, 'small' ). '</td>
                                  <td>' . ($imgValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($imgValue)) .'</td>
                                </tr>
                                
                                </table></div></div>';
                  
                             }

                    else if($img_index=="1") {

                                   
                        $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                        <tr>
                        <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                        </tr>
                        <tr>
                          <td>' .esc_html($optionName) . '</td>
                          <td>' .wp_get_attachment_image( $img_2_id, 'small' ). '</td>
                          <td>' . ($imgValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($imgValue)) .'</td>
                        </tr>
                        
                        </table></div></div>';             
                        }

              else   if($img_index=="2") {
                         
                        $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                        <tr>
                        <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                        <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                        </tr>
                        <tr>
                          <td>' .esc_html($optionName) . '</td>
                          <td>' .wp_get_attachment_image( $img_3_id, 'small' ). '</td>
                          <td>' . ($imgValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($imgValue)) .'</td>
                        </tr>
                        
                        </table></div></div>';                          }

                       else  if($img_index=="3") {

                         
                          $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
                          <tr>
                          <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
                          <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
                          <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
                          </tr>
                          <tr>
                            <td>' .esc_html($optionName) . '</td>
                            <td>'.wp_get_attachment_image( $img_4_id, 'small' ). '</td>
                            <td>' . ($imgValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($imgValue)) .'</td>
                          </tr>
                          
                          </table></div></div>';                           }

    


//BUTTON SWAP

     else if ($btn_index=="0") {

       
$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
<td>' .esc_html($optionName) . '</td>
<td>' .esc_html($btnName1) . '</td>
<td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
</tr>

</table></div></div>';   

}

else if($btn_index=="1") {

                 
$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
<td>' .esc_html($optionName) . '</td>
<td>' .esc_html($btnName2) . '</td>
<td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
</tr>

</table></div></div>';                   
}

else if($btn_index=="2") {


$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
<td>' .esc_html($optionName) . '</td>
<td>' .esc_html($btnName3) . '</td>
<td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
</tr>

</table></div></div>';                            }

else if($btn_index=="3") {


  $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

  <tr>
  <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
  </tr>
  <tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($btnName4) . '</td>
  <td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
  </tr>
  
  </table></div></div>';                            }

  
else if($btn_index=="4") {

  $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

  <tr>
  <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
  </tr>
  <tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($btnName5) . '</td>
  <td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
  </tr>
  
  </table></div></div>';                             }

  else if($btn_index=="5") {

    $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

    <tr>
    <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
    </tr>
    <tr>
    <td>' .esc_html($optionName) . '</td>
    <td>' .esc_html($btnName6) . '</td>
    <td>' . ($btnValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($btnValue)) .'</td>
    </tr>
    
    </table></div></div>';                             
  
  }


else if (!$chooseColor=="") {


$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
    
<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
<td>' .esc_html($optionName) . '</td>
<td>' .esc_html($chooseColor) . '</td>
<td>' . ($color_option_cost == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($color_option_cost)) .'</td>
</tr>

</table></div></div>';  


}


else if (!$calculValue=="") {

  
  $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
      
  <tr>
  <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
  </tr>
  <tr>
  <td>' .esc_html($optionName) . '</td>
  <td>' .esc_html($calculValue) . '</td>
  <td rowspan="2">' . ($calcul_result == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($calcul_result)) .'</td>
  </tr>'
  . ($calculValue_2 ?  '<tr>
  <td>' .esc_html($calcul_label_2). '</td>
  <td>' .esc_html($calculValue_2 ). '</td>
  
</tr>' :  '') . '</table></div></div>';
  
  
  }

  else if ($urlExtraValue!="" && !empty($choose_url)){


   //VERTICAL
 
      $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">
 
    <tr>
    <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
    <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
    </tr>
    <tr>
      <td>' .esc_html($optionName) . '</td>
      <td>' .esc_url($choose_url) . '</td>
      <td>' . ($urlExtraValue == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($urlExtraValue)) .'</td>
    </tr>

  </table></div></div>';


}

else if ($upload_file_name){

    $title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

  <tr>
  <th>'. esc_html__('Label', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Content', 'custom-product-manager'). '</th>
  <th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
  </tr>
  <tr>
    <td>' .esc_html($optionName) . '</td>
    <td>'. ($file_upload_is_image == true ? '<img src="'.$file_path. $upload_file_name .'" width=150 height=150/>' : esc_html($upload_file_name)) .'</td>
    <td>' . ($upload_value == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($upload_value)) .'</td>
  </tr>

</table></div></div>';


}

else if (!empty($phone_number)){


$title .= '<div class=\"accordion\"><h3>'. esc_html__('Option', 'custom-product-manager') . ' '. esc_html($opt_number) . '</h3><div><table class="product_options">

<tr>
<th>'. esc_html__('Label', 'custom-product-manager'). '</th>
<th>'. esc_html__('Content', 'custom-product-manager'). '</th>
<th>'. esc_html__('Cost', 'custom-product-manager'). '</th>
</tr>
<tr>
<td>' .esc_html($optionName) . '</td>
<td>'. esc_html($phone_number) .'</td>
<td>' . ($phone_value == "0.00" ? esc_html_e('free', 'custom-product-manager') : wc_price($phone_value)) .'</td>
</tr>

</table></div></div>';


}

 else {

     //do something
 }
 
 }