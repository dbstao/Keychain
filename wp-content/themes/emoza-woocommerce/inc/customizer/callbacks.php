<?php
/**
 * Active callback functions
 *
 * @package Emoza
 */


/**
 * Footer widgets divider
 */
function emoza_callback_footer_widgets_divider() {
    
    $divider = get_theme_mod( 'footer_widgets_divider' );

	if ( $divider ) {
		return true;
	} else {
		return false;
	}   
}

function emoza_callback_sidebar_archives() {
    $sidebar = get_theme_mod( 'sidebar_archives' );

	if ( $sidebar ) {
		return true;
	} else {
		return false;
	}   	
}

/**
 * Single post archives
 */
function emoza_callback_sidebar_single_post() {
    $sidebar = get_theme_mod( 'sidebar_single_post', 1 );

	if ( $sidebar ) {
		return true;
	} else {
		return false;
	}   	
}

/**
 * Single post author bio align
 */
function emoza_callback_single_post_show_author_box() {
    $enable = get_theme_mod( 'single_post_show_author_box', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}   	
}

/**
 * Sale percentage
 */
function emoza_callback_sale_percentage() {
    $enable = get_theme_mod( 'sale_badge_percent', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}  
}

/**
 * Footer credits divider
 */
function emoza_callback_footer_credits_divider() {
    $divider = get_theme_mod( 'footer_credits_divider', 1 );

	if ( $divider ) {
		return true;
	} else {
		return false;
	}      
}

/**
 * Enable custom palette
 */
function emoza_callback_custom_palette() {
    $enable = get_theme_mod( 'custom_palette_toggle', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}      
}

/**
 * Excerpt
 */
function emoza_callback_excerpt() {
    $enable = get_theme_mod( 'show_excerpt', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	} 	
}

/**
 * Scroll to top
 */
function emoza_callback_scrolltop() {
    $enable = get_theme_mod( 'enable_scrolltop', 1 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}	
}

function emoza_callback_scrolltop_text() {
    $enable = get_theme_mod( 'enable_scrolltop', 1 );
	$type 	= get_theme_mod( 'scrolltop_type', 'icon' );

	if ( $enable && 'text' === $type ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Read more
 */
function emoza_callback_read_more() {
    $enable = get_theme_mod( 'read_more_link', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	} 	
}

/**
 * Grid archives
 */
function emoza_callback_grid_archives() {
	$layout = get_theme_mod( 'blog_layout', 'layout3' );

	if ( 'layout3' === $layout || 'layout5' === $layout ) {
		return true;
	} else {
		return false;
	}
}

/**
 * List archives
 */
function emoza_callback_list_archives() {
	$layout = get_theme_mod( 'blog_layout', 'layout3' );

	if ( 'layout4' === $layout ) {
		return true;
	} else {
		return false;
	}
}

/**
 * List archives
 */
function emoza_callback_list_general_archives() {
	$layout = get_theme_mod( 'blog_layout', 'layout3' );

	if ( 'layout4' === $layout || 'layout6' === $layout ) {
		return true;
	} else {
		return false;
	}
}


/**
 * Author avatar
 */
function emoza_callback_author_avatar() {
	$meta = get_theme_mod( 'archive_meta_elements', array( 'post_date' ) );

	if ( in_array( 'post_author', $meta ) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Header layouts
 */
function emoza_callback_header_layout_1_2() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );
	
	if ( 'header_layout_1' === $layout || 'header_layout_2' === $layout ) {
		return true;
	} else { 
		return false;
	}
}

function emoza_callback_header_layout_3() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );
	
	if ( 'header_layout_3' === $layout ) {
		return true;
	} else { 
		return false;
	}
}

function emoza_callback_header_layout_4() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );
	
	if ( 'header_layout_4' === $layout ) {
		return true;
	} else { 
		return false;
	}
}


function emoza_callback_header_layout_5() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );
	
	if ( 'header_layout_5' === $layout ) {
		return true;
	} else { 
		return false;
	}
}

function emoza_callback_header_layout_not_1() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );
	
	if ( 'header_layout_1' !== $layout ) {
		return true;
	} else { 
		return false;
	}
}

function emoza_callback_header_bottom() {
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );

	if ( 'header_layout_3' === $layout || 'header_layout_4' === $layout || 'header_layout_5' === $layout ) {
		return true;
	} else { 
		return false;
	}
}


/**
 * Sticky header
 */
function emoza_callback_sticky_header() {
	$enable = get_theme_mod( 'enable_sticky_header', 0 );

	if ( $enable ) {
		return true;
	} else {
		return false;
	}
}


/**
 * Header elements
 */
function emoza_callback_header_elements( $element ) {
	
	$layout = get_theme_mod( 'header_layout_desktop', 'header_layout_1' );

	switch ( $layout ) {
		case 'header_layout_1':
		case 'header_layout_2':
			$elements = get_theme_mod( 'header_components_l1', array( 'search' ) );

			if ( in_array( $element, $elements ) ) {
				return true;
			} else {
				return false;
			}

			break;

		case 'header_layout_3':
			$elements 		= get_theme_mod( 'header_components_l3left' );
			$elements_right = get_theme_mod( 'header_components_l3right' );

			if ( in_array( $element, $elements ) || in_array( $element, $elements_right ) ) {
				return true;
			} else {
				return false;
			}

			break;	
			
		case 'header_layout_4':
			$elements 			= get_theme_mod( 'header_components_l4top' );
			$elements_bottom 	= get_theme_mod( 'header_components_l4bottom' );

			if ( in_array( $element, $elements ) || in_array( $element, $elements_bottom ) ) {
				return true;
			} else {
				return false;
			}

			break;	
			
		case 'header_layout_5':
			$elements 			= get_theme_mod( 'header_components_l5topleft' );
			$elements_right 	= get_theme_mod( 'header_components_l5topright' );
			$elements_bottom 	= get_theme_mod( 'header_components_l5bottom' );

			if ( in_array( $element, $elements ) || in_array( $element, $elements_bottom ) || in_array( $element, $elements_right ) ) {
				return true;
			} else {
				return false;
			}

			break;				

		default:
			return false;

			break;			
	}
}

/**
 * Top bar elements
 */
function emoza_callback_topbar_elements( $element ) {
	
	$elements_left 	= get_theme_mod( 'topbar_components_left' );
	$elements_right = get_theme_mod( 'topbar_components_right' );

	if ( in_array( $element, $elements_left ) || in_array( $element, $elements_right ) ) {
		return true;
	} else {
		return false;
	}
}

function emoza_callback_topbar_center_contents() {
	$elements_left 	= get_theme_mod( 'topbar_components_left' );
	$elements_right = get_theme_mod( 'topbar_components_right' );	

	if ( empty( $elements_left ) || empty( $elements_right ) ) {
		return true;
	} else {
		return false;
	}	
}