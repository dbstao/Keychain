<?php
/**
 * Custom Functions.
 *
 * @package Sneakers Sports Shoes
 */

if( !function_exists( 'sneakers_sports_shoes_fonts_url' ) ) :

    //Google Fonts URL
    function sneakers_sports_shoes_fonts_url(){

        $font_families = array(
            'Outfit:wght@100..900',
            'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        );

        $fonts_url = add_query_arg( array(
            'family' => implode( '&family=', $font_families ),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2' );

        return esc_url_raw($fonts_url);

    }

endif;

if ( ! function_exists( 'sneakers_sports_shoes_sub_menu_toggle_button' ) ) :

    function sneakers_sports_shoes_sub_menu_toggle_button( $args, $item, $depth ) {

        // Add sub menu toggles to the main menu with toggles
        if ( $args->theme_location == 'sneakers-sports-shoes-primary-menu' && isset( $args->show_toggles ) ) {
            
            // Wrap the menu item link contents in a div, used for positioning
            $args->before = '<div class="submenu-wrapper">';
            $args->after  = '';

            // Add a toggle to items with children
            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $toggle_target_string = '.menu-item.menu-item-' . $item->ID . ' > .sub-menu';

                // Add the sub menu toggle
                $args->after .= '<button type="button" class="theme-aria-button submenu-toggle" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="btn__content" tabindex="-1"><span class="screen-reader-text">' . esc_html__( 'Show sub menu', 'sneakers-sports-shoes' ) . '</span>' . sneakers_sports_shoes_get_theme_svg( 'chevron-down' ) . '</span></button>';

            }

            // Close the wrapper
            $args->after .= '</div><!-- .submenu-wrapper -->';
            // Add sub menu icons to the main menu without toggles (the fallback menu)

        }elseif( $args->theme_location == 'sneakers-sports-shoes-primary-menu' ) {

            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $args->before = '<div class="link-icon-wrapper">';
                $args->after  = sneakers_sports_shoes_get_theme_svg( 'chevron-down' ) . '</div>';

            } else {

                $args->before = '';
                $args->after  = '';

            }

        }

        return $args;

    }

endif;

add_filter( 'nav_menu_item_args', 'sneakers_sports_shoes_sub_menu_toggle_button', 10, 3 );

if ( ! function_exists( 'sneakers_sports_shoes_the_theme_svg' ) ):
    
    function sneakers_sports_shoes_the_theme_svg( $svg_name, $return = false ) {

        if( $return ){

            return sneakers_sports_shoes_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in sneakers_sports_shoes_get_theme_svg();.

        }else{

            echo sneakers_sports_shoes_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in sneakers_sports_shoes_get_theme_svg();.

        }
    }

endif;

if ( ! function_exists( 'sneakers_sports_shoes_get_theme_svg' ) ):

    function sneakers_sports_shoes_get_theme_svg( $svg_name ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            Sneakers_Sports_Shoes_SVG_Icons::get_svg( $svg_name ),
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
                'polyline' => array(
                    'fill'      => true,
                    'points'    => true,
                ),
                'line' => array(
                    'fill'      => true,
                    'x1'      => true,
                    'x2' => true,
                    'y1'    => true,
                    'y2' => true,
                ),
            )
        );
        if ( ! $svg ) {
            return false;
        }
        return $svg;

    }

endif;

if( !function_exists( 'sneakers_sports_shoes_post_category_list' ) ) :

    // Post Category List.
    function sneakers_sports_shoes_post_category_list( $select_cat = true ){

        $post_cat_lists = get_categories(
            array(
                'hide_empty' => '0',
                'exclude' => '1',
            )
        );

        $post_cat_cat_array = array();
        if( $select_cat ){

            $post_cat_cat_array[''] = esc_html__( '-- Select Category --','sneakers-sports-shoes' );

        }

        foreach ( $post_cat_lists as $post_cat_list ) {

            $post_cat_cat_array[$post_cat_list->slug] = $post_cat_list->name;

        }

        return $post_cat_cat_array;
    }

endif;

