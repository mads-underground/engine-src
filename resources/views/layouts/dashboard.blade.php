
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Pages - Admin Dashboard UI Kit - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="{{('assets/js/QJpHOqznaMvNOv9CGoAdo_yvYKU.js')}}"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="{{asset('assets/vendors/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/assets/plugins/font-awesome/css/font-awesome')}}.css" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/vendors/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/vendors/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/vendors/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/vendors/assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
<link href="{{asset('assets/vendors/assets/plugins/jquery-metrojs/MetroJs.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/vendors/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="{{asset('assets/vendors/pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-header dashboard">

@include('layouts.comp.menu');



<div class="page-container ">

<div class="header ">

<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
</a>

<div class="">
<div class="brand inline   ">
<img src="{{asset('assets/vendors/assets/img/logo.png')}}" alt="logo" data-src="{{asset('assets/vendors/assets/img/logo.png')}}" data-src-retina="{{asset('assets/vendors/assets/img/logo_2x.png')}}" width="78" height="22">
</div>

<ul class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-30 p-r-20">
<li class="p-r-10 inline">


@include('layouts.comp.notification')

</li>
<li class="p-r-10 inline">
<a href="#" class="header-icon pg pg-link"></a>
</li>
<li class="p-r-10 inline">
<a href="#" class="header-icon pg pg-thumbs"></a>
</li>
</ul>

<a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
</div>
<div class="d-flex align-items-center">

<div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
<span class="semi-bold">David</span> <span class="text-master">Nest</span>
</div>
<div class="dropdown pull-right d-lg-block d-none">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 circular inline">
<img src="{{asset('assets/vendors/assets/img/profiles/avatar.jpg')}}" alt="" data-src="{{asset('assets/vendors/assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/vendors/assets/img/profiles/avatar_small2x.jpg')}}" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
<a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
<a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
<a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
<a href="#" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Logout</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div>

<a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
</div>
</div>


<div class="page-content-wrapper ">
	<div class="content sm-gutter">
		<div class="container-fluid padding-25 sm-padding-10">
			@yield('content')
		</div>
	</div>
	<div class=" container-fluid  container-fixed-lg footer">
		<div class="copyright sm-text-center">
			<p class="small no-margin pull-left sm-pull-reset">
				<span class="hint-text">Copyright &copy; 2016 - {{ date('Y') }} </span>
				<span class="font-montserrat">{{ config('app.name', 'MADS Studio') }}</span>.
				<span class="hint-text">All rights reserved. </span>
				<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
			</p>
			<p class="small no-margin pull-right sm-pull-reset">
			Hand-crafted <span class="hint-text">&amp; made with Love</span>
			</p>
			<div class="clearfix"></div>
		</div>
	</div>

</div>

</div>

@include('layouts.comp.quick-view')


@include('layouts.comp.search')



<script src="{{asset('assets/vendors/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/assets/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/assets/plugins/classie/classie.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/mapplic/js/hammer.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/mapplic/js/mapplic.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-metrojs/MetroJs.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/skycons/skycons.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>



<script src="{{asset('assets/vendors/pages/js/pages.js')}}"></script>


<script src="{{asset('assets/vendors/assets/js/scripts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/vendors/assets/js/dashboard.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/assets/js/scripts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/vendors/assets/js/demo.js')}}" type="text/javascript"></script>
</body>
</html>