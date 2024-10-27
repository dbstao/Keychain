<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Animal Caretaker
 */

get_header();

$animal_caretaker_sidebar_position = get_theme_mod('animal_caretaker_single_page_sidebar_option', 'right');
?>

<section id="service-page" class="<?php echo $animal_caretaker_sidebar_position == 'none' ? 'no-sidebar' : 'has-sidebar'; ?>">
    <div class="featured-img">
        <div class="post-thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="img-responsive center-block"><?php the_post_thumbnail(); ?></a>
            <?php endif; ?>
        </div>
        <div class="single-meta-box">
            <h2 class="my-3"><?php the_title(); ?></h2>
            <?php if ( get_theme_mod('animal_caretaker_breadcrumb_setting',true) ) : ?>
              <div class="bread_crumb text-center">
                <?php animal_caretaker_breadcrumb();  ?>
              </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if ($animal_caretaker_sidebar_position == 'left') : ?>
                <div class="col-lg-4 col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo $animal_caretaker_sidebar_position == 'none' ? 'col-lg-12' : 'col-lg-8'; ?> col-md-8">
                <div class="site-content">
                    <?php
                    if (have_posts()) :
                        the_post();
                        the_content();
                    endif;
                    if ($post->comment_status == 'open') {
                        comments_template('', true);
                    }
                    wp_link_pages(array(
                        'before' => '<div class="section-pagination">',
                        'after' => '</div>',
                        'link_before' => '<span class="inner-pagination">',
                        'link_after' => '</span>',
                    ));
                    ?>
                </div>
            </div>
            <?php if ($animal_caretaker_sidebar_position == 'right') : ?>
                <div class="col-lg-4 col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>