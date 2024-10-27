<?php
  global $post;

  $cloth_rental_shop_classes1 = array(
    'page-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($cloth_rental_shop_classes1); ?>>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>