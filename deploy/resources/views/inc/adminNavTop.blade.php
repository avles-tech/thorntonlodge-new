<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col menu_fixed">
			<div class="left_col scroll-view">
				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic" style="width: 100%;">
						<a href="/dashboard"><img src="/images/logo.png" alt="{{Auth::user()->name}}" class="img-circle profile_img"></a>
					</div>
				</div>
				<!-- /menu profile quick info -->
				<br/>
				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<ul class="nav side-menu">
							<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/dashboard">Dashboard</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-edit"></i> News <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/categorySection">Categories</a></li>
									<li><a href="/postSection">News</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-image"></i> Gallery <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<!--<li><a href="/gallerytagSection">Categories</a></li>-->
									<li><a href="/gallerySection">Images</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-comment"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/commentSection">Comments</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-building"></i> Room <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/roomSection">Rooms</a></li>
									<li><a href="/roomInfoSection">Room Preference</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-user"></i> Staffs <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/staff">Staff</a></li>
									<li><a href="/staff-category">Category</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-file"></i> Menu <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="/menu">Menu</a></li>
									
								</ul>
							</li>
						</ul>
					</div>

				</div>
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small">
					<a data-toggle="tooltip" data-placement="top" title="Settings">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="FullScreen">
						<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Lock">
						<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
					   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">
			<div class="nav_menu">
				<nav>
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<img src="/Adminassets/images/user.png" alt="{{Auth::user()->name}}">{{Auth::user()->name}}
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
								<li><a href="/dashboard/profile"> Profile</a></li>
								<li>
									<a href="{{ route('logout') }}"
									   onclick="event.preventDefault();
										  document.getElementById('logout-form').submit();">
										<i class="fa fa-sign-out pull-right"></i> Logout
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- /top navigation -->