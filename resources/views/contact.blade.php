@extends("layouts.main")

@section("content")

<!-- header-->
<header class="main-header">
    <a href="{{ url('/') }}" class="logo-holder ajax"><img src="images/iso.png" alt="" /></a>
    <!-- nav-button-wrap-->
    <div class="nav-button but-hol">
        <span class="nos"></span>
        <span class="ncs"></span>
        <span class="nbs"></span>
        <div class="menu-button-text">Menu</div>
    </div>
    <!-- nav-button-wrap end-->
    <div class="header-social">
        <ul>
            <li>
                <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li class="linea"></li>
            <li>
                <a href="#" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="folio-btn">
        <a class="folio-btn-item aja" href=""><i class="fa fa-industry" aria-hidden="true"></i>
        </a>
        <span class="folio-btn-tooltip">Contact</span>
    </div>
</header>
<!-- header end -->
<!-- wrapper -->
<div id="wrappe">
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


            <!-- fixed-column-wrap -->
            <div class="fixed-column-wrap">
                <div class="progress-bar-wrap">
                    <div class="progress-bar color-bg"></div>
                </div>
                <div class="column-image fl-wrap full-height">
                    <div class="bg" data-bg="images/bg/long/5.jpg"></div>
                    <div class="overlay"></div>
                    <div class="column-image-anim"></div>
                </div>
                <div class="fcw-dec"></div>
                <div class="fixed-column-tilte fcw-title"><span>Contacts</span></div>
            </div>
            <!-- fixed-column-wrap end -->
            <!-- column-wrap -->
            <div class="column-wrap  ">
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
                    <!--section -->
                    <section class="hidden-section bot-element">
                        <div class="col-wc_dec"></div>
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h3>Contact details</h3>
                                <div class="category-filter blog-btn-filter">
                                    <div class="blog-btn">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                        <div class="names-filt"> USA </div> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <ul class="blog-ul">
                                        <li><a class="blog-li" onclick="col()" href="#">Colombia</a></li>
                                        <li class="blog-li"><a onclick="ar()" href="#">Argentina </a></li>
                                        <li class="blog-li"><a onclick="cl()" href="#">Chile</a></li>
                                        <li class="blog-li"><a onclick="us()" href="#">USA</a></li>
                                    </ul>
                                </div>

                            </div>

                            <!--process-wrap  -->
                            <div class="contacts-wrap fl-wrap">
                                <ul>
                                    <li>
                                        <i class="fal fa-mobile-android"></i>
                                        <h4>Phone Number</h4>
                                        <div class="clearfix"></div>
                                        <a class="contact-link phone">+1 (562) 595-7363</a>
                                    </li>
                                    <li>
                                        <i class="fal fa-compass"></i>
                                        <h4>Address</h4>
                                        <div class="clearfix"></div>
                                        <a class="contact-link ubicacion url" href="https://www.google.com/maps/place/2755+Dawson+Ave,+Signal+Hill,+CA+90755,+EE.+UU./@33.8065069,-118.1679177,17z/data=!3m1!4b1!4m5!3m4!1s0x80dd33d1686d82bf:0x6b95e1e061f6cd3a!8m2!3d33.8065025!4d-118.165729"> JMP Corporate Headquarters Signal Hill, CA, USA 90755</a>
                                    </li>
                                    <li>
                                        <i class="fal fa-envelope-open"></i>
                                        <h4>E-mail</h4>
                                        <div class="clearfix"></div>
                                        <a class="contact-link emails">info@johnmphillips.com</a>
                                    </li>
                                </ul>
                            </div>
                            <!--process-wrap   end-->

                            <div class="sec-number">01.</div>
                        </div>
                    </section>
                    <!--section end -->
                    <div class="section-separator"><span class="fl-wrap bot-element"></span></div>
                    <!--section-->
                    <section class="hidden-section bot-element">
                        <div class="container">
                            <div class="section-title fl-wrap">
                                <h3>Get in Touch</h3>
                                <p>We are looking forward to hear from you. One of our
                                    representatives will get in touch with you right away.
                                </p>
                            </div>
                            <div id="contact-form" class="cf-wrap">
                                <div id="message"></div>
                                <form class="custom-form" id="formSubmit">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><i class="fal fa-user"></i></label>
                                                <input type="text" name="name" id="form-name" placeholder="Your Name *" value="" required />
                                            </div>
                                            <div class="col-md-6">
                                                <label><i class="fal fa-envelope"></i> </label>
                                                <input type="text" name="email" id="form-email" placeholder="Email Address *" value="" required />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><i class="fas fa-map-marker-alt"></i></label>
                                                <input type="text" name="name" id="form-address" placeholder="Address *" value="" required />
                                            </div>
                                            <div class="col-md-6">
                                                <label><i class="fas fa-building"></i> </label>
                                                <input type="text" name="email" id="form-company" placeholder="Company *" value="" required />
                                            </div>
                                        </div>
                                        <textarea name="comments" id="form-message" cols="40" rows="3" placeholder="Your Message:" required></textarea>
                                        <div class="clearfix"></div>
                                        <button class="btn btn-dark color-bg">Send Message</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="sec-number">02.</div>
                        </div>
                        <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                    </section>
                    <!--section end -->
                    <div class="limit-box fl-wrap"></div>
                </div>
            </div>
            <!--content  end -->

            <div class="section-separator bot-element">
                <span class="fl-wrap"></span>
            </div>

            <div class="limit-box fl-wrap"></div>
        </div>
    </div>
    <!--content  end -->
    <!--footer-->

    <!--footer  end -->
