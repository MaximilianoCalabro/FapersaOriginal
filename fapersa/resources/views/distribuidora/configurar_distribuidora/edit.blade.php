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

            {!!Form::model($distribuidora,['method'=>'PATCH','route'=>['configurar_distribuidora.update',$distribuidora->iddistribuidora]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="video">Video</label>
                  <input type="file" accept=".mp4" class="form-control" value="{{$distribuidora->video}}" placeholder="Video">
            </div>
            <div class="form-group">
                  <label for="catalogo">Catálogo</label>
                  <input type="file" accept=".pdf" name="catalogo" class="form-control" value="{{$distribuidora->catalogo}}" placeholder="Catálogo">
            </div>
            <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion" class="form-control" value="{{$distribuidora->direccion}}" placeholder="Dirección">
            </div>
            <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="text" name="telefono" class="form-control" value="{{$distribuidora->telefono}}" placeholder="Teléfono">
            </div>
            <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" name="correo" class="form-control" value="{{$distribuidora->correo}}" placeholder="Correo">
            </div>

            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection