@extends('layouts.app')
@section('title', 'Editar Usuário')
@section('content')
<h1>Editar Usuário - {{$user->name}}</h1>
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>
@endif
    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{$user->name}}" placeholder="Nome:">        
        <input type="text" name="email" value="{{$user->email}}" placeholder="E-mail:">
        <input type="text" name="password" placeholder="Senha:">
        <button type="submit">Enviar</button>
    </form>
@endsection