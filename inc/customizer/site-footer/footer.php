<?php

$wp_customize->add_setting('flogo', array(
    'default'   => get_template_directory_uri().'/img/logo.png',
    'transport' => 'refresh'
));

$wp_customize->add_control(new Wp_Customize_Image_Control(
    $wp_customize,
    'flogo',
    array(
        'label' => __('Upload your Logo', 'vgraphtd'),
        'section'   => 'footer-logo',
        'settings' => 'flogo'  
    )
));

// Footer Social Panel
$wp_customize->add_section('footer_socials', array(
    'title'         => __('Footer Social Links'),
    'description'   => __('Update your Footer social links from here', 'vgraphtd'),
    'panel'         => 'footer_panel',
    'priority'      => 11
));

// facebook link
$wp_customize->add_setting('footer_fb_social_links', array(
    'default'   => 'https://facebook.com',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
    
));
$wp_customize->add_control('footer_fb_social_links', array(
    'label'     => __('Facebook Link', 'vgraphtd'),
    'section'   => 'footer_socials',
    'type'      => 'url'
));

// twitter link
$wp_customize->add_setting('footer_twitter_social_links', array(
    'default'   => '#',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
    
));
$wp_customize->add_control('footer_twitter_social_links', array(
    'label'     => __('Twitter Link', 'vgraphtd'),
    'section'   => 'footer_socials',
    'type'      => 'url'
));
// twitter link
$wp_customize->add_setting('footer_dribbble_social_links', array(
    'default'   => '#',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
    
));
$wp_customize->add_control('footer_dribbble_social_links', array(
    'label'     => __('Dribbble  Link', 'vgraphtd'),
    'section'   => 'footer_socials',
    'type'      => 'url'
));
// twitter link
$wp_customize->add_setting('footer_instagram_social_links', array(
    'default'   => '#',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
    
));
$wp_customize->add_control('footer_instagram_social_links', array(
    'label'     => __('Instagram  Link', 'vgraphtd'),
    'section'   => 'footer_socials',
    'type'      => 'url'
));

// Youtube link
$wp_customize->add_setting('footer_youtube_social_links', array(
    'default'   => '#',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
    
));
$wp_customize->add_control('footer_youtube_social_links', array(
    'label'     => __('Youtube  Link', 'vgraphtd'),
    'section'   => 'footer_socials',
    'type'      => 'url'
));

// footer copyright section 
$wp_customize->add_section('footer_copyright', array(
    'title'     => __('Footer Copyright', 'vgraphtd'),
    'description'   => '',
    'priority'  => 13,
    'panel'         => 'footer_panel'
));

$wp_customize->add_setting('footer_copyright_text_field_setting', array(
    'default'       => 'Copyright 2024 | All Rights Reserved',
    'transport'     => 'refresh',
));

// add control e always prothome setting tai id hisebe pass korte hobe
$wp_customize->add_control('footer_copyright_text_field_setting', array(
    'label'         => __('Copyright Text', 'vgraphtd'),
    'description'   => __('Update your copyright Text from here', 'vgraph'),
    'type'          => 'textarea',
    'section'      => 'footer_copyright',
));
