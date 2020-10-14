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
                            <h2>Agregar Paciente</h2>
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
                        <form method="POST" action="GuardarPaciente.php" autocomplete="off">
                            <h2>Datos Personales</h2>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="Nombre" onkeypress="return soloLetras(event)"placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="NumeroID" maxlength="13" placeholder="Número de identidad">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="FechaN" placeholder="Fecha de nacimiento">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Edad" onkeypress="return solonumeros(event)" placeholder="Edad">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="Email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" id="Teléfono" onkeypress="return solonumeros(event)"maxlength="8" placeholder="Teléfono fijo">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Celular"  onkeypress="return solonumeros(event)" maxlength="8" placeholder="Celular">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="Direccion" placeholder="Dirección">
                                </div>
                                <h2>Datos Generales</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Sexo">
                                        <option value="" selected>Seleccione el sexo</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_sexo");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Sexo']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="EstadoC">
                                        <option value="" selected>Seleccione el estado civil</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_estado_civil");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Est_Civil']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Religion">
                                        <option value="" selected>Seleccione la religión</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_religion");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Religion']."'>".$fila['Descripción']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="TSangre">
                                        <option value="" selected>Seleccione el tipo de sangre</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_tipo_sangre");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Tipo_Sangre']."'>".$fila['Descripción']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" id="TPaciente">
                                        <option value="" selected>Seleccione el tipo de pacientes</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_tipo_paciente");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_TipoPaciente']."'>".$fila['Descripción']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                
                                <h2>Contacto de emergencia</h2>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="NombreEmer" placeholder="Nombre de contacto">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Parentesco" placeholder="Parentesco">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Telefono" placeholder="Teléfono fijo">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Celular" placeholder="Celular">
                                </div>

                                <h2>Antecedentes</h2>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Personales" rows="2"
                                        placeholder="Personales"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Hospitalarios" rows="2"
                                        placeholder="Hospitalarios"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Alergicos" rows="2"
                                        placeholder="Alérgicos"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Familiares" rows="2"
                                        placeholder="Familiares"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Habitos" rows="2"
                                        placeholder="Hábitos"></textarea>
                                </div>
                                <div class="regerv_btn">
                                    <a type="submit" name="add" class="btn_2">Guardar</a>
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
