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

        <div class="section-separator"><span class="fl-wrap"></span></div>
        <!--section  -->
        <section class="hidden-section bot-element">
            <div class="">
                <div class="section-title fl-wrap container ml-5">
                    <h3>Rentals</h3>
                </div>
                <!--process-wrap  -->
                <div class="process-wrap fl-wrap rentalss-content rentals-seccion ">
                    <!--section end -->
                    <section class="dark-bg bot-element" id="rentals1">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">BOP & Pressure Control System Rentals </h3>
                                            <p>John M. Phillips inventory of pressure control equipment includes BOP’s, control systems, diverters, choke manifolds,
                                                and valves. Ram BOPs are available in sizes up to 26-3/4 3M and annular BOP’s are available in sizes up to 30-1M. All
                                                pressure control equipment is inspected and tested to meet current industry standards and to insure safe and
                                                reliable operations.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="http://imgfz.com/i/yHBYout.png" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="bot-element bg--ligth" id="rentals2">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/MUDPUMP.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>Mud Pump & System Rentals

                                            </h3>
                                            <p>John M. Phillips Mud Pump / System rentals. National JWS 340 and JWS 400 triplex pumps are available either skid
                                                mounted or unitized on a trailer complete with 100-barrel tank, shaker, and discharge manifold.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="dark-bg bot-element" id="rentals3">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">Power Swivel Rentals
                                            </h3>
                                            <p>John M. Phillips Power Swivel Rentals are available in 85 or 120 ton capacity and can be ordered skid mounted or on
                                                a trailer. All power swivels are maintained and inspected by our experienced service technicians as well as qualified
                                                third-party inspections of all lifting equipment.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/POWERTONG.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->

                    <!--section end -->
                    <section class="bot-element bg--ligth" id="rentals4">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/handlingrentals.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>Handling Tool Rentals


                                            </h3>
                                            <p>John M. Phillips Handling Equipment Rental inventory is designed to handle tubing, drill pipe and casing of all sizes
                                                safely and efficiently and are available with or without an operator. Power casing tongs and hydraulic power units
                                                are available for up to 20-inch casing and all of our handling tools are inspected and tested to industry standards
                                                including independent load testing
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->

                    <!--section end -->
                    <section class="dark-bg bot-element" id="rentals5">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">Downhole Tool Rentals

                                            </h3>
                                            <p>John M. Phillips Downhole Tool Rentals offers high quality drilling motors, drilling jars, drilling jar intensifiers, friction
                                                reduction and shock tools, non mag drill collars, MWD/LWD, multi shot tools, gyro tools, drill pipe, drill collars
                                                suitable to provide outstanding performance in difficult conditions. Integral blade stabilizers are also available in
                                                sizes up to 36-inch diameter and feature carbide inserts to insure extended service time. Long term rental packages
                                                of drilling tools may also include service equipment and technicians available to maintain our drilling tool inventory
                                                at the project site
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/DownholeToolRentals.jpg') }}" alt="" class="respimg">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="bot-element bg--ligth" id="rentals6">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/WORKOVER.png') }}" alt="" class="respimg">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3>Workover Tool Rentals



                                            </h3>
                                            <p>John M. Phillips Downhole Tool Rentals offers high quality thru tubing motors, jars, jar intensifiers, friction reduction
                                                and shock tools, non mag drill collars, MWD/LWD, multi shot tools, gyro tools, fishing tools, drill pipe and collars
                                                suitable to provide outstanding performance in difficult conditions. Long term rental packages of drilling tools may
                                                also include service equipment and technicians available to maintain our drilling tool inventory at the project site.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-corner"></div>
                    </section>
                    <!--section end -->
                    <!--section end -->
                    <section class="dark-bg bot-element" id="rentals7">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="video-promo-text fl-wrap mar-top p-0">
                                            <h3 style="color:#fff">Fishing Tool Rentals
                                            </h3>
                                            <p>John M. Phillips Fishing Tool Rentals have all the equipment and technologies necessary to effectively conduct fishing
                                                operations. Our offerings include tubulars, downhole tools, fishing and milling equipment.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="video-box dec-img fl-wrap">
                                            <img src="{{asset('images/all/DownholeToolRentals.jpg') }}" alt="" class="respimg">

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