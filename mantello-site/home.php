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
  <!--_______________________-->

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="carousel slide" id="carousel-635943">
  				<ol class="carousel-indicators">
  					<li data-slide-to="0" data-target="#carousel-635943">
  					</li>
  					<li data-slide-to="1" data-target="#carousel-635943">
  					</li>
  					<li data-slide-to="2" data-target="#carousel-635943" class="active">
  					</li>
  				</ol>
  				<div class="carousel-inner">
  					<div class="carousel-item">
  						<img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
  						<div class="carousel-caption">
  							<h4>
  								First Thumbnail label
  							</h4>
  							<p>
  								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
  							</p>
  						</div>
  					</div>
  					<div class="carousel-item">
  						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
  						<div class="carousel-caption">
  							<h4>
  								Second Thumbnail label
  							</h4>
  							<p>
  								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
  							</p>
  						</div>
  					</div>
  					<div class="carousel-item active">
  						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
  						<div class="carousel-caption">
  							<h4>
  								Third Thumbnail label
  							</h4>
  							<p>
  								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
  							</p>
  						</div>
  					</div>
  				</div> <a class="carousel-control-prev" href="#carousel-635943" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-635943" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="visible-sm d-block d-sm-none">
    <div class="text-center">
      <p class="bscpalabr">BUSCADOR</p>
    </div>
  </div>



  <div class="container">
    <div class="">
      <div class="">
        <div class="col-xl-12 col-md-12 col-12 buscador1">
          <div class="col-xl-2 col-lg-2 d-none d-md-block d-lg-none d-none d-lg-block d-xl-none"></div>
          <div class="col-xl-2 col-lg-2 img-fluid d-none d-md-block d-lg-none d-none d-lg-block d-xl-none">
            <img src="img/buscar/ruedabusqueda.jpg" class="img-fluid ruedabuscador">
          </div>
          <div class="arriba limite70 col-lg-8 col-md-12 col-12 buscador2">
            <div id="logo" class="text-center">
              <div class="row">
                <div class="bustitul espabusca">
                  <p>BUSCÁ TU <span class="bustitul1">CUBIERTA</span> <span class="estilorojo">ACÁ</span></p>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                  <div class="form-group ">
                    <select id="iller" class="form-control diametro">
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
                    <h3>/</h3>
                    <select id="ilceler" class="form-control rodado">
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
                    <h3>R</h3>
                    <select id="arac-turu" class="form-control rodado">
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
                    <button class="btn btn-success" type="submit">
                      <i class="glyphicon glyphicon-search" aria-hidden="true"></i> <a href="neumaticos.html">Buscar</a>
                    </button>
                  </span>
                </div>

              </div>
            </div>
            <div class="bustitul espabusca">
              <p>BUSCADOR GENERAL</p>
            </div>
            <form role="form" id="form-buscar">
              <div class="form-group">
                <div class="input-group">
                  <input id="1" class="form-control" type="text" name="search" placeholder="205 / 55 R 16" required />
                  <span class="input-group-btn">
                    <button class="btn btn-success" type="submit">
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
  </div>

  <div class="container-fluid hidden-xsd-none d-sm-block">
    <img src="img/servicios/gomeria.jpg" class="img-fluid">
  </div>

  <div class="divisor">
    <p class="textoblanco1">PRODUCTOS<span class="estilorojo"> DESTACADOS</span></p>
  </div>


  <div class="container">
    <div class="row">

      <div class="col-lg-12  ruedas bloque">
        <div class="panel panel-default col-sm-3 col-md-12">
          <div class="col-md-12">
            <div class="panel-heading ruedas"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive imge">
            </div>
            <div class="card-body">
              <p class="cajaservicio">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</p>
              <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
              <p>12 cuotas sin interés de $216.75</p>
            </div>
          </div>

          <div class="btn-group col-6 col-md-6 col-lg-6">
            <button type="button" class="btn btn-secondary botonizq">CONSULTAR</button>
          </div>
          <div class="btn-group col-6 col-md-6 col-lg-6">
            <button type="button" class="btn btn-secondary botonder"><a href="paso1.html">COMPRAR</a></button>
          </div>
        </div>
      </div>

      <div class="col-lg-3  ruedas bloque">
        <div class="panel panel-default  col-md-3">
          <div class="col-md-12">
            <div class="panel-heading ruedas"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive imge">
            </div>
            <div class="card-body">
              <p class="cajaservicio">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</p>
              <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
              <p>12 cuotas sin interés de $216.75</p>
            </div>
          </div>
          <div class="col-12">
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonizq">CONSULTAR</button>
            </div>
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonder"><a href="paso1.html">COMPRAR</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 col-md-3 col-lg-3  ruedas bloque">
        <div class="panel panel-default  col-md-3">
          <div class="col-md-12">
            <div class="panel-heading ruedas"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive imge">
            </div>
            <div class="card-body">
              <p class="cajaservicio">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</p>
              <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
              <p>12 cuotas sin interés de $216.75</p>
            </div>
          </div>
          <div class="col-12">
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonizq">CONSULTAR</button>
            </div>
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonder"><a href="paso1.html">COMPRAR</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 col-md-3 col-lg-3  ruedas bloque">
        <div class="panel panel-default  col-md-3">
          <div class="col-md-12">
            <div class="panel-heading ruedas"> <img src="img/ruedas/rueda1.jpg" class="img-fluid" alt="Responsive imge">
            </div>
            <div class="card-body">
              <p class="cajaservicio">NEUMÁTICO 165/70 R13 BRIDGESTONE POTENZA RE740</p>
              <p><del>$3169.15 </del> <span class="estilorojo precios1"> $2601.00</span></p>
              <p>12 cuotas sin interés de $216.75</p>
            </div>
          </div>
          <div class="col-12">
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonizq">CONSULTAR</button>
            </div>
            <div class="btn-group col-6 col-md-6 col-lg-6">
              <button type="button" class="btn btn-secondary botonder"><a href="paso1.html">COMPRAR</a></button>
            </div>
          </div>
        </div>
      </div>




    </div>
  </div>

  <div class="divisor">
    <p class="textoblanco1"><span class="estilorojo">SUCURSALES</span></p>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="carousel slide d-block d-sm-none" data-ride="carousel" data-interval="0">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="">

                <ul class="nav navbar-nav navbar-left menumapa">
                  <li><a href="https://goo.gl/maps/FasRN7RSgT2K778J7">
                      <p class="sucursales">Maipu</p>
                      <p>Gobernador Francisco José Gabrielli 3885
                        0261 493-2884</p>
                    </a></li>
                  <li><a href="https://goo.gl/maps/BMTxGkghwGp7GCos6">
                      <p class="sucursales">Guaymallén</p>
                      <p>Av. Mitre 25
                        0261 431-3356</p>
                    </a></li>
                  <li><a href="https://goo.gl/maps/juwDDduwRB2pKkup6">
                      <p class="sucursales">Godoy Cruz</p>
                      <p>Av. San Martín 22
                        0261 435-0555</p>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Carousel -->
        <div id="custom_carousel" class="carousel slide hidden-xsd-none d-sm-block" data-ride="carousel" data-interval="0">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="">

                <ul class="nav navbar-nav navbar-left menumapa">
                  <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#">
                      <p class="sucursales">Maipu</p>
                      <p>Gobernador Francisco José Gabrielli 3885
                        0261 493-2884</p>
                    </a></li>
                  <li data-target="#custom_carousel" data-slide-to="1" class="active"><a href="#">
                      <p class="sucursales">Guaymallén</p>
                      <p>Av. Mitre 25
                        0261 431-3356</p>
                    </a></li>
                  <li data-target="#custom_carousel" data-slide-to="2" class="active"><a href="#">
                      <p class="sucursales">Godoy Cruz</p>
                      <p>Av. San Martín 22
                        0261 435-0555</p>
                    </a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-8 col-sm-8 column">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="graph">
                          <div class="graph-content"> <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6424967008466!2d-68.80134568495413!3d-32.93404247858004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b18d186b04fa5f%3A0xc0503a757802fed!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1556776442627!5m2!1ses!2sar"
                              width="100%" height="255" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="graph">
                          <div class="graph-content"><iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26794.88854131183!2d-68.84124456399141!3d-32.91505740277091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90a4f7d8b9bdc30!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1557180642962!5m2!1ses!2sar"
                              width="100%" height="255" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="graph">
                          <div class="graph-content"><iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53595.35798015863!2d-68.83799454272093!3d-32.90592968840463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b18d37abf1e8b7%3A0x8728e2f77464e2bc!2sMANTELLO+NEUM%C3%81TICOS!5e0!3m2!1ses!2sar!4v1558186773271!5m2!1ses!2sar"
                              width="100%" height="255" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
              </div>
              <!-- End Carousel Inner -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="divisor">
    <p class="textoblanco1">NOVEDADES</p>
  </div>

  <div class="container" id="nov">
    <div class="novedades col-xl-12 col-sm-12">
      <div class="col-lg-4 col-sm-6 cubiculos servicioesp center-block">
        <p class="novedadestitulos">BRIDGESTONE</p>
        <img src="img/fotosautos/nisan.jpg" class="img-fluid">
        <p class="estilorojo servicioesp">Bridgestone, proveedor de Nissan y Toyota</p>
        <p class="servicioesp">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
      </div>
      <div class="col-lg-4 col-sm-6 cubiculos servicioesp center-block">
        <p class="novedadestitulos">BRIDGESTONE</p>
        <img src="img/fotosautos/nisan.jpg" class="img-fluid">
        <p class="estilorojo servicioesp">Bridgestone, proveedor de Nissan y Toyota</p>
        <p class="servicioesp">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
      </div>
      <div class="col-lg-4 col-sm-6 cubiculos servicioesp center-block">
        <p class="novedadestitulos">BRIDGESTONE</p>
        <img src="img/fotosautos/nisan.jpg" class="img-fluid">
        <p class="estilorojo servicioesp">Bridgestone, proveedor de Nissan y Toyota</p>
        <p class="servicioesp">Te damos algunos consejos para ahorrar combustible en tus vacaciones.</p>
      </div>
    </div>
  </div>


  <div class="newsletter">
    <div class="gris">
      <div class="container ">
        <div class="col-xl-12 col-md-12 col-12 col-center">
          <div class="col-md-6 col-sm-12 col-xs-12 newslettamano center-block">
            <div class="newsltexto hidden-xsd-none d-sm-block">
              <p class="">SUSCRIBITE A <span class="newslettertexto1">NUESTRO NEWSLETTER</span></p>
              <p class="newslettertexto1">y recibi nuestras mejores ofertas</p>
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
                      <button class="btn btn-success" type="submit">
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

</body>

</html>
