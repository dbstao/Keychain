<?php
if ( ! get_theme_mod( 'aster_photography_enable_banner_section', true ) ) {
	return;
}

$aster_photography_slider_content_ids  = array();
$aster_photography_slider_content_type = get_theme_mod( 'aster_photography_banner_slider_content_type', 'post' );

for ( $i = 1; $i <= 3; $i++ ) {
	$aster_photography_slider_content_ids[] = get_theme_mod( 'aster_photography_banner_slider_content_' . $aster_photography_slider_content_type . '_' . $i );
}
$aster_photography_banner_slider_args = array(
	'post_type'           => $aster_photography_slider_content_type,
	'post__in'            => array_filter( $aster_photography_slider_content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint( 3 ),
	'ignore_sticky_posts' => true,
);
$aster_photography_banner_slider_args = apply_filters( 'aster_photography_banner_section_args', $aster_photography_banner_slider_args );

aster_photography_render_banner_section( $aster_photography_banner_slider_args );

/**
 * Render Banner Section.
 */
function aster_photography_render_banner_section( $aster_photography_banner_slider_args ) {     ?>

	<section id="aster_photography_banner_section" class="banner-section banner-style-1">
		<?php
		if ( is_customize_preview() ) :
			aster_photography_section_link( 'aster_photography_banner_section' );
		endif;
		?>
		<div class="banner-section-wrapper">
			<?php
			$aster_photography_query = new WP_Query( $aster_photography_banner_slider_args );
			if ( $aster_photography_query->have_posts() ) :
				?>
				<div class="asterthemes-banner-wrapper banner-slider aster-photography-carousel-navigation" data-slick='{"autoplay": false }'>
					<?php
					$i = 1;
					while ( $aster_photography_query->have_posts() ) :
						$aster_photography_query->the_post();
						$aster_photography_button_label = get_theme_mod( 'aster_photography_banner_button_label_' . $i, '' );
						$aster_photography_button_link  = get_theme_mod( 'aster_photography_banner_button_link_' . $i, '' );
						$aster_photography_button_link  = ! empty( $aster_photography_button_link ) ? $aster_photography_button_link : get_the_permalink();
						?>
						<div class="banner-single-outer">
							<div class="banner-single">
								<div class="banner-img">
									<?php if ( has_post_thumbnail() ) : ?>
									    <?php the_post_thumbnail( 'full' ); ?>
									<?php else : ?>
									    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/resource/img/default.jpg" alt="Default Image" />
									<?php endif; ?>
								</div>
								<div class="banner-caption">
									<div class="asterthemes-wrapper">
										<div class="banner-catption-wrapper">
											<h1 class="banner-caption-title">
											    <?php
											    $aster_photography_title = get_the_title();
											    echo $aster_photography_title;
											    ?>
											</h1>
											<?php if ( ! empty( $aster_photography_button_label ) ) { ?>
												<div class="banner-slider-btn">
													<a href="<?php echo esc_url( $aster_photography_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $aster_photography_button_label ); ?></a>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$i++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
			endif;
			?>
		</div>
	</section>
	<?php
}