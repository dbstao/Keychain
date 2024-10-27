<?php
/**
 * The template part for header
 *
 * @package VW Clothing Store
 * @subpackage vw-clothing-store
 * @since vw-clothing-store 1.0
 */
?>

<div class="logo mt-5 ms-3 p-4">
  <?php if ( has_custom_logo() ) : ?>
    <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php endif; ?>
      <?php $blog_info = get_bloginfo( 'name' ); ?>
        <?php if ( ! empty( $blog_info ) ) : ?>
          <?php if ( is_front_page() && is_home() ) : ?>
            <?php if( get_theme_mod('vw_clothing_store_logo_title_hide_show',true) == 1){ ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php } ?>
          <?php else : ?>
            <?php if( get_theme_mod('vw_clothing_store_logo_title_hide_show',true) == 1){ ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php } ?>
          <?php endif; ?>
        <?php endif; ?>
        <?php
          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) :
        ?>
        <?php if( get_theme_mod('vw_clothing_store_tagline_hide_show',false) == 1){ ?>
          <p class="site-description mb-0">
            <?php echo esc_html($description); ?>
          </p>
        <?php } ?>
  <?php endif; ?>
</div>
<div class="product-side-tab ms-3">
  <h3 class="ms-3"><?php esc_html_e( 'Collections','vw-clothing-store' );?></h3>
  <ul class="product-tab nav nav-tabs my-4">
    <li ><a href="#new-collection" class="active"><?php echo esc_html('New Collection','vw-clothing-store');?></a></li>
    <li><a href="#trending"><?php echo esc_html('Trending Collection','vw-clothing-store');?></a></li>
    <li ><a href="#featured"><?php echo esc_html('Featured Collection','vw-clothing-store');?></a></li>
  </ul>
</div>
<hr>
<div id="header">
  <div class="toggle-nav mobile-menu text-lg-end text-md-center text-end">
    <button role="tab" onclick="vw_clothing_store_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-clothing-store'); ?></span></button>
  </div>
  <div id="mySidenav" class="nav sidenav">
    <h3 class="ms-3"><?php esc_html_e( 'Quick Links','vw-clothing-store' );?></h3>
    <nav id="site-navigation" class="main-navigation my-4" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-clothing-store' ); ?>">
      <?php 
        wp_nav_menu( array( 
          'theme_location' => 'primary',
          'container_class' => 'main-menu clearfix' ,
          'menu_class' => 'main-menu clearfix',
          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
          'fallback_cb' => 'wp_page_menu',
        ) );
      ?>
      <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_clothing_store_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_clothing_store_res_close_menu_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-clothing-store'); ?></span></a>
    </nav>
  </div>
</div>
<div class="account-1">
  <?php if(class_exists('woocommerce')){ ?>
    <?php if ( is_user_logged_in() ) { ?>
      <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('Log Out','vw-clothing-store'); ?><span class="screen-reader-text"><?php esc_html_e( 'Log Out','vw-clothing-store' );?></span></a>
    <?php }
    else { ?>
      <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','vw-clothing-store'); ?>"><?php esc_html_e('Login / Register','vw-clothing-store'); ?><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','vw-clothing-store' );?></span></a>
    <?php } ?>
  <?php }?>
</div>
