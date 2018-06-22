
    EDICION DE ROLES Y USUARIOS

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::model($usuario,['route' => 'adminupdate', 'method' => 'put', 'novalidate']) !!}

            {!! Form::hidden('id', $usuario->id) !!}

            <div class="form-group">
                {!! Form::label('username', 'Nombre de Usuario') !!}
                {!! Form::text('username', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Descripci&oacute;n') !!}
                {!! Form::text('description', null, ['class' => 'form-control' , 'required' => 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar', ['class' => 'btn btn-success ' ] ) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