if( !function_exists('sneakers_sports_shoes_single_post_navigation') ):

    function sneakers_sports_shoes_single_post_navigation(){

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
        $twp_navigation_type = esc_attr( get_post_meta( get_the_ID(), 'twp_disable_ajax_load_next_post', true ) );
        $current_id = '';
        $article_wrap_class = '';
        global $post;
        $current_id = $post->ID;
        if( $twp_navigation_type == '' || $twp_navigation_type == 'global-layout' ){
            $twp_navigation_type = get_theme_mod('twp_navigation_type', $sneakers_sports_shoes_default['twp_navigation_type']);
        }

        if( $twp_navigation_type != 'no-navigation' && 'post' === get_post_type() ){

            if( $twp_navigation_type == 'theme-normal-navigation' ){ ?>

                <div class="navigation-wrapper">
                    <?php
                    // Previous/next post navigation.
                    the_post_navigation(array(
                        'prev_text' => '<span class="arrow" aria-hidden="true">' . sneakers_sports_shoes_the_theme_svg('arrow-left',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Previous post:', 'sneakers-sports-shoes') . '</span><span class="post-title">%title</span>',
                        'next_text' => '<span class="arrow" aria-hidden="true">' . sneakers_sports_shoes_the_theme_svg('arrow-right',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Next post:', 'sneakers-sports-shoes') . '</span><span class="post-title">%title</span>',
                    )); ?>
                </div>
                <?php

            }else{

                $next_post = get_next_post();
                if( isset( $next_post->ID ) ){

                    $next_post_id = $next_post->ID;
                    echo '<div loop-count="1" next-post="' . absint( $next_post_id ) . '" class="twp-single-infinity"></div>';

                }
            }

        }

    }

endif;

add_action( 'sneakers_sports_shoes_navigation_action','sneakers_sports_shoes_single_post_navigation',30 );

if( !function_exists('sneakers_sports_shoes_content_offcanvas') ):

    // Offcanvas Contents
    function sneakers_sports_shoes_content_offcanvas(){ ?>

        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">
                <div class="close-offcanvas-menu">
                    <div class="offcanvas-close">
                        <a href="javascript:void(0)" class="skip-link-menu-start"></a>
                        <button type="button" class="button-offcanvas-close">
                            <span class="offcanvas-close-label">
                                <?php echo esc_html__('Close', 'sneakers-sports-shoes'); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'sneakers-sports-shoes'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('sneakers-sports-shoes-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'sneakers-sports-shoes-primary-menu',
                                        'show_toggles' => true,
                                    )
                                );
                            }else{

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'show_toggles' => true,
                                        'walker' => new Sneakers_Sports_Shoes_Walker_Page(),
                                    )
                                );
                            }
                            ?>
                        </ul>
                    </nav><!-- .primary-menu-wrapper -->
                </div>
                <a href="javascript:void(0)" class="skip-link-menu-end"></a>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'sneakers_sports_shoes_before_footer_content_action','sneakers_sports_shoes_content_offcanvas',30 );

if( !function_exists('sneakers_sports_shoes_footer_content_widget') ):

    function sneakers_sports_shoes_footer_content_widget(){

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
        
            $sneakers_sports_shoes_footer_column_layout = absint(get_theme_mod('sneakers_sports_shoes_footer_column_layout', $sneakers_sports_shoes_default['sneakers_sports_shoes_footer_column_layout']));
            $sneakers_sports_shoes_footer_sidebar_class = 12;
            if($sneakers_sports_shoes_footer_column_layout == 2) {
                $sneakers_sports_shoes_footer_sidebar_class = 6;
            }
            if($sneakers_sports_shoes_footer_column_layout == 3) {
                $sneakers_sports_shoes_footer_sidebar_class = 4;
            }
            ?>
           
            <?php if ( get_theme_mod('sneakers_sports_shoes_display_footer', false) == true ) : ?>
                <div class="footer-widgetarea">
                    <div class="wrapper">
                        <div class="column-row">

                            <?php for ($i=0; $i < $sneakers_sports_shoes_footer_column_layout; $i++) {
                                ?>
                                <div class="column <?php echo 'column-' . absint($sneakers_sports_shoes_footer_sidebar_class); ?> column-sm-12">
                                    <?php dynamic_sidebar('sneakers-sports-shoes-footer-widget-' . $i); ?>
                                </div>
                           <?php } ?>

                        </div>
                    </div>
                </div>
           <?php endif; ?> 

        <?php

    }

