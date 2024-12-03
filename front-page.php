<?php

    get_header(); 
    /*
    Template Name: Home
    */

?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">

            <?php 

                $hero_section_data = get_theme_mod('hero_section', '');
                $hero_section_data = !empty($hero_section_data) ? json_decode($hero_section_data, true) : [];


            
            ?>
            <?php if( ! empty($hero_section_data) ): ?>
            <?php foreach($hero_section_data as $hero_item): ?>
            <?
                $hero_image = esc_url($hero_item['hero_image'] ?? '');
                $hero_heading = esc_html($hero_item['hero_heading'] ?? '');
                $hero_subheading = esc_html($hero_item['hero_subheading'] ?? '');
                $hero_cta_text = esc_html($hero_item['hero_cta_text'] ?? '');
                $hero_cta_link = esc_url($hero_item['hero_cta_link'] ?? ''); 
            ?>
            <div class="hero__item set-bg" data-setbg="<?php echo esc_url( $hero_image );  ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span><?php echo esc_attr__( $hero_subheading, 'videograph' ); ?></span>
                                <h2><?php echo esc_attr__( $hero_heading, 'videograph' );  ?></h2>
                                <a href="<?php echo esc_url( $hero_cta_link, 'videograph' ) ?>" class="primary-btn"><? echo esc_attr__( $hero_cta_text, 'videograph' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>


            <div class="hero__item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/hero/hero2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="hero__item set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/hero/hero3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->

        <!-- all dynamic contents from customizer -->
        <?php 
            
            //section title subtitle
            $ss_subtitle = get_theme_mod( 'service_section_subtitle', 'Our Servicess' );
            $ss_title = get_theme_mod( 'service_section_title', 'What We Doo' );
            $ss_description = get_theme_mod( 'service_section_description', 'If you hire a videographer of our team you will get a video professional to make a custom video for your business and, once the project is over.' );

            //cta 
            $ss_cta_link_text = get_theme_mod( 'service_section_cta_link_text', 'View All Services' );
            $ss_cta_link = get_theme_mod( 'service_section_cta_link', '#' );

            //services title, description
            $ss_s1_title = get_theme_mod( 'service_section_service_one_title', 'Motion graphics' );

            $ss_s1_description = get_theme_mod( 'service_section_service_one_description', 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.' );

            //service 2
            $ss_s2_title = get_theme_mod( 'service_section_service_two_title', 'Scriptwriting and editing' );

            $ss_s2_description = get_theme_mod( 'service_section_service_two_description', 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.' );

            //service 3
            $ss_s3_title = get_theme_mod( 'service_section_service_three_title', 'Video distribution' );

            $ss_s3_description = get_theme_mod( 'service_section_service_three_description', 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.' );

            //service 4
            $ss_s4_title = get_theme_mod( 'service_section_service_four_title', 'Video hosting' );

            $ss_s4_description = get_theme_mod( 'service_section_service_four_description', 'Whether you’re halfway through the editing process, or you haven’t even started, our post production services can put the finishing touches.' );


        ?>
        <!-- end of all dynamic content from customizer -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span><?php echo esc_attr_e( $ss_subtitle, 'videograph' ); ?></span>
                            <h2><?php echo esc_attr_e( $ss_title, 'videograph' ); ?></h2>
                        </div>
                        <p>
                            <?php echo esc_html__( $ss_description, 'videograph' ); ?>
                        </p>
                        <a href="<?php echo esc_url( $ss_cta_link ); ?>" class="primary-btn"><?php echo esc_attr_e( $ss_cta_link_text, 'videograph' ); ?></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/si-1.png" alt="">
                                </div>
                                <h4><?php echo esc_attr__( $ss_s1_title, 'videograph' ); ?></h4>
                                <p>
                                    <?php
                                        echo esc_html__( $ss_s1_description, 'videograph' );
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/si-2.png" alt="">
                                </div>
                                <h4><?php echo esc_attr__( $ss_s2_title, 'videograph' ); ?></h4>
                                <p>
                                    <?php 
                                        echo esc_html__( $ss_s2_description, 'videograph' );
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/si-3.png" alt="">
                                </div>
                                <h4><?php echo esc_attr__( $ss_s3_title, 'videograph' ) ?></h4>
                                <p>
                                    <?php echo esc_html__( $ss_s3_description, 'videograph' ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/si-4.png" alt="">
                                </div>
                                <h4><?php echo esc_attr__( $ss_s4_title, 'videograph' ); ?></h4>
                                <p>
                                    <?php echo esc_html__( $ss_s4_description, 'videograph'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">

        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <?php

                $portfolio_items = get_theme_mod('portfolio_gallery', ''); 
                $portfolio_items = !empty($portfolio_items) ? json_decode($portfolio_items, true) : [];

                if (!empty($portfolio_items)) : ?>
                <div class="portfolio-gallery">
                    <?php foreach ($portfolio_items as $item) : 
                        $type = esc_attr($item['type']);
                        $thumbnail = esc_url($item['thumbnail']);
                        $video = esc_url($item['video']);
                        $heading = esc_html($item['heading'] ?? '');
                        $categories = esc_html($item['categories'] ?? '');
                    ?>
                        <div class="work__item <?php echo $type === 'wide' ? 'wide__item' : 'small__item'; ?> set-bg" data-setbg="<?php echo $thumbnail; ?>">
                            <a href="<?php echo $video; ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            
                            <?php if ($type === 'wide') : ?>
                                <div class="work__item__hover">
                                    <h4><?php echo $heading; ?></h4>
                                    <ul>
                                        <?php 
                                        // Split categories by comma and display them as list items
                                        $categories_arr = explode(',', $categories);
                                        foreach ($categories_arr as $category) : ?>
                                            <li><?php echo trim($category); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>


        </div>


    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
        <!-- section all the dynamic content -->

        <?php

            $stats_one_title = get_theme_mod( 'statistics_one_title', '230' );
            $stats_one_subtitle = get_theme_mod( 'statistics_one_subtitle', 'Completed Projects' );

            $stats_two_title = get_theme_mod( 'statistics_two_title', '1070' );
            $stats_two_subtitle = get_theme_mod( 'statistics_two_subtitle', 'happy Clients' );


            $stats_three_title = get_theme_mod( 'statistics_three_title', '230' );
            $stats_three_subtitle = get_theme_mod( 'statistics_three_subtitle', 'Perspecti Clients' );

            $stats_four_title = get_theme_mod( 'statistics_four_title', '230' );
            $stats_four_subtitle = get_theme_mod( 'statistics_four_subtitle', 'Completed Projects' );



        ?>

        <!-- end of section all the dynamic content -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num"><?php echo esc_attr__( $stats_one_title, 'videograph' ); ?></h2>
                                <p><?php echo esc_attr__( $stats_one_subtitle, 'videograph' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ci-2.png" alt="">
                                <h2 class="counter_num"><?php echo esc_attr__( $stats_two_title, 'videograph' ); ?></h2>
                                <p><?php echo esc_attr__( $stats_two_subtitle, 'videograph' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num"><?php echo esc_attr__( $stats_three_title, 'videograph' ); ?></h2>
                                <p><?php echo esc_attr__( $stats_three_subtitle, 'videograph' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num"><?php echo esc_attr__( $stats_four_title, 'videograph' ); ?></h2>
                                <p><?php echo esc_attr__( $stats_four_subtitle, 'videograph' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                
                    $team_data = get_theme_mod('team_repeater_setting', '[]');
                    $team_members = json_decode($team_data, true);

                    $team_cta_text = get_theme_mod('team_section_cta_title', 'Meet Our Team');
                    $team_cta_link = get_theme_mod('team_section_cta_link', '#');

                ?>

                
                <?php if( ! empty($team_members) ): $i = 0; ?>
                 
                <?php 
                    $item_class = '';
                    foreach( $team_members as $team ): 
                        $i++;
                        
                        if( $i == 2 ){
                            $item_class = 'team__item--second';
                        }
                        if( $i == 3 ){
                            $item_class = 'team__item--third';
                        }

                        if( $i == 4 ){
                            $item_class = 'team__item--four';
                        }
                        
                       
                ?>

                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg <?php echo $item_class; ?>" data-setbg="<?php echo esc_url($team['image']); ?>">
                        <div class="team__item__text">
                            <h4><?php echo esc_attr($team['name']); ?></h4>
                            <p><?php echo esc_html($team['designation']); ?></p>
                            <div class="team__item__social">
                                <a href="<?php echo esc_url($team['facebook']); ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo esc_url($team['twitter']); ?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo esc_url($team['dribbble']); ?>"><i class="fa fa-dribbble"></i></a>
                                <a href="<?php echo esc_url($team['instagram']) ?>"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php endif; ?>

                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <?php if ( ! empty($team_cta_text) ) : ?>

                        <a href="<?php echo esc_url($team_cta_link); ?>" class="primary-btn"> <?php echo esc_attr__( $team_cta_text, 'videograph' ); ?> </a>
                        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
        <!-- Dynamic customizer Data -->
        <?php

            $blog_section_subtitle = get_theme_mod( 'blog_section_subtitle', 'Our Blog' );
            $blog_section_title = get_theme_mod( 'blog_section_title', 'Blog Updated' );
            $post_to_show_count =  get_theme_mod( 'blog_post_count', 5 );

        ?>
        <!-- end of Dynamic Data -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span><?php echo esc_attr__( $blog_section_subtitle, 'videograph' );  ?></span>
                        <h2><?php echo esc_attr__( $blog_section_title, 'videograph' ); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <?php

                        $wp_lastest_post = new WP_Query(

                            array(
                                'post_type' => 'post',
                                'posts_per_page'     => $post_to_show_count,
                                
                            )

                        );

                        

                    ?>
                    <?php if($wp_lastest_post->have_posts(  )) : ?>
                    
                    <?php while($wp_lastest_post->have_posts()) : $wp_lastest_post->the_post(); ?>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4><?php the_title(); ?></h4>
                            <ul>
                                <li><?php the_time( 'M d, Y' ); ?></li>

                                <?php 
                                    $comments_count = get_comments_number();
                                ?>
                                <?php if($comments_count === 0): ?>
                                    <li>No Comments</li>
                                <?php elseif( $comments_count === 1 ): ?>
                                    <li>1 Comment</li>
                                <?php else: ?>
                                    <li><?php echo $comments_count; ?> Comments</li>
                                <?php endif; ?>
                                
                                
                            </ul>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>

                    

                    

                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
        <!-- Dyanmic values from customizer -->
        <?php
            
            $cta_default_bg = get_template_directory_uri() . '/img/callto-bg.jpg';

            $cta_section_bg = get_theme_mod( 'cta_section_bg', $cta_default_bg );

            $cta_subtitle = get_theme_mod( 'cta_section_subtitle', 'INC5000, Best places to work 2019' );

            $cta_title = get_theme_mod( 'cta_section_title', 'Fresh Ideas, Fresh Moments Giving Wings to your Stories.' );

            $cta_button_text = get_theme_mod( 'cta_button_text', 'Start Your Stories' );

            $cta_button_link = get_theme_mod( 'cta_button_link', '#' );

        ?>
        <!-- End of Dynamic values from Customizer -->
    <section class="callto spad set-bg" data-setbg="<?php echo esc_url_raw( $cta_section_bg ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2><?php echo esc_attr__( $cta_title, 'videograph' ); ?></h2>
                        <p><?php echo esc_attr__( $cta_subtitle, 'videograph' ); ?></p>
                        <a href="<?php echo esc_url( $cta_button_link ); ?>"><?php echo esc_attr__( $cta_button_text, 'videograph' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
<?php get_footer(); ?>