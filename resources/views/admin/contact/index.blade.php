<?php $title="Xbarlar";?>

@include('admin.app.header')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Xabarlar</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy Sahifa</a></li>
                    <li class="active">Xabarlar</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
                    {{-- alert delete succes and varning --}}
            <div class="row">
            <div class="col-lg-12">
                @if(session()->has('delete'))
                <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                    {{session()->get('delete')}}
                    </div>
                @endif
            </div>
            </div>
            {{-- end alert --}}
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Barcha xabaelar ro'yhati</h3>
                    <p class="text-muted">Jadval <code>bo'yicha</code></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ism, familya:</th>
                                    <th>mavzu:</th>
                                    <th>E-manzil:</th>
                                    <th>qabul qilingan vaqt:</th>
                                    <th>amallar:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item )
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->subject}}</td>
                                    <td>+998{{$item->email}}</td>
                                    <td>{{$item->created_at->format("Y - d - M  H:m")}}</td>
                                    <td>
                                        <div style="display:flex; padding-top: 10px; padding-bottom:10px;"  >
                                            <a style="margin-left: 5px" href="{{route('admin.contact-us.show',$item->id)}}" class="btn btn-sm btn-primary">
                                             <i class="ti-comment-alt"></i>
                                            </a>
                                            <form method="POST" action="{{route('admin.contact-us.destroy', $item->id)}}" >
                                              @method('DELETE')
                                              @csrf
                                                <button style="margin-left: 5px" type="submit" class="btn btn-sm btn-danger" >
                                                  <i class="ti-trash"></i>
                                                 </button>
                                            </form>
                                            @if($item->views==true)
                                                <a style="margin-left: 5px; color:rgb(8, 8, 8)" class="btn btn-sm btn-info" ><i class=" ti-check"></i></a>
                                            @endif
                                            @if($item->views==false)
                                            <a style="margin-left: 5px; color: red"" class="btn btn-sm btn-warning" ><i class=" ti-bell">1</i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{$links}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<!-- /#page-wrapper -->
{{-- <script src="/admin/js/modal.js"></script> --}}
@include('admin.app.footer')
