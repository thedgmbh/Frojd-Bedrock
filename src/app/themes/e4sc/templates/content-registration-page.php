<!-- start news page -->
<div class="registeration-page">
    <!-- start contact section -->
    <section class="registeration-section">
        <div class="container">
            <h2 class="e4sc-heading"><?php the_field('application_headline'); ?></h2>
            <div class="title">
                <h4><?php the_field('application_subtitle'); ?></h4>
                <p><?php the_field('application_subtitle_description'); ?></p>
            </div>  
            <div class="registeration-phases">
                <?php if( have_rows('application_process') ): ?>

                    <?php $i = 1; ?>

                    <?php while( have_rows('application_process') ): the_row(); 

                        // vars
                        $phase_title = get_sub_field('phase_title');
                        $phase_deadline = get_sub_field('phase_deadline');
                        $note = get_sub_field('note');
                        $note_conditions = get_sub_field('note_conditions');
                        $note_conditions_info = get_sub_field('note_conditions_info');

                        ?>
                        
                        <?php 
                            if ($i == 1) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                        ?>

                        <div class="phase <?php echo $active ?>">
                            <div class="top-phase">
                                <div class="phase-number">
                                    <span><?php echo $i; ?></span>
                                </div>
                                <div class="phase-chevron">
                                    <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
                                    <!--<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>-->
                                </div>
                                <div class="phase-title">
                                    <p>
                                        <b>Phase <?php echo $i; ?></b> <?php echo $phase_title; ?>
                                    </p>
                                    <p><?php echo $phase_deadline; ?></p>
                                </div>
                            </div>
                            <!-- end top-phase -->
                            <div class="note-conditions">
                                <?php if( $note ): ?>
                                <div class="note">
                                    <?php echo $note; ?>
                                </div>
                                <?php endif; ?>
                                <?php if( $note_conditions ): ?>
                                <ul class="conditions">
                                    <?php echo $note_conditions; ?>
                                </ul>
                                <?php endif; ?>
                                <?php if( $note_conditions_info ): ?>
                                <div class="phase-info">
                                    <?php echo $note_conditions_info; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <!-- end note-conditions -->
                        </div>
                        <!-- end phase -->
                        <?php $i++; ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
            <!-- end registeration-phases -->
        </div>
        <!-- end container -->
        <div class="start-btn">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/Bitmap.png">
            <a href="<?php the_field('apply_page'); ?>">Start Now</a>
        </div>
    </section>
    <!-- end registeration-section -->
</div>
<!-- end partners page -->