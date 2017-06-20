<!-- start news page -->
<div class="register-page">
    <!-- start contact section -->
    <section class="register-section">
        <div class="container">
            <h2 class="e4sc-heading"><?php the_field('apply-page-sub-title'); ?></h2>
            <div class="title">
                <?php the_field('apply_page_subtitle_description'); ?>
            </div>

            <div class="registeration-steps">
                <div class="register-step one active">
                    <?php 
                        $form_object = get_field('gf_apply_form');
                        gravity_form_enqueue_scripts($form_object['id'], true);
                        gravity_form($form_object['id'], true, true, false, '', true, 1); 
                    ?>

                </div>
                <!-- end register-step -->
                <div class="register-step two">
                    <div class="sub-step">
                        <label>
                            3. Gender*
                            <span>Sub Title</span>
                        </label>
                        <select class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="sub-step">
                        <label>
                            4. Date of birth*
                        </label>
                        <input class="form-control" type="date" name="birth">
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step three">
                    <div class="sub-step">
                        <label>
                            5. Country Of Birth*
                        </label>
                        <select class="form-control">
                            <option>Egypt</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>US</option>
                        </select>
                    </div>
                    <div class="sub-step">
                        <label>
                            6. Current country of residence*
                        </label>
                        <select class="form-control">
                            <option>Egypt</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>US</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step four">
                    <div class="sub-step">
                        <label>
                            7. Current Nationality*
                        </label>
                        <select class="form-control">
                            <option>Select your country</option>
                            <option>Egypt</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>US</option>
                        </select>
                    </div>
                    <div class="sub-step">
                        <label>
                            8. Passport Number*
                        </label>
                        <input class="form-control" type="number" name="passportNumber">
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                 <div class="register-step five">
                    <div class="sub-step">
                        <label>
                            9. Country which issued passport*
                        </label>
                        <select class="form-control">
                            <option>Select your country</option>
                            <option>Egypt</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>US</option>
                        </select>
                    </div>
                    <div class="sub-step">
                        <label>
                            10. Date of issuance of passport*
                        </label>
                        <input type="date" name="passportDate">
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step six">
                    <div class="sub-step">
                        <label>
                            11. Expiry date of passport*
                        </label>
                        <input class="form-control" type="date" name="passportExpiry">
                    </div>
                    <div class="sub-step">
                        <label>
                            12. Mailing address*
                        </label>
                        <input class="form-control" type="date" name="passportDate">
                        <p>Must be valid until May 2015,If not,provide a permanent mailing address </p>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step seven">
                    <div class="sub-step">
                        <label>
                            13. Phone Number*
                        </label>
                        <input class="form-control" type="number" name="phone">
                        <p>Inc. Country code</p>
                    </div>
                    <div class="sub-step">
                        <label>
                            14. Email Address*
                        </label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step eight">
                    <div class="sub-step">
                        <label>
                            15. The candidate should be in a position where s/he has
                             decision-making power. What key leadership position do you hold ?
                        </label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="sub-step">
                        <label>
                            16. What is your enterprise's website?*
                        </label>
                        <input class="form-control" type="url" name="website">
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step nine">
                    <div class="sub-step">
                        <label>
                           17. Does it have any social media accounts? (space to list accounts)
                        </label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="sub-step">
                        <label>
                            18. Is your enterprise a:
                        </label>
                        <select class="form-control">
                            <option value="Non-Profit">Non-Profit</option>
                            <option value="Undecided">Undecided</option>
                            <option value="For-Profit">For-Profit</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step ten">
                    <div class="sub-step">
                        <label>
                           19. How many full-time employees (excluding yourself) does your enterprise currently employ? 
                        </label>
                        <input class="form-control" type="number" name="employees">
                    </div>
                    <div class="sub-step">
                        <label>
                            20. What is the primary industry/sector?
                        </label>
                        <select class="form-control">
                            <option value="Business">Business Development</option>
                            <option value="web">Web Development</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step eleven">
                    <div class="sub-step">
                        <label>
                           21. Currently, in what country are your enterprise's main operations?*
                        </label>
                        <select class="form-control">
                            <option>Canada</option>
                            <option>France</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    <div class="sub-step">
                        <label>
                            22. In what country is your enterprise headquarted?* 
                        </label>
                        <select class="form-control">
                            <option>Canada</option>
                            <option>France</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step twelve">
                    <div class="sub-step">
                        <label>
                           23. What is your mission statement in one sentence?*
                        </label>
                        <input class="form-control" type="text" name="mission">
                    </div>
                    <div class="sub-step">
                        <label>
                            24. How long has your enterprise been in operation?*
                        </label>
                        <select class="form-control">
                            <option value="-1">Under 1year</option>
                            <option value="1-2">1-2 years</option>
                            <option value="3-4">3-4 years</option>
                            <option value="+5">+5 years</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step thirteen">
                    <div class="sub-step">
                        <label>
                           25. What do you hope to receive from Enterprenurs for Social Change that you cannot procure elsewhere?
                        </label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="sub-step">
                        <label>
                            26. How did you hear about E4SC program ?
                        </label>
                        <select class="form-control">
                            <option value="facebook">facebook</option>
                            <option value="twitter">twitter</option>
                            <option value="instagram">Instagram</option>
                            <option value="friend">from friend</option>
                        </select>
                    </div>
                    <div class="next-btn">
                        <a>Next</a>
                    </div>
                </div>
                <!-- end register-step -->
                <div class="register-step foyrteen">
                    <div class="sub-step">
                        <label>
                           27. Have you applied for the E4SC program in the Past?
                        </label>
                        <select class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="next-btn complete">
                        <a href="success.html">Complete</a>
                    </div>
                </div>
                <!-- end register-step -->
            </div>
            <!-- end registeration-steps -->
        </div>
        <!-- end container -->
    </section>
    <!-- end register-section -->
</div>
<!-- end partners page