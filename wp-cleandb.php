<?php
/*
Plugin Name: WP-CleanDB
Plugin URI: https://github.com/gerrytucker/wp-cleandb
Description: Cleanup your Wordpress database in one click!
Version: 1.0.3
Author: Gerry Tucker
Author URI: http://gerrytucker.co.uk
GitHub Plugin URI: gerrytucker/wp-cleandb
GitHub Branch: master
*/

function cleandb_admin() {
	include('wp-cleandb-admin.php');
}

function cleandb_admin_actions() {
	add_options_page('WP-CleanDB', 'WP-CleanDB', 'administrator', 'WP-CleanDB', 'cleandb_admin');
}

add_action('admin_menu', 'cleandb_admin_actions');
?>
