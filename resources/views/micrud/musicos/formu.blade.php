<div class="container-fluid">

  @csrf
  <fieldset class="border p-2">
    <legend>Datos de músico</legend>
    <div class="row align-items-start">
      <div class="mb-3 col-6">
        <label for="nombre" class="form-label">{{ __('Name') }}</label>
        <input class="form-control" name="nombre" value="{{ old('nombre', $musico->nombre) }}" id="nombre" required>
        <div class='text-danger'>{!! $errors->first('nombre', '<small>:message</small>') !!}</div>   
      </div>
    </div>
    
    <div class="mb-3 col-md-2">
      <label for="categoria" class="form-label">{{ __('Musician type') }}</label>
      <select class="form-select" name='categoria' id="categoria">
        <option value="En una banda" @if (old('categoria', $musico->categoria) === 'En una banda') selected @endif>En una banda</option>
        <option value="Solista" @if (old('categoria', $musico->categoria) === 'Solista') selected @endif>Solista</option>
      </select>
      <div class='text-danger'>{!! $errors->first('categoria', '<small>:message</small>') !!}</div>  
    </div>

    <div class="mb-3 col-md-4">
      <label for="salario" class="form-label">{{ __('Salary') }}</label>
      <input class="form-control" type="number" min="1" name="salario" value="{{old('salario', $musico->salario)}}" id="salario" required>
      <div class='text-danger'>{!! $errors->first('salario', '<small>:message</small>') !!}</div>  
    </div>

    <div class="row align-items-start m-2">
      <h6 class="inline">{{ __('Experience') }}</h6>
      <div class="row">
        <div class="form-check col-auto">
          <label class="form-check-label" for="principiante">{{ __('Beginner') }}</label>
          <input class="form-check-input" type="radio" name="experiencia" value="principiante" {{ (old('experiencia', $musico->experiencia) == "principiante") ? "checked" :""}} id="principiante">
        </div>
        <div class="form-check col-auto">
          <label class="form-check-label" for="intermedio">{{ __('Intermediate') }}</label>
          <input class="form-check-input" type="radio" name="experiencia" value="intermedio" {{ (old('experiencia', $musico->experiencia) == "intermedio") ? "checked" : ""}} id="intermedio">
        </div>
        <div class="form-check col-auto">
          <label class="form-check-label" for="avanzado">{{ __('Advanced') }}</label>
          <input class="form-check-input" type="radio" name="experiencia" value="avanzado" {{ (old('experiencia', $musico->experiencia) == "avanzado") ? "checked" : ""}} id="avanzado">
        </div>
      </div>
      <div class='text-danger'>{!! $errors->first('experiencia', '<small>:message</small>') !!}</div>  
    </div>

    <div class="mb-3 col-md-4">
      <h6 class="inline">{{ __('Instruments') }}</h6>
      <input type="checkbox" id="instrumento1" name="instrumento1" value="Guitarra">
      <label for="instrumento1">{{ __('Guitar') }}</label><br>
      <input type="checkbox" id="instrumento2" name="instrumento2" value="Bajo">
      <label for="instrumento2">{{ __('Bass') }}</label><br>
      <input type="checkbox" id="instrumento3" name="instrumento3" value="Bateria">
      <label for="instrumento3">{{ __('Drums') }}</label><br>
      <input type="checkbox" id="instrumento4" name="instrumento4" value="Otro">
      <label for="instrumento4">{{ __('Other') }}</label><br>
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">{{ __('Description') }}</label>
      <textarea class="form-control" name="descripcion" id="descripcion" rows="2" required>{{old('descripcion', $musico->descripcion)}}</textarea>
      <div class='text-danger'>{!! $errors->first('descripcion', '<small>:message</small>') !!}</div>  
    </div>

    <div class="row">
      <div class="mb-3 col-md-4">
        <label for="fecha" class="form-label">{{ __('When did you start playing?') }}</label>
        <input class="form-control" type="date" name="fecha" value="{{old('fecha', $musico->fecha)}}" id="fecha" required>
        <div class='text-danger'>{!! $errors->first('fecha', '<small>:message</small>') !!}</div>  
      </div>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">{{ __('Upload a photo') }}</label>
      <input name="imagen" class="form-control" type="file" value="{{old('imagen', $musico->imagen)}}" id="formFile" required>
      <div class='text-danger'>{!! $errors->first('imagen', '<small>:message</small>') !!}</div>  
    </div>

  </fieldset>

  <button type="submit" class="btn btn-primary my-2">{{ $btnText }}</button><br>
  <a href="{{ route('musicos.index') }}">Vuelve atrás</a>

</div>
