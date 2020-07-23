@extends('layouts.master') @section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="product-title">تعديل بيانات المستخدم</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">الرئيسية /</a>
						</li>
						<li class="current">اعدادات الحساب</li>
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
							<h2 class="dashbord-title">تعديل بيانات المستخدم</h2>
						</div>
						<div class="dashboard-wrapper">
                            @if(session('status'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                                </div>
                            @endif 
							<form action="{{action('usersController@update',$user->id)}}" class="form-horizontal login-form" role="form" method="POST">
								{{ csrf_field() }}

								<div class="row">
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
											<div class="input-icon">

												<i class="lni-user"></i>
												<input id="first_name" type="text" class="form-control" name="first_name" placeholder="الاسم الاول" value="{{$user->first_name}}" autofocus>
					
												<span class="req">*</span>
												@if ($errors->has('first_name'))
												<span class="help-block">
													<strong>{{ $errors->first('first_name') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
											<div class="input-icon">
												<i class="lni-user"></i>
												<input id="middle_name" type="text" class="form-control" name="middle_name" placeholder="الاسم الثاني"  value="{{$user->middle_name}}">
												<span class="req">*</span>
												@if ($errors->has('middle_name'))
												<span class="help-block">
													<strong>{{ $errors->first('middle_name') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
											<div class="input-icon">
												<i class="lni-user"></i>
												<input id="last_name" type="text" class="form-control" name="last_name" placeholder="الاسم الثالث" value="{{ $user->last_name }}">
												<span class="req">*</span>
												@if ($errors->has('last_name'))
												<span class="help-block">
													<strong>{{ $errors->first('last_name') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
								</div>
								<!--end of fisrt row-->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
											<div class="input-icon">
												<span class="req">*</span>

												<select name="city" id="city" class="form-control" value="{{getCityName($user->city)}}">
                                                    <option value="{{$user->city}}" selected>{{getCityName($user->city)}}</option>

													{{ $rows = getCity()}} @foreach($rows as $row)
													<option value="{{$row->id}}">{{$row->name}}</option>
													@endforeach
												</select>
												@if ($errors->has('city'))
												<span class="help-block">
													<strong>{{ $errors->first('city') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="input-icon">
												<select name="location" id="area" class="form-control">
													<option value="{{$user->location}}" selected>{{getLocationName($user->location)}}</option>

												</select>

											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
											<div class="input-icon">
												<input id="address" type="text" class="form-control" name="address" placeholder="العنوان" value="{{ $user->address }}">
												<span class="req">*</span>
												@if ($errors->has('address'))
												<span class="help-block">
													<strong>{{ $errors->first('address') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
								</div>
								<!--end of second row-->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<div class="input-icon">
												<i class="lni-envelope"></i>
												<input type="email" id="sender-email" class="form-control" name="email" placeholder="البريد الالكتروني" value="{{ $user->email }}">
												<span class="req">*</span>
												@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<div class="input-icon">
												<i class="lni-lock"></i>
												<input id="password" type="password" class="form-control" placeholder="كلمة المرور" name="password">
												<span class="req">*</span>

												@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
                                    <div class="col-md-4">
										<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
											<div class="input-icon">
												<i class="lni-phone"></i>
												<input type="text" id="phone" class="form-control" name="phone" placeholder="الهاتف" value="{{ $user->phone }}">
												<span class="req">*</span>
												@if ($errors->has('phone'))
												<span class="help-block">
													<strong>{{ $errors->first('phone') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</div>
								</div>
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ Session::token() }}" />
								<div class="text-center">
									<button type="submit" class="btn btn-common log-btn">تحديث</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

@section('scripts')
  <script type="text/javascript">
       /*
		  *this function is used to make ajax request to fetch all mark 
		  *it send the company id that comes from html select option
		  *to function controller
	  */

  $('#city').on('change',function(){
	
    $id = $(this).val();
    $.ajax({
      type : 'get',
      url  : '{{ URL::to('getLocations') }}',
      data :  {'city_id':$id},
      success:function(data){
      	$('#area').html(data);
      }
    });
  });

</script>
@endsection