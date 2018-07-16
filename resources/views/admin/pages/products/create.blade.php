@extends('admin.default')

@section('title', 'Page Title')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Sản phẩm
    <small>Thêm mới</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Sản phẩm</a></li>
    <li class="active">Thêm mới</li>
  </ol>
</section>
<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content">   
  <!-- /.box-header -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-md-offset-3">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm mới sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('postCreate') }}" method="POST" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }}">
                  <label for="exampleInputEmail1">Tên sản phẩm</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name-product" placeholder="Nhập tên sản phẩm...">
                  @if ($errors->has('name'))
                      <div class="help-block">{{ $errors->first('name') }}</div>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('price') ? 'has-error' :'' }}">
                  <label for="exampleInputPassword1">Giá sản phẩm</label>
                  <input type="text" name="price" value="{{ old('price') }}" class="form-control" id="price-product" placeholder="Nhập giá sản phẩm">
                  @if ($errors->has('price'))
                      <div class="help-block">{{ $errors->first('price') }}</div>
                  @endif
                </div>
                <!-- Select multiple-->
                <div class="form-group {{ $errors->has('category') ? 'has-error' :'' }}">
                  <label>Danh Mục</label>
                  <select multiple class="form-control" name="category[]">
                    <option value="0">Áo</option>
                    <option value="1">Quẩn</option>
                    <option value="2">Mũ</option>
                    <option value="3">Nón</option>
                  </select>
                  @if ($errors->has('category'))
                    <div class="help-block">{{ $errors->first('category') }}</div>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('photos') ? 'has-error' :'' }}">
                  <label for="exampleInputFile">Ảnh sản phẩm</label>
                  <input type="file" id="uploadFile" name="photos[]" multiple>
                  <div class="timeline-body">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                  </div>
                  @if ($errors->has('photos'))
                    <div class="help-block">{{ $errors->first('photos') }}</div>
                  @endif
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="isShow" value="1"> Hiển thị
                  </label>
                </div>
              </div>
              <div class="form-group {{ $errors->has('content') ? 'has-error' :'' }}" style="margin: 0 15px;">
                <label for="content-editor">Nội dung</label>
                <textarea id="content-editor" name="content" rows="10" cols="80"></textarea>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Đăng bài</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  <!-- /.box-body -->
</div>
<!-- /.content-wrapper -->
<!-- /.box -->
@endsection
