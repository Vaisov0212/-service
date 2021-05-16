
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

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
 integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<section id="wrapper" class="login-register">
    <img id="wrapper" class="login-register" src="/admin/images/big/img1.jpg" >
    <div class="login-box">
      <div class="white-box">
        <form class="form-horizontal m-t-20" id="loginform"  method="POST" action="{{ route('login') }}">
                @csrf
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Kirish</h3>
              <p class="text-muted">Kirishni tasdiqlang !</p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus   placeholder="email">
              @error('email')
                  <span class="invalid-feedback text-danger"  role="alert">
                      <strong>paro'l yoki email xato tekshirib qayta tering</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Paro'l">

                @error('password')
                    <span class="invalid-feedback text-danger"  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-xs-12">
              <div  class="form-check-label">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Saqlash</label>
              </div>
            </div>
            <div class="col-md-7 col-xs-12 m-t-5 text-right">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" id="to-recover" class=" active"><i class="fa fa-lock m-r-5">
                    </i> prolni untdinggizmi ?</a>
                    @endif
                </div>
          </div>
          <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
              <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Kirish</button>
            </div>
          </div>
          <div class="row">

          </div>
          <div class="form-group m-t-30 m-b-0">
            <div class="col-sm-12 text-center">
              <p>Ro'yxatdan o'tmaganmisiz ?  <a href="{{route('register')}}" class="text-primary m-l-5"><b>Ro'yxatdan o'tish</b></a></p>
            </div>
          </div>
        </form>

      </div>
      <footer class="footer text-center">
        <div class="social"> <a href="javascript:void(0)" class="btn  btn-twitter"> <i aria-hidden="true" class="fa fa-twitter"></i> </a> <a href="javascript:void(0)" class="btn  btn-facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
        2021 © Myadmin.</footer>
    </div>
  </section>

<!-- /#wrapper -->
<!-- jQuery -->
<script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!--Nice scroll JavaScript -->
<script src="/admin/js/jquery.nicescroll.js"></script>
<!--Morris JavaScript -->
<script src="/admin/bower_components/raphael/raphael-min.js"></script>
<script src="/admin/bower_components/morrisjs/morris.js"></script>
<!--Wave Effects -->
<script src="/admin/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/admin/js/myadmin.js"></script>
<script src="/admin/js/dashboard1.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
 crossorigin="anonymous">
</script>

</body>

</html>
