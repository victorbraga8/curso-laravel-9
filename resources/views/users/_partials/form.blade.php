@csrf
<input type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder="Nome:">        
<input type="text" name="email" value="{{$user->email ?? old('email')}}" placeholder="E-mail:">
<input type="text" name="password" placeholder="Senha:">
<button type="submit">Enviar</button>