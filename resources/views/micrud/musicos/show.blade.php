@extends('micrud.layout')

@section('title', 'Músico | ' . $musico->nombre)

@section('content')
<div class="container-fluid">
  <h1>{{ $musico->nombre }}</h1>
  
  <div>Descripción: {{ $musico->descripcion }}</div>
  <div>Tipo de músico: {{ $musico->categoria }}</div>
  <div>Salario: {{ $musico->salario }}</div>
  <div>Nivel de experiencia: {{ $musico->experiencia }}</div>
  <div>Instrumentos: {{ $musico->instrumento1 }} {{ $musico->instrumento2 }} {{ $musico->instrumento3 }} {{ $musico->instrumento4 }}</div>
  <div>Imagen: {{ $musico->imagen }}</div>
  <div>Empezó a tocar en: {{ $musico->fecha }}</div>
  <p>Registrado {{ $musico->created_at->diffForHumans() }}</p>

  <a href="{{ route('musicos.edit', $musico) }}"><button class="btn btn-primary my-2">Editar</button></a>

  <form method="POST" action="{{ route('musicos.destroy', $musico) }}">
    @csrf @method('DELETE')
    <button class="btn btn-danger my-2">Eliminar</button>
  </form>

  <a href="{{ route('musicos.index') }}">Vuelve atrás</a>
@endsection
</div>
