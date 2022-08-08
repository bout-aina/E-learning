<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-course.php
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$user = LP_Global::user();
if ( ! $course = LP_Global::course() ) {
    return;
}
?>
<?php $term_list = get_the_term_list( get_the_ID(), 'course_category', '', ', ', '' ); ?>


<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 course-single mb20">
<div id="post-<?php the_ID(); ?>" <?php post_class('themeioan_course'); ?>>
    <article>


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
            <?php echo vultur_the_excerpt(110); ?>
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
    </article>
</div>
</div>
