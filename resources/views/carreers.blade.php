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
    <div class="container">
      <div class="section-title fl-wrap">
        <h3>CAREERS</h3>
        <div class="category-filter blog-btn-filter">
          <div class="blog-btn"><i class="fa fa-globe" aria-hidden="true"></i>   EEUU              <i class="fa fa-angle-down" aria-hidden="true"></i>
          </div>
          <ul>
              <li><a href="#">lorem</a></li>
              <li><a href="#">lorem</a></li>
              <li><a href="#">lorem</a></li>
          </ul>
      </div>
      </div>
      <!--process-wrap  -->
      <div class="process-wrap fl-wrap">
     
        <ul>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
             <div class="mt-30">                 
              <a href="" data-toggle="modal" data-target=".modal-careers" class="btn-apply">Apply</a>
             </div>
            </div>
            <!----  <span class="process-numder">01.</span>----->
         
          </li>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>


             <div class="mt-30">
              <a href="" class="btn-apply">Apply</a>
             </div>
            </div>
            <!----  <span class="process-numder">01.</span>----->
         
          </li>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>


             <div class="mt-30">
              <a href="" class="btn-apply">Apply</a>
             </div>
            </div>
            <!----  <span class="process-numder">01.</span>----->
         
          </li>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>


             <div class="mt-30">
              <a href="" class="btn-apply">Apply</a>
             </div>
            </div>
            <!----  <span class="process-numder">01.</span>----->
         
          </li>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>


             <div class="mt-30">
              <a href="" class="btn-apply">Apply</a>
             </div>
            </div>
            <!----  <span class="process-numder">01.</span>----->
         
          </li>
          <li>                           
            <div class="process-details carreres">
              <h6>Position XYZ                      </h6>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>
              <p>
                Exerci tation ullamcorper 
              </p>


             <div class="mt-30">
              <a href="" class="btn-apply">Apply</a>
             </div>
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

@endsection