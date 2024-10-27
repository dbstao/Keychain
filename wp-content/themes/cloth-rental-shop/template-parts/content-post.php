<?php
  global $post;

  $cloth_rental_shop_classes2 = array(
    'post-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($cloth_rental_shop_classes2); ?>>
  <div class="post-content">
    <?php
      the_content();
      the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','cloth-rental-shop').'</strong> ', ', ', '</div>');
    ?>
  </div>
</div>