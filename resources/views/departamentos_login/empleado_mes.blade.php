@extends('layouts.departamentos')
<!--VISTA INICIO DEPARTAMENTO AUDITORIA-->
@section('titulo_departamento')
    Empleado del Mes
@endsection
@section('titulo_nav')
    Empleado del Mes
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
    <h2>ELEGIR EMPLEADO DEL MES</h2>
    <div>
        <h2>
        {{ Form::open(['route' => 'empleadoci', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
        <div class="form-group">
            {{ Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'Por Nombres']) }}
        </div>
        <div class="form-group">
            {{ Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Por cedula']) }}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">
                <span><i class="fa fa-search"></i></span>
            </button>
        </div>
        {{ Form::close() }}
        </h2>

    </div>
    <div class="box box-danger">
        <div class="box-header with-border">

        </div>
        <div class="box-body">
            @if($empleados->isEmpty())
                <p>No existen registros</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Departamento</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Seleccionar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{!! $empleado->cedula !!}</td>
                            <td>{!! $empleado->nombres !!}</td>
                            <td>{!! $empleado->apellidos !!}</td>
                            <td></td>
                            <td>{!! $empleado->fecha_cumple !!}</td>
                            <td style="text-align:center;">
                                {{ Form::radio('select')}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <!-- /.box-body -->
    </div>

@endsection