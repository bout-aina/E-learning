<?php
/*
Plugin Name: Vultur Core Plugin
Plugin URI: 
Description: This plugin create custom post type and some meta option.
Version: 1.0.0
Author:  
Author URI: http://themeforest.net/
*/
/**
 *Vultur custom post type
 */
require_once 'vultur-customposttype.php';

/**
 *vultur Shortcode Extensions
 */
function vultur_shortcode_extensions($locations) {
	$locations[
		dirname(__FILE__) . '/extensions'
	] = plugin_dir_url( __FILE__ ) . 'extensions';

	return $locations;
}
add_filter('fw_extensions_locations','vultur_shortcode_extensions');
/**
 *Vultur Portfolio
 */ 
add_action( 'wp_ajax_vultur_load_portfolio', 'vultur_load_portfolio');
add_action( 'wp_ajax_nopriv_vultur_load_portfolio', 'vultur_load_portfolio');
function vultur_load_portfolio(){
?>
<div class="vultur_portfolio_box popup-gallery vultur_animate">
<div class="row">
		<?php
		$number = 1;
		$column = '3';   
		$portfolio_show_number = $_POST['click_value'];
		$args = array('post_type' => 'portfolio', 
					  'posts_per_page'=>$portfolio_show_number); 
		$vultur_query = new WP_Query($args);
		if($vultur_query->have_posts()):
		  while($vultur_query->have_posts()):
				$vultur_query->the_post();
		$vultur_data = '';
		if(function_exists( 'fw_get_db_post_option' )):	
			 $vultur_data = fw_get_db_post_option(get_the_ID());
		endif;    
		$youtub_video_url = '';
		if(!empty($vultur_data['video_url'])):
			 $youtub_video_url = $vultur_data['video_url'];
		endif; 
		$image_sub_title = '';
		if(!empty($vultur_data['image_sub_title'])):
			  $image_sub_title = $vultur_data['image_sub_title'];
		endif; 
		$video_title = '';
		if(!empty($vultur_data['video_title'])):
				 $video_title = $vultur_data['video_title'];
		 endif; 
		$video_sub_title = '';
		if(!empty($vultur_data['video_sub_title'])):
			 $video_sub_title = $vultur_data['video_sub_title'];
		endif; 
		$portfolio_style = ''; 
		if(!empty($vultur_data['portfolio_style'])):
			 $portfolio_style = $vultur_data['portfolio_style'];
		endif;  
		switch($portfolio_style) {
			 case 'style1':
			  echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
			  if(has_post_thumbnail(get_the_ID())):
				$attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				$image_resize_url = vultur_resize($attachment_url,360,360,true);
				$video_image_url = '';
			  if(!empty($vultur_data['video_image']['attachment_id'])):
					$attachment_id = $vultur_data['video_image']['attachment_id'];
					$video_image_corup = wp_get_attachment_url($attachment_id, 'full');
					$video_image_url = vultur_resize($video_image_corup,360,360,true);
				endif; 
			 endif;  
			 break;
			case 'style2':
			echo '<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">';
				$video_image_url = '';
			if(!empty($vultur_data['video_image']['attachment_id'])):
				 $attachment_id = $vultur_data['video_image']['attachment_id'];
				 $video_image_corup = wp_get_attachment_url($attachment_id, 'full');
				 $video_image_url = vultur_resize($video_image_corup,750,360,true);
			endif; 
			if(has_post_thumbnail(get_the_ID())):
				$attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				$image_resize_url = vultur_resize($attachment_url,750,360,true);
			 endif;  
			 break;
			 default:
			 echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
			 if(has_post_thumbnail(get_the_ID())):
				$attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				$image_resize_url = vultur_resize($attachment_url,360,360,true);
			 endif;  
			 $video_image_url = '';
			 if(!empty($vultur_data['video_image']['attachment_id'])):
				   $attachment_id = $vultur_data['video_image']['attachment_id'];
				   $video_image_corup = wp_get_attachment_url($attachment_id, 'full');
				   $video_image_url = vultur_resize($video_image_corup,360,360,true);
			  endif; 
		}
?> 
<a class="imageopen" href="<?php echo esc_url($attachment_url); ?>" title="<?php esc_attr('Portfolio','vultur') ?>">
	<div class="vultur_portfolio_img">
	  <?php if(!empty($image_resize_url)): ?>
		<img src="<?php echo esc_url($image_resize_url); ?>" alt="<?php esc_html_e('Portfolio','vultur') ?>">
		 <?php endif; ?>
	  <div class="vultur_portfolio_text">
		 <h4><?php the_title(); ?></h4> 
	     <p><?php echo esc_html($image_sub_title)?></p>
	</div>
  </div>
</a>
<?php if(!empty($youtub_video_url)): ?>
<a class="popup-youtube" href="<?php echo esc_url($youtub_video_url); ?>" title="<?php echo esc_attr($video_title); ?>">
<?php if(!empty($video_image_url)): ?>
	<div class="vultur_portfolio_img">
	  <img src="<?php echo esc_url($video_image_url); ?>" alt="<?php esc_attr('Portfolio','vultur'); ?>">
	  <div class="vultur_portfolio_text">
		<?php if(!empty($video_title)): ?>
			<h4><?php echo esc_html($video_title); ?></h4>
		<?php
	endif;
	 if(!empty($video_sub_title)): ?>
	    <p><?php echo esc_html($video_sub_title); ?></p>
	<?php endif; ?>
  </div>
</div>
<?php endif; ?>
</a> 
<?php endif; ?> 
</div>
<?php 
 $number++;
endwhile;	
endif;
echo '</div>';
wp_reset_postdata();
$num = $args = '';
   $args = array( 'post_type'=>'portfolio','posts_per_page' => -1 );
   $num = count( get_posts( $args ) );
if($portfolio_show_number >= $num ) 
{ ?>
	<style scoped> 
	.ajxload{display:none;}
	</style>
<?php
}
wp_die();			  	
}
/**
 *vultur product load
 */
