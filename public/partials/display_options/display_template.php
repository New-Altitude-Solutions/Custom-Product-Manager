<?php  

                /**
                 * 
                 *  Display options on product page
                 * 
                 */


        global $post;
        $product = wc_get_product($post->ID);
        $money_smybol = get_woocommerce_currency_symbol(); 

        $optionName = $product->get_meta($option_identificator . '_option_name');
        $inputType =  $product->get_meta($option_identificator . '_field_type');
        $inputDescription = $product->get_meta($option_identificator . '_input_description');
        $input_helptip = $product->get_meta($option_identificator . '_input_helptip');
        $required = $product->get_meta($option_identificator . '_requiredCheck');
        $disable_output = $product->get_meta($option_identificator . '_disable_output');
        $input_placeholder = $product->get_meta($option_identificator . '_input_placeholder');
        
        $checkboxname_1 = $product->get_meta($option_identificator . '_checkbox_name');
        $optionValue = $product->get_meta($option_identificator . '_field_value');
        $checkboxname_2 = $product->get_meta($option_identificator . '_checkbox_name_2');
        $checkbox2Value = $product->get_meta($option_identificator . '_field_value_2');
        $checkboxname_3 = $product->get_meta($option_identificator . '_checkbox_name_3');
        $checkbox3Value = $product->get_meta($option_identificator . '_field_value_3');
        $checkboxname_4 = $product->get_meta($option_identificator . '_checkbox_name_4');
        $checkbox4Value = $product->get_meta($option_identificator . '_field_value_4');
        
        $textExtra = $product->get_meta($option_identificator . '_text_input_extra_value');
        $only_letters = $product->get_meta($option_identificator . '_only_letters');
        $text_min_length = $product->get_meta($option_identificator . '_text_input_min_length');
        $text_max_length = $product->get_meta($option_identificator . '_text_input_max_length');
        
        $text_area_max_length = $product->get_meta($option_identificator . '_text_area_max_length');
        
        $number_extra_value= $product->get_meta($option_identificator . '_number_input_extra_value');
        $number_min = $product->get_meta($option_identificator . '_number_min_value');
        $number_max = $product->get_meta($option_identificator . '_number_max_value');
        $number_step = $product->get_meta($option_identificator . '_number_step_value');
        
        $url_extra_value= $product->get_meta($option_identificator . '_url_extra_value');
        $url_min = $product->get_meta($option_identificator . '_url_min_length');
        $url_max = $product->get_meta($option_identificator . '_url_max_length');
        $url_pattern = $product->get_meta($option_identificator . '_url_pattern');
        
        $selectOptionName1 = $product->get_meta($option_identificator . '_sub_1_name');
        $selectOptionValue1 = $product->get_meta($option_identificator . '_Sub_1_value');
        $selectOptionName2 = $product->get_meta($option_identificator . '_sub_2_name');
        $selectOptionValue2 = $product->get_meta($option_identificator . '_Sub_2_value');
        $selectOptionName3 = $product->get_meta($option_identificator . '_sub_3_name');
        $selectOptionValue3 = $product->get_meta($option_identificator . '_Sub_3_value');
        $selectOptionName4 = $product->get_meta($option_identificator . '_sub_4_name');
        $selectOptionValue4 = $product->get_meta($option_identificator . '_Sub_4_value');
        $selectOptionName5 = $product->get_meta($option_identificator . '_sub_5_name');
        $selectOptionValue5 = $product->get_meta($option_identificator . '_Sub_5_value');
        $selectOptionName6 = $product->get_meta($option_identificator . '_sub_6_name');
        $selectOptionValue6 = $product->get_meta($option_identificator . '_Sub_6_value');
        $selectDefaultText = $product->get_meta($option_identificator . '_select_no_option');
        
        $radioName_1 = $product->get_meta($option_identificator . '_radio_name_1');
        $radioValue_1 = $product->get_meta($option_identificator . '_radio_value_1');
        $radioName_2 = $product->get_meta($option_identificator . '_radio_name_2');
        $radioValue_2 = $product->get_meta($option_identificator . '_radio_value_2');
        $radioName_3 = $product->get_meta($option_identificator . '_radio_name_3');
        $radioValue_3 = $product->get_meta($option_identificator . '_radio_value_3');
        $radioName_4 = $product->get_meta($option_identificator . '_radio_name_4');
        $radioValue_4 = $product->get_meta($option_identificator . '_radio_value_4');

        $img_name_1 = $product->get_meta($option_identificator . '_img_name_1');
        $img_value_1 = $product->get_meta($option_identificator . '_img_value_1');
        $img_name_2 = $product->get_meta($option_identificator . '_img_name_2');
        $img_value_2 = $product->get_meta($option_identificator . '_img_value_2');
        $img_name_3 = $product->get_meta($option_identificator . '_img_name_3');
        $img_value_3 = $product->get_meta($option_identificator . '_img_value_3');
        $img_name_4 = $product->get_meta($option_identificator . '_img_name_4');
        $img_value_4 = $product->get_meta($option_identificator . '_img_value_4');

        $img_1_id = $product->get_meta($option_identificator . '_img_1');
        $img_2_id = $product->get_meta($option_identificator . '_img_2');
        $img_3_id = $product->get_meta($option_identificator . '_img_3');
        $img_4_id = $product->get_meta($option_identificator . '_img_4');

        $email_value = $product->get_meta($option_identificator . '_email_extra_value');
        $email_max_length = $product->get_meta($option_identificator . '_email_max_length');

        $btn_name_1 = $product->get_meta($option_identificator . '_btnswap_name_1');
        $btn_value_1 = $product->get_meta($option_identificator . '_btnswap_value_1');
        $btn_name_2 = $product->get_meta($option_identificator . '_btnswap_name_2');
        $btn_value_2 = $product->get_meta($option_identificator . '_btnswap_value_2');
        $btn_name_3 = $product->get_meta($option_identificator . '_btnswap_name_3');
        $btn_value_3 = $product->get_meta($option_identificator . '_btnswap_value_3');

        $btn_name_4 = $product->get_meta($option_identificator . '_btnswap_name_4');
        $btn_value_4 = $product->get_meta($option_identificator . '_btnswap_value_4');
        $btn_name_5 = $product->get_meta($option_identificator . '_btnswap_name_5');
        $btn_value_5 = $product->get_meta($option_identificator . '_btnswap_value_5');
        $btn_name_6 = $product->get_meta($option_identificator . '_btnswap_name_6');
        $btn_value_6 = $product->get_meta($option_identificator . '_btnswap_value_6');

        $color_value = $product->get_meta($option_identificator . '_color_extra_value');

        $calcul_formula= $product->get_meta($option_identificator . '_calcul_formula');
        $calcul_label_2 = $product->get_meta($option_identificator . '_calcul_label_2');
        $calcul_description_2 = $product->get_meta($option_identificator . '_calcul_description_2');
        $input_calcul_helptip_2 = $product->get_meta($option_identificator . '_input_calcul_helptip_2');
        $input_placeholder_2 = $product->get_meta($option_identificator . '_input_placeholder_2');

        $calcul_number_min = $product->get_meta($option_identificator . '_calcul_number_min_value');
        $calcul_number_max = $product->get_meta($option_identificator . '_calcul_number_max_value');
        $calcul_number_step = $product->get_meta($option_identificator . '_calcul_number_step_value');

        $upload_value = $product->get_meta($option_identificator . '_upload_value');
        $upload_max_size = $product->get_meta($option_identificator . '_upload_max_size');

        $phone_value = $product->get_meta($option_identificator . '_phone_extra_value');
        $phone_minlength = $product->get_meta($option_identificator . '_phone_minlength');
        $phone_maxlength = $product->get_meta($option_identificator . '_phone_maxlength');
      
       
        $only_national = $product->get_meta($option_identificator . '_national_code');
   
  
        
      
