@extends('layouts.sucursales')
@extends('layouts.login')
<!--VISTA INICIO SUCURSALES-->
@section('titulo_sucursal')
    Sucursales
@endsection
@section('titulo_nav')
    Sucursales
@endsection
@section('seccion1')
    <div id="carouselExampleControls" class="carousel slide my-4" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/sucursales/amb_00.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/sucursales/sto1_00.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/sucursales/sto3_00.jpg" alt="Thrid slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('seccion2')
    <div class="row">
    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Lanzamientos</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">

            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Temporadas</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Empleados del Mes</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Temporadas</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    </div>
@endsection