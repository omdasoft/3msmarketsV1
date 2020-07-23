<aside>
	<div class="sidebar-box">
		<div class="user">
			<figure>
				<a href="#">
					<img src="<?php echo asset('img/author/admin.png');?>" alt="">
				</a>
			</figure>
			<div class="usercontent">
				<h3>مرحبا {{Auth::user()->first_name}}</h3>
			</div>
		</div>
		<nav class="navdashboard">
			<ul>
				<li>
					<a class="active" href="{{ url('/dashboard') }}">
						<i class="lni-dashboard"></i>
						<span>لوحة التحكم</span>
					</a>
				</li>
				<li>
					<a href="{{url('/main-category')}}">
						<i class="lni-cog"></i>
						<span>اضافة اعلان</span>
					</a>
				</li>
				<li>
					<a href="{{url('/myads')}}">
						<i class="lni-layers"></i>
						<span>اعلاناتي</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="lni-envelope"></i>
						<span>الرسائل</span>
					</a>
				</li>
				<li>
					<a href="/users/{{Auth::user()->id}}/edit">
						<i class="lni-star"></i>
						<span>اعدادات الحساب</span>
					</a>
				</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="lni-enter"></i>
						<span>تسجيل الخروج</span>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</nav>
	</div>
	<div class="widget">
		<h4 class="widget-title">اعلان</h4>
		<div class="add-box">
			<img class="img-fluid" src="<?php echo asset('img/img1.jpg');?>" alt="">
		</div>
	</div>
</aside>