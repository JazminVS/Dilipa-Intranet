@extends('layouts.admin')
@section('titulo')
   REGISTRO DE ROLES Y USUARIOS
@endsection
@section('active')
    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Administrador</a></li>
    <li class="active">Registro de Roles y Usuarios</li>
@endsection
@section('container')
        <!-- left column -->
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Registro de Usuarios</h3>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Crear</button>
                    </div>
                    </form>
            </div>

            <!-- Horizontal Form -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Registro de Roles</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Roles</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Descripcion</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Crear</button>
                    </div>

                    <!-- /.box-footer -->
                </form>
            </div>

                        <!-- select -->
                        <!--<div class="form-group ">
                            <label class="col-sm-3 control-label">Asignar Rol</label>
                            <div class="col-sm-9">
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                            </div>
                        </div>-->



        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-8">
            <!-- Tabla Lista de Usuarios -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Usuarios</h3>
                </div>
                <div class="box-body">
                    @if($roles->isEmpty())
                        <p>No existen registros</p>
                    @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Nombre Usuario</th>
                                <th>Accion</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $user)
                                <tr>
                                    <td>{!! $user->name !!}</td>
                                    <td>{!! $user->lastname !!}</td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->username !!}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{!!action('UserController@edit',$user->id)!!}" >Editar</a>
                                        <form method="post" action="{!! action('UserController@destroy',$user->id) !!}">
                                            <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                                            <div>
                                                <button type="submit" class="btn btn-danger btn-xs">Borrar</button>
                                            </div>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
            <!-- Tabla Lista de Empleados -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Roles</h3>
                </div>
                <div class="box-body">
                    @if($roles->isEmpty())
                        <p>No existen registros</p>
                    @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $rol)
                                <tr>
                                    <td>{!! $rol->id !!}</td>
                                    <td>{!! $rol->name !!}</td>
                                    <td>{!! $rol->description !!}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="#" >Edit</a>
                                    <a class="btn btn-danger btn-xs" href="#" >Delete</a>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->



@endsection