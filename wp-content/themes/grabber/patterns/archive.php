<?php
/**
 * Title: archive
 * Slug: grabber/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","fontSize":"large"} /-->

<!-- wp:group {"style":{"border":{"radius":"4px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color has-base-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-author {"showBio":true,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:term-description /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}},"color":{"background":"#f9f9f9"}}} -->
<div class="wp-block-columns has-background" style="background-color:#f9f9f9"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"aspectRatio":"auto"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-date /-->

<!-- wp:post-excerpt {"moreText":"Read more.."} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background is-style-default" style="margin-top:0"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"cyan-bluish-gray"} /-->

<!-- wp:post-terms {"term":"category","prefix":"Categories: ","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"cyan-bluish-gray"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('No results', 'grabber');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->