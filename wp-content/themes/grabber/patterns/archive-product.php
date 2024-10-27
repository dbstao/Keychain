<?php
/**
 * Title: archive-product
 * Slug: grabber/archive-product
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} /-->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%","className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px"},"shadow":"none","color":{"background":"#fbfbfb"}},"borderColor":"base"} -->
<div class="wp-block-column is-style-default has-border-color has-base-border-color has-background" style="border-width:1px;background-color:#fbfbfb;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:none;flex-basis:20%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Categories', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"hasCount":false,"isDropdown":true,"style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"fontSize":"extra-small"} -->
<h2 class="wp-block-heading has-extra-small-font-size"><?php esc_html_e('Filter by price', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by color"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"fontSize":"extra-small"} -->
<h2 class="wp-block-heading has-extra-small-font-size"><?php esc_html_e('Filter by color', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:columns {"className":"nopadding-bg","style":{"shadow":"var:preset|shadow|natural","border":{"radius":"5px"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"},"blockGap":{"left":"0"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns nopadding-bg has-white-background-color has-background" style="border-radius:5px;padding-bottom:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:column {"className":"nomargin-column","layout":{"type":"default"}} -->
<div class="wp-block-column nomargin-column"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"extra-small"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"},"color":{"background":"#8abc00"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->