endif;

add_action( 'sneakers_sports_shoes_footer_content_action','sneakers_sports_shoes_footer_content_widget',10 );

if( !function_exists('sneakers_sports_shoes_footer_content_info') ):

    /**
     * Footer Copyright Area
    **/
    function sneakers_sports_shoes_footer_content_info(){

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options(); ?>
        <div class="site-info">
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-9">
                        <div class="footer-credits">
                            <div class="footer-copyright">
                                <?php
                                $sneakers_sports_shoes_footer_copyright_text = wp_kses_post( get_theme_mod( 'sneakers_sports_shoes_footer_copyright_text', $sneakers_sports_shoes_default['sneakers_sports_shoes_footer_copyright_text'] ) );
                                    echo esc_html( $sneakers_sports_shoes_footer_copyright_text );
                                    echo '<br>';
                                    echo esc_html__('Theme: ', 'sneakers-sports-shoes') . '<a href="' . esc_url('https://www.omegathemes.com/products/free-shoes-wordpress-theme') . '" title="' . esc_attr__('Sneakers Sports Shoes ', 'sneakers-sports-shoes') . '" target="_blank"><span>' . esc_html__('Sneakers Sports Shoes ', 'sneakers-sports-shoes') . '</span></a>' . esc_html__('By ', 'sneakers-sports-shoes') . '  <span>' . esc_html__('OMEGA ', 'sneakers-sports-shoes') . '</span>';
                                    echo esc_html__('Powered by ', 'sneakers-sports-shoes') . '<a href="' . esc_url('https://wordpress.org') . '" title="' . esc_attr__('WordPress', 'sneakers-sports-shoes') . '" target="_blank"><span>' . esc_html__('WordPress.', 'sneakers-sports-shoes') . '</span></a>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3 align-text-right">
                        <a class="to-the-top" href="#site-header">
                            <span class="to-the-top-long">
                                    <?php
                                    printf( 
                                        wp_kses( 
                                            /* translators: %s is the arrow icon markup */
                                            __( 'To the Top %s', 'sneakers-sports-shoes' ), 
                                            array( 'span' => array( 'class' => array(), 'aria-hidden' => array() ) ) 
                                        ), 
                                        '<span class="arrow" aria-hidden="true">&uarr;</span>' 
                                    );
                                    ?>
                                </span>
                                <span class="to-the-top-short">
                                    <?php
                                    printf( 
                                        wp_kses( 
                                            /* translators: %s is the arrow icon markup */
                                            __( 'Up %s', 'sneakers-sports-shoes' ), 
                                            array( 'span' => array( 'class' => array(), 'aria-hidden' => array() ) ) 
                                        ), 
                                        '<span class="arrow" aria-hidden="true">&uarr;</span>' 
                                    );
                                    ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'sneakers_sports_shoes_footer_content_action','sneakers_sports_shoes_footer_content_info',20 );


