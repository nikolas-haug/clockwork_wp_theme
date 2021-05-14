<?php
/*
Template Name: Page with Sidebar
 */
?>

<?php get_header();?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>

<!-- Main content -->
<section class="container-lg">
    <div class="row">
        <div class="col-med-8">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>"
                class="img-100">
            <?php endif;?>
            <h2 class="sub-title"><?php the_title();?></h2>
            <?php the_content();?>
        </div>
        <div class="col-med-4">
            <?php if (is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar');?>
            <?php endif;?>
        </div>
    </div>
</section>

<?php endwhile;?>
<?php endif;?>

<?php get_footer();?>