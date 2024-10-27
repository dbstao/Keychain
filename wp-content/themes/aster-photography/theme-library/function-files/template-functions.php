<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package aster_photography
 */

function aster_photography_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$classes[] = aster_photography_sidebar_layout();

	return $classes;
}
add_filter( 'body_class', 'aster_photography_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function aster_photography_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'aster_photography_pingback_header' );


/**
 * Get all posts for customizer Post content type.
 */
function aster_photography_get_post_choices() {
	$aster_photography_choices = array( '' => esc_html__( '--Select--', 'aster-photography' ) );
	$args    = array( 'numberposts' => -1 );
	$aster_photography_posts   = get_posts( $args );

	foreach ( $aster_photography_posts as $post ) {
		$id             = $post->ID;
		$title          = $post->post_title;
		$aster_photography_choices[ $id ] = $title;
	}

	return $aster_photography_choices;
}

/**
 * Get all pages for customizer Page content type.
 */
function aster_photography_get_page_choices() {
	$aster_photography_choices = array( '' => esc_html__( '--Select--', 'aster-photography' ) );
	$aster_photography_pages   = get_pages();

	foreach ( $aster_photography_pages as $page ) {
		$aster_photography_choices[ $page->ID ] = $page->post_title;
	}

	return $aster_photography_choices;
}

/**
 * Get all categories for customizer Category content type.
 */
function aster_photography_get_post_cat_choices() {
	$aster_photography_choices = array( '' => esc_html__( '--Select--', 'aster-photography' ) );
	$cats    = get_categories();

	foreach ( $cats as $cat ) {
		$aster_photography_choices[ $cat->term_id ] = $cat->name;
	}

	return $aster_photography_choices;
}

/**
 * Get all donation forms for customizer form content type.
 */
function aster_photography_get_post_donation_form_choices() {
	$aster_photography_choices = array( '' => esc_html__( '--Select--', 'aster-photography' ) );
	$aster_photography_posts   = get_posts(
		array(
			'post_type'   => 'give_forms',
			'numberposts' => -1,
		)
	);
	foreach ( $aster_photography_posts as $post ) {
		$aster_photography_choices[ $post->ID ] = $post->post_title;
	}
	return $aster_photography_choices;
}

if ( ! function_exists( 'aster_photography_excerpt_length' ) ) :
	/**
	 * Excerpt length.
	 */
	function aster_photography_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		return get_theme_mod( 'aster_photography_excerpt_length', 20 );
	}
endif;
add_filter( 'excerpt_length', 'aster_photography_excerpt_length', 999 );

if ( ! function_exists( 'aster_photography_excerpt_more' ) ) :
	/**
	 * Excerpt more.
	 */
	function aster_photography_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'aster_photography_excerpt_more' );

if ( ! function_exists( 'aster_photography_sidebar_layout' ) ) {
	/**
	 * Get sidebar layout.
	 */
	function aster_photography_sidebar_layout() {
		$aster_photography_sidebar_position      = get_theme_mod( 'aster_photography_sidebar_position', 'right-sidebar' );
		$aster_photography_sidebar_position_post = get_theme_mod( 'aster_photography_post_sidebar_position', 'right-sidebar' );
		$aster_photography_sidebar_position_page = get_theme_mod( 'aster_photography_page_sidebar_position', 'right-sidebar' );

		if ( is_single() ) {
			$aster_photography_sidebar_position = $aster_photography_sidebar_position_post;
		} elseif ( is_page() ) {
			$aster_photography_sidebar_position = $aster_photography_sidebar_position_page;
		}

		return $aster_photography_sidebar_position;
	}
}

if ( ! function_exists( 'aster_photography_is_sidebar_enabled' ) ) {
	/**
	 * Check if sidebar is enabled.
	 */
	function aster_photography_is_sidebar_enabled() {
		$aster_photography_sidebar_position      = get_theme_mod( 'aster_photography_sidebar_position', 'right-sidebar' );
		$aster_photography_sidebar_position_post = get_theme_mod( 'aster_photography_post_sidebar_position', 'right-sidebar' );
		$aster_photography_sidebar_position_page = get_theme_mod( 'aster_photography_page_sidebar_position', 'right-sidebar' );

		$aster_photography_sidebar_enabled = true;
		if ( is_home() || is_archive() || is_search() ) {
			if ( 'no-sidebar' === $aster_photography_sidebar_position ) {
				$aster_photography_sidebar_enabled = false;
			}
		} elseif ( is_single() ) {
			if ( 'no-sidebar' === $aster_photography_sidebar_position || 'no-sidebar' === $aster_photography_sidebar_position_post ) {
				$aster_photography_sidebar_enabled = false;
			}
		} elseif ( is_page() ) {
			if ( 'no-sidebar' === $aster_photography_sidebar_position || 'no-sidebar' === $aster_photography_sidebar_position_page ) {
				$aster_photography_sidebar_enabled = false;
			}
		}
		return $aster_photography_sidebar_enabled;
	}
}

if ( ! function_exists( 'aster_photography_get_homepage_sections ' ) ) {
	/**
	 * Returns homepage sections.
	 */
	function aster_photography_get_homepage_sections() {
		$sections = array(
			'banner'  => esc_html__( 'Banner Section', 'aster-photography' ),
			'product' => esc_html__( 'Product Section', 'aster-photography' ),
		);
		return $sections;
	}
}

/**
 * Renders customizer section link
 */
function aster_photography_section_link( $section_id ) {
	$aster_photography_section_name      = str_replace( 'aster_photography_', ' ', $section_id );
	$aster_photography_section_name      = str_replace( '_', ' ', $aster_photography_section_name );
	$aster_photography_starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $aster_photography_section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $aster_photography_starting_notation . $section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}

/**
 * Adds customizer section link css
 */
function aster_photography_section_link_css() {
	if ( is_customize_preview() ) {
		?>
		<style type="text/css">
			.section-link {
				visibility: hidden;
				background-color: black;
				position: relative;
				top: 80px;
				z-index: 99;
				left: 40px;
				color: #fff;
				text-align: center;
				font-size: 20px;
				border-radius: 10px;
				padding: 20px 10px;
				text-transform: capitalize;
			}

			.section-link-title {
				padding: 0 10px;
			}

			.banner-section {
				position: relative;
			}

			.banner-section .section-link {
				position: absolute;
				top: 100px;
			}
		</style>
		<?php
	}
}
add_action( 'wp_head', 'aster_photography_section_link_css' );

/**
 * Breadcrumb.
 */
function aster_photography_breadcrumb( $args = array() ) {
	if ( ! get_theme_mod( 'aster_photography_enable_breadcrumb', true ) ) {
		return;
	}

	$args = array(
		'show_on_front' => false,
		'show_title'    => true,
		'show_browse'   => false,
	);
	breadcrumb_trail( $args );
}
add_action( 'aster_photography_breadcrumb', 'aster_photography_breadcrumb', 10 );

/**
 * Add separator for breadcrumb trail.
 */
function aster_photography_breadcrumb_trail_print_styles() {
	$aster_photography_breadcrumb_separator = get_theme_mod( 'aster_photography_breadcrumb_separator', '/' );

	$style = '
		.trail-items li::after {
			content: "' . $aster_photography_breadcrumb_separator . '";
		}'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	$style = apply_filters( 'aster_photography_breadcrumb_trail_inline_style', trim( str_replace( array( "\r", "\n", "\t", '  ' ), '', $style ) ) );

	if ( $style ) {
		echo "\n" . '<style type="text/css" id="breadcrumb-trail-css">' . $style . '</style>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'aster_photography_breadcrumb_trail_print_styles' );

/**
 * Pagination for archive.
 */
function aster_photography_render_posts_pagination() {
	$aster_photography_is_pagination_enabled = get_theme_mod( 'aster_photography_enable_pagination', true );
	if ( $aster_photography_is_pagination_enabled ) {
		$aster_photography_pagination_type = get_theme_mod( 'aster_photography_pagination_type', 'default' );
		if ( 'default' === $aster_photography_pagination_type ) :
			the_posts_navigation();
		else :
			the_posts_pagination();
		endif;
	}
}
add_action( 'aster_photography_posts_pagination', 'aster_photography_render_posts_pagination', 10 );

/**
 * Pagination for single post.
 */
function aster_photography_render_post_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span>&#10229;</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-title">%title</span> <span>&#10230;</span>',
		)
	);
}
add_action( 'aster_photography_post_navigation', 'aster_photography_render_post_navigation' );

/**
 * Adds footer copyright text.
 */
function aster_photography_output_footer_copyright_content() {
    $aster_photography_theme_data = wp_get_theme();
    $aster_photography_copyright_text = get_theme_mod('aster_photography_footer_copyright_text');

    if (!empty($aster_photography_copyright_text)) {
        $aster_photography_text = esc_html($aster_photography_copyright_text);
    } else {
        $aster_photography_default_text = '<a href="'. esc_url(__('https://asterthemes.com/products/free-photography-wordpress-theme','aster-photography')) . '" target="_blank"> ' . esc_html($aster_photography_theme_data->get('Name')) . '</a>' . '&nbsp;' . esc_html__('by', 'aster-photography') . '&nbsp;<a target="_blank" href="' . esc_url($aster_photography_theme_data->get('AuthorURI')) . '">' . esc_html(ucwords($aster_photography_theme_data->get('Author'))) . '</a>';
        $aster_photography_default_text .= sprintf(esc_html__(' | Powered by %s', 'aster-photography'), '<a href="' . esc_url(__('https://wordpress.org/', 'aster-photography')) . '" target="_blank">WordPress</a>. ');
        $aster_photography_text = $aster_photography_default_text;
    }
    ?>
    <span><?php echo wp_kses_post($aster_photography_text); ?></span>
    <?php
}
add_action('aster_photography_footer_copyright', 'aster_photography_output_footer_copyright_content');

if ( ! function_exists( 'aster_photography_footer_widget' ) ) :
function aster_photography_footer_widget() {
	$aster_photography_footer_widget_column	= get_theme_mod('aster_photography_footer_widget_column','4'); 
		if ($aster_photography_footer_widget_column == '4') {
			$aster_photography_column = '3';
		} elseif ($aster_photography_footer_widget_column == '3') {
			$aster_photography_column = '4';
		} elseif ($aster_photography_footer_widget_column == '2') {
			$aster_photography_column = '6';
		} else{
			$aster_photography_column = '12';
		}
	if($aster_photography_footer_widget_column !==''): 
	?>
	<div class="dt_footer-widgets">
		
    <div class="footer-widgets-column">
    	<?php
		$aster_photography_footer_widget_column = get_theme_mod('aster_photography_footer_widget_column','4');
	for ($i=1; $i<=$aster_photography_footer_widget_column; $i++) { ?>
        <?php if ( is_active_sidebar( 'aster-photography-footer-widget-' .$i ) ) : ?>
            <div class="footer-one-column" >
                <?php dynamic_sidebar( 'aster-photography-footer-widget-'.$i); ?>
            </div>
        <?php endif; ?>
        <?php  } ?>
    </div>

</div>
	<?php 
	endif; } 
endif;
add_action( 'aster_photography_footer_widget', 'aster_photography_footer_widget' );


function aster_photography_footer_text_transform_css() {
    $aster_photography_footer_text_transform = get_theme_mod('footer_text_transform', 'none');
    ?>
    <style type="text/css">
        .site-footer h4 {
            text-transform: <?php echo esc_html($aster_photography_footer_text_transform); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_photography_footer_text_transform_css');

/**
 * GET START FUNCTION
 */

function aster_photography_getpage_css($hook) {
	wp_enqueue_script( 'aster-photography-admin-script', get_template_directory_uri() . '/resource/js/aster-photography-admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script( 'aster-photography-admin-script', 'aster_photography_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style( 'aster-photography-notice-style', get_template_directory_uri() . '/resource/css/notice.css' );
}

add_action( 'admin_enqueue_scripts', 'aster_photography_getpage_css' );


add_action('wp_ajax_aster_photography_dismissable_notice', 'aster_photography_dismissable_notice');
function aster_photography_switch_theme() {
    delete_user_meta(get_current_user_id(), 'aster_photography_dismissable_notice');
}
add_action('after_switch_theme', 'aster_photography_switch_theme');
function aster_photography_dismissable_notice() {
    update_user_meta(get_current_user_id(), 'aster_photography_dismissable_notice', true);
    die();
}

function aster_photography_deprecated_hook_admin_notice() {
    global $pagenow;
    
    // Check if the current page is the one where you don't want the notice to appear
    if ( $pagenow === 'themes.php' && isset( $_GET['page'] ) && $_GET['page'] === 'aster-photography-getting-started' ) {
        return;
    }

    $dismissed = get_user_meta( get_current_user_id(), 'aster_photography_dismissable_notice', true );
    if ( !$dismissed) { ?>
        <div class="getstrat updated notice notice-success is-dismissible notice-get-started-class">
            <div class="at-admin-content" >
                <h2><?php esc_html_e('Welcome to Aster Photography', 'aster-photography'); ?></h2>
                <p><?php _e('Explore the features of our Pro Theme and take your Dental journey to the next level.', 'aster-photography'); ?></p>
                <p ><?php _e('Get Started With Theme By Clicking On Getting Started.', 'aster-photography'); ?><p>
                <div style="display: flex; justify-content: center;">
                    <a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=aster-photography-getting-started' )); ?>"><?php esc_html_e( 'Get started', 'aster-photography' ) ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://demo.asterthemes.com/aster-photography"><?php esc_html_e('View Demo', 'aster-photography') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://asterthemes.com/products/photographer-wordpress-theme"><?php esc_html_e('Buy Now', 'aster-photography') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://demo.asterthemes.com/docs/aster-photography-free/"><?php esc_html_e('Free Doc', 'aster-photography') ?></a>
                </div>
            </div>
            <div class="at-admin-image">
                <img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
            </div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'aster_photography_deprecated_hook_admin_notice' );


//Admin Notice For Getstart
function aster_photography_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}