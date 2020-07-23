<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">القائمة الرئيسية</li>
			<li class="active treeview menu-open">
				<a href="#">
					<i class="fa fa-dashboard"></i>
					<span>اعدادات الموقع</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="#">
							<i class="fa fa-circle-o"></i> من نحن</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-circle-o"></i>تعديل سعر الاعلان</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-circle-o"></i> شروط النشر</a>
					</li>
					<li>
						<a href="/info/create">
							<i class="fa fa-circle-o"></i> معلومات التواصل</a>
					</li>
				</ul>
			</li>
			<li class="active treeview menu-open">
				<a href="#">
					<i class="fa fa-id-card"></i>
					<span>الاعلانات</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{url('/all-ads')}}">
							<i class="fa fa-circle-o"></i> كل الاعلانات</a>
					</li>
					<li>
						<a href="{{url('/activated-ads')}}">
							<i class="fa fa-circle-o"></i> المفعلة</a>
					</li>
					<li>
						<a href="{{url('/pending-ads')}}">
							<i class="fa fa-circle-o"></i> الغير مفعلة</a>
					</li>
					<li>
						<a href="{{url('/expaired-ads')}}">
							<i class="fa fa-circle-o"></i> منتهية الصلاحية</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-shopping-cart"></i>
					<span>صندوق المفقودات</span>
				</a>
			</li>
			<li>
				<a href="{{url('/all-users')}}">
					<i class="fa fa-users"></i>
					<span>المستخدمين</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-envelope"></i>
					<span>الرسائل</span>
				</a>
			</li>
			<li class="active treeview menu-open">
				<a href="#">
					<i class="fa fa-newspaper-o"></i>
					<span>الاخبار</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="/news/create">
							<i class="fa fa-circle-o"></i> خبر جديد</a>
					</li>
					<li>
						<a href="{{url('/all-news')}}">
							<i class="fa fa-circle-o"></i> كل الاخبار</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-users"></i>
					<span>استخراج تقرير</span>
				</a>
			</li>


		</ul>
	</section>
	<!-- /.sidebar -->
</aside>