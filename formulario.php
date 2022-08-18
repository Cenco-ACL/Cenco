<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FormularioInscripcion</title>
  </head>
  <body>
    <h1>Formulario Inscripcion</h1>
    <hr>
    <form class="" action="registro.php" method="post">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <label for="nombre"><strong>Nombres</strong></label><br>
          <input type="text" class="form-control" name="Nombres" id="nombre" placeholder="Escriba sus nombres" value="">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <label for="apellido"><strong>Apellidos</strong></label><br>
          <input type="text" class="form-control" name="Apellidos" id="apellido" placeholder="Escriba sus apellidos" value="">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <label for="fecha"><strong>Fecha</strong></label><br>
          <input type="date" class="form-control" name="FechaN" id="fecha" placeholder="dd-mm-aaaa" value="">
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <label for="corr"><strong>Correo</strong></label><br>
          <input type="email" class="form-control" name="Correo" id="corr" placeholder="Escriba su correo electronico" value="">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <label for="contra"><strong>Contraseña</strong></label><br>
          <input type="password" class="form-control" name="Password" id="contra" placeholder="Escriba una contraseña" value="">
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <label for="carrera"><strong>Contraseña</strong></label><br>
          <select name="carrera" id="carre" placeholder="Seleccione una opcion" class="form-control">
            <option value="TCEI">TNS EN COMPUTACIÓN E INFORMÁTICA</option>
            <option value="TGPP">TNS EN GESTIÓN PORTUARIA Y PESQUERA</option>
            <option value="TTS">TNS EN TRABAJO SOCIAL</option>
            <option value="TEISE">TNS EN ELECTRICIDAD INDUSTRIAL Y SISTEMAS ELÉCTRICOS</option>
            <option value="TEDP">TNS EN EDUCACIÓN DE PÁRVULOS</option>
            <option value="TMI">TNS EN MECÁNICA INDUSTRIAL</option>
          </select>
        </div>
        <div class="col-md-3 form-check">
          <label for="jornada"><strong>Jornada</strong></label><br>
          <div class="form-check">
          <input class="form-check-input" type="radio" name="jornada" id="jornadad" value="JornadaDiurna">
          <label class="form-check-label" for="jornadad">
            Diurna
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jornada" id="jornadav" value="JornadaVespertina">
          <label class="form-check-label" for="jornadav">
            Vespertina
          </label>
        </div>
        </div>
        <div class="col-md-3">
          <label for="Gratuidad"><strong>Seleccione Beneficios</strong></label><br>&nbsp
          <input class="form-check-input" type="checkbox" name="grat" id="grat" value="Gratuidad">
          <label class="form-check-label" for="grat">Gratuidad</label><br>&nbsp
          <input class="form-check-input" type="checkbox" name="alim" id="alim" value="Alimentacion">
          <label class="form-check-label" for="alim">Alimentacion</label>
        </div>
        <div class="col-md-2"></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-1"></div>

          <div class="col-md-3">
            <button type="submit" name="guardar" class="btn btn-primary btn-lg btn-success">Guardar Cambios</button>
          </div>
          <div class="col-md-8"></div>
        </div>
    </form>
  </body>
</html>
