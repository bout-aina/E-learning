<?php 
if (!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Portfolio Single Page Setting', 'vultur'),
		'type' => 'box',
		'options' => array(
		    'portfolio_style' => array(
                'label'   => __('Portfolio select Style', 'vultur'),
                'desc'    => __('Portfolio select Layout Style', 'vultur'),
                'type'    => 'select',
                'choices' => array(
                    'style1'  => __('style 1', 'vultur'),
                    'style2'  => __('style 2', 'vultur'),
                ),
                'value'   => 'style1'
            ),
		    'image_sub_title' => array(
		           'label' => esc_html__('Image Sub Title', 'vultur'),
		           'type' => 'text',
	              ), 
		     'video_title' => array(
		           'label' => esc_html__('Video Title', 'vultur'),
		           'type' => 'text',
	              ), 
	       'video_sub_title' => array(
		           'label' => esc_html__('Video Sub Title', 'vultur'),
		           'type' => 'text',
	              ), 
	       'video_url' => array(
		           'label' => esc_html__('Youtube Video Url', 'vultur'),
		           'type' => 'text',
	              ), 
		    'video_image'  => array( 
					'label' => esc_html__('Portfolio Video Image', 'vultur'),
					'desc' => esc_html__('Portfolio Video Image Upload  image Here.', 'vultur'),
					'type' => 'upload', 
					        ),	
		    'blog_single_sidebar' => array(
				'label'   => esc_html__( 'Sidebar Position', 'vultur' ),
				'type'    => 'image-picker',
				'value'   => 'right',
				'desc'    => esc_html__( 'Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.','vultur' ),
				'choices' => array(
					'full' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/1c.png'
						),
					),
					'left' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cl.png'
						),
					),
					'right' => array(
						'small' => array(
							'height' => 40,
							'src'    => get_template_directory_uri() . '/assets/images/2cr.png'
						),
					),
				),
			), 
	    
        'breadcrumbs_switch' => array( 
                        'type'  => 'switch',
						'value' => 'no',
						'label' => esc_html__('Show Breadcrumbs', 'vultur'),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'vultur'),
								),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'vultur'),
								),
						),
		'comment_switch' => array( 
                        'type'  => 'switch',
						'value' => 'no',
						'label' => esc_html__('Show Comment', 'vultur'),
						'left-choice' => array(
								'value' => 'no',
								'label' => esc_html__('No', 'vultur'),
								),
						'right-choice' => array(
								'value' => 'yes',
								'label' => esc_html__('Yes', 'vultur'),
								),
							 ),
            'breadcrumbs_post_image'  => array( 
						    'label' => esc_html__('Breadcrumbs Background Image', 'vultur'),
						    'desc' => esc_html__('Breadcrumbs Background  Upload  image Here.', 'vultur'),
						    'type' => 'upload', 
					        ),	
			
			        ),
	         ),
      );
?>