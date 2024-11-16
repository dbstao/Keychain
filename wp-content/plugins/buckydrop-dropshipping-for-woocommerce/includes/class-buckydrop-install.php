<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

const BUCKYDROP_WC_API_DESCR = 'BuckyDrop plugin - API';
const BUCKYDROP_WC_API_OPTION_NAME = 'buckydrop_wc_api_info';
const BUCKYDROP_API_ACTIVE = 'buckydrop_wc_api_active';

class BuckydropInstall
{
    /**
     * 启用插件
     * Attached to activate_{ plugin_basename( __FILES__ ) } by register_activation_hook()
     * @static
     */
    public static function plugin_activation()
    {
        self::plugin_activation_check_api_key();
        self::plugin_activation_add_buckydrop();
    }

    /**
     * check api keys, auto create a buckydrop api keys if not found
     */
    public static function plugin_activation_check_api_key()
    {
        $apikey = self::query_api_key();
        if (!$apikey) {
            //create a api key
            $apikey = self::create_keys(get_current_user_id(), 'read_write');
            return self::add_api_key_option($apikey);
        }

        $optionInfo = get_option(BUCKYDROP_WC_API_OPTION_NAME);
        if ($optionInfo) {
            return $optionInfo;
        }
        return self::add_api_key_option($apikey);
    }

    /**
     * @return array|object|stdClass|null
     */
    protected static function query_api_key()
    {
        global $wpdb;
        return $wpdb->get_row( $wpdb->prepare( "
			SELECT key_id, user_id, permissions, consumer_key, consumer_secret, nonces
			FROM {$wpdb->prefix}woocommerce_api_keys
			WHERE description = %s
		", BUCKYDROP_WC_API_DESCR ) );
    }

    /**
     * @param $apikey
     * @return array
     */
    protected static function add_api_key_option($apikey)
    {
        $keyInfo = [
            'key_id'          => $apikey['key_id'],
            'user_id'         => $apikey['user_id'],
            'consumer_key'    => $apikey['consumer_key'],
            'consumer_secret' => $apikey['consumer_secret'],
            'key_permissions' => $apikey['permissions'],
        ];
        update_option(BUCKYDROP_WC_API_OPTION_NAME, json_encode($keyInfo));
        return $keyInfo;
    }

    /**
     * add or update option data
     */
    public static function plugin_activation_add_buckydrop()
    {
        $activeData = get_option(BUCKYDROP_API_ACTIVE);
        if (!isset($activeData) || !is_array($activeData)) {
            $activeData = [
                'isActive'   => 0,
                'activeTime' => 0,
                'data'       => ''
            ];
            add_option(BUCKYDROP_API_ACTIVE, $activeData);
        } else if (isset($activeData['isActive']) && $activeData['isActive'] == 1) {
            $activeData['isActive'] = 0;
            $activeData['activeTime'] = 0;
            update_option(BUCKYDROP_API_ACTIVE, $activeData);
        }
    }

    /**
     * deactivation
     * @static
     */
    /*public static function plugin_deactivation()
    {
        $activeData = get_option(BUCKYDROP_API_ACTIVE);
        if (isset($activeData['isActive']) && $activeData['isActive'] == 1) {
            $activeData['isActive'] = 0;
            $activeData['activeTime'] = 0;
            update_option(BUCKYDROP_API_ACTIVE, $activeData);
        }
        //global $wp_rewrite;
        //$wp_rewrite->flush_rules();
    }*/

    /**
     * deactivation or uninstalled
     * @static
     */
    public static function plugin_uninstalled()
    {
        $uninstalledResult = false;
        $activeData = get_option(BUCKYDROP_API_ACTIVE);
        try {
            if (isset($activeData['data']) && is_array($activeData['data'])) {
                $shopCode = $activeData['data']['shopCode'];
                $customerCode = $activeData['data']['customerCode'];
                $params = [
                    'customerCode' => $customerCode,
                    'shopCode'     => $shopCode,
                ];
                $url = BUCKYDROP_SITE . BuckydropApiUrl::UNINSTALLED_URL;
                $response = buckydrop_do_post($url, $params);
                if (is_array($response) && isset($response['code']) && $response['code'] == BUCKYDROP_SUCCESS_CODE) {
                    $uninstalledResult = true;
                }
            }
        } catch (Exception $e) {
            buckydrop_log('buckydrop plugin uninstalled error' . json_encode($e));
        }

        if (!$uninstalledResult) {
            if (isset($activeData['isActive']) && $activeData['isActive'] == 1) {
                $activeData['isActive'] = 0;
                $activeData['activeTime'] = 0;
                update_option(BUCKYDROP_API_ACTIVE, $activeData);
            }
        } else {
            // remove api keys
            global $wpdb;
            $optionInfo = get_option(BUCKYDROP_WC_API_OPTION_NAME);
            if ($optionInfo) {
                $optionInfo = json_decode($optionInfo, true);
                $wpdb->delete( $wpdb->prefix . 'woocommerce_api_keys', array( 'key_id' => $optionInfo['key_id'] ), array( '%d' ));
            }
            delete_option(BUCKYDROP_WC_API_OPTION_NAME);
            delete_option(BUCKYDROP_API_ACTIVE);
        }
    }

    /**
     * Create keys.
     *
     * @since  2.4.0
     *
     * @param  string $app_user_id
     * @param  string $scope
     *
     * @return array
     */
    protected static function create_keys( $app_user_id, $scope )
    {
        global $wpdb;

        /* translators: 1: app name 2: scope 3: date 4: time */
        $description = BUCKYDROP_WC_API_DESCR;
        $user = wp_get_current_user();

        // Created API keys.
        $permissions     = ( in_array( $scope, array( 'read', 'write', 'read_write' ) ) ) ? sanitize_text_field( $scope ) : 'read';
        $consumer_key    = 'ck_' . buckydrop_rand_hash();
        $consumer_secret = 'cs_' . buckydrop_rand_hash();

        $wpdb->insert(
            $wpdb->prefix . 'woocommerce_api_keys',
            array(
                'user_id'         => $user->ID,
                'description'     => $description,
                'permissions'     => $permissions,
                'consumer_key'    => buckydrop_api_hash( $consumer_key ),
                'consumer_secret' => $consumer_secret,
                'truncated_key'   => substr( $consumer_key, -7 ),
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
            )
        );

        return array(
            'key_id'          => $wpdb->insert_id,
            'user_id'         => $app_user_id,
            'consumer_key'    => $consumer_key,
            'consumer_secret' => $consumer_secret,
            'permissions'     => $permissions,
        );
    }

}