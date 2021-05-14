<?php get_header();?>



<!-- Post image -->
<!-- <div class="container-stretch container-lg">
    <div class="row">
        <div class="col-lg-12 pad-sm-0">
            <div class="container--booking">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', array('class' => 'img-100'));?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div> -->
<!-- Main content -->
<div class="container-lg">
    <div class="row">
        <div class="col-lg-8">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post();?>
            <h2><?php the_title();?></h2>
            <div class="meta">
                <?php the_time('F j, Y g:i a');?>
                by
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a>
            </div>
            <?php the_content();?>
            <a href="<?php echo the_permalink(); ?>">read more</a>
            <?php endwhile;?>
            <?php endif;?>
        </div>
        <div class="col-med-4">
            <?php if (is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar');?>
            <?php endif;?>
        </div>
    </div>
</div>



<?php get_footer();?>