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
                            <h2>Editar Personal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM tbl_empleado WHERE ID_Empleado='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
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
				
				$update = mysqli_query($con, "UPDATE tbl_empleado SET Nom_Empleado='$nombre', Cedula='$numeroid', Fec_Nacimiento='$fechan', Tel_Empleado='$telefono', Cel_Empleado='$celular', Dir_Empleado='$direccion', ID_Sexo='$sexo', ID_Est_Civil='$estado_civil', ID_Cargo='$cargo', Salario='$salario', ID_Especialidad='$especialidad' WHERE ID_Empleado='$nik'") or die(mysqli_error());
				if($update){
                    echo "<script type='text/javascript'>
                        alert('Ha sido modificado exitosamente');
                        window.location.href= 'Personal.php';
                    </script>";
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
                }
			}
		?>
    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form method="POST" action="" autocomplete="off">
                            <h2>Datos Personales</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="NombreEm" value="<?php echo $row ['Nom_Empleado']; ?>" name="Nombre" placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="NumeroIDEm" name="NumeroID" value="<?php echo $row ['Cedula']; ?>" placeholder="Número de identidad" disabled="true" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" id="FechaNEm" name="FechaN" value="<?php echo $row ['Fec_Nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" disabled="true" placeholder="Fecha de nacimiento" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" onkeypress="return solonumeros(event)" class="form-control" id="TelefonoEm" name="Telefono" value="<?php echo $row ['Tel_Empleado']; ?>" placeholder="Teléfono fijo">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="CelularEm" name="Celular" value="<?php echo $row ['Cel_Empleado']; ?>" placeholder="Celular" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="DireccionEm" name="Direccion" value="<?php echo $row ['Dir_Empleado']; ?>" placeholder="Dirección" required>
                                </div>
                                <h2>Datos Generales</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="SexoEm" name="Sexo" required>
                                        <option value="">Seleccione el sexo</option>
                                        <option value="1" <?php if ($row ['ID_Sexo']=='1'){echo "selected";} ?>>Femenino</option>
							            <option value="2" <?php if ($row ['ID_Sexo']=='2'){echo "selected";} ?>>Masculino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" required>
                                    <select class="form-control" id="EstadoCEm" name="EstadoC">
                                        <option value="" selected>Seleccione su estado civil</option>
                                        <option value="1" <?php if ($row ['ID_Est_Civil']=='1'){echo "selected";} ?>>Soltero</option>
							            <option value="2" <?php if ($row ['ID_Est_Civil']=='2'){echo "selected";} ?>>Casado</option>
                                        <option value="3" <?php if ($row ['ID_Est_Civil']=='3'){echo "selected";} ?>>Divorciado</option>
							            <option value="4" <?php if ($row ['ID_Est_Civil']=='4'){echo "selected";} ?>>Viudo</option>
                                    </select>
                                </div>
                                <h2>Datos Especificos</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="cargoem" name="Cargo" required>
                                        <option value="" selected>Seleccione un Rol</option>
                                        <option value="1" <?php if ($row ['ID_Cargo']=='1'){echo "selected";} ?>>Doctor(a)</option>
							            <option value="2" <?php if ($row ['ID_Cargo']=='2'){echo "selected";} ?>>Enfermero(a)</option>
                                        <option value="3" <?php if ($row ['ID_Cargo']=='3'){echo "selected";} ?>>Cajero(a)</option>
							            <option value="4" <?php if ($row ['ID_Cargo']=='4'){echo "selected";} ?>>Limpieza</option>
                                        <option value="5" <?php if ($row ['ID_Cargo']=='4'){echo "selected";} ?>>Seguridad</option>
                                        <option value="6" <?php if ($row ['ID_Cargo']=='4'){echo "selected";} ?>>Otros</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="SalarioEm" name="Salario" value="<?php echo $row ['Salario']; ?>" placeholder="Salario" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" id="EspecialidadEm" name="Especialidad" required>
                                        <option value="" selected>Seleccione una especialidad</option>
                                        <option value="1" <?php if ($row ['ID_especialidad']=='1'){echo "selected";} ?>>Medicina General</option>
							            <option value="2" <?php if ($row ['ID_especialidad']=='2'){echo "selected";} ?>>Ortopedia</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Fisioterapia</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Nutrición</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Odontología</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Psicología</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Podología</option>
                                        <option value="3" <?php if ($row ['ID_especialidad']=='3'){echo "selected";} ?>>Otros</option>
                                    </select>
                                </div>
                                <div class="regerv_btn">
                                    <button type="submit" name="save" class="btn_2">Guardar</button>
                                    <a href="Personal.php" class="btn_2">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'Copyright.php'
    ?>
<!-- jquery plugins here-->
    <?php
        include 'script.php'
    ?>

</body>

</html>