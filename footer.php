
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <?php 
                                $footer_logo = get_theme_mod('flogo', get_template_directory_uri().'/img/logo.png');
                                
                            ?>
                            <?php if(!empty($footer_logo)): ?>
                                <a href="<?php home_url(); ?>"><img src="<?php echo $footer_logo; ?>" alt=""></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <?php 
                            
                                $fb_link = get_theme_mod('fb_social_links', 'https://facebook.com');
                                $twitter_link = get_theme_mod('twitter_social_links', 'https://twitter.com');
                                $dribble_link = get_theme_mod('dribbble_social_links', 'https://dribbble.com');
                                $instagram_link = get_theme_mod('instagram_social_links', 'https://instagram.com');
                                $youtube_link = get_theme_mod('youtube_social_links', 'https://youtube.com');
                               
                            ?>
                            <a href="<?php if(!empty($fb_link)){ echo esc_url($fb_link); } ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php if(!empty($twitter_link)){ echo esc_url($twitter_link); } ?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php if(!empty($dribble_link)){ echo esc_url($dribble_link); } ?>"><i class="fa fa-dribbble"></i></a>
                            <a href="<?php if(!empty($instagram_link)){ echo esc_url($instagram_link); } ?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php if(!empty($youtube_link)){ echo esc_url($youtube_link); } ?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        
                        <?php dynamic_sidebar( 'footer-widget-one' ); ?>

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3">

                        <?php dynamic_sidebar( 'footer-widget-two' ); ?>

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-3">
                       
                        <?php dynamic_sidebar( 'footer-widget-three' ); ?>

                    </div>

                    <div class="col-lg-4 col-md-12">

                        <?php dynamic_sidebar( 'footer-widget-four' ); ?>
                        
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <?php
                            $footer_copyright_text = get_theme_mod('footer_copyright_text_field_setting', 'Copyright 2024 | All Rights Reserved');
                        ?>
                        <?php if(!empty($footer_copyright_text)): ?>
                        <p class="footer__copyright__text"><?php echo esc_textarea( $footer_copyright_text ); ?></p>
                        <?php endif; ?>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <!-- All js files has been registered on the functions.php -->

    <?php wp_footer(); ?>
</body>

</html>