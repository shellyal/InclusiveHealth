<?php

function inclusivehealth_register_styles(){
    wp_enqueue_style('inclusivehealth-css', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
   
}

add_action('wp_enqueue_scripts', 'inclusivehealth_register_styles');
?>