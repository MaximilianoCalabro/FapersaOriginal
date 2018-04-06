@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Fábrica - <!-- <a href="/fabrica/configurar_fabrica/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Img. Fondo</th>
					<th>Img. Contacto</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Correo</th>
				</thead>
               @foreach ($fabrica as $cat)
				<tr>
					<td><img src="{{asset('img/fabrica/'.$cat->imagen_fondo)}}" height="150px" width="150px"></td>
					<td><img src="{{asset('img/fabrica/'.$cat->imagen_contacto)}}" height="150px" width="150px"></td>
					<td>{{ $cat->direccion}}</td>
					<td>{{ $cat->telefono}}</td>
					<td>{{ $cat->correo}}</td>

					<td>
						<a href="{{URL::action('FabricaController@edit',$cat->idfabrica)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->idfabrica}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('fabrica.configurar_fabrica.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection