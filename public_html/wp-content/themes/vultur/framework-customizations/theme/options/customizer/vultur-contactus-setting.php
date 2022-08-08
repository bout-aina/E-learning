<?php
$options = array(
    'contactus_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Contact Section Setting', 'vultur'),
        'options' => array(
        'map_apikey' => array( 
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('Enter Google Map Api Key https://developers.google.com/maps/documentation/javascript/get-api-key', 'vultur'),
			     ),
		'contact_us_heading'  => array( 
			'label' => esc_html__('Contact Us Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 	 
		'contact_us_sub_heading'  => array( 
			'label' => esc_html__('Contact Us Sub Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 	 
		'form_heading'  => array( 
			'label' => esc_html__('Contact Us Form Heading', 'vultur'),
			'type' => 'text',
			'value' => '',
			'desc' => esc_html__('', 'vultur'),
			), 	 	
		'form_shortcode'  => array( 
			 'label' => esc_html__('Add Form Shortcode', 'vultur'),
		 	 'type' => 'text',
			 'value' => '',
			 'desc' => esc_html__('', 'vultur'),
			),   
		'googlemap_ifram'  => array( 
				'label' => esc_html__('Add Google Map Ifram', 'vultur'),
				'type' => 'wp-editor',
				'value' => '',
				'desc' => esc_html__('', 'vultur'),
				'media_buttons' => false,
				'wpautop' => false,
			),	     
		'contactus_detail' =>array( 
		      'type' => 'addable-popup',
		      'value' => array(
			   array(
				    'contactus_address' => 'Contact Us Detail',
			        ),
	     	     ),  
		      'label' => esc_html__('Add Contact Address', 'vultur'),
		      'template' => esc_html__('Contact Us Detail','vultur'),
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
	           'address_info'  => array( 
				   'label' => esc_html__('Address Information', 'vultur'),
				   'type' => 'wp-editor',
			   	   'value' => '',
				   'desc' => esc_html__('', 'vultur'),
				   'media_buttons' => false,
			       'wpautop' => false,
			      ),	   
	           'add_bg_image'  => array( 
			        'label' => esc_html__('Background Image', 'vultur'),
			        'desc' => esc_html__('Upload Profile images Here.', 'vultur'),
			         'type' => 'upload', 
			       ),   
			      ), 
	            ),
				   
          )
         )
       );