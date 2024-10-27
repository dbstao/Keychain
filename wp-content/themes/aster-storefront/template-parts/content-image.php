<?php

/**
 * Template part for displaying Image Format
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aster_storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
		<div class="mag-post-img">
			<?php aster_storefront_post_thumbnail(); ?>
		</div>
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php aster_storefront_categories_list(); ?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title mag-post-title">', '</h1>' );
			else :
				if ( !get_theme_mod( 'aster_storefront_post_hide_post_heading', false ) ) { 
					the_title( '<h2 class="entry-title mag-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			    }
			endif;
			?>
			<div class="mag-post-meta">
				<?php
				aster_storefront_posted_by();
				aster_storefront_posted_on();
				?>
			</div>
			<?php if ( !get_theme_mod( 'aster_storefront_post_hide_post_content', false ) ) { ?>
				<div class="mag-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
		    <?php } ?>
			<div class="mag-post-read-more">
				<a href="<?php the_permalink(); ?>" class="read-more-button">
					<?php esc_html_e( 'Read More', 'aster-storefront' ); ?>
					<span class="dashicons dashicons-arrow-right"></span>
				</a>
			</div>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
