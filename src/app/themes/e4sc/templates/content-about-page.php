<!-- start about-page -->
<div class="about-page">
    <!-- start intro section -->
    <section class="intro">
        <div class="container">
            <h1><?php the_field('about_page_headline'); ?></h1>
        </div>
    </section>
    <!-- end intro section -->

    <!-- start about-content -->
    <section class="about-content">
        <div class="container">
            <div class="col-md-6 col-xs-12">
                <h3><?php the_field('about_us_title'); ?></h3>
                <?php the_field('about_us_description'); ?>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/about-img.png" alt="E4SC">
            </div>
            <div class="col-md-6 col-xs-12">
                <h3><?php the_field('vision_statement_title'); ?></h3>
                <?php the_field('vision_statement_description'); ?>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3><?php the_field('mission_statement_title'); ?></h3>
                <?php the_field('mission_statement_description'); ?>
            </div>
        </div>
    </section>
    <!-- end about-content section -->
</div>
