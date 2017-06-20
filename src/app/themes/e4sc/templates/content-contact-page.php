<!-- start news page -->
<div class="contact-page">
    
    <!-- start contact section -->
    <section class="contact-section">
        <div class="container">
            <h2>Contact</h2>
            <div class="title">
                <h3>ASK US ANYTHING</h3>
            </div>
            <div class="E4SC-Contact-Us">
                <div class="col-md-6">
                    <?php 
                        $form_object = get_field('contact_forms');
                        gravity_form_enqueue_scripts($form_object['id'], true);
                        gravity_form($form_object['id'], false, true, false, '', true, 1); 
                    ?>
                </div>                              
                <!-- end col-md-6 -->
                <div class="col-md-6">
                    <div class="map-wrapper">
                    </div>                   
                    <div id="map"></div>         
                </div>
            </div>   
            <!-- end E4SC-Contact-Us -->   
        </div>
        <!-- end container -->
    </section>
    <!-- end contact-section -->

</div>
<!-- end partners page -->

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFvlOfHGphDJTPwIEZSsCYihqP_ccPxl4">
</script>