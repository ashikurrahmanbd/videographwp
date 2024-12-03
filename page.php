<?php
get_header();
/* Template Name: Page */
?>

<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?php the_title(); ?></h2>
                    <div class="breadcrumb__links">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="page spad">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<h2>No content available</h2>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
