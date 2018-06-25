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
$Estado = $_POST["Estado"];

$insertar = "INSERT INTO eventos(InicioH,FinH,FechaEvento,Lugar,TelefonoLugar,Flyer,Estado)
              VALUES ('$InicioH','$FinH','$FechaEvento','$Lugar','$TelefonoLugar','$Flyer','$Estado')";


if ($Estado === "Principal"){
    $verificar_Evento = mysqli_query($conexion, "SELECT * FROM eventos WHERE Estado = '$Estado '");
    if (mysqli_num_rows($verificar_Evento) > 0) {

        exit;
    }
}

$resultado = mysqli_query($conexion, $insertar);


mysqli_close($conexion);s

?>
