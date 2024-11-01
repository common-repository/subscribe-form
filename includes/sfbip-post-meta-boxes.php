<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'add_meta_boxes' , 'sfbip_add_meta_boxes');

/* META BOXES */

function sfbip_add_meta_boxes(){
// Shortcode meta box
	add_meta_box( 'sfbip_shortcode_meta_box' , 'Shortcode' , 'sfbip_shortcode_meta_box_UI' , 'sfbip_subscribe_form','side');

// Subscribe Form Showcase meta box
	add_meta_box( 'sfbip_form_showcase_meta_box' , 'Select Subscribe Form Template' , 'sfbip_form_showcase_meta_box_UI' , 'sfbip_subscribe_form'); 

// Meta Box to Load Subscribe Form Template
	add_meta_box( 'sfbip_form_load_form' , 'Customization & Subscription Settings' , 'sfbip_form_load_form_UI' , 'sfbip_subscribe_form'); 

// Meta Box Premium Version Offer
	add_meta_box( 'sfbip_buy_premium_meta_box' , 'Buy Premium And:' , 'sfbip_premium_version' , 'sfbip_subscribe_form' , 'side' , 'high'); 

// Meta Box Premium Version Offer
	add_meta_box( 'sfbip_promotion_meta_box' , 'You may also need:' , 'sfbip_promotion' , 'sfbip_subscribe_form' , 'side'); 
}


function sfbip_promotion(){
	?>
	<style type="text/css">
		#sfbip_promotion_meta_box .inside{
			margin: 0 !important;
			padding:0;
			margin-top: 5px; 
		}
	</style>
	<a href="https://www.arrowplugins.com/ultimate-popup" target="_blank"><img width="100%" src="<?php echo plugins_url('images/promotion.png' , __FILE__); ?>" /></a>
	<strong>
	<ul style="margin-left: 10px;">
		<li> - 14 Beautifully Designed Popup</li>
		<li> - MailChimp, GetResponse, Active Campaign</li>
		<li> - Highly Customizable</li>
		<li> - Mobile Friendly (Responsive)</li>
		<li> - And much more...</li>
	</ul>
	</strong>
<?php }


function sfbip_premium_version(){

	?>
	<style type="text/css">
	.sfbip-action-button{
		    width: 93%;
    text-align: center;
    background: #e14d43;
    display: block;
    padding: 18px 8px;
    font-size: 16px;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    border: 2px solid #e14d43;

    transition: all  0.2s;
	}
	.sfbip-action-button:hover{
		    width: 93%;
    text-align: center;
    display: block;
    padding: 18px 8px;
    font-size: 16px;
    border-radius: 5px;
    color: white !important;
    text-decoration: none;
    background: #bb4138 !important;
    border: 2px solid #bb4138;
	}

	</style><strong>
	<ul>
		<li> - Unlock All Form Templates</li>
		<li> - Create Unlimited Forms</li>
		<li> - Unlock MailChimp Integration</li>
		<li> - Unlock GetResponse Integration</li>
		<li> - Unlock Active Campaign Integration</li>
		<li> - Embed Forms in your Widgets</li>
		<li> - Unlock All Customization Options</li>
		<li> - Get 24/7 Premium Support</li>
		<li> - Unlimited Updates</li>
	</ul>
	</strong>
	 <a href="https://www.iconplugins.com/wordpress-subscribe-form/" target="_blank" class="sfbip-action-button">GET PREMIUM NOW</a>
	<?php
}

function sfbip_shortcode_meta_box_UI( $post ){
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

	$sfbip_generated_shortcode = get_post_meta($post->ID, '_sfbip_shortcode_value', true);
	?>
	<p id="sfbip_shortcode_label">Use this shortcode to add Subscribe Form in your posts & pages: </p>
	<input type="text" readonly id="sfbip_shortcode_value" name="sfbip_shortcode_value" value="[icon_forms id='<?php echo $post->ID; ?>']" />
	<p id="sfbip_shortcode_label" >To add Subscribe Form into your Widget area use this shortcode:</p>
	<a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Add Forms in your Widgets (Premium Feature)</a>
	
	<?php
}

