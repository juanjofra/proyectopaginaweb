@extends('layouts.web')

@section('content')
@php
$configuracion = DB::table('configuracions')->where('id',  1)->first();
@endphp
<div class="main-content mt-5">
  <!-- =====================================
      ==== Start single-product -->
  <div class="single-product">
    <!-- Container -->
    <div class="container">
      <!-- Row -->
      <div class="row">
        <div class="col-md-12 product-info">
          <div class="product-header">
            <div class="product-header__left">
              <h1 class="product-title">
                {{$producto->nombre}}
              </h1><!-- /.product-title-->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-12">
              <div class="contenedor_imagen_grande">
                <div class="slider slider-for" id="divImagenPrincipal">
                  @foreach ($producto->galeria as $galeria)

                  <div><img src='{{"/imagenes/galeria/$galeria->imagen"}}' alt=""></div>
                  @endforeach
                  
                </div>
                <div class="slider slider-nav">
                  @foreach ($producto->galeria as $galeria)

                  <div><img src='{{"/imagenes/galeria/$galeria->imagen"}}' alt=""></div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12">
              <div class="product-caption clearfix">
                <p>{{$producto->descripcion_corta}}:</p>
                <div class="product-price">
                  @if (($producto->precio_venta) > 0 && ($producto->oferta) == 0)
                  <ins>
                    <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{$producto->precio_venta}}</span>
                  </ins>    
                  @endif
                  @if ($producto->oferta > 0)
                  <ins>
                    <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{$producto->oferta}}</span>
                  </ins>
                  <del>
                    <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{$producto->precio_venta}}</span>
                  </del>
                  @endif
                </div><!-- /.product-price -->

                <div class="excerpt">
                  <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Envío GRATUITO en pedidos superiores a Gs 50.000.
                    </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>En Stock.</li>
                  </ul>
                </div>

                

                

               
              </div><!-- /.product-meta -->
            </div>
          </div>
          <!-- product-tab-description -->
          <div class="product-description-tabs">
            <ul class="nav">
              <li class="active"><a data-toggle="tab" href="#tab_description">Descripcion</a></li>
              <li><a data-toggle="tab" href="#tab_information">Detalle producto</a></li>
            </ul>
            <div class="tab-content">
              <div id="tab_description" class="tab-pane fade show active">
                {!!$producto->descripcion!!}
              </div>
              <div id="tab_information" class="tab-pane fade tab_information">
                {!! $producto->detalle_producto !!}
                
              </div>
            </div>
          </div>
          <!--/product-tab-description -->
        </div>
      </div>
    </div>
  </div>
  <!-- =====================================
      ==== End single-product -->
</div>

@endsection

