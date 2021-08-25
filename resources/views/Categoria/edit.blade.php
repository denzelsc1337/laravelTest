@extends('layout.plantillabase');
@section('contenido')
<form action="/categoria/{{$categ->id}}" method="POST">
	@csrf
	@method('PUT')
	<div class="mb-3">
		<label for="" class="form-label">Nombre Categoria</label>
		<input type="text" id="nombrecate" name="nombrecate" class="form-control" value="{{$categ->nombre}}">
	</div>

	<a href="/categoria" class="btn btn-secondary">Cancelar</a>
	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection