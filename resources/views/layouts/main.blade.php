<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>JMP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" />
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/solid.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}" />
</head>

<body>

  <!--loader-->
  <div class="loader-wrap color-bg">
    <div class="loader-bg"></div>
    <div class="loader-inner">
      <div class="loader"></div>
    </div>
  </div>
  <!--loader end-->
  <!-- Main  -->
  <div id="main">
    <!-- header-->
    @include("partials.navbar")
    <!-- header end -->
    <!-- wrapper -->
    <div id="wrapper">
      @yield("content")
    </div>
    <!--wrapper end -->
    <!-- cursor-->
    <div class="element">
      <div class="element-item"></div>
    </div>
    <!-- cursor end-->

    <!--=============== scripts  ===============-->
  </div>
  <!-- Main end -->

  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/plugins.js') }}"></script>
  <script src="{{asset('js/scripts.js') }}"></script>

  @stack("scripts")

</body>

</html>