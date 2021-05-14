<?php get_header();?>

<!-- Hero image -->
<div class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h2>Search Results:</h2>
        </div>
    </div>
</div>
<!-- Main content -->
<div class="container-lg">
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();?>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php the_permalink();?>">
                <strong>
                    <?php the_title();?>
                </strong>
                <?php the_excerpt();?>
            </a>
        </div>
    </div>
    <?php endwhile;?>
    <?php else: ?>
    <div class="row">
        <div class="col-lg-12">
            <p>Sorry, no results found.</p>
        </div>
    </div>
    <?php endif;?>
</div>


<?php get_footer();?>