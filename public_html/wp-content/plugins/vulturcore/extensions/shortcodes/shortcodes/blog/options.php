<?php 
if ( ! defined( 'FW' ) ):
	die( 'Forbidden' );
endif;
$options = array(
	'position'  => array(
		'type'  => 'select',
		'value' => 'position-left',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Headline Position', '{vultur}'),
		'desc'  => __('Description', '{vultur}'),
		'choices' => array(
			'position-left' => __('Left', '{vultur}'),
			'position-center' => __('Center', '{vultur}'),
		),
		'no-validate' => false,
	),
    'heading' => array(
		'type'  => 'text',
		'label' => esc_html__('Enter Heading', 'vultur'),
		),
	'sub_heading' => array(
		'type'  => 'text',
		'label' => esc_html__('Enter Sub Heading', 'vultur'),
		),
   'show_blog' => array(
			'type'  => 'text',
			'label' => esc_html__('Enter Number Show Blog', 'vultur'),
			),
    'content'  => array(
        'label' => esc_html__('Content', 'vultur'),
        'type' => 'wp-editor',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
        'media_buttons' => false,
        'wpautop' => true,
    ),
	'crop_content' => array(
		'type'  => 'text',
		'label' => esc_html__('Crop content (excerpt)', 'vultur'),
	),
	'crop_content_feature' => array(
		'type'  => 'text',
		'label' => esc_html__('Crop content feature post', 'vultur'),
	),
	'layout'  => array(
		'type'  => 'select',
		'value' => 'layout1',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Layout', '{vultur}'),
		'desc'  => __('Description', '{vultur}'),
		'choices' => array(
			'layout1' => __('Layout 1', '{vultur}'),
			'layout2' => __('Layout 2', '{vultur}'),
			'layout3' => __('Layout 3', '{vultur}'),
			'layout4' => __('Layout 4 (2 Column)', '{vultur}'),
		),
		'no-validate' => false,
	),
);