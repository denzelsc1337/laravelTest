@extends('layout.plantillabase');
@section('contenido')
<table class="table table-dark table-striped mt-4">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">nombre del producto</th>
			<th scope="col">Categoria</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td>{{$producto->nombreprod}}</td>
				<td>{{$producto->categoria}}</td>
				<td>
					<form action="{{route('producto.destroy',$producto->id)}}" method="POST">
					<a href="/producto/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Borrar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<a href="producto/create" class="btn btn-primary">Agregar Productos</a>
<a href="categoria/create" class="btn btn-secondary">Agregar Categorias</a>
@endsection