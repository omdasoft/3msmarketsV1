<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.min.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('fonts/line-icons.css'); ?>">
	<link href="<?php echo asset('fonts/font-awesome/css/font-awesome.css');?>"
	 rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/slicknav.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/animate.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/owl.carousel.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/main.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css');?>">

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/responsive.css');?>"> @yield('styles')
</head>

<body>


	@include('inc.header') @yield('content') @include('inc.footer')

	<a href="#" class="back-to-top">
		<i class="lni-chevron-up"></i>
	</a>

	<div id="preloader">
		<div class="loader" id="loader-1"></div>
	</div>
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="<?php echo asset('js/jquery-min.js');?>"></script>
	
	<script src="<?php echo asset('js/popper.min.js');?>"></script>
	<script src="<?php echo asset('js/bootstrap.min.js');?>"></script>
	<script src="<?php echo asset('js/jquery.counterup.min.js');?>"></script>
	<script src="<?php echo asset('js/waypoints.min.js');?>"></script>
	<script src="<?php echo asset('js/wow.js');?>"></script>
	<script src="<?php echo asset('js/owl.carousel.min.js');?>"></script>
	<script src="<?php echo asset('js/jquery.slicknav.js');?>"></script>
	<script src="<?php echo asset('js/main.js');?>"></script>
	<script src="<?php echo asset('js/form-validator.min.js');?>"></script>
	<script src="<?php echo asset('js/contact-form-script.min.js');?>"></script>
	
	<script src="<?php echo asset('js/summernote.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset('js/custome.js'); ?>"></script>
	@yield('scripts')
</body>

</html>