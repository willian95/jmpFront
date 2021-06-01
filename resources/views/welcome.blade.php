@extends("layouts.main")

@section("content")


<!-- content-holder  -->
<div class="content-holder scroll-content " data-pagetitle="home slider">


  @include("partials.megamenu")


  <!-- fixed-column-wrap -->
  <!----<div class="fixed-column-wrap">
    <div class="progress-bar-wrap">
      <div class="progress-bar color-bg"></div>
    </div>
    <div class="column-image fl-wrap full-height">
      <div class="bg bg-scroll" data-bg="images/bg/long/1.jpg"></div>
      <div class="overlay"></div>
      <div class="column-image-anim"></div>
    </div>
    <div class="fcw-dec"></div>
    <div class="fixed-column-tilte fdct fcw-title">
      <span id="quote">About me</span>
    </div>
  </div>-->
  <!-- fixed-column-wrap end-->
  <!-- hero-wrap-->
  <div class="hero-wrap fl-wrap full-height scroll-con-sec home-half-slider" id="sec1">
    <!-- option-panel-->
    <div class="option-panel hiddec-anim">
      <div class="swiper-counter">
        <div id="current">01</div>
        <div id="total"></div>
      </div>
      <div class="slide-progress-container">
        <div class="slide-progress-warp">
          <div class="slide-progress color-bg"></div>
        </div>
      </div>
    </div>
    <!--option-panel end -->





    <!-- SLIDER TEXTOS DEL BANER YI -->
    <div class="hero-slider-wrap fl-wrap full-height">
      <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- swiper-slide-->
            <div class="swiper-slide">
              <div class="half-hero-wrap">
                <div class="pr-bg"></div>
                <div class="pr-bg"></div>
                <div class="rotate_text hero-decor-let">
                  <div> teams </div>
                  <div> <span> services </span> </div>
                  <div> pipes </div>
                  <div><span>production</span> </div>
                </div>
                <h1 class="text-banner">
                  We partner in your projects, providing <span>high quality services </span> through <span>experienced personnel.</span>

                </h1>
                <h4>
                  John M Phillips is an independent energy services company, with international presence, providing a broad range of specialized equipment and services to the oil, gas, geothermal and mining industries
                </h4>
                <div class="clearfix"></div>
                <!--- <a href="portfolio.html" class="btn ajax fl-btn color-bg">My portfolio</a>--->
              </div>
            </div>
            <!-- swiper-slide end-->
          </div>
        </div>
      </div>
      <div class="hero-dec hiddec-anim"></div>
    </div>
    <!-- hero-slider-wrap  end-->

    <!-- imagens del slider-->
    <div class="hero-slider-img hero-slider-wrap_halftwo">
      <div class="sec-lines"></div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- swiper-slide imagen-->
          <div class="swiper-slide">
            <div class="bg" data-bg="{{asset('images/all/banner.jpg') }}">
            </div>
            <div class="overlay"></div>
          </div>
          <!-- swiper-slide end-->

        </div>
      </div>
    </div>
    <!-- imagens del slider-->

    <!-- hero  elements-->
    <div class="hero-border hb-top"></div>
    <div class="hero-border hb-bottom"></div>
    <div class="hero-border hb-right"></div>
    <div class="hero-corner"></div>
    <div class="hero-corner2"></div>
    <div class="scroll-down-wrap hiddec-anim">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
      <span>Scroll down to discover</span>
    </div>
    <!-- hero  elements end-->
  </div>
  <!-- hero-wrap end-->
  <!-- column-wrap -->
  <div class="column-wrap">
    <!--content -->
    <div class="content">
      <!--page-scroll-nav-->
      <div class="page-scroll-nav fl-wrap">
        <nav class="scroll-init color2-bg">
          <ul class="no-list-style">
            <li>
              <a class="scroll-link fbgs" href="#about" data-bgscr="images/bg/long/1.jpg" data-bgtex="about"><span>About</span></a>
            </li>
            <li>
              <a class="scroll-link fbgs" href="#sec3" data-bgscr="images/bg/long/5.jpg" data-bgtex="services"><span>Services</span></a>
            </li>
            <!---<li>
                    <a class="" href="resource.html" data-bgscr="images/bg/long/3.jpg"><span></span></a>
                  </li>--->
            <li>
              <a class="scroll-link fbgs" href="#rentals" data-bgscr="images/bg/long/13.jpg" data-bgtex="resume"><span>RENTALS</span></a>
            </li>
            <li>
              <a class="scroll-link fbgs" href="#sec5" data-bgscr="images/bg/long/13.jpg" data-bgtex="resume"><span>MARKETS</span></a>
            </li>
            <li>
              <a class="" href="{{ url('/contact') }}" data-bgscr="images/bg/long/4.jpg" data-bgtex="clients"><span>CONTACT</span></a>
            </li>
          </ul>
        </nav>
        <!--<div class="arrowpagenav"></div>--->
      </div>
      <!--page-scroll-nav end-->
      <!--section -->
      <section id="about" class="hidden-section scroll-con-sec bot-element">
        <div class="col-wc_dec" style="height: 100%;"></div>
        <div class="container" style="overflow: hidden;">
          <div class="section-title fl-wrap">
            <div class="swiper-about_arrows">
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

            <div class="swiper-about ">
              <div class="swiper-wrapper">
                <div class="about-item swiper-slide container">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 id="color" class="title-change">About us</h3>
                      <p class="description-change">
                        John M Phillips LLC is an <strong> independent energy services company</strong>, with an international presence, providing a broad range of specialized equipment and services to the <strong>oil, gas, geothermal</strong> and <strong>mining</strong> industries. Our company provides the technical expertise, advanced equipment, and operational support necessary for success. We have the <strong>people, capabilities</strong>, and <strong>vision</strong> to serve the needs of a challenging and evolving industry.
                      </p>
                      <p class="description-change-two">We are a global family working as <strong>one team</strong> to create lasting impact for <strong>ourselves</strong>, our <strong>customers</strong>, and the <strong>communities</strong> where we live and work.
                        <br><br>
                        We believe in service above all since our singular goal is to move our customers’ business <strong>forward, on time</strong> and <strong>on budget.</strong>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <div class="dec-img fl-wrap">
                        <img src="{{asset('images/all/about.jpg') }}" class="respimg image-change" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="about-item swiper-slide container">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 id="color" class="title-change">Mission</h3>
                      <p class="description-change">
                        To add value to our client´s projects by a <strong> holistic approach</strong> to provide services at the highest standards, through a highly skilled service delivery <strong>team</strong> using internationally recognized tools and equipment, along with a unique <strong>flexibility</strong> to adapt to our client needs and a firm commitment to provide solutions as a <strong>partner.</strong>
                        <br><br>
                        This drives what we proudly refer to as “ <strong>The JMP Way</strong> ”.
                      </p>

                      <div class="main-about fl-wrap mt-3">
                        <h3 id="color" class="title-change">Vision</h3>
                        <h5 class="description-change-two">John M. Phillips is the preferred services and equipment rental provider in North & South America.</h5>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="dec-img fl-wrap">
                        <img src="{{asset('images/all/mision.jpg') }}" class="respimg image-change" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="about-item swiper-slide container">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 id="color" class="title-change">History</h3>
                      <p class="description-change">
                        John M. Phillips was established in <strong>Signal Hill, CA</strong> and since 1952 offers a wide <strong>variety of services</strong> to the west coast oilfield and geothermal market. One of our core business since our early days, has been the rental of equipment: from a small spool, to a large bore BOP, handling tools, drilling tools, etc. In 1988 we started offering fishing services for both cased on open hole and in 2009, as part of an expansion campaign we began our Directional Drilling Services division.
                        We have participated in <strong>international projects</strong> in Central and South America, Australia, Middle East, among others. In 2012 we started operations in <strong>Chile</strong> and in 2017 we have successfully expanded our presence to <strong> Argentina and Colombia</strong>.

                      </p>
                      <div class="main-about fl-wrap">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="dec-img fl-wrap">
                        <img src="{{asset('images/all/historia.jpg') }}" class="respimg image-change" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="about-item swiper-slide container">
                  <div class="row">
                    <div class="col-md-6">
                    <h3 id="color" class="title-change">QHSE & Certifications</h3>
                    <p class="description-change">
                    In line with our Mission and Vision, JMP aligns to meet international Service Quality, Environmental and Safety Standards. <br> <br>Our operations in South America are backed up by current ISO tri-norm certifications, among others required by local clients.  
                    </p>
                    <div class="main-about fl-wrap">
                      <h5 class="description-change-two">John M. Phillips LLC has made a substantial investment to deploy first class HSE and Quality systems. These systems are implemented and monitored via trained staff with a continual improvement focus to meet or corporate goals. 

                      </h5>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="dec-img fl-wrap">
                        <img src="{{asset('images/all/certificacion.jpg') }}" class="respimg image-change" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        
        </div>
      </section>
      <!--section end -->
      <!--section -->


      <!--section  -->
      <section class="hidden-section scroll-con-sec bot-element service-secction" id="sec3">
        <div class="container">
          <div class="section-title fl-wrap">
            <h3>Services</h3>
            <!--- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Maecenas in pulvinar neque. Nulla finibus lobortis
              pulvinar.
            </p>-->
          </div>

          <div class="bg-color my-5  py-3 services-slider">
            <div class="swiper-5 swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="{{ url('/services/#service1') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/DirectionalDrilling.jpeg') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> Directional Drilling Services  

                            </h2>
                            <ul>
                              <li>quality drilling equipment</li>
                              <li>premium software</li>
                              <li>experienced drillers</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="{{ url('/services/#service5') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/WorkoverServices.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> WORKOVER
                            </h2>
                            <ul>
                              <li>thru-tubing tools</li>
                              <li> fishing
                                tool</li>
                              <li>milling tools</li>
                              <li>pumps</li>
                              <li> power swivels</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/services/#service6') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/Underreaming.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>UNDERREAMING SERVICES

                            </h2>
                            <ul>
                              <li>tools for borehole enlargement</li>
                              <li>4-3/4 OD</li>
                              <li>9-1/2 inches and a 22” OD body</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/services/#service2') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/FishingServices.jpg') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>Fishing Services 

                            </h2>
                            <ul>
                              <li>Fishing Services 

                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/services/#service3') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/WHITSPOCK.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>WHIPSTOCK SERVICES


                            </h2>
                            <ul>
                              <li>WHIPSTOCK SERVICES
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/services/#service4') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/SurveyServices.jpeg') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>SURVEY
                            </h2>
                            <ul>
                              <li>SURVEY
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
              </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

          <div class="cards-wrap fl-wrap">


          </div>
          <!----<div class="sec-number">02.</div>--->
        </div>
      </section>
      <!--section end -->

      <!--section  -->
      <section class="hidden-section scroll-con-sec bot-element" id="sec3">
        <div class="container">
          <div class="section-title fl-wrap">
            <h3>Rentals</h3>
            <!--- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Maecenas in pulvinar neque. Nulla finibus lobortis
              pulvinar.
            </p>-->
          </div>

          <div class="bg-color my-5  py-3 services-slider rentals-slider" id="rentals">
            <div class="swiper-5 swiper-container">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals1') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/BOP_Pressurecontrol.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> BOP & Pressure Control System Rentals
                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals2') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/MUDPUMP.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> Mud Pump & System Rentals

                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals3') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/POWERTONG.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> Power Swivel Rentals


                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals4') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/handlingrentals.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> Handling Tool Rentals
                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals5') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/DownholeToolRentals.jpg') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2> Downhole Tool Rentals
                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals6') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/WORKOVER.png') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>Workover Tool Rentals
                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="{{ url('/rentals/#rentals7') }}">
                    <div class="content-inner fl-wrap">
                      <div class="content-front">
                        <div class="cf-inner">
                          <div class="bg" data-bg="{{asset('images/all/FishingServices.jpg') }}"></div>
                          <div class="overlay overlay-service"></div>
                          <div class="inner">
                            <h2>Fishing Tool Rentals

                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
              </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

          <div class="cards-wrap fl-wrap">


          </div>
          <!----<div class="sec-number">02.</div>--->
        </div>
      </section>
      <!--section end -->
      <div class="section-separator"><span class="fl-wrap"></span></div>

      <div class="section-separator bot-element">
        <span class="fl-wrap"></span>
      </div>

      <!----<section id="certidications" class="dark-bg bot-element img-certificacion" style="background-image: url(https://c8.alamy.com/compes/2a00dx5/reacondicionamiento-trabajando-en-una-plataforma-previamente-perforados-y-tratando-de-restablecer-la-produccion-a-traves-de-la-reparacion-tonificado-2a00dx5.jpg);">
        <div class="container">
          <div class="container">
            <div class="row">
            
              <div class="col-md-12">
                <div class="video-promo-text fl-wrap mar-top">
                  <h3>CERTIFICATIONS</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Maecenas in pulvinar neque. Nulla finibus
                    lobortis pulvinar. Donec a consectetur nulla. Nulla
                    posuere sapien vitae lectus suscipit, et pulvinar
                    nisi tincidunt. Aliquam erat volutpat.
                  </p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-corner"></div>
      </section>-->
      <!--section end -->

      <div class="limit-box fl-wrap"></div>
    </div>
  </div>
  <!--content  end -->
  <!--footer-->
  @include("partials.footer")
  <!--footer  end -->
