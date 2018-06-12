<?php


if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    require 'conexion.php';
    sleep(2);
    session_start();
    $mysqli->set_charset('utf8');

    $usuario = $mysqli->real_escape_string($_POST['usuariolg']);
    $pas = $mysqli->real_escape_string($_POST['passlg']);

    if ($nueva_consulta = $mysqli->prepare("Select nombres,tipo From usuarios Where usuario = ?  AND password = ?")) {
        $nueva_consulta->bind_param('ss', $usuario, $pas);
        $nueva_consulta->execute();
        $resultado = $nueva_consulta->get_result();
        if ($resultado->num_rows == 1) {
            $datos = $resultado->fetch_assoc();
            $_SESSION['usuario'] = $datos;
            echo json_encode(array('error' => false, 'tipo' => $datos['tipo']));

        } else {
            // code...
            echo json_encode(array('error' => true));
        }
        $nueva_consulta->close();
    }
}

$mysqli->close();
?>
