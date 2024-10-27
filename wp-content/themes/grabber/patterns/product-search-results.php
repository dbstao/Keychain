<?php
/**
 * Title: product-search-results
 * Slug: grabber/product-search-results
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"shadow":"none","border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"white","borderColor":"base"} -->
<div class="wp-block-column has-border-color has-base-border-color has-white-background-color has-background" style="border-width:1px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:none;flex-basis:25%"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Categories', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"fontSize":"extra-small"} /-->

<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":4,"fontSize":"extra-small"} -->
<h4 class="wp-block-heading has-extra-small-font-size"><?php esc_html_e('Filter by price', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":4,"fontSize":"extra-small"} -->
<h4 class="wp-block-heading has-extra-small-font-size"><?php esc_html_e('Filter by attribute', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:75%"><!-- wp:query-title {"type":"search","showPrefix":false,"align":"wide"} /-->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"products-block-post-template","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:columns {"className":"nopadding-bg","style":{"shadow":"var:preset|shadow|natural","border":{"radius":"5px"},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns nopadding-bg has-white-background-color has-background" style="border-radius:5px;padding-bottom:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:column {"className":"nomargin-column","layout":{"type":"default"}} -->
<div class="wp-block-column nomargin-column"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"extra-small"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"},"color":{"background":"#8abc00"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"1.3rem","right":"1.3rem","bottom":"1.3rem","left":"1.3rem"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:1.3rem;padding-right:1.3rem;padding-bottom:1.3rem;padding-left:1.3rem"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:33.33%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('No result', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php esc_html_e('Check out this week\'s popular products', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:query {"queryId":4,"query":{"perPage":"3","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"20px","right":"20px","left":"20px","bottom":"10px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"16px","textDecoration":"none"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /-->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->