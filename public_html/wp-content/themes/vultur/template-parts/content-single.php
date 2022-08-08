<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vultur
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<?php
	vultur_post_thumbnail();
	?>
    <div class="article-content">
        <?php
        if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php vultur_posted_on(); ?>
            </div>
        <?php
        endif;
        ?>
   <div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vultur' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
            wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'vultur' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'vultur' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div>
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
        ?>
            <div class="post-categories">
	            <?php
	            $before = '';
	            $seperator = ''; // blank instead of comma
	            $after = '';
	            the_tags( $before, $seperator, $after );
	            ?>
            </div>
        <?php
        }
        ?>

        <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>

    <footer class="entry-footer">
		<?php vultur_entry_footer(); ?>
	</footer>
    </div>
</article>