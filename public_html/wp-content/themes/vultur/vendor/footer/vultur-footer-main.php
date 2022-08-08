<?php
$vultur_data = '';
if(function_exists( 'fw_get_db_settings_option' )):
    $vultur_data = fw_get_db_settings_option();
endif;

$attachment_id = $vultur_logoimage =  $footerlogoimage = '';
if(!empty($vultur_data['footer_logo_image']['url'])):
    $attachment_id = $vultur_data['footer_logo_image']['attachment_id'];
    $vultur_logoimage = wp_get_attachment_url($attachment_id, 'full');
    $footerlogoimage = $vultur_logoimage;
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
$newsletter_content = '';
if(!empty($vultur_data['newsletter_content'])):
    $newsletter_content = $vultur_data['newsletter_content'];
endif;
$newsletter_placeholder = '';
if(!empty($vultur_data['newsletter_placeholder'])):
    $newsletter_placeholder = $vultur_data['newsletter_placeholder'];
endif;
$newsletter_button_text = '';
if(!empty($vultur_data['newsletter_button_text'])):
    $newsletter_button_text = $vultur_data['newsletter_button_text'];
endif;
$newsletter_action_for_form = '';
if(!empty($vultur_data['newsletter_action_for_form'])):
    $newsletter_action_for_form = $vultur_data['newsletter_action_for_form'];
endif;
$vultur_page_data = '';
if ( function_exists( 'fw_get_db_post_option' )):
	$vultur_page_data = fw_get_db_post_option(get_the_ID());
endif;
?>

<?php
$footer_brand_name = '';
if(!empty($vultur_data['footer_brand_name'])):
    $footer_brand_name = $vultur_data['footer_brand_name'];
endif;
$footer_company_content = '';
if(!empty($vultur_data['footer_company_content'])):
    $footer_company_content= $vultur_data['footer_company_content'];
endif;
$footer_brand_name = '';
if(!empty($vultur_data['footer_brand_name'])):
    $footer_brand_name = $vultur_data['footer_brand_name'];
endif;
$footer_brand_name = '';
if(!empty($vultur_data['footer_brand_name'])):
    $footer_brand_name = $vultur_data['footer_brand_name'];
endif;
$footer_contact_headline = '';
if(!empty($vultur_data['footer_contact_headline'])):
    $footer_contact_headline= $vultur_data['footer_contact_headline'];
endif;
$footer_contact_adress = '';
if(!empty($vultur_data['footer_contact_adress'])):
    $footer_contact_adress = $vultur_data['footer_contact_adress'];
endif;

$footer_contact_email = '';
if(!empty($vultur_data['footer_contact_email'])):
    $footer_contact_email = $vultur_data['footer_contact_email'];
endif;
$footer_contact_tel = '';
if(!empty($vultur_data['footer_contact_tel'])):
    $footer_contact_tel = $vultur_data['footer_contact_tel'];
endif;
$headertop_page_one = '';
if(!empty($vultur_data['headertop_page_one'])):
    $headertop_page_one =$vultur_data['headertop_page_one'];
endif;
$headertop_page_one_link = '';
if(!empty($vultur_data['headertop_page_one_link'])):
    $headertop_page_one_link =$vultur_data['headertop_page_one_link'];
endif;
$headertop_page_two = '';
if(!empty($vultur_data['headertop_page_two'])):
    $headertop_page_two =$vultur_data['headertop_page_two'];
endif;
$headertop_page_two_link = '';
if(!empty($vultur_data['headertop_page_two_link'])):
    $headertop_page_two_link =$vultur_data['headertop_page_two_link'];
endif;
$headertop_page_three = '';
if(!empty($vultur_data['headertop_page_three'])):
    $headertop_page_three =$vultur_data['headertop_page_three'];
endif;
$headertop_page_three_link = '';
if(!empty($vultur_data['headertop_page_three_link'])):
    $headertop_page_three_link =$vultur_data['headertop_page_three_link'];
