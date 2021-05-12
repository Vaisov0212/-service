

@include('admin.app.header')
<!-- Page Content -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Murojatlar Royxati</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy</a></li>
                    <li class="active">Murojatlar</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Kelib tushgan barcha murojatlar ro'yhati</h3>
                    <p class="text-muted">Jadval <code>bo'yicha</code></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ism, familya</th>
                                    <th>Xizmat turi</th>
                                    <th>telefon raqami</th>
                                    <th>qabul qilinan vaqt</th>
                                    <th>ko'rish </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $item )
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->service_type}}</td>
                                    <td>+998{{$item->phone}}</td>
                                    <td>{{$item->created_at->format("Y / m / d  H:m")}}</td>
                                    <td> ko'rish</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@include('admin.app.footer')
