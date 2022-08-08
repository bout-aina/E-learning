<?php
/**
 * single course page
 * @package Education_LMS
 */
get_header();
$vultur_post_data = $bread_image = $comment_switch = '';
if ( function_exists( 'fw_get_db_post_option' )):
    $vultur_post_data = fw_get_db_post_option(get_the_ID());
endif;

$bread_image = $image_link    = wp_get_attachment_url( get_post_thumbnail_id() );;

$bread_color = '';
if(!empty($vultur_post_data['breadcrumbs_post_color'])):
    $bread_color = $vultur_post_data['breadcrumbs_post_color'];
endif;


$bg_color = '';
if(!empty($bread_color)):
    $bg_color = 'background-color:' .$bread_color. ';';
endif;
$bg_image = '';
if(!empty($bread_image)):
    $bg_image = 'background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .2)), url(' .$bread_image. ');';
endif;
$background = '';
$background   = ($bg_image || $bg_color) ? 'style="' . esc_attr($bg_image.$bg_color) . '"' : '';

$user = LP_Global::user();
if ( ! $course = LP_Global::course() ) {
    return;
}
if ( ! $price = $course->get_price_html() ) {
    return;
}
$course_id = get_the_ID();
?>

    <div class="single-course-banner vultur_banner banner-transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="vultur_banner_title">
                        <?php
                        echo '<h1>';
                        echo the_title();
                        echo '</h1>';
                        ?>
                        <?php echo '<p>' .vultur_the_excerpt(210). '</p>'; ?>
                    </div>
                </div>
	            <div class="col-sm-12 col-md-3">
		            <div class="vultur_banner_right">
			            <div class="single-course-duration">
				            <?php if ( $course->has_sale_price() ) { ?>
					            <span class="origin-price"> <?php echo esc_attr($course->get_origin_price_html()); ?></span>
				            <?php } ?>
				            <span class="course-single-price"><?php echo esc_attr($price); ?></span>
			            </div>
			            <form name="purchase-course" class="purchase-course" method="post" enctype="multipart/form-data">

				            <?php do_action( 'learn-press/before-purchase-button' ); ?>

				            <input type="hidden" name="purchase-course" value="<?php echo esc_attr( $course->get_id() ); ?>"/>
				            <input type="hidden" name="purchase-course-nonce"
				                   value="<?php echo esc_attr( LP_Nonce_Helper::create_course( 'purchase' ) ); ?>"/>

				            <button class="lp-button button button-purchase-course">
					            <?php echo esc_html( apply_filters( 'learn-press/purchase-course-button-text', __( 'Enroll this course', 'learnpress' ) ) ); ?>
				            </button>

				            <?php do_action( 'learn-press/after-purchase-button' ); ?>

			            </form>
		            </div>
	            </div>
            </div>
        </div>
    </div>


	    <div class="single-course-banner vultur_banner banner-transparent-bottom" <?php printf($background); ?>>
	    </div>


	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="course-header-info">
	<div class="row">
		<div class="col-sm-6 col-md-3">
		<div class="header-top-feature">
			<div class="course-feature-icon">
				<i class="fas fa-graduation-cap"></i>
			</div>
			<div class="course-feature-bottom">
				<div class="single_course_title"><span><?php _e( 'LECTURES', 'learnpress' ); ?></span></div>
				<div class="single_course_content"><span><?php learn_press_label_html( $course->count_items( LP_LESSON_CPT ) ); ?><?php _e( 'Lessons', 'learnpress' ); ?></span></div>
			</div>
		</div>
		</div>
		<div class="col-sm-6 col-md-3">
		<div class="header-top-feature">
			<div class="course-feature-icon">
				<i class="fas fa-chalkboard-teacher"></i>
			</div>
			<div class="course-feature-bottom">
				<div class="single_course_title"><span><?php _e( 'QUESTIONS', 'learnpress' ); ?></span></div>
				<div class="single_course_content"><span><?php learn_press_label_html( $course->count_items( LP_QUIZ_CPT ) ); ?><?php _e( 'Quizzes', 'learnpress' ); ?></span></div>
			</div>
		</div>
		</div>
		<div class="col-sm-6 col-md-3">
		<div class="header-top-feature">
			<div class="course-feature-icon">
				<i class="fas fa-users"></i>
			</div>
			<div class="course-feature-bottom">
				<div class="single_course_title"><span><?php _e( 'ENROLLED', 'learnpress' ); ?></span></div>
				<div class="single_course_content"><span><?php learn_press_label_html( $course->count_students( LP_LESSON_CPT ) ); ?><?php _e( 'Student', 'learnpress' ); ?></span></div>
			</div>
		</div>
		</div>

		<?php if ( class_exists( 'LP_Addon_Course_Review' ) ): ?>
			<div class="col-sm-6 col-md-3">
			<div class="header-top-feature">
				<div class="course-feature-icon">
					<i class="far fa-comments"></i>
				</div>
				<div class="course-feature-bottom">
					<div class="single_course_title"><span><?php _e( 'REVIEWS', 'learnpress' ); ?></span></div>
					<div class="single_course_content review">
						<div class="sc-review-stars">
							<?php $course_rate = learn_press_get_course_rate( $course_id ); ?>
							<?php learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) ); ?>
						</div>
					</div>
				</div>
			</div>
			</div>

		<?php endif; ?>
	</div>
	</div>

	</div>
	</div>
	</div>


    <div class="container-single-course">
    <div class="container">
	    <div class="course-single-layout">
	        <?php
	        while ( have_posts() ) :
	            the_post();
	            the_content();
	        endwhile; // End of the loop.
	        ?>
	    </div>
    </div>
    </div>


<div style="background-color: #f9f9f9;margin-bottom:-20px;padding:80px 0px 20px 0px;">
<div class="container single-course-widget">
    <?php if ( is_active_sidebar('lms-sidebar-single-bottom' ) ) : ?>
        <?php dynamic_sidebar( 'lms-sidebar-single-bottom' ); ?>
    <?php endif; ?>
</div>
</div>
<?php
get_footer();
