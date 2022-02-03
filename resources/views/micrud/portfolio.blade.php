@extends('micrud.layout')

@section('title', 'Portfolio')

@section('content')
<h2>Estás en portfolio</h2>

<ul>
  @if($portfolio) {{-- Podríamos poner @isset para jugar con si la variable está definida o no --}}
    @foreach ($portfolio as $portfolioItem) {{-- En vez de @foreach podríamos usar @forelse --}}
      <li> {{ $portfolioItem['title'] }} </li> <!-- Cogerá el valor de cada clave 'title', es decir, el proyecto #num -->
    @endforeach
  @else
    <li>No hay proyectos disponibles</li>
  @endif
</ul>
@endsection
