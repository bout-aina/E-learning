<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	fw()->theme->get_options( 'customizer/vultur-general-settings'),
	fw()->theme->get_options( 'customizer/vultur-custom-menu-setting'),
	fw()->theme->get_options( 'customizer/vultur-breadcrumbs-setting'),
	fw()->theme->get_options( 'customizer/vultur-socialmenu-setting'),
	fw()->theme->get_options( 'customizer/vultur-switcher-setting'),
	fw()->theme->get_options( 'customizer/vultur-sidebar-setting'),
	fw()->theme->get_options( 'customizer/vultur-contactus-setting'),
	fw()->theme->get_options( 'customizer/vultur-shop-setting'),
	fw()->theme->get_options( 'customizer/vultur-woocommerce-setting'),
	fw()->theme->get_options( 'customizer/vultur-404-settings'),
	fw()->theme->get_options( 'customizer/vultur-footer-settings'),
);
?>  