(function($){
	$(document).ready(function() {


		$('.sfbip-image-upload-button').click(function(e) {
			e.preventDefault();
			var image = wp.media({ 
				title: 'Upload Image',
// mutiple: true if you want to upload multiple files at once
multiple: false
}).open()
			.on('select', function(e){
// This will return the selected image from the Media Uploader, the result is an object
var uploaded_image = image.state().get('selection').first();
// We convert uploaded_image to a JSON object to make accessing it easier
// Output to the console uploaded_image
var image_url = uploaded_image.toJSON().url;
// Let's assign the url value to the input field
if ($("#sfbip_form1_template").prop("checked"))
	$('#sfbip-form1-background-image').val(image_url);

if ($("#sfbip_form2_template").prop("checked")) 
	$('#sfbip-form2-background-image').val(image_url);

if ($("#sfbip_form3_template").prop("checked")) 
	$('#sfbip-form3-background-image').val(image_url);

if ($("#sfbip_form4_template").prop("checked")) 
	$('#sfbip-form4-background-image').val(image_url);

if ($("#sfbip_form5_template").prop("checked")) 
	$('#sfbip-form5-background-image').val(image_url);

if ($("#sfbip_form6_template").prop("checked")) 
	$('#sfbip-form6-background-image').val(image_url);

if ($("#sfbip_form7_template").prop("checked")) 
	$('#sfbip-form7-background-image').val(image_url);

if ($("#sfbip_form8_template").prop("checked")) 
	$('#sfbip-form8-background-image').val(image_url);

if ($("#sfbip_form9_template").prop("checked")) 
	$('#sfbip-form9-background-image').val(image_url);

if ($("#sfbip_form10_template").prop("checked")) 
	$('#sfbip-form10-background-image').val(image_url);

if ($("#sfbip_form11_template").prop("checked")) 
	$('#sfbip-form11-background-image').val(image_url);

if ($("#sfbip_form12_template").prop("checked")) 
	$('#sfbip-form12-background-image').val(image_url);

$('#sfbip-preview-background-image').attr('src' , image_url);




});
		});


		$( '.sfbip-color-picker' ).wpColorPicker();

		$('.sfbip_form_template_container').click(function() {

			$( "#sfbip-loading-div" ).addClass( "sfbip-loading-div" );
			$( "#sfbip-gears" ).addClass( "sfbip-loading-gears" );

			if($('input[name="sfbip_form_template"]').is(':checked')) { 

				$( "#sfbip_submit" ).trigger( "click" );

			}

		});

		if($('input[name="sfbip_form_template"]').is(':checked')) { 
			$('html, body').animate({
				scrollTop: $("#sfbip_form_load_form").offset().top
			}, 1000); 
//$(window).scrollTop($('#sfbip-form-customizer-container').offset().top);
}

$('#sfbip-remove-image').click(function(e) {
	if ($("#sfbip_form1_template").prop("checked")){
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form1-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form2_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form2-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form3_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form3-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form4_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form4-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form5_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form5-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form6_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form6-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form7_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form7-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form8_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form8-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form9_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form9-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form10_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form10-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form11_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form11-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}

	if ($("#sfbip_form12_template").prop("checked")) {
		$('.sfbip-form-background-image').attr('src','');
		$('#sfbip-form12-background-image').val('');
		$('.sfbip-main-form-container').css('background-image','none');
	}


});

if($('select#sfbip_subscription_selection_dd option:selected').val() == 'database'){

}
if($('select#sfbip_subscription_selection_dd option:selected').val() == 'mail'){
	$('#sfbip_mail_selection').show(); 
}
if($('select#sfbip_subscription_selection_dd option:selected').val() == 'mailchimp'){
	$('#sfbip_mailchimp_selection').show(); 
}
if($('select#sfbip_subscription_selection_dd option:selected').val() == 'getresponse'){
	$('#sfbip_getresponse_selection').show(); 
}
if($('select#sfbip_subscription_selection_dd option:selected').val() == 'activecampaign'){
	$('#sfbip_activecampaign_selection').show(); 
}



});
})(jQuery);