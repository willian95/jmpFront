@extends("layouts.main")

@section("content")
  
    
      <!-- content-holder  -->
      <div class="content-holder scroll-content " data-pagetitle="home slider">


        @include("partials.megamenu")


        <!-- fixed-column-wrap -->
        <div class="fixed-column-wrap">
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
        </div>
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
                        We partner in your projects, <br />
                        providing <span>high quality
                          services</span> through experienced
                        form personnel.
                      </h1>
                      <h4>
                        John M Phillips is an independent energy services company, with
                        international presence, providing a broad range of specialized equipment
                        and services to the oil, gas, geothermal and mining industries.
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
                  <div class="bg"
                    data-bg="https://c8.alamy.com/compes/2a00dx5/reacondicionamiento-trabajando-en-una-plataforma-previamente-perforados-y-tratando-de-restablecer-la-produccion-a-traves-de-la-reparacion-tonificado-2a00dx5.jpg">
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
                    <a class="scroll-link fbgs" href="#sec2" data-bgscr="images/bg/long/1.jpg"
                      data-bgtex="about"><span>About</span></a>
                  </li>
                  <li>
                    <a class="scroll-link fbgs" href="#sec3" data-bgscr="images/bg/long/5.jpg"
                      data-bgtex="services"><span>Services</span></a>
                  </li>
                  <!---<li>
                    <a class="" href="resource.html" data-bgscr="images/bg/long/3.jpg"><span></span></a>
                  </li>--->
                  <li>
                    <a class="scroll-link fbgs" href="#sec5" data-bgscr="images/bg/long/13.jpg"
                      data-bgtex="resume"><span>RENTALS</span></a>
                  </li>
                  <li>
                    <a class="scroll-link fbgs" href="#sec5" data-bgscr="images/bg/long/13.jpg"
                      data-bgtex="resume"><span>MARKETS</span></a>
                  </li>
                  <li>
                    <a class="" href="contact.html" data-bgscr="images/bg/long/4.jpg"
                      data-bgtex="clients"><span>CONTACT</span></a>
                  </li>
                </ul>
              </nav>
              <div class="arrowpagenav"></div>
            </div>
            <!--page-scroll-nav end-->
            <!--section -->
            <section id="sec2" class="hidden-section scroll-con-sec bot-element">
              <div class="col-wc_dec"></div>
              <div class="container">
                <div class="section-title fl-wrap">
                  <h3 id="color" class="title-change">About us</h3>

               
                  <p class="description-change">
                    John M Phillips is an independent energy services company, with an
                    international presence, providing a broad range of specialized
                    equipment and services to the oil, gas, geothermal and mining
                    industries.
                  </p>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                    <div class="dec-img fl-wrap">
                      <img
                        src="https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="
                        class="respimg image-change" alt="" />
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="main-about fl-wrap">
                      <h5>COMPANY
                        OVERVIEW</h5>
                      <h2>
                        Through business innovation, new innovative
                        products, and service delivery
                        <span style="color:#a90414;"> Innovative solutions</span> to boost

                      </h2>

                      <p>we are driven to power the industry
                        that powers the world better. </p> <br>
                      <p>
                        Our company has provided the
                        technical expertise, advanced
                        equipment, and operational
                        support necessary for success.
                        W e h a v e t h e p e o p l e ,
                        capabilities, and vision to
                        serve the needs of a challenging
                        and evolving industry
                      </p>
                      <!--    <div class="dec-list fl-wrap">
                        <ul>
                          <li>
                            Leverage agile frameworks to provide a robust
                            synopsis.
                          </li>
                          <li>
                            Iterative approaches to corporate strategy foster.
                          </li>
                          <li>
                            Bring to the table win-win survival strategies.
                          </li>
                          <li>
                            Scalable gun control breakthroughs social
                            movement.
                          </li>
                        </ul>
                      </div>--->
                      <a href="services.html" class="btn  fl-btn color-bg">Services</a>
                    
                    </div>
                  </div>
                </div>
                <div class="sec-number">01.</div>
              </div>
            </section>
            <!--section end -->
            <!--section -->
       
            <div class="section-separator bot-element">
              <span class="fl-wrap"></span>
            </div>
            <!--section  -->
            <section class="hidden-section scroll-con-sec bot-element" id="sec3">
              <div class="container">
                <div class="section-title fl-wrap">
                  <h3>Services</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas in pulvinar neque. Nulla finibus lobortis
                    pulvinar.
                  </p>
                </div>

                <div class="container bg-color my-5 px-5 py-3 services-slider">
                  <div class="swiper-5 swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="content-inner fl-wrap">
                          <div class="content-front">
                            <div class="cf-inner">
                              <div class="bg" data-bg="http://imgfz.com/i/yHBYout.png"></div>
                              <div class="overlay overlay-service"></div>
                              <div class="inner">
                                <h2> DIRECTIONAL DRILLING
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
                      </div>
                      <div class="swiper-slide">
                        <div class="content-inner fl-wrap">
                          <div class="content-front">
                            <div class="cf-inner">
                              <div class="bg" data-bg="http://imgfz.com/i/P9vLMqf.png"></div>
                              <div class="overlay overlay-service"></div>
                              <div class="inner">
                                <h2> FISHING
  
                                </h2>
                                <ul>
                                  <li>cased-hole</li>
                                  <li>open-hole</li>
                                  <li>thru-tubing downhole fishing tools</li>
                                </ul>
                              </div>
                            </div>
                          </div>
  
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="content-inner fl-wrap">
                          <div class="content-front">
                            <div class="cf-inner">
                              <div class="bg" data-bg="http://imgfz.com/i/MYEoda7.png"></div>
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

            <section class="dark-bg bot-element img-certificacion"
              style="background-image: url(https://c8.alamy.com/compes/2a00dx5/reacondicionamiento-trabajando-en-una-plataforma-previamente-perforados-y-tratando-de-restablecer-la-produccion-a-traves-de-la-reparacion-tonificado-2a00dx5.jpg);">
              <div class="container">
                <div class="container">
                  <div class="row">
                    <!---<div class="col-md-6">
                      <div class="video-box dec-img fl-wrap">
                        <img src="images/all/1.jpg" alt="" class="respimg" />
                        <a class="video-box-btn image-popup" href="https://vimeo.com/34741214"><i
                            class="fas fa-play"></i></a>
                      </div>
                    </div>---->
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
                        <!---<a href="#" class="btn fl-btn color-bg"></a>---->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hero-corner"></div>
            </section>
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
    var aboutDescription = "John M Phillips is an independent energy services company, with an international presence, providing a broad range of specialized equipment and services to the oil, gas, geothermal and mining industries."
    var aboutImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="

    var missionTitle = "Mission"
    var missionDescription = "Lorem lorem lorem lorem lorem lorem lorem lorem lorem"
    var missionImage = "https://media.istockphoto.com/photos/fracking-drilling-rig-at-the-golden-hour-picture-id1197081783?b=1&k=6&m=1197081783&s=170667a&w=0&h=IECOK0tBeqlEZndCWpaR3xMqlPteM468ICPv4C576qs="

    function cambiarColor() {
      color.innerHTML=color.innerHTML=="ABOUT US"?"amarillo":"ABOUT US";
      showAbout()
    }

    function showAbout(){

      $(".title-change").html(aboutTitle)
      $(".description-change").html(aboutDescription)
      $(".image-change").attr("src", aboutImage)

    }

    function showMission(){
     
      $(".title-change").html(missionTitle)
      $(".description-change").html(missionDescription)
      $(".image-change").attr("src", missionImage)

    }

  </script>

@endpush