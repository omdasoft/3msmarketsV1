@extends('cpanel.layouts.master') @section('content')

<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
	
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">الاعلانات المفعلة</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			@if(session('status'))
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
			</div>
			@endif

			<div class="box-body">
				@if(count($ads) > 0)
				<table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>الصورة</th>
							<th>رقم الاعلان</th>
							<th>العنوان</th>
							<th>التصنيف</th>
							<th>تاريخ الاضافة</th>
							<th>مدة العرض</th>
							<th>تكلفة الاعلان</th>
							<th>اسم المعلن</th>
							<th>الحالة</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>

						@foreach($ads as $ad)

						<tr>
							<td>
								<img class="img-fluid" src="<?php echo asset('uploads/ads/'.$ad->image);?>"
								 width="80" height="80" alt="">
							</td>
							<td>{{$ad->product_id}}</td>
							<td>{{$ad->title}}</td>
							<td>{{$ad->sub_cat}}</td>
							<td>{{$ad->date}}</td>
							<td>{{$ad->duration}}</td>
							<td>{{$ad->total}}</td>
							<td>{{advertiserName($ad->advertiser_id)}}</td>
							<td>
								<a class="btn btn-warning btn-xs" href="#" data-toggle="modal" data-target="#deactivate">الغاء التفعيل</a>
							</td>
							<td>
								<a class="btn btn-xs btn-success" href="{{url('/view',$ad->product_id)}}" role="button">
									<i class="fa fa-eye"></i>
								</a>


								<a class="btn btn-xs btn-danger" href="#delete" data-toggle="modal" data-target="#delete">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>الصورة</th>
							<th>رقم الاعلان</th>
							<th>العنوان</th>
							<th>التصنيف</th>
							<th>تاريخ الاضافة</th>
							<th>مدة العرض</th>
							<th>تكلفة الاعلان</th>
							<th>اسم المعلن</th>
							<th>الحالة</th>
							<th>#</th>

						</tr>
					</tfoot>
				</table>
				<!-- Modal form deactivate comformation-->
				<div class="modal fade" id="deactivate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">رسالة تحزير</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h4 style="color:red">هل متاكد من الغاء تفعيل هذا الاعلان ؟</h4>
								<br>
								<a class="btn btn-danger" href="{{ url('/deactivate-ads',$ad->product_id)}}">
									الغاء التفعيل
								</a>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
							</div>
						</div>
					</div>
				</div>
				<!--end modal-->
				<!-- Modal for delete comformation-->
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
								<h4 style="color:red">هل متاكد من حذف هذا الاعلان ؟ هذا الامر لا يمكن التراجع عنة</h4>
								<br>
								<a class="btn btn-md btn-danger" href="{{ url('/adminAds-delete',$ad->product_id) }}">
									<i class="fa fa-trash"></i>
								</a>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
							</div>
						</div>
					</div>
				</div>
				@else
				<h4>لا توجد اعلانات مفعلة</h4>
				@endif
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