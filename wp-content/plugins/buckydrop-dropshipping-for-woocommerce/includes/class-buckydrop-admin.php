<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class BuckydropAdmin
{

    public function __construct()
    {
        load_plugin_textdomain('buckydrop', false,'buckydrop/languages');
        $this->includes();
        add_action('admin_menu', array( $this, 'admin_menu'), 100);
        add_action('admin_init', array($this, 'init'));
    }

    public function init()
    {
        register_setting('buckydrop_options_group', 'buckydrop_app_id');
        register_setting('buckydrop_options_group', 'buckydrop_app_secret');
        register_setting('buckydrop_options_group', 'buckydrop_merchant_id');
        register_setting('buckydrop_options_group', 'buckydrop_shop_id');
    }

    private function includes()
    {
        include_once(BUCKYDROP_ABSPATH . '/includes/class-buckydrop-api-url.php');
        include_once(BUCKYDROP_ABSPATH . '/includes/class-buckydrop-loader.php');
        BuckyDrop_Loader::classes(BUCKYDROP_ABSPATH . '/includes/controller');
    }

    /**
     * buckydrop--add menu
     */
    public function admin_menu()
    {
        $menuSlug = buckydrop_get_menu_slug();
        add_menu_page(
            BUCKYDROP_NAME,
            BUCKYDROP_NAME,
            'read',
            $menuSlug,
            '',
            BUCKYDROP_PLUGIN_URL.'assets/images/menu_icon.png',
            55
        );
        do_action('buckydrop_init_admin_menu', $menuSlug);
    }

}

$GLOBALS['BuckydropAdmin'] = new BuckydropAdmin();

