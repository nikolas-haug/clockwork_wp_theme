<?php
/*
Template Name: Welcome Page
 */
?>

<?php get_header();?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>

<main>

    <!-- Welcome/booking image -->
    <div class="container-stretch container-lg">
        <div class="row">
            <div class="col-lg-12">
                <div class="container--booking">
                    <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>"
                        class="img-100">
                    <?php endif;?>
                    <!-- TODO: add button data to customizer -->
                    <a href="<?php echo esc_url(site_url('/booking')); ?>" class="button btn--booking btn--fixed">
                        book now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="container-lg">
        <div class="row">
            <div class="col-med-8">
                <?php the_content();?>
            </div>
            <div class="col-med-4">
                <?php if (is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar');?>
                <?php endif;?>
            </div>
        </div>
    </div>
</main>

<?php endwhile;?>
<?php endif;?>

<?php get_footer();?>