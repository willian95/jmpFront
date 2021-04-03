@extends("layouts.main")

@section("content")

    <!-- header-->
    <header class="main-header">
            <a href="index.html" class="logo-holder ajax"><img src="images/iso.png" alt="" /></a>
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
        <div id="wrapper">
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
                            <!-- fixed-top-panel -->
                            <div class="fixed-top-panel fl-wrap">
                                <div class="sp-fix-header fl-wrap">
                                    <div class="scroll-down-wrap">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                        <span>Scroll down to discover</span>
                                    </div>
                                    <a href="index.html" class=" back-to-home-btn"><span>Back to home</span></a>
                                </div>
                            </div>
                            <!-- fixed-top-panel end -->
                            <!--section -->
                            <section class="hidden-section bot-element">
                                <div class="col-wc_dec"></div>
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>Contact details</h3>
                                        <div class="category-filter blog-btn-filter">
                                            <div class="blog-btn"><i class="fa fa-globe" aria-hidden="true"></i>
                                                EEUU               <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </div>
                                            <ul>
                                                <li><a href="#">lorem</a></li>
                                                <li><a href="#">lorem</a></li>
                                                <li><a href="#">lorem</a></li>
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
                                                <a href="#" class="contact-link">562.595.7363</a>
                                            </li>
                                            <li>
                                                <i class="fal fa-compass"></i>
                                                <h4>Address</h4>
                                                <div class="clearfix"></div>
                                                <a href="#" class="contact-link"> Dawson Ave
                                                    Signal Hill, CA
                                                    90755</a>
                                            </li>
                                            <li>
                                                <i class="fal fa-envelope-open"></i>
                                                <h4>E-mail</h4>
                                                <div class="clearfix"></div>
                                                <a href="#" class="contact-link">lorem@ipsum.com</a>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                                            neque. Nulla finibus lobortis pulvinar. </p>
                                    </div>
                                    <div id="contact-form" class="cf-wrap">
                                        <div id="message"></div>
                                        <form class="custom-form" action="php/contact.php" name="contactform"
                                            id="contactform">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-user"></i></label>
                                                        <input type="text" name="name" id="name"
                                                            placeholder="Your Name *" value="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-envelope"></i> </label>
                                                        <input type="text" name="email" id="email"
                                                            placeholder="Email Address *" value="" />
                                                    </div>
                                                </div>
                                                <textarea name="comments" id="comments" cols="40" rows="3"
                                                    placeholder="Your Message:"></textarea>
                                                <div class="clearfix"></div>
                                                <button class="btn   color-bg" id="submit">Send Message</button>
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


@endsection