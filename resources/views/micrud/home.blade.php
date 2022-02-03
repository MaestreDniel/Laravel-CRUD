@extends('micrud.layout')

@section('title', 'Home')

@section('content')
<h2>Hola {{$nombre ?? 'Invitado'}}. ¿Empiezas a sentirte un poco más a gusto con Laravel?</h2>
@endsection
