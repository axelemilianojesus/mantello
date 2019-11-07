<!DOCTYPE html>
<html lang="en">

<head>
  <title>Producto</title>
</head>

<body>
  <!--______________________________HEADER-->
  <?php require_once("header.php"); ?>
  <!--______________________________ FIN HEADER-->

  <!--______________________________ SLIDER-->
  <div class="container-fluid">
    <div class="row">

    <div class="bd-example w-100">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider/banner-lubricentro.jpg" width="100%"  alt="Mantello">
          <div class="carousel-caption d-none d-md-block">
            <h2>PRODUCTO</h2>
            <p>Producto de Mantello Neumaticos Mendoza</p>
          </div>
        </div>

      </div>

    </div>
  </div>
    </div>
  </div>
    <!--______________________________ FIN SLIDER-->


    <div class="divider">
      <p class="text-red">PRODUCTO</p>
    </div>

    <!--______________________________HEADER-->
    <?php include_once("breadcumbs.php"); ?>
    <!--______________________________ FIN HEADER-->


<!--_____________________________ DESCRIPCION PRODUCTO-->
<div class="container">
<div class="row">

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1">Categoria 2</span>
              </a>
              <a href="">
                <span class="badge blue mr-1">Nuevo</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Mejor vendido</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
              <span>$100</span>
            </p>

            <p class="lead font-weight-bold">Descripcion</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
              sint voluptatibus!
              Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Agregar al Carrito
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Información Adicional</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>

</div>
</div>
<!--_____________________________ DESCRIPCION PRODUCTO-->









<!--______________________________FOOTER-->
<?php require_once("footer.php");  ?>
<!--______________________________ FIN FOOTER-->

</body>

</html>
