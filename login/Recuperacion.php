<!DOCTYPE html>
<html>
    <head>
        <title>Login | Recuperación</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/recuperacion.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Olvidó su contraseña </h1>
            <h5> ¿Olvidaste tú contraseña? escribe tú nombre de usuario y escoge entre las opciones de abajo para cambiar la contraseña <h5>
            <form action="iniciologin.php" method="POST" autocomplete="off" class="login100-form validate-form">
                <!-----Username---->
                
                <input type="text" name="usuario" placeholder="Ingrese su Usuario">
                
                
                <input type="button" disabled="true" role="link" onclick="window.location='../login/RCorreo.php'" value="Recuperación por correo electrónico">
                
                </input>

                <input type="button" disabled="true" role="link" onclick="window.location='../login/RPreguntaS.php'" value="Recuperación por preguntas secretas" >
                
                </input>
            </form>
        </div>
    </body>
</html>