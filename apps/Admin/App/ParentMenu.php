<?php

namespace WPExtension\Admin\App;

class ParentMenu {
     
     /**
      * Defined: @var @property mene for wp backend
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $menu;
 
     /**
      * Defined: @var @property menu_name for wp backend
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $menu_name;
 
     /**
      * Defined: manage option role capabilities
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $options;
 
     /**
      * Defined: slug wp admin_menu
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $menu_slug;
 
     /**
      * Defined: callback function / contents
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $call_back = [];
 
     /**
      * Defined: icon dashicons
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     private $icons;
 
     /**
      * Defined: Initialized admin menu and contents
      * Method name: __construct
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     public function __construct()
     {
        
       // Init admin contents
       add_action( 'admin_menu', [ $this,'WPExtensionMenu' ] );
     }
 
     /**
      * Defined: Menu Attributes and properties setter
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     public function WPExtenstionProperties(
       
       $menu=null,      $menu_name=null, $options=null, 
       $menu_slug=null, $call_back = [], $icons=null)       
     
     {
 
       $this->menu      = $menu;
       $this->menu_name = $menu_name;
       $this->options   = $options;
       $this->menu_slug = $menu_slug;
       $this->call_back = $call_back;
       $this->icons     = $icons;
 
       
     }
 
     /**
      * Defined: @var @property menu_name for wp backend
      * Method name: add_menu wp 
      *
      * @since    1.0.0
      * @since    09.24.2022 */   
     public function WPExtensionMenu() : void  {
 
        add_menu_page(
 
         $this->menu,
         $this->menu_name,
         $this->options, 
         $this->menu_slug, 
         $this->call_back, 
         $this->icons 
     
       );
     
     }
     
 }
 