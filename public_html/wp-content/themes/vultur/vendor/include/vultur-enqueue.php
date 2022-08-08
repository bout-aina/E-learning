<?php 
/**
 * Enqueue scripts and styles.
 */
function vultur_scripts() {
$vultur_data = '';
if(function_exists('fw_get_db_settings_option')):	
  $vultur_data = fw_get_db_settings_option();
endif; 
$vultur_color = '';
if(!empty($vultur_data['vultur_color'])):
   $vultur_color = $vultur_data['vultur_color'];
endif;
$map_key = $map_api_key = '';
if(isset($vultur_data['map_apikey']) && !empty($vultur_data['map_apikey'])):
   $map_key = $vultur_data['map_apikey'];
else:
  $map_key = 'AIzaSyBPQsr1E-yV-jARJr7puNv2PcY1xiienLw';
endif; 
$map_api_key = "//maps.googleapis.com/maps/api/js?key=$map_key"; 
/**
 *scripts
 */ 

wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );
	 
wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );

wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/plugin/countto/jquery.appear.js', array('jquery'), '20151215', true );

wp_enqueue_script('circles', get_template_directory_uri() . '/assets/js/circles.js', array('jquery'), '20151215', true );

wp_enqueue_script('vultur-custom', get_template_directory_uri() . '/assets/js/vultur-custom.js', array('jquery'), '20151215', true );

wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '20151215', true );

wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '20151215', true );

wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array('jquery'), '20151215', true );

wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '20151215', true );

wp_enqueue_script('vultur-map', $map_api_key);

if (is_singular() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script('comment-reply');
	 }	 
/**
 *styles
 */
wp_enqueue_style('vultur-style', get_stylesheet_uri());

wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1', 'all');
	
wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1', 'all');
	
wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1', 'all');

wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1', 'all');

wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1', 'all');

wp_enqueue_style('fontawesome5', get_template_directory_uri().'/assets/fonts/fontawesome.min.css', array(), '1', 'all');

wp_enqueue_style('fontawesome4', get_template_directory_uri().'/assets/fonts/font-awesome4.min.css', array(), '1', 'all');

wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array(), '1', 'all');

wp_enqueue_style('vultur-fonts', '//fonts.googleapis.com/css?family=Muli:300,400,500,700,800,900', array(), '1', 'all');


if($vultur_color == 1):
   wp_enqueue_style('vultur-white-custom-style', get_template_directory_uri().'/assets/css/vultur-white-custom-style.css', array(), '1', 'all');
else:
   wp_enqueue_style('vultur-white-custom-style', get_template_directory_uri().'/assets/css/vultur-white-custom-style.css', array(), '1', 'all');
endif;

$theme_color = '';
if(!empty($vultur_data['vultur_theme_color'])):
     $theme_color = $vultur_data['vultur_theme_color'];
endif;
switch($theme_color):  
    case "0":
      wp_enqueue_style('vultur-color0', get_template_directory_uri()."/assets/css/colors/color0.css", array(), '1', 'all');
    break;
    case "1":
      wp_enqueue_style('vultur-color1', get_template_directory_uri()."/assets/css/colors/color1.css", array(), '1', 'all');
    break;
    case "2": 
      wp_enqueue_style('vultur-color2', get_template_directory_uri()."/assets/css/colors/color2.css", array(), '1', 'all');
    break;
	case "3":
      wp_enqueue_style('vultur-color3', get_template_directory_uri()."/assets/css/colors/color3.css", array(), '1', 'all');
    break;
	case "4":
      wp_enqueue_style('vultur-color4', get_template_directory_uri()."/assets/css/colors/color4.css", array(), '1', 'all');
    break;
	case "5":
      wp_enqueue_style('vultur-color5', get_template_directory_uri()."/assets/css/colors/color5.css", array(), '1', 'all');
    break;
	case "6":
      wp_enqueue_style('vultur-color6', get_template_directory_uri()."/assets/css/colors/color6.css", array(), '1', 'all');
    break;
    case "7":
      wp_enqueue_style('vultur-color7', get_template_directory_uri()."/assets/css/colors/color7.css", array(), '1', 'all');
    break;
    default:
        wp_enqueue_style('vultur-theme-change', get_template_directory_uri()."/assets/css/colors/color1.css", array(), '1', 'all');
    break;
endswitch;  

}
add_action( 'wp_enqueue_scripts', 'vultur_scripts' );