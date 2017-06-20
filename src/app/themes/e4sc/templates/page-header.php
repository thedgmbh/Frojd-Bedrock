<header>
    <!-- start navbar --> 
    <nav class="about-nav-lg not-home visible-lg">
        <div class="container">
            <div class="col-sm-4">
                <div class="logo">
                    <a href="index.html" >
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/Logo-colored.svg" alt="E4SC logo">
                    </a>                            
                </div>
            </div>
            <div class="col-sm-8">
                <div class="navigation-links">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start small-nav bar -->
    <nav class="sm-nav hidden-lg not-home">
        <div class="container">
            <div class="col-xs-4">
                <div class="logo">
                    <a href="index.html" >
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/Logo-colored.svg" alt="E4SC logo">
                    </a> 
                </div>
            </div>
            <div class="col-xs-8">
                <div class="navigations">
                    <a href="registeration.html" class="outside">Apply</a>
                    <div class="menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- end menu -->
                    <div class="menu-content">
                        <div class="menu-controls">
                            <div class="close-menu">
                                <span></span>
                                <span></span>
                            </div>
                            <!--<i class="fa fa-times fa-2x" aria-hidden="true"></i>-->
                            <a href="registeration.html" class="apply">Apply</a>
                        </div>
                        <?php
                        if (has_nav_menu('primary_navigation')) :
                          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
                        endif;
                        ?>
                    </div>
                    <!-- end menu-content -->
                </div> 
                <!-- end navigations -->           
            </div>
        </div>
    </nav>
    <!-- end small nav-bar -->
</header>