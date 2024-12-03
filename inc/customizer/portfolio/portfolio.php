<?php

//hero repeater control
require_once get_template_directory() . '/inc/customizer/portfolio/portfolio-repeater-control.php';

$wp_customize->add_setting('portfolio_gallery', array(
    'default'   => '',
    'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control(new Portfolio_Repeater_Control($wp_customize, 'portfolio_gallery', array(
    'label'       => __('Portfolio Gallery', 'videograph'),
    'section'     => 'vgraph_portfolio',
    'settings'    => 'portfolio_gallery',
)));