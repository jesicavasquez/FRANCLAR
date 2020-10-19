<?php
session_start();
include ("conexion.php");
?>
<?php
    
	if(isset($_POST['add'])){

        $id_empleado = mysqli_real_escape_string($con,(strip_tags($_POST['Colaborador'],ENT_QUOTES)));
        $nom_usuario = mysqli_real_escape_string($con,(strip_tags($_POST['Nom_Usuario'],ENT_QUOTES)));
        $email = mysqli_real_escape_string($con,(strip_tags($_POST['Email'],ENT_QUOTES)));
        $contraseña = mysqli_real_escape_string($con,(strip_tags($_POST['Password'],ENT_QUOTES)));
        $id_rol = mysqli_real_escape_string($con,(strip_tags($_POST['Rol'],ENT_QUOTES)));
        $id_estado = 1;
        $primer_ingreso = 1;
	
	$insert = mysqli_query($con, "INSERT INTO tbl_usuario (ID_Empleado, ID_Estado, Nom_Usuario, email, Contraseña, ID_Rol, Primer_Ingreso) 
                                       VALUES ( '$id_empleado' , '$id_estado' , '$nom_usuario' , '$email' , '$contraseña' , '$id_rol' , '$primer_ingreso')") or die(mysqli_error());
    
    if($insert){
        echo "<script type='text/javascript'>
            alert('El Usuario ha sido registrado exitosamente');
            window.location.href= 'Usuarios.php';
        </script>";
    }else{
        echo "<script> alert('El Usuario no se ha podido registrar');window.history.go(-1);
		    </script>";
    }
}
?>