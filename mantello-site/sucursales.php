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
<?php include_once("simple-banner.php"); ?>
  <!--______________________________ FIN SLIDER-->


  <div class="divider">
    <p class="textoblanco1">SUCURSALES<span class="text-red"> EN MENDOZA</span></p>
  </div>

<!--______________________________ FILA PRODUCTOS-->


  <!--______________________________ FILA PRODUCTOS-->

  <!--______________________________MAP-->
  <?php include_once("maps.php");  ?>
  <!--______________________________ FIN MAP-->

  <!--______________________________ SLIDER SERVICIOS-->
  <?php  include_once("services-banner.php");  ?>
    <!--______________________________ FIN SLIDER SERVICIOS-->

  <!--______________________________FOOTER-->
  <?php require_once("footer.php");  ?>
  <!--______________________________ FIN FOOTER-->

</body>

</html>
