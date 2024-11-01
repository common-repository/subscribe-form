<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$path1 = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path1.'wp-load.php');


if (current_user_can('activate_plugins')) {
	
    global $wpdb;
        $ssm_db = $wpdb->prefix.'sfbip_subscribers_lists';
        $ssm_results_to_write = $wpdb->get_results( 
    "
    SELECT *
    FROM $ssm_db
    "
);
$all_data = '';
foreach ($ssm_results_to_write as $res) {
    $res_ID  = $res->id;
    $res_name  = $res->name;
    $res_email  = $res->email;


    $current_row = $res_ID.' , '.$res_name.' , '.$res_email. PHP_EOL;
    $all_data = $all_data." ".$current_row;
}


    $file = "sfbip_subcribers_list.csv";
    $fp = fopen($file, "a")or die("Error Couldn't open $file for writing!");
    fwrite($fp, $all_data)or die("Error Couldn't write values to file!"); 
    fclose($fp); 


ignore_user_abort(true);
set_time_limit(0); // disable the time limit for this script

 // change the path to fit your websites document structure
$path = plugins_url('/',__FILE__); // change the path to fit your websites document structure
$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $_GET['download_file']); // simple file name validation
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
$fullPath = $path.$dl_file;

if ($fd = fopen ($fullPath, "r")) {
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "csv":
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
        break;
        // add more headers for other content types here
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
        break;
    }
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);

$file = "sfbip_subcribers_list.csv";
unlink($file);

exit;

}