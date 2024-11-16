<?php
/*
Plugin Name: BuckyDrop Dropshipping for WooCommerce
Plugin URI: https://www.buckydrop.com/
Description: Find dropshipping products from Alibaba/1688/Taobao/Weidian/Yupoo/Poizon, import them to your WooCommerce store, and automate your order processes.
Version: 1.0.4
Author: BuckyDrop
Author URI: https://www.buckydrop.com
Text Domain: BuckyDrop
Domain Path: /languages
Requires at least: 5.9
WC requires at least: 5.0
Requires PHP: 7.4
License: GPLv3
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

const BUCKYDROP_NAME = 'BuckyDrop';
const BUCKYDROP_SITE = 'https://www.buckydrop.com';
const BUCKYDROP_VERSION = '1.0.4';
const BUCKYDROP_MINIMUM_WP_VERSION = '5.9';

define('BUCKYDROP_ABSPATH', dirname( __FILE__ ) . '/' );
define('BUCKYDROP_PLUGIN_URL', plugin_dir_url(__FILE__) );
define('BUCKYDROP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
$upload_dir = wp_upload_dir();
define('BUCKYDROP_LOG_DIR', $upload_dir['basedir'] . '/buckydrop-logs/' );


if ( ! class_exists( 'Buckydrop' ) ) {
    /**
     * Main Buckydrop Class.
     *
     * @class Buckydrop
     * @version    1.0.0
     */
    final class Buckydrop
    {

        protected static $_instance = null;

        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        public function __construct()
        {
            $this->includes();
            $this->init_hooks();
            do_action('buckydrop_loaded');
        }

        /**
         * Hook into actions and filters.
         */
        private function init_hooks()
        {
            register_activation_hook(__FILE__, array('BuckydropInstall', 'plugin_activation'));
            register_deactivation_hook(__FILE__, array('BuckydropInstall', 'plugin_uninstalled'));
            add_action('init', array($this, 'init'), 0);
        }

        public function includes()
        {
            include_once (BUCKYDROP_ABSPATH . 'includes/functions.php');
            include_once(BUCKYDROP_ABSPATH . 'includes/class-buckydrop-install.php');
            //wp admin
            if (is_admin()) {
                include_once(BUCKYDROP_ABSPATH . 'includes/class-buckydrop-admin.php');
            }
        }

        public static function init()
        {
            // Init action.
            do_action('buckydrop_init');
        }

    }
}

function buckydrop()
{
    return Buckydrop::instance();
}

$GLOBALS['buckydrop'] = buckydrop();