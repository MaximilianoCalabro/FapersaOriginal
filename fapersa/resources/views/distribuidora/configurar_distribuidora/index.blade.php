@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Distribuidora - <!-- <a href="/distribuidora/configurar_distribuidora/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Video</th>
					<th>Catálogo</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Correo</th>
				</thead>
               @foreach ($distribuidora as $cat)
				<tr>
					<td>{{ $cat->video}}</td>
					<td>{{ $cat->catalogo}}</td>
					<td>{{ $cat->direccion}}</td>
					<td>{{ $cat->telefono}}</td>
					<td>{{ $cat->correo}}</td>

					<td>
						<a href="{{URL::action('DistribuidoraController@edit',$cat->iddistribuidora)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->iddistribuidora}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('distribuidora.configurar_distribuidora.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection