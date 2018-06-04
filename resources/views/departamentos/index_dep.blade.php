@extends('plantillas.departamentos')

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
            <img class="d-block img-fluid w-100" src="img/img2.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="img/img1.png"  alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="img/img3.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="img/img4.png"  alt="Third slide">
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
@section('noticias')
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
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

    <div class="col-lg-3 col-md-6 mb-4">
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

<!-- /.fin row -->
