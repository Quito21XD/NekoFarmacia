<?php
include_once "includes/header.php";
include "../conexion.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['producto']) || empty($_POST['precio']) || empty($_POST['info'])) {
        $alert = '<div class="alert alert-primary" role="alert">
              Todos los campos son requeridos
            </div>';
    } else {
        $codproducto = $_GET['id'];
        $proveedor = $_POST['proveedor'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $info = $_POST['info'];

        // Procesar la carga de la imagen
        if (isset($_FILES['imagen']) && $_FILES['imagen']['tmp_name']) {
          // Procesar la carga de la imagen
          $uploadDir = '../images/'; // Crea este directorio para almacenar las imágenes
          $imageName = $_FILES['imagen']['name'];
          $imageTmp = $_FILES['imagen']['tmp_name'];
          $imageUrl = $uploadDir . $imageName;
          move_uploaded_file($imageTmp, $imageUrl);
      } else {
          $imageUrl = ''; // URL vacía si no se cargó ninguna imagen
      }      

        // Guardar la URL en la base de datos junto con los demás datos
        $url_imagen= substr($imageUrl, 3);
        $query_update = mysqli_query($conexion, "UPDATE producto SET descripcion = '$producto', proveedor= $proveedor, precio= $precio, info = '$info', url_imagen = '$url_imagen' WHERE codproducto = $codproducto");

        if ($query_update) {
            $alert = '<div class="alert alert-primary" role="alert">
              Modificado
            </div>';
        } else {
            $alert = '<div class="alert alert-primary" role="alert">
                Error al Modificar
              </div>';
        }
    }
}

// Validar producto

if (empty($_REQUEST['id'])) {
  header("Location: lista_productos.php");
} else {
  $id_producto = $_REQUEST['id'];
  if (!is_numeric($id_producto)) {
    header("Location: lista_productos.php");
  }
  $query_producto = mysqli_query($conexion, "SELECT p.codproducto, p.descripcion, p.precio, p.info, p.url_imagen, pr.codproveedor, pr.proveedor FROM producto p INNER JOIN proveedor pr ON p.proveedor = pr.codproveedor WHERE p.codproducto = $id_producto");
  $result_producto = mysqli_num_rows($query_producto);

  if ($result_producto > 0) {
    $data_producto = mysqli_fetch_assoc($query_producto);
  } else {
    header("Location: lista_productos.php");
  }
}
?>
<!-- Begin Page Content -->
<div class="content">

  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card">
        <div class="card-header">
          Modificar producto
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <?php echo isset($alert) ? $alert : ''; ?>
            <div class="form-group">
              <label for="nombre">Proveedor</label>
              <?php $query_proveedor = mysqli_query($conexion, "SELECT * FROM proveedor ORDER BY proveedor ASC");
              $resultado_proveedor = mysqli_num_rows($query_proveedor);
              mysqli_close($conexion);
              ?>
              <select id="proveedor" name="proveedor" class="form-control">
                <option value="<?php echo $data_producto['codproveedor']; ?>" selected><?php echo $data_producto['proveedor']; ?></option>
                <?php
                if ($resultado_proveedor > 0) {
                  while ($proveedor = mysqli_fetch_array($query_proveedor)) {
                    // code...
                ?>
                    <option value="<?php echo $proveedor['codproveedor']; ?>"><?php echo $proveedor['proveedor']; ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="producto">Producto</label>
              <input type="text" class="form-control" placeholder="Ingrese nombre del producto" name="producto" id="producto" value="<?php echo $data_producto['descripcion']; ?>">

            </div>
            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="text" placeholder="Ingrese precio" class="form-control" name="precio" id="precio" value="<?php echo $data_producto['precio']; ?>">

            </div>
            <div class="form-group">
              <label for="info">Detalles</label>
              <input type="text" class="form-control" placeholder="Ingrese informacion del producto" name="info" id="info" value="<?php echo $data_producto['info']; ?>">

            </div>
            <div>
              <label for="imagen">Seleccionar Imagen</label>
              <input type="file" name="imagen" id="imagen" class="image/*"><br>
              <label>Imagen actual:</label>
              <img src="<?php echo "../".$data_producto['url_imagen']; ?>" alt="Imagen predeterminada" width="200">
            </div>
            <input type="submit" value="Actualizar Producto" class="btn btn-outline-primary">
            <a href="lista_productos.php" class="btn btn-outline-danger">Regresar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>