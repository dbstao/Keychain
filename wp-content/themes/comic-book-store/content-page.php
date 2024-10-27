<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Comic Book Store
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<?php the_post_thumbnail(); ?>
	<div class="entry-content mt-3">
		<?php the_content(); ?>
	</div>
	<div class="clearfix"></div>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'comic-book-store' ),
			'after'  => '</div>',
		) );
	?>
	<?php edit_post_link( __( 'Edit', 'comic-book-store' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>