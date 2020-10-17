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
                            <h2>Agregar Cita</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!-- our depertment part start-->
    <section class="our_depertment section_padding single_pepertment_page">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                            <form>
                            <h2>Ingresar una cita</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="IDPac" placeholder="Id Paciente">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="IDCit" rows="4" placeholder="ID Cita">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" id="FechaAten" placeholder="Fecha de atención">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="time" id="default-picker" class="form-control" placeholder="Seleccione la hora">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Precio" placeholder="Precio">
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="btn_2">Ingresar</a>
                                <a href="Cita.php" class="btn_2">Cancelar</a>
                            </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

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