if( !function_exists( 'sneakers_sports_shoes_main_slider' ) ) :

    function sneakers_sports_shoes_main_slider(){

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

        $sneakers_sports_shoes_slider_section_title = esc_html( get_theme_mod( 'sneakers_sports_shoes_slider_section_title',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_slider_section_title'] ) );

        $sneakers_sports_shoes_header_banner = get_theme_mod( 'sneakers_sports_shoes_header_banner', $sneakers_sports_shoes_default['sneakers_sports_shoes_header_banner'] );
        $sneakers_sports_shoes_header_banner_cat = get_theme_mod( 'sneakers_sports_shoes_header_banner_cat' );

        if( $sneakers_sports_shoes_header_banner ){

            $rtl = '';
            if( is_rtl() ){
                $rtl = 'dir="rtl"';
            }

            $sneakers_sports_shoes_banner_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $sneakers_sports_shoes_header_banner_cat ) ) );

            if( $sneakers_sports_shoes_banner_query->have_posts() ): ?>

                <div class="theme-custom-block theme-banner-block">
                    <div class="swiper-container theme-main-carousel swiper-container" <?php echo $rtl; ?>>
                        <div class="swiper-wrapper">
                            <?php
                            while( $sneakers_sports_shoes_banner_query->have_posts() ):
                            $sneakers_sports_shoes_banner_query->the_post();
                            $sneakers_sports_shoes_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $sneakers_sports_shoes_featured_image = isset( $sneakers_sports_shoes_featured_image[0] ) ? $sneakers_sports_shoes_featured_image[0] : ''; ?>
                                <div class="swiper-slide main-carousel-item">
                                    <div class="wrapper">                                
                                        <div class="theme-article-post">
                                            <div class="main-carousel-caption">
                                                <div class="post-content">
                                                    <header class="entry-header">
                                                        <?php if( $sneakers_sports_shoes_slider_section_title ){ ?>
                                                            <h3><?php echo esc_html( $sneakers_sports_shoes_slider_section_title ); ?></h3>
                                                        <?php } ?>
                                                        <h2 class="entry-title entry-title-big">
                                                            <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                                        </h2>
                                                    </header>
                                                    <div class="entry-content">
                                                        <?php
                                                        if (has_excerpt()) {

                                                            the_excerpt();

                                                        } else {

                                                            echo esc_html(wp_trim_words(get_the_content(), 25, '...'));

                                                        } ?>
                                                    </div>

                                                    <a href="<?php the_permalink(); ?>" class="btn-fancy btn-fancy-primary" tabindex="0">
                                                        <?php echo esc_html('Shop Now', 'sneakers-sports-shoes'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="entry-thumbnail">
                                                <div class="data-bg data-bg-large" data-background="<?php if($sneakers_sports_shoes_featured_image)  { echo esc_url($sneakers_sports_shoes_featured_image); } else { echo esc_url(get_template_directory_uri() . '/assets/images/slider1.png'); } ?>">
                                                    <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                                </div>
                                                <?php sneakers_sports_shoes_post_format_icon(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            <?php
            wp_reset_postdata();
            endif;
        }
    }

endif;


if( !function_exists( 'sneakers_sports_shoes_product_section' ) ) :

    function sneakers_sports_shoes_product_section(){ 

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

        $sneakers_sports_shoes_product_image_box_1 = esc_url( get_theme_mod( 'sneakers_sports_shoes_product_image_box_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_image_box_1'] ) );

        $sneakers_sports_shoes_product_section_short_title_1 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_short_title_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_1'] ) );

        $sneakers_sports_shoes_product_section_heading_1 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_heading_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_1'] ) );

        $sneakers_sports_shoes_product_section_price_1 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_price_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_1'] ) );

        $sneakers_sports_shoes_product_button_text_1 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_text_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_1'] ) );

        $sneakers_sports_shoes_product_button_url_1 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_url_1',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_1'] ) );

        $sneakers_sports_shoes_product_image_box_2 = esc_url( get_theme_mod( 'sneakers_sports_shoes_product_image_box_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_image_box_2'] ) );

        $sneakers_sports_shoes_product_section_short_title_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_short_title_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_2'] ) );

        $sneakers_sports_shoes_product_section_heading_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_heading_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_2'] ) );

        $sneakers_sports_shoes_product_section_price_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_price_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_2'] ) );

        $sneakers_sports_shoes_product_button_text_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_text_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_2'] ) );

        $sneakers_sports_shoes_product_button_url_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_url_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_2'] ) );

        $sneakers_sports_shoes_product_section_offter_text_2 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_offter_text_2',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_offter_text_2'] ) );

        $sneakers_sports_shoes_product_image_box_3 = esc_url( get_theme_mod( 'sneakers_sports_shoes_product_image_box_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_image_box_3'] ) );

        $sneakers_sports_shoes_product_section_short_title_3 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_short_title_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_3'] ) );

        $sneakers_sports_shoes_product_section_heading_3 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_heading_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_3'] ) );

        $sneakers_sports_shoes_product_section_price_3 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_section_price_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_3'] ) );

        $sneakers_sports_shoes_product_button_text_3 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_text_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_3'] ) );

        $sneakers_sports_shoes_product_button_url_3 = esc_html( get_theme_mod( 'sneakers_sports_shoes_product_button_url_3',
        $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_3'] ) );

        $sneakers_sports_shoes_categorie_section = get_theme_mod( 'sneakers_sports_shoes_categorie_section', 
        $sneakers_sports_shoes_default['sneakers_sports_shoes_categorie_section'] );
        
        if( $sneakers_sports_shoes_categorie_section ){ ?>

            <div class="theme-custom-block sale-main-box">
                <div class="sale_box_1">
                    <?php if( $sneakers_sports_shoes_product_image_box_1 ){ ?>
                        <div class="sale-image">
                            <img src="<?php echo esc_url( $sneakers_sports_shoes_product_image_box_1 ); ?>" alt="Product Image">
                        </div>
                    <?php } ?>
                    <div class="sale-content-box">
                        <h4 class="sale-short-title">
                            <?php if( $sneakers_sports_shoes_product_section_short_title_1 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_short_title_1) ?>
                            <?php } ?>
                        </h4>
                        <h3 class="heading">
                            <?php if( $sneakers_sports_shoes_product_section_heading_1 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_heading_1) ?>
                            <?php } ?>
                        </h3>
                        <p class="list-content1">
                            <?php if( $sneakers_sports_shoes_product_section_price_1 ){ ?>
                                <span><?php echo esc_html('Start From','sneakers-sports-shoes')?></span>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_price_1) ?>
                            <?php } ?>
                        </p>
                        <div class="product-btn">
                            <?php if( $sneakers_sports_shoes_product_button_text_1 || $sneakers_sports_shoes_product_button_url_1 ){ ?>
                                <p><a href="<?php echo esc_url( $sneakers_sports_shoes_product_button_url_1 ); ?>"><?php echo esc_html( $sneakers_sports_shoes_product_button_text_1 ); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="sale_box_2">
                    <?php if( $sneakers_sports_shoes_product_image_box_2 ){ ?>
                        <div class="sale-image">
                            <img src="<?php echo esc_url( $sneakers_sports_shoes_product_image_box_2 ); ?>" alt="Product Image">
                        </div>
                    <?php } ?>
                    <div class="sale-content-box">
                        <h4 class="sale-short-title">
                            <?php if( $sneakers_sports_shoes_product_section_short_title_2 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_short_title_2) ?>
                            <?php } ?>
                        </h4>
                        <h3 class="heading">
                            <?php if( $sneakers_sports_shoes_product_section_heading_2 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_heading_2) ?>
                            <?php } ?>
                        </h3>
                        <p class="list-content1">
                            <?php if( $sneakers_sports_shoes_product_section_price_2 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_price_2) ?>
                                <span><?php echo esc_html('Start From','sneakers-sports-shoes')?></span>
                            <?php } ?>
                        </p>
                        <div class="product-btn">
                            <?php if( $sneakers_sports_shoes_product_button_text_2 || $sneakers_sports_shoes_product_button_url_2 ){ ?>
                                <p><a href="<?php echo esc_url( $sneakers_sports_shoes_product_button_url_2 ); ?>"><?php echo esc_html( $sneakers_sports_shoes_product_button_text_2 ); ?></a></p>
                            <?php } ?>
                        </div>
                        <?php if( $sneakers_sports_shoes_product_section_offter_text_2 ){ ?>
                            <p class="offer-content-default"><?php echo esc_html('Upto Off','sneakers-sports-shoes')?></p>
                            <p class="offer-content">
                                <?php echo esc_html($sneakers_sports_shoes_product_section_offter_text_2) ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
                <div class="sale_box_3">
                    <?php if( $sneakers_sports_shoes_product_image_box_3 ){ ?>
                        <div class="sale-image">
                            <img src="<?php echo esc_url( $sneakers_sports_shoes_product_image_box_3 ); ?>" alt="Product Image">
                        </div>
                    <?php } ?>
                    <div class="sale-content-box">
                        <h4 class="sale-short-title">
                            <?php if( $sneakers_sports_shoes_product_section_short_title_3 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_short_title_3) ?>
                            <?php } ?>
                        </h4>
                        <h3 class="heading">
                            <?php if( $sneakers_sports_shoes_product_section_heading_3 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_heading_3) ?>
                            <?php } ?>
                        </h3>
                        <p class="list-content1">
                            <?php if( $sneakers_sports_shoes_product_section_price_3 ){ ?>
                                <?php echo esc_html($sneakers_sports_shoes_product_section_price_3) ?>
                                <span><?php echo esc_html('Start From','sneakers-sports-shoes')?></span>
                            <?php } ?>
                        </p>
                        <div class="product-btn">
                            <?php if( $sneakers_sports_shoes_product_button_text_3 || $sneakers_sports_shoes_product_button_url_3 ){ ?>
                                <p><a href="<?php echo esc_url( $sneakers_sports_shoes_product_button_url_3 ); ?>"><?php echo esc_html( $sneakers_sports_shoes_product_button_text_3 ); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

    <?php }

        }

