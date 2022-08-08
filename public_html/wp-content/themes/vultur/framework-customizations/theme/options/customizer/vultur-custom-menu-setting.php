<?php
/**
 * Top Header
 */
$options = array(
    'custom_menu_settings' => array(
           'type' => 'tab',
           'title' => esc_html__('Custom Menu Setting', 'vultur'),
           'options' => array(
			'button_text' => array(
		          'label' => esc_html__('Button Text (Free Trial)', 'vultur'),
		          'type' => 'text',
	           ),
			'button_link' => array(
		          'label' => esc_html__('Button Link', 'vultur'),
		          'type' => 'text',
	           ),
				'header_style' => array(
                    'type'  => 'select',
                        'label' => esc_html__('Select Header Style','vultur'),
                        'value' => esc_html__('header_black_white', 'vultur'),
                        'choices' => array(
                                'header_three' => esc_html__('Header Style Three (Full Width)', 'vultur'),
                                'header_black_white' => esc_html__('Black and White (Container)', 'vultur'),
                                ),
                ),
               'top_header_style' => array(
                   'type'  => 'select',
                   'label' => esc_html__('Select Top Header Style','vultur'),
                   'value' => esc_html__('top_header_dark', 'vultur'),
                   'choices' => array(
                       'top_header_dark' => esc_html__('Header Dark', 'vultur'),
                       'top_header_white' => esc_html__('Header White', 'vultur'),
                       'top_header_theme_color' => esc_html__('Theme Color', 'vultur'),
                   ),
               ),
               'top_header' => array(
                   'type'  => 'switch',
                   'value' => 'off',
                   'label' => esc_html__('Top Header Enable/Disable', 'vultur'),
                   'left-choice' => array(
                       'value' => 'off',
                       'label' => esc_html__('Off', 'vultur'),
                   ),
                   'right-choice' => array(
                       'value' => 'on',
                       'label' => esc_html__('On', 'vultur'),
                   ),
               ),
               'top_header_social' => array(
                   'type'  => 'switch',
                   'value' => 'off',
                   'label' => esc_html__('Top Header Social Icon Enable/Disable', 'vultur'),
                   'left-choice' => array(
                       'value' => 'off',
                       'label' => esc_html__('Off', 'vultur'),
                   ),
                   'right-choice' => array(
                       'value' => 'on',
                       'label' => esc_html__('On', 'vultur'),
                   ),
               ),
	           'search_box' => array(
		           'type'  => 'switch',
		           'value' => 'on',
		           'label' => esc_html__('Search Box Header On/Off', 'vultur'),
		           'left-choice' => array(
			           'value' => 'off',
			           'label' => esc_html__('Off', 'vultur'),
		           ),
		           'right-choice' => array(
			           'value' => 'on',
			           'label' => esc_html__('On', 'vultur'),
		           ),
	           ),
               'headertop_tel' => array(
                   'label' => esc_html__('Tel', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_tel_link' => array(
                   'label' => esc_html__('Link for Tel', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_adress' => array(
                   'label' => esc_html__('Adress Text', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_adress_link' => array(
                   'label' => esc_html__('Adress Link', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_email' => array(
                   'label' => esc_html__('Email Text', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_email_link' => array(
                   'label' => esc_html__('Email Link', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_one' => array(
                   'label' => esc_html__('Page One Text', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_one_link' => array(
                   'label' => esc_html__('Page One Link', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_two' => array(
                   'label' => esc_html__('Page Two Text', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_two_link' => array(
                   'label' => esc_html__('Page Two Link', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_three' => array(
                   'label' => esc_html__('Page Three Text', 'vultur'),
                   'type' => 'text',
               ),
               'headertop_page_three_link' => array(
                   'label' => esc_html__('Page Three Link', 'vultur'),
                   'type' => 'text',
               ),
				),
			),
			
        );