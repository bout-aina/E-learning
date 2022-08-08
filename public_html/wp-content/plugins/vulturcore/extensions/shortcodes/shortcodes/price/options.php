<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
      'price' =>array(
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'price' => 'Price',
			       ),
	     	   ),
		     'label' => esc_html__('Add Price', 'vultur'),
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
                 'price_currency' => array(
                     'label' => esc_html__('Price Currency $', 'vultur'),
                     'type' => 'text',
                 ),
                 'price_number' => array(
                     'label' => esc_html__('Price Number', 'vultur'),
                     'type' => 'text',
                 ),
                 'price_month' => array(
                     'label' => esc_html__('Text Price number', 'vultur'),
                     'type' => 'text',
                 ),
                 'price_content'  => array(
                     'label' => esc_html__('Content', 'vultur'),
                     'type' => 'wp-editor',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                     'media_buttons' => false,
                     'wpautop' => true,
                 ),
                 'price_button'  => array(
                     'label' => esc_html__('Button Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'price_link'  => array(
                     'label' => esc_html__('Button Link', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'price_featured_text' => array(
                     'label' => esc_html__('Price Featured Text', 'vultur'),
                     'type' => 'text',
                 ),
                 'price_featured'  => array(
                     'type'  => 'checkbox',
                     'value' => false,
                     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                     'label' => esc_html__('Featured Activate', 'vultur'),
                     'desc' => esc_html__('', 'vultur'),
                     'help'  => __('Help tip', 'vultur'),
                     'text'  => __('No', 'vultur'),
                 ),
			        ), 
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
		'price_title'  => array(
			    'price_label' => esc_html__('Price Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ),
	    'price_sub_title'  => array(
			    'price_label' => esc_html__('Price Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ), 
	    'price_desc'  => array(
				'label' => esc_html__('Price Description', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => true,
			),
);