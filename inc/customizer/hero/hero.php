<?php

// Add Setting for Hero Title
$wp_customize->add_setting('hero_title', array(
    'default'           => 'Welcome to VideoGraph',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Control for Hero Title
$wp_customize->add_control('hero_title', array(
    'label'    => __('Hero Title', 'videograph'),
    'section'  => 'vgraph_hero',
    'settings' => 'hero_title',
    'type'     => 'text',
));

// Add Setting for Hero Subtitle
$wp_customize->add_setting('hero_subtitle', array(
    'default'           => 'Your Story, Our Cinematics',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Control for Hero Subtitle
$wp_customize->add_control('hero_subtitle', array(
    'label'    => __('Hero Subtitle', 'videograph'),
    'section'  => 'vgraph_hero',
    'settings' => 'hero_subtitle',
    'type'     => 'text',
));