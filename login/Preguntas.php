<!DOCTYPE html>
<html>
    <head>
        <title>Preguntas | Usuarios</title>
        <link rel="shortcut icon" href="img/franclar.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="css/preguntas.css">
    </head>
    <body>
        <div class = "login-box">
            <img class="avatar" src="img/Logo_franclar.png" alt="Logo De Perfil">
            <h1> Preguntas Secretas</h1>
            <form action="iniciologin.php" method="POST" class="login100-form validate-form">
                <!-----Username---->
                <select class="form-control" id="Pregunta1" name="preguntas" required>
                    <option value="0" selected>Seleccione una pregunta</option>
                </select>
                <input type="text" name="Respuesta1" placeholder="Ingrese su respuesta">
                <select class="form-control" id="Pregunta2" name="preguntas" required>
                    <option value="0" selected>Seleccione una pregunta</option>
                </select>
                <input type="text" name="Respuesta2" placeholder="Ingrese su respuesta">
                <select class="form-control" id="Pregunta2" name="preguntas" required>
                    <option value="0" selected>Seleccione una pregunta</option>
                </select>
                <input type="text" name="Respuesta3" placeholder="Ingrese su respuesta">
                
                
                <input type="submit"  value="Ingresar" >
                
                </input>
            </form>
        </div>
    </body>
</html>