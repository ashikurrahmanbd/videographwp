<?php
get_header();
/* Template Name: 404 */
?>

<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>404 - Page Not Found</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="page spad">
    <div class="container">
        <h2>Oops! The page you are looking for doesn't exist.</h2>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary">Return Home</a>
    </div>
</section>

<?php get_footer(); ?>
