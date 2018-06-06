<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 01/06/2018
 * Time: 13:00
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="shortcut icon" type="image/x-icon" href="img/dili_logo1.png" />
    <title>@yield ('titulo_sucursal')</title>

    <!-- Bootstrap core CSS >-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sucursales.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

      <div class="container">
        <a class="navbar-brand" href="/">
        <img src="img/dili_logo.png" alt="Regresar Inicio" style="width:60px;">
        </a>

        <h1 class="navbar-brand animated  zoomIn">@yield('titulo_nav')</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="departamentos">Departamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sucursales">Sucursales</a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#login">
                Iniciar Sesión
            </button>
            </li>
          </ul>
        </div>|
      </div>
    </nav>
    <!-- Fin Navigation -->
    <!-- Modal Inicio de Sesión -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      @yield("login")
    </div>
<!-- Fin Modal Inicio de Sesion-->

<!-- Page Content -->

<div class="container">
    <div class="row">
        <div class="col-lg-3 my-4">
            <div class="list-group">
                <a href="#quito" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="collapse">
                    Quito<img src="img/iconos/iconos_sucursales/quito.png" width="15%"></a>
                    <div class="collapse" id="quito">
                        <a href="suc_quito_matriz" class="list-group-item">Mega Dilipa</a>
                        <a href="suc_quito_calderon" class="list-group-item">Calderon</a>
                        <a href="" class="list-group-item">Carrión</a>
                        <a href="" class="list-group-item">Cotocollao</a>
                        <a href="" class="list-group-item">VillaFlora</a>
                        <a href="" class="list-group-item">U.Central</a>
                        <a href="" class="list-group-item">Tumbaco</a>
                    </div>
                <a href="#sto_domingo" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="collapse">
                    Santo Domingo<img src="img/iconos/iconos_sucursales/santod.png" width="15%"></a>
                    <div class="collapse" id="sto_domingo">
                        <a href="suc_sto1" class="list-group-item">Sto. Domingo 1</a>
                        <a href="suc_sto2" class="list-group-item">Sto. Domingo 2</a>
                        <a href="suc_sto3" class="list-group-item">Sto. Domingo 3</a>
                    </div>
                <a href="suc_portoviejo" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Portoviejo<img src="img/iconos/iconos_sucursales/portoviejo.png" width="15%"></a>
                <a href="suc_ambato" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Ambato<img src="img/iconos/iconos_sucursales/ambato.png" width="15%"></a>
                <a href="suc_ibarra" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Ibarra<img src="img/iconos/iconos_sucursales/ibarra.png" width="15%"></a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 ">
            <!--CARRUSEL-->
            @yield('seccion1')
        </div>
        <!-- /.col-lg-9 -->
    </div>

    <div class="row">
        <!--NOTICIAS-->
        @yield('seccion2')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
    <!-- Copyright -->
    <div class="footer-copyright py-3 bg-dark text-white text-center">Copyright &copy; Dilipa Corporativo 2018
    </div>
    <!-- Copyright -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
