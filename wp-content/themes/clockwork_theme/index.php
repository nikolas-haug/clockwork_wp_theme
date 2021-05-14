<?php get_header();?>

<!-- posts heading -->
<div class="container-lg">
    <h2 class="posts-heading">
        <?php

$posts_page_title = get_the_title(get_option('page_for_posts', true));

if (is_category()) {
    single_cat_title();
} else if (is_author()) {
    the_post();
    echo 'Archives by Author: ' . get_the_author();
    rewind_posts();
} else if (is_tag()) {
    single_tag_title();
} else if (is_day()) {
    echo 'Archives by Day: ' . get_the_date();
} else if (is_month()) {
    echo 'Archives by Month ' . get_the_date('F Y');
} else if (is_year()) {
    echo 'Archives by Year ' . get_the_date('Y');
} else {
    echo $posts_page_title;
}
?>
</div>
<!-- Main content -->
<div class="container-lg">
    <div class="row">
        <div class="col-med-8">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post();?>
            <div class="container-stretch padding-right-zero padding-left-zero">
                <div class="row">
                    <div class="col-med-8">
                        </h2>
                        <h2>
                            <a href="<?php echo the_permalink(); ?>"><?php the_title();?></a>
                        </h2>
                        <div class="meta">
                            <em><?php the_time('F j, Y g:i a');?></em>
                            &middot; by
                            <a
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a>
                        </div>
                        <?php the_excerpt();?>
                    </div>
                    <div class="col-med-4 center-align">
                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title();?>"
                            class="img-100">
                        <?php endif;?>
                    </div>
                </div>
            </div>
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