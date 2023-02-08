@extends('layouts.app')
@section('title', 'Listagem do Usuário')
@section('content')
<h1 class="text-slate-100 font-bold text-2xl mb-2">Detalhes Usuário: {{$users->name}}</h1>

<form action="{{route('users.delete', $users->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <input type="text" name="name" value="{{$users->name}}" readonly placeholder="Nome:">        
    <input type="text" name="email" value="{{$users->email}}" readonly placeholder="E-mail:">    
    <button class="inline-block px-7 py-3 bg-red-600 text-white font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-2">Deletar</button>
    <a href="{{route('users.index')}}" class="inline-block px-7 py-3 bg-yellow-600 text-white font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out ml-2" type="submit">Voltar</a>
</form>
@endsection