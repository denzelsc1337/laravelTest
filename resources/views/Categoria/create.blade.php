@extends('layout.plantillabase')
@section('contenido')
<h2>Agregar Categoria</h2>
<form action="/categoria" method="POST">
	@csrf
	<div class="mb-3">
		<label for="" class="form-label">Nombre Categoria</label>
		<input type="text" id="nombrecate" name="nombrecate" class="form-control" tabindex="1" required="">
	</div>

	<a href="/categoria" class="btn btn-secondary">Cancelar</a>
	<button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection