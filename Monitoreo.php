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
                            <h2>Turnero</h2>
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
					<div class="col-lg-3 col-md-4 mt-sm-30">
                         <h3 align="center">Turno</h3>
                         <textarea class="form-control" id="Turno" rows="20"
                         placeholder=""></textarea>
                     </div>
                    <div class="col-lg-8 col-md-8">
                        <h3 align="center">Turno atendido</h3>
                        <textarea class="form-control" id="Monitoreo" rows="20"
                        placeholder=""></textarea>
					 </div>
				</div>
			</div>
		</div>
	</div>
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