

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<h1>Prueba</h1> <!-- <h1>{{__('datosempresa.titulo_datos_emp')}}</h1> -->
<form class="form-group shadow p-3 mb-5 rounded" style="background-color: #fceeec;"  method="post" action=""> 
    @csrf
    <fieldset class="border p-2">
        <legend>Datos de empresa</legend>
        <!-- Nombre de la empresa, texto, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="nombre_emp" class="form-label">Prueba</label> <!-- <label for="nombre_emp" class="form-label">{{__('datosempresa.nombre_emp')}}</label> -->
                <input class="form-control" name="nombre_emp" value="{!! old('nombre_emp') !!}" id="nombre_emp">
                <div>{!! $errors->first('nombre_emp','<small>:message</small>') !!}</div>   
            </div>


            <!-- CIF de la empresa, texto, obligatorio -->
            <div class="mb-3 col-md-3">
                <label for="cif" class="form-label">CIF</label>
                <input class="form-control" name="cif" value="{{old('cif')}}" id="cif">
                {{$errors->first('cif')}}
            </div>

        </div>


        <!-- Dirección de la empresa , text, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="direccion_emp" class="form-label">Prueba</label> <!-- <label for="direccion_emp" class="form-label">@lang('datosempresa.dir_postal')</label> -->
                <input class="form-control" name="direccion_emp" value="{{old('direccion_emp')}}" id="direccion_emp">
            </div>


            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-md-4">
                <label for="poblacion_emp" class="form-label">Población</label>
                <input class="form-control" name="poblacion_emp" value="{{old('poblacion_emp')}}" id="poblacion_emp">
            </div>


            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-md-2">
                <label for="cp_emp" class="form-label">Código postal</label>
                <input class="form-control" maxlength="5" name="cp_emp" value="{{old('cp_emp')}}" id="cp_emp" placeholder="07123">
            </div>
        </div>


        <!-- Email, obligatorio -->
        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_emp" class="form-label">E-mail</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input class="form-control" type="email" name="email_emp" value="{{old('email_emp')}}" id="email_emp" placeholder="name@example.com" aria-describedby="inputGroupPrepend">
                </div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_emp" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_emp" list="listatelefonos" value="{{old('telefono1_emp')}}" id="telefono1_emp"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_emp" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_emp" value="{{old('telefono2_emp')}}" id="telefono2_emp" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_emp" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_emp" value="{{old('fax_emp')}}" id="fax_emp" placeholder="971 123 456">
            </div>
        </div>


        <!-- Sector productivo, checkbox, obligatorio.- Realmente es un radiobutton pero se fuerza a checkbox para 
        incluir un ejemplo de como se incluyen los old() values en un checkbox cuando falla la validación
        Se presentan tres formas ligeramente diferentes de resolver el problema de los valores old().
        -->
        <div class="form-control">
            <h6 class="inline">Sector productivo</h6>
            <div class="row ml-10">
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


        <!--   Ejemplo si el input 'sector' fuese un checkox  
        <div class="bg-ligth">
           <h3 class="inline">Sector productivo</h3>
           <div class="row ml-6">
               <div class="form-check col-2">
                   <label class="form-check-label" for="id_primario">Primario</label>
                   <input class="form-check-input" type="radio" name="sector" value="primario" @if(is_array(old('sector')) && in_array('primario', old('sector'))) checked @endif id="id_primario">
               </div>
               <div class="form-check col-2">
                   <label class="form-check-label" for="id_secundario">Secundario</label>
                   <input class="form-check-input" type="radio" name="sector" value="secundario" {{ (is_array(old('sector')) and in_array('secundario', old('sector'))) ? ' checked' : '' }} id="id_secundario">
               </div>
               <div class="form-check col-2">
                   <label class="form-check-label" for="id_terciario">Terciario</label>
                   <input class="form-check-input" type="radio" name="sector" value="terciario" {{ (is_array(old('sector')) and in_array('terciario', old('sector'))) ? ' checked' : '' }} id="id_terciario">
               </div>
           </div>
               </div> -->


        <!-- Actividad principal, texto -->
        <div class="mb-3 col-auto">
            <label for="actividad_principal" class="form-label">Actividad principal</label>
            <input class="form-control"  name="actividad_principal" value="{{old('actividad_principal')}}" id="actividad_principal" placeholder="Actividad principal">
        </div>

        <!-- Número de trabajadores -->
        <div class="mb-3 col-md-4">
            <label for="num_trabajadores" class="form-label">Número de trabajadores</label>
            <input class="form-control" type="number" name="num_trabajadores" value="{{old('num_trabajadores')}}" id="num_trabajadores" aria-describedby="HelpEmpleados">
            <div id="HelpEmpleados" class="form-text">
                Número aproximado de empleados en la empresa.
            </div>
        </div>

        <!-- Titularidad, -->
        <div class="row align-items-start">
            <p class="inline">Titularidad</p>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="titularidad" value="publica" {{ (old('titularidad') == "publica") ? "checked" : ""}} id="id_publica">
                <label class="form-check-label" for="id_publica">
                    Pública
                </label>
            </div>
            <div class="form-check col-md-2">
                <input class="form-check-input" type="radio" name="titularidad" value="privada" {{ (old('titularidad') == "privada") ? "checked" : ""}} id="id_privada">
                <label class="form-check-label" for="id_privada">
                    Privada
                </label>
            </div>
        </div>


        <h5>Representante de la empresa</h5>

        <!-- Nombre del representante de la empresa, text, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="nombre_representante_em" class="form-label">Nombre</label>
                <input class="form-control" name="representante_nombre" value="{{old('representante_nombre')}}" id="representante_nombre" aria-describedby="HelpBlock">
                <div id="HelpBlock" class="form-text">
                    Nombre y apellidos del representante de la empresa.
                </div>
            </div>


            <!-- nif del representante de la empresa, obligatorio -->
            <div class="mb-3 col-md-3">
                <label for="representante_nif" class="form-label">NIF</label>
                <input class="form-control" name="representante_nif" value="{{old('representante_nif')}}" id="representante_nif">
            </div>

        </div>
    </fieldset>


    <fieldset class="border p-2">
        <legend>Centro de trabajo</legend>

        <!-- Nombre del centro de trabajo, text, obligatorio -->
        <div class="mb-3 col-md-6">
            <label for="nombre_ct" class="form-label">Nombre</label>
            <input class="form-control" name="nombre_ct" value="{{old('nombre_ct')}}" id="nombre_ct">
        </div>


        <!-- Dirección del centro de trabajo -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="direccion_ct" class="form-label">Prueba</label> <!-- <label for="direccion_ct" class="form-label">{{__('datosempresa.dir_postal')}}</label> -->
                <input class="form-control" name="direccion_ct" value="{{old('direccion_ct')}}" id="direccion_ct">
            </div>

            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-md-4">
                <label for="poblacion_ct" class="form-label">Población</label>
                <input class="form-control" name="poblacion_ct" value="{{old('poblacion_ct')}}" id="poblacion_ct">
            </div>

            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-md-2">
                <label for="cp_ct" class="form-label">Código postal</label>
                <input class="form-control" name="cp_ct" maxlength="5" value="{{old('cp_ct')}}" id="cp_ct" placeholder="07123">
            </div>
        </div>



        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_ct" class="form-label">E-mail</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input class="form-control" type="email" name="email_ct" value="{{old('email_ct')}}" id="email_ct" aria-describedby="inputGroupPrepend2" placeholder="name@example.com">
                </div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_ct" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_ct" value="{{old('telefono1_ct')}}" pattern="[0-9]{9,12}" id="telefono1_ct"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_ct" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_ct" value="{{old('telefono2_ct')}}" id="telefono2_ct" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_ct" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_ct" value="{{old('fax_ct')}}" id="fax_ct" placeholder="971 123 456">
            </div>
        </div>



        <div class="row align-items-start">
            <!-- Actividad en ct, text, opcional -->
            <div class="mb-3 col-md-6">
                <label for="actividad_ct" class="form-label">Actividad principal</label>
                <input class="form-control" name="actividad_ct" value="{{old('actividad_ct')}}" id="actividad_ct">
            </div>

            <div class="mb-3 col-md-2">
                <label for="jornada" class="form-label">Tipo de jornada</label>
                <select class="form-select" name='jornada' id="jornada">
                    <option value="continua" @if (old('jornada') === 'continua') selected @endif>Continua</option>
                    <option value="partida" @if (old('jornada') === 'partida') selected @endif>Partida</option>
                </select>
            </div>

            <!-- Horario, text, opcional -->
            <div class="mb-3 col-md-2">
                <label for="horario_ct" class="form-label">Horario</label>
                <input class="form-control" name="horario_ct" value="{{old('horario_ct')}}" id="horario_ct">
            </div>
        </div>

    </fieldset>


    <!-- Tutores -->
    <fieldset class="border p-2">
        <legend>Tutores</legend>

        <!-- Coordinador de FCT, text, opcional -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="nombre_coordinador_fct" class="form-label">Nombre del coordinador de FCT</label>
                <input class="form-control" name="nombre_coordinador_fct" value="{{old('nombre_coordinador_fct')}}" id="nombre_coordinador_fct" aria-describedby="HelpCoordinador">
                <div id="HelpCoordinador" class="form-text">
                    Nombre y apellidos del coordinador de FCT de la empresa (si lo hubiese).
                </div>
            </div>


            <!-- nif del coordinador de FCT, obligatorio se existe coordinador -->
            <div class="mb-3 col-md-3">
                <label for="nif_coordinador_fct" class="form-label">NIF del coordinador</label>
                <input class="form-control" name="nif_coordinador_fct" value="{{old('nif_coordinador_fct')}}" id="nif_coordinador_fct">
            </div>

        </div>


        <!-- Tutor de FCT, text -->
        <div class="row align-items-start">
            <div class="mb-3 col-md-6">
                <label for="nombre_tutor_emp" class="form-label">Nombre del tutor</label>
                <input class="form-control" name="nombre_tutor_emp" value="{{old('nombre_tutor_emp')}}" id="nombre_tutor_emp"  aria-describedby="HelpTutor">
                <div id="HelTutor" class="form-text">
                    Nombre y apellidos del tutor de FCT.
                </div>
            </div>


            <!-- nif del tutor de FCT -->
            <div class="mb-3 col-md-3">
                <label for="nif_tutor_emp" class="form-label">NIF del tutor</label>
                <input class="form-control" type="text" name="nif_tutor_emp" value="{{old('nif_tutor_emp')}}" id="nif_tutor_emp">
            </div>

        </div>


        <!-- Lugar de trabajo del tutor, Supongo que se refiere al centro de trabajo
        Asumimos que pertenece al mismo centro que el descrito por el formulario más arriba.
        Según Gestib, el tutor se vincula a la empresa y no al centro de trabajo. No incluiremos este campo
        que figura en el formulario de referencia.
        -->

    </fieldset>



    <!-- Comentarios sobre las prácticas -->
    <div class="mb-3">
        <label for="comentarios" class="form-label">Comentarios</label>
        <textarea class="form-control" name="comentarios" id="comentarios" rows="2">{{old('comentarios')}}</textarea>
    </div>


    <div class="row">
        <!-- Población en que se firma -->
        <div class="form-floating mb-3">
            <label for="lugar_firma" class="form-label">Firmado en: </label>
            <input class="form-control" name="lugar_firma" value="{{old('lugar_firma')}}" id="lugar_firma">
        </div>

        <!-- Fecha del envío de estos datos -->
        <div class="form-floating ml-1">
            <label for="fecha_firma" class="form-label">, el </label>
            <input class="form-control" type="date" name="fecha_firma" value="{{old('fecha_firma')}}" id="fecha_firma">
        </div>
    </div>




    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
</form>

</body>
</html>
