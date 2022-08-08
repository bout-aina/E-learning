<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
      'what_we_do' =>array(
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'what_we_do' => 'What We Do',
			       ),
	     	   ),
		     'label' => esc_html__('Add What We Do', 'vultur'),
		     'template' => '{{=title}}',
		     'popup-title' => null,
		     'size' => 'small', // small, medium, large
		     'limit' => 0, // limit the number of popup`s that can be added
	      	 'add-button-text' => esc_html__('Add', 'vultur'),
		     'sortable' => true,
		     'popup-options' => array(
                 'icon'    => array(
                     'type'  => 'icon',
                     'label' => __('Choose an Icon', 'fw'),
                 ),
		           'title' => array(
		           'label' => esc_html__('Title', 'vultur'),
		           'type' => 'text', 
	                    ),
                 'what_we_do_button'  => array(
                     'label' => esc_html__('Button Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'what_we_do_link'  => array(
                     'label' => esc_html__('Button Link', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'what_we_do_content'  => array(
                     'label' => esc_html__('Content', 'vultur'),
                     'type' => 'wp-editor',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                     'media_buttons' => false,
                     'wpautop' => true,
                 ),
			     'image'  => array(
				     'label' => esc_html__('Image', 'vultur'),
				     'desc' => esc_html__('Upload Image if Layout 3 & 4.', 'vultur'),
				     'type' => 'upload',
			     ),
			        ), 
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
	'column'  => array(
		'type'  => 'select',
		'value' => 'column3',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Column', '{vultur}'),
		'desc'  => __('Description', '{vultur}'),
		'choices' => array(
			'column2' => __('2 Column', '{vultur}'),
			'column3' => __('3 Column', '{vultur}'),
			'column4' => __('4 Column', '{vultur}'),
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
			'layout3' => __('Layout 3', '{vultur}'),
			'layout4' => __('Layout 4', '{vultur}'),
			'layout5' => __('Layout 5', '{vultur}'),
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
			'wrap-bg-bottomzero' => __('Padding Bottom Zero', '{vultur}'),
			'wrap-bg-zero' => __('Padding Zero', '{vultur}'),
		),
		'no-validate' => false,
	),
		'what_we_do_title'  => array(
			    'what_we_do_label' => esc_html__('What We Do Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ),
	    'what_we_do_sub_title'  => array(
			    'what_we_do_label' => esc_html__('What We Do Sub Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ), 
	    'what_we_do_desc'  => array(
				'label' => esc_html__('What We Do Description', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => true,
			),
        'enable_container'  => array(
            'type'  => 'checkbox',
            'value' => true,
            'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
            'label' => esc_html__('Enable/Disable Container', 'vultur'),
            'desc' => esc_html__('', 'vultur'),
            'help'  => __('Disable if you use Full Width', 'vultur'),
            'text'  => __('Yes', 'vultur'),
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