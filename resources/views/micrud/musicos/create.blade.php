@extends('micrud.layout')

@section('title', 'Registrar músico')

@section('content')
<div class="container-fluid">
  <h2>Vamos a registrar a un nuevo músico</h2>
</div>

<form method="POST" action="{{ route('musicos.store') }}" enctype="multipart/form-data">
  @include('micrud.musicos.formu', ['btnText' => 'Registrar'])
</form>

@endsection
