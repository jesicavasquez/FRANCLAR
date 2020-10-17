<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/master.css">
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
                <label for="Password">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingrese su contraseña" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,30}$" autocomplete="off" required>
                
                <input type="submit"  value="Entrar" >
                
                </input>
                
                <a href="../login/Recuperacion.php">¿Olvidaste tú Contraseña?</a> <br>
                <p> No tienes una cuenta &nbsp; <a href="../login/Registro.php">Regístrate</a> </p><br>
            </form>
        </div>
    </body>
</html>