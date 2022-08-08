<?php
/**
 *coustem post types
 */
add_action('init', 'vultur_coustemposttype');
function vultur_coustemposttype() {
/**
 * Vultur Course Custem Post
 */	
register_post_type('course', array(
        'labels' => array (
            'name' => esc_html__( 'Course', 'vultur'),
            'singular_name' => esc_html__( 'Course', 'vultur'),
            'add_new' =>esc_html__( 'Add New', 'vultur' ),
            'add_new_item' =>esc_html__( 'Add New Course', 'vultur'),
            'edit_item' =>esc_html__( 'Edit Course', 'vultur'),
            'new_item' =>esc_html__( 'New Course', 'vultur'),
            'all_items' =>esc_html__( 'All Course', 'vultur'),
            'view_item' =>esc_html__( 'View Course', 'vultur'),
            'search_items' =>esc_html__( 'Search Course', 'vultur'),
            'not_found' =>esc_html__('No Course found', 'vultur' ),
            'not_found_in_trash' =>esc_html__('No Course found in Trash', 'vultur'),
           'parent_item_colon' => '',
           'menu_name' =>esc_html__('Course', 'vultur')
            ),
        'public' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
        'has_archive' => false,
        'rewrite' => true,
        'capability_type' => 'page',
        'supports' => array ( 'title','editor', 'author','thumbnail') ) );  
        register_taxonomy ('course-category',
		  array ('course'),
		       array(
			    'hierarchical' => true,
			    'label' =>esc_html__('Course Categories', 'vultur'),
			    'singular_label' =>esc_html__('Course Categories', 'vultur'),
			    'rewrite' => true)
		         );
/**
 * Vultur Portfolio Custom Post
 */	
register_post_type('portfolio', array(
        'labels' => array (
        'name' => esc_html__( 'Portfolio', 'vultur'),
        'singular_name' => esc_html__( 'Portfolio', 'vultur'),
        'add_new' =>esc_html__( 'Add New', 'vultur' ),
        'add_new_item' =>esc_html__( 'Add New Portfolio', 'vultur'),
        'edit_item' =>esc_html__( 'Edit Portfolio', 'vultur'),
        'new_item' =>esc_html__( 'New Portfolio', 'vultur'),
        'all_items' =>esc_html__( 'All Portfolio', 'vultur'),
        'view_item' =>esc_html__( 'View Portfolio', 'vultur'),
        'search_items' =>esc_html__( 'Search Portfolio', 'vultur'),
        'not_found' =>esc_html__('No Portfolio found', 'vultur' ),
        'not_found_in_trash' =>esc_html__('No Portfolio found in Trash', 'vultur'),
        'parent_item_colon' => '',
        'menu_name' =>esc_html__('Portfolio', 'vultur')
        ), 
        'public' => true,
		'menu_icon' => 'dashicons-images-alt', 
        'has_archive' => false, 
        'rewrite' => true,
        'capability_type' => 'page',
        'supports' => array ( 'title','editor', 'author','thumbnail') ) );  
        register_taxonomy ('portfolio-category', 
		  array ('portfolio'), 
		       array(
			    'hierarchical' => true,
			    'label' =>esc_html__('Portfolio Categories', 'vultur'),
			    'singular_label' =>esc_html__('Portfolio Categories', 'vultur'),
			    'rewrite' => true)
		         );
}  