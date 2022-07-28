<?php 

  require_once "BD/conexion.php";

 ?>

<!doctype html>
<html>
  <head>
    <style type="text/css">
            body{
        display: flex;
        flex-direction: column;
        min-height: 100%;

      }

      html{
        height: 100%;
      }

      footer{
        margin-top: auto;
      }      
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   

  </head>
  <body>
    <!--encabezado-->
    <header>
      <?php include_once("Include/EncabezadoPrincipal2.php");?>
    </header>


  <main style=" padding-bottom: 30px;padding-top: 30px;background-color: white">
        <div class="container">
			<form action="" class="formulario" id="formulario" name="formulario" method="POST"  style=" padding-bottom: 30px;padding-top: 10px"> 
          <div class="input-group"style=" padding-bottom: 30px">


            <span class="input-group-text">Nombre y Apellidos</span>
              <input type="text" aria-label="Nombre" class="form-control" id="nom" name="nom">
              <input type="text" aria-label="Apellidos" class="form-control" id="ap" name="ap">
              <input type="text" aria-label="Apellidos" class="form-control" id="am" name="am">

              </div>          
                           
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Correo</span>
              <input type="email"  class="form-control" id="co" name="co">
              </div>              
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Contraseña</span>
              <input type="password"  class="form-control" id="con" name="con">
              </div> 
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Tipo de Usuario</span>
                <select class="form-select" id="tipo" name="tipo">
                  <option value="SC">Seleccione cargo</option>                  
                  <option value="Administrador">Administrador</option>
                  <option value="Empleado">Empleado</option>
                </select>
              </div>                              
              <input type="submit" class="btn btn-primary" name="registrarse" value="Registrar">                                          
            </form>


            <div class="container" id="respuesta">
              
     
            </div>
              <script src="validar.js"> </script>
               </div> 

               <div class="container">
                 <table class="table">
                <tr>
                  <th scope="col">id</th>                  
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Contraseña</th>
                  <th scope="col">Tipo de usuario</th>
                  <th scope="col">Acciones</th>                                                      
                </tr>

                  <?php 

                  $consulta = "SELECT * FROM usuario";
                  $ejecon = mysqli_query($enlace,$consulta);
                  $verfilas = mysqli_num_rows($ejecon);
                  $fila = mysqli_fetch_array($ejecon);

                  if (!$ejecon) {
                    echo "error en la consulta";
                  }else{
                    if ($verfilas<1) {
                      echo "<tr><td>Sin registros</td></tr>";
                    }else{
                      for($i=0; $i<=$fila; $i++){
                        echo '

                         <tr>
                            <td>'.$fila[0].'</td>
                            <td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                            <td>'.$fila[3].'</td>
                            <td>'.$fila[4].'</td>
                            <td>'.$fila[5].'</td>
                            <td>'.$fila[6].'</td>
                            <td><button type="button" class="btn btn-primary">Actualizar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button></td>
                         </tr>    

                        ';
                        $fila = mysqli_fetch_array($ejecon);
                      }
                    }
                  }


                   ?>




            </table>



                           </div>



              </main>



    <!--Pie-->
    <footer>
      <?php include_once("Include/Pie.php");?>
    </footer>

  </body>
</html>

