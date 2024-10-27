<?php if ( get_theme_mod('cloth_rental_shop_blog_box_enable', true) == true ) : ?>
<section id="slider-section" class="slider-area home-slider pt-5">
  <div class="container-fluid px-6">
    <!-- start of hero -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <?php
        $cloth_rental_shop_product_data = get_theme_mod('cloth_rental_shop_blog_slide_category_');
        if ( class_exists( 'WooCommerce' ) ) {
          $cloth_rental_shop_args = array(
            'post_type' => 'product',
            'product_cat' => $cloth_rental_shop_product_data,
            'order' => 'ASC'
          );
          $loop = new WP_Query( $cloth_rental_shop_args );
          $i = 1; ?>
       
        <div class="carousel-inner" role="listbox">
          <?php  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <div class="row tab-product">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 product-box align-self-center">
                  <div class="product-details">
                    <?php if ( get_theme_mod('cloth_rental_shop_slider_product_heading') ) : ?>
                      <h3 class="product-heading mb-2"><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_product_heading'));?></h3>
                    <?php endif; ?>
                    <strong class="product-text m-0 p-0"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></strong>
                    <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> m-0"><span><?php echo esc_html('Start From - ','cloth-rental-shop'); ?></span><?php echo $product->get_price_html(); ?></p>
                  </div>
                  <div class="slide-cart-button mt-3">
                    <span class="button1"><a href="<?php the_permalink(); ?>"><?php echo esc_html('Shop Now','cloth-rental-shop'); ?></a></span>
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 product-image mb-3 align-self-center">
                  <figure>
                    <?php if (has_post_thumbnail( $loop->post->ID )) {
                      if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                    } else { ?>
                      <div class="slider-porduct-image"></div>
                    <?php } ?>
                  </figure>
                  <?php if ( get_theme_mod('cloth_rental_shop_slider_offer_heading') || get_theme_mod('cloth_rental_shop_slider_offer_heading') || get_theme_mod('cloth_rental_shop_slider_offer_code') ) : ?>
                    <div class="offer-box">
                      <?php if ( get_theme_mod('cloth_rental_shop_slider_offer_heading') ) : ?>
                        <h4 class="mb-1"><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_offer_heading'));?></h4>
                      <?php endif; ?>
                      <?php if ( get_theme_mod('cloth_rental_shop_slider_offer_text') ) : ?>
                        <h3 class="mb-1"><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_offer_text'));?></h3>
                      <?php endif; ?>
                      <?php if ( get_theme_mod('cloth_rental_shop_slider_offer_code') ) : ?>
                        <p><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_offer_code'));?></p>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ( get_theme_mod('cloth_rental_shop_slider_contact_phone_nember') || get_theme_mod('cloth_rental_shop_slider_contact_mail_id') ) : ?>
                    <div class="contact-box">
                      <div class="icon-box">
                       <i class="fas fa-headphones"></i>
                      </div>
                      <div class="main-contact-box">
                        <?php if ( get_theme_mod('cloth_rental_shop_slider_contact_phone_nember') ) : ?>
                          <p class="m-0"><span><?php echo esc_html('Support : ','cloth-rental-shop'); ?></span><a href="tel:<?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_contact_phone_nember'));?>"><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_contact_phone_nember'));?></a></p>
                        <?php endif; ?>
                        <?php if ( get_theme_mod('cloth_rental_shop_slider_contact_mail_id') ) : ?>
                          <p class="m-0"><span><?php echo esc_html('E-mail : ','cloth-rental-shop'); ?></span><a href="mailto:<?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_contact_mail_id'));?>"><?php echo esc_html(get_theme_mod('cloth_rental_shop_slider_contact_mail_id'));?></a></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
          </div>
          <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>
        <?php } ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
        <span class="screen-reader-text"><?php echo esc_html('Previous','cloth-rental-shop'); ?></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
        <span class="screen-reader-text"><?php echo esc_html('Next','cloth-rental-shop'); ?></span>
      </button>
    </div>
    <div id="slider-inner" class="row m-0">
      <div class="col-lg-6 col-md-6 col-12 product-main-box">
        <div class="owl-carousel" id="carousel-thumbs">
          <?php
          $cloth_rental_shop_product_data = get_theme_mod('cloth_rental_shop_blog_slide_category_');
          if ( class_exists( 'WooCommerce' ) ) {
            $cloth_rental_shop_args = array(
              'post_type' => 'product',
              'product_cat' => $cloth_rental_shop_product_data,
              'order' => 'ASC'
            );
            $loop = new WP_Query( $cloth_rental_shop_args );
            $i = 1; ?>
            <?php  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="tab-product-slide">
                  <div class="tab-product-image mb-3">
                    <figure>
                      <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                    </figure>
                  </div>
                  <div class="tab-product-box">
                    <div class="tab-product-details">
                      <strong class="tab-product-text m-0 p-0"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></strong>
                    </div>
                    <div class="tab-cart-button">
                      <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> m-0"><?php echo $product->get_price_html(); ?></p>
                      <p class="icon m-0" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><span class="button1"><?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?></span></p>
                    </div>
                  </div>
            </div>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- end of hero slider -->
  </div>
   <?php $cloth_rental_shop_settings = get_theme_mod( 'cloth_rental_shop_social_links_settings' ); ?>
    <div class="social-links">
      <?php if ( is_array($cloth_rental_shop_settings) || is_object($cloth_rental_shop_settings) ){ ?>
        <?php foreach( $cloth_rental_shop_settings as $cloth_rental_shop_setting ) { ?>
          <span>
            <p><?php echo esc_html( $cloth_rental_shop_setting['link_text_title'] ); ?></p>
            <a href="<?php echo esc_url( $cloth_rental_shop_setting['link_url'] ); ?>">
              <i class="<?php echo esc_attr( $cloth_rental_shop_setting['link_text'] ); ?>"></i>
            </a>
          </span>
        <?php } ?>
      <?php } ?>
    </div>
</section>
<?php endif; ?>