<?php

$conexion = mysqli_connect("localhost", "root", "", "fof");

$producto = $_REQUEST['producto'];

$nombreimg = $_FILES['archivo']['name'];
$archivo=$_FILES['archivo']['tmp_name'];
$ruta = "../../img/Eventos";
$ruta = $ruta."/".$nombreimg;

$Flyer = "img/Eventos";
$Flyer = $Flyer."/".$nombreimg;


move_uploaded_file($archivo,$ruta);

$InicioH = $_POST["InicioH"];
$FinH = $_POST["FinH"];
$FechaEvento = $_POST["FechaEvento"];
$Lugar = $_POST["Lugar"];
$TelefonoLugar = $_POST["TelefonoLugar"];


$insertar = "INSERT INTO eventos(InicioH,FinH,FechaEvento,Lugar,TelefonoLugar,Flyer)
              VALUES ('$InicioH','$FinH','$FechaEvento','$Lugar','$TelefonoLugar','$Flyer')";


$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo 'Error al registrar';

} else {
    echo
    '<script>
            alert("Registro Exitoso");
       
          </script>';


}
mysqli_close($conexion);

?>
