Listagem de usuários
<ul>
@foreach($users as $user)
<li>
{{$user->name}} -
{{$user->email}}

</li>

@endforeach
</ul>
<a href="{{route('users.index') }}"a>Mostrar