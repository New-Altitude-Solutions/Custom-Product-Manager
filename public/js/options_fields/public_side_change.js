//Prevent var not defined
var php_options_values = "null";
var $second_user_value = "null";

(function( $ ) {


$(function() {

    var price = php_options_values.price;
    var currency = php_options_values.currency;
    var currency_position = php_options_values.currency_position;

    var quantity_related = php_options_values.quantity_related;
    var free_option_text = php_options_values.free_option_text;

    var formula_notice_1= php_options_values.formula_notice_1;
    var formula_notice_2= php_options_values.formula_notice_2;
    var formula_notice_3= php_options_values.formula_notice_3;
    var formula_notice_4= php_options_values.formula_notice_4;
    
    var price_input = $('.summary.entry-summary > .price:eq(0)');
    var option_identificator = ["op1", "op2"];
    var array = {};
    
    $.each(option_identificator, function (index, id_value) {

        //get PHP values from inline script
     
        array [id_value + "_text_input_extra_value"] = php_options_values[id_value + "_text_input_extra_value"];
       
        array[id_value + "_text_area_extra_value"] = php_options_values[id_value + "_text_area_extra_value"];
        array[id_value + "_number_input_extra_value"] = php_options_values[id_value + "_number_input_extra_value"];
        array[id_value + "_url_extra_value"] = php_options_values[id_value + "_url_extra_value"];
    
        array[id_value + "_checkbox_value"] = php_options_values[id_value + "_checkbox_value"];
        array[id_value + "_checkbox_value_2"] = php_options_values[id_value + "_checkbox_value_2"];
        array[id_value + "_checkbox_value_3"] = php_options_values[id_value + "_checkbox_value_3"];
        array[id_value + "_checkbox_value_4"] = php_options_values[id_value + "_checkbox_value_4"];
    
        array[id_value + "_select_value"] = php_options_values[id_value + "_select_value"];
        array[id_value + "_select_value_2"] = php_options_values[id_value + "_select_value_2"];
        array[id_value + "_select_value_3"] = php_options_values[id_value + "_select_value_3"];
        array[id_value + "_select_value_4"] = php_options_values[id_value + "_select_value_4"];
        array[id_value + "_select_value_5"] = php_options_values[id_value + "_select_value_5"];
        array[id_value + "_select_value_6"] = php_options_values[id_value + "_select_value_6"];
    
        array[id_value + "_email_extra_value"] = php_options_values[id_value + "_email_extra_value"];
        array[id_value + "_color_extra_value"] = php_options_values[id_value + "_color_extra_value"];
    
        array[id_value + "_calcul_formula"] = php_options_values[id_value + "_calcul_formula"];

        array[id_value + "_phone_extra_value"] = php_options_values[id_value + "_phone_extra_value"];


       /* alert(id_value);*/

    });

    /*  $.each(array, function(key, val) {
      alert(key + " = " + val);
  }); */

  
/*
    console.log(array);
    console.log("op1_text_input_extra_value");
    console.log(array["op1_text_input_extra_value"]);
    console.log("op2_text_input_extra_value");
    console.log(array["op2_text_input_extra_value"]);
*/
 
    $.each(option_identificator, function(i, val) {

     
    

        // TEXT INPUTS ARE FILLED

        $('#' + val + '_text_input').on('input', function (e) {


            if(val ==="op1") {var a = 1; var b = 2;} 
            else if (val ==="op2") {var a = 2; var b = 1;}

            array[val +'_textInput'] = $('#' + val + '_text_input').val();

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);
           
            array[val +'_option_charge'] = parseFloat(array[val + "_text_input_extra_value"]);
    
            //Current option in local storage -> value
            localStorage.setItem('Option_' + a, array[val +'_option_charge']);
    
            //get the other OPTION (0 or value)
            array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

           /* window['option_' + b + '_float'] = parseFloat('option_'+b);*/

           if(quantity_related) { 
            var cost = parseFloat(price) + array[val + '_option_charge']  + array['option_'+ b];
            var option_cost = parseFloat(array[val + '_option_charge']  * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };

            var $output_id = $('#' + val + '_output_text_val');
    
             output_option_display_price($output_id, price_input, option_cost, currency, price_front);
    
            //"Free Option" if option=0
            if (array[val +'_option_charge'] == "0") {
                $('#' + val + '_output_text_val').html(free_option_text);
            }
    
            if (!array[val +'_textInput'] || array[val +'_textInput'].charAt(0) === " ") {
                
                //prevent white space calculation 
                $('#' + val + '_text_input').val("");
    
                // Current Option in local storage -> 0
                localStorage.setItem('Option_' + a, "0");

                //remove option value
                $('#' + val + '_output_text_val').html('');
    
                var quantity = $('[name=quantity]').val();

                if(quantity_related) { 
                var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_' + b]) * quantityNumber).toFixed(2);
                var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
                } else {
                var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                };

                remove_option_display_price(price_input, currency, RemovedValue);
    
            }
          
        });


         /* NUMBER INPUTS ARE FILLED */

    $('#' + val + '_number_custom_field').on('input', function (e) {
      

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        array[val +'_number_input'] = $('#' + val + '_number_custom_field').val();

           //Ask to use only numbers if filled with letters
             if(e.target.validity.badInput === true) {
                $('#' + val + '_NfillWithNumbers').html(formula_notice_1);
                                } else {$('#' + val + '_NfillWithNumbers').html('');}


        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        array[val +'_option_charge'] = parseFloat(array[val + "_number_input_extra_value"]);

        //Current Option in local storage -> value
        localStorage.setItem('Option_' + a, array[val +'_option_charge']);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if(quantity_related) { 
            var cost = parseFloat(price) + array[val + '_option_charge']  + array['option_'+ b];
            var option_cost = parseFloat(array[val + '_option_charge']  * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };

        var $output_id = $('#' + val + '_outputNumberValue');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        //"Free Option" if option_input = 0
        if (array[val +'_option_charge'] == "0") {
            $('#' + val + '_outputNumberValue').html(free_option_text);
        }

        if (!array[val +'_number_input']) {

      // Current Option in local storage -> 0
      localStorage.setItem('Option_' + a, "0");

            //remove option value
            $('#' + val + '_outputNumberValue').html('');

            var quantity = $('[name=quantity]').val();

            if(quantity_related) { 
                var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_' + b]) * quantityNumber).toFixed(2);
                var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
                } else {
                var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                };

            remove_option_display_price(price_input, currency, RemovedValue);

        }


    });


/* TEXT_AREA INPUTS ARE FILLED */

$('#' + val + '_text_area_input').on('input', function (e) {

    if(val ==="op1") {var a = 1; var b = 2;} 
    else if (val ==="op2") {var a = 2; var b = 1;}

    array[val +'_text_area'] = $('#' + val + '_text_area_input').val();


    var quantity = $('[name=quantity]').val();
    var quantityNumber = parseFloat(quantity).toFixed(2);

    array[val +'_option_charge'] = parseFloat(array[val + "_text_area_extra_value"]);

        //Current Option in local storage -> value
        localStorage.setItem('Option_' + a, array[val +'_option_charge']);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if(quantity_related) { 
            var cost = parseFloat(price) + array[val + '_option_charge']  + array['option_'+ b];
            var option_cost = parseFloat(array[val + '_option_charge']  * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };

    var $output_id = $('#' + val + '_output_text_area_val');

    output_option_display_price($output_id, price_input, option_cost, currency, price_front);

    //"Free Option" if option=0
    if (array[val +'_option_charge'] == "0") {
        $('#' + val + '_output_text_area_val').html(free_option_text);
    }

    if (!array[val +'_text_area'] || array[val +'_text_area'].charAt(0) === " ") {

        //prevent white space begin calculation
        $('#' + val + '_text_area_input').val('');
        
        //remove option value
        $('#' + val + '_output_text_area_val').html(' ');

        var quantity = $('[name=quantity]').val();

        if(quantity_related) { 
            var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_' + b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
            } else {
            var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
            };

        remove_option_display_price(price_input, currency, RemovedValue);

        // Current Option in local storage -> 0
        localStorage.setItem('Option_' + a, "0");

    }

});

     /* URL INPUTS ARE FILLED */

     $('#' + val + '_url_field').on('input', function (e) {

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}
    
        array[val +'_urlInput'] = $('#' + val + '_url_field').val();

        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        array[val +'_option_charge'] = parseFloat(array[val + "_url_extra_value"]);

           //Current Option in local storage -> value
           localStorage.setItem('Option_' + a, array[val +'_option_charge']);

           //get the other OPTION (0 or value)
           array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

           if(quantity_related) { 
            var cost = parseFloat(price) + array[val + '_option_charge']  + array['option_'+ b];
            var option_cost = parseFloat(array[val + '_option_charge']  * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };

        var $output_id = $('#' + val + '_outputUrlValue');

         output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        //"Free Option" if option=0
        if ( array[val +'_option_charge'] == "0") {
            $('#' + val + '_outputUrlValue').html(free_option_text);
        }

        if (! array[val +'_urlInput'] || array[val +'_urlInput'].charAt(0) === " ") {

            //prevent white space begin calculation
            $('#' + val + '_url_field').val('');

            //Current Option in local storage -> 0
            localStorage.setItem('Option_' + a, "0");

            $('#' + val + '_outputUrlValue').html('');

            var quantity = $('[name=quantity]').val();

            if(quantity_related) { 
                var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_' + b]) * quantityNumber).toFixed(2);
                var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
                } else {
                var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                };

            remove_option_display_price(price_input, currency, RemovedValue);

        }

    });   
    

     
     /* CHECKBOXES 1 ARE CHECKED */
     $('#' + val + '_checkbox').checkboxradio();
     $('#' + val + '_checkbox').change(function () {

        
        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        var checkbox = $(this), // Selected or current checkbox
        value = checkbox.val(); // Value of checkbox

        //Getting other checkbox values from local storage
        var check2_val = localStorage.getItem(val + '_check2');
        var check2_val_number = parseFloat(check2_val);

        var check3_val = localStorage.getItem(val + '_check3');
        var check3_val_number = parseFloat(check3_val);

        var check4_val = localStorage.getItem(val + '_check4');
        var check4_val_number = parseFloat(check4_val);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));


        if (checkbox.is(':checked')) {

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array[val + '_option_charge'] = parseFloat(array[val + '_checkbox_value']);

            //Set current option total value in localStorage 
            var total_checkbox_option_value = array[val + '_option_charge'] + check2_val_number + check3_val_number + check4_val_number;
            localStorage.setItem('Option_' +a, total_checkbox_option_value);

            //local Storage checkbox 1 value
            localStorage.setItem(val + '_check1', array[val + '_option_charge'] );

            if(quantity_related) {

                var cost = parseFloat(price) + array[val + '_option_charge'] + check2_val_number + check3_val_number + check4_val_number +  array['option_'+ b];
                var price_front = parseFloat(cost * quantityNumber).toFixed(2);
                var option_cost = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);

            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge'] + check2_val_number + check3_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(total_checkbox_option_value).toFixed(2);

            };

          

            var $output_id = $('.' + val + '_output_check_val');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (array [val + '_option_charge'] == 0 && total_checkbox_option_value != 0) {
                $('.' + val + '_output_check_val').append(' (Option ' + checkbox.val() + ' : ' + free_option_text + ')');
               }
                 else if (array [val + '_option_charge'] == 0 && total_checkbox_option_value == 0) {
                    $('.' + val + '_output_check_val').html(free_option_text);
                 };

        }

        else {

                //Set current Option total value in localStorage 
                var total_checkbox_option_value = check2_val_number + check3_val_number + check4_val_number;
                localStorage.setItem('Option_'+a, total_checkbox_option_value);
    
                //local Storage checkbox 1
                localStorage.setItem(val +'_check1', "0");

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);
            array[val + '_option_charge']  = parseFloat(array[val + '_checkbox_value']);

            if(quantity_related){
            var price_front = parseFloat((parseFloat(price) + array[val + '_option_charge']  + check2_val_number + check3_val_number + check4_val_number +  array['option_'+ b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front - (array[val + '_option_charge']  * quantityNumber)).toFixed(2);
            var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
        } 
            else {
                var RemovedValue = (parseFloat(price * quantityNumber) + check2_val_number + check3_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
                var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value).toFixed(2);
            };

            remove_option_display_price(price_input, currency, RemovedValue);

    
            if (total_checkbox_option_value_float == "0.00" && !$('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html('');
            } else if (total_checkbox_option_value_float == "0.00" && $('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html(free_option_text);
            } else {
                output_total_checkbox(currency_position, val, currency, total_checkbox_option_value_float);
            }

        }

    });

     
    /* CHECKBOXES 2 ARE CHECKED */
    $('#' + val + '_checkbox_2').checkboxradio();
    $('#' + val + '_checkbox_2').change(function () {

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        var checkbox = $(this), // Selected or current checkbox
            value = checkbox.val(); // Value of checkbox

        //Getting values from other checkbox in localStorage
        var check1_val = localStorage.getItem(val + '_check1');
        var check1_val_number = parseFloat(check1_val);

        var check3_val = localStorage.getItem(val + '_check3');
        var check3_val_number = parseFloat(check3_val);

        var check4_val = localStorage.getItem(val + '_check4');
        var check4_val_number = parseFloat(check4_val);

         //get the other OPTION (0 or value)
         array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if (checkbox.is(':checked')) {
            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array [val + '_option_charge'] = parseFloat(array [val + '_checkbox_value_2']);

            //Set current option total value in localStorage 
            var total_checkbox_option_value = array [val + '_option_charge'] + check1_val_number + check3_val_number + check4_val_number;
            localStorage.setItem('Option_' + a, total_checkbox_option_value);

            if(quantity_related) {
            var cost = parseFloat(price) + array [val + '_option_charge'] + check1_val_number + check3_val_number + check4_val_number + array['option_'+ b];
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            var option_cost = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge'] + check1_val_number + check3_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(total_checkbox_option_value).toFixed(2);
            }
            var $output_id = $('.' + val + '_output_check_val');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (array [val + '_option_charge'] == 0 && total_checkbox_option_value != 0) {
                $('.' + val + '_output_check_val').append(' (Option ' + checkbox.val() + ' : ' + free_option_text + ')');
               }
                 else if (array [val + '_option_charge'] == 0 && total_checkbox_option_value == 0) {
                    $('.' + val + '_output_check_val').html(free_option_text);
                 };

            //local Storage
            localStorage.setItem(val + '_check2', array [val + '_option_charge']);

        }

        else {

               //local Storage check 2
               localStorage.setItem(val + '_check2', "0");

                //Set current option total value in localStorage 
                var total_checkbox_option_value = check1_val_number + check3_val_number + check4_val_number;
                localStorage.setItem('Option_' + a, total_checkbox_option_value);

                var quantity = $('[name=quantity]').val();
                var quantityNumber = parseFloat(quantity).toFixed(2);
                array [val + '_option_charge'] = parseFloat(array [val + '_checkbox_value_2']);

            if(quantity_related){
                var price_front = parseFloat((parseFloat(price) + array[val + '_option_charge']  + check1_val_number + check3_val_number + check4_val_number +  array['option_'+ b]) * quantityNumber).toFixed(2);
                var RemovedValue = parseFloat(price_front - (array[val + '_option_charge']  * quantityNumber)).toFixed(2);
                var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
            } 
                else {
                    var RemovedValue = (parseFloat(price * quantityNumber) + check1_val_number + check3_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
                    var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value).toFixed(2);
                };
    

            remove_option_display_price(price_input, currency, RemovedValue);

            if (total_checkbox_option_value_float == "0.00" && !$('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html('');
            } else if (total_checkbox_option_value_float == "0.00" && $('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html(free_option_text);
            } else {
                output_total_checkbox(currency_position, val, currency, total_checkbox_option_value_float);
            }
        }


    });

 /* CHECKBOXES 3 ARE CHECKED */
 $('#' + val + '_checkbox_3').checkboxradio();
 $('#' + val + '_checkbox_3').change(function () {

    if(val ==="op1") {var a = 1; var b = 2;} 
    else if (val ==="op2") {var a = 2; var b = 1;}

    var checkbox = $(this), // Selected or current checkbox
        value = checkbox.val(); // Value of checkbox

    //get checkbox values from local storage
    var check1_val = localStorage.getItem(val + '_check1');
    var check1_val_number = parseFloat(check1_val);

    var check2_val = localStorage.getItem(val + '_check2');
    var check2_val_number = parseFloat(check2_val);

    var check4_val = localStorage.getItem(val + '_check4');
    var check4_val_number = parseFloat(check4_val);

    //get the other OPTION (0 or value)
    array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

    if (checkbox.is(':checked')) {
        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        array [val + '_option_charge'] = parseFloat(array [val + '_checkbox_value_3']);

        //Set current option total value in localStorage 
        var total_checkbox_option_value = array [val + '_option_charge'] + check1_val_number + check2_val_number + check4_val_number;
        localStorage.setItem('Option_' + a, total_checkbox_option_value);

        if(quantity_related) {
        var cost = parseFloat(price) + array [val + '_option_charge'] + check1_val_number + check2_val_number + check4_val_number +  array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
             } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge'] + check2_val_number + check2_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(total_checkbox_option_value).toFixed(2);
             };

        var $output_id = $('.' + val + '_output_check_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (array [val + '_option_charge'] == 0 && total_checkbox_option_value != 0) {
            $('.' + val + '_output_check_val').append(' (Option ' + checkbox.val() + ' : ' + free_option_text + ')');
           }
             else if (array [val + '_option_charge'] == 0 && total_checkbox_option_value == 0) {
                $('.' + val + '_output_check_val').html(free_option_text);
             };

        //local Storage checkbox 3
        localStorage.setItem(val + '_check3', array [val + '_option_charge']);

    }

    else {

        //local Storage check 3
        localStorage.setItem(val + '_check3', "0");

          //Set current option total value in localStorage 
          var total_checkbox_option_value = check1_val_number + check2_val_number + check4_val_number;
          localStorage.setItem('Option_' + a, total_checkbox_option_value);
     
        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);
        array [val + '_option_charge'] = parseFloat(array [val + '_checkbox_value_3']);

        if(quantity_related) {
            var price_front = parseFloat((parseFloat(price) + array [val + '_option_charge'] + check1_val_number + check2_val_number + check4_val_number + array['option_'+ b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front - (array [val + '_option_charge'] * quantityNumber)).toFixed(2);
            var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
        } else {
            var RemovedValue = (parseFloat(price * quantityNumber) + check1_val_number + check2_val_number + check4_val_number +  array['option_'+ b]).toFixed(2);
            var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value).toFixed(2);
        };
     
       
        remove_option_display_price(price_input, currency, RemovedValue);

        if (total_checkbox_option_value_float == "0.00" && !$('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
            $('.' + val + '_output_check_val').html('');
        } else if (total_checkbox_option_value_float == "0.00" && $('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
            $('.' + val + '_output_check_val').html(free_option_text);
        } else {
            output_total_checkbox(currency_position, val, currency, total_checkbox_option_value_float);
        }

    }

});


    /* CHECKBOXES 4 ARE CHECKED */
    $('#' + val + '_checkbox_4').checkboxradio();
    $('#' + val + '_checkbox_4').change(function () {

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        var checkbox = $(this), // Selected or current checkbox
            value = checkbox.val(); // Value of checkbox

        //getting checkbox values from Localtorage
        var check1_val = localStorage.getItem(val + '_check1');
        var check1_val_number = parseFloat(check1_val);

        var check2_val = localStorage.getItem(val + '_check2');
        var check2_val_number = parseFloat(check2_val);

        var check3_val = localStorage.getItem(val + '_check3');
        var check3_val_number = parseFloat(check3_val);

    //get the other OPTION (0 or value)
    array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if (checkbox.is(':checked')) {
            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array [val + '_option_charge'] = parseFloat(array[val+'_checkbox_value_4']);


            //Set current option total value in localStorage 
            var total_checkbox_option_value = array [val + '_option_charge'] + check1_val_number + check2_val_number + check3_val_number;
            localStorage.setItem('Option_'+a, total_checkbox_option_value);

            if(quantity_related) {
            var cost = parseFloat(price) + array [val + '_option_charge'] + check1_val_number + check2_val_number + check3_val_number + array['option_'+ b];
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            var option_cost = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
        } else {
            var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge'] + check2_val_number + check2_val_number + check3_val_number +  array['option_'+ b]).toFixed(2);
            var option_cost = parseFloat(total_checkbox_option_value).toFixed(2);
        };
            var $output_id = $('.' + val + '_output_check_val');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (array [val + '_option_charge'] == 0 && total_checkbox_option_value != 0) {
                $('.' + val + '_output_check_val').append(' (Option ' + checkbox.val() + ' : ' + free_option_text + ')');
               }
                 else if (array [val + '_option_charge'] == 0 && total_checkbox_option_value == 0) {
                    $('.' + val + '_output_check_val').html(free_option_text);
                 };

            //local Storage check 4
            localStorage.setItem(val + '_check4', array [val + '_option_charge']);

        }


        else {

            //local Storage check 4
            localStorage.setItem(val + '_check4', "0");

            //Set current option  total value in localStorage 
            var total_checkbox_option_value = check1_val_number + check2_val_number + check3_val_number;
            localStorage.setItem('Option_' + a, total_checkbox_option_value);

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);
            array [val + '_option_charge'] = parseFloat(array [val + '_checkbox_value_4']);
            
            if(quantity_related) {
            var price_front = parseFloat((parseFloat(price) + array [val + '_option_charge'] + check1_val_number + check2_val_number + check3_val_number + array['option_'+ b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front - (array [val + '_option_charge'] * quantityNumber)).toFixed(2);
            var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value * quantityNumber).toFixed(2);
            } else {
                var RemovedValue = (parseFloat(price * quantityNumber) + check1_val_number + check2_val_number + check3_val_number +  array['option_'+ b]).toFixed(2);
                var total_checkbox_option_value_float = parseFloat(total_checkbox_option_value).toFixed(2);
            };

            remove_option_display_price(price_input, currency, RemovedValue);

            if (total_checkbox_option_value_float == "0.00" && !$('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html('');
            } else if (total_checkbox_option_value_float == "0.00" && $('.ui-checkboxradio-icon').hasClass("ui-state-checked")) {
                $('.' + val + '_output_check_val').html(free_option_text);
            } else {
                output_total_checkbox(currency_position, val, currency, total_checkbox_option_value_float);
            }

        }

    });



   /* SELECT INPUTS CHANGED */

   $('#' + val + '_select_input').selectmenu({

    change: function (event, data) {

    if(val ==="op1") {var a = 1; var b = 2;} 
    else if (val ==="op2") {var a = 2; var b = 1;}

    var quantity = $('[name=quantity]').val();
    var quantityNumber = parseFloat(quantity).toFixed(2);

    //get number of index to send in php post after
    $('#' + val + '_selector_index').val($('#' + val + '_select_input').prop('selectedIndex'));

    var selected_index = $('#' + val + '_selector_index').val();

    var opnumber1 = parseFloat(array[val + '_select_value']);
    var opnumber2 = parseFloat(array[val + '_select_value_2']);
    var opnumber3 = parseFloat(array[val + '_select_value_3']);
    var opnumber4 = parseFloat(array[val + '_select_value_4']);
    var opnumber5 = parseFloat(array[val + '_select_value_5']);
    var opnumber6 = parseFloat(array[val + '_select_value_6']);

    //get the other OPTION (0 or value)
    array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

    if (selected_index == "1") {

        //Current option in local storage -> value
        localStorage.setItem('Option_'+ a, opnumber1);
    
            if(quantity_related) { 
        var cost = parseFloat(price) + opnumber1 + array['option_'+ b];
        var option_cost = parseFloat(opnumber1 * quantityNumber).toFixed(2);
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
         } else {
        var price_front = (parseFloat(price * quantityNumber) + opnumber1  + array['option_'+ b]).toFixed(2);
        var option_cost = parseFloat(opnumber1).toFixed(2);
    };

        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);
        }
    }

    else if (selected_index == "2") {

        //Current option in local storage -> value
        localStorage.setItem('Option_' + a, opnumber2);

        if(quantity_related) {
        var cost = parseFloat(price) + opnumber2 + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(opnumber2 * quantityNumber).toFixed(2);
    } else {
        var price_front = (parseFloat(price * quantityNumber) + opnumber2  + array['option_'+ b]).toFixed(2);
        var option_cost = parseFloat(opnumber2).toFixed(2);
    };
        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);

        }

    }

    else if (selected_index == "3") {

        //Current option in local storage -> value
        localStorage.setItem('Option_' + a, opnumber3);

        if(quantity_related) {
        var cost = parseFloat(price) + opnumber3 + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(opnumber3 * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + opnumber3  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(opnumber3).toFixed(2);
            };
        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);

        }

    }

    else if (selected_index == "4") {

        //Current option in local storage -> value
        localStorage.setItem('Option_'+a, opnumber4);

        if(quantity_related){
        var cost = parseFloat(price) + opnumber4 + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(opnumber4 * quantityNumber).toFixed(2);
             }else {
                var price_front = (parseFloat(price * quantityNumber) + opnumber4  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(opnumber4).toFixed(2);
             };

        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);

        }

    }

    else if (selected_index == "5") {

        //Current option in local storage -> value
        localStorage.setItem('Option_'+a, opnumber5);

        if(quantity_related) {
        var cost = parseFloat(price) + opnumber5 + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(opnumber5 * quantityNumber).toFixed(2);
        } else {
            var price_front = (parseFloat(price * quantityNumber) + opnumber5  + array['option_'+ b]).toFixed(2);
            var option_cost = parseFloat(opnumber5).toFixed(2);
        };

        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);

        }

    }

    else if (selected_index == "6") {

        //Current option in local storage -> value
        localStorage.setItem('Option_'+ a, opnumber6);

        if(quantity_related) {
        var cost = parseFloat(price) + opnumber6 + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(opnumber6 * quantityNumber).toFixed(2);
        } else {
            var price_front = (parseFloat(price * quantityNumber) + opnumber6  + array['option_'+ b]).toFixed(2);
            var option_cost = parseFloat(opnumber6).toFixed(2);
        };

        var $output_id = $('#' + val + '_output_select_val');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        if (option_cost == "0.00") {
            $('#' + val + '_output_select_val').html(free_option_text);

        }

    }

    else {

        //Current option in local storage -> 0
        localStorage.setItem('Option_'+a, "0");

        if(quantity_related){
        var cost = parseFloat(price) + array['option_'+ b];
        var RemovedValue = parseFloat(cost * quantityNumber).toFixed(2);
          } else {
        var RemovedValue = parseFloat((price * quantityNumber) + array['option_'+ b]).toFixed(2);  
        };

        remove_option_display_price(price_input, currency, RemovedValue);
     
        $('#' + val + '_output_select_val').html(' ');

    }

}

});

 
    /* Radio buttons are clicked */

    $('input[name=' + val + '_radio_value]').checkboxradio();

    $('input[name=' + val + '_radio_value]').on( "change", function( event, ui ) {

        var loopDone = false;
 
        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        if (this.checked) {
       
            var chooseButtonValue = $('input[name="' + val + '_radio_value"]:checked').val();

            //get number of radio button to send in php post after
            $('#' + val + '_radio_indexer').val($('input[name="' + val + '_radio_value"]').index($('input[name="' + val + '_radio_value"]:checked')));

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array[val + '_option_charge'] = parseFloat(chooseButtonValue);

            //get the other OPTION (0 or value)
            array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

            //Current option in local storage 
            localStorage.setItem('Option_' + a, array[val +'_option_charge']);

                if(quantity_related) { 
            var cost = parseFloat(price) + array[val +'_option_charge'] +  array['option_'+ b];
            var option_cost = parseFloat(array[val +'_option_charge'] * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        } else {
            var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
            var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
        };
            var $output_id = $('#' + val + '_outputRadioValue');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (chooseButtonValue == 0) {
                $('#' + val + '_outputRadioValue').html(free_option_text);
            }


        } 

    
    var current_radio_group = $('input[name=' + val + '_radio_value]');

        //uncheck radio, remove option and display new price when radio not clicked
        uncheck_radio_remove_option($output_id, price_input, currency, a, b, val, current_radio_group, loopDone);

      
    });




  
    /* IMG SWAP ARE CLICKED */

    $('input[name=' + val + '_img_radio]').checkboxradio();

    $('input[name=' + val + '_img_radio]').change(function () {

        var loopDone = false;

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        if (this.checked) {

            var chooseImgValue = $('input[name="'+val+'_img_radio"]:checked').val();

            //get number of img index to send in php post after
            $('#'+val+'_img_indexer').val($('input[name="'+val +'_img_radio"]').index($('input[name="'+val + '_img_radio"]:checked')));

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array [val +'_option_charge'] = parseFloat(chooseImgValue);

            //get the other OPTION (0 or value)
            array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

            //Current option in local storage 
            localStorage.setItem('Option_' + a, array[val +'_option_charge']);

            if(quantity_related){
            var cost = parseFloat(price) + array [val +'_option_charge'] + array['option_'+ b];
            var option_cost = parseFloat(array [val +'_option_charge'] * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };
            var $output_id = $('#' + val + '_outputImgValue');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (chooseImgValue == 0) {
                $('#' + val +'_outputImgValue').html(free_option_text);
            }
        }


           var current_radio_group = $('input[name=' + val + '_img_radio]');

          //uncheck radio, remove option and display new price when radio not clicked
          uncheck_radio_remove_option($output_id, price_input, currency, a, b, val, current_radio_group, loopDone);
          
    });


    
    /* EMAIL INPUTS ARE FILLED  */

    $('#' + val + '_email_field').on('input', function (e) {

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        //output option value
        $('#' + val + '_outputEmailValue').css("display", "block");

        array[val + '_emailInput'] = $('#' + val + '_email_field').val();

        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        array [val + '_option_charge'] = parseFloat(array[val + '_email_extra_value']);

        //Current option in local storage -> value
        localStorage.setItem('Option_' + a, array [val + '_option_charge']);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if(quantity_related){
        var cost = parseFloat(price) + array [val + '_option_charge'] + array['option_'+ b];
        var price_front = parseFloat(cost * quantityNumber).toFixed(2);
        var option_cost = parseFloat(array [val + '_option_charge'] * quantityNumber).toFixed(2);
             } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
             };

        var $output_id = $('#' + val + '_outputEmailValue');

        output_option_display_price($output_id, price_input, option_cost, currency, price_front);

              //"Free Option" if option=0
              if (array[val +'_option_charge'] == "0") {
                $('#' + val + '_outputEmailValue').html(free_option_text);
            }


        if (!array[val + '_emailInput'] || array[val +'_emailInput'].charAt(0) === " ") {

            //prevent white space calculation
            $('#' + val + '_email_field').val(''); 

            //Current option in local storage -> 0
            localStorage.setItem('Option_'+a, "0");

            $('#' + val + '_outputEmailValue').html('');

            var quantity = $('[name=quantity]').val();

            if(quantity_related) {
            var price_front = parseFloat((parseFloat(price) + array [val + '_option_charge'] + array['option_'+ b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front - (array [val + '_option_charge'] * quantityNumber)).toFixed(2);
        } else {
            var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
        };
            remove_option_display_price(price_input, currency, RemovedValue);

        }

    });   


    /* Button SWAP are CLICKED */

    $('input[name='+val + '_btn_radio]').checkboxradio({
        icon:false
    });

    $('input[name='+val + '_btn_radio]').change(function () {

        var loopDone = false;

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        if (this.checked) {

            var BtnChooseValue = $('input[name="'+val + '_btn_radio"]:checked').val();

            //get number of img index to send in php post after
            $('#' + val +'_btn_indexer').val($('input[name="'+val + '_btn_radio"]').index($('input[name="'+val +'_btn_radio"]:checked')));

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);

            array[val + '_option_charge'] = parseFloat(BtnChooseValue);

            //get the other OPTION (0 or value)
             array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

            //Current option in local storage -> value
            localStorage.setItem('Option_' + a, array [val + '_option_charge']);

            if(quantity_related) { 
            var cost = parseFloat(price) + array[val + '_option_charge']  + array['option_'+ b];
            var option_cost = parseFloat(array[val + '_option_charge']  * quantityNumber).toFixed(2);
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            } else {
                var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
                var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
            };

            var $output_id = $('#' + val + '_outputBtnValue');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            if (BtnChooseValue == 0) {
                $('#' + val + '_outputBtnValue').html(free_option_text);
            }
        }

        
        var current_radio_group = $('input[name='+val + '_btn_radio]');

       //uncheck radio, remove option and display new price when radio not clicked
       uncheck_radio_remove_option($output_id, price_input, currency, a, b, val, current_radio_group, loopDone);

    });

 /* COLOR INPUTS ARE FILLED */

 //click on custom input click on color input
 $('#' + val + '_click_color').click(function(){
    $('#' + val + '_color_custom_field').click();
  });

  //need a default color to work and show colors
 $('#' + val + '_color_custom_field').val('#a4a4a4');

 /*$('#' + val + '_color_custom_field').css('opacity', '0.03');*/

 $('#' + val + '_color_custom_field').on('input', function (e) {


    //Custom input get the color
  

    var wpcb_user_color = $('#' + val + '_color_custom_field').val();
    $('#' + val + '_click_color').val(' ');
    $('#' + val + '_click_color').attr('style', 'background:' + wpcb_user_color + '!important');


    if(val ==="op1") {var a = 1; var b = 2;} 
    else if (val ==="op2") {var a = 2; var b = 1;}

     $('#' + val + '_color_custom_field').css('opacity', '1');
     array[val + '_colorInput'] = $('#' + val + '_color_custom_field').val();

     var quantity = $('[name=quantity]').val();
     var quantityNumber = parseFloat(quantity).toFixed(2);

     array[val +'_option_charge'] = parseFloat(array [val + '_color_extra_value']);

     //Current option in local storage -> value
     localStorage.setItem('Option_'+a, array[val +'_option_charge']);

     //get the other OPTION (0 or value)
     array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

     if(quantity_related) {
     var cost = parseFloat(price) + array[val +'_option_charge'] + array['option_'+ b];
     var price_front = parseFloat(cost * quantityNumber).toFixed(2);
     var option_cost = parseFloat(array[val +'_option_charge'] * quantityNumber).toFixed(2);
     } else {
        var price_front = (parseFloat(price * quantityNumber) + array[val + '_option_charge']  + array['option_'+ b]).toFixed(2);
        var option_cost = parseFloat(array[val + '_option_charge']).toFixed(2);
     };
     var $output_id = $('#' + val + '_outputColorValue');

     output_option_display_price($output_id, price_input, option_cost, currency, price_front);

     //"Free Option" if option=0
     if (array[val +'_option_charge'] == "0") {
         $('#' + val + '_outputColorValue').html(free_option_text);
     }

     if (array[val + '_colorInput'] == "#a4a4a4") {

         /*$('#' + val + '_color_custom_field').css('opacity', '0.03');*/

         //Current option in local storage -> 0
         localStorage.setItem('Option_'+a, "0");

         $('#' + val + '_click_color').css('background', 'transparent');
         $('#' + val + '_click_color').attr('placeholder', 'Choose a custom color');

         $('#' + val + '_outputColorValue').html('');

         var quantity = $('[name=quantity]').val();

        if(quantity_related){
         var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_'+ b]) * quantityNumber).toFixed(2);
         var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
        } else {
        var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
        };

        $('#' + val + '_click_color').val('Choose a custom color');
         remove_option_display_price(price_input, currency, RemovedValue);

     }

 });   



    /* NUMBER CALCULATION INPUTS 1 ARE FILLED */

    $('#' + val + '_calcul_number_custom_field').on('input', function (e) {


   /*     if($('#' + val + '_calcul_number_custom_field').val() == 0) {

            return false;
        }*/

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

   
        var $user_value = $('#' + val + '_calcul_number_custom_field').val();
        var $second_user_value_input = $('#' + val + '_calcul_number_custom_field_2');

               //Ask to use only numbers if filled with letters
               if(e.target.validity.badInput === true) {
                $('#' + val + '_fillWithNumbers').show();
                $('#' + val + '_fillWithNumbers').html(formula_notice_1);
                                } else {$('#' + val + '_fillWithNumbers').hide();
                            }
 
        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        if ($second_user_value_input.val()) {
            $second_user_value = $('#' + val + '_calcul_number_custom_field_2').val();
        } else if ($second_user_value_input && !$second_user_value_input.val()) {
            $second_user_value = "";
        }

        var active_formula = array[val + '_calcul_formula'].replace('$user_value', $user_value);

        if ($user_value && $user_value != 0) {

            //Calculate (Function instead of eval())
            var calcul_result = Function("return " + active_formula)();

            //Current option in local storage -> value
            localStorage.setItem('Option_'+a, calcul_result);

            if(quantity_related){
            var cost = parseFloat(price) + calcul_result + array['option_'+ b];
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            var option_cost = parseFloat(calcul_result * quantityNumber).toFixed(2);
                } else {
            var price_front = (parseFloat(price * quantityNumber) + calcul_result + array['option_'+ b]).toFixed(2);
            var option_cost = parseFloat(calcul_result).toFixed(2);
                };

            var $output_id = $('#' + val + '_outputCalculValue');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

            //"Free Option" if option=0
            if (calcul_result == "0") {
                $('#' + val + '_outputCalculValue').html(free_option_text);
            }

            if (calcul_result == "0" && $second_user_value_input) {
                $('#' + val + '_outputCalculValue').html(formula_notice_2);
            }

            if (calcul_result && $second_user_value_input && $second_user_value_input.val() == "") {
                calcul_result = 0;
                $('#' + val + '_outputCalculValue').html(formula_notice_2);
             }

           


        }

        else {

            //Current option in local storage -> 0
            localStorage.setItem('Option_'+a, "0");

            $('#' + val + '_outputCalculValue').html('');

            if ($second_user_value) {
                $('#' + val + '_outputCalculValue').html(formula_notice_3);
            }

            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity);

            if(quantity_related){
            var price_front = parseFloat((parseFloat(price) + array['option_'+ b]) * quantityNumber).toFixed(2);
            var RemovedValue = parseFloat(price_front).toFixed(2);
                } else {
            var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                };

            remove_option_display_price(price_input, currency, RemovedValue);
        }

    });



    /* NUMBER CALCULATION INPUTS 2 ARE FILLED */

    $('#' + val + '_calcul_number_custom_field_2').on('input', function (e) {

        if(val ==="op1") {var a = 1; var b = 2;} 
        else if (val ==="op2") {var a = 2; var b = 1;}

        var $user_value = $('#' + val + '_calcul_number_custom_field').val();

        var quantity = $('[name=quantity]').val();
        var quantityNumber = parseFloat(quantity).toFixed(2);

        //get the other OPTION (0 or value)
        array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));

        $second_user_value = $('#' + val + '_calcul_number_custom_field_2').val();

             //Ask to use only numbers if filled with letters
             if(e.target.validity.badInput === true) {
                $('#' + val + '_fillWithNumbers').show();
                $('#' + val + '_fillWithNumbers').html(formula_notice_1);
                                } else {$('#' + val + '_fillWithNumbers').hide();}

        if ($second_user_value && $user_value && $user_value != 0 && $second_user_value != 0) {

            var active_formula = array[val + '_calcul_formula'].replace('$user_value', $user_value);

            //Calculate (Function instead of eval())
            var calcul_result = Function("return " + active_formula)();

            //Current option in local storage -> value
            localStorage.setItem('Option_'+a, calcul_result);

            if(quantity_related){
            var cost = parseFloat(price) + calcul_result + array['option_'+ b];
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            var option_cost = parseFloat(calcul_result * quantityNumber).toFixed(2);
                 } else {
             var price_front = (parseFloat(price * quantityNumber) + calcul_result + array['option_'+ b]).toFixed(2);
             var option_cost = parseFloat(calcul_result).toFixed(2);
                 };

            var $output_id = $('#' + val + '_outputCalculValue');

            output_option_display_price($output_id, price_input, option_cost, currency, price_front);

        } 
        
        else if (!$second_user_value && !$user_value) {
            $('#' + val + '_outputCalculValue').html('');

         } 
         
         else {

            //Current option in local storage -> 0
            localStorage.setItem('Option_'+a, "0");

            $('#' + val + '_outputCalculValue').html(formula_notice_4);

            if(quantity_related){

            var RemovedValue = parseFloat((parseFloat(price) + array['option_'+ b]) * quantityNumber).toFixed(2);
                 } else {
            var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                 };

            remove_option_display_price(price_input, currency, RemovedValue);

        }

    });


        /* PHONE INPUTS ARE FILLED */


        $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
            _renderItem: function( ul, item ) {
              var li = $( "<li>" ),
                wrapper = $( "<div>", { text: item.label } );
       
              if ( item.disabled ) {
                li.addClass( "ui-state-disabled" );
              }
       
              $( "<span>", {
                style: item.element.attr( "data-style" ),
                "class": "ui-icon " + item.element.attr( "data-class" )
              })
                .appendTo( wrapper );
       
              return li.append( wrapper ).appendTo( ul );
            }
          });
       
   
          $('#' + val + 'wpcb_i8n_select').iconselectmenu({


            create:function(event,ui) {
                $('#' + val + '_output_phone_value').html('');
                $('#' + val + '_phone_input').val('');
                   },


                   close:function(event,ui) {
                    $('#' + val + '_output_phone_value').html('');
                    $('#' + val + '_phone_input').val('+ ' + $('#' + val + 'wpcb_i8n_select option:selected').text().replace(/\D/g,'')+ ' ');
                        
                       }
                  

          }).iconselectmenu( "menuWidget")
          .addClass( "ui-menu-icons avatar" ).addClass( "cpm_overflow" );

          /*
          $('#' + val + 'wpcb_i8n_select').on('change', function(e) {
            $('#' + val + '_phone_input').val('+ ' + $(this).val().replace(/\D/g,''));
            $('#' + val + 'wpcb_i8n_select').attr('style', 'width:fit-content;')
                      })
*/
        $('#' + val + '_phone_input').on('input', function (e) {

            if(val ==="op1") {var a = 1; var b = 2;} 
            else if (val ==="op2") {var a = 2; var b = 1;}
    
            array[val + '_phoneInput'] = $('#' + val + '_phone_input').val();
    
            var quantity = $('[name=quantity]').val();
            var quantityNumber = parseFloat(quantity).toFixed(2);
    
            array [val + '_option_charge'] = parseFloat(array[val + '_phone_extra_value']);
    
            //Current option in local storage -> value
            localStorage.setItem('Option_' + a, array [val + '_option_charge']);
    
            //get the other OPTION (0 or value)
            array['option_'+ b] = parseFloat(localStorage.getItem('Option_' +b));
    
            if(quantity_related){
            var cost = parseFloat(price) + array [val + '_option_charge'] + array['option_'+ b];
            var price_front = parseFloat(cost * quantityNumber).toFixed(2);
            var option_cost = parseFloat(array [val + '_option_charge'] * quantityNumber).toFixed(2);
                    } else {
             var price_front = (parseFloat(price * quantityNumber) + array [val + '_option_charge'] + array['option_'+ b]).toFixed(2);
             var option_cost = parseFloat(array [val + '_option_charge']).toFixed(2);
                    };

            var $output_id = $('#' + val + '_output_phone_value');

            	//fill input hidden phone post on input to check if user give a value if PHP post
                $('#' + val + '_phone_post').val(array[val + '_phoneInput']);
            
         
            output_option_display_price($output_id, price_input, option_cost, currency, price_front);
    
            //"Free Option" if option=0
            if (array [val + '_option_charge'] == "0") {
                $('#' + val + '_output_phone_value').html(free_option_text);
            }

            if (!array[val +'_phoneInput'] || array[val +'_phoneInput'].charAt(0) === " ") {
                
                //prevent white space calculation 
                $('#' + val + '_phone_input').val("");
    
                // Current Option in local storage -> 0
                localStorage.setItem('Option_' + a, "0");

                //remove option value
                $('#' + val + '_output_phone_value').html('');
    
                var quantity = $('[name=quantity]').val();
    
                if(quantity_related){
                var price_front = parseFloat((parseFloat(price) + array[val +'_option_charge'] + array['option_' + b]) * quantityNumber).toFixed(2);
                var RemovedValue = parseFloat(price_front - (array[val +'_option_charge'] * quantityNumber)).toFixed(2);
                     } else {
                var RemovedValue = (parseFloat(price * quantityNumber) + array['option_'+ b]).toFixed(2);
                     };

                remove_option_display_price(price_input, currency, RemovedValue);
    
            }

            
        });
        


    });

   



    function output_option_display_price($output_id, price_input, option_cost, currency, price_front) {

        var $output_id = $output_id;
        var price_input = price_input;
        var option_cost = option_cost;
        var currency = currency;
        var price_front = price_front;
        var cost_option_text = php_options_values.cost_option_text;


        // Outputing option cost & new price with options
        // if curreny position = left || left_space, symbol on the left, else on the right.
        if (currency_position == "left") {
            $output_id.html(cost_option_text + ' ' + currency + option_cost);
            var new_price = price_input.html(currency + price_front);
        }

        else if (currency_position == "left_space") {
            $output_id.html(cost_option_text + ' ' + currency + ' ' + option_cost);
            var new_price = price_input.html(currency + ' ' + price_front);
        }

        else if (currency_position == "right") {
            $output_id.html(cost_option_text + ' ' + option_cost + currency);
            var new_price = price_input.html(price_front + currency);
        }

        else if (currency_position == "right_space") {
            $output_id.html(cost_option_text + ' ' + option_cost + ' ' + currency);
            var new_price = price_input.html(price_front + ' ' + currency);
        } else {
            //do something
        };

    }

    // Displaying back original price without options
    function remove_option_display_price(price_input, currency, RemovedValue) {

        var price_input = price_input;
        var currency = currency;
        var RemovedValue = RemovedValue;

                 //currency positon + removed Value
            if (currency_position == "left") {
                var new_price = price_input.html(currency + RemovedValue);
            } else if (currency_position == "left_space") {
                var new_price = price_input.html(currency + ' ' + RemovedValue);
            } else if (currency_position == "right") {
                var new_price = price_input.html(RemovedValue + currency);
            } else if (currency_position == "right_space") {
                var new_price = price_input.html(RemovedValue + '&nbsp' + currency);
            } else {
                //dosomething
            };
    }


    function output_total_checkbox(currency_position, val, currency, total_checkbox_option_value_float) {

        var currency_position = currency_position;
        var val = val;
        var currency = currency;
        var total_checkbox_option_value_float = total_checkbox_option_value_float;
        var cost_option_text = php_options_values.cost_option_text;

        if (currency_position == "left") {
            $('.' + val + '_output_check_val').html(cost_option_text + ' ' +  currency + total_checkbox_option_value_float);}
        else if (currency_position == "left_space") {
            $('.' + val + '_output_check_val').html(cost_option_text + ' ' + currency + ' ' + total_checkbox_option_value_float);}
        else if (currency_position == "right") {
            $('.' + val + '_output_check_val').html(cost_option_text + ' ' + total_checkbox_option_value_float + currency);}
        else if (currency_position == "right_space") {
            $('.' + val + '_output_check_val').html(cost_option_text + ' ' + total_checkbox_option_value_float + ' ' + currency);}

    }



            //Uncheck radio when clicking outside
            function uncheck_radio_remove_option($output_id, price_input, currency, a, b, val, current_radio_group, loopDone) {
  
                var $output_id = $output_id;
                var price_input = price_input;
                var currency = currency;
                var a = a;
                var b = b;
                var val = val;
                var current_radio_group = current_radio_group;
                var loopDone = loopDone;

        
                $(document).on("click", function (event) {
                   
                    function click_on_radio() {
                        
                        if (event.target.className === 'ui-selectmenu-button ui-button ui-widget ui-selectmenu-button-open ui-corner-top'
                        || event.target.className === 'ui-selectmenu-icon ui-icon ui-icon-triangle-1-s' 
                        || event.target.className === 'ui-menu-item-wrapper ui-state-active' 
                        || event.target.className === 'ui-selectmenu-text' 
                        || event.target.className === 'wpcb_input_container'  
                        || event.target.className === 'wpcb_phone_container'  
                        || event.target.className === 'wpcb_icons' 
                        || event.target.className === 'ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank' 
                        || event.target.className === 'checkmark_radio' 
                        || event.target.className === 'checkmark' 
                        || event.target.type === 'radio' 
                        || event.target.localName === 'button' 
                        || event.target.localName === 'textarea' 
                        || event.target.localName === 'select' 
                        || event.target.localName === 'option' 
                        || event.target.localName === 'label' 
                        || event.target.localName === 'input' 
                        || event.target.localName === 'img' 
                        || event.target.localName === 'i') 
                        
                        { return true; } 

                        else {

                        return false;
                            
                        }
                    }

                    if (click_on_radio() === false && loopDone === false) {

                        var quantity = $('[name=quantity]').val();
                        var quantityNumber = parseFloat(quantity).toFixed(2);

                        //uncheck radio & checkbox 
                        current_radio_group.removeAttr('checked');
                        current_radio_group.removeAttr('checked');
                        current_radio_group.checkboxradio('refresh');


                        //uncheck img swap / btn swap
                        $('.' + val + '_btn-swap').removeClass('active');
                        $('.cpm_img_swap img').removeClass('wpcb_img_focus');


                        $output_id.html('');

                        //Local storage option value => 0
                        localStorage.setItem('Option_' + a, 0);
                        //get the other OPTION (0 or value)
                        array['option_' + b] = parseFloat(localStorage.getItem('Option_' + b));

                        var pre_RemovedValue = (price * quantityNumber) + (array['option_' + b] * quantityNumber);
                        RemovedValue = parseFloat(pre_RemovedValue).toFixed(2);

                        remove_option_display_price(price_input, currency, RemovedValue);

                       // prevent each loop array for repeating and get bigger.
                       loopDone = true;
                       return loopDone;
                    } 
             
         

     
            });

     
    
        }



});









})( jQuery );