endif;
?>


		<footer id="footer" class="wrap-bg-secondary">
		<div class="footer-top">

        <div class="container">
	        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
		        <?php
		        echo '<div class="row">';
	        else:
		        echo '<div class="row hidesmall">';
		        ?>
	        <?php endif; ?>

                <div class="col-xl-3 col-lg-4 col-sm-6">
	                <?php if(!empty($footerlogoimage)): ?>
		                <div class="footer-logo">
			                <img src="<?php echo esc_url($footerlogoimage); ?>" alt="<?php esc_attr_e('Logo','vultur'); ?>">
		                </div>
	                <?php endif; ?>
                    <div class="f-widget-title">
                        <?php
                        if(!empty($footer_brand_name)):
                            echo '<h4>'.$footer_brand_name.'</h4>';
                        endif;
                        ?>
                    </div>
                    <div class="footer-text">
                        <?php
                        if(!empty($footer_company_content)):
                            echo '<p>'.$footer_company_content.'</p>';
                        endif;
                        ?>
                    </div>
                    <div class="icon-round-white footer-social mt-25">
                        <?php
                        if(!empty($facebook)):
                            echo '<a href="'.esc_url($facebook).'"><i class="fab fa-facebook" aria-hidden="true"></i></a>';
                        endif;
                        if(!empty($twitter)):
                            echo '<a href="'.esc_url($twitter).'"><i class="fab fa-twitter" aria-hidden="true"></i></a>';
                        endif;
                        if(!empty($pinterest)):
                            echo '<a href="'.esc_url($pinterest).'"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>';
                        endif;
                        if(!empty($behance)):
                            echo '<a href="'.esc_url($behance).'"><i class="fab fa-behance" aria-hidden="true"></i></a>';
                        endif;
                        if(!empty($instagram)):
                            echo '<a href="'.esc_url($instagram).'"><i class="fab fa-instagram" aria-hidden="true"></i></a>';
                        endif;
                        if(!empty($dribbble)):
                            echo '<a href="'.esc_url($dribbble).'"><i class="fab fa-dribbble" aria-hidden="true"></i></a>';
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="f-widget-link">
                        <?php if ( is_active_sidebar('footer-sidebar-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="f-widget-link">
                        <?php if ( is_active_sidebar('footer-sidebar-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="f-widget-title">
                        <?php
                        if(!empty($footer_contact_headline)):
                            echo '<h4>'.$footer_contact_headline.'</h4>';
                        endif;
                        ?>
                    </div>
                    <div class="sigle-address">
                        <?php
                        if(!empty($footer_contact_adress)):
	                        echo '<div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>';
                            echo '<p>'.$footer_contact_adress.'</p>';
                        endif;
                        ?>
                    </div>
                    <div class="sigle-address">
                        <?php
                        if(!empty($footer_contact_email)):
	                        echo '<div class="address-icon"><i class="far fa-envelope-open"></i></div>';
                            echo '<p>'.$footer_contact_email.'</p>';
                        endif;
                        ?>
                    </div>
                    <div class="sigle-address">
                        <?php
                        if(!empty($footer_contact_tel)):
	                        echo '<div class="address-icon"><i class="fas fa-phone"></i></div>';
                            echo '<p>'.$footer_contact_tel.'</p>';
                        endif;
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php if(!empty($copright)): ?>
    <div class="container">
    <div class="footer-bottom">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="copyright text-left mt-5">
                    <?php
                    if(!empty($copright)):
                        echo '<p>'.$copright.'</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="footer-submenu text-right">
                    <?php
                    //Top Header Right
                    if(!empty($headertop_page_one)):
                        echo '<a href='.$headertop_page_one_link.'>'.$headertop_page_one.'</a>';
                    endif;
                    if(!empty($headertop_page_two)):
                        echo '<a href='.$headertop_page_two_link.'>'.$headertop_page_two.'</a>';
                    endif;
                    if(!empty($headertop_page_three)):
                        echo '<a href='.$headertop_page_three_link.'>'.$headertop_page_three.'</a>';
                    endif;
                    ?>
                </div>
            </div>


            </div>
        </div>
        <?php endif; ?>
        <div class="cd-top"></div>
        <div class="cursor"></div>
        <div class="cursor2"></div>
    </div>
</footer>