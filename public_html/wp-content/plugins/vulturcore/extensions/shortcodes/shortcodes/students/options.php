<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
      'students_slider' =>array(
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'students_slider' => 'Students Slider',
			       ),
	     	   ),
		     'label' => esc_html__('Add Students Slider', 'vultur'),
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
	               'student_image'  => array(
			         'label' => esc_html__('Student Images', 'vultur'),
			         'desc' => esc_html__('Upload Student images Here.', 'vultur'),
			         'type' => 'upload', 
			          ),
                 'student_position'  => array(
                     'students_label' => esc_html__('Students Sub Heading', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'student_content'  => array(
                     'label' => esc_html__('Student Description', 'vultur'),
                     'type' => 'wp-editor',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                     'media_buttons' => false,
                     'wpautop' => true,
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
		'students_title'  => array(
			    'students_label' => esc_html__('Students Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ), 
	    'students_sub_title'  => array(
			    'students_label' => esc_html__('Students Sub Heading', 'vultur'),
		 	    'type' => 'text',
			    'value' => '',
			    'desc' => esc_html__('', 'vultur'),
			   ), 
	    'students_desc'  => array(
				'label' => esc_html__('Students Description', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => true,
			),
);