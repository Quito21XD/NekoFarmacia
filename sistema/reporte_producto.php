<?php include_once "includes/header.php"; ?>
<div class="content">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Reporte Productos</h1>
		<a href="pdf/rpdf_producto.php" class="btn btn-primary">Imprimir</a>
	</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="table">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>PRODUCTO</th>
								<th>PRECIO</th>
								<th>STOCK</th>

							</tr>
						</thead>
						<tbody>
							<?php
							include "../conexion.php";

							$query = mysqli_query($conexion, "SELECT * FROM producto");
							$result = mysqli_num_rows($query);
							if ($result > 0) {
								while ($data = mysqli_fetch_assoc($query)) { ?>
									<tr>
										<td><?php echo $data['codproducto']; ?></td>
										<td><?php echo $data['descripcion']; ?></td>
										<td><?php echo $data['precio']; ?></td>
										<td><?php echo $data['existencia']; ?></td>
									
									</tr>
							<?php }
							} ?>
						</tbody>

					</table>
				</div>

			</div>
		</div>
</div>
<?php include_once "includes/footer.php"; ?>