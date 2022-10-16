<?php 

require_once plugin_dir_path( dirname( __FILE__ ) ) .'/apps/WPExtenstionParentMenu.php';

$new =  new WPExtenstionParentMenu();
$new->WPExtenstionProperties(

	'WP Extension',
	'WP Extenstions',
	'manage_options',
	'wp-extenstion',
	'wp_get_extenstion_rendered',
	'dashicons-welcome-write-blog'
);

function wp_get_extenstion_rendered() {
  
  echo "Hello WP Extenstion!";

}