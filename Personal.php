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
                            <h2>Personal</h2>
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
				$cek = mysqli_query($con, "SELECT * FROM tbl_empleado WHERE ID_Empleado='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM tbl_empleado WHERE ID_Empleado='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
	 ?>
    <h2>Personal</h2>
    <form class="form-inline my-2 my-lg-0 float-left">
        <a href="agregarpersonal.php" class="genric-btn info circle">Agregar</a>
    </form>
    <br>
    <form class="form-inline my-2 my-lg-0 float-right">
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
        <a href=""><button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button></a>
    </form>
    <br>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Nombre</th>
					<th>Identidad</th>
                    <th>Fecha de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Dirección</th>
					<th>Genero</th>
					<th>Estado Civil</th>
					<th>Cargo</th>
					<th>Salario</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
				</tr>
				<?php
				$sql = mysqli_query($con, "SELECT * FROM tbl_empleado ORDER BY ID_Empleado ASC");
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
                            <td>'.$row['ID_Empleado'].'</td>
                            <td>'.$row['Nom_Empleado'].'</td>
                            <td>'.$row['Cedula'].'</td>
                            <td>'.$row['Fec_Nacimiento'].'</td>
                            <td>'.$row['Tel_Empleado'].'</td>
                            <td>'.$row['Cel_Empleado'].'</td>
                            <td>'.$row['Dir_Empleado'].'</td>
							<td>';
							if($row['ID_Sexo'] == '1'){
								echo '<span class="label label-danger">Femenino</span>';
							}
                            else if ($row['ID_Sexo'] == '2' ){
								echo '<span class="label label-info">Masculino</span>';
							}
						echo ' 
						</td>
							<td>';
							if($row['ID_Est_Civil'] == '1'){
								echo '<span class="label label-success">Soltero(a)</span>';
							}
                            else if ($row['ID_Est_Civil'] == '2' ){
								echo '<span class="label label-info">Casado(a)</span>';
							}
                            else if ($row['ID_Est_Civil'] == '3' ){
								echo '<span class="label label-warning">Divorciado(a)</span>';
							} 
							else if ($row['ID_Est_Civil'] == '4' ){
								echo '<span class="label label-danger">Viudo(a)</span>';
                            }
                            else if ($row['ID_Est_Civil'] == '5' ){
								echo '<span class="label label-primary">Otros</span>';
							}
						echo '
                            </td>
                            <td>';
							if($row['ID_Cargo'] == '1'){
								echo '<span class="label label-success">Doctor(a)</span>';
							}
                            else if ($row['ID_Cargo'] == '2' ){
								echo '<span class="label label-info">Enfermero(a)</span>';
							}
                            else if ($row['ID_Cargo'] == '3' ){
								echo '<span class="label label-warning">Cajero(a)</span>';
							} 
							else if ($row['ID_Cargo'] == '4' ){
								echo '<span class="label label-warning">Limpieza</span>';
                            }
                            else if ($row['ID_Cargo'] == '5' ){
								echo '<span class="label label-warning">Seguridad</span>';
                            }
                            else if ($row['ID_Cargo'] == '6' ){
								echo '<span class="label label-warning">Otros</span>';
							}
						echo '
                            </td>
                            <td>'.$row['Salario'].'</td>
							<td>';
							if($row['ID_especialidad'] == '1'){
								echo '<span class="label label-success">Medicina General</span>';
							}
                            else if ($row['ID_especialidad'] == '2' ){
								echo '<span class="label label-info">Ortopedia</span>';
							}
                            else if ($row['ID_especialidad'] == '3' ){
								echo '<span class="label label-warning">Fisioterapia</span>';
                            }
                            else if ($row['ID_especialidad'] == '4' ){
								echo '<span class="label label-warning">Nutrición</span>';
                            } 
                            else if ($row['ID_especialidad'] == '5 ' ){
								echo '<span class="label label-warning">Odontología</span>';
                            } 
                            else if ($row['ID_especialidad'] == '6' ){
								echo '<span class="label label-warning">Psicología</span>';
                            } 
                            else if ($row['ID_especialidad'] == '7' ){
								echo '<span class="label label-warning">Podología</span>';
                            } 
                            else if ($row['ID_especialidad'] == '8' ){
								echo '<span class="label label-warning">Otros</span>';
							} 
						echo '
                            </td>
							<td>

							<a href="EditarPersonal.php?nik='.$row['ID_Empleado'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							<a href="Personal.php?aksi=delete&nik='.$row['ID_Empleado'].'" title="Eliminar" onclick="return confirm(\'¿Esta seguro de borrar los datos del colaborador '.$row['Nom_Empleado'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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