<?php


	 $servidor="localhost";
	 $usuario="root";
	 $clave="";
	 $bd="gamestop";

	 $enlace =mysqli_connect($servidor, $usuario, $clave, $bd);

	 if (!$enlace) {

	 	echo "Error en la conexión con el servidor";

	 }


?>