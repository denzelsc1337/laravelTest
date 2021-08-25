@extends('layout.plantillabase');
@section('contenido')
<form action="/producto/{{$producto->id}}" method="POST">
	@csrf
	@method('PUT')
	<div class="mb-3">
		<label for="" class="form-label">Nombre producto</label>
		<input type="text" id="nombreprod" name="nombreprod" class="form-control" value="{{$producto->nombreprod}}">
	</div>

	<div class="mb-3">
		<label for="" class="form-label">id cate</label>
		<input type="text" id="cate" name="cate" class="form-control" tabindex="1">
	</div>
	<a href="/producto" class="btn btn-secondary">Cancelar</a>
	<button type="submit" class="btn btn-primary">Agregar</button>
</form>

@endsection