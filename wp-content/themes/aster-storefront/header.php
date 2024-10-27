<?php

/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_storefront
 */
$aster_storefront_menu_text_transform = get_theme_mod( 'menu_text_transform', 'capitalize' );
$aster_storefront_menu_text_transform_css = ( $aster_storefront_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $aster_storefront_menu_text_transform . ';' : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="data:,">
	<?php wp_head(); ?>
</head>

<body <?php body_class(get_theme_mod('aster_storefront_website_layout', false) ? 'site-boxed--layout' : ''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aster-storefront' ); ?></a>
	 <?php
	if ( get_theme_mod( 'aster_storefront_enable_preloader', false ) === true ) { ?>
		<div id="loader">
			<div class="loader-container">
				<div id="preloader">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/resource/loader.gif' ); ?>">
				</div>
			</div>
		</div>
	<?php } ?>
<header id="masthead" class="site-header">
        <div class="header-main-wrapper">
        <?php if ( get_theme_mod( 'aster_storefront_enable_topbar', true ) === true ) {
            $aster_storefront_discount_topbar_text = get_theme_mod( 'aster_storefront_discount_topbar_text');
            ?>
            <div class="top-header-part">
                <div class="asterthemes-wrapper">
                    <?php if ( ! empty( $aster_storefront_discount_topbar_text ) ) { ?>
                        <div class="header-contact-inner">
                            <p><?php echo esc_html( $aster_storefront_discount_topbar_text ); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="bottom-header-outer-wrapper">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper">
                        <div class="bottom-header-left-part">
                            <?php if(class_exists('woocommerce')){ ?>
                                <form method="get" class="woocommerce-product-search woo-pro-search" action="<?php echo esc_url(home_url('/')); ?>">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'aster-storefront'); ?></label>
                                    <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_attr('Search Here','aster-storefront'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
                                    <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                    <input type="hidden" name="post_type" value="product"/>
                                </form>
                            <?php }?>
                        </div>
                        <div class="bottom-header-middle-part">
                        <div class="site-branding">
                                <?php
                                // Check if the 'Enable Site Logo' setting is true.
                                if ( get_theme_mod( 'aster_storefront_enable_site_logo', true ) ) {
                                    if ( has_custom_logo() ) { ?>
                                        <div class="site-logo">
                                            <?php the_custom_logo(); ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="site-logo">
                                            <!-- Fallback logo if no custom logo is set -->
                                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/resource/img/Logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                                <div class="site-identity">
                                    <?php
                                    $aster_storefront_site_title_size = get_theme_mod('aster_storefront_site_title_size', 30);

                                    if (get_theme_mod('aster_storefront_enable_site_title_setting', false)) {
                                        if (is_front_page() && is_home()) : ?>
                                            <h1 class="site-title" style="font-size: <?php echo esc_attr($aster_storefront_site_title_size); ?>px;">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                            </h1>
                                        <?php else : ?>
                                            <p class="site-title" style="font-size: <?php echo esc_attr($aster_storefront_site_title_size); ?>px;">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                            </p>
                                        <?php endif;
                                    }

                                    if (get_theme_mod('aster_storefront_enable_tagline_setting', false)) :
                                        $aster_storefront_description = get_bloginfo('description', 'display');
                                        if ($aster_storefront_description || is_customize_preview()) : ?>
                                            <p class="site-description"><?php echo esc_html($aster_storefront_description); ?></p>
                                        <?php endif;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-right-part">
                            <?php if(class_exists('woocommerce')){ ?>
                                <div class="user-account">
                                    <?php if ( is_user_logged_in() ) { ?>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','aster-storefront'); ?>"><i class="fas fa-sign-out-alt"></i></a>
                                    <?php } 
                                    else { ?>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','aster-storefront'); ?>"><i class="fas fa-user"></i></a>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','aster-storefront' ); ?>"><i class="fas fa-shopping-basket mr-2"></i> <span class="cart-item-box">( <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> )</span></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-menus">
            <div class="asterthemes-wrapper">
                <div class="navigation-part hello <?php echo esc_attr( get_theme_mod( 'aster_storefront_enable_sticky_header', false ) ? 'sticky-header' : '' ); ?>">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="main-navigation-links" style="<?php echo esc_attr( $aster_storefront_menu_text_transform_css ); ?>">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                    )
                                );
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
    <?php
        if ( ! is_front_page() || is_home() ) {
        if ( is_front_page() ) {
            require get_template_directory() . '/sections/sections.php';
            aster_storefront_homepage_sections();
        }
	?>
    <?php
        if (!is_front_page() || is_home()) {
            get_template_part('page-header');
        }
    ?>
	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>
