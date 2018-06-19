@extends('layouts.departamentos')
<!--VISTA INICIO DEPARTAMENTO AUDITORIA-->
@section('titulo_departamento')
    Departamento Contabilidad
@endsection
@section('titulo_nav')
    Departamento Contabilidad
@endsection
@section('buttonlog')
    <li>
        <a href="{{ route('logout') }}" class="nav-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar Sesion
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
@endsection
@section('seccion1')
    CONTABILIDAD ACCESS
@endsection