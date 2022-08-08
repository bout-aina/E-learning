<?php
/**
 *Template Name: Blog
 */
get_header();
$vultur_page_data = '';
if ( function_exists( 'fw_get_db_post_option' )):
    $vultur_page_data = fw_get_db_post_option(get_the_ID());
endif;
$page_sidebar_position = '';
if(!empty($vultur_page_data['page_sidebar'])):
	$page_sidebar_position = $vultur_page_data['page_sidebar'];
 else:
	$page_sidebar_position = 'right';
endif;
if(!empty($vultur_page_data['comment_switch'])):
    $comment_switch = $vultur_page_data['comment_switch'];
  else:
    $comment_switch = 'yes';
endif;
$bread_image = '';
if(!empty($vultur_page_data['breadcrumbs_page_image']['url'])):
  $bread_image = $vultur_page_data['breadcrumbs_page_image']['url'];
endif;
$bread_color = '';
if(!empty($vultur_page_data['breadcrumbs_page_color'])):
   $bread_color = $vultur_page_data['breadcrumbs_page_color'];
endif;
$breadcrumbs_switch = '';
if(!empty($vultur_page_data['breadcrumbs_switch'])):
   $breadcrumbs_switch = $vultur_page_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'yes';
endif;
if($breadcrumbs_switch == 'yes'):
   vultur_breadcrumb_funcation($bread_color,$bread_image);
endif;
?>
<div class="main-layout si_fullwidth_page">
    <div class="container">
        <div class="row">
           <?php
            if($page_sidebar_position == 'full'):
    		      echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
    		      $vultur_thumb_w =880;
		          $vultur_thumb_h =400;
    		 else:
    		 if($page_sidebar_position == 'left'):
    		        echo '<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 order-lg-4 order-md-4">';
    		        $vultur_thumb_w =880;
		            $vultur_thumb_h =400;
    		      else:
    		        echo '<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">';
    		        $vultur_thumb_w =880;
		            $vultur_thumb_h =400;
    		    endif;
    	    endif;
    	   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		   $args = array(
                   'post_type' =>'post',
				   'paged' => $paged,
				   'post_status' =>'publish',
                  );
            $self_query = new WP_Query($args);
            if($self_query->have_posts()):
                while($self_query->have_posts()): $self_query->the_post();
				if(has_post_thumbnail(get_the_ID())):
                   $self_attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
			           $thum_image = vultur_resize($self_attachment_url, $vultur_thumb_w, $vultur_thumb_h,true);
			    endif;
    	    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('white-shadow'); ?>>
    	        <?php if(!empty($thum_image)): ?>
                    <div class="list_blog_image">
                        <a href="<?php echo esc_url( get_permalink() ) ?>">
                       <img src="<?php echo esc_url($thum_image); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>" class="img-responsive">
                        </a>
                    </div>
                <?php endif; ?>
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
               <?php
              endwhile;
                $GLOBALS['wp_query']->max_num_pages = $self_query->max_num_pages;
                vultur_pagination();
				wp_reset_postdata();
             endif;
            ?>
            </div>
             <?php if($page_sidebar_position == 'left'):  ?>
	        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
               <?php get_sidebar(); ?>
            </div>
          <?php
          endif;
          if($page_sidebar_position == 'right'):  ?>
	        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
         <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>