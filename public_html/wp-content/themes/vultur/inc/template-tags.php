<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Vultur
 */
/**
 *
 */
if(! function_exists('vultur_pagination')):
function vultur_pagination() {
      the_posts_pagination(
		           array(
			    'prev_text' => esc_html__('<','vultur'),
			    'next_text' => esc_html__('>','vultur')
			    )
			  );
 }
endif;
function sanitize_pagination($content) {
    // Remove role attribute
    $content = str_replace('role="navigation"', '', $content);
    return $content;
}

add_action('navigation_markup_template', 'sanitize_pagination');

if ( ! function_exists( 'vultur_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function vultur_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%3$s">%4$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'd' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
            $time_string
		);

		$byline = sprintf(
			'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
		);

        $comments_count = sprintf(
            esc_html( get_comments_number() )
        );

		echo '<div class="course-viewer"><ul><li><i class="far fa-calendar"></i>' .  $posted_on . '</li><li><i class="far fa-user"></i> ' . $byline . '</li><li><i class="far fa-comment-dots"></i> ' . $comments_count . '</li></ul></div>'; // WPCS: XSS OK.

	}
endif;
if ( ! function_exists( 'vultur_posted_date' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function vultur_posted_date() {
		$time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%3$s">%4$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'd' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_date = sprintf(
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);


		echo '<div class="course-viewer"><ul><li><i class="far fa-calendar"></i>' .  $posted_date . '</li></ul></div>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'vultur_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function vultur_entry_footer() {
		// Hide category and tag text for pages.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'vultur' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'vultur_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function vultur_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
    if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>

	<?php endif; // End is_singular().
}
endif;
