<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
'heading'  => array( 
	'label' => esc_html__('Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	), 
'heading_sub'  => array( 
	'label' => esc_html__('Sub Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	),
'content'  => array(
		'label' => esc_html__('Content', 'vultur'),
		'type' => 'wp-editor',
		'value' => '',
		'desc' => esc_html__('', 'vultur'),
		'media_buttons' => false,
		'wpautop' => true,
	   ),
    'position'  => array(
        'type'  => 'select',
        'value' => 'position-left',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Headline Position', '{vultur}'),
        'desc'  => __('Description', '{vultur}'),
        'choices' => array(
            'position-left' => __('Left', '{vultur}'),
            'position-left-button' => __('Left with Button', '{vultur}'),
            'position-center' => __('Center', '{vultur}'),
        ),
        'no-validate' => false,
    ),
    'button_text'  => array(
        'label' => esc_html__('Button Text', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
    ),
    'button_link'  => array(
        'label' => esc_html__('Button Link', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
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
);