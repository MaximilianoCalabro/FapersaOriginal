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

            {!!Form::model($slider,['method'=>'PATCH','route'=>['slider.update',$slider->idslider]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="imagen_slider">Img. Slider</label>
                  <input type="file" name="imagen_slider" class="form-control" value="{{$slider->imagen_slider}}" placeholder="Img. Slider">
                  @if (($slider->imagen_slider)!='')
                        <img src="{{asset('img/slider/'.$slider->imagen_slider)}}" height="100px" width="100px">
                  @endif
            </div>
            <div class="form-group">
                  <label for="titulo_slider">Título</label>
                  <input type="text" name="titulo_slider" class="form-control" value="{{$slider->titulo_slider}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="texto_slider">Texto</label>
                  <textarea name="texto_slider" class="form-control" placeholder="Texto">{{$slider->texto_slider}}</textarea>
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection