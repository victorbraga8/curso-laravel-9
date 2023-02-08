@extends('layouts.app')
@section('title', 'Listagem dos Usuários')
@section('content')
{{-- <h1 class="block text-sm font-medium text-slate-100">Listagem de Usuários
    <a href="{{route('users.create')}}">+</a>
</h1>
<div>
    <form action="{{route('users.index')}}" method="GET">
        <input type="text" class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="search" id="" placeholder="Pesquisar">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        
        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">              
        <button class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Pesquisar</button>
    </form>
</div>
<ul>
    @foreach ($users as $user)
        <li>
            {{$user->name}} -
            {{$user->email}}
            <a href="{{route('users.edit', $user->id)}}">Editar</a>
            <a href="{{route('users.show', $user->id)}}">Detalhes</a>
        </li>
    @endforeach
</ul> --}}
<div class="container my-24 px-6 mx-auto">
    <!-- Section: Design Block -->    
    <h1 class="text-slate-100 font-bold text-2xl mb-4">Listagem de Usuários</h1>
    <section class="mb-32 text-gray-800 text-center lg:text-left">      
      <div class="flex flex-wrap justify-center">
        <div class="grow-0 shrink-0 basis-auto w-full">
          <div class="grid lg:grid-cols-1 gap-x-6 items-center">            
            <form action="{{route('users.index')}}" method="GET">    
            <div class="mb-6 md:mb-0">
              <div class="md:flex flex-row">
                <input
                  type="text"
                  class="form-control block w-full px-4 py-2 mb-2 md:mb-0 md:mr-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Pesquisar usuário" name="search"/>
                <button
                  type="submit"
                  class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                  Pesquisar
                </button>
                <a class="inline-block px-7 py-3 bg-green-600 text-white font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-2" href="{{route('users.create')}}">Adicionar</a>
                @isset ($_GET['search'])                    
                    <a class="inline-block px-7 py-3 bg-neutral-300 text-black font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-neutral-500 hover:shadow-lg focus:bg-neutral-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-neutral-800 active:shadow-lg transition duration-150 ease-in-out ml-2" href="{{route('users.index')}}">Limpar</a>                  
                @endisset
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        ID
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nome
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        E-mail
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Ações
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    {{-- <li>
                        {{$user->name}} -
                        {{$user->email}}
                        <a href="{{route('users.edit', $user->id)}}">Editar</a>
                        <a href="{{route('users.show', $user->id)}}">Detalhes</a>
                    </li> --}}                                    
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{$user->id}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$user->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$user->email}}    
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">                            
                            <a href="{{route('users.edit', $user->id)}}" data-tooltip-target="tooltip-editar" class="inline-block bg-amber-500 px-2 py-2 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mr-1 cursor-pointer"><i class="ph-pencil text-2xl"></i></a> 
                            <a href="{{route('users.show', $user->id)}}" data-tooltip-target="tooltip-detalhes" class="inline-block bg-teal-600 px-2 py-2 text-white font-medium text-sm leading-snug rounded shadow-md hover:bg-teal-700 hover:shadow-lg focus:bg-teal-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1 cursor-pointer"><i class="ph-user-list text-2xl"></i></a>
                        </td>
                        <div id="tooltip-editar" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Editar
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <div id="tooltip-detalhes" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Ver Detalhes
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </tr>
                    @endforeach                        
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </section>    
  </div>
  
    

@endsection
