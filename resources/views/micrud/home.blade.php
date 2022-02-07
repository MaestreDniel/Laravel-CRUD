@extends('micrud.layout')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
  <h2>¡Hola, {{ Auth::user()->name }}!</h2>
  <h4>Este CRUD va sobre músicos, haz click <a href="{{ route('musicos.index') }}">{{ __('aquí') }}</a> o bien al enlace del menú de navegación para empezar.</h4>
</div>
@endsection
