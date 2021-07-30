@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'product', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">                
                <form action="{{route('products.store')}}" method="post"> 
                  <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                  <input style="display: none;" type="text" class="form-control" id="id" name="id" value="{{$id}}">  
                  <input style="display: none;" type="text" class="form-control" id="date" name="d" value="{{$created_at}}">
                  <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$name}}">
                    </div>
                    <div class="form-group">
                    <label for="img">Img:</label>
                    <input type="text" class="form-control" placeholder="Enter img" id="img" name="img" value="{{$img}}">
                    </div>
                    <div class="form-group">
                    <label for="price">Giá bán:</label>
                    <input type="number" class="form-control" placeholder="Enter price" id="price" name="price" value="{{$price}}">
                    </div>
                                        <div class="form-group">
                    <label for="id_ca">id danh mục:</label>
                    <input type="number" class="form-control" placeholder="Enter id_ca" id="id_ca" name="id_ca"
                    value="{{$id_ca}}">
                    </div>
                                        <div class="form-group">
                    <label for="like">Lượt thích:</label>
                    <input type="number" class="form-control" placeholder="Enter like" id="like" name="like"value="{{$like}}">
                    </div>
                                        <div class="form-group">
                    <label for="buy">Lượt mua:</label>
                    <input type="number" class="form-control" placeholder="Enter buy" id="buy" name="buy"value="{{$buy}}">
                    </div>
                                      <div class="form-group">
                    <label for="sale">sale</label>
                    <input type="number" class="form-control" placeholder="Enter sale" id="sale" name="sale"value="{{$sale}}">
                    </div>

                    <div class="form-group">
                    <label for="pricesale">Giá sale:</label>
                    <input type="number" class="form-control" placeholder="Enter price" id="pricesale" name="pricesale" value="{{$pricesale}}">
                    </div>
                    
                    <div class="form-group">
                    <label for="content">Nội dung:</label>
                    <textarea class="form-control" rows="20" id="content" name="content">{{$content}}</textarea>
                    </div>


                <button class="btn btn-success">Submit</button>
              </form>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
