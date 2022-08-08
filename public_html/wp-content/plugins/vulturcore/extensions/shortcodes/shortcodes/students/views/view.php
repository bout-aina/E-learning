<?php
$students_logo = '';
if(!empty($atts['students_slider'])):
    $students_logo = $atts['students_slider'];
endif;
$students_title = '';
if(!empty($atts['students_title'])):
    $students_title = $atts['students_title'];
endif;
$students_sub_title = '';
if(!empty($atts['students_sub_title'])):
    $students_sub_title = $atts['students_sub_title'];
endif;
$students_desc = '';
if(!empty($atts['students_desc'])):
    $students_desc = $atts['students_desc'];
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
<div id="testimonials" class="wrap-bg">
    <div class="container">
        <div class="row align-items-center <?php echo esc_html($position); ?>">
                <div class="col-lg-6">
                    <div class="carousel-slider general-slider">
					 <?php
					  if(!empty($students_logo)):
                       foreach($students_logo as $values):
                            if(!empty($values['title'])):
                                if(!empty($values['student_image']['url'])):
                                $attachment_id = $values['student_image']['attachment_id'];
                                   $vultur_logoimage = wp_get_attachment_url($attachment_id, 'full');
                                   $logoimage = vultur_resize($vultur_logoimage, 300, 300 , true);
                             endif;
                            $student_position = '';
                            if(!empty($values['student_position'])):
                                $student_position = $values['student_position'];
                            endif;
                                $student_content = '';
                            if(!empty($values['student_content'])):
                                $student_content = $values['student_content'];
                            endif;
                             ?>
                                <div class="col-sm-4">
                                    <div class="themeioan_testimonial">
                                        <img src="<?php echo esc_url($logoimage); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                                        <div class="testimonail-content">
                                            <div class="testimonial-text">
                                                <?php printf($student_content); ?>
                                            </div>
                                            <div class="testimonial-author">
                                                <h4><?php echo esc_html($values['title']); ?></h4>
                                                <p><?php echo esc_html($student_position); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php 
							  endif;
							 endforeach;
							endif;
							?>
                        <ul class="arrow-modern">
                            <li class="prev"><i class="fas fa-arrow-left"></i></li>
                            <li class="next"><i class="fas fa-arrow-right"></i></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <?php if(!empty($students_title)): ?>
                <div class="section-title <?php echo esc_html($color); ?>">
                    <?php if(!empty($students_sub_title)): ?>
                        <div class="intro-title"><?php echo esc_html($students_sub_title); ?></div>
                    <?php endif; ?>
                    <h2><?php echo esc_html($students_title); ?></h2>
                    <?php printf($students_desc); ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>