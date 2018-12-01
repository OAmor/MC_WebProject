<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MicroClub | Dashboard</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('lib/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('lib/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lib/adminLTE/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('lib/adminLTE/skin-red.css')}}">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    @yield('propre-css')

</head>
<body class="hold-transition skin-red sidebar-mini">
@yield('set-active-list')

<div class="wrapper">


    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>MC</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Micro</b>CLUB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('uploads/default.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Amor Oussama</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('uploads/default.png')}}" class="img-circle" alt="User Image">

                                <p>
                                    Amor Oussama - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('uploads/default.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Amor Oussama</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="dashboard treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="route1"><a href="{{Route('route1')}}"><i class="fa fa-circle-o"></i> Route 1</a></li>
                        <li class="route2"><a href="{{Route('route2')}}"><i class="fa fa-circle-o"></i> Route 2</a></li>
                    </ul>
                </li>
                <li class="forms treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="route3"><a href="{{Route('route3')}}"><i class="fa fa-circle-o"></i> Route 3</a></li>
                        <li class="route4"><a href="{{Route('route4')}}"><i class="fa fa-circle-o"></i> Route 4</a></li>
                        <li class="route5"><a href="{{Route('route5')}}"><i class="fa fa-circle-o"></i> Route 5</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="http://amoroussama.me">MicroClub</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('lib/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lib/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('lib/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('lib/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lib/adminLTE/adminlte.min.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('propre-script')
<!-- pour afficher les msg de toastr -->
@if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

@if(Session::has('warning'))
    <script>
        toastr.warning("{{ Session::get('warning') }}");
    </script>
@endif

</body>
</html>
