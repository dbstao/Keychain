<?php
/**
 * The search form template
 * @package Emoza
 */

$emoza_unique_id = wp_unique_id( 'search-form-' );

$emoza_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<?php if ( !class_exists( 'WooCommerce' ) ) : ?>
<form role="search" <?php echo $emoza_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $emoza_unique_id ); ?>"><?php _e( 'Search&hellip;', 'emoza-woocommerce' ); // phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction ?></label>
	<input type="search" id="<?php echo esc_attr( $emoza_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'emoza-woocommerce' ); ?>"/>
	<button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'emoza-woocommerce' ); ?>"><i class="ws-svg-icon"><?php emoza_get_svg_icon( 'icon-search', true ); ?></i></button>
</form>
<?php else : ?>
<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $emoza_unique_id ) ? absint( $emoza_unique_id ) : 0; ?>"><?php esc_html_e( 'Search for:', 'emoza-woocommerce' ); ?></label>
	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $emoza_unique_id ) ? absint( $emoza_unique_id ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'emoza-woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'emoza-woocommerce' ); ?>"><i class="ws-svg-icon"><?php emoza_get_svg_icon( 'icon-search', true ); ?></i></button>
	<input type="hidden" name="post_type" value="product" />
</form>
<?php endif; ?>