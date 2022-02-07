@extends('micrud.layout')

@section('title', 'Músicos')

@section('content')
<div class="container-fluid">
  <h2>Músicos de Mallorca</h2>
  <a href="{{ route('musicos.create') }}"><button class="btn btn-primary my-2">Registra un músico nuevo</button></a><br><br>

  <table class="container">
  @if($musicos)
    <tr><th>Nombre</th><th>Descripción</th><th>Creación</th></tr>
    @foreach ($musicos as $musico)
      <tr>
        <td class="col-3"><a href="{{ route('musicos.show', $musico) }}"> {{ $musico->nombre }} </a></td> 
        <td class="col-6"> {{ $musico->descripcion }} </td>
        <td class="col-3"> {{ $musico->created_at->diffForHumans() }} </td>
      </tr>
    @endforeach
  @else
    <h3>No hay músicos registrados</h3>
  @endif
  </table>
@endsection
</div>
