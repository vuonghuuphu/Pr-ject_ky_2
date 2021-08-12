@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
 
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partial.content-header', ['name' => 'menu', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">                
                <form action="{{route('menus.store')}}" method="post"> 
                  <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                  <input style="display: none;" type="text" class="form-control" id="id" name="id" value="{{$id}}">  
                  <input style="display: none;" type="text" class="form-control" id="date" name="d" value="{{$created_at}}">
                  <div class="form-group">
                    <label for="name">Tiêu đề</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$title}}">
                    </div>
                    <div class="form-group">
                    <label for="thumbnail">Img:</label>
                    <input type="text" class="form-control" placeholder="Enter thumbnail" id="thumbnail" name="thumbnail" value="{{$thumbnail}}">
                    </div>
                    <div class="form-group">
                    <label for="demo">tóm tắt:</label>
                    <input type="text" class="form-control" placeholder="Enter tóm tắt" id="demo" name="demo" value="{{$demo}}">
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