if ($inputType=="1" && $optionName && $textExtra!="") {?>


<div class="cmp_text_input_div">
<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_text_input"; ?>" <?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
                    >
                    <?php echo esc_html($optionName); ?>
</legend>


<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>



<div class="wpcb_input_container">

<input type="text" 
id="<?php echo esc_attr($option_identificator) . "_text_input"; ?>"
class="wpcb_icon_inputs"
name="<?php echo esc_attr($option_identificator) . "_text_input"; ?>" 
<?php if($only_letters) {
echo "pattern=\"[A-Za-z]*";}?>
autocomplete="off"  
maxlength="<?php if($text_max_length){echo esc_attr($text_max_length);} else { echo "40";}?>"
minlength="<?php if($text_min_length){echo esc_attr($text_min_length);} else { echo "0";}?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Write your text', 'custom-product-manager');}?>"
<?php if($required){echo "required";} ?>>

</div>


<?php if (!$disable_output) { ?>
     
<p id="<?php echo esc_attr($option_identificator) . "_output_text_val"; ?>" class="cp_output"></p> 

<?php } else { echo '<p></p>';}?>

</fieldset>
</div>
</div>


 <?php }  else  if ($inputType=="2") {  if ($optionName && $selectOptionName1 /*&& $selectOptionValue1*/) {?> 
     
     
     <div class="cpm_select_input_div">

     <fieldset>
     <legend for="<?php echo esc_attr($option_identificator) . "_select_input"; ?>"
     <?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     > 
     
     <?php echo esc_html($optionName); ?> 
 
     </legend>

     <?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container">


     <select class="wpcb_icon_inputs" id="<?php echo esc_attr($option_identificator) . "_select_input"; ?>" name="<?php echo esc_attr($option_identificator) . "_select_input"; ?>" value="" <?php if($required){echo "required";} ?>><option value=""> <?php if($selectDefaultText) { echo esc_html($selectDefaultText);} else {esc_html_e('Select an option', 'custom-product-manager');} ?></option>
 
     <option value="<?php echo esc_attr($selectOptionValue1);?>"><?php echo esc_html($selectOptionName1);?></option>
 <option value="<?php echo esc_attr($selectOptionValue2);?>"><?php echo esc_html($selectOptionName2);?></option>

 <?php if(!$selectOptionName3=="") { echo " <option value=\"" .  esc_attr($selectOptionValue3) . "\">" . esc_html($selectOptionName3) . "</option>"; }      ?>    

 <?php if(!$selectOptionName4=="") { echo " <option value=\"" . esc_attr($selectOptionValue4) . "\">" . esc_html($selectOptionName4)  . "</option>"; }      ?>  

 <?php if(!$selectOptionName5=="") { echo " <option value=\"" . esc_attr($selectOptionValue5) . "\">" . esc_html($selectOptionName5)  . "</option>"; }      ?>  

 <?php if(!$selectOptionName6=="") { echo " <option value=\"" . esc_attr($selectOptionValue6) . "\">" . esc_html($selectOptionName6)  . "</option>"; }      ?>  

</select>
     </div>



    <input type="hidden" id="<?php echo esc_attr($option_identificator) . "_selector_index"; ?>" name="<?php echo esc_attr($option_identificator) . "_selector_index"; ?>"/>

    <?php if (!$disable_output) { ?>

 <p id ="<?php echo esc_attr($option_identificator) . "_output_select_val"; ?>" class="cp_output"></p>

 <?php } else { echo '<p></p>';}?>

    </fieldset>
 </div> 
 </div> 
 
 <?php } }
 
 else if ($inputType=="3" && $optionName /*&& $optionValue*/) {
        
     ?>       

     <div class="cpm_checkbox_input_div"> 

 <fieldset>
     <legend for="<?php echo esc_attr($option_identificator) . "_checkbox_input"; ?>"
     <?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     > 
     
     <?php echo esc_html($optionName); ?>
   
     </legend>

     <?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>
     

     <label for="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" class="container_checkbox"> <?php echo esc_html($checkboxname_1); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox"; ?>" value="1" class="checkboxes"/> 
</label>
     
<?php if($checkbox2Value!="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_2); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_2"; ?>" value="2" class="checkboxes">     
<span class="checkmark"></span></label>

<?php } ?>


<?php if($checkbox3Value!="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_3); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_3"; ?>" value="3" class="checkboxes">  
<span class="checkmark"></span></label>

<?php } ?>


<?php if($checkbox4Value!="") { ?>


<label for="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" class="container_checkbox"><?php echo esc_html($checkboxname_4); ?>
<input type="checkbox" id="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_checkbox_4"; ?>" value="4" class="checkboxes">  
<span class="checkmark"></span></label>
<?php } ?>

<?php if (!$disable_output) { ?>


 <p class="<?php echo esc_attr($option_identificator) . "_output_check_val cp_output rad_btn_cp"; ?>"></p>

 <?php } else { echo '<p></p>';}?>

<p class="woocommerce-info" id="required-msg" style="display:none;"></p>   


</fieldset>
</div>
</div>

<?php

if($required) { ?> 

<!-- use in js for validation -->
<input type="hidden" id="chk_required" name="chk_required" value="<?php echo esc_attr($required); ?>">

<?php
                  }  }  

       
 else if ($inputType=="4") { ?>

     <div class="cpm_text_area_div">


                              <fieldset>
                             <legend for="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
                             <?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
                             >
                             
                             <?php echo esc_html($optionName); ?>
                          
                         </legend>

                             <?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>

<div class="wpcb_input_container wp_textarea_container">

                         <textarea
                         class="wpcb_icon_inputs"
                         id="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
                         name="<?php echo esc_attr($option_identificator) . "_text_area_input"; ?>"
                         maxlength="<?php if($text_area_max_length){echo esc_attr($text_area_max_length);} else { echo "260";} ?>"
                         placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Write a long text.', 'custom-product-manager');}?>"
                         <?php if($required){echo "required";}?>
                           cols="20"rows="2" wrap="off">
                         </textarea>

  </div>



<?php if (!$disable_output) { ?>

     <p id="<?php echo esc_attr($option_identificator) . "_output_text_area_val"; ?>" class="cp_output"></p> 

     <?php } else { echo '<p></p>';}?>
 


     </fieldset>
     </div>
     </div>
   
 
   
      <?php } 

          
                  
