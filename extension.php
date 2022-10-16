<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://nielsoffice197227997.wordpress.com/nielsoffice-contact/
 * @since             1.0.0
 * @package           Extension
 *
 * @wordpress-plugin
 * Plugin Name:       Extension
 * Plugin URI:        https://https://github.com/nielsofficeofficial/Extension
 * Description:       WP Plugin Boilerplate with detects auto update
 * Version:           1.0.0
 * Author:            nielfernandez
 * Author URI:        https://https://nielsoffice197227997.wordpress.com/nielsoffice-contact/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EXTENSION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-extension-activator.php
 */
function activate_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-extension-activator.php';
	Extension_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-extension-deactivator.php
 */
function deactivate_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-extension-deactivator.php';
	Extension_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_extension' );
register_deactivation_hook( __FILE__, 'deactivate_extension' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-extension.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_extension() {

	$plugin = new Extension();
	$plugin->run();

}
run_extension();
