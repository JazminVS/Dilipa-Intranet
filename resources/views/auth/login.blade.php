<!DOCTYPE html>
<html lang="en">

<head>
    <!--Imagen en navegador-->
    <link rel="shortcut icon" type="image/x-icon" href="/img/dili_logo2.png" />
    <title>
        LOG IN
    </title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css"')}}" rel="stylesheet">
    <link href="{{asset('css/inicio.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
<div class="row">
    <div class="row col-md-4">
    </div>
    <div class="row col-md-4 my-4">
        <br>
        <div id="Contenedor">
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
    <div class="row col-md-4">
    </div>
</div>
</body>
</html>