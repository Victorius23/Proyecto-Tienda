<?php 

    
  require_once "../Vistas/BD/conexion.php";

  print_r($_POST);

  if (isset($_POST["nom"])) {
        
    $nom=$_POST["nom"];
    $ap=$_POST["ap"];
    $am=$_POST["am"];
    $co=$_POST["co"];
    $con=$_POST["con"];
    $tipo=$_POST["tipo"];
    
    $insertarusu="INSERT INTO usuario(nombre,apellidop, apellidoa,correo,contraseña, tipousu)
    VALUES(
    '$nom',
    '$ap',
    '$am',
    '$co',
    '$con',
    '$tipo')";

    $resultado=mysqli_query($enlace,$insertarusu);



    if (!$resultado) {
     echo 'error'; 

    }

     
    

             


  }


 ?>
