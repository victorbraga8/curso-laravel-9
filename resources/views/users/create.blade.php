@extends('layouts.app')
@section('title', 'Novo Usuário')
@section('content')
<h1>Novo Usuário</h1>
@include('includes.validations-form.blade');
    <form action="{{route('users.store')}}" method="post">
        @include('users._partials.form');
@endsection