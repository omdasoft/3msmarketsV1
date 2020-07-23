@extends('cpanel.layouts.master') @section('content')

<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">كل  المستخدمين</h3>

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
				@if(count($users) > 0)
				<table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>الاسم</th>
							<th>البريد</th>
							<th>رقم الهاتف</th>
							<th>المدينة</th>
							<th>المنطقة</th>
                            <th>العنوان</th>
							<th>تاريخ التسجيل</th>
							<th>#</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>

						@foreach($users as $user)

						<tr>
						
							<td>{{$user->first_name.' '.$user->middle_name.' '.$user->last_name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->phone}}</td>
							<td>{{getCityName($user->city)}}</td>
							<td>{{getLocationName($user->location)}}</td>
                            <td>{{$user->address}}</td>
							<td>{{$user->created_at}}</td>
							<td>
                                <?php 
                                    if($user->active == 1){
                                        ?>
                                       
                                       <a href="{{url('/decativate-user',$user->id)}}" class='btn btn-warning btn-xs'>الغاء التفعيل</a>
                                       <?php
                                    }else{ 
                                        ?>
                                       <a href="{{url('/activate-user',$user->id)}}" class='btn btn-success btn-xs'>تفعيل</a>
                                        <?php
                                    }
                                ?>
							</td>
							<td>
								<a class="btn btn-xs btn-danger" href="#delete" data-toggle="modal" data-target="#delete">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
                            <th>الاسم</th>
							<th>البريد</th>
							<th>رقم الهاتف</th>
							<th>المدينة</th>
							<th>المنطقة</th>
                            <th>العنوان</th>
							<th>تاريخ التسجيل</th>
							<th>#</th>
							<th>#</th>

						</tr>
					</tfoot>
				</table>
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
								<h4 style="color:red">عند حذف المستخدم يتم حذف جميع اعلانات المستخدم</h4>
								<h4 style="color:red">هل متاكد من حذف هذا المستخدم ؟</h4>
								<br>
								<a class="btn btn-md btn-danger" href="{{url('/delete-user',$user->id)}}">
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
				<h4>لا يوجد مستخدمين</h4>
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