@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
                  </ul>
            </div>
            @endif

            {!!Form::model($fabrica,['method'=>'PATCH','route'=>['configurar_fabrica.update',$fabrica->idfabrica],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="imagen_fondo">Img. Fondo</label>
                  <input type="file" name="imagen_fondo" class="form-control" value="{{$fabrica->imagen_fondo}}" placeholder="Img. Fondo">
                  @if (($fabrica->imagen_fondo)!='')
                        <img src="{{asset('img/fabrica/'.$fabrica->imagen_fondo)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <label for="imagen_contacto">Img. Contacto</label>
                  <input type="file" name="imagen_contacto" class="form-control" value="{{$fabrica->imagen_contacto}}" placeholder="Img. Contacto">
                  @if (($fabrica->imagen_contacto)!='')
                        <img src="{{asset('img/fabrica/'.$fabrica->imagen_contacto)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion" class="form-control" value="{{$fabrica->direccion}}" placeholder="Dirección">
            </div>
            <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="text" name="telefono" class="form-control" value="{{$fabrica->telefono}}" placeholder="Teléfono">
            </div>
            <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" name="correo" class="form-control" value="{{$fabrica->correo}}" placeholder="Correo">
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection