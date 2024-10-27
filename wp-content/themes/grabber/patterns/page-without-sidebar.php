<?php
/**
 * Title: Page without sidebar
 * Slug: grabber/page-without-sidebar
 * Categories: hidden
 * Inserter: no
 * Post Types: page, wp_template
 */
?>
<!-- wp:template-part {"slug":"header","theme":"grabber","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#8d969f"}}},"color":{"text":"#8d969f"}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#8d969f"}}},"color":{"text":"#8d969f"}}} /-->

<!-- wp:post-terms {"term":"category","prefix":"Categories: ","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#8d969f"}}},"color":{"text":"#8d969f"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"full","layout":{"type":"default"}} /-->

<!-- wp:columns {"style":{"border":{"width":"1px","color":"#abb8c3","radius":"5px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns has-border-color" style="border-color:#abb8c3;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-author {"showBio":true,"isLink":true,"style":{"color":{"duotone":"unset"}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:heading -->
<h2 class="wp-block-heading">Comments</h2>
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
<!-- /wp:comments -->

<!-- wp:template-part {"slug":"post-navigation","theme":"grabber"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"grabber","tagName":"footer","className":"site-footer"} /-->