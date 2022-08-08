<?php
$options = array(
    'woocommerce_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('WooCommerce Setting', 'vultur'),
        'options' => array(
		   'woocommerce_minicart' => array(
				      'type'  => 'switch',
				      'value' => 'on',
				      'label' => esc_html__('WooCommerce Mini Cart Enable/Disable', 'vultur'),
				    'left-choice' => array(
					                 'value' => 'off',
					                 'label' => esc_html__('Off', 'vultur'),
				                     ),
				    'right-choice' => array(
					                 'value' => 'on',
					                 'label' => esc_html__('On', 'vultur'),
				                  ),
			                 ),
		    'shop_pageurl'  => array( 
			     'about_label' => esc_html__('Shop Page Url', 'vultur'),
			     'type' => 'text',
			     'value' => '',
			     'desc' => esc_html__('', 'vultur'),
			     ),	
			'shop_icon'  => array( 
			     'about_label' => esc_html__('Shop Icon', 'vultur'),
			     'type' => 'textarea',
			     'value' => '',
			     'desc' => esc_html__('', 'vultur'),
			     ),
							 
                 )
           )
     );
?> 