add_action( 'wp_ajax_vultur_product_load', 'vultur_product_load');
add_action( 'wp_ajax_nopriv_vultur_product_load', 'vultur_product_load');
function vultur_product_load(){
$producted_show = $_POST['click_value'];
$args = '';
$args = array(
        'post_type' =>'product',
        'posts_per_page' =>$producted_show,
        );
    $tr_query = new WP_Query($args); 
    if($tr_query->have_posts()) :
	    while($tr_query->have_posts()): $tr_query->the_post();
		  if(class_exists("Woocommerce")){
			 wc_get_template_part( 'content', 'product' );
		   }
	    endwhile;
        wp_reset_postdata();
	endif;
	$num = $args = '';
	$args = array( 'post_type'=>'product','posts_per_page' => -1 );
	$num = count( get_posts( $args ) );
	if($portfolio_show_number >= $num){ 
	?> 
	<style scoped> 
	   .ajxload{display:none;}
	</style>
    <?php  
  }
wp_die();
}


/**
 * Demo Content Important
 */
function  vultur_filter_fw_ext_backups_demos($demos){
	$demos_array = array(
		'homeone' => array(
			'title' => esc_html__('Home One', 'vultur'),
			'screenshot' => esc_url(get_template_directory_uri().'/assets/images/demo/homeone.jpg'),
			'preview_link' => 'https://vultur.drozd.at/',
		),
	);
    foreach ($demos_array as $id => $data) {
		$demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
			'url' => 'https://vultur.drozd.at/demo/',
			'file_id' => $id,
		));
		$demo->set_title($data['title']);
		$demo->set_screenshot($data['screenshot']);
		$demo->set_preview_link($data['preview_link']);
        $demos[$demo->get_id()] = $demo;
        unset($demo);
	}
   return $demos;  
}
$dir = get_template_directory().'/demo-content';
if(!is_dir($dir)):
add_filter('fw:ext:backups-demo:demos','vultur_filter_fw_ext_backups_demos');
endif;