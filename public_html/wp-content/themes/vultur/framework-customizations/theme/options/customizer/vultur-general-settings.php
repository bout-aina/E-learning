<?php
$options = array(
    'general_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('General Setting', 'vultur'),
        'options' => array(
			'logo_setting' => array(
				'type' => 'group',
				'options' => array(
					'logo_image'  => array( 
						'label' => esc_html__('Logo Image', 'vultur'),
						'desc' => esc_html__('Upload logo image Here.', 'vultur'),
						'type' => 'upload', 
					),
					'logo_width'  => array( 
						'type' => 'text',
						'value' => '111',
						'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'vultur'),
				    	),
					'logo_height'  => array( 
						'type' => 'text',
						'value' => '111',
						'desc' => esc_html__('Enter logo width size in pixels. Ex: 200', 'vultur'),
					),
					'logo_svgcode'  => array(
						'type'  => 'textarea',
						'value' => '',
						'label' => __('Logo Svg Code', 'vultur'),
						'desc'  => __('Enter svg code', 'vultur'),
					),
				), 
			),
           'loader_switch' => array(
			    'type'  => 'switch',
		        'value' => 'on',
		        'label' => esc_html__('Loader Enable/Disable', 'vultur'),
		        'left-choice' => array(
				'value' => 'off',
				'label' => esc_html__('Off', 'vultur'),
				 ),
		        'right-choice' => array(
					  'value' => 'on',
					  'label' => esc_html__('On', 'vultur'),
				           ),
			             ),
                'loader_image'  => array( 
        			'label' => esc_html__('Loader Image', 'vultur'),
        			'desc' => esc_html__('Upload logo image Here.', 'vultur'),
        			'type' => 'upload', 
        			),

		 )
    )
);
?> 