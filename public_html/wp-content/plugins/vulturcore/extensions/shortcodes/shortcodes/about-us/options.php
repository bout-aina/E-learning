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
'about_image'  => array( 
		'label' => esc_html__('About Image', 'vultur'),
		'desc' => esc_html__('Upload about image Here.', 'vultur'),
		'type' => 'upload', 
	  ),	
'about_desc'  => array( 
		'label' => esc_html__('Description', 'vultur'),
		'type' => 'wp-editor',
		'value' => '',
		'desc' => esc_html__('', 'vultur'),
		'media_buttons' => false,
		'wpautop' => true,
	   ),	
'about_text'  => array(
		'label' => esc_html__('About Button Text Dark', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
'about_link'  => array(
		'label' => esc_html__('About Button Link Dark', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
'about_text_light'  => array(
		'label' => esc_html__('About Button Text Light', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
'about_link_light'  => array(
		'label' => esc_html__('About Button Link Light', 'vultur'),
		'type' => 'text',
		'value' => '',
		 'desc' => esc_html__('', 'vultur'),
		 ),
    'text_position'  => array(
        'type'  => 'checkbox',
        'value' => true,
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => esc_html__('Text Position', 'vultur'),
        'desc' => esc_html__('', 'vultur'),
        'help'  => __('Disable for Text Left', 'vultur'),
        'text'  => __('Right', 'vultur'),
    ),
    'layout'  => array(
        'type'  => 'select',
        'value' => 'layout1',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Layout', '{vultur}'),
        'desc'  => __('Description', '{vultur}'),
        'choices' => array(
            'layout1' => __('Layout 1 (Full Width)', '{vultur}'),
            'layout2' => __('Layout 2 (Container)', '{vultur}'),
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
	'padding'  => array(
		'type'  => 'select',
		'value' => 'wrap-bg',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Wrap Padding', '{vultur}'),
		'desc'  => __('Description', '{vultur}'),
		'choices' => array(
			'wrap-bg' => __('Padding Large', '{vultur}'),
			'wrap-bg-small' => __('Padding Small', '{vultur}'),
			'wrap-bg-topzero' => __('Padding Top Zero', '{vultur}'),
			'wrap-bg-top50' => __('Padding Top 50px', '{vultur}'),
		),
		'no-validate' => false,
	),
);