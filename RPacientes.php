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
                            <h2>Reporte de Pacientes</h2>
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
				<h3 class="mb-30">Pacientes por edad</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Rangos</div>
							<div class="visit">Porcentaje</div>
							<div class="percentage">Gráfico</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country">0-11</div>
							<div class="visit">120</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 20%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country">12-18</div>
							<div class="visit">150</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 40%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country">19-26</div>
							<div class="visit">130</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 80%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country">27-59</div>
							<div class="visit">200</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 100%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country">60-Mayores de 60</div>
							<div class="visit">120</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 60%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
                        </div>
					</div>
				</div>
			</div>
			</div>
		</div>
    </div>
    <div class="container">
		 <div class="row">
				<div class="col-lg-8 col-md-8">
                <div class="section-top-border">
				<h3 class="mb-30">Pacientes Nuevos</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Fecha de ingreso</div>
							<div class="visit">Porcentaje</div>
							<div class="percentage">Gráfico</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country">15/04/2020</div>
							<div class="visit">15</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 80%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country">17/04/2020</div>
							<div class="visit">10</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 40%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country">19/04/2020</div>
							<div class="visit">13</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 60%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country">20/04/2020</div>
							<div class="visit">20</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 100%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
    </div>
        <div class="container">
		    <div class="row">
				<h3 class="mb-30">Pacientes por genero:</h3>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <h3 align="center">Pacientes Masculinos</h3>
                    <strong class="number" data-number="50"><h3 align="center">15</h3></strong>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <h3 align="center">Pacientes Femeninos</h3>
                    <strong class="number" data-number="50"><h3 align="center">10</h3></strong>
                </div>
            </div>
            <div class="button-group-area mt-30 btn-lg">
                <a href="#" class="genric-btn primary circle arrow">Imprimir Reporte<span class="lnr lnr-arrow-right"></span></a>
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