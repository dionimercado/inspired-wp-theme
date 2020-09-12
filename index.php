<?php get_header() ?>

<section>
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
</section>

<section id="about" class="py-5 my-5">
  <div class="container">
    <div class="heading">
      <span class="dart-fs-48">Welcome to</span>
      <h1>Inspired Events</h1>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 h-100">
        <div class="h-100">
          <img src="https://inspiredevents.nyc/wp-content/uploads/2019/05/about.jpg" alt="About Us" class="w-100 h-auto">
        </div>
      </div>
      <div class="col-md-8 text-black-50">
        <p>We realize that each person is unique and in a different stage of the planning process. It is for this reason that we create custom proposals based on the following services. Please contact Inpisred Events directly so that we can discuss our services and learn more about your vision.</p>
        <p><strong>Mision:</strong> From weddings to social events, private parties and joyous occasions, it’s about creating an unforgettable experience that takes the guest through a day, an evening, or even a weekend-long celebration, that is reflective of that client.</p>
        <p><strong>Vision:</strong> Inspired Events believes that a successful event requires unique and personalize attention to every detail. Event Designing was born from our deep passion for creating stylish events that make a statement through creativity, detailed organization and design. We pride ourselves in staying savvy about the hottest trends in the industry, but our true passion comes from infusing amazingly innovative concepts, which is what makes each event unique.</p>
      </div>
    </div>
  </div>
</section>

<section id="resevation" class="resevation py-5">
  <div id="rsvp" class="container">
    <div class="row dart-no-gutter">
      <div class="col-md-4 col-sm-4 mr-md-0 pr-md-0">
        <div class="time-info time-info-outer">
          <div class="time-info-inner">
            <div class="heading">
              <span class="dart-fs-48">Our</span>
              <h1>Package</h1>
              <hr>
            </div>
            <div class="open-time dart-pt-20 text-center">
              <p>
                6 hours rental<br>
                Bartender<br>
                Ice maker machine<br>
                Beverage cooler<br>
                Chaivari chairs<br>
                Stainless steel chafing dish<br>
                Lighting system<br>
                Central AC<br>
                48” round tables<br>
                2 separate bathrooms<br>
                <!-- <span class="text-red text-uppercase">MONDAY - WEDNESDAY</span><br>
                4PM - 12AM<br><br>
                <span class="text-red text-uppercase">THURSDAY - SATURDAY</span><br>
                4PM - 4AM<br><br>
                <span class="text-red text-uppercase">SUNDAY</span><br>
                12PM - 4AM<br> -->
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 ml-md-0 pl-md-0">
        <div class="resevation-block">
          <div class="heading">
            <span class="dart-fs-48">Reservation</span>
            <h1>online booking</h1>
            <hr>
          </div>
          <div class="reservation-form">
            <?php echo do_shortcode('[booking-form]') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="newsletter">
  <h3>Subscribe to our newsletter!</h3>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ml-auto mr-auto">
        <!-- MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
          <form role="form" action="//dionimercado.us14.list-manage.com/subscribe/post?u=c84d33d7d0a554f6988195f5b&amp;id=1833d9d4d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
            <div class="input-group input-group-lg">
              <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
              <span class="input-group-btn">
                <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInRight;">Subscribe!</button>
              </span>
            </div>
            <div id="mce-responses">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
          </form>
        </div>
        <!-- End MailChimp Signup Form -->
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="mt-5 pt-5 pb-4 pb-md-5">
  <div class="heading mb-5">
    <span class="dart-fs-48">Keep in Touch</span>
    <h1>Recent Updates</h1>
    <hr>
  </div>
  <div class="container">
    <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
  </div>
</section>

<section style="margin-bottom: -8px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.173150928777!2d-73.90508484866609!3d40.84612207921616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c319a2f9d118a68!2sInspired+Events!5e0!3m2!1sen!2sus!4v1542080204648" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer() ?>
