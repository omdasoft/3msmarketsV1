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
				<form action="{{action('newsController@store')}}" method="post" enctype="multipart/form-data">
					<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
						<label class="sr-only">العنوان</label>
						<input type="text" class="form-control" id="title" placeholder="العنوان" name="title" value="{{ Request::old('title')}}"
						 autocomplete="off">
						<span class="text-danger">{{ $errors->first('title') }}</span>
					</div>

					<div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
						<label class="sr-only">الخبر</label>
						<textarea class="form-control summernote" placeholder="نص الخبر" name="text">
                               {{Request::old('text')}}           
                         </textarea>
						<span class="text-danger">{{ $errors->first('text') }}</span>
					</div>

					<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
						<label class="sr-only">الصورة</label>
						<input type="file" class="form-control" id="image" placeholder="اختار صورة" name="image" value="{{ Request::old('image')}}">
						<span class="text-danger">{{ $errors->first('image') }}</span>
					</div>

					<div class="clearfix">
						<input type="submit" class="btn btn-primary pull-right" value="حفظ">
					</div>

					<input type="hidden" name="_token" value="{{ Session::token() }}" />
				</form>
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