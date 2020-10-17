<?php
session_start();
include ("conexion.php");
?>
<?php
    
	if(isset($_POST['add'])){

        $nombre = mysqli_real_escape_string($con,(strip_tags($_POST['Nombre'],ENT_QUOTES)));
        $numeroid = mysqli_real_escape_string($con,(strip_tags($_POST['NumeroID'],ENT_QUOTES)));
        $fechan = mysqli_real_escape_string($con,(strip_tags($_POST['FechaN'],ENT_QUOTES)));
        $telefono = mysqli_real_escape_string($con,(strip_tags($_POST['Telefono'],ENT_QUOTES)));
        $celular = mysqli_real_escape_string($con,(strip_tags($_POST['Celular'],ENT_QUOTES)));
        $direccion = mysqli_real_escape_string($con,(strip_tags($_POST['Direccion'],ENT_QUOTES)));
        $sexo = mysqli_real_escape_string($con,(strip_tags($_POST['Sexo'],ENT_QUOTES)));
        $estado_civil = mysqli_real_escape_string($con,(strip_tags($_POST['EstadoC'],ENT_QUOTES)));
        $cargo = mysqli_real_escape_string($con,(strip_tags($_POST['Cargo'],ENT_QUOTES)));
        $salario = mysqli_real_escape_string($con,(strip_tags($_POST['Salario'],ENT_QUOTES)));
        $especialidad = mysqli_real_escape_string($con,(strip_tags($_POST['Especialidad'],ENT_QUOTES)));
	
	$insert = mysqli_query($con, "INSERT INTO tbl_empleado (Nom_Empleado, Cedula, Fec_Nacimiento, Tel_Empleado, Cel_Empleado, Dir_Empleado, ID_Sexo, ID_Est_Civil, ID_Cargo, Salario, ID_especialidad) 
                                       VALUES ( '$nombre' , '$numeroid' , '$fechan' , '$telefono' , '$celular' , '$direccion' , '$sexo' , '$estado_civil' , '$cargo' , '$salario' , '$especialidad')") or die(mysqli_error());
    
    if($insert){
        echo "<script type='text/javascript'>
            alert('El colaborador ha sido registrado exitosamente');
            window.location.href= 'Personal.php';
        </script>";
    }else{
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
    }
}
?>