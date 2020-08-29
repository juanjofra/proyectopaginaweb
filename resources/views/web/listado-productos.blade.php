  
  <!-- product-shorting -->
  <div class="product-shorting d-flex align-items-center justify-content-between">
                   
    <div class="grid-list-view">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="#grid-view" role="tab" data-toggle="tab">
            <i class="fa fa-th"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#list-view" role="tab" data-toggle="tab">
            <i class="fa fa-list-ul"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--/product-shorting -->

  <!-- tab-content -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
      <div class="product products-grid">
        <div class="row row-products">
          @foreach ($productos as $producto)
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product-block">
              <div class="product-image ">
                <div class="product-thumbnail">
                  <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}" title="">
                  <img class="product-detail-featured-image" src='{{"/imagenes/producto/$producto->imagen"}}' alt="">
                  </a>
                </div>
              </div>
              <div class="product-caption">
              <span class="posted_in"><a href="{{route('web.categoria-productos', ['categoria' => $producto->categoria->id])}}" rel="tag">{{$producto->categoria->nombre}}</a></span>
                <h4 class="product-title">
                <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}" title="">{{$producto->nombre}}</a>
                </h4>
                <div class="product-form-cart">
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
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="list-view">
      <div class="product products-list">
        <div class="row row-products">
          @foreach ($productos as $producto)
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}" title="">
                      <img class="product-detail-featured-image" src='{{"/imagenes/producto/$producto->imagen"}}' alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="{{route('web.categoria-productos', ['categoria' => $producto->categoria->id])}}" rel="tag">{{$producto->categoria->nombre}}</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="{{route('web.detalle-producto', ['producto' => $producto->id])}}" title="">{{$producto->nombre}}</a>
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
                  <div class="excerpt">
                    {{$producto->descripcion_corta}}
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>    
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- /tab-content -->

  <!-- pagination -->
  <nav class="pagination clearfix">
    <ul class="page-numbers">
      {{$productos->links()}}
    </ul>
  </nav>
  <!-- /pagination -->
</div>