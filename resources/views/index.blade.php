@extends('layouts.master')
@section('banner')
<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 col-lg-9 col-xs-12 text-center">
<div class="contents">
<h1 class="head-title">مرحبا بك في متجر <span class="year">ثري إمز</span></h1>
<h5>من خلال ثري إمز يمكنك البحث عن وظيفة وبيع وشراء أي شيء مباشرةً</h5>
<div class="search-bar">
<div class="search-inner">
<form class="search-form">

<div class="form-group inputwithicon">
<div class="select">
<select>
	<option value="none">اختار المنطقة</option>
	<option>الخرطوم</option>
	<option>الشمالية</option>
	<option>نهر النيل</option>
	<option>البحر الاحمر</option>
	<option>كسلا</option>
	<option>القضارف</option>
	<option>الجزيرة</option>
	<option>النيل الابيض</option>
	<option>النيل الازرق</option>
	<option>سنار</option>
	<option>شمال كردفان</option>
	<option>غرب كردفان</option>
	<option>جنوب كردفان</option>
	<option>شمال دار فور</option>
	<option>جنوب دار فور</option>
	<option>شرق دار فور</option>
	<option>غرب دار فور</option>
	<option>وسط دار فور</option>
</select>
</div>
<i class="lni-target"></i>
</div>
<div class="form-group inputwithicon">
<div class="select">
<select>
	<option value="none">اختار التصنيف</option>
	<option value="none">موبايلات</option>
	<option value="none">الكترونيات</option>
	<option value="none">اثاثات</option>
	<option value="none">عقارات للبيع </option>
	<option value="none">عقارات للايجار</option>
	<option value="none">وظائف</option>
	<option value="none">سيارات</option>
</select>
</div>
<i class="lni-menu"></i>
</div>
<div class="form-group">
	<input type="text" name="customword" class="form-control" placeholder="ادخل كلمة البحث هنا ؟">
</div>
<button class="btn btn-common" type="button"><i class="lni-search"></i> ابحث الان</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('content')
<section id="categories">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10 col-md-12 col-xs-12">
<div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-1.png');?>" alt="">
</div>
<h4>دراجات</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-2.png');?>" alt="">
</div>
<h4>اثاث</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-3.png');?>" alt="">
</div>
<h4>لابتوب</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-4.png');?>" alt="">
</div>
<h4>الكترونيات</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-5.png');?>" alt="">
</div>
<h4>هدايا</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-6.png');?>" alt="">
</div>
<h4>ملابس</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-1.png');?>" alt="">
</div>
<h4>دراجات</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-2.png');?>" alt="">
</div>
<h4>اثاث</h4>
</div>
</div>
</a>
</div>
<div class="item">
<a href="{{ url('/category') }}">
<div class="category-icon-item">
<div class="icon-box">
<div class="icon">
<img src="<?php echo asset('img/category/img-3.png');?>" alt="">
</div>
<h4>لابتوب</h4>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="featured section-padding">
<div class="container">
<h1 class="section-title">اخر الاعلانات</h1>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-1.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">الكترونيات > </a>
<a href="#">كاميرات</a>
</div>
<h4><a href="{{url('/ads-details')}}">كاميرا كانون جديدة ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> عماد الدين علي </a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> الخرطوم </a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> كانون</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">15000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<span class="price-save">
25% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-2.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">الكترونيات > </a>
<a href="#">لابتوبات</a>
</div>
<h4><a href="{{url('/ads-details')}}">لابتوب ابل جديد  ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> عثمان المكي</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> بحري</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> ابل</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">20000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-3.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">موتورات > </a>
<a href="#">سيارات</a>
</div>
<h4><a href="{{url('/ads-details')}}">سيارة مارسيدس بينز اي 200 مستعملة ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> عماد الدين علي</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> الخرطوم</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> مارسيدس</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">900000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<span class="price-save">
10% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-4.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">مستلزمات نسائية > </a>
<a href="#">شنط يد</a>
</div>
<h4><a href="{{url('/ads-details')}}">شنطة يد جلد جديدة ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> فاطمة محمد</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> بورتسودان</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i>شنط جلد</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">15000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-5.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">الكترونيات > </a>
<a href="#">موبايلات</a>
</div>
<h4><a href="{{url('/ads-details')}}">موبايل ايفون 6 بلص جديج ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> محمد احمد</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> مدني</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> ابل</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">17000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<span class="price-save">
35% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-6.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">اثاثات > </a>
<a href="#">اثاثات ومفروشات</a>
</div>
<h4><a href="{{url('/ads-details')}}">طاولة طعام خشبية مستعملة  ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> علي احمد</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> الخرطوم</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> اثاثات خشبية</a>
</span>
</div>
<p class="dsc">وصف قصير للاعلان يتضمن المواصفات والشركة وتفاصيل عن الاعلان</p>
<div class="listing-bottom">
<h3 class="price float-left">10000 ج.س</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="featured-lis section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
<h3 class="section-title">اعلانات مميزة</h3>
<div id="new-products" class="owl-carousel owl-theme">
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img1.jpg');?>" alt="">
<div class="overlay">
<div>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
<div class="btn-product bg-sale">
<a href="#">Sale</a>
</div>
<span class="price">15000 ج.س</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}"> لابتوب ماكبوك جديد</a></h3>
<span>الكترونيات \ لابتوبات</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> امدرمان</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img2.jpg');?>" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="{{url('/ads-details')}}">عرض التفاصيل</a>
</div>
</div>
<span class="price">10000</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}">كاميرا نيكون جديدة</a></h3>
<span>الكترونيات \ كاميرات</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
</span>
<span class="count-review">
(2 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i>نيالا</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img3.jpg');?>" alt="">
<div class="overlay">
<div>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
<div class="btn-product bg-slod">
<a href="#">Sold</a>
</div>
<span class="price">20000 ج.س</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}">ايفون اكس جديد</a></h3>
<span>الكترونيات \ موبايلات</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(8 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> الخرطوم</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img4.jpg');?>" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="{{url('/ads-details')}}">عرض التفاصيل</a>
</div>
</div>
<span class="price">15000 ج.س</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}">شنطة جلد جديدة</a></h3>
<span>مستلزمات نسائية \ شنط </span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> امدرمان</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img5.jpg');?>" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="{{url('/ads-details')}}">عرض التفاصيل</a>
</div>
</div>
<span class="price">$99.00</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}">شاشة ال تي دي ماركة ابل 32 بوصة</a></h3>
<span>الكترونيات \ تلفزيونات</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i>امدرمان</a>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo asset('img/product/img6.jpg');?>" alt="">
<div class="overlay">
<div>
<a href="{{url('/ads-details')}}" class="btn btn-common">عرض التفاصيل</a>
</div>
</div>
<div class="btn-product bg-sale">
<a href="#">Sale</a>
</div>
<span class="price">$99.00</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="{{url('/ads-details')}}">غرفة نوم كاملة جديدة</a></h3>
<span>اثاثات \ اثاثات ومفروشات</span>
<div class="icon">
<span><i class="lni-bookmark"></i></span>
<span><i class="lni-heart"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
(12 Review)
</span>
</div>
<div class="float-right">
<a class="address" href="#"><i class="lni-map-marker"></i> الخرطوم</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="works section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="section-title"> للإعلان معنا </h3>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-users"></i>
</div>
<p>انشاء حساب</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-bookmark-alt"></i>
</div>
<p>اضافة الإعلان</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-thumbs-up"></i>
</div>
<p>نشر الاعلان</p>
</div>
</div>
<hr class="works-line">
</div>
</div>
</section>

