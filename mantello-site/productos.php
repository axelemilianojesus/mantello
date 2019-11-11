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
        <button type="button" class="btn btn-success my-3 w-100"><a href="#">
          VER PRODUCTOS</a>
        </button>
      </div>

    </div>
  </div>
  <!--_____________________________ DESCRIPCION PRODUCTO-->

  <!--_____________________________ LINEA-->
  <hr class="p-3">
  <!--_____________________________ FIN LINEA-->

  <!--______________________________BREADCUMBS-->
  <?php include_once("breadcumbs.php"); ?>
  <!--______________________________ FIN BREADCUMBS-->

  <section class="section-content padding-y">
    <div class="container">

      <div class="row">
        <aside class="col-md-3">

          <div class="card">
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Tipo de Producto</h6>
                </a>
              </header>
              <div class="filter-content collapse show" id="collapse_1" style="">
                <div class="card-body">
                  <form class="pb-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-append">
                        <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </form>

                  <ul class="list-menu">
                    <li><a href="#">People  </a></li>
                    <li><a href="#">Watches </a></li>
                    <li><a href="#">Cinema  </a></li>
                    <li><a href="#">Clothes  </a></li>
                    <li><a href="#">Home items </a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">People </a></li>
                  </ul>

                </div> <!-- card-body.// -->
              </div>
            </article> <!-- filter-group  .// -->
            <article class="filter-group">
              <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                  <i class="icon-control fa fa-chevron-down"></i>
                  <h6 class="title">Marcas </h6>
                </a>
              </header>
              <div class="filter-content collapse show" id="collapse_2" style="">
                <div class="card-body">
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" checked="" class="custom-control-input">
                    <div class="custom-control-label">Mercedes
                      <b class="badge badge-pill badge-light float-right">120</b>  </div>
                    </label>
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" checked="" class="custom-control-input">
                      <div class="custom-control-label">Toyota
                        <b class="badge badge-pill badge-light float-right">15</b>  </div>
                      </label>
                      <label class="custom-control custom-checkbox">
                        <input type="checkbox" checked="" class="custom-control-input">
                        <div class="custom-control-label">Mitsubishi
                          <b class="badge badge-pill badge-light float-right">35</b> </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <div class="custom-control-label">Nissan
                            <b class="badge badge-pill badge-light float-right">89</b> </div>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Honda
                              <b class="badge badge-pill badge-light float-right">30</b>  </div>
                            </label>
                          </div> <!-- card-body.// -->
                        </div>
                      </article> <!-- filter-group .// -->
                      <article class="filter-group">
                        <header class="card-header">
                          <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Rango de precios</h6>
                          </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3" style="">
                          <div class="card-body">
                            <input type="range" class="custom-range" min="0" max="100" name="">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Min</label>
                                <input class="form-control" placeholder="$0" type="number">
                              </div>
                              <div class="form-group text-right col-md-6">
                                <label>Max</label>
                                <input class="form-control" placeholder="$1,0000" type="number">
                              </div>
                            </div> <!-- form-row.// -->
                            <button class="btn btn-block btn-primary">Aplicar</button>
                          </div><!-- card-body.// -->
                        </div>
                      </article> <!-- filter-group .// -->
                      <article class="filter-group">
                        <header class="card-header">
                          <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Tamaño </h6>
                          </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_4" style="">
                          <div class="card-body">
                            <label class="checkbox-btn">
                              <input type="checkbox">
                              <span class="btn btn-light"> XS </span>
                            </label>

                            <label class="checkbox-btn">
                              <input type="checkbox">
                              <span class="btn btn-light"> SM </span>
                            </label>

                            <label class="checkbox-btn">
                              <input type="checkbox">
                              <span class="btn btn-light"> LG </span>
                            </label>

                            <label class="checkbox-btn">
                              <input type="checkbox">
                              <span class="btn btn-light"> XXL </span>
                            </label>
                          </div><!-- card-body.// -->
                        </div>
                      </article> <!-- filter-group .// -->
                      <article class="filter-group">
                        <header class="card-header">
                          <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                            <i class="icon-control fa fa-chevron-down"></i>
                            <h6 class="title">Mas Filtros </h6>
                          </a>
                        </header>
                        <div class="filter-content collapse in" id="collapse_5" style="">
                          <div class="card-body">
                            <label class="custom-control custom-radio">
                              <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                              <div class="custom-control-label">Cualquier condición</div>
                            </label>

                            <label class="custom-control custom-radio">
                              <input type="radio" name="myfilter_radio" class="custom-control-input">
                              <div class="custom-control-label">Promociones </div>
                            </label>

                            <label class="custom-control custom-radio">
                              <input type="radio" name="myfilter_radio" class="custom-control-input">
                              <div class="custom-control-label">Hasta en 12 cuotas</div>
                            </label>

                            <label class="custom-control custom-radio">
                              <input type="radio" name="myfilter_radio" class="custom-control-input">
                              <div class="custom-control-label">Hasta en 18 cuotas</div>
                            </label>
                          </div><!-- card-body.// -->
                        </div>
                      </article> <!-- filter-group .// -->
                    </div> <!-- card.// -->

                  </aside> <!-- col.// -->
                  <main class="col-md-9">

                    <header class="border-bottom mb-4 p-3">
                      <div class="form-inline">
                        <span class="mr-md-auto">32 productos encontrados </span>
                        <select class="mr-2 form-control">
                          <option>últimos items</option>
                          <option>Relevancia</option>
                          <option>Mas comprado</option>
                          <option>Mas barato</option>
                        </select>
                        <div class="btn-group">
                          <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                            <i class="fa fa-bars"></i></a>
                            <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view">
                              <i class="fa fa-th"></i></a>
                            </div>
                          </div>
                        </header><!-- sect-heading -->

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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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

                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                        <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
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
                                  <a href="producto.php" class="btn btn-gray w-100">CONSULTAR</a>
                                </div>
                                <div class="btn-group w-100">
                                  <a href="carrito-compras.php" class="btn btn-red w-100">COMPRAR</a>
                                </div>
                              </div>
                            </div>



                          </div>
                        </div>

                        <!--______________________________ FILA PRODUCTOS-->




                        <!--______________________________PAGINATION-->
                        <?php include_once("pagination.php"); ?>
                        <!--______________________________ FIN PAGINATION-->

                      </main> <!-- col.// -->

                    </div>

                  </div> <!-- container .//  -->
                </section>
                <!-- ========================= SECTION CONTENT END// ========================= -->
                <!--______________________________ BANNERS-->
                <?php include_once("banners.php");  ?>
                <!--______________________________ FIN BANNERS-->

                <!--______________________________FOOTER-->
                <?php require_once("footer.php");  ?>
                <!--______________________________ FIN FOOTER-->

              </body>

              </html>
