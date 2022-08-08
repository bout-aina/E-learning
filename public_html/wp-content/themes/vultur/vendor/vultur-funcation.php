<?php
/**
 *Vultur enqueue
 */
require get_template_directory().'/vendor/include/vultur-enqueue.php';
/**
 *Vultur enqueue
 */
require get_template_directory().'/vendor/include/vultur-aq-resizer.php';
/**
 *Vultur menu shorter
 */
function vultur_menu_single(){
 require get_template_directory().'/vendor/include/vultur-menu-short.php';
}
/**
 *Vultur Comment Load
 */ 
require get_template_directory().'/vendor/include/vultur-comment.php';
/**
 *Load Vultur Tgm Plugin Load
 */ 
require get_template_directory().'/vendor/theme-plugin/vultur-plugin-activate-config.php';
/**  
 *get_the_excerpt
 */ 
function vultur_the_excerpt($charlength) {
	 $result = '';
	 $excerpt = get_the_excerpt();
	 $charlength++;
     if (mb_strlen( $excerpt ) > $charlength ):
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if($excut < 0):
		  $result .= mb_substr( $subex, 0, $excut );
		else :
		  $result .= $subex;
	    endif;
		  $result .= '...';
	    else :
		  $result .= $excerpt; 
	  endif;
	  return $result;
	 
}
/** 
 *Vultur Breadcrumb Funcation
 */
function vultur_breadcrumb_funcation($bread_color,$bread_image){
    $bg_color = '';
    if(!empty($bread_color)):
       $bg_color = 'background-color:' .$bread_color. ';';
    endif;
    $bg_image = '';
    if(!empty($bread_image)):
        $bg_image = 'background: url(' .$bread_image. ');';
    endif;
    $background = '';
    $background   = ($bg_image || $bg_color) ? 'style="' . esc_attr($bg_image.$bg_color) . '"' : '';
	?>
     <div class="vultur_banner" <?php printf($background); ?>>
            <div class="container">
                <div class="row">
                    <div class="vultur_banner_title">
					 <?php 
                      echo '<h1>';
                     if ( is_404() ) {
                         printf( esc_html__( 'Page Not Found', 'vultur' ));
                     }
                         if(is_home() && have_posts()) :
			               esc_html_e('Blog','vultur');
                         endif;
		               if(is_page()):
                          the_title();
                       endif;
                       if(is_single()): 
                         single_post_title();
                       endif;
                       if(class_exists( 'WooCommerce' ) ):
                         if(is_shop()){
                               esc_html_e('Shop','vultur');
                           }else{
                           if(is_archive()):
                              the_archive_title();
                           endif;
                           }
                           endif;
                        if(!class_exists('WooCommerce')):
                           if(is_archive()):
                              the_archive_title();
                           endif;
                        endif;
                        if(is_search()):
                          printf( esc_html__( 'Search Results for: %s', 'vultur' ), '<span>'.get_search_query().'</span>' );
                       endif;
                  echo '</h1>
                        <div class="vultur_breadcrumb">';
                         if(function_exists('fw_ext_breadcrumbs')) { echo fw_ext_breadcrumbs(); }
			      echo '</div>';
				  ?>
                    </div>
                </div>
            </div>
        </div>
<?php
 $bread_color = $bread_image = '';
  }
/** 
 * Vultur Footer Copyright Funcation
 */ 
