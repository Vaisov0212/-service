<?php $title="Market";?>

@include('admin.app.header')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Market</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Uy Sahifa</a></li>
                    <li class="active">Market</li>
                   <li> <a href="{{route('admin.market.create')}}" style=" color:rgb(19, 18, 17)" ><i  class=" ti-pencil-alt" ></i>qo'shish</a><li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
                    {{-- alert delete succes and varning --}}
            <div class="row" >
            <div class="col-lg-12">
                @if(session()->has('delete'))
                <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                    {{session()->get('delete')}}
                    </div>
                @endif
            </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                    @if(session()->has('success'))
                    <div class="alert bg-info" role="alert"><em class="fa fa-lg fa-info">&nbsp;</em>
                        {{session()->get('success')}}
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

                    <h3>Sotuvdagi tavarlar ro'yhati</h3>

                    <p class="text-muted">Jadval bo'yicha</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="100px">Foto</th>
                                    <th>Nomi:</th>
                                    <th>narxi:</th>
                                    <th>qo'shilgan sana:</th>
                                    <th>amallar:</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detals as $item )
                                <tr> <td>
                                    <img class="img img-thumbnail" width="80px" src="/upload/shop_images/{{$item->shop_img}}" alt="Rasm topilmadi!">
                                </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->money}} <a class="text-danger" >so'm</a></td>
                                    <td>{{$item->created_at->format("Y - d - M  H:m")}}</td>
                                    <td>
                                        <div style="display:flex; padding-top: 10px; padding-bottom:10px;"  >
                                            <a style="margin-left: 5px" href="{{route('admin.market.show', $item->id)}}" class="btn btn-sm btn-primary">
                                             <i class="ti-comment-alt"></i>
                                            </a>
                                            <a style="margin-left: 5px" href="{{route('admin.market.edit', $item->id)}}" class="btn btn-sm btn-warning">
                                                <i class="ti-pencil" style="color:rgb(7, 7, 7)"></i>
                                               </a>
                                            <form method="POST" action="{{route('admin.market.destroy',$item->id)}}" enctype="multipart/form-data" >
                                              @method('DELETE')
                                              @csrf
                                                <button style="margin-left: 5px" type="submit" class="btn btn-sm btn-danger" >
                                                  <i class="ti-trash"></i>
                                                 </button>
                                            </form>

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
