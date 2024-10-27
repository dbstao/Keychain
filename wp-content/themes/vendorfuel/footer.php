<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VendorFuel
 */

$vendorfuel_color_scheme = get_theme_mod( 'color_scheme' );
$vendorfuel_text_class   = '';

switch ( $vendorfuel_color_scheme ) {
	case 'rwb':
		$vendorfuel_bg_class = 'bg-light';
		break;
	case 'green':
		$vendorfuel_bg_class   = 'has-dark-green-background-color';
		$vendorfuel_text_class = 'text-light';
		break;
	case 'blue':
		$vendorfuel_bg_class   = 'has-dark-blue-background-color';
		$vendorfuel_text_class = 'text-light';
		break;
	case 'gray':
		$vendorfuel_bg_class   = 'bg-secondary';
		$vendorfuel_text_class = 'text-light';
		break;
	case 'dark':
		$vendorfuel_bg_class   = 'bg-dark';
		$vendorfuel_text_class = 'text-light';
		break;
	default:
		$vendorfuel_bg_class = 'bg-light';
}
?>

<footer id="colophon" class="site-footer py-4 border-top <?php echo esc_attr( $vendorfuel_bg_class ) . ' ' . esc_attr( $vendorfuel_text_class ); ?>">
	<div class="site-info container">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php } else { ?>
			<div class="d-flex justify-content-between">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vendorfuel' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'vendorfuel' ), 'WordPress' );
					?>
				</a>
				<span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'vendorfuel' ), 'vendorfuel', '<a href="https://vendorfuel.com/">The VendorFuel Team</a>' );
					?>
				</span>
			</div><!-- .site-info -->
		<?php } ?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
