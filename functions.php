<?php

function load_stylesheets()
{

    wp_register_style('styles',get_template_directory_uri().'/style.css',array(),1,'all');
    wp_enqueue_style('styles');

    wp_register_style('custom',get_template_directory_uri().'/custom.css',array(),1,'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts','load_stylesheets');

function load_javascript()
{

    wp_register_script('scripts',get_template_directory_uri().'/index.js',array(),1,1,1);
    wp_enqueue_script('scripts');

    wp_register_script('custom',get_template_directory_uri().'/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts','load_javascript');



//Menu Support

add_theme_support('menus');

//Register Menus

register_nav_menus( 
    
    array(
        'top-menu'=>__('Top Menu','theme'),

    )

);