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

     <!-- breadcrumb start-->
     <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Reporte de Control de empleados</h2>
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
				<div class="col-lg-8 col-md-8">
                <div class="section-top-border">
				<h3 class="mb-30">Empleados</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">ID</div>
							<div class="country">Empleado</div>
							<div class="visit">Área</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country">Abigail Lopez</div>
							<div class="visit">Medicina General</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country">Mario Canales</div>
							<div class="visit">Ortopedia</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country">Elizabeth Carcamo</div>
							<div class="visit">Fisioterapia</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country">Elsa Nuñez</div>
							<div class="visit">Nutrición</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country">Jorge Gomez</div>
							<div class="visit">Odontología</div>
                        </div>
                        <div class="table-row">
							<div class="serial">06</div>
							<div class="country">Ana Perez</div>
							<div class="visit">Psicología</div>
                        </div>
                        <div class="table-row">
							<div class="serial">07</div>
							<div class="country">Sandra Ramos</div>
							<div class="visit">Podología</div>
                        </div>
					</div>
				</div>
			</div>
            </div>
            <div class="button-group-area mt-30 btn-lg">
                <a href="#" class="genric-btn primary circle arrow">Imprimir Reporte<span class="lnr lnr-arrow-right"></span></a>
            </div>
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