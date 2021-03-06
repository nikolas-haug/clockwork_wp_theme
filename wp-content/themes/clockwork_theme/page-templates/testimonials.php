<?php
/*
Template Name: Testimonials
 */
?>

<?php get_header();?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post();?>

<!-- Main content -->
<section class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="sub-title"><?php the_title();?></h2>
            <?php the_content();?>
        </div>
    </div>
</section>

<?php endwhile;?>
<?php endif;?>

<!-- Testimonials -->
<section class="container-lg">
    <div class="row">
        <?php $args = array(
    'post_type' => 'testimonial',
);?>

        <?php $testimonial_posts = new WP_Query($args);?>
        <?php while ($testimonial_posts->have_posts()): $testimonial_posts->the_post();?>
        <?php $meta = get_post_meta($post->ID, 'your_fields', true);?>
        <div class="col-med-6 col-12 margin-top margin-bottom">
            <div class="testimonial-block">
                <?php the_content();?>
                <h4><?php echo esc_html($meta['text']); ?></h4>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_query();?>
    </div>
</section>

<?php get_footer();?>