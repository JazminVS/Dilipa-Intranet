@section('buttonlog')
    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#login">
        Iniciar Sesión
    </button>
@endsection
@section('login')
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="Contenedor">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="Icon"><i class="fa fa-user-circle"></i></div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="input-group input-group-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group-text" style="color:#00447C"><i class="fa fa-envelope-o fa-lg"></i></div>
                            <input id="email" placeholder="e-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-group input-group-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group-text" style="color:#00447C"><i class="fa fa-lock fa-2x"></i></div>
                            <input id="password" placeholder="contraseña" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="button-checkbox pull-right">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recuérdame
                            </label>
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn btn-block" id="btnlogin">
                                Ingresar
                            </button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection