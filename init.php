<?php

/*
 * Plugin Name: Logo Switcher
 * Plugin URI: https://github.com/IversenCarpeNoctem/logo-switcher
 * Description: Logo Switcher is a super lightweight Wordpress plugin that easily allow you implement your own logo on your website. Simply download and activate the plugin, then hover over «Appearance» and click on «Customize». Then you will be able to upload your own logo to use on your website.
 * Author: Iversen - Carpe Noctem
 * Version: 1.2
 * Author URI: https://github.com/IversenCarpeNoctem
 * GitHub Plugin URI: IversenCarpeNoctem/logo-switcher
 * Domain Path: /languages
 * Text Domain: logo-switcher
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Block direct access
if(!defined('ABSPATH'))exit;

// Define plugin path
if(!defined( 'LOGO_SWITCHER_PATH' ) ) define( 'LOGO_SWITCHER_PATH', plugin_dir_path( __FILE__ ) );

// Load translations
function logo_switcher_load_textdomain() {
  load_plugin_textdomain( 'logo-switcher', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'logo_switcher_load_textdomain' );

// Include the required includes for the plugin
include_once( LOGO_SWITCHER_PATH . 'inc/plugin.php');
include_once( LOGO_SWITCHER_PATH . 'inc/helpers.php');
include_once( LOGO_SWITCHER_PATH . 'inc/settings.php');

// Bootstrap the plugin
add_action('customize_register', array($Logo_Switcher_Plugin, 'addThemeCustomizeSupport'));
add_action('login_head', array($Logo_Switcher_Plugin, 'addLoginSupport'));