<!--services section-->
<section class="services bg-light section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="section-title">مميزاتنا</h3>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.2s">
					<div class="icon">
						<i class="lni-leaf"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">سرعة انتشار الاعلان</a></h3>
						<p>نقوم بشر الاعلان في مختلف وسائل التواصل الاجتماعي مما يضمن وصول الاعلان الي كمية </p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.4s">
					<div class="icon">
						<i class="lni-display"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">اسعار مخفضة</a></h3>
						<p>نحن نمكن عملائنا من اعلان منتجاتهم باسعار مخفضة كما توجد فترة لعرض المنتجات مجانا</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.6s">
					<div class="icon">
						<i class="lni-color-pallet"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">العرض المميز للمنتجات</a></h3>
						<p>نحن نهتم بطريقة عرض المنتجات في الموقع وتطبيقات الهواتف بطريقة جيدة</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="blog" class="section-padding">

	<div class="container">
		<h2 class="section-title">
			اخر الاخبار
		</h2>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

				<div class="blog-item-wrapper">
					<div class="blog-item-img">
						<a href="{{url('/single-post')}}">
							<img src="<?php echo asset('img/blog/img-1.jpg');?>" alt="">
						</a>
					</div>
					<div class="blog-item-text">
						<div class="meta-tags">
							<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
							<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
						</div>
						<h3>
							<a href="{{url('/single-post')}}">Recently Launching Our Iphone X</a>
						</h3>
						<p>
							Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
						</p>
						<a href="{{url('/single-post')}}" class="btn btn-common">المزيد</a>
					</div>
				</div>

			</div>
			<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

				<div class="blog-item-wrapper">
					<div class="blog-item-img">
						<a href="{{url('/single-post')}}">
							<img src="<?php echo asset('img/blog/img-1.jpg');?>" alt="">
						</a>
					</div>
					<div class="blog-item-text">
						<div class="meta-tags">
							<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
							<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
						</div>
						<h3>
							<a href="{{url('/single-post')}}">Recently Launching Our Iphone X</a>
						</h3>
						<p>
							Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
						</p>
						<a href="{{url('/single-post')}}" class="btn btn-common">المزيد</a>
					</div>
				</div>

			</div>
			<div class="col-lg-4 col-md-6 col-xs-12 blog-item">

				<div class="blog-item-wrapper">
					<div class="blog-item-img">
						<a href="{{url('/single-post')}}">
							<img src="<?php echo asset('img/blog/img-1.jpg');?>" alt="">
						</a>
					</div>
					<div class="blog-item-text">
						<div class="meta-tags">
							<span class="user float-left"><a href="#"><i class="lni-user"></i> Posted By Admin</a></span>
							<span class="date float-right"><i class="lni-calendar"></i> 24 May, 2018</span>
						</div>
						<h3>
							<a href="{{url('/single-post')}}">Recently Launching Our Iphone X</a>
						</h3>
						<p>
							Reprehenderit nemo quod tempore doloribus ratione distinctio quis quidem vitae sunt reiciendis, molestias omnis soluta.
						</p>
						<a href="{{url('/single-post')}}" class="btn btn-common">المزيد</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection