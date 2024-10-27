<?php
/**
 * Title: featured-image
 * Slug: grabber/featured-image
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"customOverlayColor":"#FFF","isUserOverlayColor":true,"isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#FFF"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide","className":"is-style-grabber-title-styleone","textColor":"contrast"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","prefix":"Categories: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Comments', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"shadow":"none","spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"width":"1px"},"color":{"background":"#f8f8f8"}},"borderColor":"base"} -->
<div class="wp-block-column has-border-color has-base-border-color has-background" style="border-width:1px;background-color:#f8f8f8;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);box-shadow:none"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"extra-small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"12px"}},"textColor":"secondary"} /-->

<!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"12px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"extra-small"} /-->

<!-- wp:comment-reply-link {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous {"fontSize":"extra-small"} /-->

<!-- wp:comments-pagination-numbers {"fontSize":"extra-small"} /-->

<!-- wp:comments-pagination-next {"fontSize":"extra-small"} /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"post-navigation"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->