<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
    'progress_title'  => array(
        'progress_label' => esc_html__('Progress Heading', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
    ),
    'progress_sub_title'  => array(
        'progress_label' => esc_html__('Progress Sub Heading', 'vultur'),
        'type' => 'text',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
    ),
    'progress_desc'  => array(
        'label' => esc_html__('Progress Description', 'vultur'),
        'type' => 'wp-editor',
        'value' => '',
        'desc' => esc_html__('', 'vultur'),
        'media_buttons' => false,
        'wpautop' => true,
    ),
	'about_image'  => array(
		'label' => esc_html__('Progress Image', 'vultur'),
		'desc' => esc_html__('Upload Progress image Here.', 'vultur'),
		'type' => 'upload',
	),
	'bg_image'  => array(
		'label' => esc_html__('Background Image', 'vultur'),
		'desc' => esc_html__('Upload Background image Here.', 'vultur'),
		'type' => 'upload',
	),

    'progress' =>array(
        'type' => 'addable-popup',
        'value' => array(
            array(
                'progress' => 'Progress',
            ),
        ),
        'label' => esc_html__('Add Progress', 'vultur'),
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
            'progress_number' => array(
                'label' => esc_html__('Number', 'vultur'),
                'type' => 'text',
            ),
        ),
    ),


 );