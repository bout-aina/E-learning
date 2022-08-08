<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );
$vultur_post_data = $bread_image = $comment_switch = '';
if ( function_exists( 'fw_get_db_post_option' )):	
    $vultur_post_data = fw_get_db_post_option(get_the_ID());
endif;
if(!empty($vultur_post_data['blog_single_sidebar'])):
    $post_sidebar_position = $vultur_post_data['blog_single_sidebar'];
 else:
    $post_sidebar_position = 'right';
 endif;
 $comment_switch = '';
if(!empty($vultur_post_data['comment_switch'])):
     $comment_switch = $vultur_post_data['comment_switch'];
  else:
    $comment_switch = 'yes';
endif; 
$breadcrumbs_switch = '';
if(!empty($vultur_post_data['breadcrumbs_switch'])):
   $breadcrumbs_switch = $vultur_post_data['breadcrumbs_switch'];
else:
   $breadcrumbs_switch = 'yes';   
endif;
$bread_image = '';
if(!empty($vultur_post_data['breadcrumbs_post_image']['url'])):
  $bread_image = $vultur_post_data['breadcrumbs_post_image']['url'];
endif;
$bread_color = '';
if(!empty($vultur_post_data['breadcrumbs_post_color'])):
   $bread_color = $vultur_post_data['breadcrumbs_post_color'];
endif;
if($breadcrumbs_switch == 'yes'): 
   vultur_breadcrumb_funcation($bread_color,$bread_image);
endif;
 ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		 do_action( 'woocommerce_before_main_content' );
	?>

	 <div class="container">
		 <div class="row">
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <div class="shop-single">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	
	</div>
	</div>

		 </div>
	 </div>



		  <?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


<?php get_footer( 'shop' ); 
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */