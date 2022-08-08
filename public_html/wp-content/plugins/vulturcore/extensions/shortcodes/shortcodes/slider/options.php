<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
      'slider' =>array(
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				   'slider' => 'Slider',
			       ),
	     	   ),
		     'label' => esc_html__('Add more Slider', 'vultur'),
             'template' => '{{=title}}',
		     'popup-title' => null,
		     'size' => 'small', // small, medium, large
		     'limit' => 0, // limit the number of popup`s that can be added
	      	 'add-button-text' => esc_html__('Add', 'vultur'),
		     'sortable' => true,
		     'popup-options' => array(
                 'slider_height'  => array(
                     'type'  => 'checkbox',
                     'value' => true,
                     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                     'label' => esc_html__('Disable Auto Height', 'vultur'),
                     'desc' => esc_html__('', 'vultur'),
                     'help'  => __('Disable auto height 100% and Enable for Full Height 100%', 'vultur'),
                     'text'  => __('Yes', 'vultur'),
                 ),
                 'position'  => array(
                     'type'  => 'select',
                     'value' => 'choice-3',
                     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                     'label' => __('Position', '{vultur}'),
                     'desc'  => __('Description', '{vultur}'),
                     'help'  => __('Help tip', '{vultur}'),
                     'choices' => array(
                         '' => 'Left',
                         'position-center' => __('Center', '{vultur}'),
                     ),
                     'no-validate' => false,
                 ),
		           'title' => array(
		           'label' => esc_html__('Title', 'vultur'),
		           'type' => 'text',
                   'value' => '',
                    ),
                     'subtitle'  => array(
                         'teams_label' => esc_html__('Slider Sub Heading', 'vultur'),
                         'type' => 'text',
                         'value' => '',
                         'desc' => esc_html__('', 'vultur'),
                     ),
	               'slider_image'  => array(
			         'label' => esc_html__('Slider Images', 'vultur'),
			         'desc' => esc_html__('Upload Slider images Here.', 'vultur'),
			         'type' => 'upload', 
			          ),
                 'slider_content'  => array(
                     'label' => esc_html__('Slider Content', 'vultur'),
                     'type' => 'wp-editor',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                     'media_buttons' => false,
                     'wpautop' => true,
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
                 'button_text_light'  => array(
                     'label' => esc_html__('Button Light Text', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'button_link_light'  => array(
                     'label' => esc_html__('Button Light Link', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'play_button_link'  => array(
                     'label' => esc_html__('Play Button Link', 'vultur'),
                     'type' => 'text',
                     'value' => '',
                     'desc' => esc_html__('', 'vultur'),
                 ),
                 'search_course'  => array(
                     'type'  => 'checkbox',
                     'value' => false,
                     'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                     'label' => esc_html__('Display Search Box', 'vultur'),
                     'desc' => esc_html__('', 'vultur'),
                     'help'  => __('Show Search Box', 'vultur'),
                     'text'  => __('Yes', 'vultur'),
                 ),
                 'search_course_text'  => array(
                     'label' => esc_html__('Placeholder for Search', 'vultur'),
                     'type' => 'text',
                     'value' => 'Search course...',
                     'desc' => esc_html__('', 'vultur'),
                 ),
			        ), 
	               ),
);