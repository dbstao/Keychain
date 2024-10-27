<?php
/**
 * Lifestyle Store functions and definitions
 *
 * @package Lifestyle Store
 */

if ( ! function_exists( 'lifestyle_store_setup' ) ) :
function lifestyle_store_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'lifestyle-store', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
	
}
endif; // lifestyle_store_setup
add_action( 'after_setup_theme', 'lifestyle_store_setup' );

function lifestyle_store_scripts() {
	wp_enqueue_style( 'lifestyle-store-basic-style', get_stylesheet_uri() );

	$lifestyle_store_enable_animations = get_option( 'lifestyle_store_enable_animations', true );

    if ( $lifestyle_store_enable_animations ) {
        //animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('lifestyle-store-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'lifestyle_store_scripts' );

// Get start function

function lifestyle_store_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('lifestyle-store-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'lifestyle-store-admin-js',
        'lifestyle_store',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('lifestyle_store_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('lifestyle-store-admin-js');

    wp_localize_script( 'lifestyle-store-admin-js', 'lifestyle_store_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'lifestyle_store_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_lifestyle_store_dismissed_notice_handler', 'lifestyle_store_ajax_notice_dismiss_fuction' );

function lifestyle_store_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'lifestyle_store_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}
//get start box
function lifestyle_store_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $lifestyle_store_current_screen = get_current_screen();
        if ($lifestyle_store_current_screen && $lifestyle_store_current_screen->id !== 'appearance_page_lifestyle-store-guide-page') {
            $lifestyle_store_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($lifestyle_store_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'lifestyle-store'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( LIFESTYLE_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lifestyle-store'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( LIFESTYLE_STORE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'lifestyle-store'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=lifestyle-store-guide-page"><?php _e('Begin Installation', 'lifestyle-store'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'lifestyle_store_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'lifestyle_store_after_switch_theme');
function lifestyle_store_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}
//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() .'/inc/TGM/tgm.php';

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );