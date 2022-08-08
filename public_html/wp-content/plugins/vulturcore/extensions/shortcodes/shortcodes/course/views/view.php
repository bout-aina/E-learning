<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$course_heading = '';
if(!empty($atts['course_heading'])):
   $course_heading = $atts['course_heading'];
endif;
$course_sub_heading = '';
if(!empty($atts['course_sub_heading'])):
   $course_sub_heading = $atts['course_sub_heading'];
endif;
$course_content = '';
if(!empty($atts['course_content'])):
    $course_content = $atts['course_content'];
endif;
$course_number = '';
if(!empty($atts['course_number'])):
   $course_number = $atts['course_number'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
if(function_exists( 'fw_get_db_settings_option' )):	
   $vultur_data = fw_get_db_settings_option();
endif;
?>
<div class="courses wrap-bg">
    <div class="container">

        <?php if(!empty($course_heading)): ?>
            <div class="row <?php echo esc_html($position); ?>">
                <div class="col-lg-12">
                    <div class="section-title with-p <?php echo esc_html($color); ?>">
                        <div class="intro-title"><?php echo esc_html($course_sub_heading); ?></div>
                        <h2><?php echo esc_html($course_heading); ?></h2>
                        <?php printf($course_content); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php
        $args = array('post_type' => 'course',
                     'posts_per_page'=>$course_number);
            $vultur_query = new WP_Query($args);
            if($vultur_query->have_posts()):
             while($vultur_query->have_posts()):
                $vultur_query->the_post();
             if(has_post_thumbnail(get_the_ID())):
                 $attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                 $vultur_crop_image = vultur_resize($attachment_url, $width =473, $height =283,true);
             endif;
            $vultur_data = '';
            if(function_exists( 'fw_get_db_post_option' )):
               $vultur_data = fw_get_db_post_option(get_the_ID());
            endif;
            $city = '';
            if(!empty($vultur_data['author_name'])):
               $city = $vultur_data['author_name'];
            endif;
            $price = '';
            if(!empty($vultur_data['price'])):
               $price = $vultur_data['price'];
            endif;
            $time_priode = '';
            if(!empty($vultur_data['time'])):
               $time_priode = $vultur_data['time'];
            endif;
            $single_link = '';
            if(!empty($vultur_data['single_link'])):
               $single_link= $vultur_data['single_link'];
            endif;
                 $author_image = '';
             if(!empty($vultur_data['author_image']['url'])):
                 $author_image = $vultur_data['author_image']['url'];
                 $author_image_crop_image = vultur_resize($author_image, $width =100, $height =100,true);
             endif;
                 ?>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 course-single mb20">
                 <div class="themeioan_course">
                     <article>
                         <?php if(!empty($vultur_crop_image)):?>
                         <div class="blog-photo">
                             <a href="<?php echo esc_url($single_link); ?>"><img src="<?php echo esc_url($vultur_crop_image); ?>" alt="<?php esc_attr(the_title());?>"></a>
                         </div>
                         <?php endif; ?>
                         <div class="blog-content">
                             <ul class="course-bottom-list">
                                 <li>
                                     <div class="course-duration">
                                         <?php
                                         if(!empty($price)): ?>
                                             <span class="course-price"><?php echo esc_html($price); ?></span>
                                         <?php endif; ?>
                                     </div>
                                 </li>
                             </ul>
                             <h5 class="title"><a href="<?php echo esc_url($single_link); ?>"><?php the_title(); ?></a></h5>
                             <p><?php echo vultur_the_excerpt(250); ?></p>

                             <div class="services-time">
                                 <?php if(!empty($time_priode)): ?>
                                 <span class="fa fa-clock-o"></span>
                                 <span><?php echo esc_html($time_priode); ?></span>
                                 <?php endif; ?>
                             </div>
                         </div>
                     </article>
                 </div>
             </div>

            <?php
            endwhile;
          endif;
          wp_reset_postdata();
        ?>
        </div>
    </div>
</div>