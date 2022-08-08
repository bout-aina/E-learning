<?php
$special = '';
if(!empty($atts['special'])):
    $special = $atts['special'];
endif;


$skill_bgimage = '';
if(!empty($atts['slider_image']['url'])):
	$skill_bgimage  = $atts['slider_image']['url'];
endif;
$bg_image_url = '';
if(!empty($atts['slider_image'])):
	$bg_image_url = 'background-image:url(' .$skill_bgimage. ');';
endif;
$slider_content = '';
if(!empty($atts['slider_content'])):
	$slider_content = $atts['slider_content'];
endif;
$title = '';
if(!empty($atts['title'])):
	$title = $atts['title'];
endif;
$subtitle = '';
if(!empty($atts['subtitle'])):
	$subtitle = $atts['subtitle'];
endif;
$button_text = '';
if(!empty($atts['button_text'])):
	$button_text = $atts['button_text'];
endif;
$button_link = '';
if(!empty($atts['button_link'])):
	$button_link = $atts['button_link'];
endif;
$play_button_link = '';
if(!empty($atts['play_button_link'])):
	$play_button_link = $atts['play_button_link'];
endif;
$position = '';
if(!empty($atts['position'])):
	$position = $atts['position'];
endif;
$slider_height = '';
if(!empty($atts['slider_height'])):
	$slider_height = $atts['slider_height'];
endif;
$search_course = '';
if(!empty($atts['search_course'])):
	$search_course = $atts['search_course'];
endif;
$search_course_text = '';
if(!empty($atts['search_course_text'])):
	$search_course_text = $atts['search_course_text'];
endif;

?>


<div class="special-slider">
<?php if($slider_height == false): ?>
<div class="<?php echo esc_html($position); ?> header-content-full header-content " role="banner" style="<?php printf($bg_image_url); ?>">
	<?php else: ?>
	<div class="<?php echo esc_html($position); ?> equal-margin header-content" role="banner" style="<?php printf($bg_image_url); ?>">
		<?php endif; ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 header-area">
					<div class="header-area-inner header-text">
						<?php if(!empty($subtitle)): ?>
							<div><span class="subtitle "><?php printf($subtitle); ?></span></div>
						<?php endif; ?>
						<?php if(!empty($title)): ?>
							<h1 class="title"><?php printf($title); ?></h1>
						<?php endif; ?>

						<?php printf($slider_content); ?>

						<?php if($search_course): ?>
							<div class="slidersearch header-search">
								<form method="get" name="search-course" class="learn-press-search-course-form" action="<?php echo home_url( '/' ); ?>">
									<input type="text" name="s" class="search-course-input" value="" placeholder="<?php printf($search_course_text); ?>">
									<input type="hidden" name="ref" value="course">
									<button class="lp-button button search-course-button">
										<i class="fas fa-search"></i>
									</button>
								</form>
							</div>
						<?php endif; ?>

						<?php if(!empty($button_text) || !empty($play_button_link)): ?>
							<div class="btn-section">
								<?php if(!empty($button_link)): ?>
									<a href="<?php echo esc_url($button_link); ?>" class="color-one btn-custom">
										<?php printf($button_text); ?></a>
								<?php endif; ?>
								<?php
								if(!empty($play_button_link)): ?>
									<div class="<?php if(empty($button_link)) echo 'play-center' ?> video-relative">
										<a href="<?php echo esc_url($play_button_link); ?>" class="video-btn popup-video ">
											<i class="fas fa-play"></i>
											<span class="ripple orangebg"></span>
											<span class="ripple orangebg"></span>
											<span class="ripple orangebg"></span>
										</a>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="special">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="course-header-info">
					<div class="row">
	         <?php
	          if(!empty($special)):
	           foreach($special as $values):
		           $title = '';
	                if(!empty($values['title'])):
		                $title = $values['title'];
	                endif;
		           $subtitle = '';
	                if(!empty($values['subtitle'])):
		                $subtitle = $values['subtitle'];
	                endif;
                   $special_content = '';
                   if(!empty($values['special_content'])):
                       $special_content = $values['special_content'];
                   endif;
		           $icon = '';
	                if(!empty($values['icon'])):
	                    $icon = $values['icon'];
	                endif;
	                 ?>
							<div class="col-sm-12 col-md-4">
								<div class="header-top-feature">
									<div class="course-feature-icon">
										<i class="fas <?php printf($icon); ?>"></i>
									</div>
									<div class="course-feature-bottom">
										<div class="single_course_title"><span><?php echo esc_html($values['title']); ?></span></div>
										<div class="single_course_content"><?php printf($special_content); ?></div>
									</div>
								</div>
							</div>

	                <?php
	                 endforeach;
	                endif;
	                ?>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
</div>