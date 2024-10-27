<?php

/**
 * VendorFuel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VendorFuel
 */

$theme = wp_get_theme();
if (!defined('THEME_VERSION')) {
	define('THEME_VERSION', $theme->Version);
}

if (!function_exists('vendorfuel_after_switch_setup')) :
	/**
	 * Sets up theme modification defaults when this theme is switched to.
	 */
	function vendorfuel_after_switch_setup() {
		set_theme_mod('show_accountmenu', 1);
		set_theme_mod('show_cartmenu', 1);
		set_theme_mod('show_search', 1);
		set_theme_mod('show_accountlink', 1);
	}
endif;
add_action('after_switch_theme', 'vendorfuel_after_switch_setup');

if (!function_exists('vendorfuel_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vendorfuel_setup() {
		add_theme_support('wp-block-styles');

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on VendorFuel, use a find and replace
		 * to change 'vendorfuel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('vendorfuel', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__('Top menu', 'vendorfuel'),
				'side-menu-1'  => esc_html__('Mobile menu', 'vendorfuel'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'vendorfuel_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 300,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Add support for VendorFuel plugin.
		 */
		add_theme_support('vendorfuel');
	}
endif;
add_action('after_setup_theme', 'vendorfuel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vendorfuel_content_width() {
	$GLOBALS['content_width'] = apply_filters('vendorfuel_content_width', 720);
}
add_action('after_setup_theme', 'vendorfuel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vendorfuel_widgets_init() {
	register_sidebar(
		array(
			'name'           => esc_html__('Sidebar', 'vendorfuel'),
			'id'             => 'sidebar-1',
			'description'    => esc_html__('Appears just above the footer.', 'vendorfuel'),
			'before_sidebar' => '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">',
			'after_sidebar'  => '</div>',
			'before_widget'  => '<section id="%1$s" class="widget col %2$s"><div class="card h-100"><div class="card-body">',
			'after_widget'   => '</div></div></section>',
			'before_title'   => '<h2 class="widget-title h6 card-title">',
			'after_title'    => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'           => esc_html__('Footer', 'vendorfuel'),
			'id'             => 'sidebar-2',
			'description'    => esc_html__('Widget area within footer.', 'vendorfuel'),
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
		)
	);
}
add_action('widgets_init', 'vendorfuel_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function vendorfuel_scripts() {
	/**
	 * Load Bootstrap if VendorFuel plugin isn't installed, which includes Bootstrap in the bundle.
	 */

	$bootstrap = '5.2.2';

	if (!wp_style_is('vendorfuel-public')) {
		wp_enqueue_style(
			'bootstrap',
			get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css',
			array(),
			$bootstrap
		);
	}

	if (!wp_script_is('vendorfuel-public')) {
		wp_enqueue_script(
			'bootstrap',
			get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js',
			array('jquery'),
			$bootstrap,
			true
		);
	}

	wp_enqueue_style(
		'vendorfuel-style',
		get_stylesheet_uri(),
		array(),
		THEME_VERSION
	);
	wp_style_add_data('vendorfuel-style', 'rtl', 'replace');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vendorfuel_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WP Bootstrap Nav Walkers
 */
require get_template_directory() . '/inc/class-vendorfuel-side-nav-walker.php';
