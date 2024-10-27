<?php

/**
 * Dynamic CSS
 */
function aster_photography_dynamic_css() {
	$primary_color = get_theme_mod( 'primary_color', '#000000' );

	$aster_photography_site_title_font       = get_theme_mod( 'aster_photography_site_title_font', 'Dynalight' );
	$aster_photography_site_description_font = get_theme_mod( 'aster_photography_site_description_font', 'Mulish' );
	$aster_photography_header_font           = get_theme_mod( 'aster_photography_header_font', 'Cormorant Garamond' );
	$aster_photography_content_font             = get_theme_mod( 'aster_photography_content_font', 'Mulish' );

	// Enqueue Google Fonts
	$fonts_url = aster_photography_get_fonts_url();
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'aster-photography-google-fonts', esc_url( $fonts_url ), array(), null );
	}

	$aster_photography_custom_css  = '';
	$aster_photography_custom_css .= '
    /* Color */
    :root {
        --primary-color: ' . esc_attr( $primary_color ) . ';
        --header-text-color: ' . esc_attr( '#' . get_header_textcolor() ) . ';
    }
    ';

	$aster_photography_custom_css .= '
    /* Typography */
    :root {
        --font-heading: "' . esc_attr( $aster_photography_header_font ) . '", serif;
        --font-main: -apple-system, BlinkMacSystemFont, "' . esc_attr( $aster_photography_content_font ) . '", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }

    body,
	button, input, select, optgroup, textarea, p {
        font-family: "' . esc_attr( $aster_photography_content_font ) . '", serif;
	}

	.site-identity p.site-title, h1.site-title a, h1.site-title, p.site-title a, .site-branding h1.site-title a {
        font-family: "' . esc_attr( $aster_photography_site_title_font ) . '", serif;
	}
    
	p.site-description {
        font-family: "' . esc_attr( $aster_photography_site_description_font ) . '", serif !important;
	}
    ';

	wp_add_inline_style( 'aster-photography-style', $aster_photography_custom_css );
}
add_action( 'wp_enqueue_scripts', 'aster_photography_dynamic_css', 99 );
