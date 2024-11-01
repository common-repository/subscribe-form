<?php 
/*
Plugin Name: Subscribe Form
Plugin URI: https://wordpress.org/plugins/subscribe-form/
Description: Add beautiful forms within 2 minutes, no coding skills required.
Author: Icon Plugins
Author URI: https://profiles.wordpress.org/iconplugins/
Version: 1.0.1
License: GplV2
Copyright: 2016 Icon Plugins
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
define( 'SFBIP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
require('includes/sfbip-enqueue-scripts.php');
require('includes/sfbip-post-type.php');
require('includes/sfbip-custom-columns.php');
require('includes/sfbip-post-meta-boxes.php');
require('includes/sfbip-save-post-meta.php');
require('includes/sfbip-shortcode.php');
require('includes/sfbip-ajax-handler.php');
require('includes/sfbip-subscription-ajax.php');
require('includes/sfbip-subscription-table.php');
register_activation_hook( __FILE__, 'sfbip_create_table_function' );