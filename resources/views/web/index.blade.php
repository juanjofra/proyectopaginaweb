@extends('layouts.web')

@section('content')
@php
$configuracion = DB::table('configuracions')->where('id',  1)->first();
@endphp

		<!-- =====================================
        ==== Start slider -->
        <!--  Si existe baner que mostrar -->
        @if ($configuracion->banner_1 || $configuracion->banner_2 || $configuracion->banner_3)
        <div class="slider slider_slick stick-dots">
          <!--  Banner 1 -->
          @if ($configuracion->banner_1)
          <div class="slide">
            <div class="slide__img section-bg"  style='background-image:url({{"/imagenes/slider/$configuracion->banner_1"}})'>
              <img src='' alt="" data-lazy='{{"/imagenes/slider/$configuracion->banner_1"}}' class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <!-- Si existe detalle del banner se muestra -->
            @if ($configuracion->producto_select_banner_1)
              @php
                $productoseleccionado1 = DB::table('productos')->where('id', $configuracion->producto_select_banner_1 )->first();
              @endphp
            <div class="slide__content">
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">{{$productoseleccionado1->descripcion_corta}}</div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">{{$productoseleccionado1->nombre}}</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="{{route('web.detalle-producto', ['producto' => $productoseleccionado1->id])}}" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
            @endif
          </div>
          @endif

          <!--  slide2 -->
          @if ($configuracion->banner_2)
          <div class="slide">
            <div class="slide__img section-bg"  style='background-image:url({{"/imagenes/slider/$configuracion->banner_2"}})'>
              <img src='' alt="" data-lazy='{{"/imagenes/slider/$configuracion->banner_2"}}' class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <!-- Si existe detalle del banner se muestra -->
            @if ($configuracion->producto_select_banner_2)
              @php
                $productoseleccionado2 = DB::table('productos')->where('id', $configuracion->producto_select_banner_2 )->first();
              @endphp  
            <div class="slide__content">
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">{{$productoseleccionado2->descripcion_corta}}</div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">{{$productoseleccionado2->nombre}}</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="{{route('web.detalle-producto', ['producto' => $productoseleccionado2->id])}}" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
            @endif
          </div>
          @endif

          @if ($configuracion->banner_3)
          <!--  slide3 -->
          <div class="slide">
            <div class="slide__img section-bg"  style='background-image:url({{"/imagenes/slider/$configuracion->banner_3"}})'>
              <img src='' alt="" data-lazy='{{"/imagenes/slider/$configuracion->banner_3"}}' class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <!-- Si existe detalle del banner se muestra -->
            @if ($configuracion->producto_select_banner_3)
              @php
                $productoseleccionado3 = DB::table('productos')->where('id', $configuracion->producto_select_banner_3 )->first();
              @endphp
              
            <div class="slide__content">
              
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">{{$productoseleccionado3->descripcion_corta}}</div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">{{$productoseleccionado3->nombre}}</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="{{route('web.detalle-producto', ['producto' => $productoseleccionado3->id])}}" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
            @endif
          </div>        
          @endif
        </div>
        @endif
        <!-- End slider ====
            ======================================= -->
    
        <!-- =====================================
            ==== Start Products Destacados -->
        <section class="products">
          @if (count($productosDestacados) > 5)
            <div class="container">
              <div class="heading text-center">
                <h2 class="heading__title">Productos Destacados</h2>
              </div>
      
              <ul class="columns columns-6">
                @foreach ($productosDestacados as $productoDestacado)
                <li class="item-product">
                  <div class="product-block">
                    <div class="product-image ">
                      <div class="product-thumbnail">
                        <a href="{{route('web.detalle-producto', ['producto' => $productoDestacado->id])}}" title="">
                          <img class="product-featured-image" src='{{"imagenes/producto/$productoDestacado->imagen"}}' alt="">
                        </a>
                      </div>
                    </div>
                    <div class="product-caption">
                      <span class="posted_in"><a href="{{route('web.categoria-productos', ['categoria' => $productoDestacado->categoria->id])}}" rel="tag">{{$productoDestacado->categoria->nombre}}</a></span>
                      <h4 class="product-title">
                        <a href="{{route('web.detalle-producto', ['producto' => $productoDestacado->id])}}" title="">{{$productoDestacado->nombre}}</a>
                      </h4>
                      <div class="product-form-cart">
                        <div class="product-price">
                          @if (($productoDestacado->precio_venta) > 0 && ($productoDestacado->oferta) == 0)
                          <ins>
                            <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productoDestacado->precio_venta, 0, ',', '.') }}</span>
                          </ins>    
                          @endif
                          @if ($productoDestacado->oferta > 0)
                          <ins>
                            <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productoDestacado->oferta, 0, ',', '.') }}</span>
                          </ins>
                          <del>
                            <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productoDestacado->precio_venta, 0, ',', '.') }}</span>
                          </del>
                          @endif
                        </div><!-- /.product-price -->
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div> 
          @endif
        </section>
        <!-- =====================================
            ==== End Products Destacados -->
    
        <!-- =====================================
            ==== Start section-banner descuentos  -->
            
        <section class="section-banner">
          @if($configuracion->oferta_banner_1 && $configuracion->oferta_banner_2)
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="banner-image">
                  <div class="banner-image-inner">
                    <img src='{{"imagenes/slider/$configuracion->oferta_banner_1"}}' alt="">
                  </div>
                  @if($configuracion->producto_select_oferta_banner_1)
                  <div class="banner-meta text-white">
                    <h3 class="banner-meta__heading text-uppercase text-white">Oferta 50%</h3>
                    <a href="{{route('web.detalle-producto', ['producto' => $configuracion->producto_select_oferta_banner_1])}}" class="btn btn-primary text-uppercase">Ver</a>
                  </div>  
                  @endif
                </div>
              </div>
              <div class="col-md-6">
                <div class="banner-image">
                  <div class="banner-image-inner">
                    <img src='{{"imagenes/slider/$configuracion->oferta_banner_2"}}' alt="">
                  </div>
                  @if($configuracion->producto_select_oferta_banner_2)
                  <div class="banner-meta text-white">
                    <h3 class="banner-meta__heading text-uppercase text-white">DESTACADO</h3>
                    <h4 class="banner-meta__sale text-uppercase d-none d-lg-block text-white">35% off</h4>
                    <a href="{{route('web.detalle-producto', ['producto' => $configuracion->producto_select_oferta_banner_2])}}" class="btn btn-primary text-uppercase">Ver</a>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @endif
        </section>
        <!-- =====================================
            ==== End section-banner -->
   
        <!-- =====================================
            ==== Start Productos Nuevos  -->
        <section class="products">
          <div class="container">
            <div class="heading text-center">
              <h2 class="heading__title">Nuevos</h2>
            </div>
            <ul class="columns columns-4">
            @foreach ($productosNuevos as $productonuevo)
              <li class="item-product">
                <div class="product-block">
                  <div class="product-image ">
                    <div class="product-thumbnail">
                      <a href="{{route('web.detalle-producto', ['producto' => $productonuevo->id])}}" title="">
                        <img class="product-featured-image_productos_nuevos" src="{{"/imagenes/producto/$productonuevo->imagen"}}" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="product-caption">
                    <span class="posted_in"><a href="{{route('web.categoria-productos', ['categoria' => $productonuevo->categoria->id])}}" rel="tag">{{$productonuevo->categoria->nombre}}</a></span>
                    <h4 class="product-title">
                      <a href="{{route('web.detalle-producto', ['producto' => $productonuevo->id])}}" title="">{{$productonuevo->nombre}}</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        @if (($productonuevo->precio_venta) > 0 && ($productonuevo->oferta) == 0)
                        <ins>
                          <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productonuevo->precio_venta, 0, ',', '.') }}</span>
                        </ins>    
                        @endif
                        @if ($productonuevo->oferta > 0)
                        <ins>
                          <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productonuevo->oferta, 0, ',', '.') }}</span>
                        </ins>
                        <del>
                          <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($productonuevo->precio_venta, 0, ',', '.') }}</span>
                        </del>
                        @endif
                      </div><!-- /.product-price -->
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </section>
        <!-- =====================================
            ==== End Best seller -->
    
        <!-- =====================================
            ==== Start lista de categorias destacados   -->
        <section class="products products_list">
          <div class="container">
            <div class="row">
              @foreach ($categoriaDescatados as $categoriadestacado)
              <div class="col-lg-4 col-md-12">
                <div class="heading style_v2">
                  <h2 class="heading__title">{{$categoriadestacado->nombre}}</h2>
                </div>
                <div class="product-list product-block-list-carousel">
                  <div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1"
                    data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
                    <div class="item">
                      @php
                          $productos = DB::table('productos')->where('categoria_id', $categoriadestacado->id)
                          ->inRandomOrder()->limit(4)
                          ->get();
                      @endphp
                      @foreach ($productos as $producto)
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="{{route('web.detalle-producto', ['producto' => $producto->id])}}">
                            <img src='{{"/imagenes/producto/$producto->imagen"}}' alt="">
                          </a>
                          <div class="product-content">
                            <h4 class="product-title">
                              <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}">{{$producto->nombre}}</a>
                            </h4>
                            <div class="product-price">
                              @if (($producto->precio_venta) > 0 && ($producto->oferta) == 0)
                              <ins>
                                <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($producto->precio_venta, 0, ',', '.') }}</span>
                              </ins>    
                              @endif
                              @if ($producto->oferta > 0)
                              <ins>
                                <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($producto->oferta, 0, ',', '.') }}</span>
                              </ins>
                              <del>
                                <span class="amout">@if($configuracion->tipo_moneda === 'Guaranies')Gs @else $ @endif {{ number_format($producto->precio_venta, 0, ',', '.') }}</span>
                              </del>
                              @endif
                            </div><!-- /.product-price -->
                          </div>
                        </div>
                      </div>
                      @endforeach
                     
                    </div>
                  </div>
                </div>
              </div>    
              @endforeach
            </div>
          </div>
        </section>
        <!-- =====================================
            ==== End products list carousel   -->
    
@endsection