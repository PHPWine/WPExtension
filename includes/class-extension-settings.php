<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://https://nielsoffice197227997.wordpress.com/nielsoffice-contact/
 * @since      1.0.0
 *
 * @package    Extension
 * @subpackage Extension/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Extension
 * @subpackage Extension/includes
 * @author     nielfernandez <nielsoffice.wordpress.php@gmail.com>
 */
class Settings {

    // Load app from apps admin
    public static string $wine_load_admin    = '/../admin/apps/';

    // Load app from apps public
    public static string $wine_load_public   = '/../public/apps/';

    // Load app from apps includes
    public static string $wine_load_includes = '/apps/';

    static public function wine_load_admin() {
        return self::$wine_load_admin;
    }

    static public function wine_load_public() {
        return self::$wine_load_public;
    }

    static public function wine_load_includes() {
        return self::$wine_load_includes;
    }
}
