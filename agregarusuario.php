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
                            <h2>Agregar Usuario</h2>
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
                                    <select class="form-control" id="ColaboradorU" name="Colaborador" onchange="crear_usuario();" required>
                                        <option value="0">Seleccione al Colaborador</option>
                                        <?php
                                          $sql=$con -> query("Select * from tbl_empleado");

                                          while($fila=$sql->fetch_array()){
                                              echo "<option value='".$fila['ID_Empleado']."'>".$fila['Nom_Empleado']."</option>";
                                          }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="EmailU" name="Email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text"  class="form-control" id="NomU" name="Nom_Usuario"  placeholder="Nombre de usuario" readonly>
                                </div>                                
                                <div class="input-group col-md-4">
                                    <input value= "<?php echo generar_password_complejo(8) ?>" type="Password" class="form-control" id="passwordU" name="Password"  minlength="8" maxlength="30" placeholder="Contraseña" required>
                                    <span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon-eye-open"></span>
                                </div>
                                
                                
                                
                                <div class="form-group col-md-4">
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
                                <br>
                                <br>
                                <div class="regerv_btn">
                                    <button type="submit" name="add" class="btn_2">Guardar</button>
                                    <a href="Usuarios.php" class="btn_2">Cancelar</a>
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
    function generar_password_complejo($largo){
        $cadena_base = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $cadena_base .= '0123456789';
        $cadena_base .= '!@#%^&*()_,./<>?;:[]{}\|=+';

        $password = '';
        $limite = strlen($cadena_base) - 1;

        for ($i=0; $i < $largo; $i++)

            $password .= $cadena_base[rand(0, $limite)];

        return $password;
    }


    ?>            

    <script>
    
    function crear_usuario(){
        var ColaboradorU = document.getElementById('ColaboradorU');
        var displaytext = ColaboradorU.options[ColaboradorU.selectedIndex].text;
        var primerletra = displaytext.substr(0,1);
        var palabras = displaytext.split(" ");
        var apellido = palabras[2];
        var user = (primerletra + apellido).toUpperCase();
        

        document.getElementById('NomU').value = user;
    }
    
    </script>                          



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