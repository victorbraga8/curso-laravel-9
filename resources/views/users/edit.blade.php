@extends('layouts.app')
@section('title', 'Editar Usuário')
@section('content')
<h1 class="text-slate-100 font-bold text-2xl mb-2">Editar Usuário - {{$user->name}}</h1>
@include('includes.validations-form')
    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection