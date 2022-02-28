<?php

function inclusivehealth_register_styles(){
    wp_enqueue_style('inclusivehealth-css', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('inclusivehealth-fontawesome', get_template_directory_uri() . "/assets/fontawesome-free-6.0.0-web/css/all.css", array(), '1.0', 'all');
    wp_enqueue_style('inclusivehealth-fontawesome', "https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css", array(), '1.0', 'all');
   
}
add_action('wp_enqueue_scripts', 'inclusivehealth_register_styles');
function inclusivehealth_menus(){
    $locations = array(
        'primary' => "Main Primary",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'inclusivehealth_menus');

?>