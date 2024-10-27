<?php
/**
 * @package VW Clothing Store 
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_clothing_store_header_style()
*/
function vw_clothing_store_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_clothing_store_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 200,
		'height'                 => 1200,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'vw_clothing_store_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_clothing_store_custom_header_setup' );

if ( ! function_exists( 'vw_clothing_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_clothing_store_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'vw_clothing_store_header_style' );

function vw_clothing_store_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-sidebar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'vw-clothing-store-basic-style', $custom_css );
	endif;
}
endif;