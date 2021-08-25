@extends('layout.plantillabase');
@section('contenido')
<table class="table table-dark table-striped mt-4">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Categoria</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categ as $cate)
			<tr>
				<td>{{$cate->id}}</td>
				<td>{{$cate->nombre}}</td>
				<td>
					<form action="{{route('categoria.destroy',$cate->id)}}" method="POST">
					<a href="/categoria/{{$cate->id}}/edit" class="btn btn-info">Editar</a>
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