<?php

  /**
   *
   */
  class Seguridad()
  {
    private $usuario= null;

    function __construct(argument)
    {
      // code...
      session_start();
      if(isset($_SESSION["usuario"])) $this->$usuario=$_SESSION["usuario"];
    }

    public getUsuario(){
      return $usuario;
    }

  }



 ?>
