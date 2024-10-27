<?php
/**
 * Title: Posts Style One
 * Slug: grabber/post-styleone
 * Categories: theme

 * @package grabber
 * @since 1.3.0
 */

?>
<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/post-styleone","name":"Posts Style One"},"className":"post-style-one","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group post-style-one" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-default has-white-background-color has-background" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|base","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base);border-bottom-width:1px"><!-- wp:heading {"level":4,"className":"grabber-section-header","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"8px","right":"8px"},"margin":{"bottom":"2px"}}},"backgroundColor":"primary","textColor":"white","fontSize":"extra-small"} -->
<h4 class="wp-block-heading grabber-section-header has-white-color has-primary-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:2px;padding-top:6px;padding-right:8px;padding-bottom:6px;padding-left:8px">Must Read Articles</h4>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"contrast","className":"is-style-button-hover-primary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}}} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-color" style="font-size:14px"><a class="wp-block-button__link has-contrast-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":34,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":300,"gradient":"dark-gradient","contentPosition":"bottom center","className":"grabber-post-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center grabber-post-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"left","className":"is-style-categories-background-with-round","style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|white"}}}},"typography":{"fontSize":"18px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"10px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:10px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize","fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->