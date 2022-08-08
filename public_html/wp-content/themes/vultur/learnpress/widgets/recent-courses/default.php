<?php
/**
 * Template for displaying content of Recent Courses widget.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/widgets/recent-courses/default.php.
 *
 * @author  ThimPress
 * @category Widgets
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( ! isset( $courses ) ) {
	esc_html_e( 'No courses', 'learnpress' );

	return;
}

global $post;
//widget instance
$instance = $this->instance;
$term_list = get_the_term_list( get_the_ID(), 'course_category', '', ', ', '' );
?>

<div class="archive-course-widget-outer">

    <div class="learn-press-courses row">
		<?php foreach ( $courses as $course_id ) {

			$post = get_post( $course_id );
			setup_postdata( $post );
			$course = learn_press_get_course( $course_id );

			?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 course-single mb20">
            <div <?php post_class('themeioan_course'); ?>>
            <?php if ( ! empty( $instance['show_thumbnail'] ) && $image = $course->get_image( 'medium' ) ) { ?>

                <div class="blog-photo">
                    <a href="<?php the_permalink(); ?>" class="course-permalink"><?php the_post_thumbnail('course_thumbnail' ) ?></a>
                    <div class="course_category">
                            <div class="cat-item">
                                <?php if ( $term_list ) {
                                    printf( '<span class="cat-links">%s</span>', $term_list );
                                }
                                ?>
                            </div>
                    </div>
                </div>
            <?php } ?>

            <div class="blog-content">
                <ul class="course-bottom-list">
                    <li>
                            <div class="course-duration">
                                        <span class=" ">
                                            <?php if ( $price_html = $course->get_price_html() ) { ?>
                                                <?php if ( $course->get_origin_price() != $course->get_price() ) { ?>
                                                <?php } ?>
                                                <span class="course-price price"><?php echo esc_attr($price_html); ?></span>
                                            <?php } ?>
                                        </span>
                            </div>
                    </li>
                </ul>

                <h5 class="title"><a href="<?php the_permalink(); ?>" class="course-permalink"><?php the_title(); ?></a></h5>

                <div class="course_excerpt">
                    <?php if ( ! empty( $instance['desc_length'] ) && ( $len = intval( $instance['desc_length'] ) ) > 0 ) { ?>
                            <?php echo esc_html($course->get_content( 'raw', $len, __( '...', 'learnpress' ) )); ?>
                    <?php } ?>
                </div>

                <div class="course_lessons">
                        <div class="cat-item">
                            <i class="far fa-address-book fa-3x"></i>
                            <?php learn_press_label_html( $course->count_items( LP_LESSON_CPT ) ); ?><?php _e( 'Lessons', 'learnpress' ); ?>
                        </div>
                        <div class="cat-item">
                            <i class="far fa-user fa-3x"></i>
                            <?php learn_press_label_html( $course->count_students( LP_LESSON_CPT ) ); ?><?php _e( 'Student', 'learnpress' ); ?>
                        </div>
                </div>

            </div>
        </div>
    </div>
		<?php } ?>

    </div>

	<?php wp_reset_postdata();?>

    <div class="widget-footer">
		<?php if ( ! empty( $instance['bottom_link_text'] ) && ( $page_id = learn_press_get_page_link( 'courses' ) ) ) {
			$text = $instance['bottom_link_text'] ? $instance['bottom_link_text'] : get_the_title( $page_id );
			?>
            <div class="content-button-widget btn-section">
                <a href="<?php echo esc_url( learn_press_get_page_link( 'courses' ) ); ?>" class="color-two btn-custom smooth-scroll"><?php echo wp_kses_post( $text ); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
		<?php } ?>
    </div>
</div>