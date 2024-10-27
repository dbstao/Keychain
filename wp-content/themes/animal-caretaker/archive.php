<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Animal Caretaker
 */

get_header(); ?>

<section id="blog-content" class="section-padding">
	<div class="container">
		<div class="row">	
			<?php
				get_template_part( 'template-parts/layouts' );
		    ?>
		</div>	
	</div>
</section>

<?php get_footer(); ?>
