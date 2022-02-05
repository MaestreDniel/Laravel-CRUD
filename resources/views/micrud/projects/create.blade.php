@extends('micrud.layout')

@section('title', 'Crea un proyecto')

@section('content')
<h2>Vamos a crear un proyecto nuevo</h2>

<form method="POST" action="{{ route('projects.store') }}">
  @csrf
  <label for="title">Título del proyecto</label><br>
  <input type="text" name="title"><br>
  <label for="url">URL del proyecto</label><br>
  <input type="text" name="url"><br>
  <label for="description">Descripción del proyecto</label><br>
  <textarea name="description"></textarea><br>
  <button>Crea el proyecto</button>
</form>
@endsection
