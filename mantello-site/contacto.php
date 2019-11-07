<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contacto</title>
</head>

<body>
<!--______________________________HEADER-->
<?php
require_once("header.php");
?>
<!--______________________________ FIN HEADER-->

<div class="container">
	<div class="row">

    <div class="container mt-5">


  <!--Section: Content-->
  <section class="dark-grey-text mb-5">

    <style>
      .map-container-section {
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
      }
      .map-container-section iframe {
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
      }
    </style>

    <!-- Section heading -->
    <h3 class="font-weight-bold text-center mb-4">Contáctenos</h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5"><strong>¿Tenés alguna consulta?</strong> Comunicate ahora y nuestros operadores te ayudarán. <em>0261 493-2884</em></p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

        <!-- Form with header -->
        <div class="card">
          <div class="card-body">
            <!-- Header -->
            <div class="form-header blue accent-1">
              <h3 class="mt-2"><i class="fas fa-envelope"></i> Escríbanos:</h3>
            </div>
            <p class="dark-grey-text">Escríbanos y le responderemos a la brevedad.</p>
            <!-- Body -->
            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form-name" class="form-control">
              <label for="form-name">Su Nombre</label>
            </div>
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="text" id="form-email" class="form-control">
              <label for="form-email">Su email</label>
            </div>
            <div class="md-form">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form-Subject" class="form-control">
              <label for="form-Subject">Asunto</label>
            </div>
            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
              <label for="form-text">Enviar Mensaje</label>
            </div>
            <div class="text-center">
              <button class="btn btn-light-blue">Enviar</button>
            </div>
          </div>
        </div>
        <!-- Form with header -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7">

        <!--Google map-->
        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
          <iframe src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;key=AIzaSyC9HkFFhx0u6K1ngKlSZiSyPWdEXLH6EBs" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Buttons-->
        <div class="row text-center">
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-map-marker-alt"></i>
            </a>
            <p>Francisco Gabrielli 3885, Maipú</p>
            <p class="mb-md-0">Mendoza</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-phone"></i>
            </a>
            <p> 0261 4932891/84</p>
            <p class="mb-md-0">Lunes a Viernes de 8:30 a 12:30 y de 16 a 20hs. Sábados de 9 a 13hs.</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-envelope"></i>
            </a>
            <p>mantelloneumaticos@gmail.com</p>
            <p class="mb-0">mantelloneumaticos@gmail.com</p>
          </div>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>



	</div>
</div>


  <!--______________________________FOOTER-->
  <?php
  require_once("footer.php");
  ?>
  <!--______________________________ FIN FOOTER-->

</body>

</html>
