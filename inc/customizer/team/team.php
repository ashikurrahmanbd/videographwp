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


//Team Section CTA title
$wp_customize->add_setting('team_section_cta_title', array(

    'default'           => 'Meet Out Team',
    'sanitize_callback' => 'sanitize_text_field',

));

// Team section CTA title control
$wp_customize->add_control('team_section_cta_title', array(

    'label'    => __('CTA Text', 'videograph'),
    'section'  => 'vgraph_teams',
    'settings' => 'team_section_cta_title',
    'type'     => 'text',

));


//Team Section CTA link
$wp_customize->add_setting('team_section_cta_link', array(

    'default'           => '#',
    'sanitize_callback' => 'sanitize_url',

));

// Team section CTA link control
$wp_customize->add_control('team_section_cta_link', array(

    'label'    => __('CTA Link', 'videograph'),
    'section'  => 'vgraph_teams',
    'settings' => 'team_section_cta_link',
    'type'     => 'text',

));




//repeater Field for the team
 $wp_customize->add_setting(
    'team_repeater_setting',
    array(
        'default'           => '[]', // Default is an empty JSON array
        'sanitize_callback' => function ($input) {
            $decoded = json_decode($input, true);
            return is_array($decoded) ? json_encode($decoded) : json_encode([]);
        },
    )
);

// Add Control (Custom Control)
$wp_customize->add_control(
    new Team_Repeater_Custom_Control(
        $wp_customize,
        'team_repeater_setting',
        array(
            'label'       => __('Team Members', 'videograph'),
            'section'     => 'vgraph_teams',
            'settings'    => 'team_repeater_setting',
            'description' => __('Add team members dynamically.', 'mytheme'),
        )
    )
);