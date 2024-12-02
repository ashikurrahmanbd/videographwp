<?php

add_action( 'customize_register', 'vgraph_custozier_api' );
function vgraph_custozier_api($wp_customize){


    //Root Panel
    $wp_customize->add_panel(
        'vgraph_customization',
        [
            'title'         =>  __('VideoGraph Customization', 'videograph'),
            'description'   =>  __('Customize Content of VideoGraph', 'videograph'),
            'priority'      => 10,
        ]
    );

    //Hero Section under Root Panel
    $wp_customize->add_section(
        'vgraph_hero',
        [
            'title'                 => __('Hero', 'videograph'),
            'description'           => __('Hero Section Customization', 'videograph'),
            'priority'              => 10,
            'panel'                 => 'vgraph_customization'
        ]
    );

    /**
     * Hero Section Settings and Controls
    */

    // Include Hero Customizer Settings from separate file
    include get_template_directory() . '/inc/customizer/hero/hero.php';

    /**
     * End of Hero Section Settings and Controls
    */

    //services Section under Root Panel
    $wp_customize->add_section(
        'vgraph_services',
        [
            'title'                 => __('Services', 'videograph'),
            'description'           => __('Services Section Customization', 'videograph'),
            'priority'              => 10,
            'panel'                 => 'vgraph_customization'
        ]
    );

    /**
     * Services Section Settings and Controls
    */

    // Include Hero Customizer Settings from separate file
    include get_template_directory() . '/inc/customizer/services/services.php';

    /**
     * End of Services Section Settings and Controls
    */



    

}