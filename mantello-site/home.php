<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
</head>

<body>
<!--______________________________HEADER-->
<?php
require_once("header.php");
?>
<!--______________________________ FIN HEADER-->

<!--______________________________ SLIDER-->
  <div class="container-fluid">
  	<div class="row">

    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider/banner.jpg" width="100%" class="d-block w-100" alt="Mantello">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider/banner-tarjetas.jpg" width="100%" class="d-block w-100" alt="Mantello">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider/banner-alineacion.jpg" width="100%" class="d-block w-100" alt="Mantello">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  	</div>
  </div>
  <!--______________________________ FIN SLIDER-->


  <!--______________________________ BUSCADOR-->
  <div class="visible-sm d-block d-sm-none">
    <div class="text-center">
      <p class="bscpalabr">BUSCADOR</p>
    </div>
  </div>



  <div class="container my-5">
    <div class="col-12 mx-auto">
        <div class="col-xl-12 col-md-12 col-12">
          <div class="col-xl-2 col-lg-2 d-none d-md-block d-lg-none d-none d-lg-block d-xl-none"></div>
          <div class="col-xl-2 col-lg-2 img-fluid d-none d-md-block d-lg-none d-none d-lg-block d-xl-none">
            <img src="img/buscar/ruedabusqueda.jpg" class="img-fluid">
          </div>
          <div class="col-lg-8 col-md-12 mx-auto">
            <div id="logo" class="text-center">
              <div class="row">
                <div class="w-100">
                  <p>BUSCÁ TU <span class="bold">CUBIERTA</span> <span class="red">ACÁ</span></p>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                  <div class="form-group">
                    <select name="diametro">
                      <option selected>205</option>
                      <option>165</option>
                      <option>175</option>
                      <option>185</option>
                      <option>190</option>
                      <option>195</option>
                      <option>205</option>
                      <option>215</option>
                      <option>240</option>
                      <option>245</option>
                      <option>250</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                  <div class="form-group">
                    <select name="rodado">
                      <option selected>55</option>
                      <option>35</option>
                      <option>40</option>
                      <option>45</option>
                      <option>50</option>
                      <option>55</option>
                      <option>60</option>
                      <option>65</option>
                    </select>

                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                  <div class="form-group ">
                    <select name="medida">
                      <option selected>16</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2 col-sm-12 col-xs-12">
                  <span class="input-group-btn">
                    <button class="btn btn-success height-equal" type="submit">
                      <i class="glyphicon glyphicon-search" aria-hidden="true"></i> <a href="neumaticos.html">Buscar</a>
                    </button>
                  </span>
                </div>

              </div>
            </div>
            <div class="mt-3 text-center">
              <p>BUSCADOR GENERAL</p>
            </div>
            <form role="form" id="form-buscar">
              <div class="form-group">
                <div class="input-group">
                  <input id="1" class="form-control " type="text" name="search" placeholder="205 / 55 R 16" required />
                  <span class="input-group-btn">
                    <button class="btn btn-success height-equal" type="submit">
                      <i class="glyphicon glyphicon-search" aria-hidden="true"></i><a href="resultbusc.html">Buscar</a>
                    </button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

  </div>

  <!--______________________________ SLIDER-->
    <div class="container-fluid">
    	<div class="row">


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider/banner-tarjetas.jpg" width="100%" class="d-block w-100" alt="Mantello">
        </div>
        <div class="carousel-item">
          <img src="img/slider/banner-tarjetas.jpg" width="100%" class="d-block w-100" alt="Mantello">
        </div>
        <div class="carousel-item">
          <img src="img/slider/banner-tarjetas.jpg" width="100%" class="d-block w-100" alt="Mantello">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    	</div>
    </div>
    <!--______________________________ FIN SLIDER-->

  <div class="divider">
    <p class="textoblanco1">PRODUCTOS<span class="estilorojo"> DESTACADOS</span></p>
  </div>


  <div class="container">
    <div class="row">
     <!-- PRODUCTO -->
      <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
          <div class="mx-md-2 mx-sm-0">
            <div class="panel-heading" data-toggle="modal" data-target="#exampleModal"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="panel-heading"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
                    </div>
                    <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                    <p>12 cuotas sin interés de $216.75</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of Modal -->

            <div class="card-body panel">
              <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
              <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
              <p>12 cuotas sin interés de $216.75</p>
            </div>

          <div class="btn-group w-100">
            <button type="button" class="btn btn-gray">CONSULTAR</button>
          </div>
          <div class="btn-group w-100">
            <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
          </div>
          </div>
      </div>


      <!-- PRODUCTO -->
       <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
           <div class="mx-md-2 mx-sm-0">
             <div class="panel-heading" data-toggle="modal" data-target="#exampleModal"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
             </div>
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <div class="panel-heading"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
                     </div>
                     <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                     <p>12 cuotas sin interés de $216.75</p>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                     <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
                   </div>
                 </div>
               </div>
             </div>
             <!-- end of Modal -->

             <div class="card-body panel">
               <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
               <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
               <p>12 cuotas sin interés de $216.75</p>
             </div>

           <div class="btn-group w-100">
             <button type="button" class="btn btn-gray">CONSULTAR</button>
           </div>
           <div class="btn-group w-100">
             <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
           </div>
           </div>
       </div>


       <!-- PRODUCTO -->
        <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
            <div class="mx-md-2 mx-sm-0">
              <div class="panel-heading" data-toggle="modal" data-target="#exampleModal"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="panel-heading"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
                      </div>
                      <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                      <p>12 cuotas sin interés de $216.75</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                      <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of Modal -->

              <div class="card-body panel">
                <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                <p>12 cuotas sin interés de $216.75</p>
              </div>

            <div class="btn-group w-100">
              <button type="button" class="btn btn-gray">CONSULTAR</button>
            </div>
            <div class="btn-group w-100">
              <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
            </div>
            </div>
        </div>


        <!-- PRODUCTO -->
         <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
             <div class="mx-md-2 mx-sm-0">
               <div class="panel-heading" data-toggle="modal" data-target="#exampleModal"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
               </div>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <div class="panel-heading"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
                       </div>
                       <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                       <p>12 cuotas sin interés de $216.75</p>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                       <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- end of Modal -->

               <div class="card-body panel">
                 <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                 <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
                 <p>12 cuotas sin interés de $216.75</p>
               </div>

             <div class="btn-group w-100">
               <button type="button" class="btn btn-gray">CONSULTAR</button>
             </div>
             <div class="btn-group w-100">
               <button type="button" class="btn btn-red"><a href="paso1.html">COMPRAR</a></button>
             </div>
             </div>
         </div>



    </div>
  </div>
