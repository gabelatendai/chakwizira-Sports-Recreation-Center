<!DOCTYPE html>
<html class="sidebar sidebar-discover">
<head>
	<title>CSRC</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/components/library/bootstrap/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/admin/module.admin.stylesheet-complete.sidebar_type.discover.min.css')}}"/>

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<script src="{{asset('assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2')}}"></script>
	<script src="{{asset('assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script>
		if ( /*@cc_on!@*/ false && document.documentMode === 10)
		{
			document.documentElement.className += ' ie ie10';
		}
	</script>
</head>

<body class=" theme-blue">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden">
	<!-- Sidebar Menu -->
	<div id="menu" class="hidden-print hidden-xs ">
		<div id="sidebar-discover-wrapper">
			<ul class="list-unstyled">
				<li class="active">
					<a href="#sidebar-discover-social" class="glyphicons home " data-toggle="sidebar-discover">
						<span class="badge pull-right badge-primary hidden-md">7</span><i></i>
						<span>Overview</span>
					</a>
					<div id="sidebar-discover-social" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Overview</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li class="active"><a href="{{'/users'}}">Users</a>
							</li>
							<li><a href="{{'/services/index'}}">Services</a>
							</li>
							<li><a href="{{'/team'}}">Team</a>
							</li>
							<li><a href="{{'/banners'}}">Banners</a>
							</li>
							<li><a href="{{'/settings'}}">Site Information</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-media" class="glyphicons picture" data-toggle="sidebar-discover">
						<span class="badge pull-right badge-primary hidden-md">2</span><i></i>
						<span>Media</span>
					</a>
					<div id="sidebar-discover-media" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Media</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/gallery'}}"><i class="fa fa-camera"></i> Photo Gallery</a>
							</li>
							<li><a href="{{'/gallery/create'}}"><i class="fa fa-camera"></i> Add Photo </a>
							</li>
                            <li><a href="{{'/gallery/list'}}"><i class="fa fa-camera"></i>Gallery </a>
                            </li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-email" class="glyphicons picture" data-toggle="sidebar-discover"><i></i><span>Homepage Banners</span></a>
					<div id="sidebar-discover-email" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Email</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/banners'}}"><i class="fa fa-envelope"></i> Banners</a>
							</li>
							<li><a href="{{'/banners/create'}}"><i class="fa fa-pencil"></i> Add Banner</a>
							</li>
							<li><a href="{{'/statics'}}"><i class="fa fa-envelope"></i>Static Banners</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-courses" class="glyphicons crown" data-toggle="sidebar-discover"><i></i><span>Team</span></a>
					<div id="sidebar-discover-courses" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Team</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/tech-team'}}"><i class="fa fa-user"></i>Technical Team</a>
							</li>
							<li><a href="{{'/team'}}"><i class="fa fa-user"></i>Players </a>
							</li>
							<li><a href="{{'/team/gallery'}}"><i class="fa fa-camera"></i>Gallery </a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-account" data-toggle="sidebar-discover" class="glyphicons user"><i></i><span>Users</span></a>
					<div id="sidebar-discover-account" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Account</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/admin/users'}}"><i class="fa fa-user"></i> Users</a>
							</li>
						<!--	<li><a href="my_account.html?lang=en"><i class="fa fa-user"></i> My Account</a>
							</li>
							<li>
								<a href="login.html?lang=en" class="no-ajaxify"><i class="fa fa-lock"></i> Login</a>
							</li>
							<li>
								<a href="signup.html?lang=en" class="no-ajaxify"><i class="fa fa-pencil"></i> Signup</a>
							</li>-->
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-support" data-toggle="sidebar-discover" class="glyphicons life_preserver"><i></i><span>Services</span></a>
					<div id="sidebar-discover-support" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Services</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li>
								<a href="{{'/services/index'}}">
									<span class="badge pull-right badge-inverse">45</span><i class="fa fa-ticket"></i>
									<span>Services</span>
								</a>
							</li>
							<li>
								<a href="{{'/services/create'}}"><i class="fa fa-folder-o"></i>
									<span>Add New Service</span>
								</a>
							</li>
							<li>
								<a href="{{'/servicespiks/index'}}"><i class="fa fa-folder-o"></i>
									<span> Services Picture</span>
								</a>
							</li>
							<li>
								<a href="{{'/servicespiks/create'}}"><i class="fa fa-folder-o"></i>
									<span>Add Picture</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<!--<li>
					<a href="#sidebar-discover-medical" data-toggle="sidebar-discover" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
					<div id="sidebar-discover-medical" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Medical App</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li class="">
								<a href="medical_overview.html?lang=en"><i class="fa fa-medkit"></i> Overview</a>
							</li>
							<li class="">
								<a href="medical_patients.html?lang=en">
									<span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-user-md"></i> Patients</a>
							</li>
							<li class="">
								<a href="medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i> Appointments</a>
							</li>
							<li class="">
								<a href="medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i> Memos</a>
							</li>
							<li class="border-bottom-none">
								<a href="medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Metrics</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-maps" class="glyphicons google_maps" data-toggle="sidebar-discover"><i></i><span>Maps</span></a>
					<div id="sidebar-discover-maps" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Maps</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="maps_google.html?lang=en"><i class="fa fa-map-marker"></i> Google Maps</a>
							</li>
							<li><a href="maps_vector.html?lang=en"><i class="fa fa-map-marker"></i> Vector Maps</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-content" data-toggle="sidebar-discover" class="glyphicons notes_2"><i></i><span>Content</span></a>
					<div id="sidebar-discover-content" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Content</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="news.html?lang=en"><i class="fa fa-file-text-o"></i> News</a>
							</li>
							<li><a href="faq.html?lang=en"><i class="fa fa-question-circle"></i> FAQ</a>
							</li>
							<li><a href="search.html?lang=en"><i class="fa fa-search"></i> Search</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-financial" data-toggle="sidebar-discover" class="glyphicons calculator"><i></i><span>Financial</span></a>
					<div id="sidebar-discover-financial" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Financial</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="invoice.html?lang=en"><i class="fa fa-file-text-o"></i> Invoice</a>
							</li>
							<li><a href="finances.html?lang=en"><i class="fa fa-legal"></i> Finances</a>
							</li>
							<li><a href="bookings.html?lang=en"><i class="fa fa-ticket"></i> Bookings</a>
							</li>
						</ul>
					</div>
				</li>-->
				<li>
					<a href="#sidebar-discover-shop" data-toggle="sidebar-discover" class="glyphicons shopping_cart"><i></i><span>News</span></a>
					<div id="sidebar-discover-shop" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>News And Updates</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/news'}}"><i class="fa fa-list"></i><span>News And Events</span></a>
							</li>
							<li><a href="{{'/news/create'}}"><i class="fa fa-edit"></i><span>Update News </span></a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#sidebar-discover-manage" class="glyphicons wrench" data-toggle="sidebar-discover"><i></i><span>Settings</span></a>
					<div id="sidebar-discover-manage" class="sidebar-discover-menu">
						<div class="innerAll text-center border-bottom text-muted-dark">
							<strong>Settings</strong>
							<button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
							</button>
						</div>
						<ul class="animated fadeIn">
							<li><a href="{{'/settings'}}"><i class="fa fa-user"></i> Site Information</a>
							</li>
						</ul>
					</div>
				</li>


				<li>  <a  href="{{ route('logout') }}" class="glyphicons lock"
						  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						<i class="fa fa-lock"></i> {{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>
			</ul>
		</div>
	</div>
	<!-- // Sidebar Menu END -->
	<div id="content">
	<nav class="navbar hidden-print main " role="navigation">
		<div class="navbar-header pull-left">
			<div class="user-action user-action-btn-navbar pull-left border-right">
				<button class="btn btn-sm btn-navbar btn-inverse btn-stroke"><i class="fa fa-bars fa-2x"></i>
				</button>
			</div>
		</div>
		<ul class="main pull-right ">
			<!--	<li class="dropdown notif notifications hidden-xs">
				<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-fill"></i> <span class="label label-danger">5</span></a>
				<ul class="dropdown-menu chat media-list pull-right">
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object thumb" src="../assets/images/people/100/15.jpg"
								 alt="50x50" width="50" />
						</a>
						<div class="media-body">
							<span class="label label-default pull-right">5 min</span>
							<h5 class="media-heading">Adrian D.</h5>
							<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
								elit.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object thumb" src="../assets/images/people/100/16.jpg"
								 alt="50x50" width="50" />
						</a>
						<div class="media-body">
							<span class="label label-default pull-right">2 days</span>
							<h5 class="media-heading">Jane B.</h5>
							<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
								elit.</p>
						</div>
					</li>
					<li class="media">
						<a class="pull-left" href="#">
							<img class="media-object thumb" src="../assets/images/people/100/17.jpg"
								 alt="50x50" width="50" />
						</a>
						<div class="media-body">
							<span class="label label-default pull-right">3 days</span>
							<h5 class="media-heading">Andrew M.</h5>
							<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing
								elit.</p>
						</div>
					</li>
					<li><a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a>
					</li>
				</ul>
			</li>-->

			<li class="dropdown username">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-user"></i>{{ Auth::user()->name }}
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu pull-right">
					<li><a href="{{'/admin/users'}}" class="glyphicons user"><i></i> Users</a>
					</li>
					<li><a href="#" class="glyphicons envelope"><i></i>Profile</a>
					</li>
					<li><a href="{{'/settings'}}" class="glyphicons settings"><i></i>Settings</a>
					</li>

					<li ><a  href="{{ route('logout') }}" class="glyphicons lock no-ajaxify"
								   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form></li>
				</ul>
			</li>
		</ul>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="">
					<a data-toggle="" class="" href="{{'/admin/index'}}">Dashboard</a>
				</li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="">Gallery <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{'/gallery/list'}}">Photo Gallery</a>
						</li>
					</ul>
				</li>
				<li class=" hidden-xs   hidden-sm">
					<ul class="colors pull-left">
						<li class="active">
							<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=style-default"
							   style="background-color: #3695d5" class="no-ajaxify">
								<span class="hide">style-default</span>
							</a>
						</li>
						<li>
							<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=alizarin-crimson"
							   style="background-color: #F06F6F" class="no-ajaxify">
								<span class="hide">alizarin-crimson</span>
							</a>
						</li>
						<li>
							<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=green-army"
							   style="background-color: #9FB478" class="no-ajaxify">
								<span class="hide">green-army</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="" data-toggle="dropdown" class="dropdown-toggle">
								<span class="color inverse"></span>
								<span class="color danger"></span>
								<span class="color success"></span>
								<span class="color info"></span>
							</a>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=brown">
                                                <span class="color" style="background-color: #d39174"
													  class="no-ajaxify"></span>brown</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=purple-gray">
                                                <span class="color" style="background-color: #AF86B9"
													  class="no-ajaxify"></span>purple-gray</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=blue-gray">
                                                <span class="color" style="background-color: #7293CF"
													  class="no-ajaxify"></span>blue-gray</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=purple-wine">
                                                <span class="color" style="background-color: #CC6788"
													  class="no-ajaxify"></span>purple-wine</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=black-and-white">
                                                <span class="color" style="background-color: #979797"
													  class="no-ajaxify"></span>black-and-white</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=amazon">
                                                <span class="color" style="background-color: #8BC4B9"
													  class="no-ajaxify"></span>amazon</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=amber">
                                                <span class="color" style="background-color: #CACA8A"
													  class="no-ajaxify"></span>amber</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=android-green">
                                                <span class="color" style="background-color: #A9C784"
													  class="no-ajaxify"></span>android-green</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=antique-brass">
                                                <span class="color" style="background-color: #B3998A"
													  class="no-ajaxify"></span>antique-brass</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=antique-bronze">
                                                <span class="color" style="background-color: #8D8D6E"
													  class="no-ajaxify"></span>antique-bronze</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=artichoke">
                                                <span class="color" style="background-color: #B0B69D"
													  class="no-ajaxify"></span>artichoke</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=atomic-tangerine">
                                                <span class="color" style="background-color: #F19B69"
													  class="no-ajaxify"></span>atomic-tangerine</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bazaar">
                                                <span class="color" style="background-color: #98777B"
													  class="no-ajaxify"></span>bazaar</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bistre-brown">
                                                <span class="color" style="background-color: #C3A961"
													  class="no-ajaxify"></span>bistre-brown</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bittersweet">
                                                <span class="color" style="background-color: #d6725e"
													  class="no-ajaxify"></span>bittersweet</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=blueberry">
                                                <span class="color" style="background-color: #7789D1"
													  class="no-ajaxify"></span>blueberry</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=bud-green">
                                                <span class="color" style="background-color: #6fa362"
													  class="no-ajaxify"></span>bud-green</a>
								</li>
								<li>
									<a href="?module=admin&page=index&url_rewrite=&build=&v=v1.0.3-rc2&sidebar_type=discover&skin=burnt-sienna">
                                                <span class="color" style="background-color: #E4968A"
													  class="no-ajaxify"></span>burnt-sienna</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
@yield('content')

	<!-- // Sidebar menu & content wrapper END -->
		<div id="footer" class="hidden-print">
			<!--  Copyright Line -->  <div class="cr order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i>Chakwizira Sports & Recreation Centre Admin Dashboard
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>

	<!-- // Footer END -->
</div>
<script data-id="App.Config">
	var App = {};
	var basePath = '',
		commonPath = '../assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = '../assets/components/';
	var primaryColor = '#3695d5',
		dangerColor = '#b55151',
		successColor = '#609450',
		infoColor = '#4a8bc2',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	var themerPrimaryColor = primaryColor;
</script>
	<script>

		@if(Session::has('success'))

		toastr.success("{{Session::get('success')}}")

		@endif

		@if(Session::has('info'))

		toastr.info("{{Session::get('info') }}")

		@endif
	</script>


	<script src="{{ asset('js/toastr.min.js') }}"></script>

<script src="{{asset('assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/core/js/animations.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.resize.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/lib/plugins/jquery.flot.tooltip.min.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/custom/js/flotcharts.common.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-line-2.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-mixed-1.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-bars-horizontal.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/easy-pie/assets/lib/js/jquery.easy-pie-chart.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/easy-pie/assets/custom/easy-pie.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/sparkline/jquery.sparkline.min.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/sparkline/sparkline.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/modules/admin/maps/vector/assets/lib/jquery-jvectormap-1.2.2.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/modules/admin/maps/vector/assets/lib/maps/jquery-jvectormap-world-mill-en.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/modules/admin/maps/vector/assets/custom/maps-vector.world-map-markers.init.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/core/js/sidebar.main.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/core/js/sidebar.discover.init.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/core/js/core.init.js?v=v1.0.3-rc2')}}"></script>
	<script src="{{asset('assets/components/common/gallery/gridalicious/assets/lib/jquery.gridalicious.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/common/gallery/gridalicious/assets/custom/gridalicious.init.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/common/gallery/blueimp-gallery/assets/lib/js/blueimp-gallery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
	<script src="{{asset('assets/components/common/gallery/blueimp-gallery/assets/lib/js/jquery.blueimp-gallery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>


</body>
</html>