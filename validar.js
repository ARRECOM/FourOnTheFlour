function validar() {
  var nombre,Email,user,edad,contra,expresion;

  nombre = document.getElementById("Nombre");
  Email = document.getElementById("email");
  user = document.getElementById("username");
  edad = document.getElementById("Edad");
  contra = document.getElementById("contraseña");

  expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || Email === "" || user === "" || edad === "" || contra === ""){
      alert("Lo sentimos para poder continuar son requerido lenar todos los campos");
      return false;
    }else if(nombre.length>30 ){
      alert("El nombre excede los 30 caracteres");
      return false;
    }else if(nombre.length<=1 || nombre.length<=2 || nombre.length<=3){
      alert("lo sentimos no podemos continuar ya que el nombre es muy corto");
      return false;
    }else if(Email.length>50){
      alert("El email excede los 50 caracteres");
      return false;
    }
      else if(user.length>15){
      alert("El Nombre de usuario exede los 15 caracteres");
      return false;
    }else if(edad.length>2){
      alert("La Edad exede los 2 caracteres");
      return false;
    }else if (isNaN(edad)){
        alert("La edad ingresada no es un numero");
        return false;
    }
    else if(contra.length>25){
      alert("La contraseña excede los 15 caracteres");
      return false;
    }else if(contra.length<= 6){
        alert("Lo sentimos no podemos continuar ya que la contraseña es muy corta");
        return false;
    }

}
