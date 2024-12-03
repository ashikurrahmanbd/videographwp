<?php
/* Common Features */
function vgraph_common_features(){

    add_theme_support( 'title-tag' );
    add_theme_support('site-icon');
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

    // disabling guttenberg editor
    add_filter('use_block_editor_for_post', '__return_false', 10);
    add_filter('use_block_editor_for_post_type', '__return_false', 10);

    // register nav menu
    register_nav_menus(array(

        'primary-menu'  => __('Primary Menu', 'vgraphtd'),
        'footer-menu-one'   => __('Footer Menu One', 'vgraphatd'),
        'footer-menu-two'   => __('Footer Menu Two', 'vgraphtd')    
    ));

    // register Sidebar for footer widget 1
    register_sidebar( array(

        'name'      => 'Footer Widget One',
        'description'   => 'Add Footer widget one Element',
        'id'        => 'footer-widget-one',
        'before_widget' => '<div class="footer__option__item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'

    ) );

    // register Sidebar for footer widget 2
    register_sidebar( array(

        'name'      => 'Footer Widget Two',
        'description'   => 'Add Footer widget two Element',
        'id'        => 'footer-widget-two',
        'before_widget' => '<div class="footer__option__item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'

    ) );
    // register Sidebar for footer widget 3
    register_sidebar( array(

        'name'      => 'Footer Widget Three',
        'description'   => 'Add Footer widget three Element',
        'id'        => 'footer-widget-three',
        'before_widget' => '<div class="footer__option__item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'

    ) );

    // register Sidebar for footer widget 4
    register_sidebar( array(

        'name'      => 'Footer Widget four',
        'description'   => 'Add Footer widget four Element',
        'id'        => 'footer-widget-four',
        'before_widget' => '<div class="footer__option__item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'

    ) );


}
add_action( 'after_setup_theme', 'vgraph_common_features' );

/* Register Styles and Script for the theme */
function vgraph_theme_style_n_script(){

    // All style file
    wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/css/bootstrap.min.css', false);

    wp_enqueue_style('fontawesome-css', get_template_directory_uri(). '/css/font-awesome.min.css', false);

    wp_enqueue_style('elegant-icon-css', get_template_directory_uri(). '/css/elegant-icons.css', false);

    wp_enqueue_style('owl-carousel-css', get_template_directory_uri(). '/css/owl.carousel.min.css', false);

    wp_enqueue_style('magnific-popup-css', get_template_directory_uri(). '/css/magnific-popup.css', false);

    wp_enqueue_style('slick-nav-css', get_template_directory_uri(). '/css/slicknav.min.css', false);

    wp_enqueue_style('main-style-css', get_template_directory_uri(). '/css/style.css', false);

    // All JS Files
    
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', true );

    wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(), '', true );

    wp_enqueue_script( 'mixitup-min-js', get_template_directory_uri().'/js/mixitup.min.js', array(), '', true );

    wp_enqueue_script( 'masonry-pkgd-min-js', get_template_directory_uri().'/js/masonry.pkgd.min.js', array(), '', true );

    wp_enqueue_script( 'jquery-slicknav-js', get_template_directory_uri().'/js/jquery.slicknav.js', array(), '', true );

    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '', true );

    wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js', array(), '', true );
    
}
add_action('wp_enqueue_scripts', 'vgraph_theme_style_n_script');

// Include files
include_once get_template_directory().'/inc/vgraph-nav-walker.php';

// include_once get_template_directory().'/inc/vgraph-customizer-api.php';

//include customizer API
include_once get_template_directory() . '/inc/customizer/customizer.php';

//team repeater Control
require_once get_template_directory() . '/inc/customizer/team/team-repeater-control.php';




