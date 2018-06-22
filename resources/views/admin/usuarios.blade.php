@extends('layouts.admin')
@section('titulo')
    Inicio
@endsection
@section('active')
    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Administrador</a></li>
    <li class="active">Inicio</li>
@endsection
@section('container')
        <!-- left column -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Usuarios</div>

                <div class="panel-body"><form class="form-horizontal" method="POST" action="{{ route('register') }}">
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Registro de Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">UserName</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" placeholder="nombre de usuario">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Apellido</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lastname" placeholder="Apellido">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" placeholder="contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Confirmar contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" placeholder="contraseña" name="password_confirmation" required>
                            </div>
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
                    <!-- /.box-body -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>

                    <!-- /.box-footer -->
                </form>
            </div>

            <!-- Form Element sizes -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Listado de Usuarios</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Nombre Usuario</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td>john@example.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Different Width</h3>
                </div>



                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- Input addon -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <br>

                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>

                    <h4>With icons</h4>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <br>

                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    <h4>With checkbox and radio inputs</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->

                    <h4>With buttons</h4>

                    <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                    <div class="input-group input-group-lg">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p class="margin">Normal</p>

                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">Action</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-success">
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
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <button type="submit" class="btn btn-success">Modificar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Crear</button>
                    </div>

                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Usuario</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Text Disabled</label>
                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Textarea Disabled</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                        </div>

                        <!-- input states -->
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                            <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                            <span class="help-block">Help block with success</span>
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                warning</label>
                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                            <span class="help-block">Help block with warning</span>
                        </div>
                        <div class="form-group has-error">
                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                                error</label>
                            <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                            <span class="help-block">Help block with error</span>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Checkbox 1
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Checkbox 2
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" disabled>
                                    Checkbox disabled
                                </label>
                            </div>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                    Option three is disabled
                                </label>
                            </div>
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Disabled</label>
                            <select class="form-control" disabled>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <!-- Select multiple-->
                        <div class="form-group">
                            <label>Select Multiple</label>
                            <select multiple class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Multiple Disabled</label>
                            <select multiple class="form-control" disabled>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->

@endsection