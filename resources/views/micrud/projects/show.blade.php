@extends('micrud.layout')

@section('title', 'Portfolio | ' . $project->title)

@section('content')
  <h1>{{ $project->title }}</h1>
  <a href="{{ route('projects.edit', $project) }}"><button>Editar</button></a>

  <form method="POST" action="{{ route('projects.destroy', $project) }}">
    @csrf @method('DELETE')
    <button>Eliminar</button>
  </form>

  <p>{{ $project->description }}</p>
  <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
