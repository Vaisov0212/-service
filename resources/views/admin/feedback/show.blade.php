<?php $title="Xbarlar";?>

@include('admin.app.header')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Xabarni o'qish</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy Sahifa</a></li>
                    <li><a href="{{route('admin.feedback.index')}}">Xabarlar</a></li>
                    <li><a class="active">{{$feedback->id}}</a></li>
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
                                <th scope="row">Ism, familya:</th>
                                <td>{{$feedback->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tashkilot:</th>
                                <td>{{$feedback->organization}}</td>
                            </tr>
                            <tr>
                                <th scope="row">xizmat turi:</th>
                                <td>{{$feedback->service_type}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Manzil:</th>
                                <td>{{$feedback->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Telefon:</th>
                                <td>+998 {{$feedback->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Sana:</th>
                                <td>{{$feedback->created_at->format("Y-d-M  H:m")}}</td>
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
