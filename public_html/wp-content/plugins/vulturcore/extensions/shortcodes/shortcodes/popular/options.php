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
'layout'  => array(
    'type'  => 'select',
    'value' => 'layout1',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Layout', '{vultur}'),
    'desc'  => __('Description', '{vultur}'),
    'choices' => array(
        'layout1' => __('Layout 1 (3 Column Center)', '{vultur}'),
        'layout2' => __('Layout 2 (3 Column Left)', '{vultur}'),
        'layout3' => __('Layout 3 (2 Column Left)', '{vultur}'),
        'layout4' => __('Layout 4 (2 Column White)', '{vultur}'),
    ),
    'no-validate' => false,
),
'popular_sub_heading'  => array(
	'label' => esc_html__('Contact Us Sub Heading', 'vultur'),
	'type' => 'text',
	'value' => '',
	'desc' => esc_html__('', 'vultur'),
	),
'popular_heading'  => array(
	'label' => esc_html__('Contact Us Heading', 'vultur'),
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
	'popular_detail' =>array(
		'type' => 'addable-popup',
		'value' => array(
			array(
				'contactus_address' => 'Contact Us Detail',
			),
		),
		'label' => esc_html__('Add Popular Element', 'vultur'),
		'template' => '{{=title}}',
		'popup-title' => null,
		'size' => 'small', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => esc_html__('Add', 'vultur'),
		'sortable' => true,
		'popup-options' => array(
			'title' => array(
				'label' => esc_html__('Title', 'vultur'),
				'type' => 'text',
			),
			'popular_info'  => array(
				'label' => esc_html__('Content Information', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => true,
			),
			'add_bg_image'  => array(
				'label' => esc_html__('Background Image', 'vultur'),
				'desc' => esc_html__('Upload Profile images Here.', 'vultur'),
				'type' => 'upload',
			),
            'add_bg_color' => array(
                'label' => __('Background Color', 'vultur'),
                'desc' => esc_html__('Background Color if not background', 'vultur'),
                'type'  => 'color-picker',
                'value' => '#000',
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
		),
	),
 ); 