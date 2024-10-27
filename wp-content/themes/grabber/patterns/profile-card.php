<?php
/**
 * Title: Profile Card
 * Slug: grabber/profile-card
 * Categories: theme

 * @package grabber
 * @since 1.3.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","left":"15px","right":"15px","bottom":"15px"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":{},"right":{},"left":{}},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px">Author Profile</h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:12px;padding-left:12px"><!-- wp:image {"id":283,"width":"100px","height":"100px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grabber-image-styletwo","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-grabber-image-styletwo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people1.webp" alt="" class="wp-image-283" style="border-radius:0px;object-fit:cover;width:100px;height:100px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:24px">Sandeep K</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"meta-color","iconColorValue":"#A09EAB","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","className":"is-style-social-icon-size-small","style":{"spacing":{"blockGap":{"top":"0","left":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-social-icon-size-small"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->