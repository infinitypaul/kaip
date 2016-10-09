<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anywash</title>

    <link href="{{asset('member/assets/common/img/favicon.144x144.png')}}" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="{{asset('member/assets/common/img/favicon.114x114.png')}}" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="{{asset('member/assets/common/img/favicon.72x72.png')}}" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="{{asset('member/assets/common/img/favicon.57x57.png')}}" rel="apple-touch-icon" type="image/png">
    <link href="{{asset('member/assets/common/img/favicon.png')}}" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/jscrollpane/style/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/ladda/dist/ladda-themeless.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/cleanhtmlaudioplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/cleanhtmlvideoplayer/src/player.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/ionrangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/datatables/media/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/c3/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/vendors/chartist/dist/chartist.min.css')}}">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('member/assets/common/css/source/main.css')}}">

    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="{{asset('member/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/spin.js/spin.js')}}"></script>
    <script src="{{asset('member/assets/vendors/ladda/dist/ladda.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/html5-form-validation/dist/jquery.validation.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/autosize/dist/autosize.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js')}}"></script>
    <script src="{{asset('member/assets/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js')}}"></script>
    <script src="{{asset('member/assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('member/assets/vendors/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js')}}"></script>
    <script src="{{asset('member/assets/vendors/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('member/assets/vendors/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('member/assets/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/c3/c3.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/peity/jquery.peity.min.js')}}"></script>
    <!-- v1.0.1 -->
    <script src="{{asset('member/assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- v1.1.1 -->
    <script src="{{asset('member/assets/vendors/gsap/src/minified/TweenMax.min.js')}}"></script>
    <script src="{{asset('member/assets/vendors/hackertyper/hackertyper.js')}}"></script>
    <script src="{{asset('member/assets/vendors/jquery-countTo/jquery.countTo.js')}}"></script>

    <!-- Clean UI Scripts -->
    <script src="{{asset('member/assets/common/js/common.js')}}"></script>
    <script src="{{asset('member/assets/common/js/demo.temp.js')}}"></script>
</head>
<body class="theme-default">
<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="{{ action('HomeController@getIndex') }}" class="logo">
            <img src="{{asset('images/logo_blue.png')}}" alt="Anywash" />
            <img class="logo-inverse" src="{{asset('images/logo_blue.png')}}" alt="Anywash" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            <li class="left-menu-list-active">
                <a class="left-menu-link" href="{{ action('UserController@index') }}">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    <span class="menu-top-hidden">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="{{ action('OrderController@index') }}">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    <span class="menu-top-hidden">Order </span> History
                </a>
            </li>
            <li class="left-menu-list-separator"><!-- --></li>
            <li>
                <a class="left-menu-link" href="{{ action('OrderController@create') }}">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    <span class="menu-top-hidden">Submit </span> Clothing
                </a>
            </li>


        </ul>
    </div>
</nav>
<nav class="top-menu">
    <div class="menu-icon-container hidden-md-up">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="{{ $user->location }}" alt="{{ $user->name }}">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="{{url('dashboard/'.$user->id.'')}}/edit"><i class="dropdown-icon
                    icmn-user"></i>Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Home</div>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="dropdown-icon icmn-exit"></i> Logout</a>
                </ul>
            </div>
        </div>
        <div class="menu-info-block">
            <div class="left">
                <div class="header-buttons">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle dropdown-inline-button" data-toggle="dropdown" aria-expanded="false">
                            <i class="dropdown-inline-button-icon icmn-folder-open"></i>
                            <span class="hidden-lg-down">Hello {{ $user->name }} Welcome To Your Anywash Panel</span>
                            <span class="caret"></span>
                        </a>

                    </div>

                </div>
            </div>
            <div class="left hidden-md-down">
                <div class="example-top-menu-chart">
                    <A href="
                    @if(isset($transaction->id))
                    {{ url('dashboard/order/'.$transaction->id.'') }}
                            @else
                    {{ url('dashboard/order/') }}
                            @endif
                    "> <span class="title">Order</span>
                    <span class="chart" id="topMenuChart">1,3,2,0,3,1,2,3,5,2</span>
                    <span class="count">{{ $cart }} Items</span>
                    </A>
                    <!-- Top Menu Chart Script -->
                    <script>
                        $(function () {

                            var topMenuChart = $("#topMenuChart").peity("bar", {
                                fill: ['#01a8fe'],
                                height: 22,
                                width: 44
                            });

                            setInterval(function() {
                                var random = Math.round(Math.random() * 10);
                                var values = topMenuChart.text().split(",");
                                values.shift();
                                values.push(random);
                                topMenuChart.text(values.join(",")).change()
                            }, 1000);

                        });
                    </script>
                    <!-- Top Menu Chart Script -->
                </div>
            </div>

            <div class="right example-buy-btn">
                <a href="{{ route('contact') }}"  class="btn btn-success-outline
                btn-rounded">
                    Contact us
                </a>
            </div>
        </div>
    </div>
</nav>
<section class="page-content">
    <div class="page-content-inner">
@yield('content')

<!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
        </div>
</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>
