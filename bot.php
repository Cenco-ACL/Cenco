<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BotBeneficios</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </head>
  <body>
    <style media="screen">
    .btn-robot{
      position:fixed;
      width:60px;
      height:60px;
      line-height: 63px;
      bottom:25px;
      right:25px;
      background:#25d6;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:35px;
      box-shadow: 0px 1px 10px rgba(0,0,0,0.3);
      z-index:100;
      transition: all 300ms ease;
      }
      .btn-robot:hover{
          background: #25d6;
      }
      @media only screen and (min-width:320px) and (max-width:768px){
          .btn-robot{
              width:63px;
              height:63px;
              line-height: 66px;
        }
      }
    </style>
    <header class="tm-header" id="tm-header">
          <div class="tm-header-wrapper">
              <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>
              <div class="tm-site-header">
                  <img src="img/tarjeta.jpg" width="250px" >
              </div>
              <nav class="tm-nav" id="tm-nav">
                  <ul>
                      <li class="tm-nav-item active"><a href="index.php" class="tm-nav-link">
                          <i class="fas fa-home"></i>
                          Inicio
                      </a></li>

                      <li class="tm-nav-item"><a href="post.html" class="tm-nav-link">
                          <i class="fas fa-pen"></i>
                          Movimientos
                      </a></li>
                      <li class="tm-nav-item"><a href="about.html" class="tm-nav-link">
                          <i class="fas fa-users"></i>
                          Pagar Cuenta
                      </a></li>
                      <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                          <i class="far fa-comments"></i>
                          PAT
                      </a></li>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalCerrar">
                        Cerrar Reclamo
                      </button>
                  </ul>
              </nav>
      </header>


      <div class="modal-dialog modal-xl" id="modalCerrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Bot - GlennIA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&nbspX&nbsp</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <!--<p align="center"><br><br><iframe src="https://web.powerva.microsoft.com/environments/Default-32ec166b-1a21-4953-815b-bc8456ead53c/bots/new_bot_d24f7443442d45f0ae963f05f6e307c6/webchat" frameborder="1" style="width: 600px; height: 500px;"></iframe></p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <p align="center"><br><br><iframe src="https://web.powerva.microsoft.com/environments/Default-32ec166b-1a21-4953-815b-bc8456ead53c/bots/new_bot_d24f7443442d45f0ae963f05f6e307c6/webchat" frameborder="1" style="width: 800px; height: 800px;"></iframe></p>
      <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  </body>
</html>
