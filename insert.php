<?php

  include 'cn.php';

  $Nombre = $_POST["Nombre"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $Edad = $_POST["Edad"];
  $password = $_POST["password"];
  $tipo = $_POST["tipo"];

  $insertar = "INSERT INTO usuarios(nombres,email,usuario,Edad,password,tipo)
              VALUES ('$Nombre','$email','$username','$Edad','$password','$tipo')";

  $verificar_User = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$username'");
    if (mysqli_num_rows($verificar_User) > 0) {
      echo '<script>
          alert("Lo sentimos el usuario ya existe intente con otro");
          window.history.go(-1);
        </script>';
      exit;
    }
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
      if (mysqli_num_rows($verificar_correo) > 0) {
        echo '<script>
            alert("Lo sentimos el correo ya existe intente con otro");
            window.history.go(-1);
          </script>';
        exit;
            }


  $resultado = mysqli_query($conexion, $insertar);

  if (!$resultado){
    echo 'Error al registrar';

  }else{
    echo '<script>
        alert("Registro Exitosom");
        window.history.go(-1);
      </script>';
  }
  mysqli_close($conexion);
