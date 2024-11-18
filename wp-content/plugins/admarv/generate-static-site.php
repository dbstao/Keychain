<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

require_once plugin_dir_path(__FILE__) . 'generate-static/class-admarv-generator.php';
require_once plugin_dir_path(__FILE__) . 'generate-static/class-admarv-admin.php';
require_once plugin_dir_path(__FILE__) . 'generate-static/class-admarv-ajax.php';

// 初始化静态站点生成器
new Admarv_Generator();
new Admarv_Generator_Admin();
new Admarv_Generator_Ajax();

