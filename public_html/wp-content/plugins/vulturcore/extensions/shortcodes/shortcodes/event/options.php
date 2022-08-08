<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
      'event' =>array(
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'event' => 'Event',
			       ),
	     	   ),
		     'label' => esc_html__('Add Event', 'vultur'),
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
                 'event_content'  => array(
                     'label' => esc_html__('Content', 'vultur'),
                     'type' => 'wp-editor',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                     'media_buttons' => false,
                     'wpautop' => true,
                 ),
                 'student_image'  => array(
                     'label' => esc_html__('Student Images', 'vultur'),
                     'desc' => esc_html__('Upload Student images Here.', 'vultur'),
                     'type' => 'upload',
                 ),
                 'date_day'  => array(
                     'label' => esc_html__('Date Day Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'date_month_year'  => array(
                     'label' => esc_html__('Date Month & Year Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'time'  => array(
                     'label' => esc_html__('Time Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'city'  => array(
                     'label' => esc_html__('City Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'event_button'  => array(
                     'label' => esc_html__('Button Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'event_link'  => array(
                     'label' => esc_html__('Button Link', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
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
		'event_title'  => array(
			    'event_label' => esc_html__('Event Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ),
	    'event_sub_title'  => array(
			    'event_label' => esc_html__('Event Sub Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ), 
	    'event_desc'  => array(
				'label' => esc_html__('Event Description', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => true,
			),
				
);