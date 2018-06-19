<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/img/dili_logo1.png"/>
    <title>Dilipa Corporativo</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/inicio.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-image: url("img/fondo_inicio2.png");
            background-size: cover;
            color: #00447c;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #EE7401;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

        <div class="top-right links">
            <a data-toggle="modal" data-target="#login" href="">LOG IN</a>
            <a href="{{ route('register') }}">Register</a>
        </div>

        <!-- Modal Inicio de Sesión -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div>


    <div class="content">

        <div class="title m-b-md">
            <img src="img/dilipa.png" width="50%">
        </div>

        <div class="links">
            <a href="#">NOTICIAS</a>
            <a href="departamentos">DEPARTAMENTOS</a>
            <a href="sucursales">SUCURSALES</a>
            <a href="#">REPOSITORIO DIGITAL</a>
            <a href="#">NOSOTROS</a>

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
