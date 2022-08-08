<?php
$event = '';
if(!empty($atts['event'])):
    $event = $atts['event'];
endif;
$event_title = '';
if(!empty($atts['event_title'])):
    $event_title = $atts['event_title'];
endif;
$event_sub_title = '';
if(!empty($atts['event_sub_title'])):
    $event_sub_title = $atts['event_sub_title'];
endif;
$event_desc = '';
if(!empty($atts['event_desc'])):
    $event_desc = $atts['event_desc'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
?>
<div id="events" class="wrap-bg">
    <div class="container">
        <div class="row <?php echo esc_html($position); ?>">
            <div class="col-lg-12">
                <div class="section-title with-p <?php echo esc_html($color); ?>">
	                <?php if(!empty($event_sub_title)): ?>
                        <div class="intro-title"><?php echo esc_html($event_sub_title); ?></div>
	                <?php endif; ?>
                    <h2><?php echo esc_html($event_title); ?></h2>
                    <?php printf($event_desc); ?>
                </div>
            </div>
        </div>
        <div class="row">
         <?php
          if(!empty($event)):
           foreach($event as $values):
                if(!empty($values['title'])):
                    $event_content = '';
                if(!empty($values['event_content'])):
                    $event_content = $values['event_content'];
                endif;
                $event_button = '';
                if(!empty($values['event_button'])):
                    $event_button = $values['event_button'];
                endif;
                $event_link = '';
                if(!empty($values['event_link'])):
                    $event_link = $values['event_link'];
                endif;
                $date_day = '';
                if(!empty($values['date_day'])):
                    $date_day = $values['date_day'];
                endif;
                $date_month_year = '';
                if(!empty($values['date_month_year'])):
                    $date_month_year = $values['date_month_year'];
                endif;
                $time = '';
                if(!empty($values['time'])):
                    $time = $values['time'];
                endif;
                $city = '';
                if(!empty($values['city'])):
                    $city = $values['city'];
                endif;
                if(!empty($values['student_image']['url'])):
                    $attachment_id = $values['student_image']['attachment_id'];
                    $vultur_image = wp_get_attachment_url($attachment_id, 'full');
                    $image_crop = vultur_resize($vultur_image, 580, 410 , true);
                endif;
                 ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">
                    <div class="themeioan_event">
                        <article>
                            <?php if(!empty($image_crop)):?>
                            <div class="event-photo">
                                <div class="date">
                                    <h4><span><?php printf($date_day); ?></span> <?php printf($date_month_year); ?></h4>
                                </div>
                                <a href="<?php echo esc_url($event_link); ?>"><img src="<?php echo esc_url($image_crop); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/></a>
                            </div>
                            <?php endif; ?>
                            <div class="event-content">
                                <h5 class="title"><a href="<?php echo esc_url($event_link); ?>"><?php echo esc_html($values['title']); ?></a></h5>
                                <?php printf($event_content); ?>
                                <div class="course-viewer">
                                    <ul>
                                        <li><i class="far fa-calendar"></i> <?php printf($date_day); ?> <?php printf($date_month_year); ?></li>
                                        <li><i class="fas fa-clock"></i> <?php printf($time); ?></li>
                                        <li><i class="fas fa-map"></i> <?php printf($city); ?></li>
                                    </ul>
                                </div>
                                <div class="btn-section">
                                    <a href="<?php echo esc_url($event_link); ?>" class="color-one btn-custom"><?php printf($event_button); ?> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php
              endif;
             endforeach;
            endif;
            ?>
        </div>
    </div>
</div>