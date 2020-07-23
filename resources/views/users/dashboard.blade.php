@extends('layouts.master') @section('content')

<div class="page-header" style="background: url(img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="product-title">لوحة التحكم</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">الرئيسية /</a>
						</li>
						<li class="current">لوحة التحكم</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="content" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-2 page-sidebar">
				@include('inc.sidebar')
			</div>
			<div class="col-sm-12 col-md-8 col-lg-10">
				<div class="page-content">
					<div class="inner-box">
						<div class="dashboard-box">
							<h2 class="dashbord-title">لوحة التحكم</h2>
						</div>
						@if(session('status'))
							<div class="alert alert-success">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
							</div>
						@endif 
						@if($rows->count() > 0)
						<div class="dashboard-wrapper">
							<div class="dashboard-sections">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
										<div class="dashboardbox">
											<div class="icon">
												<i class="lni-write"></i>
											</div>
											<div class="contentbox">
												<h2>
													<a href="#">عدد الاعلانات</a>
												</h2>
												<h3>{{ countUserAds() }}</h3>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
										<div class="dashboardbox">
											<div class="icon">
												<i class="lni-add-files"></i>
											</div>
											<div class="contentbox">
												<h2>
													<a href="#">الاعلانات المميزة</a>
												</h2>
												<h3>10 اعلان</h3>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
										<div class="dashboardbox">
											<div class="icon">
												<i class="lni-support"></i>
											</div>
											<div class="contentbox">
												<h2>
													<a href="#">الرسائل</a>
												</h2>
												<h3>{{countMsg()}}</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-responsive dashboardtable tablemyads">
								<thead>
									<tr>
									
										<th>الصورة</th>
										<th>الاسم</th>
										<th>التصنيف</th>
										<th>حالة الاعلان</th>
										<th>التاريخ</th>
										<th>تكلفة الاعلان</th>
										<th>#</th>
									</tr>
								</thead>
								<tbody>
									@foreach($rows as $row)
									<tr data-category="{{$row->status == 0 ? 'inactive':'active'}}">
								
										<td class="photo">
											<img class="img-fluid" src="<?php echo asset('uploads/ads/'.$row->image);?>" alt="">
										</td>
										<td data-title="Title">
											<h3>{{$row->title}}</h3>
											<span>رقم الاعلان : {{$row->product_id}}</span>
										</td>
										<td data-title="Category">
											<span class="adcategories">{{$row->sub_cat}}</span>
										</td>
										<td data-title="Ad Status">
										
											<?php 
												$status = adsStatus($row->product_id);
												if($status == 0){
													echo "<span class='btn btn-warning btn-xs'>تحت الانتظار</span>";
												}else if($status == 1){
													echo "<span class='btn btn-success btn-xs'>مفعل</span>";
												}else if($status == 2){
													echo "<span class='btn btn-danger btn-xs'>منتهي</span>";
												}
											?>	

										</td>
										<td data-title="Price">
											<h3>{{$row->date}}</h3>
										</td>
										<td data-title="Price">
											<h3>{{$row->total}}</h3>
										</td>
										<td data-title="Action">
											<div class="btns-actions">
												<a class="btn-action btn-view" href="{{url('/ads-view',$row->id)}}">
													<i class="lni-eye"></i>
												</a>
												<a class="btn-action btn-edit" href="#">
													<i class="lni-pencil"></i>
												</a>
												<a class="btn-action btn-delete" href="#" data-toggle="modal" data-target="#delete">
													<i class="lni-trash"></i>
												</a>
											</div>
										</td>
									</tr>

									@endforeach
								</tbody>
							</table>
						</div>
							<!-- Modal form delete comformation-->
						<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">رسالة تحزير</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
											<h6 style="color:red">هل متاكد من حذف هذا الاعلان ؟ هذا الامر لا يمكن التراجع عنة</h6>
											<br>
												<a class="btn btn-danger" href="{{ url('/ads-delete/'.$row->id) }}">
													<i class="lni-trash"></i>
												</a>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
									</div>
								</div>
							</div>
						</div>
						@else
						<h5 style="text-align:center;margin-top:50px;">لا توجد اعلانات لهذا المستخدم</h5>
						@endif
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection