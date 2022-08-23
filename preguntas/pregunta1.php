<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">¿Necesitas Asistencia?</h5>
        <p class="card-text">¿Con que categoría se relaciona tu problema?</p>
        <form action="preguntas/valida.php" method="POST">
          <div class="form-check">
            <input type="hidden" name="valorPregunta" value="1">
            <input class="form-check-input" type="radio" name="preg1" id="exampleRadios1" value="Facturación y Pagos">
            <label class="form-check-label" for="exampleRadios1">
            Facturación y Pagos
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="preg1" id="exampleRadios2" value="Solicitud de prepago">
            <label class="form-check-label" for="exampleRadios2">
            Solicitud de prepago
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="preg1" id="exampleRadios3" value="Viaje al extranjero">
            <label class="form-check-label" for="exampleRadios3">
            Viaje al extranjero
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="preg1" id="exampleRadios4" value="Desconocimiento de deuda">
            <label class="form-check-label" for="exampleRadios4">
            Desconocimiento de deuda
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="preg1" id="exampleRadios5" value="">
            <label class="form-check-label" for="exampleRadios5">
            <a href="bot.html">Otro</a>
            </label>
          </div>
          <button type="submit" name="siguiente" class="btn btn-primary">Siguiente Pregunta</button>
          </form>
      </div>
    </div>
  </body>
</html>
