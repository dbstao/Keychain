<?php
/**
 * Title: single-product
 * Slug: grabber/single-product
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"align":"wide","className":"nomargin-column","layout":{"type":"constrained","contentSize":"1179px"}} -->
<div class="wp-block-group alignwide nomargin-column"><!-- wp:columns {"verticalAlignment":"center","className":"nomargin-column","style":{"spacing":{"padding":{"top":"0.6em","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center nomargin-column" style="padding-top:0.6em;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"100%","className":"nomargin-column"} -->
<div class="wp-block-column is-vertically-aligned-center nomargin-column" style="flex-basis:100%"><!-- wp:woocommerce/breadcrumbs {"className":"nomargin-column","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"#666666"}}},"color":{"text":"#666666"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"2rem"}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1179px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:65%"><!-- wp:woocommerce/product-image-gallery /-->

<!-- wp:group {"align":"wide","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal","style":{"spacing":{"margin":{"right":"var:preset|spacing|40","left":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"35%","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px"},"shadow":"none","color":{"background":"#f9f9f9"}},"borderColor":"base"} -->
<div class="wp-block-column has-border-color has-base-border-color has-background" style="border-width:1px;background-color:#f9f9f9;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:none;flex-basis:35%"><!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"24px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"textColor":"contrast","fontSize":"extra-small","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"cyan-bluish-gray"} -->
<hr class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"product_cat","prefix":"Category: ","style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: ","style":{"typography":{"fontSize":"12px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":2,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Related products', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"className":"nopadding-bg","style":{"shadow":"var:preset|shadow|natural","border":{"radius":"5px"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":"0"}},"backgroundColor":"white"} -->
<div class="wp-block-group nopadding-bg has-white-background-color has-background" style="border-radius:5px;padding-bottom:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:woocommerce/product-image {"imageSizing":"cropped","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"},"color":{"background":"#8abc00"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->