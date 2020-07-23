@extends('layouts.master')

@section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">اضافة اعلان</h2>
<ol class="breadcrumb">
<li><a href="#">الرئيسية /</a></li>
<li class="current">اضف اعلانك</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
@include('inc.sidebar');
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">تفاصيل الاعلان</h2>
</div>
<div class="dashboard-wrapper">
<div class="form-group mb-3">
<label class="control-label">اسم المنتج</label>
<input class="form-control input-md" name="Title" placeholder="اضف اسم المنتج" type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">التصنيف</label>
<div class="tg-select form-control">
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
<div class="form-group mb-3">
<label class="control-label">سعر المنتج</label>
<input class="form-control input-md" name="price" placeholder="اضف سعر المنتج" type="text">
<div class="tg-checkbox mt-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-priceoncall">
<label class="custom-control-label" for="tg-priceoncall">تحديد السعر بعد الاتصال</label>
</div>
</div>
</div>
<div class="form-group md-3">
<!--
<section id="editor">
<div id="summernote">
</div>
</section>
-->
<label class="control-label">التفاصيل</label>

<textarea row="20" style="height:300px;" class="form-control"></textarea>
</div>
<label class="tg-fileuploadlabel" for="tg-photogallery">
<span>اسحب الملف هنا</span>
<span>او</span>
<span class="btn btn-common">اختار الملف</span>
<span>اقصى حد مسموح به هو 2 ميقا بايت</span>
<input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
</label>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
<div class="inner-box">
<div class="tg-contactdetail">
<div class="dashboard-box">
<h2 class="dashbord-title">معلومات التواصل</h2>
</div>
<div class="dashboard-wrapper">

<div class="form-group mb-3">
<label class="control-label">الاسم الاول *</label>
<input class="form-control input-md" name="name" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">الاسم الثاني * </label>
<input class="form-control input-md" name="name" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">الاسم الثالث </label>
<input class="form-control input-md" name="name" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">الهاتف * </label>
<input class="form-control input-md" name="phone" type="text">
</div>
<div class="form-group mb-3">
<label class="control-label">العنوان</label>
<input class="form-control input-md" name="address" type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">الولاية</label>
<div class="tg-select form-control">
<select>
	<option value="none">اختار الولاية</option>
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
<div class="tg-checkbox">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
<label class="custom-control-label" for="tg-agreetermsandrules">اوافق علي كل <br><a href="javascript:void(0);">الشروط والقوانين الخاصة باضافة اعلان في موقع ثري امز</a></label>
</div>
</div>
<button class="btn btn-common" type="button">اضافة الاعلان</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection