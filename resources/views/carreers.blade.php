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
  <section class="hidden-section bot-element" id="carreers">

    <div class="container">
      <div class="section-title fl-wrap">
        <h3>CAREERS</h3>
        <div class="category-filter blog-btn-filter">
          <div class="blog-btn"><i class="fa fa-globe" aria-hidden="true"></i>  <span id="countryName">USA</span>  <i class="fa fa-angle-down" aria-hidden="true"></i>
          </div>
          <ul>
              <li><a class="text-white" style="cursor:pointer;" onclick="selectCountry(2)">USA</a></li>
              <li><a class="text-white" style="cursor:pointer;" onclick="selectCountry(1)">Colombia</a></li>
              <li><a class="text-white" style="cursor:pointer;" onclick="selectCountry(3)">España</a></li>
              <li><a class="text-white" style="cursor:pointer;" onclick="selectCountry(4)">México</a></li>
          </ul>
      </div>
      </div>
      <!--process-wrap  -->
      <div class="process-wrap fl-wrap">
     
        <ul>
          
            <!----  <span class="process-numder">01.</span>----->
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

@push('scripts')
  
  <!-- Modal -->
<div class="modal fade modal-careers" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Position Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
        

          <form class=" custom-form" method="post" action="" enctype="multipart/form-data" id="myform">
            <div class="form-group">
              <i class="fal fa-user"></i>
              <input type="text" class="form-control" placeholder="Name & Last Name" id="formName">
            </div>
            <div class="form-group">
              <i class="fal fa-envelope"></i>
              <input type="text" class="form-control" placeholder="Email " id="formEmail">
            </div>

            <div class="form-group">
              <i class="fa fa-phone" aria-hidden="true"></i>

              <input type="text" class="form-control" placeholder="Phone number" id="formPhone">
            </div>

            <div>

               
                <div class="form-group">
               
                  <label for="inputGroupFile01">Upload CV
                  </label>
                  <input type="file" class="form-control" id="inputGroupFile01">
                </div>
         
            </div>

            <div class="alert alert-success" role="alert" id="spinner" style="display: none">
              <p class="text-center">
              Uploading Info
              </p>
            </div>

            <div class="alert-area">


            </div>
            


          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="storeAppliance()">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <script>
    
    var vacancies = []
    var countryId = 2
    var countryName = "USA"
    var vacancyId = 0

    $(document).ready(function(){
      alertify.set('notifier','position', 'bottom-top');
      getVacancies()
    })
           

    function selectCountry(id){

        countryId = id

        if(countryId == 1){
          $("#countryName").html("Colombia")
        }
        else if(countryId == 2){
          $("#countryName").html("USA")
        }
        else if(countryId == 3){
          $("#countryName").html("España")
        }
        else if(countryId == 4){
          $("#countryName").html("México")
        }

        $(".blog-btn").click()
        getVacancies()
    }

    function getVacancies(){

      $.get("{{ url('/vacancies/') }}"+"/"+countryId, (data) => {

        vacancies = data.vacancies
        showVacancies()
      })

    }

    function showVacancies(){
      $(".process-wrap > ul").empty()

      vacancies.forEach((data) => {
        
        $(".process-wrap > ul").append(
          "<li>"+                           
            "<div class='process-details carreres'>"+
              "<h6>Position XYZ</h6>"+
              "<p>"+
                data.title+ 
              "</p>"+
              data.description+
             "<div class='mt-30'>"+                 
              "<btn href='#' data-toggle='modal' data-target='.modal-careers' class='btn-apply' onclick='setVacancyId("+data.id+")'>Apply</btn>"+
             "</div>"+
            "</div>"+
          "</li>"
        )

      })

    }

    function setVacancyId(id){
      vacancyId = id
    }

    function clear(){

      $("#form-name").val("")
      $("#form-email").val("")
      $("#form-phone").val("")
      $("#inputGroupFile01").val(null)

      $(".modal-careers").modal('hide')
      $('.modal-backdrop').remove();

    }

    function storeAppliance(){

      $(".alert-area").empty()

        var fd = new FormData();
        var files = $('#inputGroupFile01')[0].files;
        $("#spinner").css("display", "block")

        let name = $("#formName").val()
        console.log(name)
        
           fd.append('file',files[0]);
           fd.append("name", name)
           fd.append("email", $("#formEmail").val())
           fd.append("phone", $("#formPhone").val())
           fd.append("vacancyId", vacancyId)
           fd.append("_token", "{{ csrf_token() }}")

           $.ajax({
              url: 'appliance/store',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                $("#spinner").css("display", "none")
                 if(response.success == true){

                  swal({
                    "text": response.msg,
                    "icon": "success"
                  }).then(res => {

                    clear()

                  })
                 
                 }else{
                    swal({
                    "text": response.msg,
                    "icon": "error"
                  })
                 }
              },
              error: function (data) {
                $("#spinner").css("display", "none")
                if( data.status === 422 ) {
                  var errors = data.responseJSON;
                  $.each(errors['errors'], function (index, value) {
                    
                    
                    $(".alert-area").append(
                      "<div class='alert alert-danger' role='alert'>"+
                      value+
                      "</div>"
                    )
                    
                  });
                }
              }
           });
           

    }
  
  </script>


@endpush