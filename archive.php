<?php
get_header();
/* Template Name: Archive */
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>
                        <?php 
                        // Display a dynamic archive title based on the type
                        if (is_category()) {
                            echo 'Category: ' . single_cat_title('', false);
                        } elseif (is_tag()) {
                            echo 'Tag: ' . single_tag_title('', false);
                        } elseif (is_author()) {
                            echo 'Author: ' . get_the_author();
                        } elseif (is_date()) {
                            echo 'Archive for ' . get_the_date('F Y');
                        } elseif (is_tax()) {
                            echo 'Taxonomy: ' . single_term_title('', false);
                        } else {
                            the_archive_title();
                        }
                        ?>
                    </h2>
                    <div class="breadcrumb__links">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <span><?php the_archive_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Archive Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <?php 
                            // Display the thumbnail if available
                            if (has_post_thumbnail()) {
                                echo '<a href="' . get_the_permalink() . '">';
                                the_post_thumbnail('medium', ['class' => 'blog__thumbnail']);
                                echo '</a>';
                            }
                            ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <ul>
                                <li><?php the_time('M d, Y'); ?></li>
                                <li><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></li>
                            </ul>
                            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12">
                    <h2>No posts available in this archive.</h2>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__option blog__pagi">
                    <?php
                    the_posts_pagination([
                        'mid_size' => 2,
                        'prev_text' => '<span class="arrow_left"></span> Prev',
                        'next_text' => 'Next <span class="arrow_right"></span>',
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Archive Section End -->

<?php get_footer(); ?>
