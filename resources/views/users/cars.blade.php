@extends('layouts.master') @section('styles')
<link rel="stylesheet" href="<?php echo asset('form-wizard/css/jquery.steps.css');?>">
<link rel="stylesheet" href="<?php echo asset('form-wizard/css/main.css');?>"> @endsection @section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="product-title">اضافة اعلان جديد</h2>
					<ol class="breadcrumb">
						<li>
							<a href="{{url('/')}}"> الرئيسية / </a>
						</li>
						<li class="current"> اضافة اعلان جديد </li>
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
							<h2 class="dashbord-title">موتورات > سيارات </h2>
							<p>كل الحقول التي تحتوي علي
								<span style="color:red;font-size:18px;">*</span> حقول ضرورية</p>

						</div>
						<div class="dashboard-wrapper">

							<form id="example-advanced-form" action="{{action('carsController@store')}}" method="POST" enctype="multipart/form-data">
								<h3>خطوة</h3>
								<fieldset>
									<!--first row-->
									<div class="row">
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
												<select class="form-control required" name="ads_type" id="ads_type">
													<option value="" selected disabled>حدد نوع الاعلان</option>
													<option value="للبيع">للبيع</option>
													<option value="للايجار">للايجار</option>

												</select>

											</div>
										</div>
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
												<select class="form-control required" name="condition">
													<option value="" selected disabled>اختار الحالة</option>
													<option value="جديد">جديد</option>
													<option value="مستعمل">مستعمل</option>

												</select>

											</div>
										</div>
										<!-- end col-md-6 -->
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
												<select class="form-control required" name="car_type">
													<option value="" selected disabled>نوع السيارة</option>
													<option value="صالون">صالون </option>
													<option value="هاشباك">هاشباك </option>
													<option value="دفع رباعي">دفع رباعي </option>
													<option value="عائلية">عائلية </option>
													<option value="بوكس">بوكس </option>
													<option value="اخرى">اخرى </option>

												</select>

											</div>

										</div>
										<!-- end col-md-6 -->

									</div>
									<!-- end first row -->
									<!--second row-->
									<div class="row">
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
												<select class="form-control required" name="company" id="company">
													<option value="" selected disabled>اختار الشركة</option>
													{{ $rows = getCarsCompany()}} @foreach($rows as $row)
													<option value="{{$row->id}}">{{$row->company}}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<select class="form-control" name="mark" id="mark">
													<option value="none" selected disabled>اختار الشركة اولا</option>
												</select>
											</div>

										</div>
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
												<select class="form-control required" name="fuel_type">
													<option value="" selected disabled>مواصفات المحرك</option>
													<option value="جاز">جاز </option>
													<option value="بنزين">بنزين</option>
													<option value="اخرى">اخرى</option>

												</select>
											</div>

										</div>
									</div>
									<!--end second row-->
								</fieldset>

								<h3>خطوة</h3>
								<fieldset>
									<!--first row-->
									<div class="row">
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
													<select class="form-control required" name="cylinders">
																<option value="" selected disabled>عدد الاسطوانات</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="8">8</option>

													</select>

											</div>
										</div>
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<select class="form-control required" name="doors">
																<option value="" selected disabled>عدد الابواب</option>
																<option value="3">2</option>
																<option value="4">4</option>
																<option value="6">6</option>

															</select>
											</div>
										</div>
										<!-- end col-md-6 -->
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<select class="form-control required" name="gear_type">
																<option value="" selected disabled>ناقل الحركة</option>
																<option value="مانيول">مانويل</option>
																<option value="اتوماتيك">اتوماتيك</option>

															</select>
											</div>

										</div>
										<!-- end col-md-6 -->

									</div>
									<!-- end first row -->
									<!--second row-->
									<div class="row">
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<select class="form-control required" id="manufacture_date" name="manufacture_date">
																<option value="" selected disabled> تاريخ الصنع</option>
															</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											<select name="mechanical_state" id="mechanical_state" class="required form-control" value="{{ old('mechanical_state') }}">
																<option value="none" selected disabled> حدد الحالة الميكانيكية</option>
																<option value="ممتازة لا تحتاج الي صيانة">ممتازة لا تحتاج الي صيانة</option>
																<option value="توجد اعطال وتم اصلاحها">توجد اعطال وتم اصلاحها</option>
																<option value="توجد اعطال يلزم صيانتها">توجد اعطال يلزم صيانتها</option>
															</select>
											</div>

										</div>
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<select class="form-control required" id="color" name="color">
																<option value="" selected disabled>اللون</option>
																<option value="ابيض">ابيض</option>
																<option value="احمر">احمر</option>
																<option value="اصفر">اصفر</option>
																<option value="اخضر">اخضر</option>
																<option value="اسود">اسود</option>
																<option value="بني">بني</option>
																<option value="رمادي">رمادي</option>
																<option value="برتقالي">برتقالي</option>
																<option value="ذهبي">ذهبي</option>
																<option value="بنفسجي">بنفسجي</option>
																<option value="ازرق">ازرق</option>
																<option value="اخرى">اخرى</option>

															</select>
											</div>

										</div>
									</div>
									<!--end second row-->
								</fieldset>

								<h3>خطوة</h3>
								<fieldset>
									<!--first row-->
									<div class="row">
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<select class="form-control required" name="license">
																<option value="" selected disabled>الترخيص</option>
																<option value="مرخصة">مرخصة </option>
																<option value="غير مرخصة">غير مرخصة </option>

															</select>
											</div>
										</div>
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<select name="city" id="city" class="required form-control" value="{{ old('city') }}">
																<option value="none" selected disabled>اختار المدينة</option>
																{{ $rows = getCity()}} @foreach($rows as $row)
																<option value="{{$row->id}}">{{$row->name}}</option>
																@endforeach </select>


											</div>
										</div>
										<!-- end col-md-6 -->
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<select name="location" id="area" class="form-control" value="{{ old('location') }}">
																<option value="none" selected>جميع المناطق</option>

															</select>
											</div>

										</div>
										<!-- end col-md-6 -->

									</div>
									<!-- end first row -->
									<!--second row-->
									<div class="row">
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<select class="form-control required" name="body">
																<option value="" selected disabled>حالة الهيكل (البودي)</option>
																<option value="لا يوجد تلف">لا يوجد تلف</option>
																<option value="تلف بسيط وتم اصلاحه">تلف بسيط وتم اصلاحة</option>
																<option value=" تلف كبير في الهيكل">تلف كبير في الهيكل </option>

															</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
											<input type="text" name="distance" class="digits required form-control" placeholder="ادخل عدد الكيلومترات" size="6">

											</div>

										</div>
										<div class="col-md-4">
											

											<div class="form-group">
											<input type="text" name="chassis_num" class="digits form-control" placeholder=" ادخل رقم الشاسيه " size="10">

											</div>

										</div>
									</div>
									<!--end second row-->
								</fieldset>

								<h3>خطوة</h3>
								<fieldset>
									<!--first row-->
									<div class="row">
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<input type="text" name="title" class="required form-control" placeholder="اكتب عنوان مناسب للاعلان" size="50">

											</div>
										</div>
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<input type="text" name="price" class="required form-control" placeholder="اكتب السعر بالجنية السوداني" size="50">
											
											</div>
										</div>
										<!-- end col-md-6 -->
										<div class="col-lg-4">
											<span class="req">*</span>
											<div class="form-group">
											<input type="text" id="duration" name="duration" class="digits required form-control" placeholder="ادخل عدد ايام الاعلان" size="4">
															<span>
																<b> المبلغ الكلي (ج.س)</b>
															</span> :
															<span class="total"></span>


											</div>

										</div>
										<!-- end col-md-6 -->

									</div>
									<!-- end first row -->
									<!--second row-->
									<div class="row">
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<input type="file" name="images[]" class="required form-control" placeholder="صورة 1">

											</div>
										</div>
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<input type="file" name="images[]" class="required form-control" placeholder="صورة 2">

											</div>
										</div>
										<div class="col-md-4">
											<span class="req">*</span>

											<div class="form-group">
											<input type="file" name="images[]" class="required form-control" placeholder="صورة 3">

											</div>
										</div>
									</div>
									<!--end second row-->
									
									<div class="row">
										<div class="col-lg-4">
										<input type="file" name="images[]" class="form-control" placeholder="4صورة">

										</div>
										<div class="col-lg-4">
										<input type="file"  name="images[]" class="form-control" placeholder="صورة 5">

										</div>
										<div class="col-lg-4">
										<input type="file" name="images[]" class="form-control" placeholder="صورة 6">

										</div>
									</div>
								</fieldset>

								<h3>النهاية</h3>
								<fieldset>
									<!--first row-->
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
											<lable>اكتب ملخص قصير عن الاعلان</lable>
													<textarea name="desc" style="width:100%;height:150px;text-align:right" class="form-control" size="500">
													
													</textarea>

											</div>
										</div>
										
									</div>
									<!-- end first row -->
									<!--second row-->
									<div class="row">
										<div class="col-lg-12">
											<span class="req">*</span><br>

											<div class="form-group">
											اوافق علي شروط اضافة اعلان في موقع ثري إمز
																<a href="#" data-toggle="modal" data-target="#terms-txt">شروط اضافة اعلان في موقع ثري إمز</a> ?
															<label class="switch-light switch-ios ">
																<input type="checkbox" name="terms" class="required fix_ie8" value="yes">
																<span>
																	<span class="ie8_hide">لا</span>
																	<span>نعم</span>
																</span>
																<a></a>
															</label>
											</div>
										</div>
										
									</div>
									<!--end second row-->
								</fieldset>
								<input type="hidden" name="_token" value="{{ Session::token() }}" />

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection @section('scripts')
<script src="<?php echo asset('form-wizard/js/jquery.validate.js');?>"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
<script src="<?php echo asset('form-wizard/js/jquery.steps.js');?>"></script>
<script src="<?php echo asset('form-wizard/js/script.js');?>"></script>
<script type="text/javascript" src="<?php echo asset('js/custome.js') ?>"></script>
<script type="text/javascript">
	/*
	 *this function is used to make ajax request to fetch all mark 
	 *it send the company id that comes from html select option
	 *to function controller
	 */
	$('#company').on('change', function() {

		$id = $(this).val();
		$.ajax({
			type: 'get',
			url: '{{URL::to('getMark')}}',
			data: {'company_id': $id},
			success: function(data) {
				$('#mark').html(data);
			}
		});
	});

	/*
	 *this function is used to make ajax request to fetch all mark 
	 *it send the company id that comes from html select option
	 *to function controller
	 */

	$('#city').on('change', function() {

		$id = $(this).val();
		$.ajax({
			type: 'get',
			url: '{{URL::to('getLocations')}}',
			data: {'city_id': $id},
			success: function(data) {
				$('#area').html(data);
			}
		});
	});

	/*
	 * dispaly total amount
	 * when advertise days selected entered
	 * it multiply the days * 5 sdg
	 */
	$('#duration').on('keyup', function() {
		$value = $(this).val();
		$('.total').html($value * 5);
	});
</script>
@endsection