<?php
/*
Plugin Name: Web Plugin
*/

function annointed_admin_bar_remove() {
    global $wp_admin_bar;
    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_node('new-content');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);


function wpdocs_register_my_custom_menu_page() {
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ),
        'Web Menu',
        'manage_options',
        'web_menu',
        'call_web_menu'
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

function call_web_menu(){
    include(plugin_dir_path(__FILE__).'items/menu.php');
}