</div>
<!-- content-holder end -->

@endsection

@push("scripts")

<script>
  var aboutTitle = "About us"
  var aboutDescription = "John M Phillips LLC is an independent energy services company, with an international presence, providing a broad range of specialized equipment and services to the oil, gas, geothermal and mining industries. Our company has provided the technical expertise, advanced equipment, and operational support necessary for success. We have the people, capabilities, and vision to serve the needs of a challenging and evolving industry. "
  var aboutImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var aboutDescriptionTwo = "We are a global family working as one team to create lasting impact for ourselves, our customers, and the communities where we live and work. We take responsibility for each other and our company’s future, knowing that personal ownership leads to broader success. We trust in our personnel and products and see what others do not and we act. Through business innovation, new innovative products, and service delivery, we are driven to power the industry that powers the world better. We believe in service above all since our singular goal is to move our customers’ business forward. This drives us to anticipate our customers’ needs and work with them to deliver the finest products and services on time and on budget."

  //***********************************informacion*********************************************** */
  var missionTitle = "Mission"
  var missionDescription = "John M. Phillips adds value to our clients’ projects by providing unsurpassed high-quality products and services at a competitive cost. "
  var missionImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var missionDescriptionTwo = "John M. Phillips is the preferred services and equipment rental provider in North & South America."
  //***********************************informacion*********************************************** */

  //***********************************informacion*********************************************** */
  var historyTitle = "History"
  var historyDescription = "John M. Phillips was established in Signal Hill, CA and since 1952 offers a wide variety of services to the west coast oilfield and geothermal market. One of our core business since our early days, has been the rental of equipment: from a small spool, to a large bore BOP, handling tools, drilling tools, etc. In 1988 we started offering fishing services for both cased on open hole and in 2009, as part of an expansion campaign we began our Directional Drilling Services division."
  var historyImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var historyDescriptionTwo = "We have participated in international projects in Central and South America, Australia, Middle East, among others. In 2012 we started operations in Chile and in 2017 we have expanded our presence to Bolivia, Argentina and Colombia. Our holistic approach to provide services at the highest standards, through a highly skilled service delivery team using internationally recognized tools and equipment, along with a unique flexibility to adapt to our client needs and a firm commitment to provide solutions as a partner, has driven a very successful growth."
  //***********************************informacion*********************************************** */

  //***********************************informacion*********************************************** */
  var coreTitle = "Core Values"
  var coreDescription = "John M. Phillips Energy Services & Equipment Rentals is looked at as the preferred services and equipment rental provider in North America & South America. "
  var coreImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var coreDescriptionTwo = "Service • Ethics • Commitment • Integrity • Innovation • Teamwork • Honesty • Communication • Accountability."
  //***********************************informacion*********************************************** */
  //***********************************informacion*********************************************** */
  var qhseTitle = "Health, Safety & Environmental "
  var qhseDescription = "ohn M. Phillips LLC will provide our customers with quality products and services that will meet or exceed their requirements. These quality products and services will result from the efforts of John M. Phillips LLC personnel and suppliers. All employees shall be properly educated to the quality policy. "
  var qhseImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var qhseDescriptionTwo = "Management shall take all necessary measures to assure that the quality policy is understood, implemented and maintained throughout all levels of the company."
  //***********************************informacion*********************************************** */
  //***********************************informacion*********************************************** */
  var poliTitle = "Policies "
  var poliDescription = "JMP knows how important it is to focus on its activities in compliance not only with legal requirements Of every country in which she is present, she seeks to go further with Organizational Policies that protect her "
  var poliImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var poliDescriptionTwo = " Employees and third parties in all HSE themes. To this end, it has the following policies:• Arms, Alcohol and Drug Policy • Non- Smoking Policy • Road Safety Policy • Mutual Respect Policy • Health and Safety Policy at Work"
  //***********************************informacion*********************************************** */

  //***********************************informacion*********************************************** */
  var certificationsTitle = "Certifications"
  var certificationsDescription = "In line with our Mission and Vision, JMP aligns to meet international Service Quality, Environmental and Safety Standards.  Our operations in South America are backed up by current ISO tri-norm certifications, among others required by local clients. "
  var certificationsImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
  var certificationsDescriptionTwo = "John M. Phillips LLC has made a substantial investment to deploy first class HSE and Quality systems. These systems are implemented and monitored via trained staff with a continual improvement focus to meet or corporate goals."
  //***********************************informacion*********************************************** */

  function showAbout() {
    $(".title-change").html(aboutTitle)
    $(".description-change").html(aboutDescription)
    $(".image-change").attr("src", aboutImage)
    $(".description-change-two").html(aboutDescriptionTwo)
  }

  function showMission() {
    $(".title-change").html(missionTitle)
    $(".description-change").html(missionDescription)
    $(".image-change").attr("src", missionImage)
    $(".description-change-two").html(missionDescriptionTwo)
  }

  function showHistory() {
    $(".title-change").html(historyTitle)
    $(".description-change").html(historyDescription)
    $(".image-change").attr("src", historyImage)
    $(".description-change-two").html(historyDescriptionTwo)
  }

  function showCore() {
    $(".title-change").html(coreTitle)
    $(".description-change").html(coreDescription)
    $(".image-change").attr("src", coreImage)
    $(".description-change-two").html(coreDescriptionTwo)
  }

  function showQhse() {
    $(".title-change").html(qhseTitle)
    $(".description-change").html(qhseDescription)
    $(".image-change").attr("src", qhseImage)
    $(".description-change-two").html(qhseDescriptionTwo)
  }

  function showPolicies() {
    $(".title-change").html(poliTitle)
    $(".description-change").html(poliDescription)
    $(".image-change").attr("src", poliImage)
    $(".description-change-two").html(poliDescriptionTwo)
  }

  function showCertifications() {
    $(".title-change").html(certificationsTitle)
    $(".description-change").html(certificationsDescription)
    $(".image-change").attr("src", certificationsImage)
    $(".description-change-two").html(certificationsDescriptionTwo)
  }
</script>

@endpush