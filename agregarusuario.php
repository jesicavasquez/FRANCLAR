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
                            <h2>Usuario</h2>
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
                        <form method="POST" action="GuardarUsuario.php" autocomplete="off">
                            <h2>Datos del usuario</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="ColaboradorU" name="Colaborador" required>
                                        <option value="">Seleccione al colaborador</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_empleado");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Empleado']."'>".$fila['Nom_Empleado']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="EmailU" name="Email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" onkeypress="return soloLetras(event)" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="NomU" name="Nom_Usuario" placeholder="Nombre de usuario" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="passwordU" name="Password" placeholder="Contraseña" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="EstadoU" name="Estado" required>
                                        <option value="">Seleccione el estado</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_estado_usuario");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Estado']."'>".$fila['Descripcion']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="RolU" name="Rol" required>
                                        <option value="">Seleccione el rol</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_roles");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Rol']."'>".$fila['Rol']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="regerv_btn">
                                    <button type="submit" name="add" class="btn_2">Guardar</button>
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