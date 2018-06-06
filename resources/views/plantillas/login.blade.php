@section('login')
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!--Inicio de Sesion con css-->
                <div id="Contenedor">
                    <div class="Icon"><i class="fa fa-user-circle"></i></div>
                    <?php
                    //Datos para ingresar

                    ?>
                    <div class="ContentForm">
                        <form action="" method="post" name="FormEntrar">
                            <div class="input-group input-group-lg">
                                <div class="input-group-text {{ $errors->has('email') ? ' has-error' : '' }}" style="color:#00447C"><i class="fa fa-envelope-o fa-lg"></i></div>
                                <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
                            </div>
                            <br/>
                            <div class="input-group input-group-lg">
                                <div class="input-group-text" style="color:#00447C"><i class="fa fa-lock fa-2x"></i></div>
                                <input type="password" name="contra" class="form-control" placeholder="*********" aria-describedby="sizing-addon1" required>
                            </div>

                            <br/>
                            <div align="center">
                                <button class="btn btn-lg btn-primary" type="submit" value="login">Entrar</button>
                            </div>
                            <br/>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection