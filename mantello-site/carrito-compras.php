<!DOCTYPE html>
<html lang="en">

<head>
  <title>Carrito de compra</title>
</head>

<body>
  <!--______________________________HEADER-->
  <?php require_once("header.php"); ?>
  <!--______________________________ FIN HEADER-->
  <div class="divider">
    <p class="text-red">CARRITO DE COMPRAS</p>
  </div>
  <div class="container mt-5">
    <div class="row">

  <!-- ========================= SECTION PAGETOP ========================= -->
  <section class="section-pagetop">
  <div class="container">
  	<h2 class="title-page">Carrito de compras</h2>
  </div> <!-- container //  -->
  </section>
  <!-- ========================= SECTION INTRO END// ========================= -->

  <!-- ========================= SECTION CONTENT ========================= -->
  <section class="section-content padding-y">
  <div class="container">

  <div class="row">
  	<main class="col-md-9">
  <div class="card">

  <table class="table table-borderless table-shopping-cart">
  <thead class="text-muted">
  <tr class="small text-uppercase">
    <th scope="col">Producto</th>
    <th scope="col" width="120">Cantidad</th>
    <th scope="col" width="120">Precio</th>
    <th scope="col" class="text-right" width="200"> </th>
  </tr>
  </thead>
  <tbody>
  <tr>
  	<td>
  		<figure class="itemside">
  			<div class="aside"><img src="img/lubricantes/semisintetico/semi2.jpg" class="img-sm"></div>
  			<figcaption class="info">
  				<a href="#" class="title text-dark">Items van aquí</a>
  				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
  			</figcaption>
  		</figure>
  	</td>
  	<td>
  		<select class="form-control">
  			<option>1</option>
  			<option>2</option>
  			<option>3</option>
  			<option>4</option>
  		</select>
  	</td>
  	<td>
  		<div class="price-wrap">
  			<var class="price">$1156.00</var>
  			<small class="text-muted"> $315.20 unidad </small>
  		</div> <!-- price-wrap .// -->
  	</td>
  	<td class="text-right">
  	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
  	<a href="" class="btn btn-light"> Remover</a>
  	</td>
  </tr>
  <tr>
  	<td>
  		<figure class="itemside">
  			<div class="aside"><img src="img/accesorios4x4/lona/lona1.jpg" class="img-sm"></div>
  			<figcaption class="info">
  				<a href="#" class="title text-dark">Nombre del producto aquí</a>
  				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
  			</figcaption>
  		</figure>
  	</td>
  	<td>
  		<select class="form-control">
  			<option>1</option>
  			<option>2</option>
  			<option>3</option>
  			<option>4</option>
  		</select>
  	</td>
  	<td>
  		<div class="price-wrap">
  			<var class="price">$149.97</var>
  			<small  class="text-muted"> $75.00 unidad </small>
  		</div> <!-- price-wrap .// -->
  	</td>
  	<td class="text-right">
  	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
  	<a href="" class="btn btn-light btn-round"> Remover</a>
  	</td>
  </tr>
  <tr>
  	<td>
  		<figure class="itemside">
  			<div class="aside"><img src="img/accesorios4x4/cupulas/cupula1.jpg" class="img-sm"></div>
  			<figcaption class="info">
  				<a href="#" class="title text-dark">Another name of some product goes just here as a demo text </a>
  				<p class="small text-muted">Size: XL, Color: blue,  Brand: Tissot</p>
  			</figcaption>
  		</figure>
  	</td>
  	<td>
  		<select class="form-control">
  			<option>1</option>
  			<option>2</option>
  			<option>3</option>
  		</select>
  	</td>
  	<td>
  		<div class="price-wrap">
  			<var class="price">$98.00</var>
  			<small class="text-muted"> $578.00 unidad</small>
  		</div> <!-- price-wrap .// -->
  	</td>
  	<td class="text-right">
  		<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
  		<a href="" class="btn btn-light btn-round"> Remover</a>
  	</td>
  </tr>
  </tbody>
  </table>

  <div class="card-body border-top">
  	<a href="check-out.php" class="btn btn-primary float-md-right"> Comprar <i class="fa fa-chevron-right"></i> </a>
  	<a href="ofertas.php" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue Comprando </a>
  </div>
  </div> <!-- card.// -->

  <div class="alert alert-success mt-3">
  	<p class="icontext"><i class="icon text-success fa fa-truck"></i>Envío Gratuito dentro de las dos semanas hábiles</p>
  </div>

  	</main> <!-- col.// -->
  	<aside class="col-md-3">
  		<div class="card mb-3">
  			<div class="card-body">
  			<form>
  				<div class="form-group">
  					<label>Tiene cupon?</label>
  					<div class="input-group">
  						<input type="text" class="form-control" name="" placeholder="Coupon code">
  						<span class="input-group-append">
  							<button class="btn btn-primary">Aplicar</button>
  						</span>
  					</div>
  				</div>
  			</form>
  			</div> <!-- card-body.// -->
  		</div>  <!-- card .// -->
  		<div class="card">
  			<div class="card-body">
  					<dl class="dlist-align">
  					  <dt>Precio Total:</dt>
  					  <dd class="text-right">USD 568</dd>
  					</dl>
  					<dl class="dlist-align">
  					  <dt>Descuento:</dt>
  					  <dd class="text-right">USD 658</dd>
  					</dl>
  					<dl class="dlist-align">
  					  <dt>Total:</dt>
  					  <dd class="text-right  h5"><strong>$1,650</strong></dd>
  					</dl>
  					<hr>
  					<p class="text-center mb-3">
  						<img src="img/carrito/payments.png" height="26">
  					</p>

  			</div> <!-- card-body.// -->
  		</div>  <!-- card .// -->
  	</aside> <!-- col.// -->
  </div>

  </div> <!-- container .//  -->
  </section>
  <!-- ========================= SECTION CONTENT END// ========================= -->

  <!-- ========================= SECTION  ========================= -->
  <hr>
  <section class="section-name pb-5 pt-5">
  <div class="container">
  <h6>Pago y Política de Reembolso</h6>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div><!-- container // -->
  </section>

  </div>
  </div>
  <!--______________________________FOOTER-->
  <?php require_once("footer.php");  ?>
  <!--______________________________ FIN FOOTER-->
