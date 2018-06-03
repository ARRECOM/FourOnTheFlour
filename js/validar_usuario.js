function validar_usuario() {
  var Nombre,email,username,Edad,contraseña,expresion;

  Nombre = document.getElementById("Nombre").value;
  email = document.getElementById("email").value;
  username = document.getElementById("username").value;
  Edad = document.getElementById("Edad").value;
  contraseña = document.getElementById("contraseña").value;

    if(Nombre === "" || email === "" || username === "" || Edad === "" || contraseña = ""){
      alert("Lo sentimos para poder continuar son requerido lenar todos los campos");
      return false;
    }else if(Nombre.length>30){
      alert("El nombre excede los 30 caracteres");
      return false;
    }else if(email.length>100){
      alert("El email exede los 100 caracteres");
      return false;
    }else if(username.length>15){
      alert("El Nombre de usuario exede los 15 caracteres");
      return false;
    }else if(Edad.length>2){
      alert("La Edad exede los 2 caracteres");
      return false;
    }else if(Edad.length>2){
      alert("La contraseña excede los 15 caracteres");
      return false;
    }

}
