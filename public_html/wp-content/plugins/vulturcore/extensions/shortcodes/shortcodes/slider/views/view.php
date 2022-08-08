<?php
$teams_logo = '';
if(!empty($atts['slider'])):
    $teams_logo = $atts['slider'];
endif;
?>

<div class="owl-carousel owl-theme">
 <?php
  if(!empty($teams_logo)):
   foreach($teams_logo as $values):
        if(!empty($values['title'])):
        $skill_bgimage = '';
        if(!empty($values['slider_image']['url'])):
            $skill_bgimage  = $values['slider_image']['url'];
        endif;
        $bg_image_url = '';
        if(!empty($values['slider_image'])):
            $bg_image_url = 'background-image:url(' .$skill_bgimage. ');';
        endif;
            $slider_content = '';
        if(!empty($values['slider_content'])):
            $slider_content = $values['slider_content'];
        endif;
            $title = '';
        if(!empty($values['title'])):
            $title = $values['title'];
        endif;
            $subtitle = '';
        if(!empty($values['subtitle'])):
            $subtitle = $values['subtitle'];
        endif;
            $button_text = '';
        if(!empty($values['button_text'])):
            $button_text = $values['button_text'];
        endif;
            $button_link = '';
        if(!empty($values['button_link'])):
            $button_link = $values['button_link'];
        endif;
            $play_button_link = '';
        if(!empty($values['play_button_link'])):
            $play_button_link = $values['play_button_link'];
        endif;
		 $button_text_light = '';
		 if(!empty($values['button_text_light'])):
			 $button_text_light = $values['button_text_light'];
		 endif;
            $button_link_light = '';
        if(!empty($values['button_link_light'])):
	        $button_link_light = $values['button_link_light'];
        endif;
        $position = '';
        if(!empty($values['position'])):
            $position = $values['position'];
        endif;
        $slider_height = '';
        if(!empty($values['slider_height'])):
            $slider_height = $values['slider_height'];
        endif;
        $search_course = '';
        if(!empty($values['search_course'])):
            $search_course = $values['search_course'];
        endif;
        $search_course_text = '';
        if(!empty($values['search_course_text'])):
           $search_course_text = $values['search_course_text'];
        endif;
     ?>
        <?php if($slider_height == false): ?>
            <div class="<?php echo esc_html($position); ?> header-content-full header-content " role="banner" style="<?php printf($bg_image_url); ?>">
        <?php else: ?>
            <div class="<?php echo esc_html($position); ?> equal-margin header-content" role="banner" style="<?php printf($bg_image_url); ?>">
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 header-area">
                    <div class="header-area-inner header-text">
                        <?php if(!empty($subtitle)): ?>
                            <div><span class="subtitle "><?php printf($subtitle); ?></span></div>
                        <?php endif; ?>
                        <?php if(!empty($title)): ?>
                            <h1 class="title"><?php printf($title); ?></h1>
                        <?php endif; ?>

                        <?php printf($slider_content); ?>

                        <?php if($search_course): ?>
                        <div class="slidersearch header-search">
                            <form method="get" name="search-course" class="learn-press-search-course-form" action="<?php echo home_url( '/' ); ?>">
                                <input type="text" name="s" class="search-course-input" value="" placeholder="<?php printf($search_course_text); ?>">
                                <input type="hidden" name="ref" value="course">
                                <button class="lp-button button search-course-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($button_text) || !empty($play_button_link)): ?>
                            <div class="btn-section">
                                <?php if(!empty($button_link)): ?>
                                    <a href="<?php echo esc_url($button_link); ?>" class="color-one btn-custom">
                                        <?php printf($button_text); ?></a>
                                <?php endif; ?>
                                <?php if(!empty($button_link_light)): ?>
                                    <a href="<?php echo esc_url($button_link_light); ?>" class="color-three btn-custom">
                                        <?php printf($button_text_light); ?></a>
                                <?php endif; ?>
                                <?php
                                if(!empty($play_button_link)): ?>
                                    <div class="<?php if(empty($button_link)) echo 'play-center' ?> video-relative">
                                        <a href="<?php echo esc_url($play_button_link); ?>" class="video-btn popup-video ">
                                            <i class="fas fa-play"></i>
                                            <span class="ripple orangebg"></span>
                                            <span class="ripple orangebg"></span>
                                            <span class="ripple orangebg"></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      endif;
     endforeach;
    endif;
    ?>
</div>