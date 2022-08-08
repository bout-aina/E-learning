<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
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
            'layout4' => __('Layout 4', '{vultur}'),
            'layout5' => __('Layout 5', '{vultur}'),
        ),
        'no-validate' => false,
    ),
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
	'form_heading_sub'  => array(
	'label' => esc_html__('Contact Us Form Sub Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
),
'form_heading'  => array( 
	'label' => esc_html__('Contact Us Form Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	),

	'content_sub'  => array(
		'label' => esc_html__('Content sub', 'vultur'),
		'type' => 'wp-editor',
		'value' => '',
		'desc' => esc_html__('', 'vultur'),
		'media_buttons' => false,
		'wpautop' => true,
	),

'form_shortcode'  => array( 
	'label' => esc_html__('Add Form Shortcode', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	),   
'googlemap_ifram'  => array( 
	'label' => esc_html__('Add Google Map Ifram', 'vultur'),
	'type' => 'wp-editor',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	'media_buttons' => false,
	'wpautop' => true,
	),
    'image'  => array(
        'label' => esc_html__('Add Image', 'vultur'),
        'desc' => esc_html__('Upload image Here.', 'vultur'),
        'type' => 'upload',
    ),
);