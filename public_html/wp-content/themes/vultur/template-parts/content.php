<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vultur
 */
$vultur_thumb_w =1900;
$vultur_thumb_h =800;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('white-shadow'); ?>>
    <?php  
    if (has_post_thumbnail(get_the_ID())):
            $vultur_attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
			$thum_image = vultur_resize($vultur_attachment_url, $vultur_thumb_w, $vultur_thumb_h);
		if(!empty($thum_image)):
	         echo '<div class="list_blog_image">'; ?>
			<a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>">
				<img src="<?php echo esc_url($thum_image); ?>" alt="<?php esc_attr(the_title_attribute()) ?>" />
			</a>
			</div>
	<?php
		endif;
    endif; 
    ?>
    <div class="article-content">
        <?php if('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php vultur_posted_on(); ?>
            </div>
        <?php endif; ?>
    <header class="entry-header">
        <?php
        echo '<h2 class="entry-title">';
        if(is_sticky() && is_home() ) :
            echo '<span class="sticky-post"><i class="fa fa-thumb-tack" aria-hidden="true"></i></span>';
        endif;
        ?>
	    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php esc_attr(the_title_attribute()); ?></a></h2>
    </header>
    <div class="entry-content">
		<?php
		the_excerpt();
		wp_link_pages( array(
				'before'  => '<div class="page-links"><span class="page-links-title">'.esc_html__( 'Pages:', 'vultur').'</span>',
				'after'   => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">'.esc_html__('Page', 'vultur' ).'</span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) ); 
		?>
	</div>
    <div class="post-read-more">
        <?php
        echo '<a href="' . esc_url( get_permalink() ) . '" class="color-one btn-custom smooth-scroll">'.esc_html__('Read more', 'vultur' ).' <i class="fas fa-arrow-right"></i></a>';
        ?>
    </div>
    <footer class="entry-footer">
		<?php vultur_entry_footer(); ?>
	</footer>
    </div>
</article>