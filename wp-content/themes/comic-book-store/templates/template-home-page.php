<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Comic Book Store
 */

get_header(); ?>

<div id="content" >
    
    <?php
    $comic_book_store_banner = get_theme_mod('comic_book_store_banner', true);
    $comic_book_store_banner_pageboxes = get_theme_mod('comic_book_store_banner_pageboxes', false);

    if ($comic_book_store_banner && $comic_book_store_banner_pageboxes) { ?>
        <div id="banner-cat" class="pb-md-5">
            <div class="container">
                    <?php
                    $comic_book_store_querymed = new WP_Query(array(
                        'page_id' => esc_attr($comic_book_store_banner_pageboxes)
                    ));

                    while ($comic_book_store_querymed->have_posts()) : $comic_book_store_querymed->the_post(); ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 align-self-center mb-md-0 mb-2 banner-content">
                                <div class="bannerbox">
                                    <?php if (get_theme_mod('comic_book_store_banner_small_title') != '') { ?>
                                        <p class="banner-smalltitle text-capitalize"><?php echo esc_html(get_theme_mod('comic_book_store_banner_small_title', 'comic-book-store')); ?></p>
                                    <?php } ?>
                                    <h1 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <?php
                                    $comic_book_store_trimexcerpt = get_the_excerpt();
                                    $comic_book_store_shortexcerpt = wp_trim_words($comic_book_store_trimexcerpt, 38);
                                    echo '<p class="banner-content">' . esc_html($comic_book_store_shortexcerpt) . '</p>';
                                    ?>
                                    <div class="bannerbtn">
                                        <?php
                                        $comic_book_store_button_text = get_theme_mod('comic_book_store_button_text', 'Read More');
                                        $comic_book_store_button_link_banner = esc_url(get_theme_mod('comic_book_store_button_link_banner', get_permalink()));
                                        if ($comic_book_store_button_text || !empty($comic_book_store_button_link_banner)) { ?>
                                            <?php if ($comic_book_store_button_text != '') { ?>
                                                <div class="slide-btn">
                                                    <a href="<?php echo esc_url($comic_book_store_button_link_banner); ?>" class="button">
                                                        <?php echo esc_html($comic_book_store_button_text); ?>
                                                        <span class="screen-reader-text"><?php echo esc_html($comic_book_store_button_text); ?></span>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 align-self-center text-center banner-right-img">
                                <div class="imagebox">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('full');
                                    } else { ?>
                                        <div class="banner-img-color"></div>
                                    <?php } ?>
                                </div>

                                <?php 
                                $comic_book_store_customer_review = get_theme_mod('comic_book_store_customer_review', '');
                                $comic_book_store_total_customer_review = get_theme_mod('comic_book_store_total_customer_review', '');
                                $comic_book_store_selected_category = get_theme_mod('comic_book_store_about_catData', 'select');

                                if (!empty($comic_book_store_customer_review) || !empty($comic_book_store_total_customer_review) || $comic_book_store_selected_category != 'select') : ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-main-box">
                            <div class="row">
                                <?php 
                                    for ($comic_book_store_i = 1; $comic_book_store_i <= 4; $comic_book_store_i++) { 
                                    $comic_book_store_card_title = get_theme_mod('comic_book_store_card_title' . $comic_book_store_i, '');
                                    $comic_book_store_card_text = get_theme_mod('comic_book_store_card_text' . $comic_book_store_i, '');
                                    $comic_book_store_icon = get_theme_mod('comic_book_store_card_icon' . $comic_book_store_i, '');
                                    ?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 align-self-center p-0">
                                        <div class="card-box p-4">
                                            <div class="row">
                                                <div class="col-lg-3 align-self-center">
                                                    <div class="icon">
                                                        <?php if (!empty($comic_book_store_icon)) { ?>
                                                            <i class="<?php echo esc_attr($comic_book_store_icon); ?>"></i>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 align-self-center">
                                                    <p class="card-heading mb-0"><?php echo esc_html($comic_book_store_card_title); ?></p>
                                                    <p class="card-text mb-0"><?php echo esc_html($comic_book_store_card_text); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    <?php } ?>

    <!-- Featured Books Section -->
    <?php
        $comic_book_store_hide_trending_section = get_theme_mod('comic_book_store_disabled_book_section', true);
        $comic_book_store_post_cat = get_theme_mod('comic_book_store_posts');
        if ($comic_book_store_hide_trending_section && $comic_book_store_post_cat) { ?>
        <section id="book-section" class="py-5 text-left">
            <div class="container">
                <div class="blog-bx">
                    <?php if (get_theme_mod('comic_book_store_book_text') != "") { ?>
                        <p class="mb-2 text-capitalize text-center book-text"><?php echo esc_html(get_theme_mod('comic_book_store_book_text', 'comic-book-store')); ?></p>
                    <?php } ?>
                    <?php if (get_theme_mod('comic_book_store_book_title') != "") { ?>
                        <h2 class="book-title mb-1 text-capitalize text-center"><?php echo esc_html(get_theme_mod('comic_book_store_book_title', 'comic-book-store')); ?></h2>
                    <?php } ?>
                </div> 
                <div class="container">
                    <div class="row">
                        <?php
                            $comic_book_store_page_query = new WP_Query(
                                array(
                                    'category_name' => esc_attr($comic_book_store_post_cat),
                                    'posts_per_page' => -1,
                                )
                            );
                            $comic_book_store_post_counter = 1;
                            while ($comic_book_store_page_query->have_posts()) : $comic_book_store_page_query->the_post(); ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 align-self-center mb-3 books">
                                        <div class="book-content">
                                            <div class="book-image mb-2">
                                                <?php if(has_post_thumbnail()){
                                                  the_post_thumbnail('full');
                                                  } else{?>
                                                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/dummy-post.png" alt=""/>
                                                <?php } ?>
                                                <a class="image-btn" href="<?php echo esc_url(get_permalink($post->ID)); ?>"><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-9 col-md-10 col-10 align-self-center">
                                                    <h3 class="pt-2 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <div class="post-reviews">
                                                        <i class="fa-regular fa-eye"></i>
                                                        <?php echo do_shortcode( '[kkstarratings]' );?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-2 col-2 align-self-center text-center">
                                                    <a class="service-btn" href="<?php echo esc_url(get_permalink($post->ID)); ?>"><i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php $comic_book_store_post_counter++; ?>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>
<?php get_footer(); ?>
