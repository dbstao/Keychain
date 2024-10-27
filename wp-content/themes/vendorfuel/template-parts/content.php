<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VendorFuel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pb-3">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="wp-block-cover alignfull has-background-dim">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'loading' => 'lazy',
						'class'   => 'wp-block-cover__image-background',
					)
				);
				?>
				<div class="wp-block-cover__inner-container">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title has-text-align-center">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title has-text-align-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta has-text-align-center">
							<?php
							vendorfuel_posted_on();
							vendorfuel_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div>
			</div>
		<?php } else { ?>
			<div class="text-center py-5">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					vendorfuel_posted_on();
					vendorfuel_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			</div>
		<?php } ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vendorfuel' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vendorfuel' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php vendorfuel_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
