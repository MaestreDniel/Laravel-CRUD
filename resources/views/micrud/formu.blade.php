<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Mi formulario crud</title>
</head>
<body>
  <form class="form-group shadow p-3 mb-5 rounded" style="background-color: #eeeeee;"  method="post" action="">
    <fieldset class="border p-2">
      <legend>Datos principales</legend>
      <div class="row align-items-start">
        <div class="mb-3 col-6">
          <!-- Nombre de la empresa, texto, obligatorio -->
          <label for="nombre_emp" class="form-label">Nombre</label>
          <input class="form-control" name="nombre_emp" value="{!! old('nombre_emp') !!}" id="nombre_emp" required>
          <div>{!! $errors->first('nombre_emp','<small>:message</small>') !!}</div>   
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>

        <!-- CIF de la empresa, texto, obligatorio -->
        <div class="mb-3 col-auto">
          <label for="cif" class="form-label">CIF</label>
          <input class="form-control" name="cif" value="{{old('cif')}}" id="cif">
          {{$errors->first('cif')}}
        </div>

        <div class="mb-3 col-auto">
          <label for="telefono1_emp" class="form-label">Teléfono 1</label>
          <input class="form-control" type="tel" maxlength="9" name="telefono1_emp" list="listatelefonos" value="{{old('telefono1_emp')}}" id="telefono1_emp"  placeholder="971 123 456">
        </div>
      </div>

      <div class="row align-items-start m-2">
        <h6 class="inline">Sector productivo</h6>
        <div class="row">
          <div class="form-check col-auto">
            <label class="form-check-label" for="id_primario">Primario</label>
            <input class="form-check-input" type="radio" name="sector" value="primario" {{ (old('sector') == "primario") ? "checked" :""}} id="id_primario">
          </div>
          <div class="form-check col-auto">
            <label class="form-check-label" for="id_secundario">Secundario</label>
            <input class="form-check-input" type="radio" name="sector" value="secundario" {{ (old('sector') == "secundario") ? "checked" : ""}} id="id_secundario">
          </div>
          <div class="form-check col-auto">
            <label class="form-check-label" for="id_terciario">Terciario</label>
            <input class="form-check-input" type="radio" name="sector" value="terciario" {{ (old('sector') == "terciario") ? "checked" : ""}} id="id_terciario">
          </div>
        </div>
      </div>
      
      <div class="mb-3 col-md-2">
        <label for="jornada" class="form-label">Tipo de jornada</label>
        <select class="form-select" name='jornada' id="jornada">
          <option value="continua" @if (old('jornada') === 'continua') selected @endif>Continua</option>
          <option value="partida" @if (old('jornada') === 'partida') selected @endif>Partida</option>
        </select>
      </div>

      <div class="mb-3 col-md-4">
        <label for="num_trabajadores" class="form-label">Número de trabajadores</label>
        <input class="form-control" type="number" min="1" name="num_trabajadores" value="{{old('num_trabajadores')}}" id="num_trabajadores" aria-describedby="HelpEmpleados">
        <div id="HelpEmpleados" class="form-text">Número aproximado de empleados en la empresa.</div>
      </div>

      <div class="mb-3 col-md-4">
        <input type="checkbox" id="vehiculo1" name="vehiculo1" value="Bike">
        <label for="vehiculo1">Bicicleta</label><br>
        <input type="checkbox" id="vehiculo2" name="vehiculo2" value="Car">
        <label for="vehiculo2">Coche</label><br>
        <input type="checkbox" id="vehiculo3" name="vehiculo3" value="Boat">
        <label for="vehiculo3">Moto</label><br>
      </div>

      <div class="mb-3">
        <label for="comentarios" class="form-label">Comentarios</label>
        <textarea class="form-control" name="comentarios" id="comentarios" rows="2">{{old('comentarios')}}</textarea>
      </div>

      <div class="row">
        <!-- Fecha del envío de estos datos -->
        <div class="mb-3 col-md-4">
            <label for="fecha_firma" class="form-label">Firmado día: </label>
            <input class="form-control" type="date" name="fecha_firma" value="{{old('fecha_firma')}}" id="fecha_firma">
        </div>
      </div>

    </fieldset>

    <button type="submit" class="btn btn-primary mt-2">Enviar</button>

  </form>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>