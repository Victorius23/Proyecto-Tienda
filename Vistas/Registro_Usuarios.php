

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


    <main style=" padding-bottom: 140px">
      <div class="container">
        <div class="container">
          <h1 style="text-align: center;padding-top: 10px;font-family: candara">Registrar Usuario</h1>
         <form style=" padding-bottom: 30px;padding-top: 10px"> 
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Nombre y Apellidos</span>
              <input type="text" aria-label="Nombre" class="form-control" id="nom">
              <input type="text" aria-label="Apellidos" class="form-control" id="ap">
              <input type="text" aria-label="Apellidos" class="form-control" id="am">              
              </div>         
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Correo</span>
              <input type="email"  class="form-control" id="co">
              </div>              
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Contraseña</span>
              <input type="password"  class="form-control" id="con">
              </div> 
          <div class="input-group"style=" padding-bottom: 30px">
            <span class="input-group-text">Tipo de Usuario</span>
                <select class="form-select">
                  <option selected>Selecciona el tipo de usuario</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Empleado">Empleado</option>
                </select>
              </div>                              
              <button type="submit" class="btn btn-primary">Registrar</button>                                           
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