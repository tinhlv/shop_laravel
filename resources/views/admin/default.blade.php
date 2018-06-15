<!-- Stored in resources/views/admin/layouts/default.blade.php-->
@include('admin.layouts.head')
    <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
        @include('admin.layouts.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.footer')
        <!-- Control Sidebar -->
        @include('admin.layouts.control_sidebar')
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
      @include('admin.layouts.script')
  </body>
</html>
