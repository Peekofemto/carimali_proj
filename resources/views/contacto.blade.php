@extends('layouts.base')
@section('contenido')

<section class="my-5">
              
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contáctanos</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
      eum porro a pariatur veniam.</p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-4">
  
        <!-- Form with header -->
        <div class="card">
          <div class="card-body">
            <!-- Header -->
            <div class="form-header blue accent-1">
              <h3 id="Escribenos" class="mt-2"><i class="fas fa-envelope"></i> Escríbenos</h3>
            </div>
            <p class="dark-grey-text">Nos pondremos en contacto la más rápido posible</p>
            <!-- Body -->
            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form-name" class="form-control">
              <label for="form-name">Tu nombre</label>
            </div>
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="text" id="form-email" class="form-control">
              <label for="form-email">Tu correo</label>
            </div>
            <div class="md-form">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form-Subject" class="form-control">
              <label for="form-Subject">Mensaje</label>
            </div>
            <div class="text-center">
              <button style="background-color: #006DB2" class="btn btn-blue">Enviar</button>
            </div>
          </div>
        </div>
        <!-- Form with header -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-7">
  
        <!--Google map-->
        <div class="span8">
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Carimali%2C%20Navojoa%2C%20Sonora+(Carimali)&amp;ie=UTF8&amp;t=&amp;z=15&ie=UTF8&iwloc=&output=embed"></iframe>
      </div>
        <!-- Buttons-->
        <div class="row text-center">
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-map-marker-alt"></i>
            </a>
            <p>General Ignacio Pesqueira Norte 606, Reforma, 65800 Navojoa, Son.</p>
            <p class="mb-md-0">México</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-phone"></i>
            </a>
            <p>+ 01 234 567 89</p>
            <p class="mb-md-0">Lunes a viernes, 8:00-22:00</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-envelope"></i>
            </a>
            <p>infocarimali@gmail.com</p>
            <p class="mb-0">carimalipizza@gmail.com</p>
          </div>
        </div>
  
      </div>
      <!-- Grid column -->
  
    </div>
    <!-- Grid row -->
  
</section>
@endsection