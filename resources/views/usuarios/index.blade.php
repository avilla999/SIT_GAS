<h1>Usuarios</h1>
@if(count($usuarios) > 0)
    @foreach($usuarios as $usuario)
		<div class="card">
			<div class="card-body">
				<h3><a href="usuario/{{$usuario->id}}">{{$usuario->Nombre}}</a></h3>
		</div>
	</div>
	@endforeach
@endif

<h1>Crear usuario</h1>

