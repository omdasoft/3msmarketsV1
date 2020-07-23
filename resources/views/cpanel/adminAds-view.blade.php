@extends('cpanel.layouts.master') @section('styles')
<style type="text/css">
	.desc {
		width: 100%;
		min-height: 200px;
		border: 1px solid #ddd;
		margin: 5px 0;
		padding: 10px;
	}
	.images .col-md-3{
		float: right;
	}
	.images img{
		margin-bottom: 5px;
	}	
</style>
@endsection @section('content')

<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">تفاصيل الاعلان</h3>

				@if(session('status'))
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
				</div>
				@endif

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<div class="box-body">
				<div class="ads-view">
					<table class="table table-responsive table-bordered view-table">
						<tr>

							<th>التصنيف</th>
							<td>{{$row->category}}</td>
							<th>التصنيف الفرعي</th>
							<td>{{$row->sub_cat}}</td>
						</tr>
						<tr>
							<th>رقم الاعلان</th>
							<td>{{$row->product_id}}</td>
							<th>اسم الاعلان</th>
							<td>{{$row->title}}</td>
						</tr>
						@if($row->status == 1)
							<tr>
								<th>تاريخ التفعيل</th>
								<td>{{$row->activation_date}}</td>
								<th>تاريخ نهاية العرض</th>
								<td>{{$row->end_date}}</td>
							</tr>
						@endif
						<tr>
							<th>الشركة</th>
							<td>{{carsCompanyName($row->company_id)}}</td>
							<th>ماركة السيارة</th>
							<td>{{carsMarkName($row->mark_id)}}</td>
						</tr>
						<tr>
							<th>الحالة</th>
							<td>{{$row->condition}}</td>
							<th>نوع السيارة</th>
							<td>{{$row->car_type}}</td>
						</tr>
						<tr>
							<th>نوع الوقود</th>
							<td>{{$row->fuel_type}}</td>
							<th>نوع المحرك</th>
							<td>{{$row->gear_type}}</td>
						</tr>
						<tr>
							<th>تاريخ الصنع</th>
							<td>{{$row->manufacture_date}}</td>
							<th>المسافة ك.م</th>
							<td>{{$row->distance}}</td>
						</tr>
						<tr>
							<th>اللون</th>
							<td>{{$row->color}}</td>
							<th>الترخيص</th>
							<td>{{$row->license}}</td>
						</tr>
						<tr>
							<th>حالة الهيكل</th>
							<td>{{$row->body}}</td>
							<th>الحالة الميكانيكية</th>
							<td>{{$row->mechanical_state}}</td>
						</tr>
						<tr>
							<th>رقم الشاسيه</th>
							<td>{{$row->chassis_num}}</td>
							<th>عدد الابواب</th>
							<td>{{$row->doors}}</td>
						</tr>
						<tr>
							<th>عدد الاسطوانات</th>
							<td>{{$row->cylinders}}</td>
							<th>سعر السيارة</th>
							<td>{{$row->price}}</td>
						</tr>
						<tr>
							<th>فترة الاعلان (يوم)</th>
							<td>{{$row->duration}}</td>
							<th>اسم المعلن</th>
							<td>{{advertiserName($row->user_id)}}
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-plus"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th>المدينة</th>
							<td>{{getCityName($row->city_id)}}</td>
							<th>المنطقة</th>
							<td>{{getLocationName($row->location_id)}}</td>
						</tr>
					</table>
					<div class="desc">
						<h5>وصف قصير للاعلان</h5>
						<p>{{$row->desc}}</p>
					</div>
					<div class="images">
						<h5>الصور</h5>
						<div class="row">
							<?php $images = explode('|',$row->images); ?>

								@foreach($images as $image)
									<div class="col-md-3">
										<img class="img-fluid" src="<?php echo asset('uploads/ads/'.$image);?>" alt="" style="width:100%">
									</div>

								@endforeach
							
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">

			</div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection