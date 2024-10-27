<?php
/**
 * Online Food Delivery functions and definitions
 *
 * @package Online Food Delivery
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
/* Breadcrumb Begin */
function online_food_delivery_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'online_food_delivery_setup' ) ) :

function online_food_delivery_setup() {

	$GLOBALS['content_width'] = apply_filters( 'online_food_delivery_content_width', 640 );

    load_theme_textdomain( 'online-food-delivery', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('online-food-delivery-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'online-food-delivery' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', online_food_delivery_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'online_food_delivery_activation_notice' );
	}	
}
endif;
add_action( 'after_setup_theme', 'online_food_delivery_setup' );

// Dashboard Theme Notification
function online_food_delivery_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dimdissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'online-food-delivery' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Online Food Delivery theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'online-food-delivery' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=online_food_delivery_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'online-food-delivery' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function online_food_delivery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'online-food-delivery' ),
		'description'   => __( 'Appears on blog page sidebar', 'online-food-delivery' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'online-food-delivery' ),
		'description'   => __( 'Appears on page sidebar', 'online-food-delivery' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'online-food-delivery' ),
		'description' => __( 'Appears on page sidebar', 'online-food-delivery' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$online_food_delivery_widget_areas = get_theme_mod('online_food_delivery_footer_widget_layout', '4');
	for ($i=1; $i<=$online_food_delivery_widget_areas; $i++) {
		register_sidebar( array(
			'name'        => __( 'Footer Nav ', 'online-food-delivery' ) . $i,
			'id'          => 'footer-' . $i,
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
		register_sidebar( array(
			'name'          => __( 'Shop Page Sidebar', 'online-food-delivery' ),
			'description'   => __( 'Appears on shop page', 'online-food-delivery' ),	
			'id'            => 'woocommerce_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Single Product Page Sidebar', 'online-food-delivery' ),
			'description'   => __( 'Appears on shop page', 'online-food-delivery' ),
			'id'            => 'woocommerce-single-sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', 'online_food_delivery_widgets_init' );

/* Theme Font URL */
function online_food_delivery_font_url() {
	$font_family = array(
        'ABeeZee:ital@0;1',
		'Abril Fatfac',
		'Acme',
		'Allura',
		'Amatic SC:wght@400;700',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Assistant:wght@200;300;400;500;600;700;800',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Berkshire Swash',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat:wght@400;500;600;700',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Comfortaa:wght@300;400;500;600;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'DM Serif Display:ital@0;1',
		'Dosis:wght@200;300;400;500;600;700;800',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Familjen Grotesk:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'IM Fell English SC',
		'Julius Sans One',
		'Jomhuria',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaisei HarunoUmi:wght@400;500;700',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaushan Script',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Ropa Sans:ital@0;1',
		'Russo One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Sen:wght@400;700;800',
		'Slabo 13px',
		'Slabo 27px',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows Into Light Two',
		'Shadows Into Light',
		'Sacramento',
		'Sail',
		'Shrikhand',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Staatliches',
		'Stylish',
		'Tangerine:wght@400;700',
		'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica One',
		'VT323',
		'Varela Round',
		'Vampiro One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Yeseva One',
		'ZCOOL XiaoWei'
	);
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function online_food_delivery_scripts() {
	wp_enqueue_style( 'online-food-delivery-font', online_food_delivery_font_url(), array() );
	wp_enqueue_style( 'online-food-delivery-block-patterns-style-frontend', get_theme_file_uri('/css/block-frontend.css') );	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'online-food-delivery-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'online-food-delivery-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'online-food-delivery-block-style', get_template_directory_uri().'/css/block-style.css' );

    // Body
    $online_food_delivery_body_color = get_theme_mod('online_food_delivery_body_color', '');
    $online_food_delivery_body_font_family = get_theme_mod('online_food_delivery_body_font_family', '');
    $online_food_delivery_body_font_size = get_theme_mod('online_food_delivery_body_font_size', '');
	$online_food_delivery_body_font_weight = get_theme_mod('online_food_delivery_body_font_weight', '');
	// Paragraph
    $online_food_delivery_paragraph_color = get_theme_mod('online_food_delivery_paragraph_color', '');
    $online_food_delivery_paragraph_font_family = get_theme_mod('online_food_delivery_paragraph_font_family', '');
    $online_food_delivery_paragraph_font_size = get_theme_mod('online_food_delivery_paragraph_font_size', '');
	$online_food_delivery_paragraph_font_weight = get_theme_mod('online_food_delivery_paragraph_font_weight', '');
	// "a" tag
	$online_food_delivery_atag_color = get_theme_mod('online_food_delivery_atag_color', '');
    $online_food_delivery_atag_font_family = get_theme_mod('online_food_delivery_atag_font_family', '');
	$online_food_delivery_atag_font_weight = get_theme_mod('online_food_delivery_atag_font_weight', '');
	// "li" tag
	$online_food_delivery_li_color = get_theme_mod('online_food_delivery_li_color', '');
    $online_food_delivery_li_font_family = get_theme_mod('online_food_delivery_li_font_family', '');
	$online_food_delivery_li_font_weight = get_theme_mod('online_food_delivery_li_font_weight', '');
	// H1
	$online_food_delivery_h1_color = get_theme_mod('online_food_delivery_h1_color', '');
    $online_food_delivery_h1_font_family = get_theme_mod('online_food_delivery_h1_font_family', '');
    $online_food_delivery_h1_font_size = get_theme_mod('online_food_delivery_h1_font_size', '');
	$online_food_delivery_h1_font_weight = get_theme_mod('online_food_delivery_h1_font_weight', '');
	// H2
	$online_food_delivery_h2_color = get_theme_mod('online_food_delivery_h2_color', '');
    $online_food_delivery_h2_font_family = get_theme_mod('online_food_delivery_h2_font_family', '');
    $online_food_delivery_h2_font_size = get_theme_mod('online_food_delivery_h2_font_size', '');
	$online_food_delivery_h2_font_weight = get_theme_mod('online_food_delivery_h2_font_weight', '');
	// H3
	$online_food_delivery_h3_color = get_theme_mod('online_food_delivery_h3_color', '');
    $online_food_delivery_h3_font_family = get_theme_mod('online_food_delivery_h3_font_family', '');
    $online_food_delivery_h3_font_size = get_theme_mod('online_food_delivery_h3_font_size', '');
	$online_food_delivery_h3_font_weight = get_theme_mod('online_food_delivery_h3_font_weight', '');
	// H4
	$online_food_delivery_h4_color = get_theme_mod('online_food_delivery_h4_color', '');
    $online_food_delivery_h4_font_family = get_theme_mod('online_food_delivery_h4_font_family', '');
    $online_food_delivery_h4_font_size = get_theme_mod('online_food_delivery_h4_font_size', '');
	$online_food_delivery_h4_font_weight = get_theme_mod('online_food_delivery_h4_font_weight', '');
	// H5
	$online_food_delivery_h5_color = get_theme_mod('online_food_delivery_h5_color', '');
    $online_food_delivery_h5_font_family = get_theme_mod('online_food_delivery_h5_font_family', '');
    $online_food_delivery_h5_font_size = get_theme_mod('online_food_delivery_h5_font_size', '');
	$online_food_delivery_h5_font_weight = get_theme_mod('online_food_delivery_h5_font_weight', '');
	// H6
	$online_food_delivery_h6_color = get_theme_mod('online_food_delivery_h6_color', '');
    $online_food_delivery_h6_font_family = get_theme_mod('online_food_delivery_h6_font_family', '');
    $online_food_delivery_h6_font_size = get_theme_mod('online_food_delivery_h6_font_size', '');
    $online_food_delivery_first_theme_color = get_theme_mod('online_food_delivery_first_theme_color', '');
    $online_food_delivery_second_theme_color = get_theme_mod('online_food_delivery_second_theme_color', '');
	$online_food_delivery_h6_font_weight = get_theme_mod('online_food_delivery_h6_font_weight', '');

	//footer icon color
	$online_food_delivery_footer_icon_color = get_theme_mod('online_food_delivery_footer_icon_color', '');	

	$online_food_delivery_custom_css ='
	    body{
		    color:'.esc_html($online_food_delivery_body_color).'!important;
		    font-family: '.esc_html($online_food_delivery_body_font_family).'!important;
		    font-size: '.esc_html($online_food_delivery_body_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_body_font_weight).'!important;
		}
		p,span{
		    color:'.esc_attr($online_food_delivery_paragraph_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_paragraph_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_paragraph_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_paragraph_font_weight).'!important;
		}
		a{
		    color:'.esc_attr($online_food_delivery_atag_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_atag_font_family).';
			font-weight: '.esc_html($online_food_delivery_atag_font_weight).'important;
		}
		li{
		    color:'.esc_attr($online_food_delivery_li_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_li_font_family).';
			font-weight: '.esc_html($online_food_delivery_li_font_weight).'!important;
		}
		h1{
		    color:'.esc_attr($online_food_delivery_h1_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h1_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h1_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h1_font_weight).'!important;
		}
		h2{
		    color:'.esc_attr($online_food_delivery_h2_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h2_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h2_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h2_font_weight).'!important;
		}
		h3{
		    color:'.esc_attr($online_food_delivery_h3_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h3_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h3_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h3_font_weight).'!important;
		}
		h4{
		    color:'.esc_attr($online_food_delivery_h4_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h4_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h4_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h4_font_weight).'!important;
		}
		h5{
		    color:'.esc_attr($online_food_delivery_h5_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h5_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h5_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h5_font_weight).'!important;
		}
		h6{
		    color:'.esc_attr($online_food_delivery_h6_color).'!important;
		    font-family: '.esc_attr($online_food_delivery_h6_font_family).'!important;
		    font-size: '.esc_attr($online_food_delivery_h6_font_size).'px !important;
			font-weight: '.esc_html($online_food_delivery_h6_font_weight).'!important;
		}

		.phone a,#slider .carousel-control-prev:hover, #slider .carousel-control-next:hover,.slider-search form input[type="submit"], #main .tc-single-category a,#food-category .product-box a.add_to_cart_button,.services-box .tc-category a,#comments input[type="submit"].submit,#comments a.comment-reply-link,.woocommerce a.button.alt,.woocommerce button.button,.woocommerce a.button, a.added_to_cart.wc-forward, .woocommerce #respond input#submit, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],.tags a:hover,.read-btn a.blogbutton-small,#main .bradcrumbs a ,#main .bradcrumbs span,#main .wp-block-button a,a.wc-block-components-totals-coupon-link, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained, a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-totals-coupon__button.contained, button.wc-block-components-checkout-place-order-button{
		    background-color:'.esc_attr($online_food_delivery_first_theme_color).';
		}
		.wc-block-grid__product-onsale{
		    background-color:'.esc_attr($online_food_delivery_first_theme_color).'!important;
		}
		.wc-block-grid__product-onsale{
		    border-color:'.esc_attr($online_food_delivery_first_theme_color).'!important;
		}

		#slider .social-icons a:hover,.tags a, .wp-block-latest-comments__comment-meta a{
		    color:'.esc_attr($online_food_delivery_first_theme_color).';
		}

		#slider .carousel-control-prev:hover, #slider .carousel-control-next:hover,.tags a{
		   border-color:'.esc_attr($online_food_delivery_first_theme_color).';
		}

		@media screen and (max-width: 1000px){
			.toggle-menu i{
			    background-color:'.esc_attr($online_food_delivery_first_theme_color).';
			}
		}

		.primary-navigation ul ul a,.tc-single-category a:hover,#food-category .product-image span.onsale, .woocommerce span.onsale,#food-category .product-box a.add_to_cart_button:hover ,.footertown input[type="submit"],input[type="submit"],.footertown th,.footertown .tagcloud a:hover,.metabox span:before,.services-box .tc-category a:hover,#comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.added_to_cart.wc-forward:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover,nav.woocommerce-MyAccount-navigation ul li,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce-product-search button[type="submit"],.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.read-btn a.blogbutton-small:hover,#sidebar th,#sidebar input[type="submit"],#sidebar .tagcloud a:hover,.blog .navigation .nav-previous a, .blog .navigation .nav-next a, .archive .navigation .nav-previous a, .archive .navigation .nav-next a, .search .navigation .nav-previous a, .search .navigation .nav-next a,.pagination a:hover, .page-links a:hover,.pagination .current, .page-links .current,#main .bradcrumbs a:hover,.read-btn a.blogbutton-small:hover,.wp-block-tag-cloud a:hover,#main .wp-block-button a:hover,#sidebar h3, #sidebar h2, #sidebar .wp-block-search__label,.wp-block-search__button,button.wc-block-components-checkout-place-order-button:hover, a.wc-block-components-totals-coupon-link:hover, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained:hover, a.wc-block-components-checkout-return-to-cart-button:hover{
		    background-color:'.esc_attr($online_food_delivery_second_theme_color).';
		}

		.primary-navigation ul li a:hover,.textwidget a,.comment-list li.comment p a,#content-ma a,.scrollup,.scrollup:focus,
		.scrollup:hover,.footertown .widget ul li a:hover,metabox a:hover, .metabox a:hover i,.woocommerce ul.products li.product .star-rating,.topbox i:hover,#sidebar ul li a:hover,.calendar_wrap a,.calendar_wrap td a,.entry-summary a,.entry-summary span,.woocommerce .star-rating span,.wp-block-archives a,.wp-calendar-table td a,.wp-block-categories a,.wp-block-latest-posts a,.wp-block-page-list a,.wp-block-rss a,.wp-calendar-nav a{
		    color:'.esc_attr($online_food_delivery_second_theme_color).';
		}

		.primary-navigation ul ul,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.wp-block-search__button,#sidebar .tagcloud a:hover, .wp-block-tag-cloud a:hover,.footertown .widget h3, .footertown .wp-block-search__label,.footertown .tagcloud a:hover{
		   border-color:'.esc_attr($online_food_delivery_second_theme_color).';
		}
		
		.woocommerce-message{
		   border-top-color:'.esc_attr($online_food_delivery_second_theme_color).';
		}

		@media screen and (max-width: 1000px){
			.side-menu {
			    background-color:'.esc_attr($online_food_delivery_second_theme_color).';
			}
		}

		#footer .socialicons i{
			color:'.esc_attr($online_food_delivery_footer_icon_color).'!important;
	    }		

		';
	wp_add_inline_style( 'online-food-delivery-basic-style',$online_food_delivery_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'online-food-delivery-basic-style',$online_food_delivery_custom_css );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'online-food-delivery-custom-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'online_food_delivery_scripts' );

