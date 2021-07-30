@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('partial.content-header', ['name' => 'category', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{route('categories.edit')}}" class="btn btn-success float-right m-2">Add</a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                
    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Img</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
@foreach ($list as $item)
<tr>
        <td>{{$count++}}</td>
        <td>{{$item -> name}}</td>
        <td><img src="{{ $item -> img}}" width="100px" height="100px"></td>
        <td> <a href="{{ route('categories.delete') }}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td>  <a href="{{ route('categories.edit') }}?id={{$item -> id}}"><button type="button" class="btn btn-info">Sửa</button></a></td>
</tr>                          
@endforeach
    </tbody>
  </table>
  <h2>Deleted list</h2>
  <p>    <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Img</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
@foreach ($list_delete as $item)
<tr>
        <td>{{$count1++}}</td>
        <td>{{$item -> name}}</td>
        <td><img src="{{ $item -> img}}" width="100px" height="100px"></td>
        <td> <a href="{{ route('categories.delete_ht') }}?id={{$item -> id}}"><button type="button" class="btn btn-danger">Xóa</button></a> </td>
        <td>  <a href="{{ route('categories.khoiphuc') }}?id={{$item -> id}}"><button type="button" class="btn btn-info">Khôi phục</button></a></td>
</tr>                          
@endforeach
    </tbody>
  </table></p>

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
