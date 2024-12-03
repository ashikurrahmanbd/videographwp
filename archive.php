<?php
get_header();
/* Template Name: Archive */
?>

<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?php the_archive_title(); ?></h2>
                    <div class="breadcrumb__links">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <span><?php the_archive_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog spad">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12">
                    <h2>No posts available in this archive.</h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
