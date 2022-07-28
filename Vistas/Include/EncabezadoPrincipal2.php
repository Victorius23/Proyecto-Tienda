<?php
	include_once("Global/variables.php");
?>
<!DOCTYPE html>
<html>
	<head>
	 <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title><?php echo NOM; ?></title>
	
	
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    	
    </head>
    
	<body>

		<div class="container-fluid" style="background-color: black;text-align: center;">
			<img src="Imagenes/Logoo.png" width="320" height="140">
			
		</div>

		<!--Ménu-->
		<div class="container-fluid" style="background-color: #D50600; text-align: center; font-size: 20px">
			<div style="padding-top: 10px;padding-bottom: 15px;font-family: candara">

				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link" href="Inicio.php" style="color: white">Inicio</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="Usuarios.php" style="color: white">Usuarios</a>
				  </li>				  
				  <li class="nav-item">
				    <a class="nav-link" href="Productos.php" style="color: white">Productos</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="Clientes.php" style="color: white">Clientes</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="Proveedores.php" style="color: white">Proveedores</a>

				  </li>		

				  <li class="nav-item">
				    <a class="nav-link" href="../index.php" style="color: white">Salir</a>

				  </li>					  		  
				</ul>



			</div>
			
		</div>
		<!-- Option 2: Separate Popper and Bootstrap JS-->
    
   		 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
		</body>
</html>