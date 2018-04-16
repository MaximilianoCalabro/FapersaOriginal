@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Inicio - <!-- <a href="/inicio/configurar_inicio/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Video</th>
					<th>Imagen</th>
					<th>Título</th>
					<th>Texto</th>
					<th>Texto 2</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Correo</th>
				</thead>
               
               @foreach ($inicio as $cat)
				<tr>
					<td>{{ $cat->video}}</td>
					<td><img src="{{asset('img/inicio/'.$cat->imagen)}}" height="150px" width="150px"></td>
					<td>{{ $cat->titulo}}</td>
					<td><textarea rows="7" cols="30">{{ $cat->texto}}</textarea></td>
					<td><textarea rows="7" cols="30">{{ $cat->texto2}}</textarea></td>
					<td>{{ $cat->direccion}}</td>
					<td>{{ $cat->telefono}}</td>
					<td>{{ $cat->correo}}</td>

					<td>
						<a href="{{URL::action('InicioController@edit',$cat->idinicio)}}"><button class="btn btn-info">Editar</button></a>
						<!-- <a href="" data-target="#modal-delete-{{$cat->idinicio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('inicio.configurar_inicio.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection