<?php

//Team Section subtitle
$wp_customize->add_setting('team_section_subtitle', array(
    'default'           => 'Nice to Meet',
    'sanitize_callback' => 'sanitize_text_field',
));

// Team section title
$wp_customize->add_control('team_section_subtitle', array(
    'label'    => __('Section Subtitle', 'videograph'),
    'section'  => 'vgraph_teams',
    'settings' => 'service_section_subtitle',
    'type'     => 'text',
));



//Team Section subtitle
$wp_customize->add_setting('team_section_title', array(

    'default'           => 'Our Team',
    'sanitize_callback' => 'sanitize_text_field',

));

// Team section title
$wp_customize->add_control('team_section_title', array(

    'label'    => __('Section title', 'videograph'),
    'section'  => 'vgraph_teams',
    'settings' => 'team_section_title',
    'type'     => 'text',

));

