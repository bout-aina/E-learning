<?php if(!defined('FW')) {
	die( 'Forbidden' );
}
$our_counter = '';
$idv = 1;
if(!empty($atts['our_counter'])):
  $our_counter = $atts['our_counter'];
endif;
$counter_title = '';
if(!empty($atts['counter_title'])):
    $counter_title = $atts['counter_title'];
endif;
$counter_sub_title = '';
if(!empty($atts['counter_sub_title'])):
    $counter_sub_title = $atts['counter_sub_title'];
endif;
$counter_desc = '';
if(!empty($atts['counter_desc'])):
    $counter_desc = $atts['counter_desc'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
$padding= '';
if(!empty($atts['padding'])):
    $padding = $atts['padding'];
endif;
$about_image = '';
if(!empty($atts['about_image']['url'])):
	$about_image = $atts['about_image']['url'];
endif;
$bg_image_url = '';
if(!empty($about_image)):
	$bg_image_url = 'background-image:url(' .$about_image. ');';
endif;

$bg_image = '';
if(!empty($atts['bg_image']['url'])):
	$bg_image = $atts['bg_image']['url'];
endif;
$bgcontainer_image_url = '';
if(!empty($bg_image)):
	$bgcontainer_image_url = 'background-image:url(' .$bg_image. ');';
endif;
$layout = '';
if(!empty($atts['layout'])):
	$layout = $atts['layout'];
endif;
?>

<?php if($layout == 'layout1'): ?>
<div id="counter" class="<?php echo esc_html($padding);?>">
    <div class="container">
	    <?php if(!empty($counter_title)): ?>
        <div class="row <?php echo esc_html($position); ?>">
            <div class="col-lg-12">
                <div class="section-title with-p <?php echo esc_html($color); ?>">
                    <?php if(!empty($counter_sub_title)): ?>
                    <div class="section-title-uppercase"><?php echo esc_html($counter_sub_title); ?></div>
                    <?php endif; ?>
		                <h2><?php echo esc_html($counter_title); ?></h2>
                    <?php printf($counter_desc); ?>
                </div>
            </div>
        </div>
	    <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                        <?php
                        if(!empty($our_counter)):
                            foreach($our_counter as $values):
                                if(!empty($values['icon'])):
                                    $icon = $values['icon'];
                                endif;
                                $percent = '';
                                if(!empty($values['counter_number'])):
                                    $percent  = $values['counter_number'];
                                endif;
                                ?>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="info">
                                            <div class="themeioan_counter <?php echo esc_html($color); ?>">
                                                <i class="<?php printf($icon); ?> fa-3x"></i>
                                                <h4><?php echo esc_html($percent);?></h4>
                                                <?php
                                                if(!empty($values['title'])):
                                                    echo '<p>'.esc_html($values['title']).'</p>';
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                </div>
                                <?php
                                $idv++;
                            endforeach;
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if($layout == 'layout2'): ?>
<div id="counter" class="counter-widget-top <?php echo esc_html($padding);?>" style="<?php printf($bgcontainer_image_url); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php
					if(!empty($our_counter)):
						foreach($our_counter as $values):
							if(!empty($values['icon'])):
								$icon = $values['icon'];
							endif;
							$percent = '';
							if(!empty($values['counter_number'])):
								$percent  = $values['counter_number'];
							endif;
							?>
							<div class="col-xs-6 col-sm-6 col-md-3">
								<div class="info">
									<div class="themeioan_counter <?php echo esc_html($color); ?>">
										<i class="<?php printf($icon); ?> fa-3x"></i>
										<h4><?php echo esc_html($percent);?></h4>
										<?php
										if(!empty($values['title'])):
											echo '<p>'.esc_html($values['title']).'</p>';
										endif;
										?>
									</div>
								</div>
							</div>
							<?php
							$idv++;
						endforeach;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if($layout == 'layout3'): ?>
    <div id="counter" class="<?php echo esc_html($layout);?> <?php echo esc_html($padding);?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <?php if(!empty($counter_title)): ?>
                    <div class="row <?php echo esc_html($position); ?>">
                        <div class="col-lg-12">
                            <div class="section-title with-p <?php echo esc_html($color); ?>">
                                <?php if(!empty($counter_sub_title)): ?>
                                    <div class="section-title-uppercase"><?php echo esc_html($counter_sub_title); ?></div>
                                <?php endif; ?>
                                <h2><?php echo esc_html($counter_title); ?></h2>
                                <?php printf($counter_desc); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php
                        if(!empty($our_counter)):
                            foreach($our_counter as $values):
                                if(!empty($values['icon'])):
                                    $icon = $values['icon'];
                                endif;
                                $percent = '';
                                if(!empty($values['counter_number'])):
                                    $percent  = $values['counter_number'];
                                endif;
                                ?>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="info">
                                        <div class="themeioan_counter <?php echo esc_html($color); ?>">
                                            <i class="<?php printf($icon); ?> fa-3x"></i>
                                            <h4><?php echo esc_html($percent);?></h4>
                                            <?php
                                            if(!empty($values['title'])):
                                                echo '<p>'.esc_html($values['title']).'</p>';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $idv++;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
