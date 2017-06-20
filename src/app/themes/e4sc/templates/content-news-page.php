<!-- start news page -->
<div class="news-page">
    
    <!-- start news section -->
    <section class="news-section">
        <div class="container">
            <h2>OUR NEWS</h2>
            <div class="searchBox">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="search" placeholder="Search in News" name="search">
            </div>
            <!-- end searchBox -->
            <!-- start our-news section -->

                    <div class="our-news">
                        <div class="container">
                            <div class="controls">
                                <button type="button" class="active" data-filter="all">All</button>
                                <button type="button" data-filter=".category-a">Entrepreneur news</button>
                                <button type="button" data-filter=".category-b">Newslette</button>
                                <button type="button" data-filter=".category-c">Video</button>
                            </div>
                            <div class="mix-container">

                            <?php 
                                $args = array( 'post_type' => 'news', 'posts_per_page' => 10 );
                                $the_query = new WP_Query( $args ); 
                            ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                                <?php $i = 0; ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <?php 
                                        if ($i == 0) {
                                            $class = "col-sm-8 col-xs-12";
                                        } else {
                                            $class = "col-sm-4 col-xs-6";
                                        }
                                    ?>
                                    <div class="<?php echo $class; ?> mix category-a">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="news-wrapper">
                                                <img src="<?= get_template_directory_uri(); ?>/dist/images/E4SC-NEWS.png" alt="E4SC News">
                                                <div class="news-content">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p>
                                                        Earlier this year, Saudi Arabia unveiled Vision 2030,\u2028 its plan to
                                                        diversify away from oil. Important players \u2028in that
                                                        shift will be entrepreneurs. Although...
                                                    </p>
                                                    <div class="news-footer">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        <span>1 JUNE 2015</span>
                                                    </div>
                                                </div>
                                                <!-- end news-content -->
                                            </div>
                                            <!-- end news-wrapper -->
                                        </a>
                                        <!-- end hyperlink page for news-wrapper -->
                                    </div>
                                <?php $i++; ?>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="show-all-btn">
                                        <button>Show All</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end mix-container -->
                        </div>
                    </div>
                    <!-- end our-news section -->
                    </div>
        <!-- end container -->
    </section>
    <!-- end news-section -->

</div>
<!-- end partners page