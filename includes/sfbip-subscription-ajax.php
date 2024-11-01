<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'admin_footer', 'sfbip_my_action_javascript' ); // Write our JS below here

function sfbip_my_action_javascript() { ?>
<script type="text/javascript" >
	jQuery(document).ready(function($) {
		$("#sfbip_subscription_selection_dd").change(function() {
			if($('select#sfbip_subscription_selection_dd option:selected').val() == 'database'){
				$('#sfbip_mail_selection').hide(); 
				$('#sfbip_mailchimp_selection').hide(); 
				$('#sfbip_getresponse_selection').hide(); 
				$('#sfbip_activecampaign_selection').hide(); 
			}
			if($('select#sfbip_subscription_selection_dd option:selected').val() == 'mail'){
				$('#sfbip_mail_selection').show(); 
				$('#sfbip_mailchimp_selection').hide(); 
				$('#sfbip_getresponse_selection').hide(); 
				$('#sfbip_activecampaign_selection').hide(); 
			}
			if($('select#sfbip_subscription_selection_dd option:selected').val() == 'mailchimp'){
				
				$('#sfbip_mail_selection').hide(); 
				$('#sfbip_mailchimp_selection').show(); 
				$('#sfbip_getresponse_selection').hide(); 
				$('#sfbip_activecampaign_selection').hide(); 
			}
			if($('select#sfbip_subscription_selection_dd option:selected').val() == 'getresponse'){
				$('#sfbip_mail_selection').hide(); 
				$('#sfbip_mailchimp_selection').hide(); 
				$('#sfbip_getresponse_selection').show(); 
				$('#sfbip_activecampaign_selection').hide(); 
				
			}
			if($('select#sfbip_subscription_selection_dd option:selected').val() == 'activecampaign'){
				$('#sfbip_mail_selection').hide(); 
				$('#sfbip_mailchimp_selection').hide(); 
				$('#sfbip_getresponse_selection').hide(); 
				$('#sfbip_activecampaign_selection').show(); 
			}
		});
	});
</script> <?php
}

