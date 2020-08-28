@extends('layouts.app')

@section('content')

<div class="row m-0  mt-0">
  <div class="col-2 p-0">
        @include('layouts.sidebar')
  </div>

  <div class="col-10">

    <div>
      <div class="card">
        <h5 class="card-header">
          <div class="row">
          <div class="col text-uppercase">Galeria {{$producto->nombre}}</div>
          </div>
        </h5>
        <div class="card-body">
          <div class="row">
            <div class="col-8 overflow-auto">
              <div class="d-flex justify-content-around flex-wrap">
                @foreach ( $producto->galeria as $galeria )
                <div class="card m-1 border-0" style="width: 10rem;">
                <img src="/imagenes/galeria/{{$galeria->imagen}}" class="card-img-top" alt="..." class="shadow">
                <div class="card-body text-center" style="background-color: #F8FAFC">
                  <form action="{{route('galeria.destroy', ['galeria' => $galeria->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-4 border-left">
              <form  action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data" class="p-1">
                @csrf
                    
                <div class="row justify-content-center">
                  <div class="from-group preview_div" id="preview">
                    <img src="" alt="" class="preview_imagen_modal" >
                  </div>
                </div>
                <div class="row">
    
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div>
                          <input type="hidden" class="form-control" id="producto_id" name="producto_id" value="{{ old('producto_id', $producto->id)}}">
                        </div>
                        <div>
                          <label >Imagen:</label>
                          <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="file" name="imagen" aria-describedby="emailHelp" value="">
                          @error('imagen')
                            <span class="invalid-feedback d-block" role="alert">
                              <strong>{{$message}}</strong>
                            </span> 
                          @enderror
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row mt-3">
                  <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Agregar Imagen</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  

@endsection



@push('scripts')
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
        image.className = "preview_imagen_modal"

        preview.innerHTML = '';
        preview.append(image);
      };
    }else{
      let preview = document.getElementById('preview'),
                image = document.createElement('img');

        image.src = '';
        image.className = "preview_imagen_modal"

        preview.innerHTML = '';
        preview.append(image);
    }
    
  }
});
</script>
@endpush