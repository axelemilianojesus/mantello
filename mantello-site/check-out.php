<!DOCTYPE html>
<html lang="en">

<head>
  <title>CHECK OUT</title>
  <style media="screen">

    h6{ font-size: 18px !important; }
  </style>
</head>

<body>
  <!--______________________________HEADER-->
  <?php require_once("header.php"); ?>
  <!--______________________________ FIN HEADER-->

  <div class="divider">
    <p class="text-red">CHECKOUT</p>
  </div>

  <!--______________________________HEADER-->
  <?php include_once("breadcumbs.php"); ?>
  <!--______________________________ FIN HEADER-->



    <!--Main layout-->
    <main class="mt-5 pt-4">
      <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Formulario de Checkout</h2>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <form class="card-body">

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6 mb-2">

                    <!--firstName-->
                    <div class="md-form ">
                      <input type="text" id="firstName" class="form-control">
                      <label for="firstName" class="">Nombre</label>
                    </div>

                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6 mb-2">

                    <!--lastName-->
                    <div class="md-form">
                      <input type="text" id="lastName" class="form-control">
                      <label for="lastName" class="">Apellido</label>
                    </div>

                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Username-->
                <div class="md-form input-group pl-0 mb-5">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <!--email-->
                <div class="md-form mb-5">
                  <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                  <label for="email" class="">Email (optional)</label>
                </div>

                <!--address-->
                <div class="md-form mb-5">
                  <input type="text" id="address" class="form-control" placeholder="1234 Main St">
                  <label for="address" class="">Direccion</label>
                </div>

                <!--address-2-->
                <div class="md-form mb-5">
                  <input type="text" id="address-2" class="form-control" placeholder="Apartment or suite">
                  <label for="address-2" class="">Direccion 2 (opcional)</label>
                </div>

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-lg-4 col-md-12 mb-4">

                    <label for="country">Paiz</label>
                    <select class="custom-select d-block w-100" id="country" required>
                      <option value="">Elegir...</option>
                      <option>Argentina</option>
                        <option>Brasil</option>
                          <option>Chile</option>
                            <option>Uruguay</option>
                              <option>Paraguay</option>
                    </select>
                    <div class="invalid-feedback">
                      Seleccionar un país válido.
                    </div>

                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4">

                    <label for="state">Provincia</label>
                    <select class="custom-select d-block w-100" id="state" required>
                      <option value="">Seleccionar...</option>
                      <option>Mendoza</option>
                        <option>San Luis</option>
                          <option>Córdoba</option>
                    </select>
                    <div class="invalid-feedback">
                      Seleccionar provincia Válida
                    </div>

                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4">

                    <label for="zip">Código Postal</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                      Código Postal Válido.
                    </div>

                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr>

                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="same-address">
                  <label class="custom-control-label" for="same-address">Dirección de facturación es la misma que la dirección de ennío</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="save-info">
                  <label class="custom-control-label" for="save-info">Guardar informacion para proxima compra</label>
                </div>

                <hr>

                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Tarjeta de Credito</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Tarjeta Debito</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">Mercado Pago</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name">Nombre de la Tarjeta</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Nombre completo como aparece en tarjeta</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number">Número de la Tarjeta</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Vencimiento</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <hr class="mb-4">
              <a href="compra-exitosa.php">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar Checkout</button></a>

              </form>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!-- Heading -->
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Su carrito</span>
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>

            <!-- Cart -->
            <ul class="list-group mb-3 z-depth-1">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Nombre de producto</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Segundo producto</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Tercer producto</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Código promocional</h6>
                  <small>Código de ejemplo</small>
                </div>
                <span class="text-success">-$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (AR$)</span>
                <strong>$20</strong>
              </li>
            </ul>
            <!-- Cart -->

            <!-- Promo code -->
            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Aplicar</button>
                </div>
              </div>
            </form>
            <!-- Promo code -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </main>
    <!--Main layout-->



</div>

<!--______________________________FOOTER-->
<?php require_once("footer.php");  ?>
<!--______________________________ FIN FOOTER-->

</body>

</html>
