<!doctype html>
<html lang="es">

<?php
session_start();
include 'head.php'
?>
<?php
include 'conexion.php'
?>

<body>
    <!--::header part start::-->
    <?php
    include 'header.php';
    ?>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Usuarios</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- footer part start-->
    <?php
			if(isset($_GET['aksi']) == 'bloquear'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM tbl_usuario WHERE ID_Usuario='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$update = mysqli_query($con, "UPDATE tbl_usuario SET ID_Estado= 2 WHERE ID_Usuario='$nik'");
					if($update){
                        echo "<script type='text/javascript'>
                        alert('El Usuario ha sido bloqueado exitosamente');
                        window.location.href= 'Usuarios.php';
                        </script>";
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo deshabilitar usuario.</div>';
					}
				}
            }
            if(isset($_GET['akno']) == 'activar'){
                $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM tbl_usuario WHERE ID_Usuario='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$update = mysqli_query($con, "UPDATE tbl_usuario SET ID_Estado= 1 WHERE ID_Usuario='$nik'");
					if($update){
						echo "<script type='text/javascript'>
                        alert('El Usuario ha sido activado exitosamente');
                        window.location.href= 'Usuarios.php';
                        </script>";
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo activar usuario.</div>';
					}
				}
            }
            
	 ?>
    
    <form class="form-inline my-2 my-lg-0 float-left">
        <a href="agregarusuario.php" class="genric-btn info circle">Agregar</a>
    </form>
   <br>
    <form class="form-inline my-2 my-lg-0 float-right">
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">

    </form>
	<br>
	<br>

		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Nombre de empleado</th>
					<th>E-mail</th>
                    <th>Nombre Usuario</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Acciones</th>
				</tr>
				<?php
				$sql = mysqli_query($con, "SELECT tbl_usuario.ID_Usuario,	
                tbl_empleado.Nom_Empleado,
                tbl_usuario.email,
                tbl_usuario.Nom_Usuario,	
                tbl_estado_usuario.Descripcion,	
                tbl_roles.Rol FROM tbl_usuario 
                INNER JOIN tbl_empleado on tbl_usuario.ID_Empleado = tbl_empleado.ID_Empleado
                INNER JOIN tbl_estado_usuario on tbl_usuario.ID_Estado = tbl_estado_usuario.ID_Estado
                INNER JOIN tbl_roles on tbl_usuario.ID_Rol = tbl_roles.ID_Rol");
                
                if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
                        if($row['Descripcion'] == 'Activo'){
						echo '
                        <tr>                            
                            <td>'.$row['ID_Usuario'].'</td>
                            <td>'.$row['Nom_Empleado'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['Nom_Usuario'].'</td>
                            <td><span class="label label-success">'.$row['Descripcion'].'</span></td>
                            <td><span class="label label-warning">'.$row['Rol'].'</span></td>                            
                            <td>
                                    <a href="EditarUsuario.php?nik='.$row['ID_Usuario'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    <a href="Usuarios.php?aksi=bloquear&nik='.$row['ID_Usuario'].'" title="Bloquear Usuario" onclick="return confirm(\'¿Está seguro que desea bloquear al usuario '.$row['Nom_Usuario'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>
						</tr>
                        ';
                    }else{
                        echo '
                        <tr>                            
                            <td>'.$row['ID_Usuario'].'</td>
                            <td>'.$row['Nom_Empleado'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['Nom_Usuario'].'</td>
                            <td><span class="label label-danger">'.$row['Descripcion'].'</span></td>
                            <td><span class="label label-warning">'.$row['Rol'].'</span></td>                            
                            <td>
                                    <a href="EditarUsuario.php?nik='.$row['ID_Usuario'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    <a href="Usuarios.php?akno=activar&nik='.$row['ID_Usuario'].'" title="Activar Usuario" onclick="return confirm(\'¿Está seguro que desea Activar al usuario '.$row['Nom_Usuario'].'?\')" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                            </td>
						</tr>
                        ';
                    }
						$no++;
					}
				}
				?>
			</table>
		 </div>
            <br>
            <br>
            <br>
    <?php
        include 'Copyright.php'
    ?>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <?php
        include 'script.php'
    ?>
    
</body>

</html>