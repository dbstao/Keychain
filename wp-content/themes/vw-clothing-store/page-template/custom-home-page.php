<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php if( get_theme_mod( 'vw_clothing_store_show_hide_banner',false) == 1) { ?>
    <section id="banner" class="wow bounceInDown delay-1000" data-wow-duration="3s">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-12 banner-main-text">
            <div class="banner-caption">
              <div class="inner_carousel">
                <?php if(get_theme_mod('vw_clothing_store_extra_text') != '') {?>
                  <p class="extra-text"><?php echo esc_html(get_theme_mod('vw_clothing_store_extra_text')) ?></p>
                <?php }?>
                <?php if(get_theme_mod('vw_clothing_store_tagline_title') != '') {?>
                  <h1><?php echo esc_html(get_theme_mod('vw_clothing_store_tagline_title')) ?></h1>
                <?php }?>
                <?php if(get_theme_mod('vw_clothing_store_designation_text') != '') {?>
                  <p class="small-text"><?php echo esc_html(get_theme_mod('vw_clothing_store_designation_text')) ?></p>
                <?php }?>
              </div>
            </div>
            <!-- product cat -->
            <?php if( get_theme_mod( 'vw_clothing_store_show_hide_product',false) == 1) { ?>
              <div class="slider-nav d-flex">
                <?php if ( class_exists( 'WooCommerce' ) ) {
                  $args = array( 
                    'post_type' => 'product',
                    'product_cat' => get_theme_mod('vw_clothing_store_product_category'),
                    'order' => 'ASC'
                  );
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="product-box">
                      <div class="slider-nav-box-inner d-flex align-items-center">
                       <div class="slider-nav-image">
                          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                        </div>
                        <div class="slider-product-text text-center p-2">
                          <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                            <div class="product-text-meta-fields">
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                <span class="product-text"><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_rating_text',true)); ?></span>
                              <?php }?>
                            </div>
                          <?php }?>
                          <h2 class="slider-nav-title">
                            <a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a>
                          </h2>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                <?php } ?>
              </div> 
            <?php }?>
              <!-- end -->
            </div>
          <div class="col-lg-5 col-md-6 col-12 banner-main-text1">
            <!-- product cat -->
            <?php if( get_theme_mod( 'vw_clothing_store_show_hide_product',false) == 1) { ?>
              <div class="banner-next">
                <div class="slider-for pt-4">
                  <?php if ( class_exists( 'WooCommerce' ) ) {
                  $args = array( 
                    'post_type' => 'product',
                    'product_cat' => get_theme_mod('vw_clothing_store_product_category'),
                    'order' => 'ASC'
                  );
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="product-box-next">
                      <div class="slider-nav-box-inner-sec">
                        <div class="slider-nav-image-sec text-center">
                          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                <?php } ?>
                </div> 
              </div>
            <?php }?>
            <!-- end -->
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

<?php do_action( 'vw_clothing_store_after_slider' ); ?>

