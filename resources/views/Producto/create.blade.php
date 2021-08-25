@extends('layout.plantillabase')
@section('contenido')
<h2>Crear Producto</h2>
<form action="/producto" method="POST">
	@csrf
	<div class="mb-3">
		<label for="" class="form-label">Nombre producto</label>
		<input type="text" id="nombreprod" name="nombreprod" class="form-control" tabindex="1" required="">
	</div>

	<select class="form-select" id="cate" name="cate">
		@foreach($categorias as $categoria)
    		<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
   		 @endforeach
	</select>

	<a href="/producto" class="btn btn-secondary">Cancelar</a>
	<button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection