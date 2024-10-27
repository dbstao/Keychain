<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function cloth_rental_shop_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap' );

	wp_enqueue_style( 'google-fonts-kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'cloth_rental_shop_enqueue_google_fonts' );

if (!function_exists('cloth_rental_shop_enqueue_scripts')) {

	function cloth_rental_shop_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('cloth-rental-shop-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'cloth-rental-shop-media-css',get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'cloth-rental-shop-woocommerce-css',get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'cloth-rental-shop-navigation',get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'bootstrap-bundle-min',get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
			array('jquery'),
			'5.1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'cloth-rental-shop-script',get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$cloth_rental_shop_css = '';

		if ( get_header_image() ) :

			$cloth_rental_shop_css .=  '
				.header{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'cloth-rental-shop-style', $cloth_rental_shop_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'cloth-rental-shop-style',$cloth_rental_shop_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'cloth_rental_shop_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('cloth_rental_shop_after_setup_theme')) {

	load_theme_textdomain( 'cloth-rental-shop', get_stylesheet_directory() . '/languages' );

	function cloth_rental_shop_after_setup_theme() {

		if ( ! isset( $cloth_rental_shop_content_width ) ) $cloth_rental_shop_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'cloth-rental-shop' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
			'flex-height' => true,
			'flex-width' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'cloth_rental_shop_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/cloth-rental-shop-customizer-notify.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function cloth_rental_shop_logo_resizer() {

    $cloth_rental_shop_theme_logo_size_css = '';
    $cloth_rental_shop_logo_resizer = get_theme_mod('cloth_rental_shop_logo_resizer');

	$cloth_rental_shop_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($cloth_rental_shop_logo_resizer).'px !important;
			width: '.esc_attr($cloth_rental_shop_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'cloth-rental-shop-style',$cloth_rental_shop_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'cloth_rental_shop_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('cloth_rental_shop_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function cloth_rental_shop_comment($comment, $cloth_rental_shop_args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'cloth-rental-shop');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'cloth-rental-shop'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($cloth_rental_shop_args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $cloth_rental_shop_args['avatar_size']) echo get_avatar($comment, $cloth_rental_shop_args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'cloth-rental-shop'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'cloth-rental-shop' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'cloth-rental-shop'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $cloth_rental_shop_args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $cloth_rental_shop_args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for cloth_rental_shop_comment()

if (!function_exists('cloth_rental_shop_widgets_init')) {

	function cloth_rental_shop_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','cloth-rental-shop'),
			'id'   => 'cloth-rental-shop-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cloth-rental-shop'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','cloth-rental-shop'),
			'id'   => 'cloth-rental-shop-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cloth-rental-shop'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','cloth-rental-shop'),
			'id'   => 'cloth-rental-shop-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cloth-rental-shop'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','cloth-rental-shop'),
			'id'   => 'cloth-rental-shop-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'cloth-rental-shop'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'cloth_rental_shop_widgets_init' );

}

function cloth_rental_shop_sanitize_select( $input, $setting ) {
	// Ensure input is a slug
	$input = sanitize_key( $input );

	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'cloth_rental_shop_loop_columns');
if (!function_exists('cloth_rental_shop_loop_columns')) {
	function cloth_rental_shop_loop_columns() {
		$cloth_rental_shop_columns = get_theme_mod( 'cloth_rental_shop_per_columns', 3 );
		return $cloth_rental_shop_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'cloth_rental_shop_per_page', 20 );
function cloth_rental_shop_per_page( $cloth_rental_shop_cols ) {
  	$cloth_rental_shop_cols = get_theme_mod( 'cloth_rental_shop_product_per_page', 9 );
	return $cloth_rental_shop_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'cloth_rental_shop_products_args' );
function cloth_rental_shop_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

add_action('after_switch_theme', 'cloth_rental_shop_setup_options');
function cloth_rental_shop_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function cloth_rental_shop_global_color() {

    $cloth_rental_shop_theme_color_css = '';
    $cloth_rental_shop_global_color = get_theme_mod('cloth_rental_shop_global_color');
    $cloth_rental_shop_global_color_2 = get_theme_mod('cloth_rental_shop_global_color_2');
    $cloth_rental_shop_copyright_bg = get_theme_mod('cloth_rental_shop_copyright_bg');

    $cloth_rental_shop_theme_color_css = '
        .wp-block-button__link,
        .woo-search-info button.search-button,
        #main-menu ul.children li a:hover,
        #main-menu ul.sub-menu li a:hover,
        .tab-product-box .button1 a.button:after,
        #hot_products .button2,
        #hot_products .icon .button1 a.button:after,
        #hot_products a.added_to_cart.wc-forward:after,
        .pagination .nav-links a:hover,
        .pagination .nav-links a:focus,
        .pagination .nav-links span.current,
        .cloth-rental-shop-pagination span.current,
        .cloth-rental-shop-pagination span.current:hover,
        .cloth-rental-shop-pagination span.current:focus,
        .cloth-rental-shop-pagination a span:hover,
        .cloth-rental-shop-pagination a span:focus,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .comment-respond input#submit,
        .comment-reply a,
        .sidebar-area h4.title, 
        .sidebar-area h1.wp-block-heading,
        .sidebar-area h2.wp-block-heading,
        .sidebar-area h3.wp-block-heading,
        .sidebar-area h4.wp-block-heading,
        .sidebar-area h5.wp-block-heading,
        .sidebar-area h6.wp-block-heading,
        .sidebar-area .wp-block-search__label,
        .sidebar-area .wp-block-search__button,
        .sidebar-area .tagcloud a, 
        p.wp-block-tag-cloud a,
        .searchform input[type=submit],
        .scroll-up a,
        nav.woocommerce-MyAccount-navigation ul li,
        .woocommerce #respond input#submit.alt, 
        .woocommerce a.button.alt, 
        .woocommerce button.button.alt, 
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit, 
        .woocommerce a.button, 
        .woocommerce button.button, 
        .woocommerce input.button,
        .woocommerce a.added_to_cart,
        .wp-block-woocommerce-cart .wc-block-cart__submit-button, 
        .wc-block-components-checkout-place-order-button, 
        .wc-block-components-totals-coupon__button,
        .wp-block-woocommerce-cart .wc-block-components-product-badge,
        #slider-section .slide-cart-button span.button1,.icon-box i,.social-links a {
            background: ' . esc_attr($cloth_rental_shop_global_color) . ';
        }

        @media screen and (min-width: 320px) and (max-width: 767px) {
            .menu-toggle, 
            .dropdown-toggle, 
            button.close-menu {
                background: ' . esc_attr($cloth_rental_shop_global_color) . ';
            }
        }

        .searchform input[type=submit]:hover,
        .searchform input[type=submit]:focus {
            background-color: ' . esc_attr($cloth_rental_shop_global_color) . ';
        }

        a:hover, 
        a:focus, 
        .logo a, 
        #main-menu a:hover, 
        #main-menu ul li a:hover, 
        #main-menu li:hover > a, 
        #main-menu a:focus, 
        #main-menu ul li a:focus, 
        #main-menu li.focus > a, 
        #main-menu li:focus > a, 
        #main-menu ul li.current-menu-item > a, 
        #main-menu ul li.current_page_item > a, 
        #main-menu ul li.current-menu-parent > a, 
        #main-menu ul li.current_page_ancestor > a, 
        #main-menu ul li.current-menu-ancestor > a, 
        .post-meta i, 
        .tab-product-box span.button1 a.add_to_cart_button, 
        .tab-product-box a.added_to_cart.wc-forward,
        #hot_products h4 a:hover, 
        #hot_products a.added_to_cart.wc-forward, 
        .woocommerce ul.products li.product .price, 
        .woocommerce div.product p.price, 
        .woocommerce div.product span.price,h3.product-heading,
        .contact-box span,.cart-customlocation i, .myaccount-box i,#hot_products h4,#hot_products p.price,.bread_crumb a:hover,.bread_crumb span,.tab-product-box p.price {
            color: ' . esc_attr($cloth_rental_shop_global_color) . ';
    	}
    	.tab-product-box .button1 a.button:after,#hot_products .icon .button1 a.button:after{ 
	        box-shadow: ' . esc_attr($cloth_rental_shop_global_color) . ' -9px 9px 9px;
	    }

        .offer-box p,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce a.added_to_cart:hover,.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover { 
            background: ' . esc_attr($cloth_rental_shop_global_color_2) . ';
        }
        #hot_products button.owl-prev,#hot_products button.owl-next { 
            background: ' . esc_attr($cloth_rental_shop_global_color_2) . '!important;
        }
         { 
            background-color: ' . esc_attr($cloth_rental_shop_global_color_2) . ' !important;
        }

        #slider-section .product-details p.price span {
            color: ' . esc_attr($cloth_rental_shop_global_color_2) . ';
        }

        .sidebar-area h4.title, .sidebar-area h1.wp-block-heading, .sidebar-area h2.wp-block-heading, .sidebar-area h3.wp-block-heading, .sidebar-area h4.wp-block-heading, .sidebar-area h5.wp-block-heading, .sidebar-area h6.wp-block-heading, .sidebar-area .wp-block-search__label {
            border-color: ' . esc_attr($cloth_rental_shop_global_color_2) . ';
        }

        .copyright {
            background: ' . esc_attr($cloth_rental_shop_copyright_bg) . ';
        }
    ';

    wp_add_inline_style('cloth-rental-shop-style', $cloth_rental_shop_theme_color_css);
    wp_add_inline_style('cloth-rental-shop-woocommerce-css', $cloth_rental_shop_theme_color_css);
}
add_action('wp_enqueue_scripts', 'cloth_rental_shop_global_color');


?>