function vultur_footer_copyright(){
    $vultur_data = '';
    if ( function_exists( 'fw_get_db_settings_option' )):	
          $vultur_data = fw_get_db_settings_option();
    endif; 
    $copright = '';
    if(!empty($vultur_data['footer_copyrigth'])):
         $copright = $vultur_data['footer_copyrigth'];
    endif;
    $facebook ='';
     if(!empty($vultur_data['facebook'])):
         $facebook = $vultur_data['facebook'];
    endif;
    $instagram ='';
     if(!empty($vultur_data['instagram'])):
         $instagram = $vultur_data['instagram'];
    endif;
    $linkedin ='';
     if(!empty($vultur_data['linkedin'])):
         $linkedin = $vultur_data['linkedin'];
    endif;
    $twitter ='';
    if(!empty($vultur_data['twitter'])):
         $twitter = $vultur_data['twitter'];
    endif;
    $pinterest ='';
    if(!empty($vultur_data['pinterest'])):
         $pinterest = $vultur_data['pinterest'];
    endif;
    $behance = '';
    if(!empty($vultur_data['behance'])):
         $behance = $vultur_data['behance'];
    endif;
    $dribbble = '';
    if(!empty($vultur_data['dribbble'])):
         $dribbble = $vultur_data['dribbble'];
    endif;
    echo '<div class="vultur_footer_wrapper vultur_toppadder30 vultur_bottompadder30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
					if(!empty($copright)):
						echo '<p>'.printf($copright).'</p>';
					else:
					  echo '<p>'.esc_html__('Copyright','vultur').
					    ' <i class="fa fa-copyright"></i> '.esc_html__('2018 All Rights Reserved','vultur').'</p>';
					endif; 
				    echo '<ul>';
				           if(!empty($facebook)):
							  echo '<li><a href="'.esc_url($facebook).'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($twitter)):
							   echo '<li><a href="'.esc_url($twitter).'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($pinterest)):
							   echo '<li><a href="'.esc_url($pinterest).'"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($behance)):
							  echo '<li><a href="'.esc_url($behance).'"><i class="fa fa-behance" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($instagram)):
							  echo '<li><a href="'.esc_url($instagram).'"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
							endif;
							if(!empty($dribbble)):
							   echo '<li><a href="'.esc_url($dribbble).'">
							      <i class="fa fa-dribbble" aria-hidden="true"></i></a></li>'; 
						     endif;	
					echo '</ul>
					</div>
				</div> 
			</div> 
		</div>';
}
/**
 *Vultur Footer Copyright Funcation
 */
 if(!function_exists('vultur_menu_editor')){

	function vultur_menu_editor($args){
       
	   if ( ! current_user_can( 'manage_options' ) ){
           return;
        }
        // see wp-includes/nav-menu-template.php for available arguments
        extract( $args );
        $link = $link_before
             . '<a href="' .admin_url( 'nav-menus.php' ) . '">'.$before.esc_html__('Add a menu','vultur').$after.'</a>'
            . $link_after;
        // We have a list
        if ( FALSE !== stripos( $items_wrap, '<ul' )

			or FALSE !== stripos( $items_wrap, '<ol' )

		) {
        $link = "<li>$link</li>";
        }
        $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
        if ( ! empty ( $container ) ){
           $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
        }
        if ( $echo ){
           echo "$output";
        }
        return $output;

	}

}
/**
 *global Variable
 */
function vultur_post_variables(){
	global $post;
	return $post; 
}
/** product title */
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
remove_action( 'woocommerce_archive_description', 'action_woocommerce_archive_description', 10, 2 );
add_action('woocommerce_shop_loop_item_title','vultur_product_title',10);
function vultur_product_title()
{
   echo '<h4 class="self_product_heading">';
   echo esc_attr(the_title_attribute());
   echo '</h4>';
}

/**
 *add_theme_support
 */
function vultur_woocommerce_support() {
   add_theme_support('woocommerce');
} 
add_action('after_setup_theme', 'vultur_woocommerce_support');
/**
 * Mini Cart
 */
function vultur_custom_mini_cart() {
   if(class_exists("Woocommerce")){
	echo '<div class="self-cart-dropdown"><a href="#" class="dropdown-back" data-toggle="dropdown"> ';
	    echo '<i class="fas fa-shopping-bag"></i>';
	    echo '<div class="basket-item-count" style="display: inline;">';
	        echo '<span class="cart-items-count count">';
	            echo WC()->cart->get_cart_contents_count();
	        echo '</span>';
	    echo '</div>';
	echo '</a>';
	echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
	        echo '<li> <div class="widget_shopping_cart_content">';
			          woocommerce_mini_cart();
		 echo '</div></li></ul></div>';
	}

}
//set deafult loop product
add_filter( 'loop_shop_per_page', function(){
	$cols = 9;
	return $cols;
});
add_filter( 'body_class', function($classes){
    remove_action( 'wp_footer', 'wc_no_js' );
    $classes = array_diff($classes, array('woocommerce-no-js'));
    return array_values($classes);
},10, 1);
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);