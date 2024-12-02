<?php

add_action( 'customize_register', 'vgraph_custozier_api' );
function vgraph_custozier_api($wp_customize){


    /**
     * Header Panel
     */
   
    // Register the custom panel
    $wp_customize->add_panel('header_panel', array(
        'title'         => __('Header Options', 'vgraphtd'),
        'description'   =>  __('Header Customization options', 'vgraphtd'),
        'priority'      => 10

    ));

    $wp_customize->add_section('header_socials', array(
        'title'         => __('Header Social Links'),
        'description'   => __('Update your social links from here', 'vgraphtd'),
        'panel'         => 'header_panel'
    ));

    /**
     * all the controls of header
    */

    include get_template_directory() . '/inc/customizer/site-header/header.php';

    /**
     * end of all the controls of header
    */


    /**
     * End of Header Panel
    */

    /**
     * Footer Panel and Section
    */

    // Footer Panel
    $wp_customize->add_panel('footer_panel', array(
        'title' => __('Footer Options', 'vgraphtd'),
        'priority'  => 10,
    
    ));

    $wp_customize->add_section('footer-logo', array(
        'title'     => __('Footer Logo', 'vgraphtd'),
        'description'   => __('Change your Footer Logo', 'vgraphtd'),
        'priority'      => 10,
        'panel'         => 'footer_panel'
    ));

    /**
     * include all the footer customizer settings and contols
    */
    include get_template_directory() . '/inc/customizer/site-footer/footer.php';


    /**
     * End of Footer Panel and section 
    */



    //Root Panel for page content customization
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


    //Work Statistics Section under Root Panel
    $wp_customize->add_section(
        'vgraph_work_statistics',
        [
            'title'                 => __('Work Statistics', 'videograph'),
            'description'           => __('Work Statistics Section Customization', 'videograph'),
            'priority'              => 10,
            'panel'                 => 'vgraph_customization'
        ]
    );

    /**
     * Work Statistics Section Settings and Controls
    */

    // Include work statistics Customizer Settings from separate file
    include get_template_directory() . '/inc/customizer/work-statistics/work-statistics.php';

    /**
     * End of Services Section Settings and Controls
    */



    /**
     * Team Section 
    */
    $wp_customize->add_section(

        'vgraph_teams',
        [
            'title'                 => __('Teams', 'videograph'),
            'description'           => __('Teams Section Customization', 'videograph'),
            'priority'              => 10,
            'panel'                 => 'vgraph_customization'
        ]

    );

    /**
     * Work Statistics Section Settings and Controls
    */

    // Include work statistics Customizer Settings from separate file
    include get_template_directory() . '/inc/customizer/team/team.php';

    /**
     * End of Services Section Settings and Controls
    */
    

}