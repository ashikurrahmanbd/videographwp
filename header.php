<!DOCTYPE html>
<html <?php language_attributes( $doctype = 'html' ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        
                        <a href="<?php home_url(); ?>">
                            <?php
                                if(has_custom_logo()){
                                    the_custom_logo(  );
                                }else{
                                    echo '<img src="'.get_template_directory_uri().'/img/logo.png'.'" />';
                                }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./about.php">About</a></li>
                                <li><a href="./portfolio.php">Portfolio</a></li>
                                <li><a href="./services.php">Services</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.php">About</a></li>
                                        <li><a href="./portfolio.php">Portfolio</a></li>
                                        <li><a href="./blog.php">Blog</a></li>
                                        <li><a href="./blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->