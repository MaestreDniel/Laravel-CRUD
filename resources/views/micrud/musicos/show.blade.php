@extends('micrud.layout')

@section('title', 'Músico | ' . $musico->nombre)

@section('content')
<div class="container-fluid">


  <div class="card w-25">
    @if ($musico->imagen)
      <img class="card-img-top" src="{{ asset('/storage/' . $musico->imagen) }}" alt="{{ $musico->imagen }}">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{ $musico->nombre }}</h5>
      <p class="card-text">{{ $musico->descripcion }}</p>
      <div class="card-text">Descripción: {{ $musico->descripcion }}</div>
      <div class="card-text">Tipo de músico: {{ $musico->categoria }}</div>
      <div class="card-text">Salario: {{ $musico->salario }}</div>
      <div class="card-text">Nivel de experiencia: {{ $musico->experiencia }}</div>
      <div class="card-text">Instrumentos: {{ $musico->instrumento1 }} {{ $musico->instrumento2 }} {{ $musico->instrumento3 }} {{ $musico->instrumento4 }}</div>
      <div class="card-text">Empezó a tocar en: {{ $musico->fecha }}</div><br>
      <p class="card-text">Registrado {{ $musico->created_at->diffForHumans() }}</p>
      <p class="card-text">Editado {{ $musico->updated_at->diffForHumans() }}</p>
      <a href="{{ route('musicos.edit', $musico) }}"><button class="btn btn-primary">Editar</button></a>
      <form method="POST" action="{{ route('musicos.destroy', $musico) }}">
        @csrf @method('DELETE')
        <button class="btn btn-danger my-2">Eliminar</button>
      </form>
    </div>
  </div>

  <a href="{{ route('musicos.index') }}">Vuelve atrás</a>
@endsection
</div>
