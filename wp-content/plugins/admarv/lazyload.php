<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue the lazyload script
function enqueue_lazyload_script() {
    wp_enqueue_script('lazyload', plugin_dir_url(__FILE__) . 'js/lazyload.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_lazyload_script');
