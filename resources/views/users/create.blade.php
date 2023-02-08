@extends('layouts.app')
@section('title', 'Novo Usuário')
@section('content')
<h1 class="text-slate-100 font-bold text-2xl">Novo Usuário</h1>
@include('includes.validations-form');
    <form action="{{route('users.store')}}" method="post">
        @include('users._partials.form');
@endsection