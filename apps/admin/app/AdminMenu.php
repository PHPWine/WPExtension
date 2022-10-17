<?php  namespace WPExtension\admin\app; ?>
<?php 

   use WPExtension\admin\app\WPExtenstionParentMenu;

   $__adminMenu = new Class {
  
	public function __construct() {

		$new =  new WPExtenstionParentMenu();
		$new->WPExtenstionProperties(
	
		'WP Extension',
		'WP Extenstions',
		'manage_options',
		'wp-extenstion',
		[$this, 'wp_get_extenstion_rendered'],
		'dashicons-welcome-write-blog'
		
		);
	
	}	

	public function wp_get_extenstion_rendered() {
		
		echo "Hello WP Extenstion!";
	
	}
   
	
 };


