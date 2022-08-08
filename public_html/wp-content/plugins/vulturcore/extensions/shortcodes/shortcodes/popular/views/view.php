<?php if(!defined('FW')) {
	die('Forbidden');
}
$popular_heading = '';
if(!empty($atts['popular_heading'])):
   $popular_heading = $atts['popular_heading'];
endif;
$popular_sub_heading = '';
if(!empty($atts['popular_sub_heading'])):
   $popular_sub_heading = $atts['popular_sub_heading'];
endif;
$content = '';
if(!empty($atts['content'])):
	$content = $atts['content'];
endif;
$content_sub = '';
if(!empty($atts['content_sub'])):
	$content_sub = $atts['content_sub'];
endif;
$popular_detail = '';
if(!empty($atts['popular_detail'])):
   $popular_detail = $atts['popular_detail'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
$layout = '';
if(!empty($atts['layout'])):
    $layout = $atts['layout'];
endif;
if(function_exists( 'fw_get_db_settings_option' )):
   $vultur_data = fw_get_db_settings_option();
endif;
?>
<div id="popular-widget" class="wrap-bg ">
<div class="container">
    <?php if(!empty($popular_heading)):?>
			<div class="vultur_heading_wrapper">
                <div class="row <?php echo esc_html($position); ?>">
                    <div class="col-lg-12">
                        <div class="section-title with-p <?php echo esc_html($color); ?>">
                            <span><?php echo esc_html($popular_sub_heading); ?></span>
                            <h2><?php echo esc_html($popular_heading); ?></h2>
	                        <?php printf($content); ?>
                        </div>
                    </div>
                </div>
			</div>
    <?php endif; ?>
		<div class="vultur_contact_details">
			<div class="row">
			<?php
			if(!empty($popular_detail)):
				foreach($popular_detail as $addinfo):
					$cs_bg_image = '';
					if(!empty($addinfo['add_bg_image']['url'])):
						$cs_bg_image = $addinfo['add_bg_image']['url'];
					endif;
					$bg_image_url = '';
					if(!empty($cs_bg_image)):
						$bg_image_url = 'background-image:url(' .$cs_bg_image. ');';
					endif;
                    $add_bg_color= '';
                    if(!empty($addinfo['add_bg_color'])):
                        $add_bg_color = $addinfo['add_bg_color'];
                    endif;
                    $bg_color = '';
                    if(!empty($add_bg_color)):
                        $bg_color = 'background-color:' .$add_bg_color. ';';
                    endif;
					$title = '';
					if(!empty($addinfo['title'])):
						$title = $addinfo['title'];
					endif;
					$popular_info = '';
					if(!empty($addinfo['popular_info'])):
						$popular_info = $addinfo['popular_info'];
					endif;
                    $button_text = '';
                    if(!empty($addinfo['button_text'])):
                        $button_text = $addinfo['button_text'];
                    endif;
                    $button_link = '';
                    if(!empty($addinfo['button_link'])):
                        $button_link = $addinfo['button_link'];
                    endif;

                    if(!empty($addinfo['add_bg_image']['url'])):
                        $attachment_id = $addinfo['add_bg_image']['attachment_id'];
                        $cs_bg_image_crop = wp_get_attachment_url($attachment_id, 'full');
                        $image_crop = vultur_resize($cs_bg_image_crop, 300, 300 , true);
                    endif;
						?>

                <?php if($layout == 'layout1'): ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="vultur_contact_details_box details_box1 text-center" style=<?php printf($bg_image_url); printf($bg_color); ?>>
								<?php if(!empty($title)):?>
									<h4><?php echo esc_html($title); ?></h4>
								<?php
								endif;
                                if(!empty($popular_info)):
								    print($popular_info);
                                endif; ?>
                                <?php
                                if(!empty($button_link)): ?>
                                    <a href="<?php echo esc_url($button_link); ?>" class="mt-25 btn color-three">
                                        <?php printf($button_text); ?> <i class="fas fa-arrow-right"></i></a>
                                <?php endif; ?>
							</div>
						</div>
                <?php endif; ?>
                <?php if($layout == 'layout2'): ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="vultur_contact_details_box details_box1 text-left" style=<?php printf($bg_image_url); printf($bg_color); ?>>
								<?php if(!empty($title)):?>
									<h4><?php echo esc_html($title); ?></h4>
								<?php
								endif;
                                if(!empty($popular_info)):
								    print($popular_info);
                                endif; ?>
                                <?php
                                if(!empty($button_link)): ?>
                                    <a href="<?php echo esc_url($button_link); ?>" class="mt-25 btn color-three">
                                        <?php printf($button_text); ?> <i class="fas fa-arrow-right"></i></a>
                                <?php endif; ?>
							</div>
						</div>
                <?php endif; ?>

                    <?php if($layout == 'layout3'): ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="vultur_contact_details_box details_box1 text-left" style=<?php printf($bg_image_url); printf($bg_color); ?>>
                            <?php if(!empty($title)):?>
                                <h4><?php echo esc_html($title); ?></h4>
                            <?php
                            endif;
                            if(!empty($popular_info)):
                                print($popular_info);
                            endif; ?>
                            <?php
                            if(!empty($button_link)): ?>
                                <a href="<?php echo esc_url($button_link); ?>" class="mt-25 btn color-three">
                                    <?php printf($button_text); ?> <i class="fas fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                    <?php if($layout == 'layout4'): ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 <?php echo esc_html($layout);?>">
                        <div class="vultur_contact_details_box details_box1 color-dark mobile-center" style=<?php printf($bg_color); ?>>
                            <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-12 col-lg-4">
                                <div class="img-mobile-center">
                                <img src="<?php echo esc_url($image_crop); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-9 col-md-12 col-lg-8">
                            <?php if(!empty($title)):?>
                                <h4><?php echo esc_html($title); ?></h4>
                            <?php
                            endif;
                            if(!empty($popular_info)):
                                print($popular_info);
                            endif; ?>
                            <?php
                            if(!empty($button_link)): ?>
                                <a href="<?php echo esc_url($button_link); ?>" class="mt-15 btn color-two">
                                    <?php printf($button_text); ?> <i class="fas fa-arrow-right"></i></a>
                            <?php endif; ?>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endif; ?>
					<?php
				endforeach;
			endif;
			?>
		</div>
</div>
</div>
</div>
