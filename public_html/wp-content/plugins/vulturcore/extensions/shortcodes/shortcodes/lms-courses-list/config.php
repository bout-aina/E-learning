<?php if ( ! defined( 'FW' ) ):
	die( 'Forbidden' );
endif;
$cfg = array();
$cfg['page_builder'] = array(
	'title'       => esc_html__('LMS Courses List', 'vultur'),
	'description' => esc_html__('Courses Section', 'vultur'),
	'tab'         => esc_html__('Vultur Shortcode', 'vultur'),
    'icon'  =>'fa fa-pencil-square-o',  
);  