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
                            <h2>Reporte de Citas</h2>
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
				<h3 class="mb-30">Citas por área</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Área</div>
							<div class="visit">Porcentaje</div>
							<div class="percentage">Gráfico</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country">Medicina General</div>
							<div class="visit">200</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 100%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country">Ortopedia</div>
							<div class="visit">150</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 75%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country">Fisioterapia</div>
							<div class="visit">130</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 50%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country">Nutrición</div>
							<div class="visit">100</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 30%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country">Odontología</div>
							<div class="visit">170</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 90%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
                        </div>
                        <div class="table-row">
							<div class="serial">06</div>
							<div class="country">Psicología</div>
							<div class="visit">140</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 60%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
                        </div>
                        <div class="table-row">
							<div class="serial">07</div>
							<div class="country">Podología</div>
							<div class="visit">110</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" style="width: 60%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
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