else if ($inputType=="5" && $optionName && $radioName_1) { ?>





<div class="cpm_radio_input_div"> 

<fieldset>
<legend id="label-radio"
<?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
>
     
<?php echo esc_html($optionName); ?> 

</legend> 



<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p> 
<?php } ?>

<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_radio_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_indexer"; ?>"/>

<label for="<?php echo esc_attr($option_identificator) . "_radio_1"; ?>" class="container_radio"> <?php echo esc_html($radioName_1); ?> 
     <input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_1"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_1); ?>" checked <?php if($required){echo "required";} ?>>
     <span class="checkmark_radio"></span>
</label>

<label  for="<?php echo esc_attr($option_identificator) . "_radio_2"; ?>" class="container_radio"><?php echo esc_html($radioName_2); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_2"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_2); ?>">
<span class="checkmark_radio"></span>
</label>


<?php if($radioName_3 || !$radioName_3=="") { ?> 

     <label for="<?php echo esc_attr($option_identificator) . "_radio_3"; ?>" class="container_radio"><?php echo esc_html($radioName_3); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_3"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_3); ?>">
<span class="checkmark_radio"></span>
</label>



<?php } else if(!$radioName_3 || $radioName_3==" ") { 

    //sleep

} 

?>

<?php if($radioName_4 || !$radioName_4=="") { ?> 

<label for="<?php echo esc_attr($option_identificator) . "_radio_4"; ?>" class="container_radio"><?php echo esc_html($radioName_4); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_radio_4"; ?>" class="<?php echo esc_attr($option_identificator) . "_radiojs"; ?>" name="<?php echo esc_attr($option_identificator) . "_radio_value"; ?>" value="<?php echo esc_attr($radioValue_4); ?>">
<span class="checkmark_radio"></span>
</label>


<?php } else if(!$radioName_4 || $radioName_4==" ") { 

//sleep

} 


