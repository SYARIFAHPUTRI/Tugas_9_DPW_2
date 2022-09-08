<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SP Store | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('public')}}/assets-admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public')}}/assets-admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets-admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
   @include('admin.section.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.section.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
          <div class="col-md-12 px-5">
              @include('admin.utils.notif')
          </div>
      </div>
  </div>
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('admin.section.control-sidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.section.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('public')}}/assets-admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public')}}/assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('public') }}/assets-admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('public') }}/assets-admin/plugins/assets-admin/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ url('public') }}/assets-admin/dist/js/adminlte.min.js"></script>
<script>
  $(".table-datatable").dataTable();
  </script>
</body>
</html>