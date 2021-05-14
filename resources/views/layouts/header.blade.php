<!DOCTYPE html>
<html lang="Uz">
<head>
	<title>Industry.INC | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Industry.INC HTML Template">
	<meta name="keywords" content="industry, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/css/magnific-popup.css"/>
	<link rel="stylesheet" href="/css/slicknav.min.css"/>
	<link rel="stylesheet" href="/css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


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
				<img src="img/logo.png" alt="">
			</a>
            <a href="index.html">
				Uz
			</a>
            <a href="index.html">
				Ru
			</a>
			<div class="header-right">
				<div class="header-info-box">
                    <div class="hib-icon">
						<img src="img/icons/phone.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>+546 990221 123</h6>
						<p>contact@industryalinc.com</p>
					</div>
				</div>
				<button class="search-switch"><i class="fa fa-search"></i></button>
			</div>
			<!-- Menu -->
			<nav class="site-nav-menu">
				<ul>
					<li @if($title=="index") class="active" @endif><a href="{{route('index')}}">Bosh sahifa</a></li>
					<li @if($title=="about") class="active" @endif><a href="{{route('aboutUs')}}">Biz xaqimizda</a></li>
					<li @if($title=="service") class="active" @endif><a href="{{route('service')}}">Xizmatlar</a>
						<ul class="sub-menu">
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>

				</ul>
			</nav>

		</div>
	</header>
	<!-- Header section end  -->

