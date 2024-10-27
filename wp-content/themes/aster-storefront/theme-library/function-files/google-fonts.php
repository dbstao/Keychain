<?php

if ( ! function_exists( 'aster_storefront_get_all_google_fonts' ) ) :
	/**
	 * Returns list of Google fonts.
	 */
	function aster_storefront_get_all_google_fonts() {
		$aster_storefront_webfonts_json   = get_template_directory() . '/theme-library/google-webfonts.json';
		$aster_storefront_fonts_json_data = file_get_contents( $aster_storefront_webfonts_json );

		$aster_storefront_all_fonts = json_decode( $aster_storefront_fonts_json_data, true );

		$aster_storefront_google_fonts = array();
		foreach ( $aster_storefront_all_fonts as $font ) {
			$aster_storefront_google_fonts[ $font['family'] ] = array(
				'family'   => $font['family'],
				'variants' => $font['variants'],
			);
		}
		return $aster_storefront_google_fonts;
	}
endif;

if ( ! function_exists( 'aster_storefront_get_all_google_font_families' ) ) :
	/**
	 * Returns list of Google font families.
	 */
	function aster_storefront_get_all_google_font_families() {
		$aster_storefront_google_fonts  = aster_storefront_get_all_google_fonts();
		$aster_storefront_font_families = array();
		foreach ( $aster_storefront_google_fonts as $font ) {
			$aster_storefront_font_families[ $font['family'] ] = $font['family'];
		}
		return $aster_storefront_font_families;
	}
endif;

if ( ! function_exists( 'aster_storefront_get_fonts_url' ) ) :
	/**
	 * Return Google fonts URL.
	 */
	function aster_storefront_get_fonts_url() {
		$aster_storefront_fonts_url = '';
		$fonts     = array();

		$aster_storefront_all_fonts = aster_storefront_get_all_google_fonts();

		if ( ! empty( get_theme_mod( 'aster_storefront_site_title_font', 'Raleway' ) ) ) {
			$fonts[] = get_theme_mod( 'aster_storefront_site_title_font', 'Raleway' );
		}

		if ( ! empty( get_theme_mod( 'aster_storefront_site_description_font', 'Raleway' ) ) ) {
			$fonts[] = get_theme_mod( 'aster_storefront_site_description_font', 'Raleway' );
		}

		if ( ! empty( get_theme_mod( 'aster_storefront_header_font', 'Playfair Display' ) ) ) {
			$fonts[] = get_theme_mod( 'aster_storefront_header_font', 'Playfair Display' );
		}

		if ( ! empty( get_theme_mod( 'aster_storefront_body_font', 'Jost' ) ) ) {
			$fonts[] = get_theme_mod( 'aster_storefront_body_font', 'Jost' );
		}

		$fonts = array_unique( $fonts );

		foreach ( $fonts as $font ) {
			$aster_storefront_variants      = $aster_storefront_all_fonts[ $font ]['variants'];
			$aster_storefront_font_family[] = $font . ':' . implode( ',', $aster_storefront_variants );
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $aster_storefront_font_family ) ),
		);

		if ( ! empty( $aster_storefront_font_family ) ) {
			$aster_storefront_fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}

		return $aster_storefront_fonts_url;
	}
endif;
