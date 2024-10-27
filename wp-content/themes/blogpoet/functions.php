<?php
if (!defined('BLOGPOET_VERSION')) {
    // Replace the version number of the theme on each release.
    define('BLOGPOET_VERSION', wp_get_theme()->get('Version'));
}
define('BLOGPOET_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('BLOGPOET_DIR', trailingslashit(get_template_directory()));
define('BLOGPOET_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('blogpoet_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function blogpoet_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'blogpoet_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('blogpoet_styles')) :
    function blogpoet_styles()
    {
        // registering style for theme
        wp_enqueue_style('blogpoet-style', get_stylesheet_uri(), array(), BLOGPOET_VERSION);
        if (is_rtl()) {
            wp_enqueue_style('blogpoet-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        // registering js for theme
        wp_enqueue_script('jquery');
    }
endif;

add_action('wp_enqueue_scripts', 'blogpoet_styles');

/**
 * Enqueue scripts for admin area
 */
function blogpoet_admin_style()
{
    if (!is_user_logged_in()) {
        return;
    }
    $blogpoet_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-blogpoet' === $_GET['page'] || $blogpoet_notice_current_screen->id === 'themes' || $blogpoet_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('blogpoet-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), BLOGPOET_VERSION, 'all');
        wp_enqueue_script('blogpoet-admin-scripts', get_template_directory_uri() . '/assets/js/blogpoet-admin-scripts.js', array(), BLOGPOET_VERSION, true);
        wp_localize_script('blogpoet-admin-scripts', 'blogpoet_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('blogpoet_admin_nonce'),
            'redirect_url' => admin_url('themes.php?page=templategalaxy')
        ));
    }
}
add_action('admin_enqueue_scripts', 'blogpoet_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function blogpoet_block_assets()
{
    wp_enqueue_style('blogpoet-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'blogpoet_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('blogpoet_excerpt_more_postfix')) {
    function blogpoet_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'blogpoet_excerpt_more_postfix');
}
