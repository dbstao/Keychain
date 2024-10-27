<?php

if ( ! get_theme_mod( 'aster_photography_enable_service_section', true ) ) {
	return;
}

$aster_photography_args = '';

aster_photography_render_service_section( $aster_photography_args );

/**
 * Render Service Section.
 */
function aster_photography_render_service_section( $aster_photography_args ) { ?>
	<section id="aster_photography_trending_section" class="asterthemes-frontpage-section trending-section trending-style-1">
		<div class="asterthemes-wrapper">
			<?php
			if ( is_customize_preview() ) :
				aster_photography_section_link( 'aster_photography_service_section' );
			endif;

			$aster_photography_trending_product_heading = get_theme_mod( 'aster_photography_trending_product_heading', '' );
			?>
			<?php if ( ! empty( $aster_photography_trending_product_heading ) ) { ?>
				<div class="product-contact-inner">
					<h3><?php echo esc_html( $aster_photography_trending_product_heading ); ?></h3>
				</div>
			<?php } ?>

		   	<?php $aster_photography_catData = get_theme_mod('aster_photography_trending_product_category');
			    if ( class_exists( 'WooCommerce' ) ) {
		        $aster_photography_args = array(
		          'post_type' => 'product',
		          'posts_per_page' => 100,
		          'product_cat' => $aster_photography_catData,
		          'order' => 'ASC'
		        );?>
		        <div class="owl-carousel">
			        <?php $loop = new WP_Query( $aster_photography_args );
			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			          <div class="tab-product">
			          	<div class="product-image">
			          		<figure>
				              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
				            </figure>
			          		<div class="box-content intro-button">
			                  <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
			                </div>
			          	</div>
			          	<div class="product-content-box">
		    				<span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
		    					<?php echo $product->get_price_html(); ?>
		    				</span>
		    				<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
							<span class="rating-box">
								<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>	
							</span>
		    			</div>
			          </div>
			        <?php endwhile; wp_reset_postdata(); ?>
			    </div>
			<?php } ?>
		</div>	    	
	</section>
	<?php
}
