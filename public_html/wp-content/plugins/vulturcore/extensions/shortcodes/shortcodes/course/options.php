<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} 
$options = array(
    'position'  => array(
        'type'  => 'select',
        'value' => 'position-left',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Position', '{vultur}'),
        'desc'  => __('Description', '{vultur}'),
        'choices' => array(
            'position-left' => __('Left', '{vultur}'),
            'position-center' => __('Center', '{vultur}'),
        ),
        'no-validate' => false,
    ),
    'color'  => array(
        'type'  => 'select',
        'value' => 'color-dark',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Color', '{vultur}'),
        'desc'  => __('Description', '{vultur}'),
        'choices' => array(
            'color-white' => __('Color White', '{vultur}'),
            'color-dark' => __('Color Dark', '{vultur}'),
        ),
        'no-validate' => false,
    ),
     'course_heading'  => array(
			'label' => esc_html__('Course Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 	 
	 'course_sub_heading'  => array(
			'label' => esc_html__('Course Sub Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),
    'course_content'  => array(
        'label' => esc_html__('Course content', 'vultur'),
        'type' => 'wp-editor',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
        'media_buttons' => false,
        'wpautop' => true,
    ),
    'course_number'  => array(
			'label' => esc_html__('Show Number Of Course', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 
);