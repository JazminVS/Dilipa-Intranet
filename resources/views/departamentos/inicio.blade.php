@extends('layouts.departamentos')
@extends('layouts.login')
departamentos
<!--VISTA INICIO DEPARTAMENTOS-->

@section('titulodep')
    Departamentos
@endsection
@section('titulo_nav')
    Departamentos
@endsection
@section('seccion1')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid w-100" src="img/departamentos/union_1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="img/departamentos/compras_1.jpg"  alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="img/departamentos/sistemas_1.png"  alt="Third slide">
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
    <br/>
@endsection
@section('noticias')
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Comunicados Internos</a>
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
                        <a href="#">Proyectos</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
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

    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">
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

    </div>

@endsection

<!-- /.fin row -->
