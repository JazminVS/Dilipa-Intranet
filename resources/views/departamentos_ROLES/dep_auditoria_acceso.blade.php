@extends('plantillas.departamentos')
<!--VISTA INICIO DEPARTAMENTO AUDITORIA-->
@section('titulo_departamento')
    Departamento Auditoria
@endsection
@section('titulo_nav')
    Departamento Auditoria
@endsection

@section('seccion1')
    <div class="row">
    <!--empleado del mes-->
        <div class="col-lg-4 col-sm-6 my-4" >
            <div class="card border-primary w-100 p-0" style="width: 15rem;">
                <div class="card-header ">
                    <h3 class="card-title">Empleado del Mes</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Departamento de Marketing</h6>
                </div>
                <div class="card-body mb-2">
                    <!--
                      <img class="rounded rounded-circle img-fluid" id="imagen_empleadoM" src="img/empleados/17.jpg" alt="empleado_mes" >-->
                    <br/>
                </div>
                <p class="card-text p-2">sddnfdsfndf</p>
                <div class="card-footer border-primary">
                    <ul class="pagination pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">&laquo</a></li>
                        <li class="page-item"><a class="page-link" href="#">Abril</a></li>
                        <li class="page-item"><a class="page-link" href="#">Mayo</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!--noticias-->
        <div class="col-lg-8 col-sm-6 col- my-4" style="overflow:auto; width:300px; height:330px;">
            <h2>NOTICIAS</h2>
            <h5 class="card-title">NEW1</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <---------------------------------------------->
            <h5 class="card-title">NEW2</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <---------------------------------------------->
            <h5 class="card-title">NEW3</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
@endsection
@section('noticias')
    <br/>
    <div class="col-lg-3 col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Descargas</h5>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Archivo1
                        <a href="#" class="badge badge-primary">pdf</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Archivo2
                        <a href="#" class="badge badge-primary">pdf</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Archivo3
                        <a href="#" class="badge badge-primary">pdf</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-lg-9 col-sm-6">
        <div class="card">
            <h4 class="card-title">AVISOS IMPORTANTES</h4>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>With supporting text below as a natural lead-in to additional content</p>
                    <p>With supporting text below as a natural lead-in to additional content</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p>With supporting text below as a natural lead-in to additional content</p>
                    <p>With supporting text below as a natural lead-in to additional content</p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <p>With supporting text below as a natural lead-in to additional content</p>
                    <p>With supporting text below as a natural lead-in to additional content</p>
                </div>
            </div>


        </div>
    </div>
    </div>
    <!-- /.Close row id=2 prinicipal-->
    <br/>


    <!--open row 3 principal-->
    <div class="row">
        <div class="col-4">
            <!--Contacto-->
            <div class="card w-100 text-left">
                <div class="card-body">
                    <h5 class="card-title">Contacto</h5>
                    <p class="card-text"></p>
                    Dr. Anibal Enriquez <br/>
                    Jefe Departamental  <br/>
                    Telf.: (02) 2418640 / 2418753 / 2418899 <br/> Ext.: 208
                    VoIP: 112
                </div>
            </div>
        </div>
    </div>

    <div class="col-8">
        <!--espacio blanco-->
    </div>
    <br/>
    <br/>

    <!-- /.row -->

    </div>

@endsection