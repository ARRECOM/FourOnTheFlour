<?php
/**
 * Created by PhpStorm.
 * User: 8ocho5
 * Date: 23/06/2018
 * Time: 02:42 PM
 */

$mysqli = new mysqli('localhost', 'root', '', 'fof');
if ($mysqli->connect_errno) {
    echo "Error al conectarse con My SQL debido al error" . $mysqli->connect_error;
}

$consulta = "";

function PrincipalNews(){
    global $mysqli, $consulta;
    $sql = 'SELECT * FROM eventos WHERE Estado = "Principal"';
    return $mysqli->query($sql);
}

function EventosPasados(){
    global $mysqli, $consulta;
    $sqlEP = 'SELECT * FROM eventos WHERE Estado = "Pasado" ';
    return $mysqli->query($sqlEP);
}