endif;

if (!function_exists('sneakers_sports_shoes_post_format_icon')):

    // Post Format Icon.
    function sneakers_sports_shoes_post_format_icon() {

        $format = get_post_format(get_the_ID()) ?: 'standard';
        $icon = '';
        $title = '';
        if( $format == 'video' ){
            $icon = sneakers_sports_shoes_get_theme_svg( 'video' );
            $title = esc_html__('Video','sneakers-sports-shoes');
        }elseif( $format == 'audio' ){
            $icon = sneakers_sports_shoes_get_theme_svg( 'audio' );
            $title = esc_html__('Audio','sneakers-sports-shoes');
        }elseif( $format == 'gallery' ){
            $icon = sneakers_sports_shoes_get_theme_svg( 'gallery' );
            $title = esc_html__('Gallery','sneakers-sports-shoes');
        }elseif( $format == 'quote' ){
            $icon = sneakers_sports_shoes_get_theme_svg( 'quote' );
            $title = esc_html__('Quote','sneakers-sports-shoes');
        }elseif( $format == 'image' ){
            $icon = sneakers_sports_shoes_get_theme_svg( 'image' );
            $title = esc_html__('Image','sneakers-sports-shoes');
        }
        
        if (!empty($icon)) { ?>
            <div class="theme-post-format">
                <span class="post-format-icom"><?php echo sneakers_sports_shoes_svg_escape($icon); ?></span>
                <?php if( $title ){ echo '<span class="post-format-label">'.esc_html( $title ).'</span>'; } ?>
            </div>
        <?php }
    }

