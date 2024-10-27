<?php
/**
* Custom Functions.
*
* @package Sneakers Sports Shoes
*/

if( !function_exists( 'sneakers_sports_shoes_sanitize_sidebar_option' ) ) :

    // Sidebar Option Sanitize.
    function sneakers_sports_shoes_sanitize_sidebar_option( $sneakers_sports_shoes_input ){

        $sneakers_sports_shoes_metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $sneakers_sports_shoes_input,$sneakers_sports_shoes_metabox_options ) ){

            return $sneakers_sports_shoes_input;

        }

        return;

    }

endif;

if ( ! function_exists( 'sneakers_sports_shoes_sanitize_checkbox' ) ) :

	/**
	 * Sanitize checkbox.
	 */
	function sneakers_sports_shoes_sanitize_checkbox( $sneakers_sports_shoes_checked ) {

		return ( ( isset( $sneakers_sports_shoes_checked ) && true === $sneakers_sports_shoes_checked ) ? true : false );

	}

endif;


if ( ! function_exists( 'sneakers_sports_shoes_sanitize_select' ) ) :

    /**
     * Sanitize select.
     */
    function sneakers_sports_shoes_sanitize_select( $sneakers_sports_shoes_input, $sneakers_sports_shoes_setting ) {
        $sneakers_sports_shoes_input = sanitize_text_field( $sneakers_sports_shoes_input );
        $choices = $sneakers_sports_shoes_setting->manager->get_control( $sneakers_sports_shoes_setting->id )->choices;
        return ( array_key_exists( $sneakers_sports_shoes_input, $choices ) ? $sneakers_sports_shoes_input : $sneakers_sports_shoes_setting->default );
    }

endif;