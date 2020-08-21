@extends('layouts.app')

@push('styles')
@endpush

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
                      <label for="exampleInputEmail1">Nombre:</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{ old('nombre')}}">
                      @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripcion Corta:</label>
                      <input type="text" class="form-control @error('descripcion_corta') is-invalid @enderror" id="descripcion_corta" name="descripcion_corta" aria-describedby="emailHelp" value="{{ old('descripcion_corta')}}">
                      @error('descripcion_corta')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
          
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Descripcion:</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" cols="10" rows="5"></textarea>
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
  
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Precio:</label>
                      <input type="number" class="form-control @error('precio_venta') is-invalid @enderror" id="precio_venta" name="precio_venta" aria-describedby="emailHelp" value="{{ old('precio_venta')}}">
                      @error('precio_venta')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Oferta:</label>
                      <input type="number" class="form-control @error('oferta') is-invalid @enderror" id="oferta" name="oferta" aria-describedby="emailHelp" value="{{ old('oferta')}}">
                      @error('oferta')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                        </span> 
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Detalle del producto:</label>
                      <textarea class="form-control editor" name="detalle_producto" id="detalle_producto"></textarea>
                      @error('detalle_producto')
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

@push('scripts')

<script src="{{asset('ckeditor5/build/ckeditor.js')}}"></script>

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

<script>
  window.addEventListener("load", function() {
 ClassicEditor
     .create( document.querySelector( '.editor' ), {
       
       toolbar: {
         items: [
           'heading',
           '|',
           'bold',
           'italic',
           'underline',
           'strikethrough',
           '|',
           'bulletedList',
           'numberedList',
           '|',
           'alignment',
           'fontSize',
           '|',
           'indent',
           'outdent',
           '|',
           'link',
           'imageUpload',
           'blockQuote',
           'insertTable',
           'undo',
           'redo'
         ]
       },
       language: 'es',
       image: {
         toolbar: [
           'imageTextAlternative',
           'imageStyle:full',
           'imageStyle:side'
         ]
       },
       table: {
         contentToolbar: [
           'tableColumn',
           'tableRow',
           'mergeTableCells',
           'tableCellProperties',
           'tableProperties'
         ]
       },
       licenseKey: '',
       
     } )
     .then( editor => {
       window.editor = editor;
     } )
     .catch( error => {
       console.error( 'Oops, something went wrong!' );
       console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
       console.warn( 'Build id: um9fquczyq8m-m93lrfwfgpl3' );
       console.error( error );
     } );
   });
</script>


@endpush