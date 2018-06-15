<!-- Stored in resources/views/layouts/default.blade.php-->
<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>
      @if (\Request::is('/'))
        @include('includes.header')
      @else 
        @include('includes.header2')
      @endif
      <!-- header -->
      @yield('content')
      <!-- content -->
      @include('includes.footer')
      <!-- footer -->
      @include('includes.script')
      <!-- script -->
    </body>
</html>
