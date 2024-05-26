<?php 

    get_header();
    /* 
    Template Name: Blog
    */
?>
<!-- dynamic css -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php home_url(); ?>">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php
                    $blogs = new WP_Query(array(
                        'post_type' => 'post',
                        'status'    => 'published',
                        'posts_per_page' => -1
                    ));
                ?>

                <!-- single blog -->
                <?php if($blogs->have_posts()): ?>
                <?php while($blogs->have_posts()): $blogs->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-6">

                    <?php
                        $post_id = get_the_ID(); 
                        $thumbnail_src = get_the_post_thumbnail_url($post_id, 'full');
                    
                    ?>

                    <div class="blog__item blog-item-id-<?php echo $post_id; ?>">
                        <style rel="stylesheet">
                             .blog__item.blog-item-id-<?php echo $post_id; ?>:hover{
                                background: url('<?php echo esc_url($thumbnail_src); ?>');
                             }   
                        </style>
                        <h4><?php the_title(); ?></h4>
                        <ul>
                            <li><?php the_time( 'M d, Y' ) ?></li>
                            <li><?php comments_popup_link( '0 Comments', '1 Comments', '% comments') ?></li>
                        </ul>
                        <p><?php echo wp_trim_words( get_the_content(), 20, '...') ?></p>
                        <a href="<?php the_permalink(); ?>">Read more <span class="arrow_right"></span></a>
                    </div>

                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="no-post-found">
                        <h2>No Post Found!</h2>
                    </div>
                <?php endif; ?>
                <!-- end of single blog -->


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option blog__pagi">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    
<?php get_footer(); ?>