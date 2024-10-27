<?php
/**
 * Custom template tags for this theme
 *
 * @package aster_photography
 */

if ( ! function_exists( 'aster_photography_posted_on_single' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time on single posts.
     */
    function aster_photography_posted_on_single() {
        if ( get_theme_mod( 'aster_photography_single_post_hide_date', false ) ) {
            return;
        }

        $aster_photography_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $aster_photography_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $aster_photography_time_string = sprintf(
            $aster_photography_time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );

        $aster_photography_posted_on = '<span class="post-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><i class="far fa-clock"></i>' . $aster_photography_time_string . '</a></span>';

        echo $aster_photography_posted_on; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'aster_photography_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function aster_photography_posted_on() {
        if ( get_theme_mod( 'aster_photography_post_hide_date', false ) ) {
            return;
        }

        $aster_photography_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $aster_photography_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $aster_photography_time_string = sprintf(
            $aster_photography_time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );

        $aster_photography_posted_on = '<span class="post-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><i class="far fa-clock"></i>' . $aster_photography_time_string . '</a></span>';

        echo $aster_photography_posted_on; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;


if ( ! function_exists( 'aster_photography_posted_by_single' ) ) :
    /**
     * Prints HTML with meta information for the current author on single posts.
     */
    function aster_photography_posted_by_single() {
        if ( get_theme_mod( 'aster_photography_single_post_hide_author', false ) ) {
            return;
        }
        $aster_photography_byline = '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fas fa-user"></i>' . esc_html( get_the_author() ) . '</a>';

        echo '<span class="post-author"> ' . $aster_photography_byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'aster_photography_posted_by' ) ) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function aster_photography_posted_by() {
        if ( get_theme_mod( 'aster_photography_post_hide_author', false ) ) {
            return;
        }
        $aster_photography_byline = '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><i class="fas fa-user"></i>' . esc_html( get_the_author() ) . '</a>';

        echo '<span class="post-author"> ' . $aster_photography_byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'aster_photography_categories_single_list' ) ) :
    function aster_photography_categories_single_list( $with_background = false ) {
        if ( is_singular( 'post' ) ) {
            $aster_photography_hide_category = get_theme_mod( 'aster_photography_single_post_hide_category', false );

            if ( ! $aster_photography_hide_category ) {
                $aster_photography_categories = get_the_category();
                $aster_photography_separator  = '';
                $aster_photography_output     = '';
                if ( ! empty( $aster_photography_categories ) ) {
                    foreach ( $aster_photography_categories as $category ) {
                        $aster_photography_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $aster_photography_separator;
                    }
                    echo trim( $aster_photography_output, $aster_photography_separator );
                }
            }
        }
    }
endif;

if ( ! function_exists( 'aster_photography_categories_list' ) ) :
    function aster_photography_categories_list( $with_background = false ) {
        $aster_photography_hide_category = get_theme_mod( 'aster_photography_post_hide_category', true );

        if ( ! $aster_photography_hide_category ) {
            $aster_photography_categories = get_the_category();
            $aster_photography_separator  = '';
            $aster_photography_output     = '';
            if ( ! empty( $aster_photography_categories ) ) {
                foreach ( $aster_photography_categories as $category ) {
                    $aster_photography_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $aster_photography_separator;
                }
                echo trim( $aster_photography_output, $aster_photography_separator );
            }
        }
    }
endif;

if ( ! function_exists( 'aster_photography_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the tags and comments.
	 */
	function aster_photography_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() && is_singular() ) {
			$aster_photography_hide_tag = get_theme_mod( 'aster_photography_post_hide_tags', false );

			if ( ! $aster_photography_hide_tag ) {
				/* translators: used between list items, there is a space after the comma */
				$aster_photography_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'aster-photography' ) );
				if ( $aster_photography_tags_list ) {
					/* translators: 1: list of tags. */
					printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'aster-photography' ) . '</span>', $aster_photography_tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
			}
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'aster-photography' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'aster_photography_post_thumbnail' ) ) :
    /**
     * Display the post thumbnail.
     */
    function aster_photography_post_thumbnail() {
        // Return early if the post is password protected, an attachment, or does not have a post thumbnail.
        if ( post_password_required() || is_attachment() ) {
            return;
        }

        // Display post thumbnail for singular views.
        if ( is_singular() ) :
            // Check theme setting to hide the featured image in single posts.
            if ( get_theme_mod( 'aster_photography_single_post_hide_feature_image', false ) ) {
                return;
            }
            ?>
            <div class="post-thumbnail">
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail(); 
                } else {
                    // URL of the default image
                    $aster_photography_default_image_url = get_template_directory_uri() . '/resource/img/default.jpg';
                    echo '<img src="' . esc_url( $aster_photography_default_image_url ) . '" alt="' . esc_attr( get_the_title() ) . '">';
                }
                ?>
            </div><!-- .post-thumbnail -->
        <?php else :
            // Check theme setting to hide the featured image in non-singular posts.
            if ( get_theme_mod( 'aster_photography_post_hide_feature_image', false ) ) {
                return;
            }
            ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail(
                        'post-thumbnail',
                        array(
                            'alt' => the_title_attribute(
                                array(
                                    'echo' => false,
                                )
                            ),
                        )
                    );
                } else {
                    // URL of the default image
                    $aster_photography_default_image_url = get_template_directory_uri() . '/resource/img/default.jpg';
                    echo '<img src="' . esc_url( $aster_photography_default_image_url ) . '" alt="' . esc_attr( get_the_title() ) . '">';
                }
                ?>
            </a>
        <?php endif; // End is_singular().
    }
endif;


if ( ! function_exists( 'wp_body_open' ) ) :
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
