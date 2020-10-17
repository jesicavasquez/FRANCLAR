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
                            <h2>Preclínica</h2>
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
                        <form>
                            <h2>Resultados</h2>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="IDPreclinica" placeholder="ID Preclínica">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="PA" placeholder="Presión Arterial">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="FC" placeholder="Frecuencia Cardiaca">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="FR" placeholder="Frecuencia Respiratoria">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="Temperatura" placeholder="Temperatura">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="PAM" placeholder="Presión Arterial Media">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="Glucometria" placeholder="Glucometría">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="Peso" placeholder="Peso">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="Talla" placeholder="Talla">
                                </div>
                                <div class="regerv_btn">
                                    <a href="#" class="btn_2">Guardar</a>
                                    <a href="Preclinica.php" class="btn_2">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

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