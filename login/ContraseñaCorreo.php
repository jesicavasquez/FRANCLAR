<!DOCTYPE html>
<html>
    <head>
        <title>Recuperación Correo | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/ContraseñaCorreo.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Cambio de contraseña </h1>
            <form action="iniciologin.php" method="POST" class="login100-form validate-form">
                <!-----Password----->
                <label for="Password">Contraseña generada</label>
                <input type="password" name="Ncontraseña" placeholder="Ingrese la contraseña generada">
                <label for="Password">Nueva contraseña</label>
                <input type="password" name="Ncontraseña" placeholder="Ingrese una contraseña nueva">
                <label for="Password">Confirmar contraseña</label>
                <input type="password" name="Ccontraseña" placeholder="Confirme su contraseña">
                
                <input type="submit"  value="Aceptar" >
                
                </input>
                
            </form>
        </div>
    </body>
</html>