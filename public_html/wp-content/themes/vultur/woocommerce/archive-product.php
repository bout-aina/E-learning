<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$theme_sidebar = $vultur_data = '';
if (function_exists( 'fw_get_db_settings_option' )):
    $vultur_data = fw_get_db_settings_option();
endif;
if(!empty($vultur_data['woocommerce_sidebar'])):
    $theme_sidebar = $vultur_data['woocommerce_sidebar'];
else:
    $theme_sidebar = 'full';
endif;
$bread_image = '';
if(!empty($vultur_data['shop_breadcrumbs_image']['url'])):
    $bread_image = $vultur_data['shop_breadcrumbs_image']['url'];
endif;
$bread_color = '';
if(!empty($vultur_data['breadcrumbs_color'])):
    $bread_color = $vultur_data['breadcrumbs_color'];
endif;
$breadcrumbs_switch = '';
if(!empty($vultur_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $vultur_data['breadcrumbs_switch'];
else:
    $breadcrumbs_switch = 'on';
endif;
if($breadcrumbs_switch == 'on'):
    vultur_breadcrumb_funcation($bread_color,$bread_image);
endif;
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        /**
         * Hook: woocommerce_before_main_content.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         * @hooked WC_Structured_Data::generate_website_data() - 30
         */
        do_action( 'woocommerce_before_main_content' );

        /**
         * Hook: woocommerce_archive_description.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
        do_action( 'woocommerce_archive_description' );

        ?>


        <div class="container">
            <div class="row">



                <?php if ( is_active_sidebar( 'woocommerce-sidebar-1' ) ) : ?>

                    <?php
                    if($theme_sidebar == 'full'):
                        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                    else:
                        if($theme_sidebar == 'left'):
                            echo '<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 order-lg-4 order-md-4">';
                        else:
                            echo '<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">';
                        endif;
                    endif;
                else:
                    echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                    ?>

                <?php endif; ?>



                <?php
                if ( have_posts() ) {

                    /**
                     * Hook: woocommerce_before_shop_loop.
                     *
                     * @hooked wc_print_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    do_action( 'woocommerce_before_shop_loop' );
                    echo '';

                    woocommerce_product_loop_start();


                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             *
                             * @hooked WC_Structured_Data::generate_product_data() - 10
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }
                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                }
                ?>


            </div>
            <?php if ( is_active_sidebar( 'woocommerce-sidebar-1' ) ) : ?>

                <?php if($theme_sidebar == 'left'):  ?>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <?php get_sidebar('product'); ?>
                    </div>
                <?php endif; ?>
                <?php if($theme_sidebar == 'right'):  ?>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                        <?php get_sidebar('product'); ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>


        </div>
</div>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>

<?php
get_footer( 'shop' );
?>

