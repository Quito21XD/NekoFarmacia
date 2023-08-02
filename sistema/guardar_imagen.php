<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $nombre_archivo = $_FILES["imagen"]["name"];
        $ruta_temporal = $_FILES["imagen"]["tmp_name"];
        $ruta_destino = "images/" . $nombre_archivo;

        // Mover la imagen del directorio temporal al directorio de destino
        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            echo "La imagen se ha subido correctamente.";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Error al cargar la imagen.";
    }
}
?>
