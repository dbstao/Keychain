<?php
/**
 * The template for displaying 404 pages (not found)
 * @package Sneakers Sports Shoes
 */
get_header();
?>
    <div class="singular-main-block">
        <section class="theme-custom-block theme-error-section error-block-heading">
            <div class="wrapper">
                <div class="theme-area-header">
                    <div class="theme-area-headlines">
                        <h2 class="theme-area-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'sneakers-sports-shoes'); ?></h2>
                        <div class="theme-animated-line"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="theme-custom-block theme-error-sectiontheme-error-section error-block-middle">
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-12">
                        <h2><?php esc_html_e('Maybe its out there, somewhere...', 'sneakers-sports-shoes'); ?></h2>
                        <p><?php esc_html_e('You can always find insightful stories on our', 'sneakers-sports-shoes'); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e('Homepage','sneakers-sports-shoes'); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-12">
                        <h2><?php esc_html_e('Still feeling lost? Youre not alone.', 'sneakers-sports-shoes'); ?></h2>
                        <p><?php esc_html_e('Enjoy these stories about getting lost, losing things, and finding what you never knew you were looking for.', 'sneakers-sports-shoes'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
get_footer();
