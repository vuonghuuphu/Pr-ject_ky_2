@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'menu', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('menus.edit')}}" class="btn btn-success float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
    <table class="table table-bordered table-sm" style="overflow: auto;">
    <thead>
      <tr>
        <th>stt</th>
        <th>Tiêu đề</th>
        <th>Img</th>
        <th>tóm tắt</th>
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
        <td>{{ $item -> title}}</td>
        <td><img src="../public/sanpham/tintuc/{{ $item -> thumbnail}}.jpg" width="100px" height="100px"></td>
        <td>{{ $item -> demo}}</td>
        <td><a href="{{route('menus.delete')}}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td><a href="{{route('menus.edit')}}?id={{$item -> id}}"><button type="button" class="btn btn-info">Sửa</button></a></td>
 </tr>         
        @endforeach
                        
    </tbody>
  </table>
<ul class="pagination justify-content-center" style="margin:20px">
                             {{ $list ->links() }}
                             
  </ul>
          <div class="col-md-12">
            <h2>Delete list</h2>
    <table class="table table-bordered table-sm" style="overflow: auto;">
    <thead>
      <tr>
        <th>stt</th>
        <th>Tiêu đề</th>
        <th>Img</th>
        <th>tóm tắt</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        
      </tr>
    </thead>
    <tbody>


 @foreach ($list_delete as $item)
  <tr>
        <td>{{$count++}}</td>
        <td>{{ $item -> title}}</td>
        <td><img src="../public/sanpham/tintuc/{{ $item -> thumbnail}}.jpg" width="100px" height="100px"></td>
        <td>{{ $item -> demo}}</td>
        <td><a href="{{route('menus.delete_ht')}}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td><a href="{{route('menus.khoiphuc')}}?id={{$item -> id}}"><button type="button" class="btn btn-info">Khôi phục</button></a></td>
 </tr>         
        @endforeach
                        
    </tbody>
  </table>
  <ul class="pagination justify-content-center" style="margin:20px">
                             
                             
  </ul>
</div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
