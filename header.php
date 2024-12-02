<!DOCTYPE html>
<html <?php language_attributes( $doctype = 'html' ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <!-- all the style sheed has been registered on functions.php -->
  

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
    
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => 'nav',
                                'container_class' => 'header__nav__menu mobile-menu',
                                'walker'    => new vgraph_nav_walker(),
                            ));
                        ?>

                        <div class="header__nav__social">
                            <?php 
                                $fb_link = get_theme_mod('fb_social_links', 'https://facebook.com');
                                $twitter_link = get_theme_mod('twitter_social_links', 'https://twitter.com');
                                $dribble_link = get_theme_mod('dribbble_social_links', 'https://dribbble.com');
                                $instagram_link = get_theme_mod('instagram_social_links', 'https://instagram.com');
                                $youtube_link = get_theme_mod('youtube_social_links', 'https://youtube.com');
                               
                            ?>
                            <a href="<?php if(!empty($fb_link)){ echo esc_url($fb_link); } ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php if(!empty($twitter_link)){ echo esc_url($twitter_link); } ?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php if(!empty($dribbble_link)){ echo esc_url($dribbble_link); } ?>"><i class="fa fa-dribbble"></i></a>
                            <a href="<?php if(!empty($instagram_link)){ echo esc_url($instagram_link); } ?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php if(!empty($youtube_link)){ echo esc_url($youtube_link); } ?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->