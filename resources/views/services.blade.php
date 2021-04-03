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
       <!-- fixed-top-panel -->
       <div class="fixed-top-panel fl-wrap">
        <div class="sp-fix-header fl-wrap">
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll down to discover</span>
            </div>
            <a href="{{ url('/') }}" class=" back-to-home-btn"><span>Back to home</span></a>
        </div>
    </div>
    <!-- fixed-top-panel end -->

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
                                        <img src="http://imgfz.com/i/yHBYout.png" alt=""
                                            class="respimg">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top p-0">
                                        <h3>DIRECTIONAL DRILLING
                                            SERVICES </h3>
                                        <p>John M. Phillips Directional Drilling Services combine
                                            quality drilling equipment, premium software, and
                                            experienced drillers to provide a full range of drilling
                                            solutions that are safe, reliable, and cost effective.
                                            Our team has successfully drilled in a wide variety of
                                            environments including oil, gas, mining and
                                            geothermal.
                                        </p>
                                        <div class="d-flex_info">
                                            <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                Resources <i class="fas fa-box-open"></i></a>
                                            <a href="#" class="btn fl-btn    btn-white">Download
                                                Brochure<i class="fal fa-download"></i> </a>
                                        </div>
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
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top p-0">
                                        <h3 style="color:#fff">FISHING
                                            SERVICES</h3>
                                        <p>John M. Phillips Fishing Services provides
                                            a full line of cased-hole, open-hole and
                                            thru-tubing downhole fishing tools that
                                            are expertly applied at the well site by
                                            knowledgeable fishing tool supervisors
                                            that are among the best in the business.
                                            ‘Fishing Services’ personnel have more
                                            than 20 years of advanced fishing
                                            experience, ensuring customers will
                                            receive the best tools, equipment, and
                                            service in the industry.
                                        </p>
                                        <div class="d-flex_info">
                                            <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                Resources <i class="fas fa-box-open"></i></a>
                                            <a href="#" class="btn fl-btn    btn-white">Download
                                                Brochure<i class="fal fa-download"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-box dec-img fl-wrap">
                                        <img src="http://imgfz.com/i/yHBYout.png" alt=""
                                            class="respimg">

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
                                        <img src="http://imgfz.com/i/yHBYout.png" alt=""
                                            class="respimg">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top p-0">
                                        <h3>FISHING
                                            SERVICES </h3>
                                        <p>John M. Phillips Underreaming Services
                                            provides a full line of Underreaming tools
                                            for borehole enlargement. JMP uses field
                                            tested and proven fixed cutter and retractable
                                            arm tools that are fitted with TCI or milled
                                            tooth cutters depending on formation
                                            composition. JMP provides Tool body sizes
                                            ranging from 4-3/4 OD capable of
                                            enlargement to 9-1/2 inches and a 22” OD
                                            body to enlarge wellbore to 40”.
                                        </p>
                                        <div class="d-flex_info">
                                            <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                Resources <i class="fas fa-box-open"></i></a>
                                            <a href="#" class="btn fl-btn    btn-white">Download
                                                Brochure<i class="fal fa-download"></i> </a>
                                        </div>
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
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="video-promo-text fl-wrap mar-top p-0">
                                        <h3 style="color:#fff">WHIPSTOCK
                                            SERVICES</h3>
                                        <p>John M. Phillips Single Trip Whipstock
                                            Service is available for casing exits up to
                                            16-inch OD casing and may be ordered
                                            with mechanical or hydraulic set option.
                                            JMP Whipstock service features
                                            integral blade mills with advanced
                                            carbide inserts designed to exit single
                                            or dual string programs in one trip and
                                            may be retrieved if necessary
                                        </p>
                                        <div class="d-flex_info">
                                            <a href="#" class="btn fl-btn    color-bg"> Take me to
                                                Resources <i class="fas fa-box-open"></i></a>
                                            <a href="#" class="btn fl-btn    btn-white">Download
                                                Brochure<i class="fal fa-download"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="video-box dec-img fl-wrap">
                                        <img src="http://imgfz.com/i/yHBYout.png" alt=""
                                            class="respimg">

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