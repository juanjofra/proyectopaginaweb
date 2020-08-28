@extends('layouts.web')

@section('content')
@php
$configuracion = DB::table('configuracions')->where('id',  1)->first();
@endphp

        <div class="main-content  mt-3">
          <!-- =====================================
              ====Start archive-product -->
          <div class="archive-product">
            <!-- Container -->
            <div class="container">
              <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-8">
                  
                  @include('web.listado-productos')
    
                <div class="col-lg-3 col-md-4">
                  <aside class="sidebar product-filter">
                    <!-- Categories -->
                    <section class="widget widget-categories-cat">
                      <h3 class="widget-title widget-title__large">Categorias</h3>
                      <div class="widget-content">
                        <ul class="list-categories list-widget">
                          <li>
                          <a  class="active" href="{{route('web.productos')}}">Todos</a>
                          </li>
                          @foreach ($categorias as $categoria)
                          
                          <li>
                          <a class="#" href="{{route('web.categoria-productos', ['categoria' => $categoria->id])}}">{{$categoria->nombre}}</a>
                          </li>
                          
                          @endforeach
                        </ul>
                      </div>
                    </section>
                  </aside>
                </div>
              </div>
            </div>
          </div>
          <!-- =====================================
              ====End archive-product -->
        </div>

@endsection