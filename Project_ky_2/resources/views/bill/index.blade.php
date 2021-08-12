@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'bill', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
       
@if($t == 0)
<div class="col-md-12">
    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>stt</th>
        <th>id user</th>
        <th>Tên</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Tổng giá</th>
        <th></th>
      </tr>
      <tr>
        
      </tr>
    </thead>
    <tbody>
  @foreach ($list1 as $item)
  <tr>
        <td>{{$count++}}</td>
        <td>{{ $item -> user_id}}</td>
        <td>{{ $item -> name}}</td>
        <td>{{ $item -> address}}</td>
        <td>{{ $item -> sdt}}</td>
        <td>{{ $item -> tong}}</td>
        
        <td><a href="{{route('bills.index')}}?s={{$item -> id}}"><button type="button" class="btn btn-info">Xem chi tiết</button></a></td>
 </tr>         
        @endforeach
                        
    </tbody>
  </table>
  <ul class="pagination justify-content-center" style="margin:20px">
                             {{ $list1 ->links() }}
                             
   </ul>
</div>
@else
<div class="col-md-12">
    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>stt</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Ngày mua</th>
      </tr>
      <tr>
        
      </tr>
    </thead>
    <tbody>
  @foreach ($list1 as $item)
  <tr>
        <td>{{$count++}}</td>
        <td>{{ $item -> name}}</td>
        <td><img src="../public/sanpham/products/{{ $item -> img}}.jpg" width="100px" height="100px"></td>
        <td>{{ $item -> soluong}}</td>
        <td>{{ $item -> created_at}}</td>
 </tr>         
        @endforeach
                        
    </tbody>
  </table>
  <center><a href="{{route('bills.index')}}"><button type="button" class="btn btn-info">Trở về</button></a></center>
  <ul class="pagination justify-content-center" style="margin:20px">
                             {{ $list1 ->links() }}
                             
   </ul>
</div>
@endif  
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

