@extends('layouts.app')
@section('title', 'Novo Usuário')
@section('content')
<h1>Novo Usuário</h1>
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>
@endif
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" value="{{old('name')}}" placeholder="Nome:">        
        <input type="text" name="email" value="{{old('email')}}" placeholder="E-mail:">
        <input type="text" name="password" placeholder="Senha:">
        <button type="submit">Enviar</button>
    </form>
@endsection