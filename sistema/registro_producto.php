<?php
include_once "includes/header.php";
include "../conexion.php";

if (!empty($_POST)) {
  $alert = "";
  $ruta_archivo = "../images/default.jpg"; // Definimos la variable antes del bloque if

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["imagen"])) {
    $carpeta_guardado = "../images/"; // Corregir la ruta de la carpeta donde se guarda la imagen
    $nombre_archivo = $_FILES["imagen"]["name"];
    $tipo_imagen = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
    $nuevo_nombre_archivo = $_POST["nuevo_nombre"];

    if (empty($nuevo_nombre_archivo)) {
      // Si no se ingresó un nuevo nombre, se utiliza el nombre original del archivo
      $ruta_archivo = $carpeta_guardado . $nombre_archivo;
    } else {
      // Si se ingresó un nuevo nombre, se utiliza ese nombre con la extensión original
      $ruta_archivo = $carpeta_guardado . $nuevo_nombre_archivo . "." . $tipo_imagen;
    }

    $tipos_permitidos = array("jpg", "jpeg", "png", "gif");
    if (in_array($tipo_imagen, $tipos_permitidos)) {
      if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_archivo)) {
        echo "Imagen guardada con éxito en: " . $ruta_archivo;
      } else {
        echo "Ocurrió un error al guardar la imagen.";
      }
    } else {
      echo "Formato de imagen no permitido. Solo se permiten archivos JPG, JPEG, PNG o GIF.";
    }

    // Actualizar el valor del campo oculto "imagen_nombre" con el nombre del archivo original
    $_POST["imagen_nombre"] = $nombre_archivo;
  }

  if (empty($_POST['proveedor']) || empty($_POST['producto']) || empty($_POST['precio']) || $_POST['precio'] < 0 || empty($_POST['cantidad']) || $_POST['cantidad'] < 0 || empty($_POST['info'])) {
    $alert = '<div class="alert alert-danger" role="alert">
              Todo los campos son obligatorios
            </div>';
  } else {
    $proveedor = $_POST['proveedor'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $info = $_POST['info'];
    $cantidad = $_POST['cantidad'];
    $usuario_id = $_SESSION['idUser'];
    $url_imagen = substr($ruta_archivo, 3); // Elimina las primeras tres letras

    // Utilizar el valor actualizado del campo oculto "imagen_nombre" en la consulta de inserción
    $query_insert = mysqli_query($conexion, "INSERT INTO producto(proveedor,descripcion,precio,existencia,info,url_imagen,usuario_id) VALUES ('$proveedor', '$producto', '$precio', '$cantidad','$info','$url_imagen','$usuario_id')");
    if ($query_insert) {
      $alert = '<div class="alert alert-primary" role="alert">
              Producto Registrado
            </div>';
    } else {
      $alert = '<div class="alert alert-danger" role="alert">
              Error al registrar el producto
            </div>';
    }
  }
}
?>

<!-- Begin Page Content -->
<div class="content">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
    <a href="lista_productos.php" class="btn btn-primary">Regresar</a>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-6 m-auto">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
        <?php echo isset($alert) ? $alert : ''; ?>
        <div class="form-group">
          <label>Proveedor</label>
          <?php
          $query_proveedor = mysqli_query($conexion, "SELECT codproveedor, proveedor FROM proveedor ORDER BY proveedor ASC");
          $resultado_proveedor = mysqli_num_rows($query_proveedor);
          mysqli_close($conexion);
          ?>
          <select id="proveedor" name="proveedor" class="form-control">
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
          <input type="text" placeholder="Ingrese nombre del producto" name="producto" id="producto" class="form-control">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" placeholder="Ingrese precio" class="form-control" name="precio" id="precio">
        </div>
        <div class="form-group">
          <label for="info">Detalles</label>
          <input type="text" placeholder="Ingrese Informacion del producto" name="info" id="info" class="form-control">
        </div>
        <div class="form-group">
          <label for="cantidad">Cantidad</label>
          <input type="number" placeholder="Ingrese cantidad" class="form-control" name="cantidad" id="cantidad">
        </div>
        <label for="imagen">Selecciona una imagen:</label>
          <input type="file" name="imagen" id="imagen" accept="image/*">
          <!-- Agrega este campo oculto para mantener el nombre original -->
          <input type="hidden" name="imagen_nombre" value="">
          <br>
          <label for="nuevo_nombre">Nuevo nombre del archivo:</label>
          <input type="text" placeholder="opcional" name="nuevo_nombre" id="nuevo_nombre">
          <br>
        <input type="submit" value="Guardar Producto" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
<?php include_once "includes/footer.php"; ?>
