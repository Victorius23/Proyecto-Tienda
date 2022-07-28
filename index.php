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
      <?php include_once("Vistas/Include/EncabezadoPrincipal.php");?>
    </header>


              <main style=" padding-bottom: 30px;padding-top: 30px;background-color: white">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="padding-left: 430px;padding-bottom: 10px;padding-top: 10px">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img src="Vistas/Imagenes/Call.jpg"  height="500" width="500" class="d-block w-90"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="700">
                <img src="Vistas/Imagenes/gta.jpg" height="500" width="500" class="d-block w-90" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="Vistas/Imagenes/Halo.jpg" height="500" width="500" class="d-block w-90" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


              </main>

    <!--Pie-->
    <footer>
      <?php include_once("Vistas/Include/Pie.php");?>
    </footer>

  </body>
</html>