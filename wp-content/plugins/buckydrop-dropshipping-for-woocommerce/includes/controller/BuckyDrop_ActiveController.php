<?php

if (!class_exists('BuckyDrop_ActiveController'))
{
    class BuckyDrop_ActiveController extends BuckyDrop_AbstractAdminBaseController
    {
        const ACTION_ACTIVE = 'buckydrop_active_account';
        const ACTION_GET = 'buckydrop_user_info';

        public function __construct()
        {
            $menuSlug = buckydrop_get_menu_slug();
            parent::__construct(__('Active','buckydrop'), __('Activation','buckydrop'), 'read', $menuSlug, 10);
            add_action('wp_ajax_' . self::ACTION_ACTIVE, array($this, 'ajax_active_account'));
            add_action('wp_ajax_' . self::ACTION_GET, array($this, 'ajax_get_account'));
        }

        public function render($params = array())
        {
            $activeData = get_option(BUCKYDROP_API_ACTIVE);
            if (!isset($activeData['isActive']) || $activeData['isActive'] == 0) {
                $asset_file = include_once( BUCKYDROP_ABSPATH . 'build/login.asset.php');

                wp_register_style('buckydrop_style_login_css', BUCKYDROP_PLUGIN_URL . 'build/style-login.css', array(), $asset_file['version']);
                wp_register_style('buckydrop_login_css', BUCKYDROP_PLUGIN_URL . 'build/login.css', array(), $asset_file['version']);
                wp_enqueue_style('buckydrop_style_login_css');
                wp_enqueue_style('buckydrop_login_css');

                wp_register_script(
                    'buckydrop-login',
                    BUCKYDROP_PLUGIN_URL . 'build/login.js',
                    $asset_file['dependencies'],
                    $asset_file['version']
                );
                wp_enqueue_script( 'buckydrop-login');
                wp_localize_script('buckydrop-login', 'buckydropAjax', ['ajax_nonce' => wp_create_nonce(self::ACTION_ACTIVE)]);
            } else {
                $asset_file = include_once( BUCKYDROP_ABSPATH . '/build/profile.asset.php');

                wp_register_style('buckydrop_style_profile_css', BUCKYDROP_PLUGIN_URL . 'build/style-login.css', array(), $asset_file['version']);
                wp_register_style('buckydrop_profile_css', BUCKYDROP_PLUGIN_URL . 'build/profile.css', array(), $asset_file['version']);
                wp_enqueue_style('buckydrop_style_profile_css');
                wp_enqueue_style('buckydrop_profile_css');

                wp_register_script(
                    'buckydrop-profile',
                    BUCKYDROP_PLUGIN_URL . 'build/profile.js',
                    $asset_file['dependencies'],
                    $asset_file['version']
                );
                wp_enqueue_script( 'buckydrop-profile');
            }

            echo '<div id="buckydrop-app"></div>';
        }

        /**
         * buckydrop--active account
         */
        public function ajax_active_account() {
            check_ajax_referer(self::ACTION_ACTIVE, 'ajax_nonce');

            $account = sanitize_text_field($_POST["account"]);
            $password = sanitize_text_field($_POST["password"]);
            $captchaResponse = sanitize_text_field($_POST["captchaResponse"]);

            $keyInfo = get_option(BUCKYDROP_WC_API_OPTION_NAME);
            $keyInfo = json_decode($keyInfo, true);

            $activeData = get_option(BUCKYDROP_API_ACTIVE);
            $shopCode = isset($activeData['data']) && is_array($activeData['data'])? $activeData['data']['shopCode'] : '';

            $url = BUCKYDROP_SITE . BuckydropApiUrl::INSTALL_URL;
            $params = [
                'accountName'     => $account,
                'accountPwd'      => $password,
                'captchaResponse' => $captchaResponse,
                'shopCode'        => $shopCode,
                'shopUrl'         => site_url(),
                'shopName'        => get_option('blogname'),
                'consumerKey'     => $keyInfo['consumer_key'],
                'consumerSecret'  => $keyInfo['consumer_secret'],
                'lang'            => 'en',
            ];
            $response = buckydrop_do_post($url, $params);
            if (!$response || !is_array($response)) {
                buckydrop_err_response(BUCKYDROP_COMMON_ERROR_CODE, BUCKYDROP_DEFAULT_ERROR_MSG);
            }

            if ($response['code'] == BUCKYDROP_SUCCESS_CODE && is_array($response['data'])) {
                $data = [
                    'isActive'   => 1,
                    'activeTime' => time(),
                    'data'       => $response['data']
                ];
                update_option(BUCKYDROP_API_ACTIVE, $data);
                buckydrop_response($response['code'], $response['info'], $account);
            }

            buckydrop_err_response($response['code'], $response['info']);
        }

        /**
         * buckydrop--get account
         */
        public function ajax_get_account() {
            $activeData = get_option(BUCKYDROP_API_ACTIVE);
            if (!isset($activeData['isActive']) || $activeData['isActive'] == 0 || !isset($activeData['data'])) {
                buckydrop_err_response(BUCKYDROP_NOT_ASSOCIATE_CODE, 'Please associate BuckyDrop account first.');
            }

            $data = [
                'accountName' => $activeData['data']['accountName'],
                'accountCode' => $activeData['data']['accountCode'],
            ];
            buckydrop_response(BUCKYDROP_SUCCESS_CODE, 'Success', $data);
        }

    }

}
