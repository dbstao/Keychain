<?php
/**
 * Title: sidebar
 * Slug: grabber/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:search {"label":"","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"typography":{"lineHeight":"0.6","fontStyle":"normal","fontWeight":"300","fontSize":"13px"},"color":{"background":"#16c283"}}} /-->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<h3 class="wp-block-heading has-text-align-left" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Best Sellings', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default","columnCount":2},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"23%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:23%"><!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"width":"75px","height":"75px","style":{"typography":{"fontSize":"10px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"level":3,"isLink":true,"className":"nounderline","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"15px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontSize":"12px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<h3 class="wp-block-heading has-text-align-left" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Latest Posts', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"nounderline","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->