@extends('layouts.app')

@section('content')
<div class="row m-0  mt-0">
  <div class="col-2 p-0">
		@include('layouts.sidebar')
  </div>

	<div class="col-10">
		<div class="header">
			<h1 class="header-title">
					<i class="fas fa-cog"></i> Configuraciones
			</h1>
			<p class="header-subtitle">Estas configuraciones serán visibles en la tienda para los usuarios!.</p>
		</div>

		<div class="">
			<form action='{{route("configuracion.update", ['configuracion' => $configuracion->id])}}' method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
							{{-- Start General --}}
							<div class="col-lg-6 col-md-12 form-group">
									<div class="card" style="background: #e8e8e8 !important">
											<div class="card-header " style="background: #e8e8e8 !important">
													<h5 class="card-title">General</h5>
											</div>
											<div class="card-body">
													<div class="row">
															<div class="col-lg-12 form-group">
																	<label><b>Nombre de la tienda</b></label>
																	<input type="text" class="form-control" name="nombre_tienda" placeholder="Nombre general del ecommerce" value="{{old('nombre_tienda', $configuracion->nombre_tienda)}}">
																	@error('nombre_tienda')
																		<span class="invalid-feedback d-block" role="alert">
																			<strong>{{$message}}</strong>
																		</span> 
																	@enderror
															</div>
															<div class="col-lg-12 form-group">
																	<label><b>Correo de contacto</b></label>
																	<input type="text" class="form-control" name="correo_contacto" placeholder="Ingrese correo de contacto" value="{{old('correo_contacto', $configuracion->correo_contacto)}}">
																	@error('correo_contacto')
																		<span class="invalid-feedback d-block" role="alert">
																			<strong>{{$message}}</strong>
																		</span> 
																	@enderror
															</div>
															<div class="col-lg-12 form-group">
																	<label><b>Enlace de Facebook</b></label>
																	<div class="input-group mb-2 mr-sm-2">
																			<div class="input-group-prepend">
																					<div class="input-group-text" style="background: #385898;color: white;border: none;padding: 0 14px;"><i class="fab fa-facebook-f"></i></div>
																			</div>
																			<input type="text" class="form-control" name="enlace_facebook" placeholder="Enlace de facebook" value="{{old('enlace_facebook', $configuracion->enlace_facebook)}}">
																			@error('enlace_facebook')
																				<span class="invalid-feedback d-block" role="alert">
																					<strong>{{$message}}</strong>
																				</span> 
																			@enderror
																	</div>
															</div>
															<div class="col-lg-12 form-group">
																	<label><b>Enlace de Twitter</b></label>
																	<div class="input-group mb-2 mr-sm-2">
																			<div class="input-group-prepend">
																					<div class="input-group-text" style="background: #00ade5;color: white;border: none;padding: 0 11px;"><i class="fab fa-twitter"></i></div>
																			</div>
																			<input type="text"  class="form-control" name="enlace_twitter" placeholder="Enlace de twitter" value="{{old('enlace_twitter', $configuracion->enlace_twitter)}}">
																			@error('enlace_twitter')
																				<span class="invalid-feedback d-block" role="alert">
																					<strong>{{$message}}</strong>
																				</span> 
																			@enderror
																	</div>
															</div>
													</div>
											</div>
									</div>
							</div>
							{{-- End General --}}

							{{-- Start Contacto --}}
							<div class="col-lg-6 col-md-12 form-group">
									<div class="card">
											<div class="card-header" style="background: #e8e8e8 !important">
													<h5 class="card-title">Contacto</h5>
											</div>
											<div class="card-body" style="background: #e8e8e8 !important">
													<div class="row">
															<div class="col-lg-12 form-group">
																	<label><b>Telefono</b></label>
																	<input type="text" class="form-control" name="telefono_contacto" placeholder="Ingrese telefono de contacto" value="{{old('telefono_contacto', $configuracion->telefono_contacto)}}">
																	@error('telefono_contacto')
																		<span class="invalid-feedback d-block" role="alert">
																			<strong>{{$message}}</strong>
																		</span> 
																	@enderror
															</div>
															<div class="col-lg-12 form-group">
																	<label><b>Dirección de la tienda</b></label>
																	<textarea name="direccion_tienda" placeholder="Dirección física" class="form-control" style="height:80px">{{old('direccion_tienda', $configuracion->direccion_tienda)}}</textarea>
																	@error('direccion_tienda')
																		<span class="invalid-feedback d-block" role="alert">
																			<strong>{{$message}}</strong>
																		</span> 
																	@enderror
															</div>
															<div class="col-lg-12 form-group">
																	<label><b>Horarios de atención</b></label>
																	<textarea name="horario_atencion" placeholder="Dirección física" class="form-control" style="height:80px">{{old('horario_atencion', $configuracion->horario_atencion)}}</textarea>
																	@error('horario_atencion')
																	<span class="invalid-feedback d-block" role="alert">
																		<strong>{{$message}}</strong>
																	</span> 
																@enderror
															</div>
													</div>
											</div>
									</div>
							</div>
							{{-- End Recursos --}}

							{{-- Start Banners --}}
							<div class="col-lg-12">
									<div class="card" style="background: #e8e8e8 !important">
											<div class="card-header" style="background: #e8e8e8 !important">
													<h5 class="card-title">Banners</h5>
											</div>
											<div class="card-body">
													<div class="row">
															<div class="col-lg-3" style="margin-left: 90px">
																	<label><b>Banner 1 - página de inicio</b></label>
																	<input id="banner_1" type="file" class="form-control mb-4" name="banner_1">
																		@error('banner_1')
																			<span class="invalid-feedback d-block" role="alert">
																				<strong>{{$message}}</strong>
																			</span> 
																		@enderror
																	<div id="preview_banner_1">
																		@if($configuracion->banner_1)
																			<img src="/imagenes/slider/{{$configuracion->banner_1}}" alt="" class="preview_igamen_banner">
																		@endif
																	</div>
																	<div class="form-group mt-3">
																		<select id="producto_select_banner_1" class="form-control selectpicker" data-style="form-control" 
																		data-live-search="true"  name="producto_select_banner_1">
																			<option value="">Seleccione...</option>
																			@foreach ($productosselect as $productoselect)
																		<option value="{{$productoselect->id}}" {{ $productoselect->id == $configuracion->producto_select_banner_1 ? 'selected' : ''}}>{{$productoselect->nombre}}</option>
																			@endforeach
																		</select>
																	</div>
																		@if($configuracion->banner_1)
																			<eliminar-banner configuracion-id={{$configuracion->id}} banner=1></eliminar-banner>
																		@endif
															</div>
															<div class="col-lg-3 ml-5">
																	<label><b>Banner 2 - página de inicio</b></label>
																	<input id="banner_2" type="file" class="form-control mb-4" name="banner_2">
																		@error('banner_2')
																			<span class="invalid-feedback d-block" role="alert">
																				<strong>{{$message}}</strong>
																			</span> 
																		@enderror
																	<div id="preview_banner_2">
																		@if($configuracion->banner_2)
																			<img src="/imagenes/slider/{{$configuracion->banner_2}}" alt="" class="preview_igamen_banner">
																		@endif
																	</div>
																	<div class="form-group mt-3">
																		<select id="producto_select_banner_2" class="form-control selectpicker" data-style="form-control" 
																			data-live-search="true"  name="producto_select_banner_2">
																				<option value="">Seleccione...</option>
																				@foreach ($productosselect as $productoselect)
																			<option value="{{$productoselect->id}}" {{ $productoselect->id == $configuracion->producto_select_banner_2 ? 'selected' : ''}}>{{$productoselect->nombre}}</option>
																				@endforeach
																			</select>
																	</div>
																		@if($configuracion->banner_2)
																			<eliminar-banner configuracion-id={{$configuracion->id}} banner=2></eliminar-banner>
																		@endif
															</div>
															<div class="col-lg-3 ml-5">
																	<label><b>Banner 3 - De detalle de producto</b></label>
																	<input id="banner_3" type="file" class="form-control mb-4" name="banner_3">
																		@error('banner_3')
																			<span class="invalid-feedback d-block" role="alert">
																				<strong>{{$message}}</strong>
																			</span> 
																		@enderror
																	<div id="preview_banner_3">
																		@if($configuracion->banner_3)
																			<img src="/imagenes/slider/{{$configuracion->banner_3}}" alt="" class="preview_igamen_banner">
																		@endif
																	</div>
																	<div class="form-group mt-3">
																		<select id="producto_select_banner_3" class="form-control selectpicker" data-style="form-control" 
																			data-live-search="true"  name="producto_select_banner_3">
																				<option value="">Seleccione...</option>
																				@foreach ($productosselect as $productoselect)
																			<option value="{{$productoselect->id}}" {{ $productoselect->id == $configuracion->producto_select_banner_3 ? 'selected' : ''}}>{{$productoselect->nombre}}</option>
																				@endforeach
																			</select>
																	</div>
																		@if($configuracion->banner_3)
																			<eliminar-banner configuracion-id={{$configuracion->id}} banner=3></eliminar-banner>
																		@endif
																	
															</div>
													</div>
											</div>
									</div>
							</div>
							{{-- End Recursos --}}

							{{-- Start Banners Descuentos --}}
							<div class="col-lg-12 mt-4">
								<div class="card" style="background: #e8e8e8 !important">
										<div class="card-header" style="background: #e8e8e8 !important">
												<h5 class="card-title">Banners Descuentos</h5>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-lg-3" style="margin-left: 20%">
																<label><b>Banner 1 - página de inicio</b></label>
																<input id="oferta_banner_1" type="file" class="form-control mb-4" name="oferta_banner_1">
																<div id="preview_oferta_banner_1">
																	@if($configuracion->oferta_banner_1)
																		<img src="/imagenes/slider/{{$configuracion->oferta_banner_1}}" alt="" class="preview_igamen_banner">
																	@endif
																</div>
																<div class="form-group mt-3">
																	<select id="producto_select_oferta_banner_1" class="form-control selectpicker" data-style="form-control" 
																	data-live-search="true"  name="producto_select_oferta_banner_1">
																		<option value="">Seleccione...</option>
																		@foreach ($productosselect as $productoselect)
																	<option value="{{$productoselect->id}}" {{ $productoselect->id == $configuracion->producto_select_oferta_banner_1 ? 'selected' : ''}}>{{$productoselect->nombre}}</option>
																		@endforeach
																	</select>
																</div>
																	@if($configuracion->oferta_banner_1)
																		<eliminar-banner-oferta configuracion-id={{$configuracion->id}} banner=1></eliminar-banner-oferta>
																	@endif
														</div>

														<div class="col-lg-3 ml-5">
																<label><b>Banner 2 - página de inicio</b></label>
																<input id="oferta_banner_2" type="file" class="form-control mb-4" name="oferta_banner_2">
																<div id="preview_oferta_banner_2">
																	@if($configuracion->oferta_banner_2)
																		<img src="/imagenes/slider/{{$configuracion->oferta_banner_2}}" alt="" class="preview_igamen_banner">
																	@endif
																</div>
																<div class="form-group mt-3">
																	<select id="producto_select_oferta_banner_2" class="form-control selectpicker" data-style="form-control" 
																		data-live-search="true"  name="producto_select_oferta_banner_2">
																			<option value="">Seleccione...</option>
																			@foreach ($productosselect as $productoselect)
																		<option value="{{$productoselect->id}}" {{ $productoselect->id == $configuracion->producto_select_oferta_banner_2 ? 'selected' : ''}}>{{$productoselect->nombre}}</option>
																			@endforeach
																		</select>
																</div>
																	@if($configuracion->oferta_banner_2)
																		<eliminar-banner-oferta configuracion-id={{$configuracion->id}} banner=2></eliminar-banner-oferta>
																	@endif
														</div>
												</div>
										</div>
								</div>
						</div>
						{{-- End Recursos --}}

							{{-- Start Mensajes --}}
							<div class="col-lg-12 form-group mt-4">
								<div class="card" style="background: #e8e8e8 !important">
										<div class="card-header"  style="background: #e8e8e8 !important">
												<h5 class="card-title">Mensajes</h5>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-lg-12">
																<label><b>Mensaje de nosotros</b></label>
														<textarea name="nosotros" class="form-control editor" style="height:120px" placeholder="Ingrese el mensaje">{{old('nosotros', $configuracion->nosotros)}}</textarea>
														</div>
												</div>
										</div>
								</div>
						</div>
							{{-- End Mensajes --}}

								{{-- Start Moneda --}}
							<div class="col-lg-6">
									<div class="card mt-4 shadow">
											<div class="card-header" style="background: #e8e8e8 !important">
													<h5 class="card-title">Moneda</h5>
											</div>
											<div class="card-body" style="background: #e8e8e8 !important">
													<div class="row form-group">
															<div class="col-lg-4">
																	<label><b>Tipo de moneda</b></label>
															</div>
															<div class="col-lg-8">
																	<select name="tipo_moneda" class="form-control">
																			@if ($configuracion->tipo_moneda == 'Guaranies')
																					<option value="Guaranies" selected>Guaranies</option>
																					<option value="Dolares">Dolares</option>
																			@elseif($configuracion->tipo_moneda == 'Dolares')
																					<option value="Guaranies" >Guaranies</option>
																					<option value="Dolares" selected>Dolares</option>
																			@endif
																	</select>
															</div>
													</div>
											</div>
									</div>
							</div>

								{{-- Start Mensajes --}}
								<div class="col-lg-6 form-group mt-4">
									<div class="card shadow" style="background: #e8e8e8 !important">
											<div class="card-header "  style="background: #e8e8e8 !important">
													<h5 class="card-title">Mensaje Delivery</h5>
											</div>
											<div class="card-body">
													<div class="row">
															<div class="col-lg-12">
															<textarea name="mensaje_delivery" class="form-control" style="height:80px" placeholder="Ingrese el mensaje">{{old('mensaje_delivery', $configuracion->mensaje_delivery)}}</textarea>
															</div>
													</div>
											</div>
									</div>
							</div>
								{{-- End Mensajes --}}
	
							<div class="col-lg-12 mt-4 text-center text-center mb-3">
									<button class="btn btn-primary btn-lg" type="submit"><i class="fas fa-pen-alt"></i> Actualizar</button>
							</div>
					</div>
			</form>
		</div>
	</div>

