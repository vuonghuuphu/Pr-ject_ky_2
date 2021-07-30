@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'category', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">                
                <form action="{{route('categories.store')}}" method="post"> 
                  <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
<input style="display: none;" type="text" class="form-control" id="id" name="id" value="{{$id}}">  
<input style="display: none;" type="text" class="form-control" id="date" name="d" value="{{$created_at}}">               
<div class="form-group">
<label for="name">Tên danh mục:</label>
<input type="text" class="form-control" placeholder="Nhập tên danh mục" id="name" name="n" value="{{$name}}">
</div>
<div class="form-group">
<label for="img">Img:</label>
<input type="text" class="form-control" placeholder="link hình ảnh" id="img"name="i" value="{{$img}}">
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
