<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
    $background_image = '';
    if(!empty($atts['calltoaction_image']['url'])):
        $background_image = $atts['calltoaction_image']['url'];
    endif;
	$bg_image_url = '';
	if(!empty($background_image)):
		$bg_image_url = 'background-image:url(' .$background_image. ');';
	endif;
    $heading = '';
    if(!empty($atts['heading'])):
        $heading = $atts['heading'];
    endif;
    $content = '';
    if(!empty($atts['calltoaction_desc'])):
        $content = $atts['calltoaction_desc'];
    endif;
    $cta_text = '';
    if(!empty($atts['cta_text'])):
        $cta_text = $atts['cta_text'];
    endif;
    $button_link = '';
    if(!empty($atts['button_link'])):
        $button_link = $atts['button_link'];
    endif;
	$position = '';
	if(!empty($atts['position'])):
		$position = $atts['position'];
	endif;
	$layout = '';
	if(!empty($atts['layout'])):
		$layout = $atts['layout'];
	endif;
	$color = '';
	if(!empty($atts['color'])):
		$color = $atts['color'];
	endif;
	if(function_exists( 'fw_get_db_settings_option' )):	
	$vultur_data = fw_get_db_settings_option();
    endif;
?>

<div id="instructor" class="call-to-action-area bg-widget <?php echo esc_html($position); ?> <?php echo esc_html($layout);?>" style="<?php printf($bg_image_url); ?>">
    <div class="container">

            <?php if($position == 'position-left'): ?>
            <div class="row">
            <div class="col-md-8">
                <?php endif; ?>

            <?php if($position == 'position-center'): ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
            <?php endif; ?>

	        <?php if($position == 'position-right'): ?>
             <div class="row">
			<div class="col-md-6"></div>
	        <div class="col-md-6">
	        <?php endif; ?>

                <div class="call-to-action-content <?php echo esc_html($color); ?>">
                    <div class="post-heading-left ">
                        <h2><?php echo esc_html($heading); ?></h2>
                    </div>
                    <div>
                        <?php if(!empty($content)): ?>
                            <?php printf($content); ?>
                        <?php endif; ?>
                    </div>
                    <div class="call-to-action-btn">
                        <?php
                        if(!empty($button_link)): ?>
                            <a href="<?php echo esc_url($button_link); ?>">
                                <?php printf($cta_text); ?> <i class="fas fa-arrow-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>