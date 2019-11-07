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
  <div class="col-md-6 p-3">
  <img alt="Bootstrap Image Preview" src="img/lubricantes/elaion-f10-15w-40.jpg" width="100%"  />
  </div>

<div class="col-md-6 p-5 bg-light">
<h3>
Descripcion de la categoria del producto
</h3>
<p>
Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus.
</p>
<button type="button" class="btn btn-success">
Ver productos
</button>
</div>

</div>
</div>
<!--_____________________________ DESCRIPCION PRODUCTO-->

<!--_____________________________ LINEA-->
<hr class="p-3">
<!--_____________________________ FIN LINEA-->

<!--______________________________ FILA PRODUCTOS-->
  <div class="container">
    <div class="row">
     <!-- PRODUCTO -->
      <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
          <div class="mx-md-2 mx-sm-0">
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
                    <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
            <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
          </div>
          </div>
      </div>


      <!-- PRODUCTO -->
       <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
           <div class="mx-md-2 mx-sm-0">
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
                     <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
             <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
           </div>
           </div>
       </div>


       <!-- PRODUCTO -->
        <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
            <div class="mx-md-2 mx-sm-0">
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
                      <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
              <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
            </div>
            </div>
        </div>


        <!-- PRODUCTO -->
         <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
             <div class="mx-md-2 mx-sm-0">
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
                       <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
               <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
             </div>
             </div>
         </div>



    </div>
  </div>

  <!--______________________________ FILA PRODUCTOS-->

  <!--______________________________ FILA PRODUCTOS-->
    <div class="container">
      <div class="row">
       <!-- PRODUCTO -->
        <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
            <div class="mx-md-2 mx-sm-0">
              <div class="panel-heading" data-toggle="modal" data-target="#exampleModal5"> <img src="img/lubricantes/semisintetico/semi2.jpg" class="img-fluid" alt="Responsive immage">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="panel-heading"> <img src="img/lubricantes/semisintetico/semi2.jpg" class="img-fluid" alt="Responsive immage">
                      </div>
                      <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                      <p>12 cuotas sin interés de $216.75</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                      <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
              <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
            </div>
            </div>
        </div>


        <!-- PRODUCTO -->
         <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
             <div class="mx-md-2 mx-sm-0">
               <div class="panel-heading" data-toggle="modal" data-target="#exampleModal6"> <img src="img/accesorios4x4/barras/barra1.jpg" class="img-fluid" alt="Responsive immage">
               </div>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <div class="panel-heading"> <img src="img/accesorios4x4/barras/barra1.jpg" class="img-fluid" alt="Responsive immage">
                       </div>
                       <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                       <p>12 cuotas sin interés de $216.75</p>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                       <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
               <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
             </div>
             </div>
         </div>


         <!-- PRODUCTO -->
          <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
              <div class="mx-md-2 mx-sm-0">
                <div class="panel-heading" data-toggle="modal" data-target="#exampleModal7"> <img src="img/accesorios4x4/lona/lona1.jpg" class="img-fluid" alt="Responsive immage">
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="panel-heading"> <img src="img/accesorios4x4/lona/lona1.jpg" class="img-fluid" alt="Responsive immage">
                        </div>
                        <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                        <p>12 cuotas sin interés de $216.75</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                        <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
                <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
              </div>
              </div>
          </div>


          <!-- PRODUCTO -->
           <div class="col-lg-3 col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
               <div class="mx-md-2 mx-sm-0">
                 <div class="panel-heading" data-toggle="modal" data-target="#exampleModal8"> <img src="img/accesorios4x4/cupulas/cupula1.jpg" class="img-fluid" alt="Responsive immage">
                 </div>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                         <div class="panel-heading"> <img src="img/accesorios4x4/cupulas/cupula1.jpg" class="img-fluid" alt="Responsive immage">
                         </div>
                         <p><del>$3169.15 </del> <span class="text-red precios1"> $2601.00</span></p>
                         <p>12 cuotas sin interés de $216.75</p>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-gray" data-dismiss="modal">CERRAR</button>
                         <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
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
                 <button type="button" class="btn btn-red"><a href="producto.php">COMPRAR</a></button>
               </div>
               </div>
           </div>



      </div>
    </div>

    <!--______________________________ FILA PRODUCTOS-->



</div>


<!--______________________________ PAGINATION-->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 padding-0 text-center mt-3 mb-3">
          <div class="mx-md-2 mx-sm-0">

        <nav class="pagination-sm">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#">Previo</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">Siguiente</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
    </div>

  <!--______________________________ PAGINATION-->

<!--______________________________FOOTER-->
<?php require_once("footer.php");  ?>
<!--______________________________ FIN FOOTER-->

</body>

</html>