endif;

if ( ! function_exists( 'sneakers_sports_shoes_svg_escape' ) ):

    /**
     * Get information about the SVG icon.
     *
     * @param string $svg_name The name of the icon.
     * @param string $group The group the icon belongs to.
     * @param string $color Color code.
     */
    function sneakers_sports_shoes_svg_escape( $input ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            $input,
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
            )
        );

        if ( ! $svg ) {
            return false;
        }

        return $svg;

    }

endif;

if( !function_exists( 'sneakers_sports_shoes_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function sneakers_sports_shoes_sanitize_sidebar_option_meta( $input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'sneakers_sports_shoes_sanitize_pagination_meta' ) ) :

    // Sidebar Option Sanitize.
    function sneakers_sports_shoes_sanitize_pagination_meta( $input ){

        $sneakers_sports_shoes_metabox_options = array( 'Center','Right','Left');
        if( in_array( $input,$sneakers_sports_shoes_metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'sneakers_sports_shoes_sanitize_menu_transform' ) ) :

    // Sidebar Option Sanitize.
    function sneakers_sports_shoes_sanitize_menu_transform( $input ){

        $sneakers_sports_shoes_metabox_options = array( 'capitalize','uppercase','lowercase');
        if( in_array( $input,$sneakers_sports_shoes_metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'sneakers_sports_shoes_sanitize_page_content_alignment' ) ) :

    // Sidebar Option Sanitize.
    function sneakers_sports_shoes_sanitize_page_content_alignment( $input ){

        $sneakers_sports_shoes_metabox_options = array( 'left','center','right');
        if( in_array( $input,$sneakers_sports_shoes_metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'sneakers_sports_shoes_sanitize_footer_widget_title_alignment' ) ) :

    // Footer Option Sanitize.
    function sneakers_sports_shoes_sanitize_footer_widget_title_alignment( $input ){

        $sneakers_sports_shoes_metabox_options = array( 'left','center','right');
        if( in_array( $input,$sneakers_sports_shoes_metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;