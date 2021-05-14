<?php get_header();?>

<!-- Main content -->
<section class="container-lg">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="sub-title">Oops! That page can’t be found.</h2>
            <p>It looks like nothing was found at this location. Maybe try a search?</p>
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(site_url('/')); ?>">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s"
                        title="Search for:">
                    <span class="search-form-icon"></span>
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>
        </div>
    </div>
</section>

<?php get_footer();?>