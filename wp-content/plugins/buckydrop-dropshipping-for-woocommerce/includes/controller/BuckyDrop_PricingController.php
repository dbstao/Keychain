<?php

if (!class_exists('BuckyDrop_PricingController'))
{
    class BuckyDrop_PricingController extends BuckyDrop_AbstractAdminBaseController
    {
        const ACTION_TICKET_LIST = 'buckydrop_get_ticket_list';

        public function __construct()
        {
            parent::__construct(__('Pricing','buckydrop'), __('Pricing','buckydrop'), 'read', 'buckydrop-pricing', 10);
            add_action('wp_ajax_' . self::ACTION_TICKET_LIST, array($this, 'ajax_ticket_list'));
        }

        public function render($params = array())
        {
            $asset_file = include_once( BUCKYDROP_ABSPATH . '/build/service_pricing.asset.php');

            wp_register_style('buckydrop_service_pricing_css', BUCKYDROP_PLUGIN_URL . 'build/service_pricing.css', array(), $asset_file['version']);
            wp_enqueue_style('buckydrop_service_pricing_css');

            wp_register_script(
                'buckydrop-service-pricing',
                BUCKYDROP_PLUGIN_URL . 'build/service_pricing.js',
                $asset_file['dependencies'],
                $asset_file['version']
            );
            wp_enqueue_script( 'buckydrop-service-pricing');
            wp_localize_script('buckydrop-service-pricing', 'buckydropAjax', ['ajax_nonce' => wp_create_nonce(self::ACTION_TICKET_LIST)]);
            echo '<div id="buckydrop-app"></div>';
        }

        /**
         * buckydrop--ticket list
         */
        public function ajax_ticket_list() {
            check_ajax_referer(self::ACTION_TICKET_LIST, 'ajax_nonce');

            $url = BUCKYDROP_SITE . BuckydropApiUrl::TICKET_LIST_URL;
            $response = buckydrop_do_post($url);
            if (!$response || !is_array($response)) {
                buckydrop_err_response(BUCKYDROP_COMMON_ERROR_CODE, BUCKYDROP_DEFAULT_ERROR_MSG);
            }

            if ($response['code'] == BUCKYDROP_SUCCESS_CODE && is_array($response['data'])) {
                buckydrop_response($response['code'], $response['info'], $response['data']);
            }

            buckydrop_err_response($response['code'], $response['info']);
        }

    }

}
