<?php
/**
 * Template name: Page Full Width
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vultur
 */
get_header(); 
$vultur_page_data = '';
if ( function_exists( 'fw_get_db_post_option' )):	
    $vultur_page_data = fw_get_db_post_option(get_the_ID());
endif;
$page_sidebar_position = '';
if(!empty($vultur_page_data['page_sidebar'])):
	$page_sidebar_position = $vultur_page_data['page_sidebar'];
 else:
	$page_sidebar_position = 'right';
endif; 
if(!empty($vultur_page_data['comment_switch'])):
    $comment_switch = $vultur_page_data['comment_switch'];
  else:
    $comment_switch = 'yes';
endif;
$bread_image = '';
if(!empty($vultur_page_data['breadcrumbs_page_image']['url'])):
  $bread_image = $vultur_page_data['breadcrumbs_page_image']['url'];
endif;
$bread_color = '';
if(!empty($vultur_page_data['breadcrumbs_page_color'])):
   $bread_color = $vultur_page_data['breadcrumbs_page_color'];
endif; 
$breadcrumbs_switch = '';
if(!empty($vultur_page_data['breadcrumbs_switch'])):
   $breadcrumbs_switch = $vultur_page_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'yes'; 
endif;
if($breadcrumbs_switch == 'yes'):
  if(function_exists('vultur_breadcrumb_funcation')):
    vultur_breadcrumb_funcation($bread_color,$bread_image);
  endif; 
endif;
?> 
<div class="si_fullwidth_page">
<?php
while ( have_posts() ) : the_post();
    the_content();
endwhile;
?>
</div> 
<?php
get_footer();