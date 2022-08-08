<?php if(!defined('FW')) {
	die( 'Forbidden' );
}
$progress_title = '';
if(!empty($atts['progress_title'])):
    $progress_title = $atts['progress_title'];
endif;
$progress_sub_title = '';
if(!empty($atts['progress_sub_title'])):
    $progress_sub_title = $atts['progress_sub_title'];
endif;
$progress_desc = '';
if(!empty($atts['progress_desc'])):
    $progress_desc = $atts['progress_desc'];
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
$progress = '';
$idv = 1;
if(!empty($atts['progress'])):
    $progress = $atts['progress'];
endif;
?>

<div class="container progress-widget">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6 progress-bg" style="<?php printf($bg_image_url); ?>">
	</div>

	<div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6">
		<?php if(!empty($progress_title)): ?>
					<div class="progress-content">
					<div class="section-title <?php echo esc_html($color); ?>">
						<?php if(!empty($progress_sub_title)): ?>
                            <div class="section-title-uppercase"><?php echo esc_html($progress_sub_title); ?></div>
						<?php endif; ?>
						<h2><?php echo esc_html($progress_title); ?></h2>
						<?php printf($progress_desc); ?>

                        <?php
                        if(!empty($progress)):
                            foreach($progress as $values):
                                if(!empty($values['icon'])):
                                    $icon = $values['icon'];
                                endif;
                                $progress_number = '';
                                if(!empty($values['progress_number'])):
                                    $progress_number  = $values['progress_number'];
                                endif;
                                ?>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo esc_html($progress_number);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html($progress_number);?>%">
                                    </div>
                                    <span class="progress-type"><?php echo esc_html($values['title']);?></span>
                                    <span class="progress-completed"> <?php echo esc_html($progress_number);?>%</span>
                                </div>

                                <?php
                                $idv++;
                            endforeach;
                        endif;
                        ?>


                    </div>
					</div>
		<?php endif; ?>
	</div>
	</div>
</div>
