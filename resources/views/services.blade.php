@extends("layouts.main")

@section("content")

<!-- content-holder  -->
<div class="content-holder scroll-content" data-pagetitle="home slider">


    <!-- MEGA MENU JMP-->
    @include("partials.megamenu")
    <!-- MEGA MENU JMP end -->
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
              <a class=" " href="{{ url('/#about') }}" data-bgscr="images/bg/long/1.jpg" data-bgtex="about"><span>About</span></a>
            </li>
            <li>
              <a class="" href="{{ url('/services') }}" data-bgscr="images/bg/long/5.jpg" data-bgtex="services"><span>Services</span></a>
            </li>
            <!---<li>
                    <a class="" href="resource.html" data-bgscr="images/bg/long/3.jpg"><span></span></a>
                  </li>--->
            <li>
              <a class="" href="{{ url('/rentals') }}" data-bgscr="images/bg/long/13.jpg" data-bgtex="resume"><span>RENTALS</span></a>
            </li>
            <li>
              <a class="scroll-link fbgs" href="{{ url('/markets') }}" data-bgscr="images/bg/long/13.jpg" data-bgtex="resume"><span>MARKETS</span></a>
            </li>
            <li>
              <a class="" href="{{ url('/contact') }}" data-bgscr="images/bg/long/4.jpg" data-bgtex="clients"><span>CONTACT</span></a>
            </li>
          </ul>
        </nav>
        <!--<div class="arrowpagenav"></div>--->
      </div>
      <!--page-scroll-nav end-->

        <div class="section-separator"><span class="fl-wrap"></span></div>
        <!--section  -->
        <section class="hidden-section bot-element">
            <div class="">
                <div class="section-title fl-wrap container ml-5">
                    <h3>SERVICES</h3>
                </div>
                <!--process-wrap  -->
                <div class="process-wrap fl-wrap services-content">
                    <!--section end -->
                    <section class="bot-element bg--ligth" id="service1">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/DirectionalDrilling.jpeg') }}" alt="" class="respimg">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>Directional Drilling Services </h3>
                                            <p>John M. Phillips Directional Drilling Services combine <strong>quality drilling equipment, premium software, and experienced
                                                drillers</strong> to provide a full range of drilling solutions that are safe, reliable, and cost effective. <br><br> Our team has
                                                successfully drilled in a wide variety of environments including oil, gas, mining and geothermal.
                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="dark-bg bot-element" id="service2">
                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">FISHING
                                                SERVICES</h3>
                                            <p>John M. Phillips Fishing Services provides a full line of cased-hole, open-hole and thru-tubing downhole fishing tools that are expertly applied at the well site by knowledgeable fishing tool supervisors that are among the best in the business. Fishing Services’ personnel have more than 20 years of advanced fishing experience, ensuring customers will receive the best tools, equipment, and service in the industry. 

                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/FishingServices.jpg') }}" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->

                    <!--section end -->
                    <section class="bot-element bg--ligth" id="service3">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/DirectionalDrilling.jpeg') }}" alt="" class="respimg">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>WhipStock Services
                                            </h3>
                                            <p>John M. Phillips <strong> Single Trip WhipStock</strong> Service is available for casing exits up to 16-inch OD casing and may be
                                                ordered with mechanical or hydraulic set option. This WhipStock service features  <strong>integral blade mills with advanced
                                                carbide</strong> inserts designed to exit single or dual string programs in one trip and may be retrieved if necessary
                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->



                    <!--section end -->
                    <section class="dark-bg bot-element" id="service4">
                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">Survey Services
                                            </h3>
                                            <p>John M. Phillips Directional Survey Services provides the latest innovations in <strong>gyro surveying </strong> technology. We provide
                                                services for Oil and Gas, Mining, Geotechnical, Geothermal and Civil Engineering. Success in these highly competitive
                                                drilling markets depends on always moving in the <strong>right direction</strong>. Drilling operations have countless constantly
                                                moving parts, making unbroken efficiency a priority for every team. Incorporating <strong>new technology </strong>is not just a
                                                benefit – it is a necessity
                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/SurveyServices.jpeg') }}" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="bot-element bg--ligth" id="service5">
                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/WorkoverServices.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>Workover and ThruTubing Services 
                                            </h3>
                                            <p>John M. Phillips Workover Services team solves customer challenges ranging from routine to highly complex. Our
                                                Workover service package includes a full line <strong>of thru-tubing tools, fishing tool, milling tools, pumps, mud tanks,
                                                power swivels, casing, and tubing handling</strong> accessories and more.
                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="dark-bg bot-element" id="service6">
                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">Underreaming Services

                                            </h3>
                                            <p>John M. Phillips Underreaming Services provides a full line of <strong> Underreaming tools for borehole enlargement.</strong> JMP
                                                uses <strong>field tested and proven</strong> fixed cutter and retractable arm tools that are fitted with TCI or milled tooth cutters
                                                depending on formation composition. JMP provides Tool body sizes ranging from 4-3/4 OD capable of enlargement
                                                to 9-1/2 inches and a 22” OD body to <strong> enlarge wellbore</strong> to 40”
                                            </p>
                                          <!-----  <div class="d-flex_info">
                                                <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                    Resources <i class="fas fa-box-open"></i></a>
                                                <a href="#" class="btn fl-btn    btn-white">Download
                                                    Brochure<i class="fal fa-download"></i> </a>
                                            </div>---->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/Underreaming.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                </div>
                <!--process-wrap   end-->
            </div>
        </section>
        <!--section end -->
        <div class="section-separator bot-element">
            <span class="fl-wrap"></span>
        </div>


        <div class="section-separator bot-element">
            <span class="fl-wrap"></span>
        </div>

        <div class="limit-box fl-wrap"></div>
    </div>
</div>
<!--content  end -->
<!--footer-->
@include("partials.footer")
<!--footer  end -->

@endsection