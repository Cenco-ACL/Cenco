<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Preguntas</title>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
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
            <div class="progress-bar w-50" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <h5 class="card-title text-center">¿Necesitas Asistencia?</h5>
                    <p class="card-text">¿Con que categoría se relaciona tu problema?</p>
                    <form action="resumencaso.php" method="POST">
                      <div class="form-check">
                        <input type="hidden" name="respuesta1" value="Desconocimiento de deuda">
                        <input class="form-check-input" type="radio" name="respuesta2" id="exampleRadios1" value="Solicitud explicación origen deuda">
                        <label class="form-check-label" for="exampleRadios1">
                        Solicitud explicación origen deuda
                        </label>
                      </div>
                    <button type="submit" name="siguiente" class="btn btn-primary">Siguiente Pregunta</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4"></div>
          </div>
        </div>
    </div>
  </body>
</html>
