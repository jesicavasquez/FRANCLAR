<!doctype html>
<html lang="en">

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
                            <h2>Pacientes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
  
    <!-- footer part start-->
    <br>
    <br>
    <h2>Pacientes</h2>
    <form class="form-inline my-2 my-lg-0 float-left">
        <a href="agregarpaciente.php" class="genric-btn info circle">Agregar</a>
    </form>
    <br>
    <form class="form-inline my-2 my-lg-0 float-right">
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
        <a href=""><button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button></a>
    </form>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Nombre</th>
                <th>Identidad</th>
                <th>Fecha de nacimiento</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Teléfono Fijo</th>
                <th>Celular</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </table>
        </div>
        <?php
				
				$sql = mysqli_query($con, "SELECT * FROM consulta ORDER BY ID_Consulta ASC");
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							
							<td>'.$row['id_Pre_clinica'].'</td>
							<td><a href="perfilpreclinica.php?nik='.$row['id_Pre_clinica'].'</a></td>
							<td>'.$row['id_paciente'].'</td>
							<td>'.$row['peso'].'</td>
	                        <td>'.$row['talla'].'</td>
							<td>'.$row['frecuencia_cardiaca'].'</td>
                            <td>'.$row['frecuencia_respiratoria'].'</td>
                            <td>'.$row['presion'].'</td>

							<a href="editarpreclinica.php?nik='.$row['ID_Consulta'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							<a href="clinica.php?aksi=delete&nik='.$row['ID_Consulta'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombres'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
                ?>
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