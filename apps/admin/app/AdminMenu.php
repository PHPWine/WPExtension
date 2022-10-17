<?php  namespace WPExtension\admin\app; ?>
<?php

use WPExtension\admin\app\WPExtenstionParentMenu;

   $__adminMenu = new Class {
  
	public function __construct() {

		new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem; // this is mandatory when dev use merge !
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1;  // follow by merge version HTML_H1 and so on!...
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlSpan;

		$new = new WPExtenstionParentMenu();
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
		
		echo H1('Welcome to WP Extension !');
		echo span("Description");
		echo setDate( date("l") );
	
	}


 };


