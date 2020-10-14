<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "sistema_franclar");
$consulta="SELECT * FROM usuario WHERE Usuario='$usuario'and Contraseña= '$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$row=mysqli_num_rows($resultado);

if ($row == true) {
    //validar rol
    $rol = $row[2];
    $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 1:
                header('location: ../index.php');
            break;
    
            case 2:
                header('location: ../consulta.php');
            break;
    
            case 3:
                header('location: ../facturacion.php');
            break;
    
            case 4:
                header('location: ../preclinica.php');
            break;
    
            default;
        }
}else{
    echo "<script> alert('Usuario o Contraseña incorrecta');window.history.go(-1);
      </script>";
      session_destroy();          
  }
mysqli_free_result($resultado);
mysqli_close($conexion);
?>