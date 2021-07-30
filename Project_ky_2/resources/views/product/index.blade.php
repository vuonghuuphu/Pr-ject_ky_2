@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'product', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('products.edit')}}" class="btn btn-success float-right m-2">Add</a>
            </div>
            
              
            <div class="col-md-12">
    <table class="table table-bordered table-sm" style="overflow: auto;">
    <thead>
      <tr>
        <th>stt</th>
        <th>Name</th>
        <th>Img</th>
        <th>Giá bán</th>
        <th>id danh mục</th>
        <th>sale(%)</th>
        <th>luot thich</th>
        <th>luot mua</th>
        <th>Giá sale</th>
        <th>Noi dung</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        
      </tr>
    </thead>
    <tbody>


  @foreach ($list as $item)
  <tr>
        <td>{{$count++}}</td>
        <td>{{ $item -> name}}</td>
        <td><img src="{{ $item -> thumbnail}}" width="100px" height="100px"></td>
        <td>{{ $item -> price}}</td>
        <td>{{ $item -> category_id}}</td>
        <td>{{ $item -> sale}}</td>
        <td>{{ $item -> luotthich}}</td>
        <td>{{ $item -> luotmua}}</td>
        <td>{{ $item -> giasale}}</td>
        <td>{{ $item -> content}}</td>
        <td><a href="{{route('products.delete')}}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td><a href="{{route('products.edit')}}?id={{$item -> id}}"><button type="button" class="btn btn-info">Sửa</button></a></td>
 </tr>         
        @endforeach
                        
    </tbody>
  </table>
</div>
  <h2>Deleted list</h2>
  <p>    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>stt</th>
        <th>Name</th>
        <th>Img</th>
        <th>Giá bán</th>
        <th>id danh mục</th>
        <th>sale(%)</th>
        <th>luot thich</th>
        <th>luot mua</th>
        <th>Giá sale</th>
        <th>Nội dung</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list_delete as $item)
<tr>
                <td>{{$count++}}</td>
        <td>{{ $item -> name}}</td>
        <td><img src="{{ $item -> thumbnail}}" width="100px" height="100px"></td>
        <td>{{ $item -> price}}</td>
        <td>{{ $item -> category_id}}</td>
        <td>{{ $item -> sale}}</td>
        <td>{{ $item -> luotthich}}</td>
        <td>{{ $item -> luotmua}}</td>
        <td>{{ $item -> giasale}}</td>
        <td>{{ $item -> content}}</td>
        <td> <a href="{{route('products.delete_ht')}}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td>  <a href="{{route('products.khoiphuc')}}?id={{$item -> id}}"><button type="button" class="btn btn-info">Khôi phục</button></a></td>
</tr> 
 @endforeach                         
    </tbody>
  </table></p>

            

            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
