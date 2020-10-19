<!doctype html>
<html lang="en">

<?php
session_start();
include 'head.php'
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
                            <h2>Mantenimiento</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::regervation_part start::-->
    <div class="container">
		<div class="row">
				<a href="personal.php" class="btn_2">Personal</a>
				<a href="usuarios.php" class="btn_2">Usuarios</a>
				<a href="#" class="btn_2">Parámetros</a>
				<a href="cargos.php" class="btn_2">Cargos</a>
				<a href="Especialidades.php" class="btn_2">Especialidades</a>
				<a href="Servicios.php" class="btn_2">Servicios</a>
                <a href="Estado_Civil.php" class="btn_2">Estado Civil</a>
                <a href="Sexos.php" class="btn_2">Sexos</a>
                <a href="Religiones.php" class="btn_2">Religiones</a>
                <a href="Tipo_Sangre.php" class="btn_2">Tipos de Sangre</a>
                <a href="Diagnosticos.php" class="btn_2">Diagnósticos</a>
			
		</div>
    </div>
</br>
    <!--::regervation_part end::-->

    <!-- footer part start-->
    <?php
        include 'footer.php'
    ?>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <?php
        include 'script.php'
    ?>
</body>

</html>