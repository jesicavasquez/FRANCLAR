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
                            <h2>Facturación</h2>
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
                    <background="facturacion.jpeg">
						<h3 class="mb-30">Factura</h3>
						<form action="#">
                            <div class="mt-10">
								<input type="text" name="IDConsulta" placeholder="ID Consulta"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID Consulta'" required
                                    class="single-input">
                            </div>
							<div class="mt-10">
								<input type="text" name="Nombre" placeholder="Nombre"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="Apellidos" placeholder="Apellidos"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Apellidos'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="Precio_Consulta" placeholder="Precio de la consulta"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Precio de la consulta'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="Subtotal" placeholder="Subtotal"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subtotal'" required
                                    class="single-input">
                            </div>
							<div class="mt-10">
								<input type="text" name="Descuento" placeholder="Descuento"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descuento'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
								<input type="text" name="Total" placeholder="Total"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total'" required
                                    class="single-input">
                            </div>
                            <div class="button-group-area mt-30 btn-lg">
                                <a href="#" class="genric-btn primary circle arrow">Cobrar<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                            </br>
                            </br>
						</form>
					</div>
					<div class="col-lg-3 col-md-4 mt-sm-30">
						<div class="single-element-widget mt-30">
							<h3 class="mb-30">Tratamiento Adicional</h3>
							<div class="switch-wrap d-flex justify-content-between">
								<p>Sí</p>
								<div class="primary-radio">
									<input type="checkbox" id="default-radio">
									<label for="default-radio"></label>
                                </div>
                                <p>No</p>
								<div class="primary-radio">
									<input type="checkbox" id="primary-radio" checked>
									<label for="primary-radio"></label>
								</div>
                            </div>
                        </div>
                        <div class="single-element-widget mt-30">
							<h3 class="mb-30">Lista de tratamientos</h3>
							<div class="default-select" id="default-select">
										<select>
											<option value=" 1">Tratamientos</option>
								<option value="1">Tratamiento1</option>
								<option value="2">Tratamiento2</option>
								<option value="3">Tratamiento3</option>
								<option value="4">Tratamiento4</option>
								</select>
							</div>
                        </div>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                        <div class="button-group-area mt-30 btn-lg">
                            <a href="#" class="genric-btn warning circle arrow">Facturar<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <!--::regervation_part end::-->

    <!-- footer part start-->
    <br>
    <br>
    <h2>Facturación</h2>
    <br>
    <br>
                <div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>ID Consulta</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Precio de la consulta</th>
					<th>Subtotal</th>
                    <th>Descuento</th>
					<th>Total</th>
				</tr>
				<?php
				
				$sql = mysqli_query($con, "SELECT * FROM consulta ORDER BY ID_Consulta ASC");
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							
							<td>'.$row['id_Pre_clinica'].'</td>
							<td><a href="perfilpreclinica.php?nik='.$row['id_Pre_clinica'].'</a></td>
							<td>'.$row['id_paciente'].'</td>
							<td>'.$row['peso'].'</td>
	                        <td>'.$row['talla'].'</td>
							<td>'.$row['frecuencia_cardiaca'].'</td>
                            <td>'.$row['frecuencia_respiratoria'].'</td>
                            <td>'.$row['presion'].'</td>

							<a href="editarpreclinica.php?nik='.$row['ID_Consulta'].'" title="Editar datos" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							<a href="clinica.php?aksi=delete&nik='.$row['ID_Consulta'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombres'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>       
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <?php
        include 'script.php'
    ?>
</body>

</html>