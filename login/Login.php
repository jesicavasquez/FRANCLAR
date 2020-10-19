<!DOCTYPE html>
<html>
    <head>
        <title>Login | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- glyphicon -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href ="css/master.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
        $(document).on('ready', function(){
            $('#show-hide-passwd').on('click', function(e) {

                var current = $(this).attr('action');

                if (current == 'hide'){
                    $(this).prev().attr('type','text');
                    $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
                }
                if (current == 'show'){
                    $(this).prev().attr('type','password');
                    $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                }
            })
        })
    </script>
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Iniciar Sesión </h1>
            <form action="iniciologin.php" method="POST" autocomplete="off" class="login100-form validate-form">
                <!-----Username---->
                <label for="Username">Usuario</label>
                <input type="text" name="usuario" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingrese su usuario" autocomplete="off" required>
                
                <!-----Password----->
                <div class="input-group">
                    <label for="Password">Contraseña</label>
                    <input type="password" name="contraseña" placeholder="Ingrese su contraseña" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,30}$" autocomplete="off" required>
                    <span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>
                </div>
                <input type="submit"  value="Entrar" >
                
                </input>
                
                <a href="../login/Recuperacion.php">¿Olvidaste tú Contraseña?</a> <br>
                <p> No tienes una cuenta &nbsp; <a href="../login/Registro.php">Regístrate</a> </p><br>
            </form>
        </div>
    </body>
</html>