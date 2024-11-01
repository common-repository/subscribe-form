jQuery(document).ready( function($) {
	$("#sfbip_subscribe_form").submit( function() {
		var post_id = jQuery('#sfbip_post_type_id').val();
		var name = jQuery('.sfbip-form-name').val();
  		var email = jQuery('.sfbip-form-email').val();
  		if(name == null){
  			data = {
			action : 'sfbip_ajax', 'subscriberemail':email,'post_id':post_id
		};
	}else{
		data = {
			action : 'sfbip_ajax', 'subscribername':name,'subscriberemail':email,'post_id':post_id
		};
	}
		$.post(the_ajax_script.ajaxurl , data , function (response){
      $("#sfbip_thanks_container").css({
          "opacity":"0",
          "display":"flex",
         }).show().animate({opacity:1})
  		});

		return false;
	
	});

	jQuery(".sfbip_delete_entry").click(function(){
  var deleterowid = $( this ).attr( "data-delete" );
  var wpappp_confirm_delete = window.confirm("Are you sure you want to delete Record with ID# "+deleterowid);
  var wpapp_redirect_refresh = window.location.href;
  if (wpappp_confirm_delete == true) {
    jQuery.ajax({
      type: 'POST',
      url: the_ajax_script.ajaxurl,
      data: {"action": "sfbip_delete_db_record","id":deleterowid},
      success: function(data){
        location.href = wpapp_redirect_refresh;
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  } 
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});

jQuery("#sfbip_delete_all_data").click(function(){
  var wpappp_confirm_delete = window.confirm("Are you sure you want to delete all subscribers from the database?");
  var wpapp_redirect_refresh = window.location.href;
  if (wpappp_confirm_delete == true) {
    jQuery.ajax({
      type: 'POST',
      url: the_ajax_script.ajaxurl,
      data: {"action": "sfbip_delete_db_data"},
      success: function(data){
        location.href = wpapp_redirect_refresh;
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  } 
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});



});