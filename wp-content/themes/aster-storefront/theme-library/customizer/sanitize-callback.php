<?php

function aster_storefront_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$aster_storefront_choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $aster_storefront_choices ) ? $input : $setting->default );
}

function aster_storefront_sanitize_switch( $input ) {
	if ( true === $input ) {
		return true;
	} else {
		return false;
	}
}

function aster_storefront_sanitize_google_fonts( $input, $setting ) {
	$aster_storefront_choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $aster_storefront_choices ) ? $input : $setting->default );
}


/**
 * Sanitize HTML input.
 *
 * @param string $input HTML input to sanitize.
 * @return string Sanitized HTML.
 */
function aster_storefront_sanitize_html( $input ) {
    return wp_kses_post( $input );
}

/**
 * Sanitize URL input.
 *
 * @param string $input URL input to sanitize.
 * @return string Sanitized URL.
 */
function aster_storefront_sanitize_url( $input ) {
    return esc_url_raw( $input );
}

// Sanitize Scroll Top Position
function aster_storefront_sanitize_scroll_top_position( $input ) {
    $aster_storefront_valid_positions = array( 'bottom-right', 'bottom-left', 'bottom-center' );
    if ( in_array( $input, $aster_storefront_valid_positions ) ) {
        return $input;
    } else {
        return 'bottom-right'; // Default to bottom-right if invalid value
    }
}

function aster_storefront_sanitize_choices( $input, $setting ) {
	global $wp_customize; 
	$control = $wp_customize->get_control( $setting->id ); 
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

function aster_storefront_sanitize_range_value( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default.
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}