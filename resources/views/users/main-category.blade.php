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
							<h2 class="dashbord-title">اختار تصنيف عام</h2>
						</div>
						<div class="dashboard-wrapper">
							<nav class="nav-table">
								<ul>
								
									<li>
										<a href="#" data-toggle="modal" data-target="#motorsModal">موتورات</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#realEstateModal">عقارات</a>
									</li>
									<li>
										<a href="#">الكترونيات</a>
									</li>

									<li>
										<a href="#">وظائف</a>
									</li>
									<li>
										<a href="#">اعلانات مبوبة</a>
									</li>
									<li>
										<a href="#">فعاليات ومجتمع</a>
									</li>
									<li>
										<a href="#">اثاثات</a>
									</li>
								</ul>
							</nav>

						</div>
						<!--start of cars modal-->
						<!-- Modal -->
						<div class="modal fade" id="motorsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">اختار التصنيف الفرعي</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<ul>
											<li><a class="dropdown-item" href="{{url('/cars')}}"> سيارات </a></li>
											<li><a class="dropdown-item" href="#">قطع غيار واكسسوارات</a></li>
											<li><a class="dropdown-item" href="#">مواتر وركشات</a></li>
											<li><a class="dropdown-item" href="#">مركبات ثقيلة  </a></li>
											<li><a class="dropdown-item" href="#">ترحيل</a></li>
										</ul>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
									</div>
								</div>
							</div>
						</div>
						<!--end of cars modal-->
						<!--start of real estates modal-->
						<!-- Modal -->
						<div class="modal fade" id="realEstateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">اختار التصنيف الفرعي</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<ul>
											<li><a class="dropdown-item" href="#">اراضي </a></li>
											<li><a class="dropdown-item" href="#">فلل ومنازل </a></li>
											<li><a class="dropdown-item" href="#">شقق</a></li>
											<li><a class="dropdown-item" href="#">بيوت شعبية</a></li>
											<li><a class="dropdown-item" href="#">مخازن ومصانع</a></li>
											<li><a class="dropdown-item" href="#">مشاريع</a></li>
											<li><a class="dropdown-item" href="#">محلات ايجار</a></li>
										</ul>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
									</div>
								</div>
							</div>
						</div>
						<!--end of real estates modal-->
						</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection