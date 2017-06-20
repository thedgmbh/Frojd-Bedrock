<!-- start newsletter section -->
<section class="newsletter">
    <div class="overlay"></div>
    <div class="container">
        <h2>Subscribe to our newsletter</h2>
        <form>
            <!--<div class="col-sm-3 col-sm-offset-1 no-padding">-->
                <div class="name">
                    <input type="text" name="Name" placeholder="Name">
                </div>                        
            <!--</div>-->
            <!--<div class="col-sm-4 no-padding">-->
                <div class="email">
                    <input type="email" name="Email Address" placeholder="Email address">
                </div>
            <!--</div>-->
            <!--<div class="col-sm-2 no-padding">-->
                <div class="submit">
                    <input type="submit" name="submit" value="SUBMIT">
                </div>
            <!--</div>-->
            <!--<div class="col-sm-1"></div>-->
        </form>
    </div>
</section>
<!-- end newsletter section -->

<footer>
    <div class="container">
        <div class="navigation-footer">
            <div class="col-sm-4 links col-xs-12">
                <h5>Entrepreneurs for Social Change</h5>
                <?php
                if (has_nav_menu('secondary_navigation')) :
                  wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'list-unstyled']);
                endif;
                ?>
                <ul class="list-unstyled">
                    <li>
                        <a href="">Blog</a>  
                    </li>
                    <li>
                        <a href="">العربية</a>  
                    </li>
                </ul>
            </div>
            <!-- end col-sm-4 -->
            <div class="col-sm-4 company col-xs-12">
                <h5>COMPANY</h5>
                <ul class="list-unstyled">
                    <li>Press Releases</li>
                    <li>Mission</li>
                    <li>Strategy</li>
                    <li>Works</li>
                </ul>
            </div>
            <!-- end col-sm-4 -->
            <div class="col-sm-4 about col-xs-12">
                <div class="social-links">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/pg/entrepreneursforsocialchange/about/?ref=page_internal" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end social-links --> 
                <h5>ABOUT US</h5>
                <p>
                    one-year programme which aims to support young social
                    entrepreneurs in the Euro-Med region.
                </p>
            </div>
            <!-- end col-sm-4 -->
        </div>   
        <!-- end navigation-footer -->           
        <div class="outro">
            <div class="col-sm-8 col-xs-12 logo">
                <img src="<?= get_template_directory_uri(); ?>/dist/images/Logo.svg" alt="E4SC">
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="question-btn">
                    <button>ASK QUESTION</button>
                </div>
            </div>    
        </div>  
    </div>
</footer>