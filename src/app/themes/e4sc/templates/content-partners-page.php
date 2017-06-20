<!-- start about-page -->
<div class="about-page">
    <!-- start intro section -->
    <section class="intro">
        <div class="container">
            <h1>OUR PARTNERS</h1>
            <p>Our partners contribute to Chevening in various ways, helping us to develop
               talented individuals from across\u2028 the globe who will go on to be future
               leaders and decision makers.
            </p>
        </div>
    </section>
    <!-- end intro section -->

    <!-- start about-content -->
    <section class="about-content">
        <div class="container">
            <?php if( have_rows('partners') ): ?>

                <?php $i = 1; ?>

                <?php while( have_rows('partners') ): the_row(); 

                    // vars
                    $partner_name = get_sub_field('partner_name');
                    $partner_logo = get_sub_field('partner_logo');
                    $partner_description = get_sub_field('partner_description');

                    ?>
                    <?php if ($i % 2) : ?>
                        <div class="col-md-6 col-xs-12">
                            <h2><?php echo $partner_name; ?></h2>
                            <?php echo $partner_description; ?>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <?php if( !empty($partner_logo) ): ?>
                                <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="col-md-6 col-xs-12">
                            <?php if( !empty($partner_logo) ): ?>
                                <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <h2><?php echo $partner_name; ?></h2>
                            <?php echo $partner_description; ?>
                        </div>
                    <?php endif; ?>

                    <?php $i++; ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </section>
    <!-- end about-content section -->
</div>