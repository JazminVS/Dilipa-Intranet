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

      <link rel="shortcut icon" type="image/x-icon" href="/img/usuario.png" />
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
        <a class="navbar-brand" href="#">
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
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <!--Inicio de Sesion con css-->
            <div id="Contenedor">
             <div class="Icon"><i class="fa fa-user-circle"></i></div>
             <?php
             //Datos para ingresar

             ?>
<div class="ContentForm">
    <form action="" method="post" name="FormEntrar">
        <div class="input-group input-group-lg">
            <div class="input-group-text" style="color:#00447C"><i class="fa fa-envelope-o fa-lg"></i></div>
            <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
        </div>
        <br/>
        <div class="input-group input-group-lg">
            <div class="input-group-text" style="color:#00447C"><i class="fa fa-lock fa-2x"></i></div>
            <input type="password" name="contra" class="form-control" placeholder="*********" aria-describedby="sizing-addon1" required>
        </div>

        <br/>
        <div align="center">
            <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
        </div>
    </form>
</div>

</div>

</div>
</div>
</div>
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

        <div class="col-lg-9 my-4">
            <!--CARRUSEL-->
            @yield('seccion1')
        </div>
    </div>

    <div class="row">
        <!--NOTICIAS-->
        @yield('seccion2')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Dilipa Corporativo 2018</p>
        </div>
    </footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
