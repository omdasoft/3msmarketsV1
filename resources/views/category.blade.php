@extends('layouts.master')
@section('banner')
<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 text-center">
<div class="contents-ctg">
<div class="search-bar">
<div class="search-inner">
<form class="search-form">
<div class="form-group inputwithicon">
<i class="lni-tag"></i>
<input type="text" name="customword" class="form-control" placeholder="ادخل اسم المنتج">
</div>
<div class="form-group inputwithicon">
<i class="lni-target"></i>
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
</div>
<div class="form-group inputwithicon">
<i class="lni-menu"></i>
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
<div class="main-container section-padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
<aside>

<div class="widget_search">
<form role="search" id="search-form">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="ابحث هنا ..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div>

<div class="widget categories">
<h4 class="widget-title">كل التصنيفات</h4>
<ul class="categories-list">
<li>
<a href="#">
<i class="lni-dinner"></i>
 <span class="category-counter">(5)</span> موتورات
</a>
</li>
<li>
<a href="#">
<i class="lni-control-panel"></i>
اثاثات <span class="category-counter">(8)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-github"></i>
عقارات <span class="category-counter">(2)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-coffee-cup"></i>
مطاعم <span class="category-counter">(3)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-home"></i>
موبايلات <span class="category-counter">(4)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-pencil"></i>
وظائف <span class="category-counter">(5)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-display"></i>
الكترونيات <span class="category-counter">(9)</span>
</a>
</li>
</ul>
</div>
<div class="widget">
<h4 class="widget-title">اعلان</h4>
<div class="add-box">
<img class="img-fluid" src="<?php echo asset('img/img1.jpg');?>" alt="">
</div>
</div>
</aside>
</div>
<div class="col-lg-9 col-md-12 col-xs-12 page-content">

<div class="product-filter">
<div class="short-name">
<span>عرض (1 - 12 منتج من  7371 المنتجات)</span>
</div>
<div class="Show-item">
<span>فرز حسب</span>
<form class="woocommerce-ordering" method="post">
<label>
<select name="order" class="orderby">
<option selected="selected" value="menu-order">كل المنتجات</option>
<option value="popularity">الاكثر مبيعا</option>
<option value="popularity">التاريخ</option>
<option value="popularity">الاحدث</option>
<option value="popularity">السعر</option>
</select>
</label>
</form>
</div>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
</li>
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
</li>
</ul>
</div>


<div class="adds-wrapper">
<div class="tab-content">
<div id="grid-view" class="tab-pane fade">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<span class="price-save">
30% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-1.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Canon SX Powershot ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$249.00</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-2.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Apple Macbook Pro ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$289.00</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Mercedes Benz E200 ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$199.80</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<span class="price-save">
25% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-4.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Brown Leather Bag ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$206.90</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="list-view" class="tab-pane fade active show">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="featured-box">
<figure>
<span class="price-save">
10% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-1.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="{{url('/ads-details')}}">Canon SX Powershot ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$249.00</h3>
<a href="ads-details.html" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-2.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Apple Macbook Pro ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$289.00</h3>
<a href="ads-details.html" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="featured-box">
 <figure>
<span class="price-save">
30% Save
</span>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-3.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Mercedes Benz E200 ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$199.80</h3>
<a href="ads-details.html" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="featured-box">
<figure>
<div class="icon">
<span class="bg-green"><i class="lni-heart"></i></span>
<span><i class="lni-bookmark"></i></span>
</div>
<a href="#"><img class="img-fluid" src="<?php echo asset('img/featured/img-4.jpg');?>" alt=""></a>
</figure>
<div class="feature-content">
<div class="product">
<a href="#">Electronic > </a>
<a href="#">Apple</a>
</div>
<h4><a href="ads-details.html">Brown Leather Bag ...</a></h4>
<div class="meta-tag">
<span>
<a href="#"><i class="lni-user"></i> John Smith</a>
</span>
<span>
<a href="#"><i class="lni-map-marker"></i> New York, US</a>
</span>
<span>
<a href="#"><i class="lni-tag"></i> Apple</a>
</span>
</div>
<p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
<div class="listing-bottom">
<h3 class="price float-left">$206.90</h3>
<a href="{{url('/ads-details')}}" class="btn btn-common float-right">عرض التفاصيل</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link active" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">التالي</a></li>
</ul>
</nav>
</div>

</div>
</div>
</div>
</div>
@endsection