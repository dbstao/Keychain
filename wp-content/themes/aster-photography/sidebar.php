<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_photography
 */
?>


<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<?php 
  if ( ! is_active_sidebar( 'sidebar-1' )) { ?>
	<aside id="secondary" class="widget-area">
		<section id="Search" class="widget widget_block widget_archive " >
		    <h2 class="widget-title"><?php esc_html_e('Search', 'aster-photography'); ?></h2>
		    <?php get_search_form(); ?>
		</section>
		<section id="archives" class="widget widget_block widget_archive " >
		    <h2 class="widget-title"><?php esc_html_e('Archives', 'aster-photography'); ?></h2>
		    <ul>
		        <?php
		        wp_get_archives(array(
		            'type'            => 'monthly',
		            'show_post_count' => true,
		        ));
		        ?>
		    </ul>
		</section>
		<section id="categories" class="widget widget_categories" role="complementary">
		    <h2 class="widget-title"><?php esc_html_e('Categories', 'aster-photography'); ?></h2>
		    <ul>
		        <?php
		        wp_list_categories(array(
		            'orderby'    => 'name',
		            'title_li'   => '',
		            'show_count' => true,
		        ));
		        ?>
		    </ul>
		</section>
		<section id="tags" class="widget widget_tag_cloud" role="complementary">
		    <h2 class="widget-title"><?php esc_html_e('Tags', 'aster-photography'); ?></h2>
		    <?php
				$aster_photography_tags = get_tags();
				if ($aster_photography_tags) {
				    echo '<div class="tag-cloud">';
				    foreach ($aster_photography_tags as $aster_photography_tag) {
				        $aster_photography_tag_link = get_tag_link($aster_photography_tag->term_id);
				        echo '<a href="' . esc_url($aster_photography_tag_link) . '" style="font-size:' . esc_attr($aster_photography_tag->font_size) . 'px;" class="tag-link">' . esc_html($aster_photography_tag->name) . '</a>';
				    }
				    echo '</div>';
				} else {
				    echo '<p>No tags found.</p>';
				}
			?>
		</section>
		<section id="recent-posts" class="widget" role="complementary">
		    <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'aster-photography'); ?></h2>
		    <ul class="recent-posts-list">
		        <?php
		        $aster_photography_recent_posts = get_posts(array(
		            'numberposts' => 5, // Adjust the number of posts to display
		            'post_status' => 'publish',
		        ));

		        foreach ($aster_photography_recent_posts as $aster_photography_post) :
		            setup_postdata($aster_photography_post);
		            ?>
		            <li>
		                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		            </li>
		            <?php
		        endforeach;
		        wp_reset_postdata();
		        ?>
		    </ul>
		</section>

	</aside><!-- #secondary -->
<?php } ?>