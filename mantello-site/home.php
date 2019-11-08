<!DOCTYPE html>
<html lang="es">
<head>
  <title>Home</title>
</head>

<body>
<!--______________________________HEADER-->
<?php require_once("header.php"); ?>
<!--______________________________ FIN HEADER-->

<!--______________________________ SLIDER-->
<?php include_once("main-banner.php"); ?>
  <!--______________________________ FIN SLIDER-->


  <!--______________________________ BUSCADOR-->
  <?php   include_once("buscador.php");  ?>
  <!--______________________________ FIN BUSCADOR-->


  <!--______________________________ SLIDER SERVICIOS-->
  <?php  include_once("services-banner.php");  ?>
    <!--______________________________ FIN SLIDER SERVICIOS-->

  <div class="divider">
    <p class="textoblanco1">PRODUCTOS<span class="text-red"> DESTACADOS</span></p>
  </div>

  <!--______________________________ FILA PRODUCTOS-->
    <div class="container">
      <div class="row">
       <!-- PRODUCTO -->
        <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
            <div class="mx-md-2 mx-sm-0">
              <div class="descuento">-20%</div> <!--OFERTA-->
              <div class="panel-heading" data-toggle="modal" data-target="#exampleModal"> <img src="img/lubricantes/minerales/mineral1.jpg" class="img-fluid" alt="Responsive immage">
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
                      <div class="panel-heading"> <img src="img/lubricantes/minerales/mineral1.jpg" class="img-fluid" alt="Responsive immage">
                      </div>
                      <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                      <p>12 cuotas sin interés de $216.75</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                      <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of Modal -->

              <div class="card-body panel">
                <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                <p>12 cuotas sin interés de $216.75</p>
              </div>

            <div class="btn-group w-100">
              <button type="button" class="btn btn-gray"><a href="producto.php">CONSULTAR</a></button>
            </div>
            <div class="btn-group w-100">
              <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
            </div>
            </div>
        </div>


        <!-- PRODUCTO -->
         <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
             <div class="mx-md-2 mx-sm-0">
               <div class="descuento">-20%</div> <!--OFERTA-->
               <div class="panel-heading" data-toggle="modal" data-target="#exampleModal2"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive immage">
               </div>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

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
                       <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                       <p>12 cuotas sin interés de $216.75</p>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                       <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- end of Modal -->

               <div class="card-body panel">
                 <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                 <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                 <p>12 cuotas sin interés de $216.75</p>
               </div>

             <div class="btn-group w-100">
               <button type="button" class="btn btn-gray"><a href="producto.php">CONSULTAR</a></button>
             </div>
             <div class="btn-group w-100">
               <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
             </div>
             </div>
         </div>


         <!-- PRODUCTO -->
          <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
              <div class="mx-md-2 mx-sm-0">
                <div class="descuento">-20%</div> <!--OFERTA-->
                <div class="panel-heading" data-toggle="modal" data-target="#exampleModal3"> <img src="img/lubricantes/minerales/mineral2.jpg" class="img-fluid" alt="Responsive immage">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="panel-heading"> <img src="img/lubricantes/minerales/mineral2.jpg" class="img-fluid" alt="Responsive immage">
                        </div>
                        <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                        <p>12 cuotas sin interés de $216.75</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                        <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of Modal -->

                <div class="card-body panel">
                  <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                  <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                  <p>12 cuotas sin interés de $216.75</p>
                </div>

              <div class="btn-group w-100">
                <button type="button" class="btn btn-gray"><a href="producto.php">CONSULTAR</a></button>
              </div>
              <div class="btn-group w-100">
                <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
              </div>
              </div>
          </div>


          <!-- PRODUCTO -->
           <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
               <div class="mx-md-2 mx-sm-0">
                 <div class="descuento">-20%</div> <!--OFERTA-->
                 <div class="panel-heading" data-toggle="modal" data-target="#exampleModal4"> <img src="img/lubricantes/semisintetico/semi1.jpg" class="img-fluid" alt="Responsive immage">
                 </div>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                         <div class="panel-heading"> <img src="img/lubricantes/semisintetico/semi1.jpg" class="img-fluid" alt="Responsive immage">
                         </div>
                         <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                         <p>12 cuotas sin interés de $216.75</p>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                         <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- end of Modal -->

                 <div class="card-body panel">
                   <h5>NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                   <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                   <p>12 cuotas sin interés de $216.75</p>
                 </div>

               <div class="btn-group w-100">
                 <button type="button" class="btn btn-gray"><a href="producto.php">CONSULTAR</a></button>
               </div>
               <div class="btn-group w-100">
                 <button type="button" class="btn btn-red"><a href="carrito-compras.php">COMPRAR</a></button>
               </div>
               </div>
           </div>



      </div>
    </div>

    <!--______________________________ FILA PRODUCTOS-->

  <!--______________________________MAP-->
  <?php include_once("maps.php");  ?>
  <!--______________________________ FIN MAP-->

  <!--______________________________CLIENTES-->
  <?php include_once("clientes.php");  ?>
  <!--______________________________ FIN CLIENTES-->

  <!--______________________________ BUSCADOR-->
  <?php include_once("testimonials.php");  ?>
  <!--______________________________ FIN BUSCADOR-->

  <!--______________________________NOVEDADES->
  <?php include_once("novedades-fee.php");  ?>
  <!______________________________ FIN NOVEDADES-->


</div>

  <!--______________________________FOOTER-->
  <?php require_once("footer.php");  ?>
  <!--______________________________ FIN FOOTER-->

</body>

</html>
