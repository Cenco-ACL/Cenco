<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Preguntas</title>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../img/logo2022.png" alt="" width="200" height="100">
        </a>
      </div>
    </nav>
    <div class="mx-auto">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-1">
          <center><img src="../img/1.png" alt="" width="100" height="100"></center>
          <center><b>Categoriza <br>tu caso</b></center>
        </div>
        <div class="col-md-1">
          <br>
          <div class="progress">
            <div class="progress-bar w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/2.png" alt="" width="100" height="100"></center>
          <center><b>Detallanos tu caso</b></center>
        </div>
        <div class="col-md-1">
          <br>
          <div class="progress">
            <div class="progress-bar w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/3.png" alt="" width="100" height="100"></center>
          <center><b>Resumen de tu caso</b></center>
        </div>
        <div class="col-md-3"> </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-6">
                <br>
                <div class="card">
                  <div class="card-body">
                    <form class="" action="../preguntas.php" method="post">
                      <h5 class="card-title text-center">Resumen de tu caso</h5>
                      <p class="card-text text-center">¿Se adecua con tu caso?</p>
                      <?php
                      $categoria=$_POST["respuesta1"];
                      $detalle=$_POST["respuesta2"];
                      ?>
                      <b>Categoria: <?php echo $categoria;?></b><br>
                      <b>Detalle: <?php echo $detalle;?></b><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalCerrar">
                        Cerrar Reclamo
                      </button>&nbsp&nbsp&nbsp
                      <button type="submit" class="btn btn-primary" name="confirmar">Confirmar Envio</button>
                  </div>
                    </form>
                  </div>
              </div>
              <div class="col-md-4"></div>
          </div>
        </div>
    </div>
<!--class="modal-dialog modal-dialog-centered"-->
    <!--Modal-->
    <!-- Modal -->
    <div class="modal fade" id="modalCerrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">¿Desea cancelar el reclamo?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&nbspX&nbsp</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Volver al reclamo</button>
              </div>
              <div class="col-md-4">
                <p><a href="../bot.html" class="tooltip-test btn btn-primary btn-lg" title="Ir al Bot">Ayuda con Bot</a>
              </div>
              <div class="col-md-4">
                  <p><a href="../preguntas.php" class="tooltip-test btn btn-primary btn-lg" title="Cancelar Reclamo">Cancelar Reclamo</a>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </body>
</html>