?>



 <?php if (!$disable_output) { ?>
 <p id ="<?php echo esc_attr($option_identificator) . "_outputRadioValue"; ?>" class="cp_output rad_btn_cp"></p>
 <?php } else { echo '<p></p>';}?>

 </fieldset>
 </div>
 </div>

 <?php
 }  
 
 
else if ($inputType=="6") {


?>


<div class="cpm_number_div">

<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>"
<?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
> 

<?php echo esc_html($optionName); ?>

</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>



<div class="wpcb_input_container">


<input type="number" 
id="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>"
class="wpcb_icon_inputs"
name="<?php echo esc_attr($option_identificator) . "_number_custom_field"; ?>" 
autocomplete="off" 
min="<?php if($number_min) { echo esc_attr($number_min);} else { echo "0";}?>"
max="<?php if($number_max) { echo esc_attr($number_max);} else {echo "100000000";}?>"
step="<?php if($number_step) { echo esc_attr($number_step);}?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Write a number', 'custom-product-manager');}?>"
<?php if($required){echo "required";} ?>>

</div>

<?php if (!$disable_output) { ?>
   
<p id="<?php echo esc_attr($option_identificator) . "_outputNumberValue"; ?>" class="cp_output"></p> 
<p id="<?php echo esc_attr($option_identificator) . "_NfillWithNumbers"; ?>" class="cp_output"></p> 

<?php } else { echo '<p></p>';}?>



</fieldset>
</div>
</div>

<?php
}




