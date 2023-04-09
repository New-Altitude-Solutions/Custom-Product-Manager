


(function( $ ) {
	'use strict';


			/**
			 * 
			 * JS DOM ready events 
			 * 
			 * Color & Checkbox inputs required js
			 * BTN Swap & Img Swap JS animation
			 * Reset localStorage/Uncheck/unselect/clear 
			 * 
			 */



	 $(function() {


		var option_identificator = ["op1", "op2"];
		var array = {};
		
		$.each(option_identificator, function (index, id_value) {

			//Color inputs required
			var color_required = $('#'+id_value + '_color_required').val();
			if (color_required) {
				$('[name=add-to-cart]').on('click', function (event) {
					var color = $('#'+ id_value +'_color_custom_field').val();
					if (color == "#a4a4a4") {
						event.preventDefault();
						$('#'+id_value+'_outputColorValue').html('Color choice required.');
					}
				});
			}

			var check_required = $('#chk_required').val();

			if(check_required) {
	
			$('[name=add-to-cart]').on('click', function(event){
			
				if($('#' + id_value + '_checkbox').val()) {
				var checko1 = $('#' + id_value + '_checkbox').is(':checked');
				var checko2 = $('#' + id_value + '_checkbox_2').is(':checked');
				var checko3 = $('#' + id_value + '_checkbox_3').is(':checked');
				if(checko1==false && checko2==false && checko3==false) {
					event.preventDefault();
				$('#required-msg').css('display', 'block');
				$('#required-msg').html('At least one checkbox must be checked.'); }
			}
	
			});
		}



			
//Image Swap JS


$('#' + id_value + '_img_box_1').click(function() {
	$('#' + id_value + '_img_radio_1').click();
	/*$('#' + id_value + '_img_box_1 img').toggleClass('wpcb_img_focus');*/
	$('.cpm_img_swap img').removeClass('wpcb_img_focus');
	$('#' + id_value + '_img_box_1 img').addClass('wpcb_img_focus');
	});

		   $('#' + id_value + '_img_box_2').click(function() {
		$('#' + id_value + '_img_radio_2').click();
		$('.cpm_img_swap img').removeClass('wpcb_img_focus');
	$('#' + id_value + '_img_box_2 img').addClass('wpcb_img_focus');
		});

			$('#' + id_value + '_img_box_3').click(function() {
			$('#' + id_value + '_img_radio_3').click();
			$('.cpm_img_swap img').removeClass('wpcb_img_focus');
			$('#' + id_value + '_img_box_3 img').addClass('wpcb_img_focus');
			});

		
			$('#' + id_value + '_img_box_4').click(function() {
				$('#' + id_value + '_img_radio_4').click();
				$('.cpm_img_swap img').removeClass('wpcb_img_focus');
				$('#' + id_value + '_img_box_4 img').addClass('wpcb_img_focus');
				});


				/* DOM Ready clearing */ 


				//prevent form resubmission on refresh
				if(window.history.replaceState) {
					window.history.replaceState(null, null, window.location.href);
				}

				//new quantity input js (prevent null val)
				$('#get_woo_quantity_input').change(function() {
					if($('#get_woo_quantity_input').val() == "") {
						$('#get_woo_quantity_input').val(1);
					}
				});


					//Uncheck button swap
					if(document.getElementById(id_value + '_btn_radio_1')) {
						document.getElementById(id_value +'_btn_radio_1').checked = false;
						document.getElementById(id_value + '_btn_radio_2').checked = false;
						document.getElementById(id_value + '_btn_radio_3').checked = false;
						if(document.getElementById(id_value + '_btn_radio_4')){
						document.getElementById(id_value + '_btn_radio_4').checked = false;
						}
						if(document.getElementById(id_value + '_btn_radio_5')){
							document.getElementById(id_value + '_btn_radio_5').checked = false;
							}
							if(document.getElementById(id_value +'_btn_radio_6')){
								document.getElementById(id_value + '_btn_radio_6').checked = false;
								}
						}


						//Uncheck Img Swap 
						if(document.getElementById(id_value + '_img_radio_1')) {
							document.getElementById(id_value + '_img_radio_1').checked = false;
							document.getElementById(id_value + '_img_radio_2').checked = false;
							if(document.getElementById(id_value + '_img_radio_3')) {
							document.getElementById(id_value + '_img_radio_3').checked = false;
							}
							if(document.getElementById(id_value + '_img_radio_4')) {
								document.getElementById(id_value + '_img_radio_4').checked = false;
								}
							}


								//Local Storage clearing 

						//checkbox value 0
					localStorage.setItem(id_value + '_check1', "0");
					localStorage.setItem(id_value + '_check2', "0");
					localStorage.setItem(id_value + '_check3', "0");
					localStorage.setItem(id_value + '_check4', "0");

					//Reset Options LS Values
					localStorage.setItem('Option_' + id_value.replace(/[^0-9.]/g, ""), "0");


								//uncheck checkbox
								if(document.getElementById(id_value + '_checkbox')) {
									document.getElementById(id_value + '_checkbox').checked = false;
									if(document.getElementById(id_value + '_checkbox_2')) {
									document.getElementById(id_value + '_checkbox_2').checked = false;}
									if(document.getElementById(id_value + '_checkbox_3')) {
									document.getElementById(id_value + '_checkbox_3').checked = false;}
									if(document.getElementById(id_value + '_checkbox_4')) {
									document.getElementById(id_value + '_checkbox_4').checked = false;}
									}

												//unselect option
					if(document.getElementById(id_value + '_select_input')) {
						document.getElementById(id_value + '_select_input').value = "";
						}

											//Clear email input
					if(document.getElementById(id_value + '_email_field')) {
						document.getElementById(id_value + '_email_field').value = "";}

											//Clear quantity input
					if(document.getElementById('get_woo_quantity_input')) {
						document.getElementById('get_woo_quantity_input').value = "1";}

						
											//Clear text input
					if(document.getElementById(id_value + '_text_input')) {
						document.getElementById(id_value + '_text_input').value = "";}


					//Clear text area input
					if(document.getElementById(id_value + '_text_area_input')) {
						document.getElementById(id_value + '_text_area_input').value = "";}
			
					//uncheck radio button
					if(document.getElementById(id_value + '_radio_1')) {

						var r1 = document.getElementById(id_value + '_radio_1');
						var r2 = document.getElementById(id_value + '_radio_2');
						if(document.getElementById(id_value + '_radio_3')) {
						var r3 = document.getElementById(id_value + '_radio_3');
						}
						if(document.getElementById(id_value + '_radio_4')) {
						var r4 = document.getElementById(id_value + '_radio_4');
						}
						r1.checked = false;
						r2.checked = false;
						if(document.getElementById(id_value + '_radio_3')) {
						r3.checked = false;
						}
						if(document.getElementById(id_value + '_radio_4')) {
						r4.checked = false;
						}
						}



				


		});









	 });


})( jQuery );
