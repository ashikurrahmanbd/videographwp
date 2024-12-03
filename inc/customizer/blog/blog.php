<?php
//Blog Section subtitle
$wp_customize->add_setting('blog_section_subtitle', array(
    'default'           => 'Our Blog',
    'sanitize_callback' => 'sanitize_text_field',
));

// Blog section title
$wp_customize->add_control('blog_section_subtitle', array(
    'label'    => __('Section Subtitle', 'videograph'),
    'section'  => 'vgraph_blogs',
    'settings' => 'blog_section_subtitle',
    'type'     => 'text',
));



//BLog Section subtitle
$wp_customize->add_setting('blog_section_title', array(

    'default'           => 'Blog Updated',
    'sanitize_callback' => 'sanitize_text_field',

));

// Blog section title
$wp_customize->add_control('blog_section_title', array(

    'label'    => __('Section title', 'videograph'),
    'section'  => 'vgraph_blogs',
    'settings' => 'blog_section_title',
    'type'     => 'text',

));

//blog to show
$wp_customize->add_setting('blog_post_count', array(

    'default'           => 5,
    'sanitize_callback' => 'absint',

));

//blog to show count control
$wp_customize->add_control('blog_post_count', array(

    'label'    => __('Posts to show', 'videograph'),
    'section'  => 'vgraph_blogs',
    'settings' => 'blog_post_count',
    'type'     => 'text',

));