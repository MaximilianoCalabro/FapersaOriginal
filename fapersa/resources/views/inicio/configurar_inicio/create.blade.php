@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'/inicio/configurar_inicio','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="video">Video</label>
            	<input type="file" accept="video/*" name="video" class="form-control" placeholder="Video">
            </div>
            <div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen" class="form-control" placeholder="Imágen">
            </div>
                        <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" placeholder="Título">
            </div>
                        <div class="form-group">
                  <label for="texto">Texto</label>
                  <input type="text" name="texto" class="form-control" placeholder="Texto">
            </div>
            <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion" class="form-control" placeholder="Dirección">
            </div>
            <div class="form-group">
            	<label for="numtel">Teléfono</label>
            	<input type="text" name="telefono" class="form-control" placeholder="Teléfono">
            </div>
            <div class="form-group">
            	<label for="correo">Correo</label>
            	<input type="text" name="correo" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection