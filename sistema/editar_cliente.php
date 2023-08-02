<?php include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['direccion'])) {
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    $idcliente = $_POST['CI'];
    $CI = $_POST['CI'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $result = 0;
    if (is_numeric($CI) and $CI != 0) {

      $query = mysqli_query($conexion, "SELECT * FROM cliente where (CI = '$CI' AND idcliente != $idcliente)");
      $result = mysqli_fetch_array($query);
      $resul = mysqli_num_rows($query);
    }

    if ($resul >= 1) {
      $alert = '<p class"error">El CI ya existe</p>';
    } else {
      if ($CI == '') {
        $CI = 0;
      }
      $sql_update = mysqli_query($conexion, "UPDATE cliente SET CI = $CI, nombre = '$nombre' , telefono = '$telefono', direccion = '$direccion' WHERE idcliente = $idcliente");

      if ($sql_update) {
        $alert = '<p class"exito">Cliente Actualizado correctamente</p>';
      } else {
        $alert = '<p class"error">Error al Actualizar el Cliente</p>';
      }
    }
  }
}
// Mostrar Datos

if (empty($_REQUEST['id'])) {
  header("Location: lista_cliente.php");
}
$idcliente = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM cliente WHERE idcliente = $idcliente");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_cliente.php");
} else {
  while ($data = mysqli_fetch_array($sql)) {
    $idcliente = $data['idcliente'];
    $CI = $data['CI'];
    $nombre = $data['nombre'];
    $telefono = $data['telefono'];
    $direccion = $data['direccion'];
  }
}
?>
<!-- Begin Page Content -->
<div class="content">

  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card">
        <div class="card-header">
          Modificar Cliente
        </div>
        <div class="card-body">
          <form class="" action="" method="post">
            <?php echo isset($alert) ? $alert : ''; ?>
            <input type="hidden" name="id" value="<?php echo $idcliente; ?>">
            <div class="form-group">
              <label for="CI">CI</label>
              <input type="number" placeholder="Ingrese CI" name="CI" id="CI" class="form-control" value="<?php echo $CI; ?>">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" placeholder="Ingrese Nombre" name="nombre" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="number" placeholder="Ingrese Teléfono" name="telefono" class="form-control" id="telefono" value="<?php echo $telefono; ?>">
            </div>
            <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" placeholder="Ingrese Direccion" name="direccion" class="form-control" id="direccion" value="<?php echo $direccion; ?>">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar Cliente</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->
<?php include_once "includes/footer.php"; ?>