<!-- Product Section -->
<?php if( get_theme_mod('vw_clothing_store_best_product_category') != ''){ ?>
  <section id="product-section" class="product-section pt-lg-2 pt-md-4 pt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 pt-lg-0 pb-lg-0 pt-4 pb-4 align-self-center product-section1">
            <?php if ( class_exists( 'WooCommerce' ) ) {
              $args = array( 
                'post_type' => 'product',
                'product_cat' => get_theme_mod('vw_clothing_store_best_product_category'),
                'order' => 'ASC',
                'posts_per_page' => '1'
              );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="slider-product-text text-start p-2">          
                  <div class="product-box px-4">  
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="product-box-content mt-4">
                          <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                            <div class="product-text-meta-fields">
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                <span class="product-text"><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_rating_text',true)); ?></span>
                              <?php }?>
                            </div>
                          <?php }?> 
                          <div class="countdowntimer">
                            <p id="timer" class="countdown">
                              <?php
                              $dateday = get_theme_mod('vw_clothing_store_product_clock_timer_end'); ?>
                              <input type="hidden" class="date" value="<?php echo esc_html($dateday); ?>"></p>
                          </div> 
                          <div class="rating-total-sale d-flex gap-5">
                            <div class="rating">
                              <i class="fa fa-star" aria-hidden="true"></i>
                               <span>
                                 <?php echo esc_html (vw_clothing_store_average_rating() . '.0'); ?>
                               </span>
                            </div>
                            <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                              <div class="rating-text-meta-fields">
                                <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                  <span class="rating-text"><i class="fas fa-signal me-2"></i><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_total_sale',true)); ?></span>
                                <?php }?>
                              </div>
                            <?php }?>
                          </div>
                          <h2 class="product-heading-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h2>
                          <p class="product-rating d-flex mb-lg-3 mb-0 d-3 mb-5 <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="slick">
                            <?php 
                            if (has_post_thumbnail()) {
                              $attachment_ids = $product->get_gallery_image_ids();

                              foreach ($attachment_ids as $attachment_id) {
                                  $image_link = wp_get_attachment_url($attachment_id);
                                  echo '<img src="' . $image_link . '" alt="" />';
                              }
                            }
                              ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            <?php } ?>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 pt-xl-0 pt-lg-4 pt-3 product-section2">
          <?php if ( class_exists( 'WooCommerce' ) ){ ?>
            <div class="tab-content">
              <!-- new collection -->
              <div id="new-collection-section" class="tab-pane active">
                <div class="pro-sec">
                  <?php if( get_theme_mod('vw_clothing_store_new_collection_heading') != '' ){ ?>
                    <h2 class="heading-text"><?php echo esc_html(get_theme_mod('vw_clothing_store_new_collection_heading',''));?></h2>
                  <?php }?>
                  <?php if( get_theme_mod('vw_clothing_store_new_collection_small_title') != '' ){ ?>
                    <p><?php echo esc_html(get_theme_mod('vw_clothing_store_new_collection_small_title',''));?></p>
                  <?php }?>
                    <?php
                   $args = array(
                       'post_type'     => 'product',
                       'post_status'   => 'publish'
                         );
                       $query = new WP_Query($args); ?>
                     
                    <div class="new-collection">
                      <div class="owl-carousel">
                      <?php
                      if ( $query->have_posts() ) :
                        while ($query->have_posts()) : $query->the_post(); global $product;?>
                        <div class="product-inner product-content">
                          <div class="product-image">
                           <?php if (has_post_thumbnail( $query->post->ID )) echo get_the_post_thumbnail($query->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; ?>
                           <div class="pro-icons">
                            <div class="d-flex align-items-center justify-content-center">
                              <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                              <?php if(defined('YITH_WCWL')){ ?>
                              <a class="wishlist_view ms-2 d-flex" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','vw-clothing-store'); ?>"><i class="far fa-heart"></i>
                              </a>
                            <?php }?>  
                            </div>
                          </div>
                          </div>
                          <div class="product-details text-md-start text-center">
                            <div class="rating-total-sale d-flex gap-3 py-2">
                              <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                 <span>
                                   <?php echo esc_html (vw_clothing_store_average_rating() . '.0'); ?>
                                 </span>
                              </div>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                <div class="rating-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                    <span class="rating-text"><i class="fas fa-signal me-2"></i><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_total_sale',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                <div class="product-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                    <span class="product-text"><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_rating_text',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                            </div>
                             <h6 class="product-name m-0 py-2">
                               <a href="<?php the_permalink(); ?>">
                                 <?php the_title(); ?>
                               </a>
                             </h6>
                             <div class="products-meta d-flex flex-lg-wrap flex-xl-nowrap align-items-center justify-content-xl-between justify-content-between">
                               <div class="d-flex align-items-center" >
                                 <span class="d-flex product-regular-price">
                                  <?php echo $product->get_price_html(); ?>
                                 </span>
                               </div>
                             </div>
                           </div>
                        </div>
                      <?php endwhile; endif;
                      wp_reset_postdata(); ?>
                    </div>
                    </div>

                </div>
              </div>

              <!-- trending collection -->
              <div id="trending" class="tab-pane fade">
                <div class="pro-sec">
                  <?php if( get_theme_mod('vw_clothing_store_trending_collection_heading') != '' ){ ?>
                    <h2 class="heading-text"><?php echo esc_html(get_theme_mod('vw_clothing_store_trending_collection_heading',''));?></h2>
                  <?php }?>
                  <?php if( get_theme_mod('vw_clothing_store_trending_collection_small_title') != '' ){ ?>
                    <p><?php echo esc_html(get_theme_mod('vw_clothing_store_trending_collection_small_title',''));?></p>
                  <?php }?>
                  <?php
                   $args = array(
                       'post_type'     => 'product',
                       'post_status'   => 'publish',
                       'posts_per_page' => '3'
                         );
                       $query = new WP_Query($args); ?>
                     
                    <div class="new-collection">
                      <?php
                      if ( $query->have_posts() ) :
                        while ($query->have_posts()) : $query->the_post(); global $product;?>
                        <div class="product-inner product-content">
                          <div class="product-image">
                           <?php if (has_post_thumbnail( $query->post->ID )) echo get_the_post_thumbnail($query->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; ?>
                           <div class="pro-icons">
                              <div class="d-flex align-items-center justify-content-center">
                                <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                                <?php if(defined('YITH_WCWL')){ ?>
                                <a class="wishlist_view ms-2 d-flex" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','vw-clothing-store'); ?>"><i class="far fa-heart"></i>
                                </a>
                              <?php }?>  
                              </div>
                          </div>
                          </div>
                          <div class="product-details text-md-start text-center">
                            <div class="rating-total-sale d-flex gap-3 py-2">
                              <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                 <span>
                                   <?php echo esc_html (vw_clothing_store_average_rating() . '.0'); ?>
                                 </span>
                              </div>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                <div class="rating-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                    <span class="rating-text"><i class="fas fa-signal me-2"></i><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_total_sale',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                <div class="product-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                    <span class="product-text"><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_rating_text',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                            </div>
                             <h6 class="product-name m-0 py-2">
                               <a href="<?php the_permalink(); ?>">
                                 <?php the_title(); ?>
                               </a>
                             </h6>
                             <div class="products-meta d-flex flex-lg-wrap flex-xl-nowrap align-items-center justify-content-xl-between   justify-content-between">
                               <div class="d-flex align-items-center" >
                                 <span class="d-flex product-regular-price">
                                  <?php echo $product->get_price_html(); ?>
                                 </span>
                               </div>
                             </div>
                           </div>
                        </div>
                      <?php endwhile; endif;
                      wp_reset_postdata(); ?>
                    </div>
                  </div>
              </div>

              <!-- featured collection -->
              <div id="featured" class="tab-pane fade">
                <div class="pro-sec">
                  <?php if( get_theme_mod('vw_clothing_store_featured_collection_heading') != '' ){ ?>
                    <h2 class="heading-text"><?php echo esc_html(get_theme_mod('vw_clothing_store_featured_collection_heading',''));?></h2>
                  <?php }?>
                  <?php if( get_theme_mod('vw_clothing_store_featured_collection_small_title') != '' ){ ?>
                    <p><?php echo esc_html(get_theme_mod('vw_clothing_store_featured_collection_small_title',''));?></p>
                  <?php }?>
                    <?php
                     // featured products
                     $args = array(
                       'post_type'     => 'product',
                       'post_status'   => 'publish',
                       'posts_per_page' => '3',
                       'tax_query' => array(
                                array(
                                  'taxonomy' => 'product_visibility',
                                  'field'    => 'name',
                                  'terms'    => 'featured',
                                  'operator' => 'IN',
                                )
                            )
                         );
                       $query = new WP_Query($args); ?>
                    
                    <div class="feature-product-slider d-flex">
                      <?php
                      if ( $query->have_posts() ) :
                        while ($query->have_posts()) : $query->the_post(); global $product;?>
                        <div class="product-inner product-content">
                          <div class="main-product-section">
                           <?php if (has_post_thumbnail( $query->post->ID )) echo get_the_post_thumbnail($query->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; ?>
                           <div class="pro-icons">
                            <div class="d-flex align-items-center justify-content-center">
                              <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                              <?php if(defined('YITH_WCWL')){ ?>
                              <a class="wishlist_view ms-2 d-flex" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','vw-clothing-store'); ?>"><i class="far fa-heart"></i>
                              </a>
                            <?php }?>  
                            </div>
                          </div>
                          </div>
                          <div class="product-details text-md-start text-center">
                            <div class="rating-total-sale d-flex gap-3 py-2">
                              <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                 <span>
                                   <?php echo esc_html (vw_clothing_store_average_rating() . '.0'); ?>
                                 </span>
                              </div>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                <div class="rating-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_total_sale', true) ) {?>
                                    <span class="rating-text"><i class="fas fa-signal me-2"></i><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_total_sale',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                              <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                <div class="product-text-meta-fields">
                                  <?php if( get_post_meta($post->ID, 'vw_clothing_store_rating_text', true) ) {?>
                                    <span class="product-text"><?php echo esc_html(get_post_meta($post->ID,'vw_clothing_store_rating_text',true)); ?></span>
                                  <?php }?>
                                </div>
                              <?php }?>
                            </div>
                           <h6 class="product-name m-0 py-2">
                             <a href="<?php the_permalink(); ?>">
                               <?php the_title(); ?>
                             </a>
                           </h6>
                           <div class="products-meta d-flex flex-lg-wrap flex-xl-nowrap align-items-center justify-content-xl-between   justify-content-between">
                             <div class="d-flex align-items-center" >
                               <span class="d-flex product-regular-price">
                                <?php echo $product->get_price_html(); ?>
                               </span>
                             </div>
                           </div>
                         </div>
                        </div>
                      <?php endwhile; endif;
                      wp_reset_postdata(); ?>
                    </div>
                </div>
              </div>

            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
<?php }?>

  <div id="content-vw" class="entry-content py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>