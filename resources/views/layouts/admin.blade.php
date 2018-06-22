<!DOCTYPE html>
<html>
<head>
    <title>Administrador Dilipa Intranet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="img/dili_logo.png" class="logo">
            <!-- LOGO -->
            Dilipa Intranet
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/admin.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Administrador</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/admin.jpg" class="img-circle" alt="User Image">
                                <p>Administrador
                                    <small>Junio 2018</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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
                    <img src="img/admin.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Nombre Apellido</p>
                    <a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

                <li class="header">PRINCIPAL NAVEGACION</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-home"></i> <span>Inicio</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Manejo de Usuarios</span>
                        <i class="glyphicon glyphicon-triangle-bottom pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="adminuser"><i class="glyphicon glyphicon-plus-sign"></i>Administradores</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Roles</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <span>Repositorio Digital</span>
                    </a>
                <li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-calendar"></i> <span>Calendario</span>
                    </a>
                </li>

                <li><a href="#"><i class="glyphicon glyphicon-inbox"></i> <span>Documentacion</span>
                    </a>
                </li>

                <li class="header">DEPARTAMENTOS Y SUCURSALES</li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        <span>Departamentos</span>
                        <i class="glyphicon glyphicon-triangle-bottom pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Auditoria</a></li>
                        <li><a href="#">Compras</a></li>
                        <li><a href="#">Contabilidad</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Recursos Humanos</a></li>
                        <li><a href="#">Sistemas</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-modal-window"></i>
                        <span>Sucursales</span>
                        <i class="glyphicon glyphicon-triangle-bottom pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Administradores</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Roles</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('titulo')
                <small></small>
            </h1>
            <ol class="breadcrumb">
                @yield('active')
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box)
            <div class="row">
                <div class="col-lg-3 col-xs-6">

                    1
                </div>
                <div class="col-lg-3 col-xs-6">

                    2
                </div>
                <div class="col-lg-3 col-xs-6">

                    3
                </div>
                <div class="col-lg-3 col-xs-6">

                    4
                </div>
            </div><!-- /.row -->
            <!-- Main row -->
            <div class="row">
                @yield('container')
                <!-- Left col -->

                    <!-- Chat box -->

                    <!-- /.box (chat box) -->

                    <!-- TO DO List -->


                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->


                    <!-- Map box -->

                    <!-- /.box -->

                    <!-- solid sales graph -->
                    <!-- /.box -->

                    <!-- Calendar -->
                    <!-- /.box -->

                <!-- right col -->
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 </strong> All rights reserved
        <strong>Creado por Jazmin Villamarin</strong>
    </footer>
    </div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins\jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="plugins/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
