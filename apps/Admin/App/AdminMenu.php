<?php  namespace WPExtension\Admin\App; ?>
<?php

use PHPWineVanillaFlavour\Apps\PHPAccordion\Wine\WineAccordion;
use PHPWineVanillaFlavour\Apps\PHPWineElement\Wine\WineElement;
use WPExtension\Admin\App\ParentMenu;


   $__adminMenu = new Class {
  
	public function __construct() {

		new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1;  
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlSpan;
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlDiv;

		$new = new ParentMenu();
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

		$elem =  new WineElement();
		$elem->Element([
		  'attr'  => ['data-r'=>'drive', 'data-t'=>'wheel', 'data-n'=>'y'], 
		  'elem'  => 'h1',
		  'id'    => 'id', 
		  'class' => 'class', 
		  'value' => 'First Above!']);
		$elem->Element([
		  'id'    => 'nid', 
		  'class' => 'nclass', 
		  'value' => function() { return('This is New Above! ' . do_shortcode('[wpextension_shortcode]')); }
		]);
		$elem->renderElements();

		$elem =  new WineAccordion();
		$elem->Element([
		  'attr'  => ['data-r'=>'drive', 'data-t'=>'wheel', 'data-n'=>'y'], 
		  'elem'  => 'h1',
		  'id'    => 'id', 
		  'class' => 'class', 
		  'value' => 'First Above!']);
	
		$elem->renderElements();
	 }

 };

 ?>