/*radio button sanitization*/

function online_food_delivery_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function online_food_delivery_string_limit_words($string, $word_limit) {
	if ($word_limit == 0) {
        return ''; // Return an empty string if word limit is 0
    }
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit){
		array_pop($words);
	}
	return implode(' ', $words);
}

/**
 * Enqueue block editor style
 */
function online_food_delivery_block_editor_styles() {
	wp_enqueue_style( 'online-food-delivery-font', online_food_delivery_font_url(), array() );
	wp_enqueue_style( 'online-food-delivery-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
}
add_action( 'enqueue_block_editor_assets', 'online_food_delivery_block_editor_styles' );


function online_food_delivery_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// URL DEFINES
define('ONLINE_FOOD_DELIVERY_SITE_URL',__('https://www.themescaliber.com/products/free-food-delivery-wordpress-theme','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_THEME_URL',__('https://www.themescaliber.com/products/free-food-delivery-wordpress-theme', 'online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_FREE_THEME_DOC',__('https://preview.themescaliber.com/doc/free-online-food-delivery/','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_SUPPORT',__('https://wordpress.org/support/theme/online-food-delivery/','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_REVIEW',__('https://wordpress.org/support/theme/online-food-delivery/reviews/','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_BUY_NOW',__('https://www.themescaliber.com/products/food-ordering-wordpress-theme','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_LIVE_DEMO',__('https://preview.themescaliber.com/online-food-delivery-pro/','online-food-delivery'));
define('ONLINE_FOOD_DELIVERY_PRO_DOC',__('https://preview.themescaliber.com/doc/online-food-delivery-pro/','online-food-delivery'));
if ( ! defined( 'ONLINE_FOOD_DELIVERY_PRO_NAME' ) ) {
	define( 'ONLINE_FOOD_DELIVERY_PRO_NAME', __( 'Museum WordPress Theme', 'online-food-delivery' ));
}
if ( ! defined( 'ONLINE_FOOD_DELIVERY_PRO_URL' ) ) {
	define( 'ONLINE_FOOD_DELIVERY_PRO_URL', esc_url('https://www.themescaliber.com/products/food-ordering-wordpress-theme'));
}

function online_food_delivery_credit_link() {
    echo "<a href=".esc_url(ONLINE_FOOD_DELIVERY_SITE_URL)." target='_blank'>".esc_html__('Online Food WordPress Theme','online-food-delivery')."</a>";
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'online_food_delivery_loop_columns');
if (!function_exists('online_food_delivery_loop_columns')) {
	function online_food_delivery_loop_columns() {
		$columns = get_theme_mod( 'online_food_delivery_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'online_food_delivery_shop_per_page', 9 );
function online_food_delivery_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'online_food_delivery_product_per_page', 9 );
	return $cols;
}

function online_food_delivery_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function online_food_delivery_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function online_food_delivery_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/** Posts navigation. */
if ( ! function_exists( 'online_food_delivery_post_navigation' ) ) {
	function online_food_delivery_post_navigation() {
		$online_food_delivery_pagination_type = get_theme_mod( 'online_food_delivery_post_navigation_type', 'numbers' );
		if ( $online_food_delivery_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'online-food-delivery' ),
	            'next_text'          => __( 'Next page', 'online-food-delivery' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'online-food-delivery' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';

/* Block Pattern */
require get_template_directory() . '/block-patterns.php';

/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';