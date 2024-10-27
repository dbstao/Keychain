<?php
/**
 * The template for displaying single posts and pages.
 * @package Sneakers Sports Shoes
 * @since 1.0.0
 */
get_header();

    $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
    $sneakers_sports_shoes_global_sidebar_layout = esc_html( get_theme_mod( 'sneakers_sports_shoes_global_sidebar_layout',$sneakers_sports_shoes_default['sneakers_sports_shoes_global_sidebar_layout'] ) );
    $sneakers_sports_shoes_post_sidebar = esc_html( get_post_meta( $post->ID, 'sneakers_sports_shoes_post_sidebar_option', true ) );
    $sneakers_sports_shoes_sidebar_column_class = 'column-order-1';

    if (!empty($sneakers_sports_shoes_post_sidebar)) {
        $sneakers_sports_shoes_global_sidebar_layout = $sneakers_sports_shoes_post_sidebar;
    }

    if ($sneakers_sports_shoes_global_sidebar_layout == 'left-sidebar') {
        $sneakers_sports_shoes_sidebar_column_class = 'column-order-2';
    } ?>
    <div id="single-page" class="singular-main-block">
        <div class="wrapper">
            <div class="column-row">
                <div id="primary" class="content-area <?php echo esc_attr($sneakers_sports_shoes_sidebar_column_class); ?>">
                    <main id="site-content" class="" role="main">
                        <?php
                            sneakers_sports_shoes_breadcrumb();
                        if( have_posts() ): ?>
                            <div class="article-wraper">

                                <?php while (have_posts()) :
                                    the_post();

                                    get_template_part('template-parts/content', 'single');

                                    if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && !post_password_required() ) { ?>

                                        <div class="comments-wrapper">
                                            <?php comments_template(); ?>
                                        </div>

                                    <?php
                                    }

                                endwhile; ?>
                            </div>
                        <?php
                        else :
                            get_template_part('template-parts/content', 'none');

                        endif;
                        /**
                         * Navigation
                         * 
                         * @hooked sneakers_sports_shoes_related_posts - 20  
                         * @hooked sneakers_sports_shoes_single_post_navigation - 30  
                        */

                        do_action('sneakers_sports_shoes_navigation_action'); ?>
                    </main>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
<?php
get_footer();
