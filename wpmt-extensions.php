<?php
/*
Plugin Name: WPMT Extensions
Plugin URI: https://wordpress.org/plugins/wpmt-extensions/
Description: This Plugin Provide You information about your system status and also is extandable by developer as tool for create admin panel for there theme or plugin.
Version: 0.1
Author: WPMT
Author URI: http://wpmt.com/plugins/wpmt-extensions
Text Domain: wpmt
*/

// don't load directly
if (!defined('ABSPATH'))
    exit;

// WPMT About Plugin
define( 'wpmt_extensions_version', '0.1' );
define( 'wpmt_text_domain', 'wpmt' );

// WPMT Assets Url
define( 'wpmt_extensions_url', plugin_dir_url(__FILE__));
define( 'wpmt_extensions_assets', wpmt_extensions_url . "assets/");

// WPMT Dir Path
define( 'wpmt_option_plugin_dir', dirname(__FILE__) . '/' );
define( 'wpmt_core', wpmt_option_plugin_dir . "core/");
define( 'wpmt_extensions', wpmt_option_plugin_dir . "extensions/");

// WPMT Installing Framework
if ( ! class_exists( 'WPMT_Extensions_Instances' ) ) :
    //include_once( wpmt_core . 'classes/install.php' );
endif;

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

	include_once wpmt_option_plugin_dir . 'WPMTFramework/classes/wpmt-extensions-update.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'wpmt-extensions',
			'api_url' => 'https://api.github.com/repos/wpmusab/wpmt-extensions',
			'raw_url' => 'https://raw.github.com/wpmusab/wpmt-extensions/master',
			'github_url' => 'https://github.com/wpmusab/wpmt-extensions',
			'zip_url' => 'https://github.com/wpmusab/wpmt-extensions/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'readme.txt',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}