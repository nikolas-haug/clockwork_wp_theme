<?php get_header();?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>

<!-- Hero image -->
<?php if (has_post_thumbnail()): ?>
<div class="container-lg pad-xs-0">
    <div class="row">
        <div class="col-lg-12 pad-xs-0">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>"
                class="img-100">
        </div>
    </div>
</div>
<?php endif;?>
<!-- Main content -->
<div class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="sub-title"><?php the_title();?></h2>
            <?php the_content();?>
        </div>
    </div>
</div>

<?php endwhile;?>
<?php endif;?>

<?php get_footer();?>