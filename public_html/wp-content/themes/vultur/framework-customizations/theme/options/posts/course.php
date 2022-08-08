<?php if(!defined( 'FW' ))  die('Forbidden') ;
$options = array(
	'post_setting' => array(
		'title' => esc_html__('Course Page Setting', 'vultur'),
		'type' => 'box',
		'options' => array(
		'author_name' => array(
                'type'  => 'text',
                'label' =>esc_html__('Author name', 'vultur'),
                'desc'  => esc_html__('', 'vultur'),
                'value' => esc_html__('', 'vultur'),
             ),
        'time' => array(
                'type'  => 'text',
                'label' =>esc_html__('Course Time', 'vultur'),
                'desc'  => esc_html__('', 'vultur'),
                'value' => esc_html__('', 'vultur'),
             ),    
        'price' => array(
                'type'  => 'text',
                'label' =>esc_html__('Course Price', 'vultur'),
                'desc'  => esc_html__('', 'vultur'),
                'value' => esc_html__('', 'vultur'),
             ),
            'author_image'  => array(
                'label' => esc_html__('Author Image', 'vultur'),
                'desc' => esc_html__('Author Image Upload  image Here.', 'vultur'),
                'type' => 'upload',
            ),
            'single_link' => array(
                'type'  => 'text',
                'label' =>esc_html__('Link to Single Page', 'vultur'),
                'desc'  => esc_html__('', 'vultur'),
                'value' => esc_html__('', 'vultur'),
                'desc'    => esc_html__( 'Single Page for the Course Sample /contact/','vultur' ),
            ),
            'blog_single_sidebar' => array(
				'label'   => esc_html__( 'Sidebar Position', 'vultur' ),
				'type'    => 'image-picker',
				'value'   => esc_html__('right', 'vultur' ),
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
				'value' => 'yes',
				'label' => esc_html__('Show Breadcrumbs', 'vultur'),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'vultur'),
				),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'vultur'),
				),
			),
			'comment_switch' => array(
				'type'  => 'switch',
				'value' => 'yes',
				'label' => esc_html__('Show Comment', 'vultur'),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'vultur'),
				),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'vultur'),
				),
			),
			'breadcrumbs_post_image'  => array(
				'label' => esc_html__('Breadcrumbs Background  Image', 'vultur'),
				'desc' => esc_html__('Breadcrumbs Background  Upload  image Here.', 'vultur'),
				'type' => 'upload',
			),
			'breadcrumbs_post_color'  =>array(
				'type'  => 'color-picker',
				'value' => '',
				'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
				'label' => __('Breadcrumbs Bg Color Option', 'vultur'),
				'desc'  => __('Breadcrumbs Bg Color Option', 'vultur'),
				'help'  => __('Help tip', 'vultur'),
			),
		),
	   ),
   );
?>