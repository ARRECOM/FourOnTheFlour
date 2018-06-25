<?php
include 'cn.php';


$EmpresaN = $_POST["EmpresaN"];
$Giro = $_POST["Giro"];
$Capacidad = $_POST["Capaidad"];
$SysAudio = $_POST["SysAudio"];
$AntecedenteE = $_POST["AntecedenteE"];
$FechaTen = $_POST["FechaTen"];
$Telefono1 = $_POST["Telefono1"];
$Telefono2 = $_POST["Telefono2"];
$Genero = $_POST["Genero"];




$insert = "INSERT INTO solicitudes(EmpresaN,Giro,Capacidad,SysAudio,AntecedenteE,FechaTen,Telefono1,Telefono2,Genero)
            VALUES('$EmpresaN','$Giro','$Capacidad','$SysAudio','$AntecedenteE','$FechaTen','$Telefono1','$Telefono2','$Genero') ";

$resultado = mysqli_query($conexion, $insert);


mysqli_close($conexion);