<?php
/**
 * archive course page
 * @package Education_LMS
 */
get_header();
$theme_sidebar = $vultur_data = '';
if (function_exists( 'fw_get_db_settings_option' )):
    $vultur_data = fw_get_db_settings_option();
endif;
if(!empty($vultur_data['blog_sidebar'])):
    $theme_sidebar = $vultur_data['blog_sidebar'];
else:
    $theme_sidebar = 'full';
endif;
$bread_image = '';
if(!empty($vultur_data['breadcrumbs_image']['url'])):
    $bread_image = $vultur_data['breadcrumbs_image']['url'];
endif;
$bread_color = '';
if(!empty($vultur_data['breadcrumbs_color'])):
    $bread_color = $vultur_data['breadcrumbs_color'];
endif;
$breadcrumbs_switch = '';
if(!empty($vultur_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $vultur_data['breadcrumbs_switch'];
else:
    $breadcrumbs_switch = 'on';
endif;
if($breadcrumbs_switch == 'on'):
    vultur_breadcrumb_funcation($bread_color,$bread_image);
endif;

?>
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>

<?php

get_footer();
