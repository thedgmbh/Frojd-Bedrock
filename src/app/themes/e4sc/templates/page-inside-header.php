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