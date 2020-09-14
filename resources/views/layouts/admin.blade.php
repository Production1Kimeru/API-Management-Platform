<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>API Management | Kimeru</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('adminlte/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <!-- TimePicker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />



</head>
<body class="hold-transition sidebar-mini sidebar-closed sidebar-collapse">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/overview" class="nav-link">Overview</a>
            </li>
        </ul>

{{--        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>--}}

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-gradient-danger">
            <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">

            <p>
                {{ Auth::user()->name }} - Web Developer
              <small>Member since Nov. 2020</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
              <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>

          </li>
        </ul>
      </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/overview" class="brand-link">
            <img src="{{asset('/img/brand/icon128.png')}}" alt="Kimeru Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Kimeru</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-universal-access nav-icon"></i>
                                    <p>
                                        Universal
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/overview/accuweather" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Accu Weather</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Rails</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="far fa-newspaper nav-icon"></i>
                                    <p>
                                        News
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>De Tijd</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-random nav-icon"></i>
                                    <p>
                                        Random
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Random Jokes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="far fa-building nav-icon"></i>
                                    <p>
                                        Specific Companies
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-dot-circle nav-icon"></i>
                                            <p>Appointment Dentist</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="https://kimeru.be">Kimeru.be</a></strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/select2/js/select2.js')}}"></script>
{{--<script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/select2/js/select2.full.js')}}"></script>--}}

<!-- TimePicker -->
<script type="text/javascript" src="{{asset('adminlte/plugins/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('adminlte/plugins/moment/moment-with-locales.js')}}"></script>
<script type="text/javascript" src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker11').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker12').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker21').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker22').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker31').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker32').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker41').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker42').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker51').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker52').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker61').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker62').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker71').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker72').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker81').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker82').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker91').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker92').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker101').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker102').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker111').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker112').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker121').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker122').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker131').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker132').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker141').datetimepicker({
            format: 'LT'
        });
    });
    $(function () {
        $('#datetimepicker142').datetimepicker({
            format: 'LT'
        });
    });
</script>


</body>
</html>

