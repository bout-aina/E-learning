<?php if(!defined('FW')){
	die('Forbidden');
}
$portfolio_heading = '';
if(!empty($atts['portfolio_heading'])):
     $portfolio_heading = $atts['portfolio_heading'];
endif;
$portfolio_sub_heading = '';
if(!empty($atts['portfolio_sub_heading'])):
     $portfolio_sub_heading = $atts['portfolio_sub_heading'];
endif;
$content = '';
if(!empty($atts['content'])):
    $content = $atts['content'];
endif;
$portfolio_show_number = '';
if(!empty($atts['portfolio_show_number'])):
       $portfolio_show_number = $atts['portfolio_show_number'];
endif;
$portfolio_load_number = '';
if(!empty($atts['portfolio_load_number'])):
       $portfolio_load_number = $atts['portfolio_load_number'];
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
<div id="portfolio" class="wrap-bg">
<div class="container">
    <div class="row <?php echo esc_html($position); ?>">
        <div class="col-lg-12">
            <div class="section-title with-p <?php echo esc_html($color); ?>">
                <?php if(!empty($portfolio_sub_heading)): ?>
                    <div class="intro-title"><?php echo esc_html($portfolio_sub_heading); ?></div>
                <?php endif; ?>
                <h2><?php echo esc_html($portfolio_heading); ?></h2>
                <?php printf($content); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
		<div id="ajax_portplio_shortcode">
		  <div class="vultur_portfolio_box popup-gallery">
		  <div class="row">
		  <?php
			$number = 1;
			$column = '3';  
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
			  endif;
			 if(!empty($vultur_data['video_image']['attachment_id'])):
				$attachment_id = $vultur_data['video_image']['attachment_id'];
				$video_image_corup = wp_get_attachment_url($attachment_id, 'full');
				$video_image_url = vultur_resize($video_image_corup,360,360,true);
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
		  <?php if(has_post_thumbnail(get_the_ID())): ?>
		  <a class="imageopen" href="<?php echo esc_url($attachment_url); ?>" title="<?php esc_attr('Portfolio','vultur') ?>">
			<div class="vultur_portfolio_img">
			  <?php if(!empty($image_resize_url)): ?>
				<img src="<?php echo esc_url($image_resize_url); ?>" alt="<?php esc_attr('Portfolio','vultur') ?>">
				 <?php endif; ?>
			  <div class="vultur_portfolio_text">
				 <h4><?php the_title(); ?></h4>
				 <p><?php echo esc_html($image_sub_title)?></p>
			</div>
		  </div>
		 </a>
		  <?php endif; ?>

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
		wp_reset_postdata();				
	   ?>
	  </div>
      </div>
    </div>
</div>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ajxload">
     <button class="vultur_btn">
     <?php esc_html_e('Load More','vultur'); ?></button>
      <div class="vultur_loader"><div class="loader"></div></div>
     <input type="hidden" value="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"  id="ajaxurl">
     <input type="hidden" class="ajx_auto_incriment"  value="1" />
     <input type="hidden" class="ajx_prot_number"  value="<?php echo esc_attr($portfolio_show_number); ?>" /><input type="hidden" class="ajx_prot_showmore"  value="<?php echo esc_attr($portfolio_load_number); ?>" />
</div>
</div>

