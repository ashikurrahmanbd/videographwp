<?php

// Add Setting for service section subtitle
$wp_customize->add_setting('service_section_subtitle', array(
    'default'           => 'Our Services',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Control for service section subtitle
$wp_customize->add_control('service_section_subtitle', array(
    'label'    => __('Section Subtitle', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_subtitle',
    'type'     => 'text',
));

/**
 * Settigns and control for Service Section Title
*/
// Add Setting for service section 
$wp_customize->add_setting('service_section_title', array(

    'default'           => 'What We Do',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service section Title
$wp_customize->add_control('service_section_title', array(

    'label'    => __('Section Title', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_title',
    'type'     => 'text',

));


/**
 * Settigns and control for Service Section description
*/
// Add Setting for Hero Subtitle
$wp_customize->add_setting('service_section_description', array(

    'default'           => 'If you hire a videographer of our team you will get a video professional to make a custom video for your business and, once the project is over.',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for Hero Title
$wp_customize->add_control('service_section_description', array(

    'label'    => __('Section Description', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_description',
    'type'     => 'textarea',
    
));


/**
 * 
 * Settigns and control for Service Section CTA
 */

// Add Setting for section CTA Link Text
$wp_customize->add_setting('service_section_cta_link_text', array(

    'default'           => 'View All Services',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for section CTA Link Text
$wp_customize->add_control('service_section_cta_link_text', array(

    'label'    => __('Section CTA Link Text', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_cta_link_text',
    'type'     => 'text',

));

/**
 * 
 * Settigns and control for Service Section CTA Link
 */

// Add Setting for section CTA Link Text
$wp_customize->add_setting('service_section_cta_link', array(

    'default'           => '#',
    'sanitize_callback' => 'sanitize_url',

));

// Add Control for section CTA Link Text
$wp_customize->add_control('service_section_cta_link', array(

    'label'    => __('Section CTA Link', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_cta_link',
    'type'     => 'text',

));


/**
 * 
 * Settigns and control for sevice item 1
 * 
 * title and description
 * 
 */

// Add Setting for service item 1
$wp_customize->add_setting('service_section_service_one_title', array(

    'default'           => 'Motion graphics',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 1
$wp_customize->add_control('service_section_service_one_title', array(

    'label'    => __('Service One title', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_one_title',
    'type'     => 'text',

));


// Add Setting for service item 1
$wp_customize->add_setting('service_section_service_one_description', array(

    'default'           => 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 1
$wp_customize->add_control('service_section_service_one_description', array(

    'label'    => __('Service One Description', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_one_description',
    'type'     => 'textarea',

));



/**
 * 
 * Settigns and control for sevice item 2
 * 
 * title and description
 * 
 */

// Add Setting for service item 2
$wp_customize->add_setting('service_section_service_two_title', array(

    'default'           => 'Scriptwriting and editing',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 2
$wp_customize->add_control('service_section_service_two_title', array(

    'label'    => __('Service Two title', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_two_title',
    'type'     => 'text',

));


// Add Setting for service item 2
$wp_customize->add_setting('service_section_service_two_description', array(

    'default'           => 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 2
$wp_customize->add_control('service_section_service_two_description', array(

    'label'    => __('Service Two Description', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_two_description',
    'type'     => 'textarea',

));



/**
 * 
 * Settigns and control for sevice item 3
 * 
 * title and description
 * 
 */

// Add Setting for service item 3
$wp_customize->add_setting('service_section_service_three_title', array(

    'default'           => 'Video distribution',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 3
$wp_customize->add_control('service_section_service_three_title', array(

    'label'    => __('Service three title', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_three_title',
    'type'     => 'text',

));


// Add Setting for service item 3
$wp_customize->add_setting('service_section_service_three_description', array(

    'default'           => 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 3
$wp_customize->add_control('service_section_service_three_description', array(

    'label'    => __('Service three Description', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_three_description',
    'type'     => 'textarea',

));



/**
 * 
 * Settigns and control for sevice item 4
 * 
 * title and description
 * 
 */

// Add Setting for service item 
$wp_customize->add_setting('service_section_service_four_title', array(

    'default'           => 'Video hosting',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 4
$wp_customize->add_control('service_section_service_four_title', array(

    'label'    => __('Service Four title', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_four_title',
    'type'     => 'text',

));


// Add Setting for service item 4
$wp_customize->add_setting('service_section_service_four_description', array(

    'default'           => 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.',
    'sanitize_callback' => 'sanitize_text_field',

));

// Add Control for service item 4
$wp_customize->add_control('service_section_service_four_description', array(

    'label'    => __('Service Four Description', 'videograph'),
    'section'  => 'vgraph_services',
    'settings' => 'service_section_service_four_description',
    'type'     => 'textarea',

));
