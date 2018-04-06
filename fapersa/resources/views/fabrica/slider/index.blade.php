@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Fábrica Slider - <a href="/fabrica/slider/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Img. Slider</th>
					<th>Título</th>
					<th>Texto</th>
				</thead>
               @foreach ($slider as $cat)
				<tr>
					<td><img src="{{asset('img/slider/'.$cat->imagen_slider)}}" height="150px" width="150px"></td>
					<td>{{ $cat->titulo_slider}}</td>
					<td><textarea rows="7" cols="30">{{ $cat->texto_slider}}</textarea></td>

					<td>
						<a href="{{URL::action('SliderController@edit',$cat->idslider)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->idslider}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('fabrica.slider.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection