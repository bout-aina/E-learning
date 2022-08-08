<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$heading = '';
if(!empty($atts['heading'])):
    $heading = $atts['heading'];
endif;
$heading_sub = '';
if(!empty($atts['heading_sub'])):
    $heading_sub = $atts['heading_sub'];
endif;
$content = '';
if(!empty($atts['content'])):
    $content = $atts['content'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
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
if(function_exists( 'fw_get_db_settings_option' )):
$vultur_data = fw_get_db_settings_option();
endif;
?>
<?php if($position == 'position-left-button'): ?>
    <div class="row <?php echo esc_html($position); ?>">
        <div class="col-sm-12 col-md-9 col-lg-10">
            <div class="mobile-center section-title <?php echo esc_html($color); ?>">
                <?php if(!empty($heading_sub)): ?>
                    <div class="section-title-uppercase"><?php echo esc_html($heading_sub); ?></div>
                <?php endif; ?>
                <div class="headline-inline">
                    <h2><?php echo esc_html($heading); ?></h2>
                </div>
                <div class="headline-inline">
                    <?php printf($content); ?>
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
            <div class="section-title">
                <?php if(!empty($heading_sub)): ?>
                    <div class="section-title-uppercase"><?php echo esc_html($heading_sub); ?></div>
                <?php endif; ?>
                <h2><?php echo esc_html($heading); ?></h2>
                <?php printf($content); ?>
            </div>
        </div>
    </div>
<?php endif;?>

<?php if($position == 'position-center'): ?>
    <div class="row <?php echo esc_html($position); ?>">
        <div class="col-lg-12">
            <div class="section-title">
                <?php if(!empty($heading_sub)): ?>
                    <div class="section-title-uppercase"><?php echo esc_html($heading_sub); ?></div>
                <?php endif; ?>
                <h2><?php echo esc_html($heading); ?></h2>
                <?php printf($content); ?>
            </div>
        </div>
    </div>
<?php endif;?>