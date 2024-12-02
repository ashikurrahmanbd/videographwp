<?php

/**
 * Settigns and control for Statistics One
*/
// Add Setting for statistics one title
$wp_customize->add_setting('statistics_one_title', array(

    'default'           => '230',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics one title
$wp_customize->add_control('statistics_one_title', array(

    'label'    => __('Statistics One title', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_one_title',
    'type'     => 'text',
    
));


// Add Setting for statistics one subtitle
$wp_customize->add_setting('statistics_one_subtitle', array(

    'default'           => 'Completed Projects',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics one subtitle
$wp_customize->add_control('statistics_one_subtitle', array(

    'label'    => __('Statistics One Subtitle', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_one_subtitle',
    'type'     => 'text',
    
));


/**
 * Settigns and control for Statistics two
*/
// Add Setting for statistics two title
$wp_customize->add_setting('statistics_two_title', array(

    'default'           => '1070',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics Two title
$wp_customize->add_control('statistics_two_title', array(

    'label'    => __('Statistics Two Title', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_two_title',
    'type'     => 'text',
    
));


// Add Setting for statistics Two subtitle
$wp_customize->add_setting('statistics_two_subtitle', array(

    'default'           => 'Happy Clients',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics Two subtitle
$wp_customize->add_control('statistics_two_subtitle', array(

    'label'    => __('Statistics Two Subtitle', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_two_subtitle',
    'type'     => 'text',
    
));


/**
 * Settigns and control for Statistics Three
*/
// Add Setting for statistics Three title
$wp_customize->add_setting('statistics_three_title', array(

    'default'           => '230',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics Three title
$wp_customize->add_control('statistics_three_title', array(

    'label'    => __('Statistics Three Title', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_three_title',
    'type'     => 'text',
    
));


// Add Setting for statistics three subtitle
$wp_customize->add_setting('statistics_three_subtitle', array(

    'default'           => 'Perspective Clients',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics three subtitle
$wp_customize->add_control('statistics_three_subtitle', array(

    'label'    => __('Statistics Three Subtitle', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_three_subtitle',
    'type'     => 'text',
    
));


/**
 * Settigns and control for Statistics Four
*/
// Add Setting for statistics Four title
$wp_customize->add_setting('statistics_four_title', array(

    'default'           => '230',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics Four title
$wp_customize->add_control('statistics_four_title', array(

    'label'    => __('Statistics Four Title', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_three_title',
    'type'     => 'text',
    
));


// Add Setting for statistics Four subtitle
$wp_customize->add_setting('statistics_four_subtitle', array(

    'default'           => 'Completed Projects',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for statistics Four subtitle
$wp_customize->add_control('statistics_four_subtitle', array(

    'label'    => __('Statistics Four Subtitle', 'videograph'),
    'section'  => 'vgraph_work_statistics',
    'settings' => 'statistics_four_subtitle',
    'type'     => 'text',
    
));