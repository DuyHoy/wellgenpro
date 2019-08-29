<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{asset('distribution/vendor/bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href={{asset('distribution/vendor/font-awesome/css/font-awesome.min.css')}}>
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href={{asset('distribution/css/fontastic.css')}}>
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href={{asset('distribution/css/grasp_mobile_progress_circle-1.0.0.min.css')}}>
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href={{asset('distribution/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{asset('distribution/css/style.default.css')}} id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{asset('distribution/css/custom.css')}}>
    <!-- Favicon-->
    <link rel="shortcut icon" href={{asset('distribution/img/favicon.ico')}}>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    @include('admin.side_navbar')
    <div class="page">
      <!-- navbar-->
      @include('admin.navbar')
      {{-- breadcrumb --}}
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms       </li>
          </ul>
        </div>
      </div>
      @yield('content')
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src={{asset('distribution/vendor/jquery/jquery.min.js')}}></script>
    <script src={{asset('distribution/vendor/popper.js/umd/popper.min.js')}}> </script>
    <script src={{asset('distribution/vendor/bootstrap/js/bootstrap.min.js')}}></script>
    <script src={{asset('distribution/js/grasp_mobile_progress_circle-1.0.0.min.js')}}></script>
    <script src={{asset('distribution/vendor/jquery.cookie/jquery.cookie.js')}}> </script>
    <script src={{asset('distribution/vendor/chart.js/Chart.min.js')}}></script>
    <script src={{asset('distribution/vendor/jquery-validation/jquery.validate.min.js')}}></script>
    <script src={{asset('distribution/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}></script>
    <script src={{asset('distribution/js/charts-home.js')}}></script>
    <!-- Main File-->
    <script src={{asset('distribution/js/front.js')}}></script>
  </body>
</html>