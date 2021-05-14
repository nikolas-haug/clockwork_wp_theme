<?php get_header();?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>

<!-- Hero image -->
<?php if (has_post_thumbnail()): ?>
<section class="container-lg pad-xs-0">
    <div class="row">
        <div class="col-lg-12 pad-xs-0">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>"
                class="img-100">
        </div>
    </div>
</section>
<?php endif;?>
<!-- Main content -->
<section class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h2><?php the_title();?></h2>
            <div class="meta">
                Posted on
                <?php the_time('F j, Y g:i a');?>
                &middot; by
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a>
            </div>
            <?php the_content();?>
        </div>
    </div>
</section>

<?php endwhile;?>
<?php endif;?>

<?php get_footer();?>