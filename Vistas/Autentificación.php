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
      
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <!--encabezado-->
    <header>
      <?php include_once("Include/EncabezadoPrincipal3.php");?>
    </header>


    <main style=" padding-bottom: 30px;padding-top: 30px">
       <div class="container">
        <div class="container">
        <h1 style="text-align: center;padding-bottom: 10px;font-family: candara">Autentificación</h1>
         <form style=" padding-bottom: 30px;padding-top: 10px" action="Inicio.php"> 
          <div class="mb-3"> 
            <label for="exampleInputEmail1" class="form-label">Correo
            </label> 
            <input type="email" class="form-control" id="co" aria-describedby="emailHelp">
              </div>
               <div class="mb-3"> 
                <label for="exampleInputPassword1" class="form-label">Contraseña</label> 
                <input type="password" class="form-control" id="con"> 
              </div> 
              <button type="submit" class="btn btn-primary">Iniciar</button> 
            </form>
          
        </div>
      </div>
    </main>

    <!--Pie-->
    <footer>
      <?php include_once("Include/Pie.php");?>
    </footer>

  </body>
</html>