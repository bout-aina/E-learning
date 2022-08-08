<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$course_heading = '';
if(!empty($atts['course_heading'])):
	$course_heading = $atts['course_heading'];
endif;
$course_sub_heading = '';
if(!empty($atts['course_sub_heading'])):
	$course_sub_heading = $atts['course_sub_heading'];
endif;
$course_content = '';
if(!empty($atts['course_content'])):
	$course_content = $atts['course_content'];
endif;
$course_number = '';
if(!empty($atts['course_number'])):
	$course_number = $atts['course_number'];
endif;
$show_content = '';
if(!empty($atts['show_content'])):
	$show_content = $atts['show_content'];
endif;
$short_content = 110;
if(!empty($atts['short_content'])):
	$short_content = $atts['short_content'];
endif;
$show_content = '';
if(!empty($atts['show_content'])):
	$show_content = $atts['show_content'];
endif;
$show_category = '';
if(!empty($atts['show_category'])):
	$show_category = $atts['show_category'];
endif;
$show_lessons = '';
if(!empty($atts['show_lessons'])):
	$show_lessons = $atts['show_lessons'];
endif;
$show_student = '';
if(!empty($atts['show_student'])):
	$show_student = $atts['show_student'];
endif;
$show_author = '';
if(!empty($atts['show_author'])):
	$show_author = $atts['show_author'];
endif;
$show_price = '';
if(!empty($atts['show_price'])):
	$show_price = $atts['show_price'];
endif;
$hide_meta_bottom = '';
if(!empty($atts['hide_meta_bottom'])):
	$hide_meta_bottom = $atts['hide_meta_bottom'];
endif;
$button_text = '';
if(!empty($atts['button_text'])):
	$button_text = $atts['button_text'];
endif;
$button_link = '';
if(!empty($atts['button_link'])):
	$button_link= $atts['button_link'];
endif;
$header_style = '';
if(!empty($vultur_data['header_style'])):
	$header_style =$vultur_data['header_style'];
endif;
$position = '';
if(!empty($atts['position'])):
	$position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
	$color = $atts['color'];
endif;
$padding= '';
if(!empty($atts['padding'])):
	$padding = $atts['padding'];
endif;
$layout = '';
if(!empty($atts['layout'])):
	$layout = $atts['layout'];
endif;
if(function_exists( 'fw_get_db_settings_option' )):
	$vultur_data = fw_get_db_settings_option();
endif;

?>