else if ($inputType=="7" && $optionName && $img_name_1 && $img_1_id) { ?>



<div class="cpm_imgswap_div"> 


<fieldset>


<legend id="label-radio"
<?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
>
     <?php echo esc_html($optionName); ?> 

</legend>


    
<div>     

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>


<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_img_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_indexer"; ?>"/>


<div class="cpm_img_swap">

<span id="<?php echo esc_attr($option_identificator) . "_img_box_1"; ?>" class="box_img target"><?php echo wp_get_attachment_image( $img_1_id, 'full' )?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_2"; ?>" class="box_img target"><?php echo wp_get_attachment_image( $img_2_id, 'full' )?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_3"; ?>" class="box_img target"><?php if($img_name_3 || !$img_name_3==" ") { echo wp_get_attachment_image($img_3_id, 'full' ); }?></span>
<span id="<?php echo esc_attr($option_identificator) . "_img_box_4"; ?>" class="box_img target"><?php if($img_name_4 || !$img_name_4==" ") { echo wp_get_attachment_image($img_4_id, 'full' ); }?></span>

</div>


<label for="<?php echo esc_attr($option_identificator) . "_img_radio_1"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_1); ?>
         <input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_1"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_1); ?>" <?php if($required){echo "required";} ?>>
         <span class="checkmarkRadio"></span> 
     </label>



<label for="<?php echo esc_attr($option_identificator) . "_img_radio_2"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_2); ?>
  <input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_2); ?>">
  <span class="checkmarkRadio"></span>
  </label>


  <?php if($img_name_3 || !$img_name_3==" ") { ?> 

    

  <label for="<?php echo esc_attr($option_identificator) . "_img_radio_3"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_3); ?>
  <input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_3); ?>">
  <span class="checkmarkRadio" id="checkmark_3"></span>
  </label>



  <?php } else if(!$img_name_3 || $img_name_3==" ") { 


//sleep

 } 


 if($img_name_4 || !$img_name_4==" ") { ?> 

    
     <label for="<?php echo esc_attr($option_identificator) . "_img_radio_4"; ?>" class="img_containerRadio"><?php echo esc_html($img_name_4); ?>
     <input type="radio" id="<?php echo esc_attr($option_identificator) . "_img_radio_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_img_radio"; ?>" value="<?php echo esc_attr($img_value_4); ?>">
     <span class="checkmarkRadio" id="checkmark_4"></span>
     </label>
   
   
     <?php } else if(!$img_name_4 || $img_name_4==" ") { 
   
   
   //sleep
   
    } 
 
 
 ?>



  </div>


  
     <?php if (!$disable_output) { ?>
     <p id ="<?php echo esc_attr($option_identificator) . "_outputImgValue"; ?>" class="cp_output rad_btn_cp"></p>
     <?php } else { echo '<p></p>';}?>


     </fieldset>
     </div>
     </div>

     <?php


     } 



     
else if ($inputType=="8" && $optionName) { ?>


    
<div class="cpm_email_input_div">


<fieldset>
<legend for="<?php echo esc_attr($option_identificator) . "_email_field"; ?>"
<?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
>
 <?php echo esc_html($optionName); ?>

</legend>

<?php if($inputDescription) { ?>
<p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
<?php } ?>



<div class="wpcb_input_container">


<input type="email" 
id="<?php echo esc_attr($option_identificator) . "_email_field"; ?>" 
class="wpcb_icon_inputs"
name="<?php echo esc_attr($option_identificator) . "_email_field"; ?>" 
autocomplete="on" 
maxlength="<?php if($email_max_length){echo esc_attr($email_max_length);} else { echo "40";}?>"
placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Email address', 'custom-product-manager');}?>"
<?php if($required){echo "required";}?>>
</div>

<?php if (!$disable_output) { ?>

<p id="<?php echo esc_attr($option_identificator) . "_outputEmailValue"; ?>" class="cp_output"></p> 

<?php } else { echo '<p></p>';}?>

</fieldset>
</div>
</div>
        
     
          <?php
     
     
          } 




