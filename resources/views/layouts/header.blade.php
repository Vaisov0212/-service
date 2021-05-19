<!DOCTYPE html>
<html lang="Uz">
<head>
	<title>Industry.INC | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Industry.INC HTML Template">
	<meta name="keywords" content="industry, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="{{asset('img/favicon.ico" rel="shortcut icon')}}"/>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

	{{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan%20hazorasp%20karvak&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">interactive google maps for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}}

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<header class="header-section clearfix">
		<div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="col-md-6 text-md-right">

					</div>
				</div>
			</div>
		</div>
		<div class="site-navbar">
			<!-- Logo -->
			<a href="index.html" class="site-logo">
				<img src="{{asset('img/logo.png')}}" alt="">
			</a>
            <a href="index.html">
				Uz
			</a>
            <a href="index.html">
				Ru
			</a>
			<div class="header-right">
				<button class="search-switch"><i class="fa fa-search"></i></button>
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li @if($title=="index") class="active" @endif><a href="{{route('index')}}">Bosh sahifa</a></li>
					<li @if($title=="about") class="active" @endif><a href="{{route('aboutUs')}}">Biz xaqimizda</a></li>
					<li @if($title=="service") class="active" @endif><a href="{{route('service')}}">Xizmatlar</a></li>
                    <li @if($title=="Market") class="active" @endif><a href="{{route('market',$ctegoryId=0)}}">Market</a></li>
                    <li @if($title=="Bog`lanish") class="active" @endif><a href="{{route('contact')}}">Bog'lanish</a></li>


                    @if($user==null)
					<li ><a href="{{route('login')}}" >kirish</a></li>
					<li><a {{route('register')}} >ro'yhatdan o'tish</a></li>
                     @endif
                     @auth
                    <li><a >{{$user->name}}</a>
						<ul class="sub-menu" >
                            <li><button class="btn btn-succes"  type="submit"><a >profil</a></button></li>
							<li><button class="btn btn-succes"  type="submit"><a >savatcha</a></button></li>
                            <form method="post" action="{{route('logout')}}">
                             @csrf

                            <li><button class="btn btn-succes"  type="submit"><a >chiqish</a></button></li>
                            </form>

						</ul>
                        @endauth
					</li>

				</ul>
			</nav>

		</div>
	</header>
	<!-- Header section end  -->

