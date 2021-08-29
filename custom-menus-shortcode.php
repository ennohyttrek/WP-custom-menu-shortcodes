<?php

/**
* Plugin Name: Custom Menus Shortcodes
* Author: Enno Hyttrek
* Author URI: https://www.ennohyttrek.de
* License: GNU GENERAL PUBLIC LICENSE, Version 3, 29 June 2007
* Version: 1.0.0
*
* © 2021, Enno Hyttrek
*/



// Initialise and register Custom Menus
function register_custom_menus() {
  register_nav_menus(
    array(
        'custom-menu-01' => __( 'Custom Menu 1, shortcode [custom-menu-01]' ),
        'custom-menu-02' => __( 'Custom Menu 2, shortcode [custom-menu-02]' ),
        'custom-menu-03' => __( 'Custom Menu 3, shortcode [custom-menu-03]' )
     )
   );
 }
 add_action( 'init', 'register_custom_menus' );


//Shortcode Custom Menu 1 [custom-menu-01]
function custom_menu_01_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'custom-menu-01',
        'container' => 'nav',
        'container_class'   => "custom-menu-01",
        'container_id'      => "custom-menu-01",
        'echo' => false ) );

}
add_shortcode('custom-menu', 'custom_menu_01_shortcode');

//Shortcode Custom Menu 2 [custom-menu-02]
function custom_menu_02_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'custom-menu-02',
        'container' => 'nav',
        'container_class'   => "custom-menu-02",
        'container_id'      => "custom-menu-02",
        'echo' => false ) );

}
add_shortcode('custom-menu', 'custom_menu_03_shortcode');

//Shortcode Custom Menu 3 [custom-menu-03]
function custom_menu_03_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'custom-menu-03',
        'container' => 'nav',
        'container_class'   => "custom-menu-03",
        'container_id'      => "custom-menu-03",
        'echo' => false ) );

}
add_shortcode('custom-menu', 'custom_menu_03_shortcode');
