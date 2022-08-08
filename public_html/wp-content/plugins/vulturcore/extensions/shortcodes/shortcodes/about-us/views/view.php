<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
	$about_image = '';
    if(!empty($atts['about_image']['url'])):
        $about_image = $atts['about_image']['url'];
    endif;
    $bg_image_url = '';
    if(!empty($about_image)):
        $bg_image_url = 'background-image:url(' .$about_image. ');';
    endif;
    $heading = '';
    if(!empty($atts['heading'])):
        $heading = $atts['heading'];
    endif;
    $heading_sub = '';
    if(!empty($atts['heading_sub'])):
        $heading_sub = $atts['heading_sub'];
    endif;
    $descreption = '';
    if(!empty($atts['about_desc'])):
        $descreption = $atts['about_desc'];
    endif;
    $about_text = '';
    if(!empty($atts['about_text'])):
        $about_text = $atts['about_text'];
    endif;
    $about_link = '';
    if(!empty($atts['about_link'])):
        $about_link = $atts['about_link'];
    endif;
    $about_text_light = '';
    if(!empty($atts['about_text_light'])):
	    $about_text_light = $atts['about_text_light'];
    endif;
    $about_link_light = '';
    if(!empty($atts['about_link_light'])):
	    $about_link_light = $atts['about_link_light'];
    endif;
	if(function_exists( 'fw_get_db_settings_option' )):	
	$vultur_data = fw_get_db_settings_option();
    endif;
    $text_position = '';
    if(!empty($atts['text_position'])):
        $text_position = $atts['text_position'];
    endif;
	$color = '';
	if(!empty($atts['color'])):
		$color = $atts['color'];
	endif;
    $layout = '';
    if(!empty($atts['layout'])):
        $layout = $atts['layout'];
    endif;
	$padding= '';
	if(!empty($atts['padding'])):
		$padding = $atts['padding'];
	endif;
?>

<?php if($layout == 'layout1'): ?>
<div class="why-us <?php echo esc_html($color); ?>">
    <div class="why-us-container"  style="<?php printf($bg_image_url); ?>">
    <div class="container">
    <div class="row">
        <?php if($text_position == true): ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6">
            <div class="white-box-large">
                <div class="section-title">
                        <?php if(!empty($heading_sub)): ?>
                            <div class="section-title-uppercase"><?php echo esc_html($heading_sub); ?></div>
                        <?php endif; ?>
                        <h2><?php echo esc_html($heading); ?></h2>
                </div>
                <?php if(!empty($descreption)): ?>
                    <div class="about_content">
                        <?php printf($descreption); ?>
                        <?php
                        if(!empty($about_link)): ?>
	                        <div class="mt-25">

		                        <?php if(!empty($about_text)): ?>
			                        <a href="<?php echo esc_url($about_link); ?>" class="mr-15 color-one btn-custom">
				                        <?php printf($about_text); ?></a>
		                        <?php endif; ?>

		                        <?php if(!empty($about_text_light)): ?>
			                        <a href="<?php echo esc_url($about_link_light); ?>" class="button-light">
				                        <?php printf($about_text_light); ?></a>
		                        <?php endif; ?>

	                        </div>
                        <?php
                        endif;
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            </div>
        <?php endif; ?>
        <?php if($text_position == false): ?>
            <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6">
                <div class="white-box-large">
                <div class="section-title">
                        <?php if(!empty($heading_sub)): ?>
                            <div class="section-title-uppercase"><?php echo esc_html($heading_sub); ?></div>
                        <?php endif; ?>
                        <h2><?php echo esc_html($heading); ?></h2>
                </div>
                <?php if(!empty($descreption)): ?>
                    <div class="about_content">
                        <?php printf($descreption); ?>
                        <?php
                        if(!empty($about_link)): ?>
	                        <div class="mt-25">

		                        <?php if(!empty($about_text)): ?>
			                        <a href="<?php echo esc_url($about_link); ?>" class="mr-15 color-one btn-custom">
				                        <?php printf($about_text); ?></a>
		                        <?php endif; ?>

		                        <?php if(!empty($about_text_light)): ?>
			                        <a href="<?php echo esc_url($about_link_light); ?>" class="button-light">
				                        <?php printf($about_text_light); ?></a>
		                        <?php endif; ?>

	                        </div>
                        <?php
                        endif;
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6">
            </div>
        <?php endif; ?>
    </div>
    </div>
    </div>
</div>
<?php endif; ?>


<?php if($layout == 'layout2'): ?>

<?php if($padding == 'wrap-bg'): ?>
	<div class="why-us wrap-bg">
<?php endif; ?>
<?php if($padding == 'wrap-bg-small'): ?>
	<div class="why-us wrap-bg-small">
<?php endif; ?>
<?php if($padding == 'wrap-bg-topzero'): ?>
	<div class="why-us wrap-bg-topzero">
<?php endif; ?>
<?php if($padding == 'wrap-bg-top50'): ?>
	<div class="why-us wrap-bg-top50">
<?php endif; ?>

    <div class="container">
        <div class="row align-items-center">
            <?php if($text_position == true): ?>
                <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6">
                    <div class="image-shadow">
                        <img src="<?php echo esc_url($about_image); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                            <?php if(!empty($heading_sub)): ?>
                                <div class="intro-title"><?php echo esc_html($heading_sub); ?></div>
                            <?php endif; ?>
                            <h2><?php echo esc_html($heading); ?></h2>
                    </div>
                    <?php if(!empty($descreption)): ?>
                        <div class="about_content">
                            <?php printf($descreption); ?>
                            <?php
                            if(!empty($about_link)): ?>
                                <div class="mt-25">

	                                <?php if(!empty($about_text)): ?>
		                                <a href="<?php echo esc_url($about_link); ?>" class="mr-15 color-one btn-custom">
			                                <?php printf($about_text); ?></a>
	                                <?php endif; ?>

	                                <?php if(!empty($about_text_light)): ?>
		                                <a href="<?php echo esc_url($about_link_light); ?>" class="button-light">
			                                <?php printf($about_text_light); ?></a>
	                                <?php endif; ?>

                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                </div>
            <?php endif; ?>
            <?php if($text_position == false): ?>
                <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6">
                    <div class="about-content">
                    <div class="section-title">
                            <?php if(!empty($heading_sub)): ?>
                                <div class="intro-title"><?php echo esc_html($heading_sub); ?></div>
                            <?php endif; ?>
                            <h2><?php echo esc_html($heading); ?></h2>
                    </div>
                    <?php if(!empty($descreption)): ?>
                        <div class="about_content">
                            <?php printf($descreption); ?>
                            <?php
                            if(!empty($about_link)): ?>
	                            <div class="mt-25">

		                            <?php if(!empty($about_text)): ?>
			                            <a href="<?php echo esc_url($about_link); ?>" class="mr-15 color-one btn-custom">
				                            <?php printf($about_text); ?></a>
		                            <?php endif; ?>

		                            <?php if(!empty($about_text_light)): ?>
			                            <a href="<?php echo esc_url($about_link_light); ?>" class="button-light">
				                            <?php printf($about_text_light); ?></a>
		                            <?php endif; ?>

	                            </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6">
                    <div class="image-shadow">
                        <img src="<?php echo esc_url($about_image); ?>"  alt="<?php echo esc_attr($values['title']); ?>"/>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
<?php endif; ?>
