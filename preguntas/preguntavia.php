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
    <div class="container">
    <div class="mx-auto">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-1">
          <center><img src="../img/1.png" alt="" width="100" height="100"></center>
          <center><b>Seleccione un tipo de solicitud</b></center>
        </div>
        <div class="col-md-1">
          <br>
          <div class="progress"  style="margin-left:20px;">
            <div class="progress-bar w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="barra"></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/2.png" alt="" width="100" height="100"></center>
          <center><b>Tipo de problema</b></center>
        </div>
        <div class="col-md-1">
          <br>
          <div class="progress" style="margin-left:20px;">
            <div class="progress-bar w-50" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="barra"></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/3.png" alt="" width="100" height="100"></center>
          <center><b>
          Resumen de tu caso</b></center>
        </div>
        <div class="col-md-1">
          <br>
          <div class="progress" style="margin-left:20px;">
            <div class="progress-bar w-0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="barra"></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/4.png" alt="" width="100" height="100"></center>
          <center><b>Cuéntanos lo sucedido</b></center>
        </div>
        <div class="col-md-1" >
          <br>
          <div class="progress" style="margin-left:20px;">
            <div class="progress-bar w-0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
          </div>
        </div>
        <div class="col-md-1">
          <center><img src="../img/5.png" alt="" width="100" height="100"></center>
          <center><b>Recibimos tu solicitud</b></center>
        </div> 
        <div class="col-md-1"></div>
        </div>
</div>  
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
                        <input type="hidden" name="respuesta1" value="Viaje al extranjero">
                        <input class="form-check-input" type="radio" name="respuesta2" id="exampleRadios1" value="Aviso viaje al extranjero">
                        <label class="form-check-label" for="exampleRadios1">
                        Aviso viaje al extranjero
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
    <br><br><br>
    <footer class="row">
        <hr class="col-lg-8">
        <div class="col-md-4 align-self-start col-9 tm-color-gray">
           <h4 style="color: #96a1aa;">Siguenos</h4>
           <a href="" style="color: #2d4359">

            <i style="color: #2d4359;" class="fab fa-facebook tm-social-icon"></i>
            <i style="color: #2d4359; padding-left: 20px;" class="fab fa-youtube tm-social-icon"></i>
            <i style="color: #2d4359; padding-left: 25px;" class="fab fa-twitter tm-social-icon"></i>
            </a>


        </div>
        <div class="col-md-4 align-self-center col-9 tm-color-gray">
            <h4 style="color: #96a1aa;">Emergencias de Tarjetas de Credito</h4>
            <h2 style="text-align: center; color: #2d4359;">111 222 333</h2>
         </div>
         <div class="col-md-4 align-self-center col-9 tm-color-gray">
            <h4 style="color: #96a1aa;">Emergencias de Tarjetas de Credito</h4>
            <h2 style="text-align: center; color: #2d4359;">111 222 333</h2>
         </div>
    </footer>
  </body>
</html>
