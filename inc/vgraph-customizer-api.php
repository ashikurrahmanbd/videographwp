<?php
function vgraph_customizer_api($wp_customize){
    
    // header customize section
    /* 
        @header_panel_id is an id of the panel
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

    // facebook link
    $wp_customize->add_setting('fb_social_links', array(
        'default'   => 'https://facebook.com',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('fb_social_links', array(
        'label'     => __('Facebook Link', 'vgraphtd'),
        'section'   => 'header_socials',
        'type'      => 'url'
    ));

    // twitter link
    $wp_customize->add_setting('twitter_social_links', array(
        'default'   => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('twitter_social_links', array(
        'label'     => __('Twitter Link', 'vgraphtd'),
        'section'   => 'header_socials',
        'type'      => 'url'
    ));
    // twitter link
    $wp_customize->add_setting('dribbble_social_links', array(
        'default'   => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('dribbble_social_links', array(
        'label'     => __('Dribbble  Link', 'vgraphtd'),
        'section'   => 'header_socials',
        'type'      => 'url'
    ));
    // twitter link
    $wp_customize->add_setting('instagram_social_links', array(
        'default'   => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('instagram_social_links', array(
        'label'     => __('Instagram  Link', 'vgraphtd'),
        'section'   => 'header_socials',
        'type'      => 'url'
    ));

    // Youtube link
    $wp_customize->add_setting('youtube_social_links', array(
        'default'   => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('youtube_social_links', array(
        'label'     => __('Youtube  Link', 'vgraphtd'),
        'section'   => 'header_socials',
        'type'      => 'url'
    ));




    

}
add_action('customize_register', 'vgraph_customizer_api');