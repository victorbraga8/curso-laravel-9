@csrf
<input type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder="Nome:">        
<input type="text" name="email" value="{{$user->email ?? old('email')}}" placeholder="E-mail:">
<input type="text" name="password" placeholder="Senha:">
<button class="inline-block px-7 py-3 bg-green-600 text-white font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-2" type="submit">Enviar</button>
<a href="{{route('users.index')}}" class="inline-block px-7 py-3 bg-yellow-600 text-white font-medium text-sm uppercase leading-snug rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out ml-2" type="submit">Voltar</a>