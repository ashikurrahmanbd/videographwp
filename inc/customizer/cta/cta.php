<?php

//CTA Section subtitle
$wp_customize->add_setting('cta_section_subtitle', array(
    'default'           => 'INC5000, Best places to work 2019',
    'sanitize_callback' => 'sanitize_text_field',
));

//CTA section title
$wp_customize->add_control('cta_section_subtitle', array(
    'label'    => __('CTA Subtitle', 'videograph'),
    'section'  => 'vgraph_cta',
    'settings' => 'cta_section_subtitle',
    'type'     => 'text',
));

//CTa Section subtitle
$wp_customize->add_setting('cta_section_title', array(

    'default'           => 'Fresh Ideas, Fresh Moments Giving Wings to your Stories.',
    'sanitize_callback' => 'sanitize_text_field',

));

// CTA section title
$wp_customize->add_control('cta_section_title', array(

    'label'    => __('CTA Title', 'videograph'),
    'section'  => 'vgraph_cta',
    'settings' => 'cta_section_title',
    'type'     => 'text',

));

/**
 * Cta Background Image
 */
$wp_customize->add_setting('cta_section_bg', array(

    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',

));

$wp_customize->add_control(new WP_Customize_Image_Control(

    $wp_customize,
    'cta_section_bg',
    array(
        'label'    => __( 'Upload CTA Bacground Image', 'videograph' ),
        'section'  => 'vgraph_cta',
        'settings' => 'cta_section_bg',
    )

));

//CTa Button Text
$wp_customize->add_setting('cta_button_text', array(

    'default'           => 'Start Your Stories',
    'sanitize_callback' => 'sanitize_text_field',

));

// CTA Button text control
$wp_customize->add_control('cta_button_text', array(

    'label'    => __('CTA Button Text', 'videograph'),
    'section'  => 'vgraph_cta',
    'settings' => 'cta_button_text',
    'type'     => 'text',

));

//CTa Button link
$wp_customize->add_setting('cta_button_link', array(

    'default'           => '#',
    'sanitize_callback' => 'sanitize_url',

));

// CTA Button text control
$wp_customize->add_control('cta_button_link', array(

    'label'    => __('CTA Button Link', 'videograph'),
    'section'  => 'vgraph_cta',
    'settings' => 'cta_button_link',
    'type'     => 'text',

));