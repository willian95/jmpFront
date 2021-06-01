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
       <div class="container">
       <div class="section-title fl-wrap container ">
          <h3>Markets</h3>
        </div></div>
        <!--process-wrap  -->
        <div class="process-wrap fl-wrap services-content">
          <!--section end -->
          <section class="bot-element bg--ligth" id="markets1">
            <div class="container">
              <div class="containe">
                <div class="row xs-reverese">
                  <div class="col-md-6">
                    <div class="video-box dec-img fl-wrap">
                      <img src="{{asset('images/all/OilandGasMarket.jpeg') }}" alt="" class="respimg">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="video-promo-text fl-wrap mar-top p-0">
                      <h3>Oil & Gas </h3>
                      <p>Since the early days, O&G market has been a primary focus for our company. JMP
                        has provided services <strong>domestically and abroad</strong> in different challenging drilling and
                        workover projects, be it a shallow well, a deep HPHT remote location, or an
                        unconventional multi-well-pad. <br> <br>
                        We <strong>efficiently </strong> combine <strong>high quality </strong> drilling equipment with <strong>highly skilled</strong>
                        personnel, both at shop and field level, providing a full range of solutions for this
                        constantly evolving and competitive market.
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
          <section class="dark-bg bot-element" id="markets2">
            <div class="">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="video-promo-text fl-wrap mar-top p-0">
                      <h3 style="color:#fff">Geothermal </h3>
                      <p>Although most of our experience from O&G can be directly
                        applied to the Geothermal industry, we understand the <strong>extreme
                          challenges</strong> that these large bore wells represent, including high
                        temp, harsh drilling, corrosive environments, etc. <br><br>
                        We have successfully participated in several <strong>Geothermal
                          projects</strong>, both domestically (west coast USA) and internationally
                        including <strong>remote locations</strong> in Central America, and Chile. <br><br>
                        JMP has one of the most comprehensive inventories of <strong>large
                          bore BOP’s, large diameter tools</strong> including stabilizers, motors,
                        collars, stroking tools, among others, readily available to be
                        shipped anywhere in the globe.
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
                      <img src="{{asset('images/all/GeothermalMarket.jpg') }}" alt="" class="respimg">

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="hero-corner"></div>
          </section>
          <!--section end -->

          <!--section end -->
          <section class="bot-element bg--ligth" id="markets3">
            <div class="container">
              <div class="containr">
                <div class="row xs-reverese">
                  <div class="col-md-6">
                    <div class="video-box dec-img fl-wrap">
                      <img src="{{asset('images/all/minin.png') }}" alt="" class="respimg">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="video-promo-text fl-wrap mar-top p-0">
                      <h3>Mining
                      </h3>
                      <p>John M Phillips has provided surveying, drilling and tools rentals services for
                        the mining industry, at surface or hundreds of feet <strong>underground.</strong>
                        Our personnel has experience and training to work on the <strong>most challenging</strong>
                        and safety demanding environments including low oxygen high elevation
                        locations.
                        One of our specialty services for this market includes <strong>ultra-vertical control
                          drilling</strong>, for raise boring applications.
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
          <section class="dark-bg bot-element" id="markets4">
            <div class="">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="video-promo-text fl-wrap mar-top p-0">
                      <h3 style="color:#fff">Remote Projects

                      </h3>
                      <p>We have experience in planning, and execution of remote projects, for different markets and in <strong>anywhere in the world. </strong>

                        We understand the unique challenges of drilling in remote areas, thousands of miles away from any support center, and like no others we partner with our clients aiming for a <strong>flawless and smooth execution</strong>,<br> <br>

                        It’s not only crucial to have an outstanding service quality control for <strong>increased reliability</strong> of tools and equipment, but also is vital to have the <strong>right tool</strong>, available, on site, at the <strong>right time.</strong>

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
                      <img src="{{asset('images/all/RemoteProjects.jpg') }}" alt="" class="respimg">

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="hero-corner"></div>
          </section>
          <!--section end -->
          <!--section end -->
          <section class="bot-element bg--ligth" id="markets5">
            <div class="">
              <div class="container">
                <div class="row xs-reverese">
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