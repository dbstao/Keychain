<?php
/**
 * Template part for Post Ticker
 *
 * @package Graceful Mode
 */
if (graceful_options('basic_slider_width') === 'wrapped') {
    $graceful_slider_width = 'wrapped-content';
} else {
    $graceful_slider_width = '';
}
?>

<div id="graceful-post-ticker" class="latest-posts-ticker owl-carousel owl-theme <?php echo esc_attr( $graceful_slider_width ); ?>">

    <?php
    $latest_posts = new WP_Query( array(
        'posts_per_page' => 5,
        'post_status'    => 'publish',
    ) );

    if ( $latest_posts->have_posts() ) :
        while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
            <div class="item">
                <a href="<?php the_permalink(); ?>" class="post-item">
                    <div class="post-thumbnail">
					    <?php if ( has_post_thumbnail() ) : ?>
					        <?php the_post_thumbnail( 'thumbnail' ); ?>
					    <?php else : ?>
					        <div class="no-thumbnail"></div>
					    <?php endif; ?>
					</div>
                    <div class="post-details">
                        <h3 class="post-title"><?php the_title(); ?></h3>
                    </div>
                </a>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    ?>

</div>


<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $('.latest-posts-ticker').owlCarousel({
	        items: 3,
	        loop: true,
	        margin: 10,
	        autoplay: true,
	        autoplayTimeout: 3000,
	        autoplayHoverPause: true,
	        nav: true,
        	dots: false,
	        responsive: {
	            0: {
	                items: 1
	            },
	            600: {
	                items: 2
	            },
	            1000: {
	                items: 3
	            }
	        }
	    });
	});
</script>