<?php if($padding == 'wrap-bg'): ?>
<div class="courses wrap-bg">
	<?php endif; ?>
	<?php if($padding == 'wrap-bg-small'): ?>
	<div id="courses" class="wrap-bg-small">
		<?php endif; ?>
		<div class="container">

			<?php if(!empty($course_heading)): ?>
				<?php if($position == 'position-left-button'): ?>
					<div class="row <?php echo esc_html($position); ?>">
						<div class="col-sm-12 col-md-9 col-lg-10">
							<div class="mobile-center section-title with-p <?php echo esc_html($color); ?>">
								<?php if(!empty($course_sub_heading)): ?>
									<span><?php echo esc_html($course_sub_heading); ?></span>
								<?php endif; ?>
								<div class="headline-inline">
									<h2><?php echo esc_html($course_heading); ?></h2>
								</div>
								<div class="headline-inline">
									<?php printf($course_content); ?>
								</div>
                                <div class="intro-title">Courses</div>
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
							<div class="section-title with-p <?php echo esc_html($color); ?>">
								<?php if(!empty($course_sub_heading)): ?>
									<span><?php echo esc_html($course_sub_heading); ?></span>
								<?php endif; ?>
								<h2><?php echo esc_html($course_heading); ?></h2>
								<?php printf($course_content); ?>
                                <div class="intro-title">Courses</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if($position == 'position-center'): ?>
					<div class="row <?php echo esc_html($position); ?>">
						<div class="col-lg-12">
							<div class="section-title with-p <?php echo esc_html($color); ?>">
								<?php if(!empty($course_sub_heading)): ?>
									<span><?php echo esc_html($course_sub_heading); ?></span>
								<?php endif; ?>
								<h2><?php echo esc_html($course_heading); ?></h2>
								<?php printf($course_content); ?>
                                <div class="intro-title">Courses</div>
							</div>
						</div>
					</div>
				<?php endif; ?>

			<?php endif; ?>

			<div class="row">
				<?php
				$args = array('post_type' => 'lp_course',
					'posts_per_page'=>$course_number);
				$vultur_query = new WP_Query($args);
				if($vultur_query->have_posts()):
				while($vultur_query->have_posts()):
				$vultur_query->the_post();
				if(has_post_thumbnail(get_the_ID())):
					$attachment_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
					$vultur_crop_image = vultur_resize($attachment_url, $width =500, $height =200,true);
				endif;
				$vultur_data = '';
				if(function_exists( 'fw_get_db_post_option' )):
					$vultur_data = fw_get_db_post_option(get_the_ID());
				endif;
				$city = '';
				if(!empty($vultur_data['author_name'])):
					$city = $vultur_data['author_name'];
				endif;
				$price = '';
				if(!empty($vultur_data['price'])):
					$price = $vultur_data['price'];
				endif;
				$time_priode = '';
				if(!empty($vultur_data['time'])):
					$time_priode = $vultur_data['time'];
				endif;
				$single_link = '';
				if(!empty($vultur_data['single_link'])):
					$single_link= $vultur_data['single_link'];
				endif;
				$author_image = '';
				if(!empty($vultur_data['author_image']['url'])):
					$author_image = $vultur_data['author_image']['url'];
					$author_image_crop_image = vultur_resize($author_image, $width =100, $height =100,true);
				endif;
				$user = LP_Global::user();
				if ( ! $course = LP_Global::course() ) {
					return;
				}
				$term_list = get_the_term_list( get_the_ID(), 'course_category', '', ', ', '' );
				?>
				<?php if($layout == 'layout1'): ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo esc_html($header_style);?> course-single mb20">
					<?php endif; ?>
					<?php if($layout == 'layout2'): ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 <?php echo esc_html($header_style);?> course-single mb20">
						<?php endif; ?>
						<div class="themeioan_course">
							<article>
								<div class="blog-photo">
									<a href="<?php the_permalink(); ?>" class="course-permalink"><?php the_post_thumbnail('course_thumbnail' ) ?></a>
									<div class="course_category">
										<?php if($show_category== true): ?>
											<div class="cat-item">
												<?php if ( $term_list ) {
													printf( '<span class="cat-links">%s</span>', $term_list );
												}
												?>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="blog-content">
                                    <ul class="course-bottom-list">
                                        <li>
                                            <?php if($show_price== true): ?>
                                                <div class="course-duration">
                                        <span class=" ">
                                            <?php if ( $price_html = $course->get_price_html() ) { ?>
                                                <?php if ( $course->get_origin_price() != $course->get_price() ) { ?>
                                                <?php } ?>
                                                <span class="course-price price"><?php echo esc_attr($price_html); ?></span>
                                            <?php } ?>
                                        </span>
                                                </div>
                                            <?php endif; ?>
                                        </li>
                                    </ul>
									<h5 class="title"><a href="<?php the_permalink(); ?>" class="course-permalink"><?php the_title(); ?></a></h5>

									<?php if($show_content == true): ?>
										<div class="course_excerpt">
											<p><?php echo vultur_the_excerpt($short_content); ?></p>
										</div>
									<?php endif; ?>


									<?php if($hide_meta_bottom== false): ?>
										<?php if($layout == 'layout1'): ?>

											<div class="course_lessons">
												<?php if($show_lessons== true): ?>
													<div class="cat-item">
														<i class="far fa-address-book fa-3x"></i>
														<?php learn_press_label_html( $course->count_items( LP_LESSON_CPT ) ); ?><?php _e( 'Lessons', 'learnpress' ); ?>
													</div>
												<?php endif; ?>
												<?php if($show_student== true): ?>
													<div class="cat-item">
														<i class="far fa-user fa-3x"></i>
														<?php learn_press_label_html( $course->count_students( LP_LESSON_CPT ) ); ?><?php _e( 'Student', 'learnpress' ); ?>
													</div>
												<?php endif; ?>
											</div>
										<?php endif; ?>

										<?php if($layout == 'layout2'): ?>
                                            <div class="course_lessons">
                                                <?php if($show_lessons== true): ?>
                                                    <div class="cat-item">
                                                        <i class="far fa-address-book fa-3x"></i>
                                                        <?php learn_press_label_html( $course->count_items( LP_LESSON_CPT ) ); ?><?php _e( 'Lessons', 'learnpress' ); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($show_student== true): ?>
                                                    <div class="cat-item">
                                                        <i class="far fa-user fa-3x"></i>
                                                        <?php learn_press_label_html( $course->count_students( LP_LESSON_CPT ) ); ?><?php _e( 'Student', 'learnpress' ); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
										<?php endif; ?>

									<?php endif; ?>
                                </div>
							</article>
						</div>
					</div>

					<?php
					endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>