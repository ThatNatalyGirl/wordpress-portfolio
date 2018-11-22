<?php

function portfolio_enqueues() {

    //Custom theme CSS
    wp_register_style('portfolio-css', get_template_directory_uri() . '/css/main.css', false, null);
    wp_enqueue_style('portfolio-css');

}

add_action('wp_enqueue_scripts', 'portfolio_enqueues', 100);
?>