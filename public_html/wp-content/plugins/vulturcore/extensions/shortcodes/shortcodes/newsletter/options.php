<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'position'  => array(
		'type'  => 'select',
		'value' => 'position-left',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Position', '{vultur}'),
		'desc'  => __('Position Text Element', '{vultur}'),
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
'heading'  => array( 
	'newsletter_label' => esc_html__('Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	),
'newsletter_image'  => array(
		'label' => esc_html__('Newsletter Image', 'vultur'),
		'desc' => esc_html__('Upload Newsletter image Here.', 'vultur'),
		'type' => 'upload', 
	  ),	
'newsletter_desc'  => array(
		'label' => esc_html__('Content', 'vultur'),
		'type' => 'wp-editor',
		'value' => '',
		'desc' => esc_html__('', 'vultur'),
		'media_buttons' => false,
		'wpautop' => true,
	   ),	
'cta_text'  => array(
		'label' => esc_html__('Submit Button Text', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
'cta_placeholder'  => array(
		'label' => esc_html__('Input Placeholder', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
'button_link'  => array(
		'label' => esc_html__('Action for Form', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
);