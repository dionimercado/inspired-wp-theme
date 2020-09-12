jQuery( function($) {

  // Smooth Scrolling: Smooth scrolls to an ID on the current page.
  // To use this feature, add a link on your page that links to an ID, and add the .page-scroll class to the link itself. See the docs for more details.
  jQuery('.headerNav .nav-link, .headerNav .navbar-brand').bind('click', function(event) {
    var $anchor = jQuery(this);
    jQuery('html, body').stop().animate({
        scrollTop: (jQuery($anchor.attr('href')).offset().top - 127)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
  });


  // toggleClass to hambuger menu
  jQuery('.navbar-toggler').on('click', function() {
    jQuery(this).toggleClass('open');
  });

  jQuery('#rsvp .rtb-booking-form input, #rsvp .rtb-booking-form select, #rsvp .rtb-booking-form textarea').on( 'focus', function() {
    jQuery(this).parent().find('label').addClass('focused');
  });


  // jQuery(".boca-events").owlCarousel({
  //   loop: false,
  //   center:false,
  //   startPosition: 0,
  //   margin:20,
  //   dots: false,
  //   autoplay: true,
  //   autoplayTimeout: 7000,
  //   navText: [
  //     '<i class="fas fa-chevron-left"></i>',
  //     '<i class="fas fa-chevron-right"></i>'
  //   ],
  //   responsiveClass:true,
  //   responsive:{
  //       0:{
  //           items:1,
  //           slideBy: 1,
  //           margin: 10,
  //           nav:false,
  //           loop:false,
  //           stagePadding: 80,
  //           startPosition: 1,
  //       },
  //       600:{
  //           items:2,
  //           slideBy: 2,
  //           startPosition: 2,
  //           stagePadding: 80,
  //           nav:false,
  //       },
  //       1000:{
  //           items:3,
  //           slideBy: 3,
  //           nav:false,
  //           loop:false
  //       }
  //   }
  // });


   jQuery(".reservation-form :input").each(function(index, elem) {
      var eId = $(elem).attr("id");
      var label = null;
      if (eId && (label = $(elem).parents("form").find("label[for="+eId+"]")).length == 1) {
        // console.log('ss',$(label).html())
          $(elem).attr("placeholder", $(label).html().replace(/\s/g, ''));
          // $(elem).attr("placeholder", label.replace(/\s/g, ''));
          $(label).remove();
      }
   });

});
