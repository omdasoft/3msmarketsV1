<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo asset('cpanel/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo asset('cpanel/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo asset('cpanel/Ionicons/css/ionicons.min.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo asset('cpanel/css/jquery-jvectormap.css');?>">

  <link rel="stylesheet" href="<?php echo asset('cpanel/summernote-master/dist/summernote.css');?>">
  <!--datatable css-->
  <link rel="stylesheet" href="<?php echo asset('cpanel/css/dataTables.bootstrap.min.css') ?>" />

    <link rel="stylesheet" href="<?php echo asset('cpanel/iCheck/square/blue.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo asset('cpanel/css/AdminLTE-RTL.min.css')?>">
    <!--style file-->
    <link rel="stylesheet" href="<?php echo asset('cpanel/css/style.css')?>">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="<?php echo asset('cpanel/css/_all-skins.min.css');?>">
    @yield('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    
    <div class="wrapper">

        @include('cpanel.inc.header')
        @include('cpanel.inc.sidebar')
        

        @yield('content')

        @include('cpanel.inc.footer')
    </div>
   
    <!-- jQuery 3 -->
    <script src="<?php echo asset('cpanel/js/jquery.min.js');?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo asset('cpanel/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo asset('cpanel/js/fastclick.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo asset('cpanel/js/adminlte.min.js');?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo asset('cpanel/js/jquery.sparkline.min.js');?>"></script>
    <!-- jvectormap  -->
    <script src="<?php echo asset('cpanel/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
    <script src="<?php echo asset('cpanel/js/jquery-jvectormap-world-mill-en.js');?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo asset('cpanel/js/jquery.slimscroll.min.js');?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo asset('cpanel/js/Chart.js');?>"></script>
    <!--summer note-->
    <script src="<?php echo asset('cpanel/summernote-master/dist/summernote.min.js');?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo asset('cpanel/js/dashboard2.js');?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo asset('cpanel/js/demo.js');?>"></script>
     <!--datatable js file-->
	<script src="<?php echo asset('cpanel/js/jquery.dataTables.min.js') ?>"></script>
    <!--datatable bootstrap js file-->
	<script src="<?php echo asset('cpanel/js/dataTables.bootstrap.min.js') ?>"></script>
    
    <!-- iCheck -->
    <script src="<?php echo asset('cpanel/iCheck/icheck.min.js');?>"></script>
    <!--custome js-->
    <script src="<?php echo asset('cpanel/js/custome.js');?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
    @yield('scripts')
   </body>
   </html>