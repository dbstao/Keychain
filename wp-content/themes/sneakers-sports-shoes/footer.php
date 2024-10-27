<?php
/**
 * The template for displaying the footer
 * @package Sneakers Sports Shoes
 * @since 1.0.0
 */

/**
 * Toogle Contents
 * @hooked sneakers_sports_shoes_content_offcanvas - 30
*/

do_action('sneakers_sports_shoes_before_footer_content_action'); ?>

</div>

<footer id="site-footer" role="contentinfo">

    <?php
    /**
     * Footer Content
     * @hooked sneakers_sports_shoes_footer_content_widget - 10
     * @hooked sneakers_sports_shoes_footer_content_info - 20
    */

    do_action('sneakers_sports_shoes_footer_content_action'); ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
