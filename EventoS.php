<?php
$conexion = mysqli_connect("localhost", "root", "", "fof");

$EmpresaN = $_POST["Empresa1"];
$Giro = $_POST["Giro1"];
$Capacidad = $_POST["Capacidad1"];
$SysAudio = $_POST["SysAudio1"];
$AntecedenteE = $_POST["AntecedenteE1"];
$InicioH = $_POST["InicioH1"];
$FechaTen = $_POST["FechaTen1"];
$Telefono1 = $_POST["Telefono11"];
$Telefono2 = $_POST["Telefono21"];
$Genero = $_POST["Genero1"];
$HorarioApartir = $_POST["HorarioApartir1"];
$HorarioHasta = $_POST["HorarioHasta1"];



$Agregar = "INSERT INTO solicitudes(EmpresaN,Giro,Capacidad,SysAudio,AntecedenteE,InicioH,FechaTen,Telefono1,Telefono2,Genero,HorarioApartir,HorarioHasta)
              VALUES ('$EmpresaN','$Giro','$Capacidad','$SysAudio','$AntecedenteE','$InicioH','$FechaTen','$Telefono1','$Telefono2','$Genero','$HorarioApartir','$HorarioHasta')";


$resultado = mysqli_query($conexion, $Agregar);

if (!$resultado) {
    echo 'Error al registrar';

}
mysqli_close($conexion);
