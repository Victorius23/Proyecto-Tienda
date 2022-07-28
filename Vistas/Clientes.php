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
                          <form style=" padding-bottom: 30px;padding-top: 10px"> 
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Nombre y Apellidos</span>
              <input type="text" aria-label="Nombre" class="form-control" id="nom">
              <input type="text" aria-label="Apellidos" class="form-control" id="ap">
              <input type="text" aria-label="Apellidos" class="form-control" id="am">              
              </div>                       

          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Dirección</span>
              <input type="text"  class="form-control" id="co">
              </div>   

          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Teléfono</span>
              <input type="text"  class="form-control" id="co">
              </div>                 

          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Correo</span>
              <input type="email"  class="form-control" id="co">
              </div>              
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Contraseña</span>
              <input type="password"  class="form-control" id="con">
              </div>                       
              <button type="submit" class="btn btn-primary">Registrar</button>                                           
            </form>
               </div> 

               <div class="container">
                 <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">Teléfono</th>                   
                  <th scope="col">Correo</th>
                  <th scope="col">Contraseña</th>
                  <th scope="col">Acciones</th>                                                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Manuel</td>
                  <td>Osorio</td>
                  <td>Mota</td>
                  <td>Av progreso 29</td>
                  <td>2482250381</td>
                  <td>meyoso@gmail.com</td>
                  <td>manuel123</td>    
                  <td><button type="button" class="btn btn-primary">Actualizar</button>
                  <button type="button" class="btn btn-danger">Eliminar</button></td>                               
                </tr>

                                                
              </tbody>
            </table>
                           </div>



              </main>

    <!--Pie-->
    <footer>
      <?php include_once("Include/Pie.php");?>
    </footer>

  </body>
</html>