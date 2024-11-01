<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
// deleting registered settings
delete_option('sfbip_mc_api_key');
delete_option('sfbip_gr_api_key');
delete_option('sfbip_ac_url');
delete_option('sfbip_ac_api_key');

global $wpdb;
// deleting plugin data
$wpdb->query("DELETE FROM {$wpdb->prefix}posts WHERE post_type='sfbip_subscribe_form'");
$wpdb->query("DELETE FROM {$wpdb->prefix}postmeta WHERE meta_key LIKE '%_sfbip%';");
 
// drop a custom database table
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}sfbip_subscribers_lists");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}sfbip_subscription_lists");