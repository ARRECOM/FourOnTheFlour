function validar(){

    var nombre;
    var correo;
    var usuario;
    var edad;
    var contraseña

    nombre = document.getElementById("Nombre").value;
    correo = document.getElementById("email").value;
    usuario = document.getElementById("username").value;
    edad = document.getElementById("Edad").value;
    edad = document.getElementById("password").value;

    if(nombre === "" || correo === "" || usuario=== "" || edad === "" || contraseña === ""){
       alert("Lo sentimos no podemos completar la operacion, revise" +
           "que los campos no esten vacios");
       return false;
    };


}


