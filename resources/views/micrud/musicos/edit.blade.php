@extends('micrud.layout')

@section('title', 'Editar músico')

@section('content')
<div class="container-fluid">
  <h2>Editar músico</h2>
</div>

<form method="POST" action="{{ route('musicos.update', $musico) }}">
  @method('PATCH')
  @include('micrud.musicos.formu', ['btnText' => 'Editar'])
</form>
@endsection
