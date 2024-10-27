<?php if ( get_theme_mod('cloth_rental_shop_products_section_enable', true) == true ) : ?>
<div id="hot_products" class="py-5">
	<div class="container">
    <?php if ( get_theme_mod('cloth_rental_shop_products_main_sub_heading') ) : ?>
      <h4 class="mb-3"><?php echo esc_html(get_theme_mod('cloth_rental_shop_products_main_sub_heading'));?></h4>
    <?php endif; ?>
    <?php if ( get_theme_mod('cloth_rental_shop_products_main_heading') ) : ?>
		  <h3 class="mb-4"><?php echo esc_html(get_theme_mod('cloth_rental_shop_products_main_heading'));?></h3>
    <?php endif; ?>
    <div class="product_box">
      <?php if( get_theme_mod('cloth_rental_shop_daily_deals_timmer') != '' ){ ?>
        <div id="countdown-timer" class="text-center mb-2 px-3">
          <input type="hidden" name="new-year-date" id="new-year-date" value="<?php echo esc_attr(get_theme_mod('cloth_rental_shop_daily_deals_timmer','')); ?>">
          <div class="main-count-box">
            <div class="time-count-box px-2">
              <div class="count-box "><span class="counter-box"><p id="days" class="time-number mb-0"></p><span>:</span> </span><p class="time-countdown-text mb-0"><?php esc_html_e('Day','cloth-rental-shop'); ?></p></div>
            </div>
            <div class="time-count-box px-2">
              <div class="count-box "><span class="counter-box"><p id="hours" class="time-number mb-0"></p><span>:</span> </span><p class="time-countdown-text mb-0"><?php esc_html_e('Hours','cloth-rental-shop'); ?></p></div>
            </div>
            <div class="time-count-box px-2">
              <div class="count-box "><span class="counter-box"><p id="mins" class="time-number mb-0"></p><span>:</span> </span><p class="time-countdown-text mb-0"><?php esc_html_e('Minutes','cloth-rental-shop'); ?></p></div>
            </div>
            <div class="time-count-box px-2">
              <div class="count-box"><span class="counter-box"><p id="seconds" class="time-number mb-0"></p></span> <p class="time-countdown-text mb-0"><?php esc_html_e('Seconds','cloth-rental-shop'); ?></p></div>
            </div>
          </div>
        </div>
      <?php }?>
      <div class="owl-carousel">
        <?php
        $cloth_rental_shop_product_data = get_theme_mod('cloth_rental_shop_products_category');
        if ( class_exists( 'WooCommerce' ) ) {
          $cloth_rental_shop_args = array(
            'post_type' => 'product',
            'posts_per_page' => get_theme_mod('cloth_rental_shop_products_per_page'),
            'product_cat' => $cloth_rental_shop_product_data,
            'order' => 'ASC'
          );
          $loop = new WP_Query( $cloth_rental_shop_args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        	  <div class="tab-product">
              <div class="product-image mb-3">
                <figure>
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                </figure>
              </div>
              <div class="product-box">
                <div class="product-details">
                  <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
            	    <strong class="product-text m-0 p-0"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></strong>
                  <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> m-0"><?php echo $product->get_price_html(); ?></p>
                </div>
                <div class="cart-button">
                  <span class="icon" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><span class="button1"><?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?></span></span>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php } ?>
  	  </div>
    </div>
	</div>
</div>
<?php endif; ?>