<!-- SUCURSALES -->
  <div class="divider">
    <p class=""><span class="estilorojo">SUCURSALES</span></p>
  </div>

<!-- MAPA -->
 <div class="container-fluid">
    <div class="row">
      <div class="w-100">


        <!-- Start Carousel -->
        <div id="custom_carousel" class="carousel slide hidden-xsd-none d-sm-block" data-ride="carousel" data-interval="0">
          <div class="row">
            <div class="col-md-4 col-sm-4 bg-dark">
              <div class="">

                <ul class="nav navbar-nav navbar-left menumapa">
                  <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#">
                      <h4 class="bold uppercase">Maipu</h4>
                      <p>Gobernador Francisco José Gabrielli 3885
                        0261 493-2884</p>
                    </a></li>
                  <li data-target="#custom_carousel" data-slide-to="1" class="active"><a href="#">
                      <h4 class="bold uppercase">Guaymallén</h4>
                      <p>Av. Mitre 25
                        0261 431-3356</p>
                    </a></li>
                  <li data-target="#custom_carousel" data-slide-to="2" class="active"><a href="#">
                      <h4 class="bold uppercase">Godoy Cruz</h4>
                      <p>Av. San Martín 22
                        0261 435-0555</p>
                    </a></li>
                </ul>
              </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide col-sm-8 m-0 p-0 bg-dark" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="graph-content"> <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6424967008466!2d-68.80134568495413!3d-32.93404247858004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b18d186b04fa5f%3A0xc0503a757802fed!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1556776442627!5m2!1ses!2sar"
          width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
    <div class="carousel-item">
      <div class="graph">
        <div class="graph-content"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26794.88854131183!2d-68.84124456399141!3d-32.91505740277091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90a4f7d8b9bdc30!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1557180642962!5m2!1ses!2sar"
            width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="graph">
        <div class="graph-content"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53595.35798015863!2d-68.83799454272093!3d-32.90592968840463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b18d37abf1e8b7%3A0x8728e2f77464e2bc!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1558186773271!5m2!1ses!2sar"
            width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="divider">
    <p class="textoblanco1">NOVEDADES</p>
  </div>

  <div class="container" id="novedades">
    <div class="row">
    <!-- NOVEDAD-->
      <div class="col-lg-4 col-sm-12 content-nov bg-light my-2">
        <p class="nov-tittle">BRIDGESTONE</p>
        <div class="nov-img">
          <img src="img/autos/nisan.jpg" class="img-fluid">
        </div>
        <p class="estilorojo ">Bridgestone, proveedor de Nissan y Toyota</p>
        <p class="">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
        <div class="btn-group w-100">
          <button type="button" class="btn btn-gray">LEER MAS...</button>
        </div>
      </div>

      <!-- NOVEDAD-->
        <div class="col-lg-4 col-sm-12 content-nov bg-light my-2">
          <p class="nov-tittle">BRIDGESTONE</p>
          <div class="nov-img">
            <img src="img/autos/mercedez.jpg" class="img-fluid">
          </div>
          <p class="estilorojo ">Bridgestone, proveedor de Nissan y Toyota</p>
          <p class="">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
          <div class="btn-group w-100">
            <button type="button" class="btn btn-gray">LEER MAS...</button>
          </div>
        </div>

        <!-- NOVEDAD-->
          <div class="col-lg-4 col-sm-12 content-nov bg-light my-2">
            <p class="nov-tittle">BRIDGESTONE</p>
            <div class="nov-img">
              <img src="img/autos/solpuesta.jpg" class="img-fluid">
            </div>
            <p class="estilorojo ">Bridgestone, proveedor de Nissan y Toyota</p>
            <p class="">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
            <div class="btn-group w-100">
              <button type="button" class="btn btn-gray">LEER MAS...</button>
            </div>
          </div>

  </div>
</div>

  <div class="newsletter">
    <div class="gris">
      <div class="container ">
        <div class="col-xl-12 col-md-12 col-12 col-center mx-auto text-center pt-3 pb-1 mt-2">
          <div class="col-md-6 col-sm-12 col-xs-12 newslettamano center-block mx-auto">
            <div class="newsltexto hidden-xsd-none d-sm-block">
              <p class=""><span class="font-weight-bold">SUSCRIBITE A NUESTRO NEWSLETTER</span><br>
              y recibi nuestras mejores ofertas</p>
            </div>
            <div class="newsltexto d-block d-sm-none">
              <p class="newslettertexto1">NEWSLETTER</p>

            </div>
            <div>
              <form role="form">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="email" required>
                    <span class="input-group-btn">
                      <button class="btn btn-success height-equal" type="submit">
                        <i class="glyphicon glyphicon-search" aria-hidden="true"></i>Suscribirse
                      </button>
                    </span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--______________________________HEADER-->
  <?php
  require_once("footer.php");
  ?>
  <!--______________________________ FIN HEADER-->

</body>

</html>
