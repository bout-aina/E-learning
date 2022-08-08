<?php
$vultur_data = '';
if(function_exists( 'fw_get_db_settings_option' )):
    $vultur_data = fw_get_db_settings_option();
endif;
$vultur_thumb_w = $vultur_thumb_h = '';
if(!empty( $vultur_data['logo_width']) && !empty( $vultur_data['logo_height'])):
    $vultur_thumb_w =  $vultur_data['logo_width'];
    $vultur_thumb_h =  $vultur_data['logo_height'];
endif;
$vultur_color = '';
if(!empty($vultur_data['vultur_color'])):
   $vultur_color = $vultur_data['vultur_color'];
endif;
$logo_svgcode = '';
if(!empty($vultur_data['logo_svgcode'])):
    $logo_svgcode =$vultur_data['logo_svgcode'];
endif;
$attachment_id = $vultur_logoimage =  $logoimage = '';
if(!empty($vultur_data['logo_image']['url'])):
	$attachment_id = $vultur_data['logo_image']['attachment_id'];
	$vultur_logoimage = wp_get_attachment_url($attachment_id, 'full');
	$logoimage = vultur_resize($vultur_logoimage, $vultur_thumb_w, $vultur_thumb_h , true);
else:
  if($vultur_color == 1):
    $logoimage = get_template_directory_uri().'/assets/images/logo.png';
  else:
    $logoimage = get_template_directory_uri().'/assets/images/logo.png';
  endif;
endif;
$breadcrumbs_switch = '';
if(!empty($vultur_data['breadcrumbs_switch'])):
    $breadcrumbs_switch = $vultur_data['breadcrumbs_switch'];
 else:
    $breadcrumbs_switch = 'on';
endif;
$button_text = '';
if(!empty($vultur_data['button_text'])):
    $button_text =$vultur_data['button_text'];
endif;
$button_link = '';
if(!empty($vultur_data['button_link'])):
    $button_link =$vultur_data['button_link'];
endif;
$header_style = '';
if(!empty($vultur_data['header_style'])):
    $header_style =$vultur_data['header_style'];
endif;
$top_header_style = '';
if(!empty($vultur_data['top_header_style'])):
    $top_header_style =$vultur_data['top_header_style'];
endif;
$top_header = '';
if(!empty($vultur_data['top_header'])):
    $top_header =$vultur_data['top_header'];
endif;
$top_header_social = '';
if(!empty($vultur_data['top_header_social'])):
    $top_header_social =$vultur_data['top_header_social'];
endif;
$search_box = '';
if(!empty($vultur_data['search_box'])):
	$search_box =$vultur_data['search_box'];
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
$headertop_tel = '';
if(!empty($vultur_data['headertop_tel'])):
    $headertop_tel =$vultur_data['headertop_tel'];
endif;
$headertop_tel_link = '';
if(!empty($vultur_data['headertop_tel_link'])):
    $headertop_tel_link =$vultur_data['headertop_tel_link'];
endif;
$headertop_adress = '';
if(!empty($vultur_data['headertop_adress'])):
    $headertop_adress =$vultur_data['headertop_adress'];
endif;
$headertop_adress_link = '';
if(!empty($vultur_data['headertop_adress_link'])):
    $headertop_adress_link =$vultur_data['headertop_adress_link'];
endif;
$headertop_email = '';
if(!empty($vultur_data['headertop_email'])):
    $headertop_email =$vultur_data['headertop_email'];
endif;
$headertop_email_link = '';
if(!empty($vultur_data['headertop_email_link'])):
    $headertop_email_link =$vultur_data['headertop_email_link'];
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

<header>
<div id="header" class="transparent-header <?php echo esc_html($header_style);?>">


<?php if($top_header =='on'): ?>
<div class="topheader <?php echo esc_html($top_header_style);?> hidemobile">
<div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="top-header-left">
                <?php
                //Top header Left
                if(!empty($headertop_tel)):
                    echo '<div class="address-icon"><i class="fas fa-phone"></i>';
                    echo '<a href=tel:'.$headertop_tel_link.'>'.$headertop_tel.'</a></div>';
                endif;
                if(!empty($headertop_adress)):
                    echo '<div class="address-icon"><i class="far fa-envelope-open"></i>';
                    echo '<a href='.$headertop_adress_link.'>'.$headertop_adress.'</a></div>';
                endif;
                if(!empty($headertop_email)):
                    echo '<div class="address-icon"><i class="fas fa-map-marker-alt"></i>';
                    echo '<a href='.$headertop_email_link.'>'.$headertop_email.'</a></div>';
                endif;
                ?>
    </div>
    </div>
    <div class="col-lg-6 text-right">
                <div class="custom-page-top">
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

                <?php if($top_header_social =='on'): ?>
                    <div class="social_top_header">
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
                <?php endif; ?>

                <?php
                if(!empty($button_text)): ?>
                    <div class="header-cta">
                        <a href="<?php echo esc_url($button_link);?>" class="btn-1c"><?php echo esc_html($button_text);?></a>
                    </div>
                <?php endif; ?>
    </div>
    </div>
</div>
</div>
<?php endif; ?>


    <nav class="navbar navbar-default navbar-expand-md navbar-light" id="navigation" data-offset-top="1">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <?php
                    if(empty($logo_svgcode)):
                        if(!empty($logoimage)): ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url($logoimage); ?>" alt="<?php esc_attr_e('Logo','vultur'); ?>"></a>
                        <?php
                        endif;
                    else:
                        echo '<a href="'.esc_url(home_url('/')).'">';
                        printf($logo_svgcode);
                        echo '</a>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="burger-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

	        <?php if($search_box =='on'): ?>
            <div class="hidemobile header-search">
                <form method="get" name="search-course" class="learn-press-search-course-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" name="s" class="search-course-input" value="" placeholder="Search course...">
                    <input type="hidden" name="ref" value="course">
                    <button class="lp-button button search-course-button">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
	        <?php endif; ?>

            <div class="collapse navbar-collapse vultur_menu" id="navbarCollapse">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'vultur',
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'nav navbar-nav ml-auto',
                    'container' => false,
                    'fallback_cb'=> 'vultur_menu_editor'
                ) );
                ?>
                <?php
                $woocommerce_minicart = '';
                if(!empty($vultur_data['woocommerce_minicart'])):
                    $woocommerce_minicart = $vultur_data['woocommerce_minicart'];
                else:
                    $woocommerce_minicart = 'off';
                endif;
                if($woocommerce_minicart =='on'):
                    if(!empty($button_text)) echo '<div class="shop-right">';
                    if(empty($button_text)) echo '<div class="shop-relative-right">';
                    vultur_custom_mini_cart();
                    if(!empty($button_text)) echo '</div>';
                    if(empty($button_text)) echo '</div>';
                endif;
                ?>
            </div>
        </div>
    </nav>
    </div>
</header>