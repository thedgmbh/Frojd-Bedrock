<?php while (have_posts()) : the_post(); ?>
  <section class="applicants">
      <div class="container">
          <div class="applicant-info" style="background-image:url('<?= get_template_directory_uri(); ?>/dist/images/20160126142157-shutterstock-206744158.png');">
              <div class="overlay"></div>
              <img src="<?= get_template_directory_uri(); ?>/dist/images/stock-photo-125980263.png" alt="E4SC">
              <h3><?php the_title(); ?></h3>
              <p>CEO at HubSpot</p>
              <div class="social-links">
                  <ul class="list-unstyled">
                      <li class="facebook">
                          <a href="">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>                                
                      </li>
                      <li class="twitter">
                          <a href="">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li class="linkedin">
                          <a href="">
                              <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li class="google-plus">
                          <a href="">
                              <i class="fa fa-google-plus" aria-hidden="true"></i>
                          </a>                                
                      </li>
                  </ul>
              </div>
          </div>
          <!-- end applicant-info -->
      </div>
  </section>
  <!-- end applicants section -->

  <!-- start applicants-content section -->
  <section class="applicants-content">
      <div class="container">
          <div class="col-sm-4">
              <div class="applicant-headlines">
                  <h4>About</h4>
                  <ul class="list-unstyled">
                      <li>
                          <h5>Country</h5>
                          <span>Italy</span>
                      </li>
                      <li>
                          <h5>Born in</h5>
                          <span>27-8-1990</span>
                      </li>
                      <li>
                          <h5>lives in</h5>
                          <span>ALEX</span>
                      </li>
                      <li>
                          <h5>Education</h5>
                          <span>none</span>
                      </li>
                      <li>
                          <h5>Establishment</h5>
                          <span>none</span>
                      </li>
                      <li>
                          <h5>Sector</h5>
                          <span>3</span>
                      </li>
                      <li>
                          <h5>Stage</h5>
                          <span>two</span>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- end col-sm-4 -->
          <div class="col-sm-8">
              <div class="applicant-details">
                  <div class="applicants-topic">
                      <h4>Biography</h4>
                      <p>Rodney Erickson is a content marketing professional at HubSpot, an inbound 
                         marketing and sales platform that helps companies attract visitors,
                         convert leads, and close customers. Previously, Rodney worked as a marketing
                         manager for a tech software startup. He graduated with honors from 
                         Columbia University with a dual degree in Business Administration and
                         Creative Writing.</p>
                  </div>
                  <!-- end applicants-topic -->
                  <div class="applicants-topic">
                      <h4>Objective</h4>
                      <p>I am a dedicated person who wants to use her skills and education to
                         help students achieve using both traditional and modern approaches..</p>
                  </div>
                  <!-- end applicants-topic -->
                  <div class="applicants-topic">
                      <h4>Value Proposition</h4>
                      <p>
                          Saving can be a major financial hurdle for many people, especially 
                          those on reduced or limited incomes. By automating the entire process,
                          Digit offers users a completely hands-off solution to saving. It’s not for 
                          everyone – but then again, no product, service, or app is – but it is unique,
                          and its value proposition makes this clear.
                      </p>
                  </div>
                  <!-- end applicants-topic -->
                  <div class="applicants-topic">
                      <h4> Target Market</h4>
                      <p>Middle East</p>
                  </div>
                  <!-- end applicants-topic -->

                  <div class="applicants-topic">
                      <h4> Impact</h4>
                      <p>
                          A successful product launch involves preparing for its impact on your
                          existing customers and your organization. While a product’s new features 
                          are exciting for new and prospective customers, they represent change for 
                          your existing customers.
                      </p>
                      <p>
                          New product features and your existing customers
                          When preparing for a product launch, consider what the new features 
                          will mean to existing customers. Ask yourself the following questions 
                          to assess the impact.
                      </p>
                  </div>
                  <!-- end applicants-topic -->
              </div>
              <!-- end applicant-details -->
          </div>
          <!-- end col-sm-8 -->
      </div>
      <!-- end container -->
  </section>
  <!-- start applicants-content section -->

  </div>
  <!-- end applicants-page -->
<?php endwhile; ?>
