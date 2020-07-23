@extends('layouts.master') @section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="product-title">اعلاناتي</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">الرئيسية /</a>
						</li>
						<li class="current">اعلاناتي</li>
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
							<h2 class="dashbord-title">اعلاناتي</h2>
						</div>
						<div class="dashboard-wrapper">
							<nav class="nav-table">
								<ul>
									<li class="active">
										<a href="#">كل الاعلانات ({{ countUserAds() }})  </a>
									</li>
									<li>
										<a href="#">المفعلة ({{countUserActivatedAds()}})</a>
									</li>
									<li>
										<a href="#"> الغير مفعلة({{countUserPendingAds()}})</a>
									</li>
									<li>
										<a href="#">المميزة (3)</a>
									</li>
									<li>
										<a href="#">المنتهية ({{countUserExpiredAds()}})</a>
									</li>
								</ul>
							</nav>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection