function formulario(){

	var nombre,apellidoap,apellidoam,correo,contraseña,tipo,expresion;

	nombre= document.getElementById("nom").value;
	apellidoap= document.getElementById("ap").value;
	apellidoam= document.getElementById("am").value;
	correo= document.getElementById("co").value;
	contraseña= document.getElementById("con").value;
	tipo= document.getElementById("tipo").value;


	if (nombre==="") {
		alert("El campo nombre está vacio");
	}

}