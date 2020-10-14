<!DOCTYPE html>
<html>
    <head>
        <title>Recuperación Preguntas | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/RPreguntaS.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Recuperación por preguntas secretas </h1>
            <form action="iniciologin.php" method="POST" class="login100-form validate-form">
                <!-----Question---->
                <label for="Question">Pregunta</label>
                <select class="form-control" id="Pregunta" name="pregunta" required>
                    <option value="0" selected>Seleccione una pregunta</option>
                </select>
                <!-----Answer---->
                <label for="Answer">Respuesta<input type="text" name="respuesta" placeholder="Ingrese su respuesta"></label>
                <!-----Password----->
                <label for="Password">Contraseña nueva</label>
                <input type="password" name="Ncontraseña" placeholder="Ingrese una contraseña nueva">
                <label for="Password">Confirmar contraseña</label>
                <input type="password" name="Ccontraseña" placeholder="Confirme su contraseña">
                
                <input type="submit"  value="Aceptar" >
                
                </input>
                
            </form>
        </div>
    </body>
</html>