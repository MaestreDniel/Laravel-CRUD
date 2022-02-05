@extends('micrud.layout')

@section('title', 'Contacto')

@section('content')
<h2>{{__('Contact')}}</h2>

{{-- @if($errors->any())
  @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
  @endforeach
@endif --}}

<form method="POST" action=" {{ route('contacto.store') }} ">
  @csrf
  <input name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
  {!! $errors->first('name', '<small>:message</small><br>') !!}
  <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
  {!! $errors->first('email', '<small>:message</small><br>') !!}
  <input name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
  {!! $errors->first('subject', '<small>:message</small><br>') !!}
  <textarea name="content" placeholder="Escribe un mensaje" value="{{ old('content') }}"></textarea><br>
  {!! $errors->first('content', '<small>:message</small><br>') !!}
  <button>Enviar</button>
</form>
@endsection
