<!--/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 01/06/2018
 * Time: 12:59
 */-->
@extends('plantillas.sucursales')
<!--VISTA INICIO SUCURSAL QUITO-->

@section('titulo_sucursal')
    Sucursal Quito
@endsection
@section('titulo_nav')
    Sucursal Mega Dilipa
@endsection
@section('seccion1')
    <!--
<form class="form-inline my-2 my-lg-0 ">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/suc/auto_00.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/suc/auto_00.jpg" alt="Second slide">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>-->
    <div class="row">
    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Comunicados Internos</a>
                </h4>
                <h5></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Proyectos</a>
                </h4>
                <h5></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>
    </div>
@endsection
@section("seccion2")

    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">EQUIPO DE TRABAJO</a>
                </h4>
                <h5></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Temporada Escolar</a>
                </h4>
                <h5></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title" style="font-color:orange">
                    <a href="#">Eventos</a>
                </h4>
                <h5></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
                <a href="#">Ver mas</a>
            </div>
        </div>
    </div>
@endsection