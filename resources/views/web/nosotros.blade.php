@extends('layouts.web')

@section('content')

<div class="main-content mt-4">
  <!-- =====================================
      ==== Start page-about -->
  <div class="page-about">
    <!-- section-image -->
    <div class="section-counter clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <h2 class="heading__title">
              NOSOTROS
            </h2>
            <div class="heading__description pt-40 pb-60">{!! $configuracion->nosotros !!}
            </div>

            <div class="row">
              <div class="col-md-6 counter_box">
                
              </div>
              <div class="col-md-6 counter_box">
                
              </div>
              <div class="col-md-6 counter_box">
              
              </div>
              <div class="col-md-6 counter_box">
              
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 d-none d-lg-block">
            <img src="https://via.placeholder.com/550x770" alt="">
          </div>
        </div>
      </div>
    </div>
    <!--/section-image -->

    <!-- section-about-info -->
    {{-- <div class="section-about-info">
      
    </div> --}}
    <!-- /section-about-info-->

  
  </div>

  <!-- End page-about ====
      ======================================= -->
</div>
    
@endsection