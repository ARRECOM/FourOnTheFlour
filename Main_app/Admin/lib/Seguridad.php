<?php

  /**
   *
   */
  class Seguridad
  {
    private $usuario= null;

    function __construct()
    {
      // code...
      session_start();
      if(isset($_SESSION["usuario"])) $this->$usuario=$_SESSION["usuario"];
    }

    public function getUsuario(){
      return $usuario;
    }

  }



 ?>
