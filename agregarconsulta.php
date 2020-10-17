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
                            <h2>Ingresar una consulta</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="IDConsulta" placeholder="Id Consulta">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Anamnesis" rows="4"
                                        placeholder="Anamnesis"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="ExamenFisico" placeholder="Examen Físico">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Tratamiento" rows="4"
                                        placeholder="Tratamiento"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="ProCita" placeholder="Próxima Consulta">
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="btn_2">Ingresar</a>
                                <a href="Consulta.php" class="btn_2">Ingresar</a>
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