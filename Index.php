<!doctype html>
<html lang="en">

<?php
include 'head.php'
?>

<body>
    <!--::header part start::-->
    <?php
    include 'header.php';
    ?>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Médicos y personal especializados para atender tus necesidades y las de tu familia.</h1>
                            <h3>Estamos aquí para su cuidado</h3>
                            <a href="Pacientes.php" class="btn_2">Ingresar Paciente</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Sobre nosotros</h2>
                        <p>Somos un equipo de trabajo brindando una atención medica integral con calidad y calidez, satisfaciendo las necesidades en las diferentes áreas que el complejo medico ofrece.</p>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="img/icon/banner_1.svg" alt="">
                                <h5>Salud</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_2.svg" alt="">
                                <h5>Citas</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_3.svg" alt="">
                                <h5>Servicio Calificado</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

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