<?php
/**
 * The main template file
 * @package Sneakers Sports Shoes
 * @since 1.0.0
 */

get_header();
$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
$sneakers_sports_shoes_global_sidebar_layout = esc_html( get_theme_mod( 'sneakers_sports_shoes_global_sidebar_layout',$sneakers_sports_shoes_default['sneakers_sports_shoes_global_sidebar_layout'] ) );
$sneakers_sports_shoes_sidebar_column_class = 'column-order-2';
if ($sneakers_sports_shoes_global_sidebar_layout == 'right-sidebar') {
    $sneakers_sports_shoes_sidebar_column_class = 'column-order-1';
}

global $sneakers_sports_shoes_archive_first_class; ?>
    <div class="archive-main-block">
        <div class="wrapper">
            <div class="column-row">

                <div id="primary" class="content-area <?php echo esc_attr($sneakers_sports_shoes_sidebar_column_class) ; ?>">
                    <main id="site-content" role="main">

                        <?php

                        if( !is_front_page() ) {
                            sneakers_sports_shoes_breadcrumb();
                        }

                        if( have_posts() ): ?>

                            <div class="article-wraper article-wraper-archive">
                                <?php
                                while( have_posts() ):
                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile; ?>
                            </div>

                            <?php
                            if( is_search() ){
                                the_posts_pagination();
                            }else{
                                do_action('sneakers_sports_shoes_archive_pagination');
                            }

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif; ?>
                    </main>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
<?php
get_footer();
