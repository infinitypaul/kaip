<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="assets/images/favicon_1.ico">

	<title>My Liberty Family | Dashboard</title>

	<link href="{{asset('assets/plugins/jquery-circliful/css/jquery.circliful.cs')}}s" rel="stylesheet" type="text/css" />

	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script
			src="http://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous"></script>
	<script src="{{asset('assets/js/modernizr.min.js')}}"></script>


</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
	<div class="topbar-main">
		<div class="container">

			<!-- Logo container-->
			<div class="logo">
				<a href="#" class="logo"><i class="md md-equalizer"></i> <span>My Liberty Family</span> </a>
			</div>
			<!-- End Logo container-->

			<div class="menu-extras">

				<ul class="nav navbar-nav navbar-right pull-right">
					<li>
						<form role="search" class="navbar-left app-search pull-left hidden-xs">
							<input type="text" placeholder="Search..." class="form-control">
							<a href=""><i class="fa fa-search"></i></a>
						</form>
					</li>
					<li class="dropdown hidden-xs">
						<a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
						   data-toggle="dropdown" aria-expanded="true">
							<i class="md md-account-balance-wallet"></i> <span
									class="badge badge-xs badge-inverse">4</span>
						</a>
					</li>
					<li class="dropdown hidden-xs">
						<a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
						   data-toggle="dropdown" aria-expanded="true">
							<i class="md md-notifications"></i> <span
									class="badge badge-xs badge-pink">3</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-lg">
							<li class="text-center notifi-title">Notification</li>
							<li class="list-group nicescroll notification-list">
								<!-- list item-->
								<a href="javascript:void(0);" class="list-group-item">
									<div class="media">
										<div class="pull-left p-r-10">
											<em class="fa fa-diamond noti-primary"></em>
										</div>
										<div class="media-body">
											<h5 class="media-heading">A new order has been placed A new
												order has been placed</h5>
											<p class="m-0">
												<small>There are new settings available</small>
											</p>
										</div>
									</div>
								</a>

								<!-- list item-->
								<a href="javascript:void(0);" class="list-group-item">
									<div class="media">
										<div class="pull-left p-r-10">
											<em class="fa fa-cog noti-warning"></em>
										</div>
										<div class="media-body">
											<h5 class="media-heading">New settings</h5>
											<p class="m-0">
												<small>There are new settings available</small>
											</p>
										</div>
									</div>
								</a>

								<!-- list item-->
								<a href="javascript:void(0);" class="list-group-item">
									<div class="media">
										<div class="pull-left p-r-10">
											<em class="fa fa-bell-o noti-success"></em>
										</div>
										<div class="media-body">
											<h5 class="media-heading">Updates</h5>
											<p class="m-0">
												<small>There are <span class="text-primary">2</span> new
													updates available
												</small>
											</p>
										</div>
									</div>
								</a>

							</li>

							<li>
								<a href="javascript:void(0);" class=" text-right">
									<small><b>See all notifications</b></small>
								</a>
							</li>

						</ul>
					</li>

					<li class="dropdown">
						<a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ auth()->user()->location }}" alt="{{ auth()->user()->name }}" class="img-circle"> </a>
						<ul class="dropdown-menu">
							<li><a href="{{url('dashboard/'.auth()->user()->id.'')}}/edit"><i class="ti-user m-r-5"></i> Edit Profile</a></li>
							<li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
							<li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
							<li><a href="{{ url('/logout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
						</ul>
					</li>
				</ul>

				<div class="menu-item">
					<!-- Mobile menu toggle-->
					<a class="navbar-toggle">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
					<!-- End mobile menu toggle-->
				</div>
			</div>

		</div>
	</div>
	<!-- End topbar -->


	<!-- Navbar Start -->
	<div class="navbar-custom">
		<div class="container">
			<div id="navigation">
				<!-- Navigation Menu-->
				<ul class="navigation-menu">
					<li class="has-submenu active">
						<a href="{{ action('UserController@index') }}"><i class="md md-dashboard"></i><b>DASHBOARD</b></a>
					</li>
					<li class="has-submenu active">
						<a href="#"><i class="md md-trending-up"></i><b>FAMILY GENEAOLOGY</b></a>
					</li>
					<li class="has-submenu active">
						<a href="#"><i class="md md-credit-card"></i><b>MY PAYOUTS</b></a>
					</li>
					<li class="has-submenu active">
						<a href="#"><i class="md md-accessibility"></i><b>REQUEST HELP</b></a>
					</li>
					<li class="has-submenu active">
						<a href="{{ action('UserController@GiveHelp') }}"><i class="md md-help"></i><b>GIVE HELP</b></a>
					</li>
					<li class="has-submenu active">
						<a href="#"><i class="md md-perm-media"></i><b>RESOURCES</b></a>
					</li>
					<li class="has-submenu active">
						<a href="{{ url('tickets') }}"><i class="md md-settings"></i><b>SUPPORT</b></a>
					</li>
					<!-- <li class="has-submenu">
                        <a href="#"><i class="md md-color-lens"></i>UI Kit</a>
                        <ul class="submenu">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-panels.html">Panels</a></li>
                            <li><a href="ui-portlets.html">Portlets</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-tabs.html">Tabs & Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-bootstrap.html">BS Elements</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                        </ul>
                    </li> -->

					<!-- <li class="has-submenu">
                        <a href="#"><i class="md md-invert-colors-on"></i>Components</a>
                        <ul class="submenu">
                            <li><a href="components-grid.html">Grid</a></li>
                            <li><a href="components-carousel.html">Carousel</a></li>
                            <li><a href="components-widgets.html">Widgets</a></li>
                            <li><a href="components-nestable-list.html">Nesteble</a></li>
                            <li><a href="components-range-sliders.html">Range Sliders </a></li>
                            <li><a href="components-sweet-alert.html">Sweet Alerts </a></li>
                        </ul>
                    </li> -->

					<!-- <li class="has-submenu">
                        <a href="#"><i class="md md-class"></i>Other</a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Icons</a>
                                <ul class="submenu">
                                    <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-weather.html">Weather Icons</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Forms</a>
                                <ul class="submenu">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-wysiwig.html">WYSIWYG Editor</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Tables</a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Charts</a>
                                <ul class="submenu">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist chart</a></li>
                                    <li><a href="chart-nvd3.html">Nvd3 charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Maps</a>
                                <ul class="submenu">
                                    <li><a href="map-google.html"> Google Map</a></li>
                                    <li><a href="map-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Mail</a>
                                <ul class="submenu">
                                    <li><a href="mail-inbox.html">Inbox</a></li>
                                    <li><a href="mail-compose.html">Compose Mail</a></li>
                                    <li><a href="mail-read.html">View Mail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

					<!-- <li class="has-submenu">
                        <a href="#"><i class="md md-pages"></i>Pages</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">404 Error</a></li>
                                    <li><a href="pages-500.html">500 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->


					<!--  <li class="has-submenu">
                         <a href="#"><i class="md md-folder-special"></i>Extras</a>
                         <ul class="submenu megamenu">
                             <li>
                                 <ul>
                                     <li><a href="extras-timeline.html">Timeline</a></li>
                                     <li><a href="extras-invoice.html">Invoice</a></li>
                                     <li><a href="extras-calendar.html"> Calendar</a></li>
                                     <li><a href="extras-email-template.html">Email template</a></li>
                                 </ul>
                             </li>
                             <li>
                                 <ul>
                                     <li><a href="extras-maintenance.html">Maintenance</a></li>
                                     <li><a href="extras-coming-soon.html">Coming-soon</a></li>
                                     <li><a href="extras-gallery.html"> Gallery</a></li>
                                 </ul>
                             </li>
                         </ul>
                     </li> -->

				</ul>
				<!-- End navigation menu -->
			</div>
		</div>
	</div>
