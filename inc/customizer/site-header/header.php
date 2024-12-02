<?php


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