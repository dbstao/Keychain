<?php

/**
 * Title: Sidebar Default
 * Slug: blogpoet/sidebar-default
 * Categories: blogpoet
 */
$blogpoet_agency_url = trailingslashit(get_template_directory_uri());
$blogpoet_images = array(
    $blogpoet_agency_url . 'assets/images/author_image.jpg',
);
?>
<!-- wp:group {"style":{"border":{"radius":"20px","top":{"radius":"20px","width":"1px","color":"var:preset|color|dark-color"},"right":{"radius":"20px","width":"5px","color":"var:preset|color|dark-color"},"bottom":{"radius":"20px","width":"5px","color":"var:preset|color|dark-color"},"left":{"radius":"20px","width":"1px","color":"var:preset|color|dark-color"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"24px","right":"24px"},"margin":{"bottom":"20px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-radius:20px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;margin-bottom:20px;padding-top:40px;padding-right:24px;padding-bottom:40px;padding-left:24px"><!-- wp:image {"align":"center","id":150,"width":"100px","height":"100px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50px","top":{"radius":"50px","width":"1px","color":"var:preset|color|primary"},"right":{"radius":"50px","width":"5px","color":"var:preset|color|primary"},"bottom":{"radius":"50px","width":"5px","color":"var:preset|color|primary"},"left":{"radius":"50px","width":"1px","color":"var:preset|color|primary"}}}} -->
    <figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url($blogpoet_images[0]) ?>" alt="" class="wp-image-150" style="border-radius:50px;border-top-color:var(--wp--preset--color--primary);border-top-width:1px;border-right-color:var(--wp--preset--color--primary);border-right-width:5px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:5px;border-left-color:var(--wp--preset--color--primary);border-left-width:1px;object-fit:cover;width:100px;height:100px" /></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
    <h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e('Liyana Parker', 'blogpoet') ?></h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'blogpoet') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:social-links {"iconColor":"foreground-alt","iconColorValue":"#021613","iconBackgroundColor":"primary","iconBackgroundColorValue":"#F6D006","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"x"} /-->

        <!-- wp:social-link {"url":"#","service":"lastfm"} /-->

        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    </ul>
    <!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"bottom":"20px"}},"border":{"radius":"20px","top":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-radius:20px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;margin-bottom:20px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <h4 class="wp-block-heading has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Categories', 'blogpoet') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:categories {"showPostCounts":true,"className":"is-style-blogpoet-categories-bullet-hide-style blogpoet-sidebar-categories","style":{"typography":{"lineHeight":"2","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"bottom":"20px"}},"border":{"radius":"20px","top":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-radius:20px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;margin-bottom:20px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <h4 class="wp-block-heading has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Featured Post', 'blogpoet') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":13,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"15px"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px"><!-- wp:post-featured-image {"isLink":true,"height":"70px","style":{"border":{"radius":"12px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->