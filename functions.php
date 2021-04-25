<?php

//Enable menu
add_theme_support('menus');

//Function that add menu

function rt_custom_menu() {
    register_nav_menus(
        array(
            'top-nav' => __ ('Top menu'),
            'bottom-nav' => __ ('Bottom menu'),
        )
    );
}

//Register sidebar
function rt_add_sidebar(){
    register_sidebar( array(
        'name' => __('Footer1 Sidebar', 'ErmiCustomTheme' ),
        'id' => 'sidebar-1'
    ));
    register_sidebar( array(
        'name' => __('Footer2 Sidebar', 'ErmiCustomTheme' ),
        'id' => 'sidebar-2'
    ));
    register_sidebar( array(
        'name' => __('Footer3 Sidebar', 'ErmiCustomTheme' ),
        'id' => 'sidebar-3'
    ));
    register_sidebar( array(
        'name' => __('Footer4 Sidebar', 'ErmiCustomTheme' ),
        'id' => 'sidebar-4'
    ));
}

//Adding the Hook
add_action('init', 'rt_custom_menu');

add_action('widgets_init', 'rt_add_sidebar');

// Adding Style 
function rt_load_css()
{
    wp_register_style( 'style1', get_template_directory_uri() . '/assets/css/style1.css',array(), false, 'all');
    wp_enqueue_style('style1');
}
add_action( 'wp_enqueue_scripts', 'rt_load_css' );

function rt_register_navwalker(){
    require_once get_template_birectory_uri(). "/util"/
add_acting("after_setup_theme","rt_register_navwalker")
}
?>