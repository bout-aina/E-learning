<?php
$what_we_do = '';
if(!empty($atts['what_we_do'])):
    $what_we_do = $atts['what_we_do'];
endif;
$position = '';
if(!empty($atts['position'])):
	$position = $atts['position'];
endif;
$layout = '';
if(!empty($atts['layout'])):
	$layout = $atts['layout'];
endif;
$what_we_do_title = '';
if(!empty($atts['what_we_do_title'])):
    $what_we_do_title = $atts['what_we_do_title'];
endif;
$what_we_do_sub_title = '';
if(!empty($atts['what_we_do_sub_title'])):
    $what_we_do_sub_title = $atts['what_we_do_sub_title'];
endif;
$what_we_do_desc = '';
if(!empty($atts['what_we_do_desc'])):
    $what_we_do_desc = $atts['what_we_do_desc'];
endif;
$enable_container = '';
if(!empty($atts['enable_container'])):
    $enable_container = $atts['enable_container'];
endif;
$column = '';
if(!empty($atts['column'])):
	$column = $atts['column'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
$button_text = '';
if(!empty($atts['button_text'])):
    $button_text = $atts['button_text'];
endif;
$button_link = '';
if(!empty($atts['button_link'])):
    $button_link= $atts['button_link'];
endif;
$padding= '';
if(!empty($atts['padding'])):
	$padding = $atts['padding'];
endif;
?>

<div class="features <?php echo esc_html($layout);?>">

<div class="courses <?php echo esc_html($padding);?>">


    <?php if($enable_container == true): ?>
    <div class="container">
        <?php else: ?>
        <div class="containerfull">
            <?php endif; ?>

	        <?php if(!empty($what_we_do_title)): ?>

                <?php if($position == 'position-left-button'): ?>
                    <div class="row <?php echo esc_html($position); ?>">
                        <div class="col-sm-12 col-md-9 col-lg-10">
                            <div class="mobile-center section-title with-p <?php echo esc_html($color); ?>">
                                <?php if(!empty($what_we_do_sub_title)): ?>
                                    <div class="intro-title"><?php echo esc_html($what_we_do_sub_title); ?></div>
                                <?php endif; ?>
                                <div class="headline-inline">
                                    <h2><?php echo esc_html($what_we_do_title); ?></h2>
                                </div>
                                <div class="headline-inline">
                                    <?php printf($what_we_do_desc); ?>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($button_link)): ?>
                            <div class="col-sm-12 col-md-3 col-lg-2">
                                <div class="button-right mb-25">
                                    <a href="<?php echo esc_url($button_link); ?>" class="color-one btn-custom">
                                        <?php printf($button_text); ?> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            <?php if($position == 'position-left'): ?>
                    <div class="row <?php echo esc_html($position); ?>">
                        <div class="col-lg-12">
                            <div class="section-title with-p <?php echo esc_html($color); ?>">
                                <?php if(!empty($what_we_do_sub_title)): ?>
                                    <div class="intro-title"><?php echo esc_html($what_we_do_sub_title); ?></div>
                                <?php endif; ?>
                                <h2><?php echo esc_html($what_we_do_title); ?></h2>
                                <?php printf($what_we_do_desc); ?>
                            </div>
                        </div>
                    </div>
            <?php endif;?>

            <?php if($position == 'position-center'): ?>
                    <div class="row <?php echo esc_html($position); ?>">
                        <div class="col-lg-12">
                            <div class="section-title with-p <?php echo esc_html($color); ?>">
                                <?php if(!empty($what_we_do_sub_title)): ?>
                                    <div class="intro-title"><?php echo esc_html($what_we_do_sub_title); ?></div>
                                <?php endif; ?>
                                <h2><?php echo esc_html($what_we_do_title); ?></h2>
                                <?php printf($what_we_do_desc); ?>
                            </div>
                        </div>
                    </div>
            <?php endif;?>

	        <?php endif;?>

        <div class="row">
         <?php
          if(!empty($what_we_do)):
           foreach($what_we_do as $values):
                if(!empty($values['title'])):
                    $what_we_do_content = '';
                if(!empty($values['what_we_do_content'])):
                    $what_we_do_content = $values['what_we_do_content'];
                endif;
                if(!empty($values['icon'])):
                    $icon = $values['icon'];
                endif;
                $what_we_do_button = '';
                if(!empty($values['what_we_do_button'])):
                    $what_we_do_button = $values['what_we_do_button'];
                endif;
                $what_we_do_link = '';
                if(!empty($values['what_we_do_link'])):
                    $what_we_do_link = $values['what_we_do_link'];
                endif;
                 ?>
						<?php if($column == 'column2'): ?>
						<div class="col-xs-12 col-sm-12 col-sm-4 col-md-5 col-lg-6">
						<?php endif; ?>
						<?php if($column == 'column3'): ?>
						<div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 col-lg-4">
						<?php endif; ?>
						<?php if($column == 'column4'): ?>
						<div class="col-xs-12 col-sm-12 col-sm-6 col-md-6 col-lg-3">
						<?php endif; ?>

							<?php if($layout == 'layout1'): ?>
							<div class="single-features-light animte-top text-center">
								<div class="move">
									<i class="secondary-color <?php printf($icon); ?> fa-3x"></i>
									<h5><?php echo esc_html($values['title']); ?></h5>
									<?php printf($what_we_do_content); ?>
									<?php
									if(!empty($what_we_do_link)): ?>
										<div class="feature_link">
											<a href="<?php echo esc_url($what_we_do_link); ?>">
												<?php printf($what_we_do_button); ?> <i class="fas fa-arrow-right"></i></a>
										</div>
									<?php
									endif;
									?>
								</div>
							</div>
							<?php endif; ?>

							<?php if($layout == 'layout2'): ?>
							<div class="single-features-light text-center">
								<div class="move">
                                    <div class="iconbg">
									    <i class="secondary-color <?php printf($icon); ?> fa-3x"></i>
                                    </div>
									<h5><?php echo esc_html($values['title']); ?></h5>
									<?php printf($what_we_do_content); ?>
									<?php
									if(!empty($what_we_do_link)): ?>
										<div class="feature_link_light">
											<a href="<?php echo esc_url($what_we_do_link); ?>">
												<?php printf($what_we_do_button); ?> <i class="fas fa-arrow-right"></i></a>
										</div>
									<?php
									endif;
									?>
								</div>
							</div>
							<?php endif; ?>

							<?php if($layout == 'layout3'): ?>
								<div class="grid">
									<figure class="mb20 effect-lily">
                                        <?php
                                        if(!empty($values['image']['url'])):
                                            $attachment_id = $values['image']['attachment_id'];
                                            $vultur_logoimage = wp_get_attachment_url($attachment_id, 'full');
                                            $logoimage = vultur_resize($vultur_logoimage, 400, 400 , true);
                                        endif;
                                        ?>
                                        <img src="<?php echo esc_url($logoimage); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
										<figcaption>
											<div>
												<h3><?php echo esc_html($values['title']); ?></h3>
                                                <?php printf($what_we_do_content); ?>
                                                <div class="lily-button">
                                                    <a class="btn color-one" href="<?php echo esc_url($what_we_do_link); ?>"><?php printf($what_we_do_button); ?> <i class="fas fa-arrow-right"></i></a>
                                                </div>
											</div>
										</figcaption>
									</figure>
								</div>
							<?php endif; ?>

							<?php if($layout == 'layout4'): ?>
							<div class="grid">
								<figure class="mb20 effect-bubba">
									<?php
									if(!empty($values['image']['url'])):
										$attachment_id = $values['image']['attachment_id'];
										$vultur_logoimage = wp_get_attachment_url($attachment_id, 'full');
										$logoimage = vultur_resize($vultur_logoimage, 400, 400 , true);
									endif;
									?>
									<img src="<?php echo esc_url($logoimage); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
									<figcaption>
										<h3><?php echo esc_html($values['title']); ?></h3>
										<?php printf($what_we_do_content); ?>
										<a href="<?php echo esc_url($what_we_do_link); ?>"><?php printf($what_we_do_button); ?></a>
									</figcaption>
								</figure>
							</div>
							<?php endif; ?>

                            <?php if($layout == 'layout5'): ?>
                                <?php
                                $widget_bgimage = '';
                                if(!empty($values['image']['url'])):
                                    $widget_bgimage  = $values['image']['url'];
                                endif;
                                $bg_image_url = '';
                                if(!empty($values['image'])):
                                    $bg_image_url = 'background-image:url(' .$widget_bgimage. ');';
                                endif;
                                ?>
                                        <div class="flip-wwd">
                                            <div class="hovercontainer">
                                                <div class="front" style="<?php printf($bg_image_url); ?>">
                                                    <div class="inner">
	                                                    <div class="wrap-icon">
	                                                    <i class="category-icon <?php printf($icon); ?> fa-3x"></i>
	                                                    </div>
                                                        <h3><?php echo esc_html($values['title']); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="back" style="<?php printf($bg_image_url); ?>">
                                                    <div class="inner">
                                                        <?php printf($what_we_do_content); ?>
                                                        <a class="btn color-one" href="<?php echo esc_url($what_we_do_link); ?>"><?php printf($what_we_do_button); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                             <?php endif; ?>

                    </div>
                <?php
                  endif;
                 endforeach;
                endif;
                ?>
        </div>
    </div>
</div>
</div>