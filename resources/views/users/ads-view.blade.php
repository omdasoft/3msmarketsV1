@extends('layouts.master') @section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="product-title">عرض الاعلان</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">الرئيسية /</a>
						</li>
						<li class="current">عرض الاعلان</li>
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
				@include('inc.sidebar')
			</div>
			<div class="col-sm-12 col-md-8 col-lg-9">
				<div class="page-content">
					<div class="inner-box">
                        <div class="dashboard-box">
							<h2 class="dashbord-title">تفاصيل الإعلان</h2>
						</div>
						<div class="dashboard-wrapper">
					
							<table class="table table-responsive viewadstable">
                                <tbody>
                                    <tr><td class="head">رقم الاعلان</td><td>{{$row->product_id}}</td></tr>
                                    <tr><td class="head">عنوان الاعلان</td><td>{{$row->title}}</td></tr>
                                    <tr><td class="head">السعر</td><td>{{$row->price}}</td></tr>
                                    <tr><td class="head">التصنيف الفرعي</td><td>{{$row->sub_cat}}</td></tr>
                                    <tr><td class="head">تاريخ الاضافة</td><td>{{$row->date}}</td></tr>
                                    <tr><td class="head">حالة الاعلان</td><td>{{$row->status == 0? 'غير مفعل':'مفعل'}}</td></tr>
                                    <tr><td class="head">مدة العرض</td><td>{{$row->duration}} يوم </td></tr>
                                    <tr class="{{$row->status == 0 ? 'hide':''}}"><td class="head">تاريخ التفعيل</td><td>{{$row->activation_date}}</td></tr>
                                    <tr class="{{$row->status == 0 ? 'hide':''}}"><td class="head">تاريخ الانتهاء</td><td>{{$row->end_date}}</td></tr>
                                    <tr><td class="head">تكلفة الاعلان</td><td>{{$row->total}} ج.س</td></tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection