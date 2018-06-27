@extends('layouts.app')
@section('title')
    Dilipa
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="POST" action="{{ route('admin.update',$usuario->id)}}">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Nombre de Usuario</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{!! $usuario->username !!}">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Nombre</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{!! $usuario->name !!}">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Apellido</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{!! $usuario->lastname !!}">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Correo</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="{!! $usuario->email !!}">
                </div>
            </div>
                <div class="form-group">
                <button type="submit" class="btn btn-success " value="{!! $usuario->id !!}">Actualizar</button>
            </div>
            </form>
    </div>
    </div>
@endsection