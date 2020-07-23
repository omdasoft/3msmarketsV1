@extends('layouts.master')
@section('content')
<div class="page-header" style="background: url(img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">تفاصيل الخبر</h2>
<ol class="breadcrumb">
<li><a href="#">الرئيسية /</a></li>
<li class="current">تفاصيل المقال</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12 col-xs-12">

	<div class="blog-post single-post">

		<div class="post-thumb">
			<a href="#"><img class="img-fluid" src="<?php echo asset('img/blog/blog1.jpg');?>" alt=""></a>
			<div class="hover-wrap">
			</div>
		</div>


		<div class="post-content">
			<h2 class="post-title"><a href="single-post.html">Eum Iriure Dolor Duis Autem</a></h2>
			<div class="meta">
				<span class="meta-part"><a href="#"><i class="lni-user"></i> Clasihub</a></span>
				<span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> June 21, 2018</a></span>
				<span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
				<span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>
			</div>
			<div class="entry-summary">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi qui fuga quam hic possimus nihil iure assumenda odio at reprehenderit magni debitis cupiditate quidem nobis <strong>Helvetica</strong> repellendus doloribus, rerum aut in! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat autem accusantium cupiditate animi consectetur. Beatae quia labore, sunt fugit accusantium. Deleniti excepturi ducimus error, ipsam voluptates eius sint odio!</p>
				<p>Lorem ipsum dolor sit amet, <strong>consectetuer</strong> adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. <strong>Investigationes</strong> demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>

	</div>
</div>

<aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

	<div class="widget_search">
		<form id="search-form">
			<input type="search" class="form-control" autocomplete="off" name="s" placeholder="ابحث ...." id="search-input" value="">
			<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
		</form>
	</div>

	<div class="widget categories">
		<h4 class="widget-title">كل التصنيفات</h4>
		<ul class="categories-list">
			<li>
				<a href="#">
				<i class="lni-dinner"></i>
				فندقة وسياحة <span class="category-counter">(5)</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-control-panel"></i>
				الخدمات <span class="category-counter">(8)</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-github"></i>
				الهدايا <span class="category-counter">(2)</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-coffee-cup"></i>
				المطاعم <span class="category-counter">(3)</span>
			</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-home"></i>
				الاثاث <span class="category-counter">(4)</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-pencil"></i>
				الوظائف <span class="category-counter">(5)</span>
				</a>
			</li>
			<li>
				<a href="#">
				<i class="lni-display"></i>
				الكترونيات <span class="category-counter">(9)</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="widget widget-popular-posts">
		<h4 class="widget-title">ذات صلة</h4>
		<ul class="posts-list">
			<li>
				<div class="widget-thumb">
					<a href="#"><img src="<?php echo asset('img/blog/thumb1.jpg');?>" alt="" /></a>
				</div>
				<div class="widget-content">
					<a href="#">Eum Iriure Dolor Duis Autem</a>
					<span><i class="icon-calendar"></i>June 21, 2018</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="widget-thumb">
					<a href="#"><img src="<?php echo asset('img/blog/thumb2.jpg');?>" alt="" /></a>
				 </div>
				<div class="widget-content">
					<a href="#">Consectetuer Adipiscing Elit</a>
					<span><i class="icon-calendar"></i>June 18, 2018</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="widget-thumb">
					<a href="#"><img src="<?php echo asset('img/blog/thumb3.jpg');?>" alt="" /></a>
				</div>
				<div class="widget-content">
					<a href="#">Et Leggings Fanny Pack</a>
					<span><i class="icon-calendar"></i>June 17, 2018</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="widget-thumb">
					<a href="#"><img src="<?php echo asset('img/blog/thumb4.jpg');?>" alt="" /></a>
				</div>
				<div class="widget-content">
					<a href="#">Exercitation Photo Booth</a>
					<span><i class="icon-calendar"></i>June 12, 2018</span>
				</div>
				<div class="clearfix"></div>
			</li>
			<li>
				<div class="widget-thumb">
					<a href="#"><img src="<?php echo asset('img/blog/thumb5.jpg');?>" alt="" /></a>
				</div>
				<div class="widget-content">
					<a href="#">Eum Iriure Dolor Duis Autem</a>
					<span><i class="icon-calendar"></i>June 9, 2018</span>
				</div>
				<div class="clearfix"></div>
			</li>
		</ul>
	</div>
	<div class="widget">
		<h4 class="widget-title">اعلان</h4>
		<div class="add-box">
			<img src="<?php echo asset('img/img1.jpg');?>" alt="">
		</div>
	</div>
</aside>

</div>
</div>
</div>


@endsection