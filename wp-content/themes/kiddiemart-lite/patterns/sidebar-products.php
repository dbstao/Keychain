<?php
 /**
  * Title: Sidebar Products
  * Slug: kiddiemart-lite/sidebar-products
  * Categories: kiddiemart-lite, page
  */
?>

<!-- wp:group {"metadata":{"categories":["kiddiemart-lite","page"],"patternName":"kiddiemart-lite/sidebar-products","name":"Sidebar Products"},"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar">
  <!-- wp:group {"className":"wp-block-widget"} -->
  <div class="wp-block-group wp-block-widget">
    <!-- wp:search {"label":"Search","placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"}} /-->
  </div>
  <!-- /wp:group -->
  <!-- wp:group {"className":"wp-block-widget"} -->
  <div class="wp-block-group wp-block-widget">
    <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
    <h2 class="wp-block-heading" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px">Categories</h2>
    <!-- /wp:heading -->
    <!-- wp:woocommerce/product-categories /-->
  </div>
  <!-- /wp:group -->
  <!-- wp:group {"className":"wp-block-widget"} -->
  <div class="wp-block-group wp-block-widget">
    <!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Filter by price</h3>
      <!-- /wp:heading -->
      <!-- wp:woocommerce/price-filter {"heading":""} -->
      <div class="wp-block-woocommerce-price-filter is-loading">
        <span aria-hidden="true" class="wc-block-product-categories__placeholder"></span>
      </div>
      <!-- /wp:woocommerce/price-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group {"className":"wp-block-widget  wp-filter-by-size"} -->
  <div class="wp-block-group wp-block-widget  wp-filter-by-size">
    <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by size"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Filter by size</h3>
      <!-- /wp:heading -->
      <!-- wp:woocommerce/attribute-filter {"attributeId":2,"showCounts":true,"heading":""} -->
      <div class="wp-block-woocommerce-attribute-filter is-loading"></div>
      <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group {"className":"wp-block-widget wp-filter-by-color","layout":{"type":"constrained"}} -->
  <div class="wp-block-group wp-block-widget wp-filter-by-color">
    <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by Color"} -->
    <div class="wp-block-woocommerce-filter-wrapper">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading">Filter by Color</h3>
      <!-- /wp:heading -->
      <!-- wp:woocommerce/attribute-filter {"attributeId":1,"selectType":"single","heading":""} -->
      <div class="wp-block-woocommerce-attribute-filter is-loading"></div>
      <!-- /wp:woocommerce/attribute-filter -->
    </div>
    <!-- /wp:woocommerce/filter-wrapper -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
