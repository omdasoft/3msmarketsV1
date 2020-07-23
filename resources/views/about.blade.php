@extends('layouts.master')
@section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">من نحن</h2>
                    <ol class="breadcrumb">
                        <li><a href="#"> الرئيسية / </a> </li>
                        <li class="current"> من نحن </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="about-wrapper">
                    <h2 class="intro-title">عن ثري إمز</h2>
                    <p class="intro-desc">
                        3MS موقع إلكتروني رائد للإعلانات المبوبة . والأول من نوعه في السودان يهدف لترسيخ مفهوم التجارة الإلكترونية وتسهيل عملية البيع والشراء لاصناف متعددة في سوق كما يهدف إلى توفير الوقت والجهد لعملائه الكرام بحيث أنه يتم الوصول للمنتجات المطلوبة من أي مكان داخل وخارج السودان ويخدم أيضا مفهوم مشاركة المقتنيات التي قد لا يحتاجها البعض بحيث يمكن أن يستفيد منها البعض الآخرهدفنا أن تكون ثري إمز المنصة الأولى من نوعها وأن تعود بالفائدة على الكثير من التجار والملاك بشكل مباشر دون الحاجة لوسطاء بحيث تكون هناك مصداقية في الإعلان والبحث وحرية في الإختيار وتواصل مباشر بين البائع والمشتري.
                    </p>
                    <a href="#" class="btn btn-common btn-lg">اعلن الان</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12">
            <img class="img-fluid" src="<?php echo asset('img/about/about.png');?>" alt="">
            </div>
        </div>
    </div>
</section>


<section class="counter-section section-padding">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6 work-counter-widget">
<div class="counter">
<div class="icon"><i class="lni-layers"></i></div>
<h2 class="counterUp">8325</h2>
<p>عدد الاعلانات</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget">
<div class="counter">
<div class="icon"><i class="lni-users"></i></div>
<h2 class="counterUp">5487</h2>
<p>عدد الاعضاء</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget">
<div class="counter">
<div class="icon"><i class="lni-briefcase"></i></div>
<h2 class="counterUp">2012</h2>
<p>عدد المبيعات</p>
</div>
</div>

<div class="col-md-3 col-sm-6 work-counter-widget">
<div class="counter">
<div class="icon"><i class="lni-map"></i></div>
<h2 class="counterUp">200</h2>
<p>المواقع</p>
</div>
</div>
</div>
</div>
</section>

<!--services section-->
<section class="services bg-light section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="section-title">مميزاتنا</h3>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.2s">
					<div class="icon">
						<i class="lni-leaf"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">سرعة انتشار الاعلان</a></h3>
						<p>نقوم بشر الاعلان في مختلف وسائل التواصل الاجتماعي مما يضمن وصول الاعلان الي كمية </p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.4s">
					<div class="icon">
						<i class="lni-display"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">اسعار مخفضة</a></h3>
						<p>نحن نمكن عملائنا من اعلان منتجاتهم باسعار مخفضة كما توجد فترة لعرض المنتجات مجانا</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 col-xs-12">
				<div class="services-item wow fadeInRight" data-wow-delay="0.6s">
					<div class="icon">
						<i class="lni-color-pallet"></i>
					</div>
					<div class="services-content">
						<h3><a href="#">العرض المميز للمنتجات</a></h3>
						<p>نحن نهتم بطريقة عرض المنتجات في الموقع وتطبيقات الهواتف بطريقة جيدة</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection