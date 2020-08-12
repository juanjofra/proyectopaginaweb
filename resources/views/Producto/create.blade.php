@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.min.css" integrity="sha512-sC2S9lQxuqpjeJeom8VeDu/jUJrVfJM7pJJVuH9bqrZZYqGe7VhTASUb3doXVk6WtjD0O4DTS+xBx2Zpr1vRvg==" crossorigin="anonymous" />
@endsection

@section('content')

  <div class="container">
    <div class="card mt-4 shadow-sm">
      <h5 class="card-header">Nuevo Producto</h5>
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-10 ">
            <form  action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col">
      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo:</label>
                      <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" aria-describedby="emailHelp" value="{{ old('titulo')}}">
                      @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre:</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{ old('nombre')}}">
                      @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
          
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Descripcion:</label>
                      <input type="hidden" id="descripcion" name="descripcion" aria-describedby="emailHelp" value="{{ old('descripcion')}}">
                      <trix-editor input="descripcion" class="@error('descripcion') is-invalid @enderror"></trix-editor>
      
                      @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
                  </div>
  
                  <div class="col">
                    <div class="form-group">
                      <label for="select_categoria">Categoria</label>
                      <select id="select_categoria" class="form-control @error('select_categoria') is-invalid @enderror" name="select_categoria">
                        <option value="">Seleccione...</option>
                        @foreach ($categorias as $categoria)
                      <option value="{{$categoria->id}}" {{old('select_categoria') == $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
                        @endforeach
                      </select>
                      @error('select_categoria')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
  
                    <div class="from-group preview_div" id="preview">
                    <img src="" alt="" class="preview_imagen" >
                    </div>
  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Imagen:</label>
                      <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="file" name="imagen" aria-describedby="emailHelp" value="">
                      @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
                  </div>
                </div>
  
      
                <div class="from-group text-center mt-5">
                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-primary btn-block shadow-sm">Guardar</button>
                    </div>
                    <div class="col">
                      <a href="{{ route('producto.index')}}" class="btn btn-danger btn-block shadow-sm">Cancelar</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
  

@endsection

@section('scripts')

<script type="text/javascript">
 window.addEventListener("load", function(){
  document.getElementById("file").onchange = function(e) {
   // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    
    if(e.target.files[0]){
      reader.readAsDataURL(e.target.files[0]);

      // Le decimos que cuando este listo ejecute el código interno
      reader.onload = function(){
        let preview = document.getElementById('preview'),
                image = document.createElement('img');

        image.src = reader.result;
        image.className = "preview_imagen"

        preview.innerHTML = '';
        preview.append(image);
      };
    }else{
      let preview = document.getElementById('preview'),
                image = document.createElement('img');

        image.src = '';
        image.className = "preview_imagen"

        preview.innerHTML = '';
        preview.append(image);
    }
    
  }
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>


@endsection