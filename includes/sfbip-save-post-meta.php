<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_action( 'save_post', 'sfbip_save_form' );

function sfbip_save_form( $post_id) {

$post_type = get_post_type($post_id);
// If this isn't a 'sfbip_subscribe_form' post, don't update it.
if ( "sfbip_subscribe_form" != $post_type ) {
  return;
}

// if our nonce isn't there, or we can't verify it, bail
if( !isset( $_POST['sfbip_nonce'] ) || !wp_verify_nonce( $_POST['sfbip_nonce'], 'sfbip_meta_box_nonce' ) ) return;

// Stop WP from clearing custom fields on autosave
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
  return;
}

// Prevent quick edit from clearing custom fields
if (defined('DOING_AJAX') && DOING_AJAX){
  return;
}

 if ( !current_user_can( 'manage_options' ))
  return;


// - Update the post's metadata.

if ( isset( $_POST['sfbip_shortcode_value'] ) ) {
  update_post_meta( $post_id, '_sfbip_shortcode_value', sanitize_text_field( $_POST['sfbip_shortcode_value'] ) );
}
if ( isset( $_POST['sfbip_widget_shortcode_value'] ) ) {
  update_post_meta( $post_id, '_sfbip_widget_shortcode_value', sanitize_text_field( $_POST['sfbip_widget_shortcode_value'] ) );
}
if (isset($_POST['sfbip_form_template'])) {
  update_post_meta($post_id, '_sfbip_form_template', sanitize_text_field( $_POST['sfbip_form_template'] ) );
} 
if (isset($_POST['sfbip_subscription_selection_dd'])) {
  update_post_meta($post_id, '_sfbip_subscription_selection_dd', sanitize_text_field( $_POST['sfbip_subscription_selection_dd'] ) );
} 
if (isset($_POST['sfbip_sent_to_email'])) {
  update_post_meta($post_id, '_sfbip_sent_to_email', sanitize_text_field( $_POST['sfbip_sent_to_email'] ) );
} 
// Updating Form Data according to the form selection
// Form1 Saving Data
if( get_post_meta($post->ID, '_sfbip_form_template', true) !='subscribeform1' ){


  if (isset($_POST['sfbip-form1-width'])) {
    update_post_meta($post_id, '_sfbip-form1-width', sanitize_text_field( $_POST['sfbip-form1-width'] ) );
  } 
  if (isset($_POST['sfbip-form1-background-image'])) {
    update_post_meta($post_id, '_sfbip-form1-background-image', sanitize_text_field( $_POST['sfbip-form1-background-image'] ) );
  } 
  if (isset($_POST['sfbip-form1-background-color'])) {
    update_post_meta($post_id, '_sfbip-form1-background-color', sanitize_text_field( $_POST['sfbip-form1-background-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-heading'])) {
    update_post_meta($post_id, '_sfbip-form1-heading', sanitize_text_field( $_POST['sfbip-form1-heading'] ) );
  } 
  if (isset($_POST['sfbip-form1-heading-color'])) {
    update_post_meta($post_id, '_sfbip-form1-heading-color', sanitize_text_field( $_POST['sfbip-form1-heading-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-sub-heading'])) {
    update_post_meta($post_id, '_sfbip-form1-sub-heading', sanitize_text_field( $_POST['sfbip-form1-sub-heading'] ) );
  } 
  if (isset($_POST['sfbip-form1-subscribe-button-text'])) {
    update_post_meta($post_id, '_sfbip-form1-subscribe-button-text', sanitize_text_field( $_POST['sfbip-form1-subscribe-button-text'] ) );
  } 
  if (isset($_POST['sfbip-form1-border-size'])) {
    update_post_meta($post_id, '_sfbip-form1-border-size', sanitize_text_field( $_POST['sfbip-form1-border-size'] ) );
  } 
  if (isset($_POST['sfbip-form1-border-style'])) {
    update_post_meta($post_id, '_sfbip-form1-border-style', sanitize_text_field( $_POST['sfbip-form1-border-style'] ) );
  } 
  if (isset($_POST['sfbip-form1-border-color'])) {
    update_post_meta($post_id, '_sfbip-form1-border-color', sanitize_text_field( $_POST['sfbip-form1-border-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-name-field-border-color'])) {
    update_post_meta($post_id, '_sfbip-form1-name-field-border-color', sanitize_text_field( $_POST['sfbip-form1-name-field-border-color'] ) );
  }
  if (isset($_POST['sfbip-form1-email-field-border-color'])) {
    update_post_meta($post_id, '_sfbip-form1-email-field-border-color', sanitize_text_field( $_POST['sfbip-form1-email-field-border-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-button-background-color'])) {
    update_post_meta($post_id, '_sfbip-form1-button-background-color', sanitize_text_field( $_POST['sfbip-form1-button-background-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-button-text-size'])) {
    update_post_meta($post_id, '_sfbip-form1-button-text-size', sanitize_text_field( $_POST['sfbip-form1-button-text-size'] ) );
  } 
  if (isset($_POST['sfbip-form1-button-text-color'])) {
    update_post_meta($post_id, '_sfbip-form1-button-text-color', sanitize_text_field( $_POST['sfbip-form1-button-text-color'] ) );
  } 
  if (isset($_POST['sfbip-form1-button-border-color'])) {
    update_post_meta($post_id, '_sfbip-form1-button-border-color', sanitize_text_field( $_POST['sfbip-form1-button-border-color'] ) );
  } 

}
// End Form1 Saving Data




}