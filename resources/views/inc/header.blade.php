<header id="header-wrap">

	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-5 col-xs-12">

					<div class="header-top-right float-right">
						<a href="{{url('/login')}}" class="header-top-button">تسجيل الدخول <i class="lni-lock"></i></a> |
						<a href="{{url('/register')}}" class="header-top-button"> التسجيل <i class="lni-pencil"></i></a>
					</div>

				</div>
				<div class="col-lg-5 col-md-7 col-xs-12">
					<div class="roof-social float-right">
						<a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
						<a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
						<a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
						<a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
						<a class="google" href="#"><i class="lni-google-plus"></i></a>
					</div>
				
				</div>
			</div>
		</div>
	</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

	<div class="navbar-header">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<span class="lni-menu"></span>
		<span class="lni-menu"></span>
		<span class="lni-menu"></span>
		</button>
		<a href="{{url('/')}}" class="navbar-brand">
			<img  src="<?php echo asset('img/logo.png');?>" alt="3ms logo">
		</a>
	</div>
	<div class="collapse navbar-collapse" id="main-navbar">
		<ul class="navbar-nav mr-auto w-100 justify-content-center">
			<li class="nav-item active">
				<a class="nav-link" href="{{url('/')}}">
				الرئيسية
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('/about')}}">
				من نحن
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('/category')}}">
				المتجر
				</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			موتورات
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">سيارات للبيع</a>
				<a class="dropdown-item" href="#">سيارات للايجار</a>
				<a class="dropdown-item" href="#">قطع غيار واكسسوارات</a>
				<a class="dropdown-item" href="#">مواتر وركشات للبيع</a>
				<a class="dropdown-item" href="#">مواتر وركشات للايجار</a>
				<a class="dropdown-item" href="#">شاحنات وبصات </a>
				<a class="dropdown-item" href="#">امجادات وكريزات</a>
				<a class="dropdown-item" href="#">ترحيل</a>
			</div>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				عقارات
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">اراضي للبيع</a>
				<a class="dropdown-item" href="#">اراضي للايجار</a>
				<a class="dropdown-item" href="#">فلل ومنازل للبيع</a>
				<a class="dropdown-item" href="#">فلل ومنازل للايجار</a>
				<a class="dropdown-item" href="#">شقق للبيع</a>
				<a class="dropdown-item" href="#">شقق للايجار</a>
				<a class="dropdown-item" href="#">بيوت شعبية</a>
				<a class="dropdown-item" href="#">مخازن ومصانع</a>
				<a class="dropdown-item" href="#">مشاريع</a>
				<a class="dropdown-item" href="#">محلات ايجار</a>
			</div>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				الكترونيات
			</a>
			<div class="dropdown-menu">
			<a class="dropdown-item" href="#">موبايلات </a>
				<a class="dropdown-item" href="#">لابتوبات </a>
				<a class="dropdown-item" href="#">كمبيوترات </a>
				<a class="dropdown-item" href="#">كاميرات</a>
				<a class="dropdown-item" href="#">طابعات</a>
				<a class="dropdown-item" href="#">تلفزيونات</a>
				<a class="dropdown-item" href="#">اسكنرات</a>
			</div>
			</li>

			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				اثاثات
			</a>
			<div class="dropdown-menu">
			<a class="dropdown-item" href="#">اثاثات ومفروشات</a>
			<a class="dropdown-item" href="#">ثلاجات وغسالات</a>
				<a class="dropdown-item" href="#">مكيفات ومراوح</a>
				<a class="dropdown-item" href="#">مستلزمات المطبخ</a>
				<a class="dropdown-item" href="#">مواد و معدات بناء</a>
				<a class="dropdown-item" href="#">اجهزة منزلية</a>
				<a class="dropdown-item" href="#">افران و مايكروويفات</a>
			</div>
			</li>


			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				مبوبه
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">وظائف</a>
				<a class="dropdown-item" href="#">مستلزمات نسائية</a>
				<a class="dropdown-item" href="#"> مستلزمات رجالية</a>
				<a class="dropdown-item" href="#">ملابس وإكسسوارات</a>
				<a class="dropdown-item" href="#">مستلزمات أطفال</a>
				<a class="dropdown-item" href="#">خدمات واستشارات</a>
				<a class="dropdown-item" href="#">معدات وادوات</a>
				<a class="dropdown-item" href="#">صندوق المفقودات</a>
				<a class="dropdown-item" href="#">حيوانات للبيع</a>
				<a class="dropdown-item" href="#">فعاليات ومجتمع</a>
			</div>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="{{url('/contact')}}">
			اتصل بنا
			</a>
			</li>
		</ul>
		<div class="post-btn">
		<a class="btn btn-common" href="{{url('/dashboard')}}"><i class="lni-pencil-alt"></i> اضف اعلانك</a>
		</div>
	</div>
