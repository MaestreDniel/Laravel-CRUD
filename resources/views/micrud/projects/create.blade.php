@extends('micrud.layout')

@section('title', 'Crea un proyecto')

@section('content')
<h2>Vamos a crear un proyecto nuevo</h2>

@include('partials.validation-errors')

<form method="POST" action="{{ route('projects.store') }}">
  @include('micrud.projects._form', ['btnText' => 'Crea el proyecto'])
</form>
@endsection
