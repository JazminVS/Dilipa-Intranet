<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Imagen en navegador-->
    <link rel="shortcut icon" type="image/x-icon" href="/img/dili_logo2.png" />
    <title>
    @yield ('titulo_departamento')
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css"')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/inicio.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('img/dili_logo.png')}}" alt="Regresar Inicio" style="width:60px;">
        </a>

        <h1 class="navbar-brand animated  zoomIn">@yield('titulo_nav')</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="departamentos">Departamentos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sucursales">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Repositorio Digital</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#login">
                        Iniciar Sesión
                    </button>
                </li>

                <!--
              <ul class="list-group">
                <li class="list-group-item">New <span class="badge">12</span></li>
                <li class="list-group-item">Deleted <span class="badge">5</span></li>
                <li class="list-group-item">Warnings <span class="badge">3</span></li>
              </ul>
              </ul>-->
        </div>
    </div>
</nav>
<br/>
<br/>
<!-- Modal Inicio de Sesión -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @yield("login")
</div>
<!-- Fin Modal Inicio de Sesion-->

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3 my-lg-4">
            <!--
            <div class="list-group">
                <a class="list-group-item d-flex justify-content-between align-items-center"
                   id="list-home-list" data-toggle="list"  aria-controls="auditoria" href="dep_auditoria">Auditoria
                    <img src="img/iconos/auditoria.png" width="16%"></a>

                <a class="list-group-item  d-flex justify-content-between align-items-center"
                   id="list-profile-list" data-toggle="list"  aria-controls="profile">Compras
                    <img src="img/iconos/compras.png" width="15%"></a>

                <a class="list-group-item  d-flex justify-content-between align-items-center"
                   id="list-messages-list" data-toggle="list" aria-controls="messages">Contabilidad
                    <img src="img/iconos/contabilidad.png" width="15%"></a>

                <a class="list-group-item d-flex justify-content-between align-items-center"
                   id="list-settings-list" data-toggle="list"  role="tab" aria-controls="settings">  Marketing
                    <img src="img/iconos/marketing1.png" width="15%"></a>

                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                   id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">RRHH
                    <img src="img/iconos/rrhh.png" width="15%"></a>

                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                   id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"> Sistemas
                    <img src="img/iconos/sistemas.png" width="15%"></a>
            </div>
            -->
            <div class="list-group">
                <a href="dep_auditoria" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Auditoria<img src="img/iconos/auditoria.png" width="16%"></a>

                <a href="dep_compras" class="list-group-item list-group-item-action list-group-item-action d-flex justify-content-between align-items-center">
                    Compras<img src="img/iconos/compras.png" width="15%"></a>

                <a href="dep_conta" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Contabilidad<img src="img/iconos/contabilidad.png" width="15%"></a>


                <a href="dep_marketing" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Marketing<img src="img/iconos/marketing1.png" width="15%"></a>

                <a href="dep_rrhh" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Recursos Humanos<img src="img/iconos/rrhh.png" width="15%"></a>

                <a href="dep_sis" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Sistemas<img src="img/iconos/sistemas.png" width="15%"></a>
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 col-sm-6">
            <br/>
            @yield('seccion1')
        </div>
        <!-- /.col-lg-9-->
    </div>

        <div class="row">
            @yield('noticias')
        </div>
        <!-- /.row -->

</div>
<!-- /.container -->

<!-- Copyright -->
<div class="footer-copyright py-3 bg-dark text-white text-center">Copyright &copy; Dilipa Corporativo 2018
</div>
<!-- Copyright -->

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

