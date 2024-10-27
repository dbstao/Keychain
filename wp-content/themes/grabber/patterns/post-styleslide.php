<?php
/**
 * Title: Sliding Posts
 * Slug: grabber/post-styleslide
 * Categories: theme

 * @package grabber
 * @since 1.3.0
 */
?>
<!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div id="sliding-posts" class="wp-block-group is-style-default has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-default"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":"4"}} -->
<!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"","height":"","align":"full"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true,"className":"is-style-default nounderline","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"isLink":true,"className":"nounderline","style":{"typography":{"fontSize":"13px"}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"13px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->