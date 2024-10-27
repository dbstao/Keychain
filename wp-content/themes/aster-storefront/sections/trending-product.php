<?php

if ( ! get_theme_mod( 'aster_storefront_enable_service_section', true ) ) {
	return;
}

$args = '';

aster_storefront_render_service_section( $args );

/**
 * Render Service Section.
 */
function aster_storefront_render_service_section( $args ) { ?>
		<section id="aster_storefront_trending_section" class="asterthemes-frontpage-section trending-section trending-style-1">
		<?php
		if ( is_customize_preview() ) :
			aster_storefront_section_link( 'aster_storefront_service_section' );
		endif;

		$aster_storefront_trending_product_heading = get_theme_mod( 'aster_storefront_trending_product_heading');
		?>
		<div class="asterthemes-wrapper">
			<?php if ( ! empty( $aster_storefront_trending_product_heading ) ) { ?>
				<div class="header-contact-inner">
					<h3><?php echo esc_html( $aster_storefront_trending_product_heading ); ?></h3>
				</div>
			<?php } ?>
			<?php $aster_storefront_catData = get_theme_mod('aster_storefront_trending_product_category','');
      if ( class_exists( 'WooCommerce' ) ) {
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 100,
          'product_cat' => $aster_storefront_catData,
          'order' => 'ASC'
        );?>
        <div class="product-box"> 
	        <?php $loop = new WP_Query( $args );
	        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          <div class="tab-product">
            	<figure>
              	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
              	<?php if ( has_post_thumbnail() ) { ?>
                    <?php woocommerce_show_product_sale_flash( $product ); ?>
                <?php }?>
                <div class="box-content intro-button">
              		<?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
          			</div>
              </figure>
        			<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
          			<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
        			<h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h6>
	          </div>
	        <?php endwhile; wp_reset_query(); ?>
	      </div>
      <?php } ?>
		</div>
	</section>
	<?php
}
