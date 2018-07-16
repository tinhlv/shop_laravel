@extends('admin.default')

@section('title', 'Page Title')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>
<!-- Main content -->
<!-- Content Wrapper. Contains page content -->
<div class="content">   
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Danh Mục</th>
                <th style="width: 160px;">Thao Tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $value)
                <tr>
                  <td>{{$value->name}}</td>
                  <td>{{$value->price}}</td>
                  <td><img style="max-width: 150px;" src="{{ asset('assets/img/no-image-available.png') }}" alt=""></td>
                  <td>{{ $value->Categories->name }}</td>
                  <td style="text-align: center;">
                    <a href="" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Xoá
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Danh Mục</th>
                <th>Thao Tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
<!-- /.box -->
@endsection
