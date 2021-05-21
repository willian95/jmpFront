@extends("layouts.main")

@section("content")

    <!-- content-holder  -->
    <div class="content-holder scroll-content" data-pagetitle="home slider">


<!-- MEGA MENU JMP-->
@include("partials.navbar")
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
              <a class="scroll-link fbgs" href="#sec2" data-bgscr="images/bg/long/1.jpg" data-bgtex="about"><span>About</span></a>
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
      <div class="container">
        <div class="section-title fl-wrap">
          <h3>Resources</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Maecenas in pulvinar neque. Nulla finibus lobortis
            pulvinar.
          </p>
        </div>
        <!--process-wrap  -->
        <div class="process-wrap fl-wrap">
          <ul>
            <li>
              <div class="time-line-icon">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
              </div>
              <h4>NEWS</h4>
              <div class="process-details">
                <h6>Duis autem vel eum iriure dolor</h6>
                <p>
                  Exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum
                  iriure dolor.
                </p>
              </div>
            <!----  <span class="process-numder">01.</span>----->
            </li>
            <li>
              <div class="time-line-icon">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
              </div>
              <h4>MEDIA &
                PUBLICATIONS</h4>
              <div class="process-details">
                <h6>In ut odio libero, at vulputate urna.</h6>
                <p>
                  Exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum
                  iriure dolor.
                </p>
              </div>
               <!----  <span class="process-numder">01.</span>----->
            </li>
            <li>
              <div class="time-line-icon">
                <i class="fa fa-briefcase" aria-hidden="true"></i>

              </div>
              <h4>CASE HISTORIES</h4>
              <div class="process-details">
                <h6>Nulla posuere sapien vitae lectus suscipit</h6>
                <p>
                  Exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum
                  iriure dolor.
                </p>
              </div>
            <!----  <span class="process-numder">01.</span>----->
            </li>
          </ul>
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
</div>
<!-- content-holder end -->

@endsection