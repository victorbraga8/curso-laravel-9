@extends('layouts.app')
@section('title', 'Listagem do Usuário')
@section('content')
<h1>Listagem do Usuário {{$users->name}}</h1>

<ul>
    <li>{{$users->name}}</li>
    <li>{{$users->email}}</li>
</ul>
@endsection