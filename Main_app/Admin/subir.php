<?php
$nombre_temporal = $_FILE['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];
move_uploaded_file($nombre_temporal, '../../Archivos' . $nombre);

?>
