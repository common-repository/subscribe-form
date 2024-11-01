<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_filter( 'manage_sfbip_subscribe_form_posts_columns', 'sfbip_custom_posts_columns' );

// Hook to custom data in Custom Columns
add_action( 'manage_sfbip_subscribe_form_posts_custom_column' , 'sfbip_custom_form_columns' , 10 , 2 );

function sfbip_custom_posts_columns( $columns ){
	$newColumns = array();
	$newColumns['title'] = 'Subscribe From Title';
	$newColumns['shortcode'] = 'Shortcode';
	$newColumns['form_template'] = 'Selected Form Template';
	$newColumns['date'] = 'Date';
	$newColumns['author'] = 'Created by';
	return $newColumns;
}


function sfbip_custom_form_columns( $column , $post_id ){
	switch( $column ){
		case 'shortcode' : 
// print shortcode here
		$sfbip_cpt_generated_shortcode = get_post_meta($post_id, '_sfbip_shortcode_value', true);
		$sfbip_cpt_widget_generated_shortcode = get_post_meta($post_id, '_sfbip_widget_shortcode_value', true);
		echo '<span style="font-size:16px;font-weight:bold;display:inline-block;padding-top:7px;    margin-top: 8%;">'.$sfbip_cpt_generated_shortcode.'</span><br/>';
		break;

		case 'form_template' :
// print form template number user selected 
		$sfbip_form_template = get_post_meta($post_id, '_sfbip_form_template', true);

		if($sfbip_form_template == 'subscribeform1')
			echo '<img src="'.plugins_url('images/form1.png',__FILE__).'" width="150px"/>';

		if($sfbip_form_template == 'subscribeform2')
			echo '<img src="'.plugins_url('images/form2.png',__FILE__).'" width="150px"/>';

		else if($sfbip_form_template == 'subscribeform3')
			echo '<img src="'.plugins_url('images/form3.png',__FILE__).'" width="150px"/>';

		else if($sfbip_form_template == 'subscribeform4')
			echo '<img src="'.plugins_url('images/form4.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform5')
			echo '<img src="'.plugins_url('images/form5.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform6')
			echo '<img src="'.plugins_url('images/form6.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform7')
			echo '<img src="'.plugins_url('images/form7.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform8')
			echo '<img src="'.plugins_url('images/form8.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform9')
			echo '<img src="'.plugins_url('images/form9.png',__FILE__).'" width="150px"/>';
			
		else if($sfbip_form_template == 'subscribeform10')
			echo '<img src="'.plugins_url('images/form10.png',__FILE__).'" width="150px"/>';

		else if($sfbip_form_template == 'subscribeform11')
			echo '<img src="'.plugins_url('images/form11.png',__FILE__).'" width="220px"/>';

		else if($sfbip_form_template == 'subscribeform12')
			echo '<img src="'.plugins_url('images/form12.png',__FILE__).'" width="150px"/>';

		break;
	}

}
