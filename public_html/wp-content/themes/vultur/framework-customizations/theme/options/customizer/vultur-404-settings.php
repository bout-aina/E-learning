<?php
$options = array(
    'error_404_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('404 Setting', 'vultur'),
        'options' => array(
		    'error_404_heading'  => array( 
				'label' => esc_html__('Heading', 'vultur'),
				'type' => 'text',
				'value' => '404',
				'desc' => esc_html__('', 'vultur'),
			),
			'error_404_desc'  => array( 
				'label' => esc_html__('Title', 'vultur'),
				'type' => 'wp-editor',
				'value' => 'Sorry, This Page Is Not Available',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => false,
			),
			
		)
    ) 
);  
?> 