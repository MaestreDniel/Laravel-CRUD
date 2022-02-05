@extends('micrud.layout')

@section('title', 'Proyectos')

@section('content')
<h2>Estás en proyectos</h2>

<table>
  @if($projects) {{-- Podríamos poner @isset para jugar con si la variable está definida o no --}}
    <tr><th>Nº proyecto</th><th>Descripción</th><th>Creación</th></tr>
    @foreach ($projects as $project) {{-- En vez de @foreach podríamos usar @forelse --}}
      <tr>
        <td><a href="{{ route('projects.show', $project) }}"> {{ $project->title }} </a></td> 
        <td> {{ $project->description }} </td>
        <td> {{ $project->created_at->diffForHumans() }} </td>
      </tr>
    @endforeach
  @else
    <h3>No hay proyectos disponibles</h3>
  @endif
  {{-- {{ $projects->links() }} --}}
</table>
@endsection
