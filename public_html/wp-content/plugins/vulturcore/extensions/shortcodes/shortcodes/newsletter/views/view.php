<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
    $background_image = '';
    if(!empty($atts['newsletter_image']['url'])):
        $background_image = $atts['newsletter_image']['url'];
    endif;
	$bg_image_url = '';
	if(!empty($background_image)):
		$bg_image_url = 'background-image:url(' .$background_image. ');';
	endif;
    $heading = '';
    if(!empty($atts['heading'])):
        $heading = $atts['heading'];
    endif;
	$newsletter_content = '';
    if(!empty($atts['newsletter_desc'])):
	    $newsletter_content = $atts['newsletter_desc'];
    endif;
    $cta_text = '';
    if(!empty($atts['cta_text'])):
        $cta_text = $atts['cta_text'];
    endif;
    $cta_placeholder = '';
    if(!empty($atts['cta_placeholder'])):
        $cta_placeholder = $atts['cta_placeholder'];
    endif;
    $button_link = '';
    if(!empty($atts['button_link'])):
        $button_link = $atts['button_link'];
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

<div id="instructor" class="call-to-action-area bg-widget <?php echo esc_html($position); ?>" style="<?php printf($bg_image_url); ?>">
    <div class="container">

            <?php if($position == 'position-left'): ?>
            <div class="row">
                <div class="col-md-7">
                    <?php endif; ?>

                    <?php if($position == 'position-center'): ?>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <?php endif; ?>

                            <?php if($position == 'position-right'): ?>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <?php endif; ?>

                <div class="call-to-action-content <?php echo esc_html($color); ?>">
                    <div class="newsletter-content">
                        <h2><?php echo esc_html($heading); ?></h2>
                    </div>
                    <div>
                        <?php if(!empty($newsletter_content)): ?>
                            <?php printf($newsletter_content); ?>
                        <?php endif; ?>
                    </div>
                    <div class="call-to-action-btn">
                        <div id="newsletter">
                        <div class=" ">
                        <div class="subscribe-form-pt">
                            <form class="themeioan-form-newsletter form" action="<?php echo esc_url($button_link); ?>">
                                <div class="newslleter-call">
                                    <input class="input-text required-field" type="text" placeholder="<?php echo esc_attr($cta_placeholder); ?>"/>
                                    <input class="newsletter-submit color-two button" type="submit" value="<?php echo esc_attr($cta_text); ?>"/>
                                </div>
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>