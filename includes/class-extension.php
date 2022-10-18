<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://https://nielsoffice197227997.wordpress.com/nielsoffice-contact/
 * @since      1.0.0
 *
 * @package    WPExtension
 * @subpackage WPExtension/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Extension
 * @subpackage Extension/includes
 * @author     nielfernandez <nielsoffice.wordpress.php@gmail.com>
 */
class Extension {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Extension_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		if ( defined( 'EXTENSION_VERSION' ) ) { $this->version = EXTENSION_VERSION;
		} else { $this->version = '1.0.0';
		}
		
		$this->plugin_name = 'extension';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->phpwine('autoload');
		$this->___wineLoadFunctions( 
			   ___directories :  Settings::wine_load_admin()); 			   
		$this->___wineLoadFunctions( 
			   ___directories : Settings::wine_load_public());

		define('temp_file', ABSPATH.'/_temp_out.txt' );
		add_action("activated_plugin",function (){
			$cont = ob_get_contents();
			if(!empty($cont)) file_put_contents(temp_file, $cont );
		});

		add_action( "pre_current_active_plugins", function ($action){
			$extension = $_REQUEST['plugin']?? '';
			$extension = explode('/',$extension);
			if(is_admin() && file_exists(temp_file)) { 
				$cont= file_get_contents(temp_file);
				if(!empty($cont) && ($extension[0] === 'WPExtension' ) )
				{ print('<style>#message, .error { display: none; }</style>'); }
			}

		});

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Extension_Loader. Orchestrates the hooks of the plugin.
	 * - Extension_i18n. Defines internationalization functionality.
	 * - Extension_Admin. Defines all hooks for the admin area.
	 * - Extension_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private 
	 */
	private function load_dependencies() {
         
		/**
		 * The class responsible for defining extension loader file
		 * of the entire wp extension.
		 */
		$___requires = [

		  	'ExtensionSettings' => 'class-extension-settings.php'      
			,'Extensioni18n'    => 'class-extension-i18n.php'
			,'ExtensionLoader'  => 'class-extension-loader.php'        
			,'ExtensionPublic'  => '/../apps/public/ExtensionPublic.php'
			,'ExtensionAdmin'   => '/../apps/admin/ExtensionAdmin.php' 
			,'CoreLoader'       => '/../loader/autoload.php'	    

		];

		foreach ($___requires as $require) 

		{ require_once plugin_dir_path( __FILE__ ) . $require; }
	
		$this->loader = new Extension_Loader();

	}

	/**
	 * Define the locale for this LoadFile data 
	 * @since    1.0.0
	 * @since 18-10-2022 wine v2.0 */
	private function phpwine(string $autoload) : void { require plugin_dir_path( __FILE__ ) .'/../apps/vendor/' . $autoload.'.'.'php'; }

	/**
	 * Define the locale for this LoadFile data 
	 * @since    1.0.0
	 * @since 16-10-2022 wine v2.0 */
    private function ___wineLoadFunctions( string|Settings $___directories = null ) : void {  
	  if(!is_null($___directories)) 
		{   
			$___wineGetAllRun = new DirectoryIterator( dirname( __FILE__ ) . $___directories );

			foreach ($___wineGetAllRun as $appRequest) 
			{ if (!$appRequest->isDot() ) { require_once( plugin_dir_path(__FILE__) . $___directories . $appRequest->getFilename() ); } }
	   }  
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Extension_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Extension_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new ExtensionAdmin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new ExtensionPublic( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Extension_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