else if ($inputType=="9" && $optionName) { ?>



     
     <div class="cpm_btnswap_div"> 
         
     <fieldset>
     <legend id="label"
     <?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     >
          
     <?php echo esc_html($optionName); ?> 
 
</legend>

     <div>     
     
     <?php if($inputDescription) { ?>
     <p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
     <?php } ?>
     

     <input type="hidden" id="<?php echo esc_attr($option_identificator) . "_btn_indexer"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_indexer"; ?>"/>
     

     <label  for="<?php echo esc_attr($option_identificator) . "_btn_radio_1"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_1); ?>
              <input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_1"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_1); ?>" <?php if($required){echo "required";} ?>>
              <span class="checkmarkRadio"></span> 
          </label>
     

     <label  for="<?php echo esc_attr($option_identificator) . "_btn_radio_2"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_2); ?>
       <input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_2"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_2); ?>">
       <span class="checkmarkRadio"></span>
       </label>
     
       <label for="<?php echo esc_attr($option_identificator) . "_btn_radio_3"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_3); ?>
       <input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_3"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_3); ?>">
       <span class="checkmarkRadio" id="checkmark_3"></span>
       </label>
     
     
       <?php if($btn_name_4 || !$btn_name_4=="") { ?>

<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_4"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_4); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_4"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_4); ?>">
<span class="checkmarkRadio" id="checkmark_4"></span>
</label>



<?php }


if($btn_name_5 || !$btn_name_5=="") { ?> 

    
<label for="<?php echo esc_attr($option_identificator) . "_btn_radio_5"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_5); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_5"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_5); ?>">
<span class="checkmarkRadio" id="checkmark_5"></span>
</label>


<?php } 


if($btn_name_6 || !$btn_name_6=="") { ?> 


<label  for="<?php echo esc_attr($option_identificator) . "_btn_radio_6"; ?>" class="btn_containerRadio"><?php echo esc_html($btn_name_6); ?>
<input type="radio" id="<?php echo esc_attr($option_identificator) . "_btn_radio_6"; ?>" name="<?php echo esc_attr($option_identificator) . "_btn_radio"; ?>" value="<?php echo esc_attr($btn_value_6); ?>">
<span class="checkmarkRadio" id="checkmark_6"></span>
</label>



<?php } ?>

     
       </div>
     
     
          <?php if (!$disable_output) { ?>
          <p id ="<?php echo esc_attr($option_identificator) . "_outputBtnValue"; ?>" class="cp_output rad_btn_cp"></p>
          <?php } else { echo '<p></p>';}?>
     

          </fieldset>
          </div>
          </div>
     
          <?php
     
     
          } 

          
else if ($inputType=="10" && $color_value!="") {?>


     <div class="cpm_color_input_div" >
     
     
     <fieldset>
     <legend for="color_field"
     <?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     > 
     
     <?php echo esc_html($optionName); ?>

</legend>
     
     <?php if($inputDescription) { ?>
     <p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
     <?php } ?>


<div class="wpcb_input_container wpcb_trigger_click">


<input type="text" id="<?php echo esc_attr($option_identificator) . "_click_color"; ?>" 
class="wpcb_icon_inputs"  
value="<?php esc_attr_e('Choose a custom color', 'custom-product-manager');?>"
 readonly/>
<input type="color" style="display:none;" id="<?php echo esc_attr($option_identificator) . "_color_custom_field"; ?>" autocomplete="off" name="<?php echo esc_attr($option_identificator) . "_color_custom_field"; ?>" value="">
</div>

     <?php if (!$disable_output) { ?>
 
     <p id="<?php echo esc_attr($option_identificator) . "_outputColorValue"; ?>" class="cp_output"></p> 
     
     <?php } else { echo '<p></p>';}?>
      
     </fieldset>
     </div>
     </div>
     
     
    <?php if($required) { ?> 
 
<!-- use in js for validation -->
<input type="hidden" id="<?php echo esc_attr($option_identificator) . "_color_required"; ?>" name="<?php echo esc_attr($option_identificator) . "_color_required"; ?>" value="<?php echo esc_attr($required); ?>">

<?php
                  }  }  



                  
