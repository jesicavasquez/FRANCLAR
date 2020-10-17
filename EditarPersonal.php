<!doctype html>
<html lang="en">

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
			$sql = mysqli_query($con, "SELECT tbl_empleado.ID_Empleado,	
            tbl_empleado.Nom_Empleado,
            tbl_empleado.Cedula,
            tbl_empleado.Fec_Nacimiento,	
            tbl_empleado.Tel_Empleado,	
            tbl_empleado.Cel_Empleado,
            tbl_empleado.Dir_Empleado,
            tbl_sexo.ID_Sexo,
            tbl_sexo.Descripcion_sexo,	
            tbl_estado_civil.ID_Est_Civil,
            tbl_estado_civil.Descripcion_est_civil,
            tbl_cargo.ID_Cargo,
            tbl_cargo.nomb_cargo,
            tbl_empleado.Salario,
            tbl_especialidad.ID_especialidad,
            tbl_especialidad.Descripcion_espec FROM tbl_empleado 
            INNER JOIN tbl_sexo on tbl_empleado.ID_Sexo = tbl_sexo.ID_Sexo
            INNER JOIN tbl_estado_civil on tbl_empleado.ID_Est_Civil = tbl_estado_civil.ID_Est_Civil
            INNER JOIN tbl_cargo on tbl_empleado.ID_Cargo = tbl_cargo.ID_Cargo
            INNER JOIN tbl_especialidad on tbl_empleado.ID_Especialidad = tbl_especialidad.ID_especialidad WHERE ID_Empleado='$nik'");
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
                                    <input type="text" class="form-control" id="NumeroIDEm" name="NumeroID" value="<?php echo $row ['Cedula']; ?>" placeholder="Número de identidad" disabled="false" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" id="FechaNEm" name="FechaN" value="<?php echo $row ['Fec_Nacimiento']; ?>" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" disabled="false" placeholder="Fecha de nacimiento" required>
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
                                    <option value="<?php echo $row ['ID_Sexo']; ?>"><?php echo $row ['Descripcion_sexo']; ?></option>
                                         <?php
                                       	  $dato= $row ['ID_Sexo'];
                                          $sql=mysqli_query($con,"SELECT * FROM tbl_sexo WHERE ID_Sexo<>'$dato'");
                                          
                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Sexo']."'>".$fila['Descripcion_sexo']."</option>";
                                          }     
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" required>
                                    <select class="form-control" id="EstadoCEm" name="EstadoC" required>
                                    <option value="<?php echo $row ['ID_Est_Civil']; ?>"><?php echo $row ['Descripcion_est_civil']; ?></option>
                                         <?php
                                       	  $dato= $row ['ID_Est_Civil'];
                                          $sql=mysqli_query($con,"SELECT * FROM tbl_estado_civil WHERE ID_Est_Civil<>'$dato'");
                                          
                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Est_Civil']."'>".$fila['Descripcion_est_civil']."</option>";
                                          }     
                                        ?>
                                    </select>
                                </div>
                                <h2>Datos Especificos</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="cargoem" name="Cargo" required>
                                    <option value="<?php echo $row ['ID_Cargo']; ?>"><?php echo $row ['nomb_cargo']; ?></option>
                                         <?php
                                       	  $dato= $row ['ID_Cargo'];
                                          $sql=mysqli_query($con,"SELECT * FROM tbl_cargo WHERE ID_Cargo<>'$dato'");
                                          
                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Cargo']."'>".$fila['nomb_cargo']."</option>";
                                          }     
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="SalarioEm" name="Salario" value="<?php echo $row ['Salario']; ?>" placeholder="Salario" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" id="EspecialidadEm" name="Especialidad" required>
                                    <option value="<?php echo $row ['ID_especialidad']; ?>"><?php echo $row ['Descripcion_espec']; ?></option>
                                         <?php
                                       	  $dato= $row ['ID_especialidad'];
                                          $sql=mysqli_query($con,"SELECT * FROM tbl_especialidad WHERE ID_especialidad<>'$dato'");
                                          
                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_especialidad']."'>".$fila['Descripcion_espec']."</option>";
                                          }     
                                        ?>
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