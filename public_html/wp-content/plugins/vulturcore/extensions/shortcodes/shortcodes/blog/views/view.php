<?php if ( ! defined( 'FW' ) ) {
	  die( 'Forbidden' );
   }
$position = '';
if(!empty($atts['position'])):
	$position = $atts['position'];
endif;
$heading = '';
if(!empty($atts['heading'])):
    $heading = $atts['heading'];
endif;
$sub_heading = '';
if(!empty($atts['sub_heading'])):
    $sub_heading = $atts['sub_heading'];
endif;
$content = '';
if(!empty($atts['content'])):
    $content = $atts['content'];
endif;
$show_blog = '';
if(isset($atts['show_blog'])):
   $show_blog = $atts['show_blog'];
endif;
$crop_content = '';
if(isset($atts['crop_content'])):
	$crop_content = $atts['crop_content'];
endif;
$crop_content_feature = '';
if(isset($atts['crop_content_feature'])):
	$crop_content_feature = $atts['crop_content_feature'];
endif;
$layout = '';
if(!empty($atts['layout'])):
	$layout = $atts['layout'];
endif;
if(function_exists( 'fw_get_db_settings_option' )):	
   $vultur_data = fw_get_db_settings_option();
endif;
?>

<div id="blog" class="wrap-bg">
    <div class="container">
           <?php if(!empty($heading) || !empty($sub_heading)): ?>
               <div class="row <?php echo esc_html($position); ?>">
                   <div class="col-lg-12">
                       <div class="section-title with-p">
	                       <?php if(!empty($sub_heading)): ?>
		                       <div class="intro-title"><?php echo esc_html($sub_heading); ?></div>
	                       <?php endif; ?>
                           <h2><?php printf($heading); ?></h2>
                           <?php printf($content); ?>
                       </div>
                   </div>
               </div>
           <?php endif;?>
            <div class="row">
            <?php
            $vultur_thumb_w =580;
			$vultur_thumb_h =460;
            $args = array(
                   'post_type' =>'post',
				   'posts_per_page' =>$show_blog ,
                   'post_status' =>'publish',
                  );
            $self_query = new WP_Query($args);
            if($self_query->have_posts()):
                while($self_query->have_posts()): $self_query->the_post();
				if(has_post_thumbnail(get_the_ID())):
                   $self_attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
			           $thum_image = vultur_resize($self_attachment_url, $vultur_thumb_w, $vultur_thumb_h, true);
					   $thum_image_layout_two = vultur_resize($self_attachment_url, $width =500, $height =300, true);
			    endif;
			 ?>

	            <?php if($layout == 'layout1'): ?>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 blog-single">
			                <div class="themeioan_blog">
				                <article>
					                <?php if(!empty($thum_image)): ?>
						                <div class="blog-photo">
							                <a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><img src="<?php echo esc_url($thum_image); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>" title="<?php echo esc_attr(the_title_attribute()); ?>" class="img-responsive"></a>
						                </div>
					                <?php endif; ?>
					                <div class="blog-content">
							                <?php vultur_posted_on(); ?>
						                <h5 class="title"><a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><?php esc_attr(the_title()); ?></a></h5>
						                <p><?php echo vultur_the_excerpt(esc_html($crop_content)); ?></p>
					                </div>
				                </article>
			                </div>
		                </div>
	            <?php endif; ?>

	            <?php if($layout == 'layout2'): ?>
	            <?php if($self_query->current_post == 0): ?>
		                <div class="container blog-single">
			                <div class="themeioan_blog <?php echo esc_html($layout);?>">
				                <article class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					                <?php if(!empty($thum_image_layout_two)): ?>
						                <div class="blog-photo">
							                <a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><img src="<?php echo esc_url($thum_image_layout_two); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>" title="<?php echo esc_attr(the_title_attribute()); ?>" class="img-responsive"></a>
						                </div>
					                <?php endif; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					                <div class="blog-content">
						                <h5 class="title"><a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><?php esc_attr(the_title()); ?></a></h5>
						                <p><?php echo vultur_the_excerpt(esc_html($crop_content_feature)); ?></p>
                                        <a href="<?php echo esc_url(get_the_permalink(get_the_ID()));?>" class="readmore"><?php esc_html_e('View More','vultur'); ?> <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    </div>
				                </article>
			                </div>
		                </div>

	                <?php else: ?>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 blog-single">
			                <div class="themeioan_blog">
				                <article>
					                <div class="blog-content">
						                <h5 class="title"><a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><?php esc_attr(the_title()); ?></a></h5>
						                <p><?php echo vultur_the_excerpt(esc_html($crop_content)); ?></p>
					                </div>
				                </article>
			                </div>
		                </div>
		          <?php endif; ?>
	              <?php endif; ?>

	                <?php if($layout == 'layout3'): ?>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 blog-single">
                            <div class="themeioan_blog <?php echo esc_html($layout);?> ">
                                <article>
                                    <?php if(!empty($thum_image)): ?>
                                        <div class="blog-photo">
                                            <a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><img src="<?php echo esc_url($thum_image); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>" title="<?php echo esc_attr(the_title_attribute()); ?>" class="img-responsive"></a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="blog-content">
                                        <?php vultur_posted_on(); ?>
                                        <h5 class="title"><a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><?php esc_attr(the_title()); ?></a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
	                <?php endif; ?>

	                <?php if($layout == 'layout4'): ?>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 blog-single">
			                <div class="themeioan_blog">
				                <article>
					                <?php if(!empty($thum_image)): ?>
						                <div class="blog-photo">
							                <a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><img src="<?php echo esc_url($thum_image); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>" title="<?php echo esc_attr(the_title_attribute()); ?>" class="img-responsive"></a>
						                </div>
					                <?php endif; ?>
					                <div class="blog-content">
                                        <?php vultur_posted_on(); ?>
						                <h5 class="title"><a href="<?php echo esc_url(get_the_permalink(get_the_ID(get_the_ID()))); ?>"><?php esc_attr(the_title()); ?></a></h5>
						                <p><?php echo vultur_the_excerpt(esc_html($crop_content)); ?></p>
						                <a href="<?php echo esc_url(get_the_permalink(get_the_ID()));?>" class="readmore"><?php esc_html_e('View More','vultur'); ?> <i class="fas fa-arrow-right"></i></a>
					                </div>
				                </article>
			                </div>
		                </div>
	                <?php endif; ?>

            <?php
             endwhile;
             wp_reset_postdata();
            endif;
            ?>
        </div>    
    </div>    
</div>