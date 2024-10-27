<?php
function aster_photography_get_all_google_fonts() {
    $aster_photography_webfonts_json = get_template_directory() . '/theme-library/google-webfonts.json';
    if ( ! file_exists( $aster_photography_webfonts_json ) ) {
        return array();
    }

    $aster_photography_fonts_json_data = file_get_contents( $aster_photography_webfonts_json );
    if ( false === $aster_photography_fonts_json_data ) {
        return array();
    }

    $aster_photography_all_fonts = json_decode( $aster_photography_fonts_json_data, true );
    if ( json_last_error() !== JSON_ERROR_NONE ) {
        return array();
    }

    $aster_photography_google_fonts = array();
    foreach ( $aster_photography_all_fonts as $font ) {
        $aster_photography_google_fonts[ $font['family'] ] = array(
            'family'   => $font['family'],
            'variants' => $font['variants'],
        );
    }
    return $aster_photography_google_fonts;
}


function aster_photography_get_all_google_font_families() {
    $aster_photography_google_fonts  = aster_photography_get_all_google_fonts();
    $aster_photography_font_families = array();
    foreach ( $aster_photography_google_fonts as $font ) {
        $aster_photography_font_families[ $font['family'] ] = $font['family'];
    }
    return $aster_photography_font_families;
}

function aster_photography_get_fonts_url() {
    $aster_photography_fonts_url = '';
    $fonts     = array();

    $aster_photography_all_fonts = aster_photography_get_all_google_fonts();

    if ( ! empty( get_theme_mod( 'aster_photography_site_title_font', 'Dynalight' ) ) ) {
        $fonts[] = get_theme_mod( 'aster_photography_site_title_font', 'Dynalight' );
    }

    if ( ! empty( get_theme_mod( 'aster_photography_site_description_font', 'Mulish' ) ) ) {
        $fonts[] = get_theme_mod( 'aster_photography_site_description_font', 'Mulish' );
    }

    if ( ! empty( get_theme_mod( 'aster_photography_header_font', 'Mulish' ) ) ) {
        $fonts[] = get_theme_mod( 'aster_photography_header_font', 'Mulish' );
    }

    if ( ! empty( get_theme_mod( 'aster_photography_content_font', 'Mulish' ) ) ) {
        $fonts[] = get_theme_mod( 'aster_photography_content_font', 'Mulish' );
    }

    $fonts = array_unique( $fonts );

    foreach ( $fonts as $font ) {
        $aster_photography_variants      = $aster_photography_all_fonts[ $font ]['variants'];
        $aster_photography_font_family[] = $font . ':' . implode( ',', $aster_photography_variants );
    }

    $query_args = array(
        'family' => urlencode( implode( '|', $aster_photography_font_family ) ),
    );

    if ( ! empty( $aster_photography_font_family ) ) {
        $aster_photography_fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return $aster_photography_fonts_url;
}

