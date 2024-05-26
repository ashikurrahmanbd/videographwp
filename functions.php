<?php
/* Common Features */
function vgraph_common_features(){
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo', array(
        'height'        => 100,
        'width'         => 300,
        'flex-height'          => true,
        'flex-width'           => true,
        'default'               => get_template_directory().'/img/logo.png'
    ));
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('widgets');
    add_theme_support( 'wp-block-styles' );
    remove_theme_support( 'widgets-block-editor' );

}
add_action( 'after_setup_theme', 'vgraph_common_features' );