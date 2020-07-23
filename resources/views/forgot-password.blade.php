@extends('layouts.master')

@section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">نسيت كلمة المرور</h2>
<ol class="breadcrumb">
<li><a href="{{url('/index')}}">الرئيسية /</a></li>
<li class="current">نسيت كلمة المرور</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="forgot login-area">
<h3>
	نسيت كلمة المرور
</h3>
<form role="form" class="login-form">
<div class="form-group">
<div class="input-icon">
<i class="icon lni-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="ادخل البريد">
</div>
</div>
<div class="text-center">
<button class="btn btn-common log-btn">ارسل كلمة المرور</button>
</div>
<div class="form-group mt-4">
<ul class="form-links">
<li class="float-left"><a href="{{url('/register')}}">لا تملك حساب</a></li>
<li class="float-right"><a href="{{url('/login')}}">الرجوع لتسجيل الدخول</a></li>
</ul>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
@endsection