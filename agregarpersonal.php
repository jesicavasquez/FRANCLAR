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

     <!--::regervation_part start::-->
     <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form method="POST" action="GuardarPersonal.php" autocomplete="off">
                            <h2>Datos Personales</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="NombreEm" name="Nombre" placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" maxlength="13" id="NumeroIDEm" name="NumeroID" placeholder="Número de identidad" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" id="FechaNEm" name="FechaN" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="Fecha de nacimiento" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" maxlength="8" id="TelefonoEm" name="Telefono" placeholder="Teléfono fijo">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" maxlength="8" id="CelularEm" name="Celular" placeholder="Celular" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="DireccionEm" name="Direccion" placeholder="Dirección" required>
                                </div>
                                <h2>Datos Generales</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="SexoEm" name="Sexo" required>
                                        <option value="">Seleccione el sexo</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_sexo");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Sexo']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" required>
                                    <select class="form-control" id="EstadoCEm" name="EstadoC">
                                        <option value="" selected>Seleccione su estado civil</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_estado_civil");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Est_Civil']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <h2>Datos Específicos</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="CargoEm" name="Cargo" required>
                                        <option value="0" selected>Seleccione un cargo</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_cargo");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Cargo']."'>".$fila['nomb_cargo']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="SalarioEm" name="Salario" placeholder="Salario" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" id="EspecialidadEm" name="Especialidad" required>
                                        <option value="" selected>Seleccione una especialidad</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_especialidad");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_especialidad']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="regerv_btn">
                                    <button type="submit" name="add" class="btn_2">Guardar</button>
                                    <a href="Personal.php" class="btn_2">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!-- footer part start-->
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