function sfbip_form_showcase_meta_box_UI( $post ){




	wp_nonce_field( 'sfbip_form_options_data' , 'sfbip_form_options_nonce_meta_box' );

	$sfbip_form_template = get_post_meta($post->ID, '_sfbip_form_template', true);
	?>
	<div id="sfbip-loading-div" style="display: none;"><img id="sfbip-gears" src='<?php echo plugins_url('images/gears.gif',__FILE__);?>'/></div>

	<div id="sfbip_form_template_container" class="sfbip_form_template_container">
		<input id="sfbip_form1_template"  type="radio" name='sfbip_form_template' value='subscribeform1'<?php checked( "subscribeform1", $sfbip_form_template); ?> />
		<label for="sfbip_form1_template"><strong><?php _e('Form 1', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form1_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form1.png'; ?>"/>
		</label> 
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form2_template" disabled  type="radio" name='sfbip_form_template'/>
		<label for="sfbip_form2_template"><strong><?php _e('Form 2 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form2_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form2.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form3_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form3_template"><strong><?php _e('Form 3 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form3_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form3.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form4_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form4_template"><strong><?php _e('Form 4 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form4_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form4.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form5_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form5_template"><strong><?php _e('Form 5 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form5_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form5.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form6_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form6_template"><strong><?php _e('Form 6 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form6_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form6.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form7_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form7_template"><strong><?php _e('Form 7 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form7_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form7.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form8_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form8_template"><strong><?php _e('Form 8 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form8_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form8.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form9_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form9_template"><strong><?php _e('Form 9 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form9_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form9.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form10_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form10_template"><strong><?php _e('Form 10 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form10_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form10.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form11_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form11_template"><strong><?php _e('Form 11 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form11_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form11.png'; ?>"/>
		</label>
	</div>
	<div id="sfbip_form_template_container" class="">
		<input id="sfbip_form12_template" disabled type="radio" name='sfbip_form_template' />
		<label for="sfbip_form12_template"><strong><?php _e('Form 12 <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">Included in Premium Version</a>', 'sfbip'); ?></strong></label><br/>
		<label for="sfbip_form12_template">
			<img width="300px" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/form12.png'; ?>"/>
		</label>
	</div>
	<input style="opacity: 0;" type="submit" name="submit" id="sfbip_submit" class="button button-primary" value="Save Changes"  />
	<?php
	/*include('/../forms/subscribeform1.php');*/
}

function sfbip_form_load_form_UI( $post ){
 wp_nonce_field( 'sfbip_meta_box_nonce', 'sfbip_nonce' );

	$sfbip_selected_form_template = get_post_meta($post->ID, '_sfbip_form_template', true);
	$sfbip_subscription_selection_dd = get_post_meta($post->ID, '_sfbip_subscription_selection_dd', true);
	$sfbip_sent_to_email = get_post_meta($post->ID, '_sfbip_sent_to_email', true);
	if(isset($sfbip_selected_form_template) && $sfbip_selected_form_template != ''){

		?>
		<div id="sfbip_subscriber_selection_container">
			<table>
				<tr>
					<td>
						<label>Where to save Subscriber: </label>
					</td>
					<td>
						<select id="sfbip_subscription_selection_dd" name="sfbip_subscription_selection_dd">
							<option value="database" <?php selected( $sfbip_subscription_selection_dd, 'database' ); ?>>Local Database</option>
							<option value="mail" <?php selected( $sfbip_subscription_selection_dd, 'mail' ); ?>>Sent to Mail</option>
							<option value="mailchimp">MailChimp (Premium)</option>
							<option value="getresponse">GetResponse (Premium)</option>
							<option value="activecampaign">Active Campaign (Premium)</option>
						</select>
					</td>
					<td>
					<div id="sfbip_mail_selection" style="display: none;">
						<label>Enter email address: </label>
						<input type="email" id="sfbip_sent_to_email" name="sfbip_sent_to_email" value="<?php echo $sfbip_sent_to_email; ?>" placeholder="name@domain.com" />
					</div>
						<div id="sfbip_mailchimp_selection" style="display: none;">

						<?php 
						$get_mc_lists = get_option('sfbip_mc_api_key');
						if ($get_mc_lists == '') {
							?>
								<p style="margin: 0;font-size: 17px;">To Unlock MailChimp Integration Please <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">BUY PREMIUM VERSION</a></p>
								<?php
						} ?>
						</div>
						<div id="sfbip_getresponse_selection" style="display: none;">
						<?php 
						$get_gr_lists = get_option('sfbip_gr_api_key');
						if (isset($get_gr_lists) && $get_gr_lists =='') {
							?>
								<p style="margin: 0;font-size: 17px;">To Unlock GetResponse Integration Please <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">BUY PREMIUM VERSION</a></p>
								<?php
						}?>
						</div>
						<div id="sfbip_activecampaign_selection" style="display: none;">
							<?php 
							$sfbip_ac_url = get_option('sfbip_ac_url');
							$sfbip_ac_api_key = get_option('sfbip_ac_api_key');
							if ( isset($sfbip_ac_url) && isset($sfbip_ac_api_key) && $sfbip_ac_url == '') {
								?>
								<p style="margin: 0;font-size: 17px;">To Unlock Active Campaign Integration Please <a href="https://www.iconplugins.com/wordpress-subscribe-form" target="_blank">BUY PREMIUM VERSION</a></p>
								<?php
								}?>


						</div>
					</td>
				</tr>
			</table>
		</div>
<input type="text" readonly id="sfbip_shortcode_value" name="sfbip_shortcode_value" value="Shortcode: [icon_forms id='<?php echo $post->ID; ?>']" />
<div id="sfbip-form-customizer-container" style="">
	<div id="sfbip_option_subcontainer">
		<?php include( SFBIP_PLUGIN_PATH . 'forms/'.$sfbip_selected_form_template.'-options.php'); ?>
	</div>
	<div id="sfbip_form_view_container">
		<?php 
			include( SFBIP_PLUGIN_PATH . 'forms/'.$sfbip_selected_form_template.'.php'); 
		?> 
	</div>
	
	<p>
		<input name="save" type="submit" class="sfbip-update-form-button button button-primary button-large" id="publish" value="Update Form">
	</p>
</div> <?php
}
}

add_filter( 'gettext', 'sfbip_change_publish_button', 10, 2 );

function sfbip_change_publish_button( $translation, $text ) {
	if ( 'sfbip_subscribe_form' == get_post_type())
		switch($text) {
			case "Publish":                    return "Save Form";
			case "Published on: <b>%1$s</b>":  return "Saved on: <b>%1$s</b>";
			case "Publish <b>immediately</b>": return "Approve <b>immediately</b>";
			case "Publish on: <b>%1$s</b>":    return "Approve on: <b>%1$s</b>";
			case "Privately Published":        return "Privately Saved";
			case "Published":                  return "Form Saved";
case "Save & Publish":             return "Save & Publish Form"; //"Double-save"? :)
default:                           return $translation;
}
return $translation;
}