</div>
<!-- content-holder end -->

<script>
    //***********************************informacion*********************************************** */
    var PhoneNumberCol = "+57 (1) 622 3545"
    var NameCol = "Colombia"
    var ubicCol = "JMP Colombia - Bogotá, D.C."
    var EmailCol = "infocol@johnmphillips.com"

    function col() {
        $(".phone").html(PhoneNumberCol);
        $(".names-filt").html(NameCol)
        $(".ubicacion").html(ubicCol)
        $(".emails").html(EmailCol)
        $(".url").attr("href", "https://www.google.com/maps/place/John+M.+Phillips+Colombia/@4.7646207,-74.1681166,17z/data=!4m9!1m2!2m1!1sParque+Industrial+Siberia+Real+Bodega+2+Autopista+Medell%C3%ADn+Km+6.24,+Tenjo,+Cundinamarca!3m5!1s0x8e3f834d9681ae23:0xc33b70e8bc098216!8m2!3d4.7649073!4d-74.1654392!15sClhQYXJxdWUgSW5kdXN0cmlhbCBTaWJlcmlhIFJlYWwgQm9kZWdhIDIgQXV0b3Bpc3RhIE1lZGVsbMOtbiBLbSA2LjI0LCBUZW5qbywgQ3VuZGluYW1hcmNhkgEQY29ycG9yYXRlX29mZmljZQ");

    }

    var PhoneNumberAr = "+ 54 (9) 2974 17-0746"
    var NameAr = "Argentina"
    var ubicAr = "JMP Argentina - Buenos Aires"
    var EmailAr = "info@johnmphillips.com"

    function ar() {
        $(".phone").html(PhoneNumberAr);
        $(".names-filt").html(NameAr)
        $(".ubicacion").html(ubicAr)
        $(".emails").html(EmailAr)
        //   $(".url").attr("href", "test2");
    }

    var PhoneNumberCl = "+ 56 (61) 230-320"
    var NameCl = "Chile"
    var ubicCl = "JMP Chile - Punta Arenas"
    var EmailCl = "info@johnmphillips.com"

    function cl() {
        $(".phone").html(PhoneNumberCl);
        $(".names-filt").html(NameCl)
        $(".ubicacion").html(ubicCl)
        $(".emails").html(EmailCl)

    }

    var PhoneNumberbl = "+57 (1) 622 3545"
    var Namebl = "Bolivia"
    var ubicbl = "JMP BolIvia – La Paz"
    var Emailbl = "info@johnmphillips.com"

    function bl() {
        $(".phone").html(PhoneNumberbl);
        $(".names-filt").html(Namebl)
        $(".ubicacion").html(ubicbl)
        $(".emails").html(Emailbl)
    }

    var PhoneNumberus = "+1 (562) 595-7363 "
    var Nameus = "USA"
    var ubicus = "JMP Corporate Headquarters Signal Hill, CA, USA 90755"
    var Emailus = "info@johnmphillips.com"

    function us() {
        $(".phone").html(PhoneNumberus);
        $(".names-filt").html(Nameus)
        $(".ubicacion").html(ubicus)
        $(".emails").html(Emailus)
        $(".url").attr("href", "https://www.google.com/maps/place/2755+Dawson+Ave,+Signal+Hill,+CA+90755,+EE.+UU./@33.8065069,-118.1679177,17z/data=!3m1!4b1!4m5!3m4!1s0x80dd33d1686d82bf:0x6b95e1e061f6cd3a!8m2!3d33.8065025!4d-118.165729");

    }
</script>
@endsection