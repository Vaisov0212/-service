<?php $title="Market";?>

@include('admin.app.header')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Market</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Market</a></li>
                    <li class="active">qo'shish</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
                    {{-- alert delete succes and varning --}}
                    <div class="row">
                        <div class="col-lg-12">
                            @if(count($errors) > 0 )
                            <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                                <ul>
                                     @foreach($errors->all() as $error )
                                     <li>{{$error }} </li>
                                     @endforeach

                               </ul>
                              </div>

                            @endif
                            @if(\Session::has('success'))
                                <div>
                                    <div class="alert alert-success" role="alert"><i class=""></i>
                                    {{\Session::get('success')}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div><!--/.row-->
            {{-- end alert --}}
        </div>
        <!-- row -->
         <!-- row -->
      <div class="row">
        <div class="col-sm-12">
          <div class="white-box p-l-20 p-r-20">
            <h3>sotuvga chiqarish uchun detallarni qo'shish</h3>
            <p class="text-muted m-b-30 font-13">barcha so'ralgan malumotlar bo'sh qolamsli shart !</p>
            <div class="row">
              <div class="col-md-12">
                <form method="POST" action="{{route('admin.market.update',$detal->id)}}" enctype="multipart/form-data"  class="form-material form-horizontal">
                        @csrf
                        @method('PUT')
                  <div class="form-group">
                    <label class="col-md-12">nomi</label>
                    <div class="col-md-12">
                      <input type="text" name="name" value="{{$detal->name}}" class="form-control" placeholder="detal nomi" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12">narxi</label>
                    <div class="col-md-12">
                      <input type="number" name="money" value="{{$detal->money}}" class="form-control" placeholder="narh UZB so'mda" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-12">ma'lumot</label>
                    <div class="col-md-12">
                      <textarea class="form-control" name="description" rows="5"   required>{{$detal->description}}</textarea>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-12">Input Select</label>
                    <div class="col-sm-12">
                      <select name="id_cat" class="form-control">
                          @foreach ($category as $item )
                           <option value="{{$item->id}}" @if($item->id==$detal->id_cat) selected @endif >{{$item->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-12">Rasm yuklash</label>
                    <div class="col-sm-12">
                  <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                      <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new text-danger">tanlash</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" value="{{$detal->shp_img}}" name="select_file"></span>
                        <a href="" class="input-group-addon btn btn-default fileinput-exists"  data-dismiss="fileinput">Remove</a>
                  </div>
                  </div>
                  </div>
                     <button type="submit"  class="btn btn-info"  >saqlash</button>

                  <div class="form-group ">
                    <div class="col-sm-12">
                      <span class="help-block"><small>barcha soralgan malumotlarni to'g'ri kiritin saqlash tugmasini bosing</small></span> </div>
                  </div>
                </form>
              </div>
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
