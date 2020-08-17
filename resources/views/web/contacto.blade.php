@extends('layouts.web')

@section('content')

<div class="main-content mt-4">
  <!-- Start contact ====
      ======================================= -->
  <div class="page-contact">
    <!-- container -->
    <div class="container">

      <div class="contact-content">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28852.31762082985!2d-57.56042018566031!3d-25.319664622595003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945daed800cbcd4f%3A0x27dda420c381b2b8!2sFernando%20Zona%20Nte%2C%20Fernando%20de%20la%20Mora!5e0!3m2!1ses!2spy!4v1595508363766!5m2!1ses!2spy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="contact_info">
          <div class="contact-item">
            <h3 class="contact_heading">
              Informacion de contacto.
            </h3>
            <div class="contact_description">
              Contactos para realizar pedidos o sugerencias.
            </div>
            <div class="contact__language">
              <img src="assets/images/contact/contact_icon1.jpg" alt="">
              <div class="contact_info__language">
                <div class="text-uppercase"><i class="fa fa-pencil-square" aria-hidden="true"></i>Direccion del local o cobertura del delivery</div>
                <div><i class="fa fa-phone-square" aria-hidden="true"></i>0981 123-456 (021) 123-456</div>
                <div class="text-uppercase"><i class="fa fa-envelope-square"
                    aria-hidden="true"></i>info@example.com</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_form">
        <h3 class="contact_heading text-center pt-50 pb-30">
          Contactenos
        </h3>

        <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
          <div class="row">
            <div class="form-group col-md-4">
              <input type="text" name="author" class="form-control" placeholder="Nombre" id="author" value=""
                aria-required="true">
            </div>
            <div class="form-group col-md-4">
              <input type="text" name="email" class="form-control" placeholder="Email" id="email" value=""
                aria-required="true">
            </div>
            <div class="form-group col-md-4">
              <input type="text" name="phone" class="form-control" placeholder="Telefono" id="phone" value=""
                aria-required="true">
            </div>
          </div>

          <div class="form-group">
            <textarea rows="8" id="comment" class="form-control" placeholder="Mensaje" name="comment"
              aria-required="true"></textarea>
          </div>
          <div class="form-submit text-center">
            <input name="submit" type="submit" id="submit" class="btn btn-primary" value="Enviar">
            <input type="hidden" name="comment_post_ID" value="" id="comment_post_ID">
            <input type="hidden" name="comment_parent" id="comment_parent" value="">
          </div>
        </form>
      </div>

    </div>
    <!-- /container -->
  </div>
  <!-- End contact ====
      ======================================= -->
</div>
    
@endsection