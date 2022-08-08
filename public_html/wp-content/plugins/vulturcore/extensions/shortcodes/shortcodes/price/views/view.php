<?php
$price = '';
if(!empty($atts['price'])):
    $price = $atts['price'];
endif;
$price_title = '';
if(!empty($atts['price_title'])):
    $price_title = $atts['price_title'];
endif;
$price_sub_title = '';
if(!empty($atts['price_sub_title'])):
    $price_sub_title = $atts['price_sub_title'];
endif;
$price_desc = '';
if(!empty($atts['price_desc'])):
    $price_desc = $atts['price_desc'];
endif;
$position = '';
if(!empty($atts['position'])):
    $position = $atts['position'];
endif;
$color = '';
if(!empty($atts['color'])):
    $color = $atts['color'];
endif;
?>
<div id="pricing" class="wrap-bg">
    <div class="container">
        <div class="row <?php echo esc_html($position); ?>">
            <div class="col-lg-12">
                <div class="section-title with-p <?php echo esc_html($color); ?>">
	                <?php if(!empty($price_sub_title)): ?>
                    <div class="section-title-uppercase"><?php echo esc_html($price_sub_title); ?></div>
	                <?php endif; ?>
                    <h2><?php echo esc_html($price_title); ?></h2>
                    <?php printf($price_desc); ?>
                </div>
            </div>
        </div>
        <div class="tbl-pricing">
        <div class="row">
         <?php
          if(!empty($price)):
           foreach($price as $values):
                if(!empty($values['title'])):
                $price_content = '';
                if(!empty($values['price_content'])):
                    $price_content = $values['price_content'];
                endif;
                $price_currency = '';
                if(!empty($values['price_currency'])):
                    $price_currency = $values['price_currency'];
                endif;
                $price_number = '';
                if(!empty($values['price_number'])):
                    $price_number = $values['price_number'];
                endif;
                $price_month = '';
                if(!empty($values['price_month'])):
                    $price_month = $values['price_month'];
                endif;
                $price_featured_text = '';
                if(!empty($values['price_featured_text'])):
                    $price_featured_text = $values['price_featured_text'];
                endif;
                $price_featured = '';
                if(!empty($values['price_featured'])):
                    $price_featured = $values['price_featured'];
                endif;
                $price_button = '';
                if(!empty($values['price_button'])):
                    $price_button = $values['price_button'];
                endif;
                $price_link = '';
                if(!empty($values['price_link'])):
                    $price_link = $values['price_link'];
                endif;
                 ?>

                <?php
                if($price_featured == false): ?>
                    <div class="col-xs-12 col-sm-12 col-md-4 tbl-prc-col tbl-prc-recommended">
                        <div class="tbl-prc-wrap">
                            <div class="featured-price"><?php echo esc_html($price_featured_text); ?></div>
                            <div class="tbl-prc-heading">
                                <h4><?php echo esc_html($values['title']); ?></h4>
                            </div>
                            <div class="tbl-prc-price">
                                <span class="price"><?php echo esc_html($price_currency); ?><?php echo esc_html($price_number); ?></span>
                                <span class="month"><?php echo esc_html($price_month); ?></span>
                            </div>
                            <div class="tbl-prc-list">
                                <?php printf($price_content); ?>
                            </div>
                            <?php
                            if(!empty($price_link)): ?>
                                <div class="tbl-prc-footer">
                                    <a href="<?php echo esc_url($price_link); ?>" class="color-one btn-custom"><?php printf($price_button); ?></a>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                <?php else: ?>
                <div class="col-xs-12 col-sm-12 col-md-4 tbl-prc-col">
                    <div class="tbl-prc-wrap">
                        <div class="tbl-prc-heading">
                            <h4><?php echo esc_html($values['title']); ?></h4>
                        </div>
                        <div class="tbl-prc-price">
                            <span class="price"><?php echo esc_html($price_currency); ?><?php echo esc_html($price_number); ?></span>
                            <span class="month"><?php echo esc_html($price_month); ?></span>
                        </div>
                        <div class="tbl-prc-list">
                            <?php printf($price_content); ?>
                        </div>
                        <?php
                        if(!empty($price_link)): ?>
                            <div class="tbl-prc-footer">
                                <a href="<?php echo esc_url($price_link); ?>" class="color-one btn-custom"><?php printf($price_button); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                 <?php endif; ?>
                <?php
                    endif;
                    endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>