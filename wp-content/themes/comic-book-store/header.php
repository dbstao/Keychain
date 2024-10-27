<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Comic Book Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('comic_book_store_preloader', true) != "") { ?>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'comic-book-store' ); ?></a>

<div id="pageholder" <?php if( get_theme_mod( 'comic_book_store_box_layout', false) != "" ) { echo 'class="boxlayout"'; } ?>>

<div class="mainhead">
  <div class="container">
    <div class="header">
      <div class="row m-0">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 align-self-center ps-0">
          <div class="logo text-center text-md-start">
            <?php comic_book_store_the_custom_logo(); ?>
            <div class="site-branding-text">
              <?php if (get_theme_mod('comic_book_store_title_enable', false)) { ?>
                <?php if (is_front_page() && is_home()) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
              <?php } ?>
              <?php $comic_book_store_description = get_bloginfo('description', 'display');
              if ($comic_book_store_description || is_customize_preview()) : ?>
                <?php if (get_theme_mod('comic_book_store_tagline_enable', false)) { ?>
                  <span class="site-description"><?php echo esc_html($comic_book_store_description); ?></span>
                <?php } ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-5 col-sm-4 col-4 align-self-center">
          <div class="toggle-nav text-center">
            <?php if (has_nav_menu('primary')) { ?>
              <button role="tab"><?php esc_html_e('Menu', 'comic-book-store'); ?></button>
            <?php } ?>
          </div>
          <div id="mySidenav" class="nav sidenav">
            <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Top Menu', 'comic-book-store'); ?>">
              <ul class="mobile_nav">
                <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu',
                  'items_wrap' => '%3$s',
                  'fallback_cb' => 'wp_page_menu',
                )); ?>
              </ul>
              <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE', 'comic-book-store'); ?></a>
            </nav>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-8 col-8 align-self-center d-flex justify-content-end p-0 woo-btn">
          <?php if (class_exists('woocommerce')) { ?>
            <span class="product-account">
              <a class="log-btn" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>" title="<?php esc_attr_e('Login', 'comic-book-store'); ?>"><?php esc_html_e('Login', 'comic-book-store'); ?></a>
            </span>
            <span class="product-account">
              <a class="sign-btn ms-3" href="<?php echo esc_url(wp_registration_url()); ?>" title="<?php esc_attr_e('Sign Up', 'comic-book-store'); ?>"><?php esc_html_e('Signup', 'comic-book-store'); ?></a>
            </span>
            <span class="product-cart text-center position-relative ps-4">
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','comic-book-store' ); ?>"><i class="fas fa-shopping-bag"></i></a>
              <?php 
                $comic_book_store_cart_count = WC()->cart->get_cart_contents_count(); 
                if($comic_book_store_cart_count > 0): ?>
                <span class="cart-count"><?php echo $comic_book_store_cart_count; ?></span>
              <?php endif; ?>
            </span>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>