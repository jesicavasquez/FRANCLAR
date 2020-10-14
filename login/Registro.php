<!DOCTYPE html>
<html>
    <head>
        <title>Registro | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/registro.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Registro </h1>
            <form action="iniciologin.php" autocomplete="off" method="POST" class="login100-form validate-form">
                <!-----Username---->
                <label for="Username">Usuario</label>
                <input type="text" name="usuario" placeholder="Ingrese un Usuario">
                
                <!-----Password----->
                <label for="Password">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingrese una Contraseña">

                <label for="RPassword">Confirmar contraseña</label>
                <input type="password" name="Rcontraseña" placeholder="Ingrese de nuevo la Contraseña">

                <label for="Email">Correo Electrónico</label>
                <input type="email" name="email" placeholder="Ingrese un correo electrónico">
                
                <input type="submit"  value="Registrar" >
                
                </input>
                
                <p> Ya tienes una cuenta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../login/Login.php">Ingresar</a></p> <br>
            </form>
        </div>
    </body>
</html>