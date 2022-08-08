<?php
/**
 * Page Sections template
 */
$post = vultur_post_variables();
echo '<div data-scroll="wpdance-'.$post->post_name.'" class="sl-padding page-section'.get_post_type().'-';the_ID(); echo '" id="wpdance-'.$post->post_name.'">';
        the_content();
echo '</div>';
?>      