</div>

<ul class="mobile-menu">
	<li>
		<a class="active" href="#">
		الرئيسية
		</a>
	</li>
	<li>
		<a class="active" href="#">
		من نحن
		</a>
	</li>
	<li>
		<a href="category.html">كل التصنيفات</a>
	</li>
	<li>
		<a href="#">
			موتورات
		</a>
		<ul class="dropdown">
			<li><a class="dropdown-item" href="#">سيارات للبيع</a></li>
			<li><a class="dropdown-item" href="#">مركبات ثقيلة</a></li>
			<li><a class="dropdown-item" href="#">دراجات نارية (مواتر)</a></li>
			<li><a class="dropdown-item" href="#">قطع غيار واكسسوارات</a></li>
		</ul>
	</li>
	<li>
		<a href="#">عقارات للبيع</a>
		<ul class="dropdown">
			<li><a class="dropdown-item" href="#">شقة</a></li>
			<li><a class="dropdown-item" href="#">منزل</a></li>
			<li><a class="dropdown-item" href="#">عقار تجاري</a></li>
			<li><a class="dropdown-item" href="#">سكن مجمع</a></li>
			<li><a class="dropdown-item" href="#">ارض</a></li>
		</ul>
	</li>
	<li>
		<a href="#">عقارات للايجار</a>
		<ul class="dropdown">
			<li><a class="dropdown-item" href="#">شقة للايجار</a></li>
			<li><a class="dropdown-item" href="#">شقة مفروشة</a></li>
			<li><a class="dropdown-item" href="#">منزل للايجار</a></li>
			<li><a class="dropdown-item" href="#">فيلا للايجار</a></li>
			<li><a class="dropdown-item" href="#">عقار تجاري للايجار</a></li>
			<li><a class="dropdown-item" href="#">سكن مجمع للايجار</a></li>
		</ul>
	</li>
	
	<li>
		<a href="#">مبوبه</a>
		<ul class="dropdown">
			<li><a class="dropdown-item" href="#">وظائف</a></li>
			<li><a class="dropdown-item" href="#">اثاث</a></li>
			<li><a class="dropdown-item" href="#"> اجهزة منزلية</a></li>
			<li><a class="dropdown-item" href="#">الكترونيات</a></li>
			<li><a class="dropdown-item" href="#">موبايلات وكمبيوترات</a></li>
			<li><a class="dropdown-item" href="#">معدات رياضية</a></li>
			<li><a class="dropdown-item" href="#">ملابس وإكسسوارات</a></li>
			<li><a class="dropdown-item" href="#">مستلزمات أطفال</a></li>
			<li><a class="dropdown-item" href="#">ألعاب</a></li>
			<li><a class="dropdown-item" href="#">أشياء مجانية  )تبرع)</a></li>
			<li><a class="dropdown-item" href="#">مفقودات</a></li>
			<li><a class="dropdown-item" href="#">اخرى</a></li>
		</ul>
	</li>
	
	<li>
		<a href="contact.html">اتصل بنا</a>
	</li>
</ul>


</nav>
@yield('banner')
</header>