<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link href="{{asset('assets/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('assets/css/icheck-bootstrap.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('assets/css/jqvmap.min.css')}}" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{asset('assets/css/adminlte.min.css')}}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link href="{{asset('assets/css/OverlayScrollbars.min.css')}}" rel="stylesheet">
  <!-- Daterange picker -->
  <link href="{{asset('assets/css/daterangepicker.css')}}" rel="stylesheet">
  <!-- summernote -->
  <link href="{{asset('assets/css/summernote-bs4.min.css')}}" rel="stylesheet">



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>

  <!-- Navbar -->
  @include('layouts.inc.admin-navbar')
  <!-- /.navbar -->


   <!-- Main Sidebar Container -->
   @include('layouts.inc.admin-main-sidebar')


   <div class="content-wrapper">
   @yield('content')
    </div>


   @include('layouts.inc.admin-footer')





    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->





</div>











<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script> 
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script> 
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- Bootstrap 4 -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script> 
<!-- ChartJS -->
<script src="{{ asset('assets/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/js/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/js/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/js/dashboard.js')}}"></script>
</body>
</html>