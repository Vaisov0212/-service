<?php $title="Profil" ?>
@include('admin.app.header')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Profile</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy Sahifa</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
                <div class=" col-md-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    {{-- end alert --}}
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="{{asset('/admin/images/users/genu.jpg')}}">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="/admin/images/users/genu.jpg"
                                        class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">{{$user->name}}</h4>
                                <h5 class="text-white">{{$user->email}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>

                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="ti-twitter"></i></p>

                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="ti-dribbble"></i></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" action="{{route('admin.profile.update', $user->id)}}" method="Post" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12">Ism familya<a class="text-danger">*</a></label>
                            <div class="col-md-12">
                                <input type="text" id="name" name="name" value="{{$user->name}}"
                                    class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email<a class="text-danger">*</a></label>
                            <div class="col-md-12">
                                <input type="email" id="email" name="email" value="{{$user->email}}"
                                    class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Lavozimi<a class="text-danger">*</a></label>
                            <div class="col-md-12">
                                <input disabled type="text" placeholder="{{$user->role}}"
                                    class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Yangilash</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-xs-12" >
                <div class="white-box">
                  <div>
                        <h4>Paro'lni yangilash<a class="text-danger">*</a></h4>
                  </div>
                    <hr>
                    <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{route('admin.profile.edit', $user->id)}}" method="POST" >
                        @csrf
                        @method('HEAD')
                        <div class="form-group">
                            <label for="password" class="col-md-12">yangi paro'l<a class="text-danger">*</a></label>
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-md-12">yangi paro'lni tasdiqlash<a class="text-danger">*</a></label>
                            <div class="col-md-12">
                                <input type="password" name="password_confirmation" class="form-control form-control-line" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Yangilash</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@include('admin.app.footer')
