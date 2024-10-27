<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! aster_photography_has_page_header() ) {
    return;
}

$classes = array( 'page-header' );
$style = aster_photography_page_header_style();

if ( $style ) {
    $classes[] = $style . '-page-header';
}

$visibility = get_theme_mod( 'aster_photography_page_header_visibility', 'all-devices' );

if ( 'hide-all-devices' === $visibility ) {
    // Don't show the header at all
    return;
}

if ( 'hide-tablet' === $visibility ) {
    $classes[] = 'hide-on-tablet';
} elseif ( 'hide-mobile' === $visibility ) {
    $classes[] = 'hide-on-mobile';
} elseif ( 'hide-tablet-mobile' === $visibility ) {
    $classes[] = 'hide-on-tablet-mobile';
}

$aster_photography_PAGE_TITLE_background_color = get_theme_mod('aster_photography_page_title_background_color_setting', '');

// Get the toggle switch value
$background_image_enabled = get_theme_mod('aster_photography_page_header_style', true);

// Add background image to the header if enabled
$background_image = get_theme_mod( 'aster_photography_page_header_background_image', '' );
$background_height = get_theme_mod( 'aster_photography_page_header_image_height', '200' );
$inline_style = '';

if ( $background_image_enabled && ! empty( $background_image ) ) {
    $inline_style .= 'background-image: url(' . esc_url( $background_image ) . '); ';
    $inline_style .= 'height: ' . esc_attr( $background_height ) . 'px; ';
    $inline_style .= 'background-size: cover; ';
    $inline_style .= 'background-position: center center; ';

    // Add the unique class if the background image is set
    $classes[] = 'has-background-image';
}

$classes = implode( ' ', $classes );
$heading = get_theme_mod( 'aster_photography_page_header_heading_tag', 'h1' );
$heading = apply_filters( 'aster_photography_page_header_heading', $heading );

?>

<?php do_action( 'aster_photography_before_page_header' ); ?>

<header class="<?php echo esc_attr( $classes ); ?>" style="<?php echo esc_attr( $inline_style ); ?> background-color: <?php echo esc_attr($aster_photography_PAGE_TITLE_background_color); ?>;">

    <?php do_action( 'aster_photography_before_page_header_inner' ); ?>

    <div class="asterthemes-wrapper page-header-inner">

        <?php if ( aster_photography_has_page_header() ) : ?>

            <<?php echo esc_attr( $heading ); ?> class="page-header-title">
                <?php echo wp_kses_post( aster_photography_get_page_title() ); ?>
            </<?php echo esc_attr( $heading ); ?>>

        <?php endif; ?>

        <?php if ( function_exists( 'aster_photography_breadcrumb' ) ) : ?>
            <?php aster_photography_breadcrumb(); ?>
        <?php endif; ?>

    </div><!-- .page-header-inner -->

    <?php do_action( 'aster_photography_after_page_header_inner' ); ?>

</header><!-- .page-header -->

<?php do_action( 'aster_photography_after_page_header' ); ?>
