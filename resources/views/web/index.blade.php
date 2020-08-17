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
            ==== Start Featured Products  -->
        <section class="products">
          <div class="container">
            <div class="heading text-center">
              <h2 class="heading__title">Productos Destacados</h2>
            </div>
    
            <ul class="columns columns-6">
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
                        <del>
                          <span class="amout">Gs 85.000</span>
                        </del>
                      </div>
                      <a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket"
                        aria-hidden="true"></i></a>
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
                        <del>
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
                        <del>
                          <span class="amout">Gs 85.000</span>
                        </del>
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
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
                    <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                    <h4 class="product-title">
                      <a href="product_single.html" title="">Producto X</a>
                    </h4>
                    <div class="product-form-cart">
                      <div class="product-price">
                        <ins>
                          <span class="amout">Gs 60.000</span>
                        </ins>
                      </div>
                      <a href="product_single.html" class="add_to_cart_button"><i class="fa fa-shopping-basket"
                        aria-hidden="true"></i></a>
                  </div>
                </div>
              </li>
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
              <div class="col-lg-4 col-md-12">
                <div class="heading style_v2">
                  <h2 class="heading__title">Categoria 1</h2>
                </div>
                <div class="product-list product-block-list-carousel">
                  <div class="owl-carousel owl-theme" data-pagination="true" data-nav="true" data-items="1" data-large="1"
                    data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="heading style_v2">
                  <h2 class="heading__title">Categoria 2</h2>
                </div>
                <div class="product-list product-block-list-carousel">
                  <div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1"
                    data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="heading style_v2">
                  <h2 class="heading__title">Categoria 3</h2>
                </div>
                <div class="product-list product-block-list-carousel">
                  <div class="owl-carousel owl-theme" data-pagination="false" data-nav="true" data-items="1" data-large="1"
                    data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="false">
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">PC</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Xtox One1</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion producto.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                              <del>
                                <span class="amout">Gs 200.000</span>
                              </del>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-list__item">
                        <div class="inner">
                          <a class="product-thumbnail" href="product_single.html">
                            <img src="https://via.placeholder.com/100x127" alt="">
                          </a>
                          <div class="product-content">
                            <span class="posted_in"><a href="#" rel="tag">Play Station4</a></span>
                            <h4 class="product-title">
                              <a href="product_single.html">Descripcion.</a>
                            </h4>
                            <div class="product-price">
                              <ins>
                                <span class="amout">Gs 150.000</span>
                              </ins>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- =====================================
            ==== End products list carousel   -->
    
        <!-- =====================================
            ==== Start testimonials  -->
        <section class="testimonials section-bg clearfix"
          style="background-image:url(https://via.placeholder.com/1230x565)">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-12"></div>
              <div class="col-lg-7 col-md-12 testimonials_content">
                <div class="owl-carousel owl-theme" data-pagination="true" data-nav="false" data-items="1" data-large="1"
                  data-medium="1" data-smallmedium="1" data-extrasmall="1" data-verysmall="1" data-autoplay="true">
                  <div class="item">
                    <div class="testimonial_item">
                      <cite>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsum, enim dignissimos quis dolorem impedit. Reprehenderit veniam ea, culpa quidem officia nisi inventore officiis quaerat non exercitationem, numquam earum ex.
                      </cite>
                      <h3 class="testimonials__name">Descripcion</h3>
                      <div class="testimonials__job">Descripcion</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimonial_item">
                      <cite>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero accusantium quo nesciunt distinctio nam possimus eaque deleniti tempora eos accusamus! Nesciunt odit eveniet aperiam! Aspernatur ratione distinctio voluptatibus maiores molestias.
                      </cite>
                      <h3 class="testimonials__name">Descripcion</h3>
                      <div class="testimonials__job">Descripcion</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- =====================================
            ==== End testimonials  -->
    
@endsection