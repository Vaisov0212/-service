<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">

    <title>My Admin Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="/admin/image/png" sizes="16x16" href="/admin/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/admin/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/css/style.css" rel="stylesheet">

</head>

<body>
 <!-- Preloader -->
<div class="preloader" style="display: none;">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href=""><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href=""><i class="ti-bell" style="color:blue   "  ></i> <span class="badge badge-xs badge-warning">5</span></a>

          <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->

        <!-- /.dropdown -->
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right active">
        <li class="in">
          <form role="search" class="app-search hidden-xs">
            <input type="text" placeholder="Search..." class="form-control">
            <a href="" class="active"><i class="ti-search"></i></a>
          </form>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href=""> <img src="/admin/images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Maruti</b> </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href=""><i class="ti-user"></i> My Profile</a></li>
            <li><a href=""><i class="ti-email"></i> Inbox</a></li>
            <form action="{{route('logout')}}" method="post" >
                @csrf
            <li><button class="btn btn-warning" style="margin-left:15px"  ><i class="ti-power-off" style="color:rgb(218, 29, 23)" ></i><a style="margin-left:10px"> chiqish</a></button></li>
            </form>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="dashboard.html" class="waves-effect ">
                            <i class="glyphicon glyphicon-fire fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="profile.html" class="waves-effect">
                            <i class="ti-user fa-fw"></i>Profile</a>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="basic-table.html" class="waves-effect">
                            <i class="ti-layout fa-fw"></i>Basic-Table</a>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="themifyicon.html" class="waves-effect">
                            <i class="ti-face-smile fa-fw"></i> Icons</a>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="map-google.html" class="waves-effect">
                            <i class="ti-location-pin fa-fw"></i> Google Map</a>
                    </li>
                    <li>
                        <a @if($title=="Market") class="active" @endif  href="{{route('admin.market.index')}}" class="waves-effect">
                            <i class="ti-location-pin fa-fw"></i>Market</a>
                    </li>
                    <li>
                        <a @if($title=="Xbarlar") class="active" @endif  href="blank.html" class="waves-effect">
                            <i class="ti-email fa-fw"></i> Xbarlar</a>
                    </li>
                    <li>
                        <a @if($title=="Dashboard") class="active" @endif  href="404.html" class="waves-effect">
                            <i class="ti-info fa-fw"></i> Error 404</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
