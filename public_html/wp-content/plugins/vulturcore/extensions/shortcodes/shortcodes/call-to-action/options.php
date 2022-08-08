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
			'position-right' => __('Right', '{vultur}'),
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
	'layout'  => array(
		'type'  => 'select',
		'value' => 'layout1',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Layout', '{vultur}'),
		'desc'  => __('Description', '{vultur}'),
		'choices' => array(
			'layout1' => __('Layout 1', '{vultur}'),
			'layout2' => __('Layout 2', '{vultur}'),
		),
		'no-validate' => false,
	),
    'heading'  => array(
        'calltoaction_label' => esc_html__('Heading', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
        ),
    'calltoaction_image'  => array(
            'label' => esc_html__('Call To Action Image', 'vultur'),
            'desc' => esc_html__('Upload Call To Action image Here.', 'vultur'),
            'type' => 'upload',
          ),
    'calltoaction_desc'  => array(
            'label' => esc_html__('Description', 'vultur'),
            'type' => 'wp-editor',
            'value' => '',
            'desc' => esc_html__('', 'vultur'),
            'media_buttons' => false,
            'wpautop' => true,
           ),
    'cta_text'  => array(
            'label' => esc_html__('CTA Button Text', 'vultur'),
            'type' => 'text',
            'value' => '',
             'desc' => esc_html__('', 'vultur'),
             ),
    'button_link'  => array(
            'label' => esc_html__('CTA Button Link', 'vultur'),
            'type' => 'text',
            'value' => '',
             'desc' => esc_html__('', 'vultur'),
             ),
);