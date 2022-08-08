<?php if(!defined('FW')) {
	die('Forbidden');
}
if(!empty($atts['image']['url'])):
    $attachment_id = $atts['image']['attachment_id'];
    $theme_image = wp_get_attachment_url($attachment_id, 'full');
    $image = vultur_resize($theme_image, 600, 600 , false);
endif;
$layout = '';
if(!empty($atts['layout'])):
    $layout = $atts['layout'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$content_sub = '';
if(!empty($atts['content_sub'])):
	$content_sub = $atts['content_sub'];
endif;
$form_heading_sub = '';
if(!empty($atts['form_heading_sub'])):
	$form_heading_sub = $atts['form_heading_sub'];
endif;
$form_heading = '';
if(!empty($atts['form_heading'])):
    $form_heading = $atts['form_heading']; 
endif;
$form_shortcode = '';
if(!empty($atts['form_shortcode'])):
  $form_shortcode = $atts['form_shortcode'];
endif;
$googlemap_ifram = '';
if(!empty($atts['googlemap_ifram'])):
    $googlemap_ifram = $atts['googlemap_ifram'];  
endif;
if(function_exists( 'fw_get_db_settings_option' )):	
   $vultur_data = fw_get_db_settings_option();
endif;
?>

<?php if($layout == 'layout1'): ?>
<div class="wrap-bg">
    <div class="container">
        <div class="vultur_contact_box">
            <div class="row <?php echo esc_html($position); ?>">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title vultur_contact_info padding-right70">
                        <?php if(!empty($form_heading_sub)): ?>
                            <div class="intro-title"><?php echo esc_html($form_heading_sub); ?></div>
                        <?php endif; ?>
                        <?php if(!empty($form_heading)): ?>
                            <h2><?php echo esc_html($form_heading); ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($content_sub)): ?>
                            <?php printf($content_sub); ?>
                        <?php endif; ?>

                        <div class="wpcf7">
                            <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="<?php echo esc_url($image); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="vultur_contact_map">
        <?php
        if(!empty($googlemap_ifram)):
            print($googlemap_ifram);
        else:
            ?>
            <div class="sl_color_map">
                <div id="map"></div>
            </div>
        <?php
        endif;
        ?>
    </div>
<?php endif; ?>

<?php if($layout == 'layout2'): ?>
<div class="wrap-bg">
    <div class="container">
        <div class="vultur_contact_box">
            <div class="row <?php echo esc_html($position); ?>">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="vultur_contact_info padding-right70">
                        <?php if(!empty($form_heading_sub)): ?>
                            <div class="intro-title"><?php echo esc_html($form_heading_sub); ?></div>
                        <?php endif; ?>
                        <?php if(!empty($form_heading)): ?>
                            <h2><?php echo esc_html($form_heading); ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($content_sub)): ?>
                            <?php printf($content_sub); ?>
                        <?php endif; ?>

                        <div class="wpcf7">
                            <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        if(!empty($googlemap_ifram)):
                            print($googlemap_ifram);
                        else:
                            ?>
                        <div class="vultur_contact_map">
                                <div class="sl_color_map">
                                    <div id="map"></div>
                                </div>
                        </div>
                        <?php
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if($layout == 'layout3'): ?>
<div class="wrap-bg">
    <div class="container">
        <div class="vultur_contact_box">
            <div class="row <?php echo esc_html($position); ?>">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="<?php echo esc_url($image); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="vultur_contact_info padding-left70">
                        <?php if(!empty($form_heading_sub)): ?>
                            <div class="section-title-uppercase"><?php echo esc_html($form_heading_sub); ?></div>
                        <?php endif; ?>

                        <?php if(!empty($form_heading)): ?>
                            <h2><?php echo esc_html($form_heading); ?></h2>
                        <?php endif; ?>

                        <?php if(!empty($content_sub)): ?>
                            <?php printf($content_sub); ?>
                        <?php endif; ?>

                        <div class="wpcf7">
                            <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="vultur_contact_map">
        <?php
        if(!empty($googlemap_ifram)):
            print($googlemap_ifram);
        else:
            ?>
            <div class="vultur_contact_map">
                <div class="sl_color_map">
                    <div id="map"></div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
<?php endif; ?>

<?php if($layout == 'layout4'): ?>
    <div class="vultur_contact_info">
        <?php if(!empty($form_heading_sub)): ?>
            <div class="intro-title"><?php echo esc_html($form_heading_sub); ?></div>
        <?php endif; ?>

        <?php if(!empty($form_heading)): ?>
            <h2><?php echo esc_html($form_heading); ?></h2>
        <?php endif; ?>

        <?php if(!empty($content_sub)): ?>
            <?php printf($content_sub); ?>
        <?php endif; ?>

        <div class="wpcf7">
            <?php echo do_shortcode($form_shortcode); ?>
        </div>
    </div>
<?php endif; ?>


<?php if($layout == 'layout5'): ?>
	<div class="wrap-bg <?php echo esc_html($layout);?>">
		<div class="container">
			<div class="vultur_contact_box">
				<div class="row <?php echo esc_html($position); ?>">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
						<div class="img-border10">
							<img src="<?php echo esc_url($image); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
						<div class="vultur_contact_info">
							<?php if(!empty($form_heading_sub)): ?>
                                <div class="intro-title"><?php echo esc_html($form_heading_sub); ?></div>
							<?php endif; ?>
							<?php if(!empty($form_heading)): ?>
								<h2><?php echo esc_html($form_heading); ?></h2>
							<?php endif; ?>
							<?php if(!empty($content_sub)): ?>
								<?php printf($content_sub); ?>
							<?php endif; ?>

							<div class="wpcf7">
								<?php echo do_shortcode($form_shortcode); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
