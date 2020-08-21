@extends('layouts.web')

@section('content')
    
		<!-- =====================================
	    	==== Start slider -->
        <div class="slider slider_slick stick-dots">
          <!--  slide1 -->
          <div class="slide">
            <div class="slide__img section-bg" style="background-image:url(https://via.placeholder.com/1230x670/)">
              <img src="" alt="" data-lazy="https://via.placeholder.com/1230x670/" class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content">
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">Descripicon1</div>
              <div class="slide__content--headings">
                <h2 class="animated bg-text" data-animation-in="fadeInUp">Titulo1</h2>
              </div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">Nombre1</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
          </div>
          <!--  slide2 -->
          <div class="slide">
            <div class="slide__img section-bg"
              style="background-image:url(https://via.placeholder.com/1230x670/222222/ffffff)">
              <img src="" alt="" data-lazy="https://via.placeholder.com/1230x670/" class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content">
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">Descripicon2</div>
              <div class="slide__content--headings">
                <h2 class="animated bg-text" data-animation-in="fadeInUp">Titulo2</h2>
              </div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">Nombre2</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
          </div>
          <!--  slide3 -->
          <div class="slide">
            <div class="slide__img section-bg" style="background-image:url(https://via.placeholder.com/1230x670/)">
              <img src="" alt="" data-lazy="https://via.placeholder.com/1230x670/" class="full-image animated"
                data-animation-in="zoomInImage" />
            </div>
            <div class="slide__content">
              <div class="slide__content--subheadings bg-text animated" data-animation-in="fadeInUp">Descripicon3</div>
              <div class="slide__content--headings">
                <h2 class="animated bg-text" data-animation-in="fadeInUp">Titulo3</h2>
              </div>
              <div class="slide__content--headings">
                <h3 class="animated bg-text" data-animation-in="fadeInUp">Nombre3</h3>
              </div>
              <div class="shopnow animated" data-animation-in="fadeInUp">
                <a href="product_grid.html" class="mt-40 btn btn-features btn-primary">VER</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End slider ====
            ======================================= -->
    
        <!-- =====================================
            ==== Start Featured Products Destacados -->
        <section class="products">
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
                            <span class="amout">Gs {{$productoDestacado->precio_venta}}</span>
                          </ins>    
                        @endif
                        @if ($productoDestacado->oferta > 0)
                        <ins>
                          <span class="amout">Gs {{$productoDestacado->oferta}}</span>
                        </ins>
                        <del>
                          <span class="amout">Gs {{$productoDestacado->precio_venta}}</span>
                        </del>
                        @endif
                      </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </section>
        <!-- =====================================
            ==== End Featured Products -->
    
        <!-- =====================================
            ==== Start section-banner  -->
        <section class="section-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="banner-image">
                  <div class="banner-image-inner">
                    <img src="https://via.placeholder.com/570x250" alt="">
                  </div>
                  <div class="banner-meta text-white">
                    <h3 class="banner-meta__heading text-uppercase text-white">Oferta 50%</h3>
                    <p class="banner-meta__description d-none d-lg-block text-white">Descripcion</p>
                    <a href="product_grid.html" class="btn btn-primary text-uppercase">Ver</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="banner-image">
                  <div class="banner-image-inner">
                    <img src="https://via.placeholder.com/570x250" alt="">
                  </div>
                  <div class="banner-meta text-white">
                    <h3 class="banner-meta__heading text-uppercase text-white">DESTACADO</h3>
                    <h4 class="banner-meta__sale text-uppercase d-none d-lg-block text-white">35% off</h4>
                    <a href="product_grid.html" class="btn btn-primary text-uppercase">Ver</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- =====================================
            ==== End section-banner -->
   
        <!-- =====================================
            ==== Start Best seller  -->
        <section class="products">
          <div class="container">
            <div class="heading text-center">
              <h2 class="heading__title">Nuevos / Mas vendidas</h2>
            </div>
    
            <ul class="columns columns-4">
              <li class="item-product">
                <div class="product-block">
                  <div class="product-image ">
                    <div class="product-thumbnail">
                      <a href="product_single.html" title="">
                        <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="product-caption">
                    <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto x</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 150.000</span>
                        </ins>
                        <del>
                          <span class="amout">Gs 220.000</span>
                        </del>
                      </div>
                      <a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket"
                          aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item-product">
                <div class="product-block">
                  <div class="product-image ">
                    <div class="product-thumbnail">
                      <a href="product_single.html" title="">
                        <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="product-caption">
                    <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto x</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 150.000</span>
                        </ins>
                        <del>
                          <span class="amout">Gs 220.000</span>
                        </del>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item-product">
                <div class="product-block">
                  <div class="product-image ">
                    <div class="product-thumbnail">
                      <a href="product_single.html" title="">
                        <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="product-caption">
                    <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto x</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 150.000</span>
                        </ins>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item-product">
                <div class="product-block">
                  <div class="product-image ">
                    <div class="product-thumbnail">
                      <a href="product_single.html" title="">
                        <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="product-caption">
                    <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto x</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 150.000</span>
                        </ins>
                      </div>
                      <a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket"
                          aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!-- =====================================
            ==== End Best seller -->
    
        <!-- =====================================
            ==== Start products list carousel   -->
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
                            <img src='{{"/imagenes/producto/$producto->imagen"}}'' alt="">
                          </a>
                          <div class="product-content">
                            <h4 class="product-title">
                              <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}">{{$producto->nombre}}.</a>
                            </h4>
                            <div class="product-price">
                              @if (($producto->precio_venta) > 0 && ($producto->oferta) == 0)
                              <ins>
                                <span class="amout">Gs {{$producto->precio_venta}}</span>
                              </ins>    
                              @endif
                              @if ($producto->oferta > 0)
                              <ins>
                                <span class="amout">Gs {{$producto->oferta}}</span>
                              </ins>
                              <del>
                                <span class="amout">Gs {{$producto->precio_venta}}</span>
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