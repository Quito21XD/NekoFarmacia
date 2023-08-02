<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="content">
    <!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Reporte Proveedores</h1>
		<a href="pdf/rpdf_proveedor.php" class="btn btn-primary">Imprimir</a>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>RUC</th>
							<th>PROVEEDOR</th>
							<th>TELEFONO</th>
							<th>DIRECCION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM proveedor");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['codproveedor']; ?></td>
									<td><?php echo $data['contacto']; ?></td>
									<td><?php echo $data['proveedor']; ?></td>
									<td><?php echo $data['telefono']; ?></td>
									<td><?php echo $data['direccion']; ?></td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>


</div>
<!-- /.container-fluid -->



<?php include_once "includes/footer.php"; ?>