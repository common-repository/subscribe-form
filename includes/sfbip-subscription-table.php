<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $sfbip_db_version;
$sfbip_db_version = '1.0';

function sfbip_create_table_function() {
	global $wpdb;
	global $sfbip_db_version;
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	$charset_collate = $wpdb->get_charset_collate();

	$subscription_lists_table = $wpdb->prefix . 'sfbip_subscription_lists';
   if($wpdb->get_var("show tables like '$subscription_lists_table'") != $subscription_lists_table) {

	$subscription_lists_table_sql = "CREATE TABLE $subscription_lists_table (
		sfbip_id mediumint(9) NOT NULL AUTO_INCREMENT,
		sfbip_service_name varchar(255) NOT NULL,
		sfbip_service_list_id text NOT NULL,
		sfbip_service_list_name text NOT NULL,
		PRIMARY KEY  (sfbip_id)
	) $charset_collate;";
	dbDelta( $subscription_lists_table_sql );

}

	$subscribers_table = $wpdb->prefix . "sfbip_subscribers_lists";
   if($wpdb->get_var("show tables like '$subscribers_table'") != $subscribers_table) {

      $sfbip_subscribers_table_sql = "CREATE TABLE " . $subscribers_table . " (
     id mediumint(9) NOT NULL AUTO_INCREMENT,
     name tinytext NOT NULL,
     email text NOT NULL,
     UNIQUE KEY id (id)
   ); $charset_collate;";
	dbDelta( $sfbip_subscribers_table_sql );

}

	add_option( 'sfbip_db_version', $sfbip_db_version );
}
