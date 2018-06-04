function validar() {
  var Nombre,email,username,Edad,contraseña,expresion;

  Nombre = document.getElementById("Nombre").value;
  email = document.getElementById("email").value;
  username = document.getElementById("username").value;
  Edad = document.getElementById("Edad").value;
  contraseña = document.getElementById("contraseña").value;

  expresion = /\w+@\w+\.+[a-z]/;

    if(Nombre === "" || email === "" || username === "" || Edad === "" || contraseña === ""){
      alert("Lo sentimos para poder continuar son requerido lenar todos los campos");
      return false;
    }else if(Nombre.length>30 ){
      alert("El nombre excede los 30 caracteres");
      return false;
    }else if(Nombre.length<=1 || Nombre.length<=2 || Nombre.length<=3){
      alert("lo sentimos no podemos continuar ya que el nombre es muy corto");
      return false;
    }else if(email.length>100){
      alert("El email exede los 100 caracteres");
      return false;
    }else if(!expresion.test(email)){
        alert("El email no es valido");
        return false;

    }else if(username.length>15){
      alert("El Nombre de usuario exede los 15 caracteres");
      return false;
    }else if(Edad.length>2){
      alert("La Edad exede los 2 caracteres");
      return false;
    }else if (isNaN(Edad)){
        alert("La edad ingresada no es un numero");
        return false;
    }
    else if(contraseña.length>25){
      alert("La contraseña excede los 15 caracteres");
      return false;
    }else if(contraseña.length<= 6){
        aler("Lo sentimos no podemos continuar ya que la contraseña es muy corta")
    }

}
