<?php
/**
 * Title: WooCommerce Product Display
 * Slug: grabber/wooproducts
 * Categories: theme

 * @package grabber
 * @since 1.2.0
 */

if ( class_exists( 'WooCommerce' ) ) {
?>
    
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"42px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:42px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
<div class="wp-block-woocommerce-product-collection alignwide"><!-- wp:columns {"className":"nomargin-column"} -->
<div class="wp-block-columns nomargin-column"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:woocommerce/product-template {"fontSize":"extra-small"} -->
<!-- wp:columns {"className":"nopadding-bg","style":{"shadow":"var:preset|shadow|natural","border":{"radius":"5px"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns nopadding-bg has-white-background-color has-background" style="border-radius:5px;padding-bottom:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:column {"width":"","className":"nomargin-column","layout":{"type":"default"}} -->
<div class="wp-block-column nomargin-column"><!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"width":"","height":"260px","aspectRatio":"3/5"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"className":"nounderline","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"extra-small"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"},"color":{"background":"#8abc00"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->
    <?php
} else {
    ?>
    <div class="woocommerce-not-active">WooCommerce is not active. Please install and activate WooCommerce to view products.</div>
    <?php
}
?>
