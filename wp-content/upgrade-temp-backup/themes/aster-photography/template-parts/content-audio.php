<?php

/**
 * Template part for displaying Audio Format
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aster_photography
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
        <?php
			// Get the post ID
			$post_id = get_the_ID();

			// Check if there are audio embedded in the post content
			$post = get_post($post_id);
			$aster_photography_content = do_shortcode(apply_filters('the_content', $post->post_content));
			$embeds = get_media_embedded_in_content($aster_photography_content);

			if (!empty($embeds)) {
			    // Loop through embedded media and display only audio
			    foreach ($embeds as $embed) {
			        // Check if the embed code contains an audio tag or specific audio providers like SoundCloud
			        if (strpos($embed, 'audio') !== false || strpos($embed, 'soundcloud') !== false) {
			            ?>
			            <div class="custom-embedded-audio">
			                <div class="media-container">
			                    <?php echo $embed; ?>
			                </div>
			                <div class="media-comments">
			                    <?php
			                    // Add your comments section here
			                    comments_template(); // This will include the default WordPress comments template
			                    ?>
			                </div>
			            </div>
			            <?php
			        }
			    }
			}
		?>
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php aster_photography_categories_list(); ?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title mag-post-title">', '</h1>' );
			else :
				if ( !get_theme_mod( 'aster_photography_post_hide_post_heading', false ) ) { 
					the_title( '<h2 class="entry-title mag-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			    }
			endif;
			?>
			<div class="mag-post-meta">
				<?php
				aster_photography_posted_by();
				aster_photography_posted_on();
				?>
			</div>
			<?php if ( !get_theme_mod( 'aster_photography_post_hide_post_content', false ) ) { ?>
				<div class="mag-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
		    <?php } ?>
			<div class="mag-post-read-more">
				<a href="<?php the_permalink(); ?>" class="read-more-button">
					<?php esc_html_e( 'Read More', 'aster-photography' ); ?>
					<span class="dashicons dashicons-arrow-right"></span>
				</a>
			</div>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->