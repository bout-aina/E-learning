<?php 
$options = array(
     'breadcrumbs_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Breadcrumbs Setting', 'vultur'),
        'options' => array(
            'breadcrumbs_switch' => array(
				      'type'  => 'switch',
				      'value' => 'on',
				      'label' => esc_html__('Breadcrumbs Enable/Disable', 'vultur'),
				              'left-choice' => array(
					                           'value' => 'off',
					                           'label' => esc_html__('Off', 'vultur'),
				                              ),
				              'right-choice' => array(
					                         'value' => 'on',
					                         'label' => esc_html__('On', 'vultur'),
				                            ),
			                         ),
			'breadcrumbs_image'  => array( 
						 'label' => esc_html__('Breadcrumbs Background Image', 'vultur'),
						 'desc' => esc_html__('Breadcrumbs Background Upload  image Here.', 'vultur'),
						 'type' => 'upload', 
					  ),
			'shop_breadcrumbs_image'  => array(
						 'label' => esc_html__('Shop Background Image', 'vultur'),
						 'desc' => esc_html__('Breadcrumbs Background Upload  image Here.', 'vultur'),
						 'type' => 'upload',
					  ),
					  
		   	     )
             ) 
        ); 
