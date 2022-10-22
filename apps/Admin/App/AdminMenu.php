<?php  namespace WPExtension\Admin\App; ?>
<?php

use PHPWineVanillaFlavour\Apps\PHPAccordion\Wine\WineAccordion;
use PHPWineVanillaFlavour\Apps\PHPWineElement\Wine\WineElement;
use WPExtension\Admin\App\ParentMenu;

   $__adminMenu = new Class {
  
	public function __construct() {

		new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1;  
		new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH2;  
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
		echo div('Div The Container', [ 'a' => 1 ] );
		echo span("Description");
		echo setDate( date("l") );

		$elem =  new WineElement();
		$elem->Element([
		  'attr'  => [ 
			 'data-r'=>'drive'
			,'data-t'=>'wheel'
			,'data-n'=>'y'
		  ], 
		  'elem'  => 'h1',
		  'id'    => 'id', 
		  'class' => 'class', 
		  'value' => 'First Above!']);
		$elem->Element([
		  'id'    => 'nid', 
		  'class' => 'nclass', 
		  'value' => [ CHILD => [

			['div', INNER => [ 
				['try' => fn () => (true) ? [
					
					 ['h1',  VALUE => ["This is the moment!"]  ],
					 ['div', VALUE => ["Welcome to my life! "] ]

				  ] : false
				],
				['div', VALUE => ["This is great! ".getDataFromShortCode()] ]
			]] // end of first elem

		  ]] # end of child
		]);
		$elem->renderElements();

	}

 };

 ?>