else if ($inputType=="11" && !$calcul_formula=="") {


     ?>
                   
     <div class="cpm_number_calculation_div">

               <fieldset>
               <legend for="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>"> 
               
               <?php echo esc_html($optionName); ?>
    
               </legend>

               <?php if($inputDescription) { ?>
     <p class="input_Description"  <?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
                    >
                    <?php echo esc_html($inputDescription); ?></p>
     <?php } ?>


<div class="wpcb_input_container">


               <input type="number" id="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>" 
               class="wpcb_icon_inputs"
               autocomplete="off" 
               name="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field"; ?>" 
               min="<?php if($calcul_number_min) { echo esc_attr($calcul_number_min);} else { echo "0";}?>" 
               max="<?php if($calcul_number_max) {echo esc_attr($calcul_number_max);}?>" 
               step="<?php if($calcul_number_step) { echo esc_attr($calcul_number_step);} else { echo "0.1";}?>" 
               placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else {esc_attr_e('Write your first value', 'custom-product-manager');}?>"
               <?php if($required){echo "required";} ?>/>
               </div>

               <?php if(!$calcul_label_2=="") { ?>

              
        <?php /* Second option label : no need with fieldset
            <label for="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field_2"; ?>"
               <?php if($input_calcul_helptip_2) { ?> title="<?php echo esc_attr($input_calcul_helptip_2); ?>"
                    <?php } ?>
               >
               <?php echo esc_html($calcul_label_2); ?>
               </label>
             */
            ?>

<p style="margin:10px 0 0 0;"></p>
                  <?php if($calcul_description_2) { ?>
     <p class="input_Description"  <?php if($input_calcul_helptip_2) { ?> title="<?php echo esc_attr($input_calcul_helptip_2); ?>"
                    <?php } ?>>
                    <?php echo esc_html($calcul_description_2); ?>
               </p>
     <?php } ?>     
     
     <div class="wpcb_input_container">


               <input type="number" id="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field_2"; ?>" 
               class="wpcb_icon_inputs"
               autocomplete="off" 
               name="<?php echo esc_attr($option_identificator) . "_calcul_number_custom_field_2"; ?>" 
               min="<?php if($calcul_number_min) {echo esc_attr($calcul_number_min);} else { echo "0";}?>" 
               max="<?php if($calcul_number_max) {echo esc_attr($calcul_number_max);}?>" 
               step="<?php if($calcul_number_step) {echo esc_attr($calcul_number_step);} else { echo "0.1";}?>" 
               placeholder="<?php if($input_placeholder_2){echo esc_attr($input_placeholder_2);} else { esc_attr_e('Write your second value', 'custom-product-manager');}?>"
               <?php if($required){echo "required";} ?>>
               </div>
                                           
<?php } ?>


     <?php if (!$disable_output) { ?>
     
     <p id="<?php echo esc_attr($option_identificator) . "_outputCalculValue"; ?>" class="cp_output"></p> 
     <p id="<?php echo esc_attr($option_identificator) . "_fillWithNumbers"; ?>" class="cp_output" style="display:none;"></p> 
     
     <?php } else { echo '<p></p>';}?>
     
     </fieldset>
     </div>
     </div>
     
     <?php
     }

      
else if ($inputType=="12" && $url_extra_value!="") {?>

<?php if($url_pattern == "2") {
     $choose_pattern = "http://.*";
     $url_placeholder = "http://";
} else if ($url_pattern == "3"){ 
     $choose_pattern = "https://.*";
     $url_placeholder = "https://";
} else {
     $choose_pattern="https?://.+";
     $url_placeholder = "http(s)://";
}; ?>

     <div class="cpm_url_input_div">
     
<fieldset>
     <legend for="<?php echo esc_attr($option_identificator) . "_url_field"; ?>"
     <?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     >
     
     <?php echo esc_html($optionName); ?>

</legend>
     
     <?php if($inputDescription) { ?>
     <p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
     <?php } ?>
     

<div class="wpcb_input_container">

     <input type="url" 
     id="<?php echo esc_attr($option_identificator) . "_url_field"; ?>" 
     class="wpcb_icon_inputs"
     name="<?php echo esc_attr($option_identificator) . "_url_field"; ?>"
     placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { echo esc_attr_e($url_placeholder);}?>"
     pattern="<?php echo esc_attr($choose_pattern)?>" 
     autocomplete="off" 
     maxlength="<?php if($url_max){echo esc_attr($url_max);} else { echo "40";}?>"
     minlength="<?php if($url_min){echo esc_attr($url_min);} else { echo "0";}?>"
     <?php if($required){echo "required";} ?>>

     </div>

     <?php if (!$disable_output) { ?>

     <p id="<?php echo esc_attr($option_identificator) . "_outputUrlValue"; ?>" class="cp_output"></p> 
     
     <?php } else { echo '<p></p>';}?>


     </fieldset>
     </div>
     </div>
     
     

      <?php } 


   
