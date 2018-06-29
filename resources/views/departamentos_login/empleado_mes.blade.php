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
    </div>
    <div>
        <div class="form-group">
            <!--<button type="submit" class="btn btn-warning">Aceptar
                <span><i class="fa fa-check-circle"></i></span>
            </button>-->
        </div>
            <div class="form-group">
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
                            <td>
                                <a class="edit-modal btn btn-warning btn-xs" data-id="{{$empleado->id}}" data-title="{{$empleado->cedula}}">Seleccionar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
        </div>
        <!-- /.box-body -->
    </div>

    <div class="modal fade" id="select">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Crear</h4>
                    {{ Form::open() }}
                    <div class="form-group">
                        <label>{!! $empleado->cedula !!}</label>
                    </div>
                    <div class="form-group">
                        <label>{!! $empleado->nombres !!}</label>
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                    <a class="btn btn-warning btn-xs" href="{!!action('EmpleadoController@show',$empleado->id)!!}"
                       >Seleccionar</a>
                </div>
            </div>
        </div>
    </div>

@endsection