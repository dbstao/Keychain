<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_photography
 */
$aster_photography_menu_text_transform = get_theme_mod( 'menu_text_transform', 'capitalize' );
$aster_photography_menu_text_transform_css = ( $aster_photography_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $aster_photography_menu_text_transform . ';' : '';
$aster_photography_header_button_label = get_theme_mod( 'aster_photography_header_button_label_', '' );
$aster_photography_header_button_link  = get_theme_mod( 'aster_photography_header_button_link_', '' );
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

<body <?php body_class(get_theme_mod('aster_photography_website_layout', false) ? 'site-boxed--layout' : ''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aster-photography' ); ?></a>
	 <?php
	if ( get_theme_mod( 'aster_photography_enable_preloader', false ) === true ) { ?>
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
        <div class="bottom-header-outer-wrapper <?php echo esc_attr( get_theme_mod( 'aster_photography_enable_sticky_header', false ) ? 'sticky-header' : '' ); ?>">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper hello ">
                        <div class="bottom-header-middle-part">
                            <div class="site-branding">
                                <?php if ( has_custom_logo() ) { ?>
                                <div class="site-logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                                <?php } ?>
                                <div class="site-identity">
                                        <?php
                                            if ( get_theme_mod( 'aster_photography_enable_site_title_setting', true ) ) {
                                                // Get the site title
                                                $site_title = get_bloginfo( 'name' );
                                                
                                                // Explode the title into words and extract the last one
                                                $title_parts = explode(' ', $site_title);
                                                $last_word = array_pop($title_parts);
                                                $title_without_last_word = implode(' ', $title_parts);

                                                if ( is_front_page() && is_home() ) :
                                                    ?>
                                                    <h1 class="site-title">
                                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                            <?php echo $title_without_last_word . ' <span class="yellow-text">' . $last_word . '</span>'; ?>
                                                        </a>
                                                    </h1>
                                                    <?php
                                                else :
                                                    ?>
                                                    <p class="site-title">
                                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                            <?php echo $title_without_last_word . ' <span class="yellow-text">' . $last_word . '</span>'; ?>
                                                        </a>
                                                    </p>
                                                    <?php
                                                endif;
                                            }

                                        if ( get_theme_mod( 'aster_photography_enable_tagline_setting', false ) ) :
                                            $aster_photography_description = get_bloginfo( 'description', 'display' );

                                            if ( $aster_photography_description || is_customize_preview() ) :
                                                ?>
                                            <p class="site-description">
                                                <?php
                                                echo esc_html( $aster_photography_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                                            </p>
                                                <?php
                                            endif;
                                                ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-left-part">
                            <div class="navigation-part">
                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="main-navigation-links" style="<?php echo esc_attr( $aster_photography_menu_text_transform_css ); ?>">
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
                        <div class="bottom-header-right-part">
                            <?php
                                $aster_photography_enable_header_search_section = get_theme_mod( 'aster_photography_enable_header_search_section', true );
                                if ( $aster_photography_enable_header_search_section ) : ?>
                                <span class="search-main">
                                  <span class="btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                  <div class="form">
                                    <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <label>
                                            <span class="screen-reader-text"><?php echo esc_html( 'Search for:', 'label', 'aster-photography' ); ?></span>
                                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'aster-photography' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                        </label>
                                        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_html( 'Search', 'submit button', 'aster-photography' ); ?></span></button>
                                    </form>
                                  </div>
                                </span>
                            <?php endif; ?>
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','aster-photography' ); ?>"><?php echo esc_html('CART','aster-photography') ?><span class="cart-item-box">(<?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?>)</span></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
if ( ! is_front_page() || is_home() ) {
	if ( is_front_page() ) {
		require get_template_directory() . '/sections/sections.php';
		aster_photography_homepage_sections();

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
