<?php
/**
 * The template part for header
 *
 * @package VW Hosting Services 
 * @subpackage vw-clothing-store
 * @since vw-clothing-store 1.0
 */
?>

<div class="middle-header">
		<div class="row">
			<div class="col-lg-8 col-md-9 col-12 align-self-center py-3 py-lg-0 py-md-0 text-lg-start text-md-center text-center search-bar">
        <?php if(class_exists('woocommerce')){ ?>
          <?php get_product_search_form(); ?>
        <?php } ?>
			</div>
			<div class="col-lg-4 col-md-3 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-center gap-2 align-self-center top-bar-sec">
        <div class="account">
          <?php if(class_exists('woocommerce')){ ?>
            <span class="account">
                <?php if ( is_user_logged_in() ) { ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','vw-clothing-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_myaccount_icon','fas fa-user')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'My Account','vw-clothing-store' );?></span></a>
                <?php }
                else { ?>
                  <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','vw-clothing-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_myaccount_icon','fas fa-user')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','vw-clothing-store' );?></span></a>
                <?php } ?>
            </span>
          <?php }?>
        </div>
          <span class="wishlist">
            <?php if(defined('YITH_WCWL')){ ?>
              <a class="wishlist_view position-relative" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_heart_icon','fas fa-heart')); ?>"></i>
              <?php $wishlist_count = YITH_WCWL()->count_products(); ?>
              <span class="wishlist-counter"><?php echo $wishlist_count; ?></span></a>
            <?php }?>
          </span>
          <?php if(class_exists('woocommerce')){ ?>
            <span class="cart_no">
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','vw-clothing-store' ); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_cart_icon','fas fa-cart-plus')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Cart','vw-clothing-store' );?></span></a>
            </span>
          <?php } ?>
      </div>
		</div>
	</div>

