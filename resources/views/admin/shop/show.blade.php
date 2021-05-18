<?php $title="Market";?>

@include('admin.app.header')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Xabarni o'qish</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy Sahifa</a></li>
                    <li><a href="">Market</a></li>
                    <li><a class="active">ko'rish</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Foto:</th>
                                <td>  <img class="img img-thumbnail" width="160px"  src="/upload/shop_images/{{$detal->shop_img}}" alt="Rasm topilmadi!">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Nomi:</th>
                                <td>{{$detal->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Malumot:</th>
                                <td>{{$detal->description}}</td>
                            </tr>
                            <tr>
                                <th scope="row">narxi:</th>
                                <td>{{$detal->money}} so'm</td>
                            </tr>
                            <tr>
                                <th scope="row">Sana:</th>
                                <td>{{$detal->created_at->format("Y-d-M  H:m")}}</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@include('admin.app.footer')
