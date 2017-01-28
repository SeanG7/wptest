<?php

function wptest_enqueue_style() {
  wp_enqueue_style('old', '/wp-content/themes/twentyseventeen/style.css', '', false, 'all');
  wp_enqueue_style('main', '/wp-content/themes/twentyseventeen-child/style.css', '', false, 'all');
}


add_action('wp_enqueue_scripts', 'wptest_enqueue_style');
?>