</div>

@endsection

@push('scripts')

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
<script src="{{asset('ckeditor5/build/ckeditor.js')}}" defer></script>

{{-- Banner_1 --}}
<script type="text/javascript">
  window.addEventListener("load", function(){
   document.getElementById("banner_1").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
 
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     
     if(e.target.files[0]){
       reader.readAsDataURL(e.target.files[0]);
 
       // Le decimos que cuando este listo ejecute el código interno
       reader.onload = function(){
         let preview = document.getElementById('preview_banner_1'),
                 image = document.createElement('img');
 
         image.src = reader.result;
         image.className = "preview_igamen_banner"
 
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

{{-- Banner_2 --}}
<script type="text/javascript">
  window.addEventListener("load", function(){
   document.getElementById("banner_2").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
 
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     
     if(e.target.files[0]){
       reader.readAsDataURL(e.target.files[0]);
 
       // Le decimos que cuando este listo ejecute el código interno
       reader.onload = function(){
         let preview = document.getElementById('preview_banner_2'),
                 image = document.createElement('img');
 
         image.src = reader.result;
         image.className = "preview_igamen_banner"
 
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

{{-- Banner_3 --}}
<script type="text/javascript">
  window.addEventListener("load", function(){
   document.getElementById("banner_3").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
 
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     
     if(e.target.files[0]){
       reader.readAsDataURL(e.target.files[0]);
 
       // Le decimos que cuando este listo ejecute el código interno
       reader.onload = function(){
         let preview = document.getElementById('preview_banner_3'),
                 image = document.createElement('img');
 
         image.src = reader.result;
         image.className = "preview_igamen_banner"
 
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

{{-- Banner_oferta_1 --}}
<script type="text/javascript">
  window.addEventListener("load", function(){
   document.getElementById("oferta_banner_1").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
 
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     
     if(e.target.files[0]){
       reader.readAsDataURL(e.target.files[0]);
 
       // Le decimos que cuando este listo ejecute el código interno
       reader.onload = function(){
         let preview = document.getElementById('preview_oferta_banner_1'),
                 image = document.createElement('img');
 
         image.src = reader.result;
         image.className = "preview_igamen_banner"
 
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

{{-- Banner_Oferta_2 --}}
<script type="text/javascript">
  window.addEventListener("load", function(){
   document.getElementById("oferta_banner_2").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
     let reader = new FileReader();
 
     // Leemos el archivo subido y se lo pasamos a nuestro fileReader
     
     if(e.target.files[0]){
       reader.readAsDataURL(e.target.files[0]);
 
       // Le decimos que cuando este listo ejecute el código interno
       reader.onload = function(){
         let preview = document.getElementById('preview_oferta_banner_2'),
                 image = document.createElement('img');
 
         image.src = reader.result;
         image.className = "preview_igamen_banner"
 
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
         items: ['heading','|','bold','italic','underline','strikethrough','|','bulletedList','numberedList','|','alignment','fontSize','|','indent','outdent','|','link','imageUpload','blockQuote','insertTable','undo','redo']
       },
       language: 'es',
       image: {
         toolbar: ['imageTextAlternative','imageStyle:full','imageStyle:side']
       },
       table: {
         contentToolbar: ['tableColumn','tableRow','mergeTableCells','tableCellProperties','tableProperties']
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

{{-- Selectpiker --}}
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
        // Your jquery code            
				$('.selectpicker').selectpicker({
    style: 'btn-default'
  });      
});

</script>



 
@endpush