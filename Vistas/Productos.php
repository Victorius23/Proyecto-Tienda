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
            <span class="input-group-text">Nombre del producto</span>
              <input type="text"  class="form-control" id="co">
              </div>   


          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Precio</span>
              <input type="text"  class="form-control" id="co">
              </div>           

          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Cantidad</span>
              <input type="text"  class="form-control" id="co">
              </div>              


          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Genero</span>
              <input type="text"  class="form-control" id="co">
              </div>


                      

                      
              <button type="submit" class="btn btn-primary">Registrar</button>                                           
            </form>
               </div> 

               <div class="container">
                 <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nombre del producto</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Genero</th>
                  <th scope="col">Acciones</th>                                                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Halo 2</td>
                  <td>500</td>
                  <td>1</td>
                  <td>Disparos</td>
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