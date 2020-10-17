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
    
    <form class="form-inline my-2 my-lg-0 float-left">
        <a href="agregarpersonal.php" class="genric-btn info circle">Agregar</a>
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
					<th>Nombre</th>
					<th>Identidad</th>
                    <th>Fecha de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Dirección</th>
					<th>Género</th>
					<th>Estado Civil</th>
					<th>Cargo</th>
					<th>Salario</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
				</tr>
				<?php
				$sql = mysqli_query($con, "SELECT tbl_empleado.ID_Empleado,	
				tbl_empleado.Nom_Empleado,
				tbl_empleado.Cedula,
				tbl_empleado.Fec_Nacimiento,	
				tbl_empleado.Tel_Empleado,	
				tbl_empleado.Cel_Empleado,
				tbl_empleado.Dir_Empleado,
				tbl_sexo.Descripcion_sexo,	
				tbl_estado_civil.Descripcion_est_civil,
				tbl_cargo.nomb_cargo,
				tbl_empleado.Salario,
				tbl_especialidad.Descripcion_espec FROM tbl_empleado 
				INNER JOIN tbl_sexo on tbl_empleado.ID_Sexo = tbl_sexo.ID_Sexo
				INNER JOIN tbl_estado_civil on tbl_empleado.ID_Est_Civil = tbl_estado_civil.ID_Est_Civil
				INNER JOIN tbl_cargo on tbl_empleado.ID_Cargo = tbl_cargo.ID_Cargo
				INNER JOIN tbl_especialidad on tbl_empleado.ID_Especialidad = tbl_especialidad.ID_especialidad");
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
							<td><span class="label label-info">'.$row['Descripcion_sexo'].'</span></td>
							<td><span class="label label-success">'.$row['Descripcion_est_civil'].'</span></td>
							<td><span class="label label-warning">'.$row['nomb_cargo'].'</span></td>
							<td>'.$row['Salario'].'</td>
							<td><span class="label label-primary">'.$row['Descripcion_espec'].'</span></td>				
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