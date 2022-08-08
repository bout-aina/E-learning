<?php
$options = array(
    'shop_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Shop Section Setting', 'vultur'),
        'options' => array(
        'shop_heading'  => array( 
			'about_label' => esc_html__('Shop Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 
		'shop_sub_heading'  => array( 
			'label' => esc_html__('Shop Sub Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),	
		'shop_product_show'  => array( 
			'label' => esc_html__('Show Number Of Products', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),	
        'shop_product_load'  => array( 
			'label' => esc_html__('Load Number Of Products', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			),				
		   )
         )
     );