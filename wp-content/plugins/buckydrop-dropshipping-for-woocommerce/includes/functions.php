<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

const BUCKYDROP_SUCCESS_CODE = 0;
const BUCKYDROP_NOT_ASSOCIATE_CODE = 60009999;
const BUCKYDROP_COMMON_ERROR_CODE = 60000009;
const BUCKYDROP_DEFAULT_ERROR_MSG = "'The server is busy. Please try again later'";

/**
 * get request
 * @param $url     string  url
 * @param $params  array|string   params
 * @param int $timeout timeout unit (second)  default 30
 * @param array $headers request header  default  Content-Type:application/json;lang:en
 * @return array|mixed|object
 */
function buckydrop_do_get($url,
                          $params = '',
                          $timeout = 30,
                          $headers = array("Content-Type" => "application/json", "lang" => "en"))
{
    $request = array(
        'timeout'           => $timeout,
        'body'              => $params,
        'headers'           => $headers,
        'sslverify'         => false,
        'sslcertificates'   => '',
    );
    $msg = 'get remote url:' . $url . ', request params:' . json_encode($request);
    buckydrop_log($msg);

    $result = wp_remote_get($url, $request);
    $msg = 'get remote url:' . $url . ', result is:' . json_encode($result);
    buckydrop_log($msg);

    if (is_array($result)) {
        $response = $result['response'];
        if ($response['code'] == 200) {
            $body = $result['body'];
            return json_decode($body, true);
        }
        $errorInfo = array("url" => $url, "code" => $response['code'], "message" => $response['info']);
        buckydrop_log(json_encode($errorInfo));
    }
    return false;
}

/**
 * post request
 * @param $url     string  url
 * @param $params  array   params
 * @param int $timeout timeout unit (second)  default 30
 * @param array $headers request header  default  Content-Type:application/json;lang:en
 * @return array|mixed|object
 */
function buckydrop_do_post($url,
                           $params = array(),
                           $timeout = 30,
                           $headers = array("Content-Type" => "application/json", "lang" => "en"))
{
    $request = array(
        'method'            => 'POST',
        'timeout'           => $timeout,
        'body'              => '{}',
        'headers'           => $headers,
        'sslverify'         => false,
        'sslcertificates'   => '',
    );
    if (is_array($params) && !empty($params)) {
        $request['body'] = json_encode($params);
    }
    $msg = 'post remote url:' . $url . ', request params:' . $request['body'];
    buckydrop_log($msg);

    $result = wp_remote_post($url, $request);
    $msg = 'post remote url:' . $url . ', result is:' . json_encode($result);
    buckydrop_log($msg);

    if (is_array($result)) {
        $response = $result['response'];
        if ($response['code'] == 200) {
            $body = $result['body'];
            return json_decode($body, true);
        }

        $errorInfo = array("url" => $url, "code" => $response['code'], "message" => $response['info']);
        buckydrop_log($errorInfo);
    }

    return false;
}

function buckydrop_rand_hash()
{
    if ( function_exists( 'openssl_random_pseudo_bytes' ) ) {
        return bin2hex( openssl_random_pseudo_bytes( 20 ) );
    } else {
        return sha1( wp_rand() );
    }
}

function buckydrop_api_hash( $data )
{
    return hash_hmac( 'sha256', $data, 'wc-api' );
}

function buckydrop_get_menu_slug()
{
    $menuSlug = 'buckydrop-actived';
    $activeData = get_option(BUCKYDROP_API_ACTIVE);
    if (!isset($activeData['isActive']) || $activeData['isActive'] == 0) {
        $menuSlug = 'buckydrop-active';
    }

    return$menuSlug;
}

/**
 * 在指定位置记录Log
 * @param $msg
 */
function buckydrop_log($msg, $level = 'INFO')
{
    if (is_array($msg)) {
        $msg = wp_json_encode($msg, JSON_UNESCAPED_UNICODE);
    }
    @mkdir(BUCKYDROP_LOG_DIR);
    $log_path = BUCKYDROP_LOG_DIR . date('Y-m');
    @mkdir($log_path);
    @file_put_contents($log_path . '/'. date('d') . '.log', date('Y-m-d H:i:s ').$level.' '.$msg.PHP_EOL, FILE_APPEND);
}

function buckydrop_get_query_string($var, $default_value = '')
{
    if (isset($_GET[$var])) {
        return sanitize_text_field($_GET[$var]);
    }
    return $default_value;
}

function buckydrop_get_post_var($var, $default_value = '')
{
    if (isset($_POST[$var])) {
        return sanitize_text_field($_POST[$var]);
    }
    return $default_value;
}

function buckydrop_response($code, $msg, $data)
{
    $res = [
        'data'  => $data,
        'state' => $code,
        'msg'   => $msg
    ];
    echo wp_json_encode($res);
    exit;
}

function buckydrop_err_response($code = -1, $msg = BUCKYDROP_DEFAULT_ERROR_MSG)
{
    $res = [
        'data'  => '',
        'state' => $code,
        'msg'   => $msg
    ];
    echo wp_json_encode($res);
    exit;
}
