<!DOCTYPE html>
<html>
    <head>
        <title>Recuperación Correo | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/RCorreo.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Recuperación por correo electrónico </h1>
            <h6> Escribe tú dirección de correo electrónico valida para el envío de la contraseña </h6>
            <form action="iniciologin.php" method="POST" class="login100-form validate-form">
                <!-----email---->
                <label for="email">Correo electrónico<input type="email" name="respuesta" placeholder="Ingrese su correo electrónico"></label>
                
                <input type="button" role="link" onclick="window.location='../login/ContraseñaCorreo.php'" value="Verificar">
                
                </input>
                
            </form>
        </div>
    </body>
</html>