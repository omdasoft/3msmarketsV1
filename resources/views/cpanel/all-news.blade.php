@extends('cpanel.layouts.master') @section('content')

<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">اضافة خبر </h3>

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
                @if(count($news) > 0) 
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>الصورة</th>
							<th>العنوان</th>
							<th>التاريخ</th>

							<th>#</th>
						</tr>
					</thead>
					<tbody>
						@foreach($news as $new)
						<tr>
							<td>
                            <img class="img-fluid" src="<?php echo asset('uploads/news/'.$new->image);?>"
								 width="80" height="80" alt="">
                            </td>
							<td>
                                {{ $new->title}}
							</td>
							<td>{{ $new->date}}</td>
							<td>
								<a class="btn btn-xs btn-warning" href="/news/{{$new->id}}/edit" role="button">
									<i class="fa fa-edit"></i>
								</a>
						
								<a class="btn btn-xs btn-danger"  href="#delete" role="button" data-toggle="modal" data-target="#delete">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
						@endforeach

					</tbody>
					<tfoot>
						<tr>
                            <th>الصورة</th>
							<th>العنوان</th>
							<th>التاريخ</th>

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
								<h4 style="color:red">هل متاكد من حذف هذا الخبر ؟</h4>
								<br>
								<a class="btn btn-md btn-danger" href="{{ url('/news-delete/'.$new->id) }}">
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
                    <h3>لا توجد اخبار</h3>
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