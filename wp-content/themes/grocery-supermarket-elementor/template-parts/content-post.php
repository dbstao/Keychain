<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grocery Supermarket Elementor
*/

  global $post;
?>
<?php
  $grocery_supermarket_elementor_archive_year  = get_the_time('Y');
  $grocery_supermarket_elementor_archive_month = get_the_time('m');
  $grocery_supermarket_elementor_archive_day   = get_the_time('d');
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post-single mb-4'); ?>>
  <?php if ( has_post_thumbnail() && get_theme_mod( 'grocery_supermarket_elementor_single_post_featured_image',true) ) { ?>
    <div class="post-thumbnail post-img">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <div class="post-info my-2">
    <?php if( get_theme_mod( 'grocery_supermarket_elementor_date_hide',true)) : ?>
      <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('grocery_supermarket_elementor_post_date_icon_changer','fa fa-calendar')); ?>"></i> <a href="<?php echo esc_url( get_day_link( $grocery_supermarket_elementor_archive_year, $grocery_supermarket_elementor_archive_month, $grocery_supermarket_elementor_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
    <?php endif; ?>
    <?php if( get_theme_mod( 'grocery_supermarket_elementor_author_hide',true)) : ?>
      <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('grocery_supermarket_elementor_post_author_icon_changer','fa fa-user')); ?>"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
    <?php endif; ?>
    <?php if( get_theme_mod( 'grocery_supermarket_elementor_comment_hide',true)) : ?>
      <i class="<?php echo esc_attr(get_theme_mod('grocery_supermarket_elementor_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments ms-2"><?php comments_number( __('0 Comments','grocery-supermarket-elementor'), __('0 Comments','grocery-supermarket-elementor'), __('% Comments','grocery-supermarket-elementor') ); ?></span>
    <?php endif; ?>
	</div>
  <div class="post-content">
    <?php the_content(); ?>
    <?php if( get_theme_mod( 'grocery_supermarket_elementor_single_post_tag',true)) : ?>
      <?php the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','grocery-supermarket-elementor').'</strong> ', ', ', '</div>');?>
    <?php endif; ?>
    <?php if( get_theme_mod( 'grocery_supermarket_elementor_single_post_category',true)) : ?>
      <div class="single-post-category mt-3">
    		<span class="category"><?php esc_html_e('Categories:','grocery-supermarket-elementor'); ?></span>
    			<?php the_category(); ?>
    	</div>
    <?php endif; ?>
  </div>
</div>