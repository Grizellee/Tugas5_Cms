<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src=" {{asset('template/dist/img/heru.png')}} " alt="AdminLTELogo" height="300" width="300">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('logout')}}"> Logout</a>
        </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src=" {{asset('template/dist/img/heru.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Heru Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=" {{asset('aset/img/user3.png')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item mt-2">
            <a href="/product" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tambah Produk
              </p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a href="/category" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tambah Kategori
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{asset('template/plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{asset('template/plugins/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=" {{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- ChartJS -->
<script src=" {{asset('template/plugins/chart.js/Chart.min.js')}} "></script>
<!-- Sparkline -->
<script src=" {{asset('template/plugins/sparklines/sparkline.js')}} "></script>
<!-- JQVMap -->
<script src=" {{asset('template/plugins/jqvmap/jquery.vmap.min.js')}} "></script>
<script src=" {{asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js')}} "></script>
<!-- jQuery Knob Chart -->
<script src=" {{asset('template/plugins/jquery-knob/jquery.knob.min.js')}} "></script>
<!-- daterangepicker -->
<script src=" {{asset('template/plugins/moment/moment.min.js')}} "></script>
<script src=" {{asset('template/plugins/daterangepicker/daterangepicker.js')}} "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=" {{asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}} "></script>
<!-- Summernote -->
<script src=" {{asset('template/plugins/summernote/summernote-bs4.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src=" {{asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{asset('template/dist/js/adminlte.js')}} "></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{asset('template/dist/js/demo.js')}} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{asset('template/dist/js/pages/dashboard.js')}} "></script>
</body>
</html>