</header>
<!-- End Navigation Bar-->
<div class="wrapper">
	<div class="container">

		<div class="row">
			@include('layouts.side')
			<div class="col-sm-9 col-xs-12">
    @yield('content')

    @yield('footer')
			</div>
		</div>
		<!-- end row -->





	</div> <!-- end container -->
</div>
<!-- End wrapper -->
			<!-- Footer -->
<footer class="footer text-right">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				2016 © My Liberty Family.
			</div>
		</div>
	</div>
</footer>
<!-- End Footer -->


<!-- End wrapper -->



<!-- jQuery  -->

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src={{ asset('assets/js/jquery.nicescroll.js') }}""></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- Counter Up  -->
<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

<!-- circliful Chart -->
<script src="{{ asset('assets/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- skycons -->
<script src="{{ asset('assets/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

<!-- Page js  -->
<script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

<!-- Custom main Js -->
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.counter').counterUp({
			delay: 100,
			time: 1200
		});
		$('.circliful-chart').circliful();
	});

	/* BEGIN SVG WEATHER ICON */
	if (typeof Skycons !== 'undefined'){
		var icons = new Skycons(
						{"color": "#3bafda"},
						{"resizeClear": true}
				),
				list  = [
					"clear-day", "clear-night", "partly-cloudy-day",
					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
					"fog"
				],
				i;

		for(i = list.length; i--; )
			icons.set(list[i], list[i]);
		icons.play();
	};

</script>

</body>
</html>