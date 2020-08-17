  
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
                  <img class="product-featured-image" src='{{"/imagenes/producto/$producto->imagen"}}' alt="">
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
                    <ins>
                      <span class="amout">Gs 50.000</span>
                    </ins>
                    <del>
                      <span class="amout">Gs 150.000</span>
                    </del>
                  </div>
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

          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                      <del>
                        <span class="amout">Gs 220.000</span>
                      </del>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                    <a href="cart.html" class="btn btn-default add_to_cart_button"><i
                        class="fa fa-shopping-basket" aria-hidden="true"></i>Agregar al carrito</a>
                    <div class="product-actions">
                      <a href="#" data-id="" class="btn wishlist product-quick-whistlist"
                        title="Agregar a favorito">
                        <i class="fa fa-heart-o"></i>
                      </a>
                    </div>
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
          <div class="col-md-12 product-block-list">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <figure class="product-image">
                  <div class="product-thumbnail">
                    <a href="#" title="">
                      <img class="product-featured-image" src="https://via.placeholder.com/470x580" alt="">
                    </a>
                  </div>
                </figure><!-- /.product-image -->
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="product-caption">
                  <span class="posted_in"><a href="#" rel="tag">PSP</a></span>
                  <div class="product-meta">
                    <h4 class="product-name">
                      <a href="product_single_no_sidebar.html" title="">Producto</a>
                    </h4>
                    <div class="product-price">
                      <ins>
                        <span class="amout">Gs 90.000</span>
                      </ins>
                    </div>
                  </div>
                  <div class="excerpt">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia minima laudantium quaerat perspiciatis ad iste inventore culpa dolorem earum cupiditate magnam magni rerum veniam corporis, nisi quidem at repellendus voluptas!
                  </div>
                  <div class="product-footer">
                  </div>
                </div><!-- /.product-meta -->
              </div>
            </div>
          </div>
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