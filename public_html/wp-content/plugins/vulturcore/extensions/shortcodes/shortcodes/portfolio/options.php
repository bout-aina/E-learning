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
     'portfolio_heading'  => array( 
			 'label' => esc_html__('Portfolio Heading', 'vultur'),
			 'type' => 'text',
			 'value' => '',
			 'desc' => esc_html__('', 'vultur'),
			 ), 
	'portfolio_sub_heading'  => array( 
			'label' => esc_html__('Portfolio Sub Heading', 'vultur'),
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
     'portfolio_show_number'  => array( 
			'label' => esc_html__('Show Number Of Portfolio', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),	 
	'portfolio_load_number'  => array( 
			'label' => esc_html__('Show Load More Number Of Portfolio', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),	
			
);