else if ($inputType=="13" && $upload_value!="") {?>

     
          <div class="cpm_upload_input_div">

          <fieldset>
          <legend for="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>"
          <?php if($input_helptip) { ?>  title="<?php echo esc_attr($input_helptip); ?>"
                         <?php } ?>
          >
          
          <?php echo esc_attr($optionName); ?>
  
          </legend>
          
          <?php if($inputDescription) { ?>
          <p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
          <?php } ?>

     <!-- <form id="featured_upload" method="post" action="#" enctype="multipart/form-data"> -->


<div class="wpcb_input_container wpcb_trigger_click">

          <input type="text" id="<?php echo esc_attr($option_identificator) . "_click_upload"; ?>" 
          class="wpcb_icon_inputs" 
          value="<?php if ($input_placeholder) {echo esc_attr($input_placeholder);} else {esc_attr_e('Upload a file', 'custom-product-manager');}?>" readonly/>
          <input type="file" 
          name="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>" 
          id="<?php echo esc_attr($option_identificator) . "_upload_input"; ?>"  
          style="display:none;"
          multiple="false" 
          accept="<?php $mimes_types = get_allowed_mime_types(); 
          foreach($mimes_types as $index => $mime) {
          $product_allowed_mime_types = $product->get_meta($option_identificator.'_'.$mime);
          if(!empty($product_allowed_mime_types)) {echo esc_attr($product_allowed_mime_types).',';}
          }
          ?>"/>
          
          <input type="hidden" name="product_id" id="product_id" value="<?php echo esc_attr($product->get_id());?>" />
          <input type="hidden" name="product_price" id="product_price" value="<?php echo esc_attr($product->get_price());?>" />
          <?php wp_nonce_field( 'upload', 'upload_nonce' ); ?>
          </div>
     <!-- </form> -->

          <p style="display:none;"><span class="<?php echo esc_attr($option_identificator) . '_output_upload_value cp_output'; ?>" style="display:none;"> <?php if($upload_value === "0" || $upload_value === "0.00"){ echo get_option('cost_option_text') . get_option('free_option_text');}else  {echo get_option('cost_option_text') . wc_price($upload_value);}?> </span></p>
          
          <div class="<?php echo esc_attr($option_identificator).'_upload_content_output cp_output'?>" ></div>

     </fieldset>
          </div>
          </div>
     
           <?php } 

   
else if ($inputType=="14" && $only_national!="") {?>

     <div class="cpm_phone_input_div">

     <?php require_once ABSPATH . '/wp-content/plugins/' . $this->plugin_name . '/public/data/country-code-array.php'; ?>

<fieldset>
     <legend for="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>"
     <?php if($input_helptip) { ?> title="<?php echo esc_attr($input_helptip); ?>"
                    <?php } ?>
     >
     
     <?php echo esc_html($optionName); ?>

     </legend>
     
     <?php if($inputDescription) { ?>
     <p class="input_Description"><?php echo esc_html($inputDescription); ?></p>
     <?php } ?>

     

<div class="national_phone">

<div class="wpcb_input_container">

  <input type="tel" value="<?php echo '+ ' . esc_attr($countryArray[$only_national]['code']) . ' ';?>" 
  class="wpcb_icon_inputs"
  id="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>" 
  name="<?php echo esc_attr($option_identificator) . "_phone_input"; ?>" 
  maxlength="<?php if($phone_maxlength){echo esc_attr($phone_maxlength);} else { echo "30";}?>"
  minlength="<?php if($phone_minlength){echo esc_attr($phone_minlength);} else { echo "7";}?>"
  placeholder="<?php if($input_placeholder){echo esc_attr($input_placeholder);} else { esc_attr_e('Your phone number', 'custom-product-manager');}?>"
  autocomplete="off"
  pattern="^[0-9\+.\- ]+$"
  <?php if($required){echo "required";} ?>/>


  <input type="hidden" name="<?php echo esc_attr($option_identificator) . "_phone_post"; ?>" id="<?php echo esc_attr($option_identificator) . "_phone_post"; ?>">
 

</div>
  </div>

     <?php if (!$disable_output) { ?>

     <p id="<?php echo esc_attr($option_identificator) . '_output_phone_value'?>" class="cp_output"></p>
     
     <?php } else { echo '<p></p>';}?>
     
     </fieldset>
     </div>
     </div>

      <?php } 

 else 
 
 {
    echo "</div>";


 }    
 
 ?>
