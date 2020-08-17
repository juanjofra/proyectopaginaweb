@extends('layouts.web')

@section('content')
    
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
            <div class="col-lg-6 col-md-12">
              <div class="main_image_product style_v2">
                <div class="slider slider-for">
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
            <div class="col-lg-6 col-md-12">
              <div class="product-caption clearfix">
                <p>Detalle corto del producto:</p>


                <div class="product-price">
                  <ins>
                    <span class="amout">Gs150.000</span>
                  </ins>
                  <del>
                    <span class="amout">Gs.250.000</span>
                  </del>
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
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum similique assumenda voluptate nam non! Accusamus dolor aspernatur fugit atque. Nesciunt neque atque vitae ab earum quisquam maxime itaque quasi consequatur.
                <div class="tab_description_info pt-20">
                  <div class="pb-10">Descripcion</div>
                  <i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum accusamus deleniti, aspernatur soluta obcaecati possimus eaque aperiam cupiditate perferendis? Voluptates quaerat repellat impedit laborum recusandae suscipit, ea pariatur ipsa et!:
                  </i>
                </div>
                <div class="tab_description_info pt-20">
                  <div class="pb-10">Beneficio</div>
                  <i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quas quae sunt amet tempora officiis libero facilis fugit odio laboriosam saepe magnam repudiandae pariatur temporibus rerum, minus quis veritatis? Facere!
                  </i>
                </div>
              </div>
              <div id="tab_information" class="tab-pane fade">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur soluta odit a doloremque explicabo libero maiores, architecto ut! Necessitatibus, perspiciatis doloribus temporibus libero molestias commodi quo alias sint est ipsa.
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