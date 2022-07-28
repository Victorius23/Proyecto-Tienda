<?php




		$nombre= $_POST['nom'];
		$apellidoap= $_POST['ap'];
		$apellidoam= $_POST['am'];
		$correo= $_POST['co'];
		$contraseña= $_POST['con'];
		$tipo= $_POST['tipo'];
		
		if ($nombre==='' ||$apellidoap===''||$apellidoam===''||$correo===''||$contraseña===''||$tipo=='SC') {
			echo json_encode('error');
		}else{
			
			echo json_encode('Se guardo con exito la información');

		}
			


?>