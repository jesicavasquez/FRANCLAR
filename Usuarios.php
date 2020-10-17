<!doctype html>
<html lang="es">

<?php
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
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM tbl_usuario WHERE ID_Usuario='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM tbl_usuario WHERE ID_Usuario='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
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
					<th>No de empleado</th>
					<th>E-mail</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Acciones</th>
				</tr>
				<?php
				$sql = mysqli_query($con, "SELECT * FROM tbl_usuario ORDER BY ID_Usuario ASC");
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
                        <tr>
                            <td>

                                <a href="EditarUsuario.php?nik='.$row['ID_Usuario'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                <a href="Usuarios.php?aksi=delete&nik='.$row['ID_Usuario'].'" title="Eliminar" onclick="return confirm(\'¿Esta seguro de borrar los datos del usuario '.$row['Usuario'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                            <td>'.$row['ID_Usuario'].'</td>
                            <td>'.$row['ID_Empleado'].'</td>
                            <td>'.$row['Email'].'</td>
                            <td>'.$row['Usuario'].'</td>
                            <td>'.$row['Contraseña'].'</td>
							<td>';
							if($row['ID_Estado'] == '1'){
								echo '<span class="label label-success">Nuevo</span>';
							}
                            else if ($row['ID_Estado'] == '2' ){
								echo '<span class="label label-info">Activo</span>';
                            }
                            else if ($row['ID_Estado'] == '3' ){
								echo '<span class="label label-info">Inactivo</span>';
                            }
                            else if ($row['ID_Estado'] == '4' ){
								echo '<span class="label label-info">Bloqueado</span>';
							}
						echo ' 
						</td>
							<td>';
							if($row['ID_Rol'] == '1'){
								echo '<span class="label label-success">Admin</span>';
							}
                            else if ($row['ID_Rol'] == '2' ){
								echo '<span class="label label-info">Doctor(a)</span>';
							}
                            else if ($row['ID_Rol'] == '3' ){
								echo '<span class="label label-warning">Cajero(a)</span>';
							} 
							else if ($row['ID_Rol'] == '4' ){
								echo '<span class="label label-warning">Enfermero(a)</span>';
                            }
						echo '
                            </td>
						</tr>
						';
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