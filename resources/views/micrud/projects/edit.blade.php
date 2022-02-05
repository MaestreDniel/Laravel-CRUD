@extends('micrud.layout')

@section('title', 'Editar proyecto')

@section('content')
<h2>Editar el proyecto</h2>

@include('partials.validation-errors')

<form method="POST" action="{{ route('projects.update', $project) }}">
  @method('PATCH')
  @include('micrud.projects._form', ['btnText' => 'Editar'])
</form>
@endsection
