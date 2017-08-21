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
    include_once( wpmt_core . 'classes/install.php' );
else:

endif;