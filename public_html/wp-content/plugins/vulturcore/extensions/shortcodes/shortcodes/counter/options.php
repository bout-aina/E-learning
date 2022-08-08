<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
    'our_counter' =>array(
        'type' => 'addable-popup',
        'value' => array(
            array(
                'our_counter' => 'Counter',
            ),
        ),
        'label' => esc_html__('Add Counter', 'vultur'),
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
            'icon'    => array(
                'type'  => 'icon',
                'label' => __('Choose an Icon', 'fw'),
            ),
            'counter_number' => array(
                'label' => esc_html__('Number', 'vultur'),
                'type' => 'text',
            ),
        ),
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
            'wrap-bg-bottomzero' => __('Padding Bottom Zero', '{vultur}'),
            'wrap-bg-zero' => __('Padding Zero', '{vultur}'),
        ),
        'no-validate' => false,
    ),
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
    'counter_title'  => array(
        'counter_label' => esc_html__('Counter Heading', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
    ),
    'counter_sub_title'  => array(
        'counter_label' => esc_html__('Counter Sub Heading', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
    ),
    'counter_desc'  => array(
        'label' => esc_html__('Counter Description', 'vultur'),
        'type' => 'wp-editor',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
        'media_buttons' => false,
        'wpautop' => true,
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
		),
		'no-validate' => false,
	),
	'bg_image'  => array(
		'label' => esc_html__('Background Image', 'vultur'),
		'desc' => esc_html__('Upload Background image Here.', 'vultur'),
		'type' => 'upload',
	),


 );