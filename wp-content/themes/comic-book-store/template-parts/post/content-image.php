<?php
/**
 * @package Comic Book Store
 */
?>

<?php
    $comic_book_store_post_date = esc_html(get_the_date());
    $comic_book_store_year = esc_html(get_the_date('Y'));
    $comic_book_store_month = esc_html(get_the_date('m'));

    $comic_book_store_author_id = esc_attr(get_the_author_meta('ID'));
    $comic_book_store_author_link = esc_url(get_author_posts_url($comic_book_store_author_id));
    $comic_book_store_author_name = esc_html(get_the_author());

    $comic_book_store_blog_post_thumb =  get_theme_mod( 'comic_book_store_blog_post_thumb', 1 );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="listarticle">
        <?php if (has_post_thumbnail() ){ ?>
            <?php if ($comic_book_store_blog_post_thumb == 1 ) {?> 
                <div class="post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
            <?php } ?>
        <?php } ?>
        <header class="entry-header">
            <h2 class="single_title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php if ('post' == get_post_type()) : ?>
                <div class="postmeta">
                    <div class="post-date">
                        <a href="<?php echo esc_url(get_month_link($comic_book_store_year, $comic_book_store_month)); ?>">
                            <i class="fas fa-calendar-alt"></i> &nbsp;<?php echo esc_html($comic_book_store_post_date); ?>
                            <span class="screen-reader-text"><?php echo esc_html($comic_book_store_post_date); ?></span>
                        </a>
                    </div>
                    <div class="post-comment">&nbsp; &nbsp;
                        <a href="<?php echo esc_url(get_comments_link()); ?>">
                            <i class="fa fa-comment"></i> &nbsp; <?php comments_number(); ?>
                            <span class="screen-reader-text"><?php comments_number(); ?></span>
                        </a>
                    </div>
                    <div class="post-author">&nbsp; &nbsp;
                        <a href="<?php echo $comic_book_store_author_link; ?>">
                            <i class="fas fa-user"></i> &nbsp; <?php echo esc_html($comic_book_store_author_name); ?>
                            <span class="screen-reader-text"><?php echo esc_html($comic_book_store_author_name); ?></span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </header>
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php if(get_theme_mod('comic_book_store_blog_post_description_option') == 'Full Content'){ ?>
                <div class="entry-content"><?php
                    $comic_book_store_content = get_the_content(); ?>
                    <p><?php echo wpautop($comic_book_store_content); ?></p>  
                </div>
             <?php }
            if(get_theme_mod('comic_book_store_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
                <?php if(get_the_excerpt()) { ?>
                    <div class="entry-content"> 
                        <p><?php $comic_book_store_excerpt = get_the_excerpt(); echo esc_html($comic_book_store_excerpt); ?></p>
                    </div>
                <?php }?>
            <?php }?>         
        </div>
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'comic-book-store' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'comic-book-store' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>
        <?php endif; ?>
        <div class="clear"></div>    
    </div>
</article>