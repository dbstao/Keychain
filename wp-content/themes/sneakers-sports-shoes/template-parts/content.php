<?php
/**
 * The default template for displaying content
 * @package Sneakers Sports Shoes
 * @since 1.0.0
 */

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
$image_size = 'large';
global $sneakers_sports_shoes_archive_first_class; 
$archive_classes = [
    'theme-article-post',
    'theme-article-animate',
    $sneakers_sports_shoes_archive_first_class
];?>

<article id="post-<?php the_ID(); ?>" <?php post_class($archive_classes); ?>>
    <div class="theme-article-image">
        <div class="entry-thumbnail">
            <?php
            if (is_search() || is_archive() || is_front_page()) {
                $sneakers_sports_shoes_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                $sneakers_sports_shoes_featured_image = isset($sneakers_sports_shoes_featured_image[0]) ? $sneakers_sports_shoes_featured_image[0] : '';
                $background_style = $sneakers_sports_shoes_featured_image ? 'background-image: url(' . esc_url($sneakers_sports_shoes_featured_image) . ');' : 'background-color: #f0f0f0;';
                ?>
                <div class="post-thumbnail data-bg data-bg-big" style="<?php echo $background_style; ?>">
                    <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                </div>
                <?php
            } else {
                sneakers_sports_shoes_post_thumbnail($image_size);
            }
            if (get_theme_mod('sneakers_sports_shoes_display_archive_post_sticky_post', true) == true) :
                sneakers_sports_shoes_post_format_icon();
            endif;
            ?>
        </div>
    </div>
    <div class="theme-article-details">
        <div class="entry-meta-top">
            <div class="entry-meta">
                <?php sneakers_sports_shoes_entry_footer($cats = true, $tags = false, $edits = false); ?>
            </div>
        </div>
        <header class="entry-header">
            <h2 class="entry-title entry-title-medium">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <span><?php the_title(); ?></span>
                </a>
            </h2>
        </header>
        <div class="entry-content">

            <?php
            if (has_excerpt()) {

                the_excerpt();

            } else {

                echo '<p>';
                echo esc_html(wp_trim_words(get_the_content(), get_theme_mod('sneakers_sports_shoes_excerpt_limit', 10), '...'));
                echo '</p>';
            }

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'sneakers-sports-shoes'),
                'after' => '</div>',
            )); ?>

        </div>
        <a href="<?php the_permalink(); ?>" rel="bookmark" class="theme-btn-link">
          <span> <?php esc_html_e('Read More', 'sneakers-sports-shoes'); ?> </span>
          <span class="topbar-info-icon"><?php sneakers_sports_shoes_the_theme_svg('arrow-right-1'); ?></span>
        </a>
    </div>
</article>