/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        // toggling menu in small nav
        $(".sm-nav .navigations .menu").on("click",function(){
            $(".sm-nav .menu-content").animate({
                right:0
            },500);
        });
        $(".sm-nav .navigations .close-menu").on("click",function(){
            $(".sm-nav .menu-content").animate({
                right:-270
            },500);
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        // trigger mix-it-up in our-news section
        var mixer = mixitup('.mix-container');

        // toggling active class of our-news controls  
        $(".controls button").on("click",function(){
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        });

        // trigget bootstrap carousal in testimonials section 
        $('.carousel').carousel({
            interval: false
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'applicants': {
      init: function() {
        // trigger mix-it-up in our-news section
        var mixer = mixitup('.mix-container');

        // toggling active class of our-news controls  
        $(".controls button").on("click",function(){
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        });
      }
    },
    'news': {
      init: function() {
        // trigger mix-it-up in our-news section
        var mixer = mixitup('.mix-container');

        // toggling active class of our-news controls  
        $(".controls button").on("click",function(){
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
        });
      }
    },
    'contact': {
      init: function() {
            // var uluru = {lat: -25.363, lng: 131.044};
            var uluru = {lat:48.2348333 , lng:16.4146769};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
      }
    },
    'application': {
      finalize: function() {
        // slideToggle registeration phases
        $(".phase .top-phase").on("click",function(){
            var sectionStatus = $(this).next(".note-conditions").css("display");
            if(sectionStatus !== "block"){
                $(".phase .note-conditions").slideUp(500,function(){
                    $(this).parent().removeClass("active");
                });
                $(this).next(".note-conditions").slideDown(500,function(){
                    $(this).parent().addClass("active");
                });
            }
        });
      }
    },
    'apply': {
      init: function() {
        $(".register-step .next-btn").on("click",function(){
          console.log('pressed');
            if(!$(this).hasClass("complete")){
                $(this).parent().fadeOut(300,function(){
                    $(this).removeClass("active");
                    $(this).next().fadeIn(300,function(){
                        $(this).addClass("active");
                    });
                });

                // $(this).parent().next().fadeIn(300,function(){
                //     $(this).addClass("active");
                // });
            }
            else{
                console.log('this is the last step awesome!');
            }
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
