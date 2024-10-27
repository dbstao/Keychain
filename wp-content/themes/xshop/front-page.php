<?php

/**
 * Template Name: Front Page
 */
get_header();


$xshop_woo_container = get_theme_mod('xshop_woo_container', 'container');
$xshop_woo_layout = get_theme_mod('xshop_woo_layout', 'rightside');


if (is_active_sidebar('shop-sidebar') && $xshop_woo_layout != 'fullwidth' && !is_single()) {
    $xshop_column_set = 'col-lg-9';
} else {
    $xshop_column_set = 'col-lg-12';
}

?>

<div class="<?php echo esc_attr($xshop_woo_container); ?> xshop-front-page mt-3 mb-5 pt-5 pb-3">
    <div class="row">

        <?php
        if (xshop_is_woocommerce_activated() && xshop_has_woocommerce_products()) :
        ?>
            <?php if (is_active_sidebar('shop-sidebar') && $xshop_woo_layout == 'leftside') : ?>
                <div class="col-lg-3 front-shop-widget">
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($xshop_column_set); ?>">
                <main id="primary" class="site-main">
                    <?php get_template_part('template-parts/content', 'fshop'); ?>
                </main>
            </div>
            <?php if (is_active_sidebar('shop-sidebar') && $xshop_woo_layout == 'rightside') : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <?php if (is_active_sidebar('sidebar-1') && $xshop_woo_layout == 'leftside') : ?>
                <div class="col-lg-3">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($xshop_column_set); ?>">
                <main id="primary" class="site-main">

                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', get_post_type());

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>

                </main><!-- #main -->
            </div>
            <?php if (is_active_sidebar('sidebar-1') && $xshop_woo_layout == 'rightside') : ?>
                <div class="col-lg-3">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>
    </div> <!-- end row -->
</div> <!-- end container -->

<?php
get_footer();
