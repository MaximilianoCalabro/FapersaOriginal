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

            {!!Form::model($inicio,['method'=>'PATCH','route'=>['configurar_inicio.update',$inicio->idinicio], 'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="video">Video</label>
                  <input type="file" accept="video/*" name="video" class="form-control" value="{{$inicio->video}}" placeholder="Video">
            </div>

            <div class="form-group">
                  <label for="imagen_slider">Imagen</label>
                  <input type="file" name="imagen_inicio" class="form-control" value="{{$inicio->imagen}}">
                  @if (($inicio->imagen)!='')
                        <img src="{{asset('img/inicio/'.$inicio->imagen)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" value="{{$inicio->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="texto">Texto</label>
                  <textarea name="texto" class="form-control" placeholder="Texto">{{$inicio->texto}}</textarea>
            </div>
            <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion" class="form-control" value="{{$inicio->direccion}}" placeholder="Dirección">
            </div>
            <div class="form-group">
                  <label for="numtel">Teléfono</label>
                  <input type="text" name="telefono" class="form-control" value="{{$inicio->telefono}}" placeholder="Teléfono">
            </div>
            <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" name="correo" class="form-control" value="{{$inicio->correo}}" placeholder="Correo">
            </div>

            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection