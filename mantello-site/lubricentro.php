<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lubricentro</title>
  <style type="text/css">

#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}

</style>
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
          <img src="img/slider/banner-lubricentro-2.jpg" width="100%"  alt="Mantello">
          <div class="carousel-caption d-none d-md-block">
            <h2>SERVICIO</h2>
            <p>Servicios de Mantello Neumáticos</p>
          </div>
        </div>

      </div>

    </div>
  </div>
    </div>
  </div>
    <!--______________________________ FIN SLIDER-->
  <!--______________________________ DIVIDER-->
  <div class="divider">
    <p class="text-red">LUBRICENTRO</p>
  </div>
  <!--______________________________ FIN DIVIDER-->
  <!--______________________________ MAPA NAV-->
  <?php   include_once("breadcumbs.php");  ?>
  <!--______________________________ FIN MAPA NAV-->

  <div class="container">
  	<div class="row">
      <div class="col-lg-12  p-5 text-center mt-3 mb-3">


  			<h2 class="estilorojo">
  				Servicio de alineación desde los $12.500 y varía el precio dependiendo del vehículo.
  			</h2>
        <h4>Recomendamos realizar una consulta telefónica o acercarse a una de nuestras sucursales que poseen talleres disponibles.</h4>

          <!--_____________________________ LINEA-->
        <hr class="p-3">
          <!--_____________________________ FIN LINEA-->
  			<p>

          <strong>¿En qué consiste una alineación?</strong>

La alineación de las ruedas consiste en poner paralelas las ruedas de cada eje y paralelos los ejes entre sí, y ajustar los diferentes ángulos de las ruedas, según los valores establecidos por el fabricante del vehículo.

<strong>¿Cuando es necesario realizar una que una alineación a mi vehículo?</strong>

Notarás un comportamiento extraño en el vehículo. A veces la dirección se verá afectada, sentirás que el auto va más a un lado que a otro y tendrás dificultad para mantener la trayectoria recta. Y se recomienda realizarlo una vez cada seis meses o cada 10.000 km, lo primero que ocurra.</p>
<p>
<strong>La alineación te ayudará a:</strong>
<ol>
  <li>Mejorar la durabilidad de tus neumáticos, un auto desalineado desgasta de manera irregular los neumáticos ocasionando problemas en la suspensión, dirección y rodaje.</li>
  <li>Mantener un mejor control en la dirección, proporcionando mayor seguridad y manejabilidad.
</li>
</ol>


  			</p>

        <!--_____________________________ LINEA-->
      <hr class="p-3">
        <!--_____________________________ FIN LINEA-->
        
	<div class="row">
		<div class="col-md-6 p-3">
			<img alt="Bootstrap Image Preview" src="https://i.ytimg.com/vi/eIkn0laTtRw/maxresdefault.jpg" width="100%"  />
		</div>
		<div class="col-md-6 p-3">
			<h3>
				Descripcion de Servicio
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
			<button type="button" class="btn btn-success">
				Button
			</button>
		</div>
	</div>

  		</div>

      <hr>



</div>
</div>

<!--______________________________FORM GENERAL-->
<?php include_once("form-general.php"); ?>
<!--______________________________ FIN FORM GENERAL-->


  <!--_____________________________ COMPARTIR-->
  <?php require_once("compartir.php");  ?>
  <!--______________________________ FIN COMPARTIR-->

<!--______________________________FOOTER-->
<?php require_once("footer.php");  ?>
<!--______________________________ FIN FOOTER-->

</body>

</html>
