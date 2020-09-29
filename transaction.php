<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Transaction</title>

    <!-- Bootstrap core CSS -->
    <link href="helper/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css"> 
  </head>

  <body class="bg-light">
  <?php include"layout/header.php"?>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Checkout</h2>
        <p class="lead"></p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your PC</span>
            <button type="button" onclick="window.location.href='custom.php'" class="btn btn-secondary">Edit</button>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">CPU</h6>
                <small class="text-muted"><?php
                  if(!empty($_POST["selectedcpu"])){
                        echo $_POST["selectedcpu"];    
                    }else{  
                        echo "";
                  } 
                ?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedcpu"])){
                      echo $_POST["pricecpu"];    
                  }else{  
                      echo "";
                }
              ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Motherboard</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedmobo"])){
                      echo $_POST["selectedmobo"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedmobo"])){
                      echo $_POST["pricemobo"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">RAM</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedram"])){
                      echo $_POST["selectedram"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedram"])){
                      echo $_POST["priceram"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">HDD 1</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedhdd1"])){
                      echo $_POST["selectedhdd1"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedhdd1"])){
                      echo $_POST["pricehdd1"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">HDD 2</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedhdd2"])){
                      echo $_POST["selectedhdd2"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedhdd2"])){
                      echo $_POST["pricehdd2"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">SSD 1</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedssd1"])){
                      echo $_POST["selectedssd1"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedssd1"])){
                      echo $_POST["pricessd1"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">SSD 2</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedssd2"])){
                      echo $_POST["selectedssd2"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedssd2"])){
                      echo $_POST["pricessd2"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Case</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedcase"])){
                      echo $_POST["selectedcase"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedcase"])){
                      echo $_POST["pricecase"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">GPU</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedgpu"])){
                      echo $_POST["selectedgpu"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedgpu"])){
                      echo $_POST["pricegpu"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Power Supply</h6>
                <small class="text-muted"><?php
                if(!empty($_POST["selectedpsu"])){
                      echo $_POST["selectedpsu"];    
                  }else{  
                      echo "";
                }?></small>
              </div>
              <span class="text-muted">Rp<?php
                if(!empty($_POST["selectedpsu"])){
                      echo $_POST["pricepsu"];    
                  }else{  
                      echo "";
                }?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <strong>Total</strong>
              <strong>Rp<?php
                if(!empty($_POST["total"])){
                      echo $_POST["total"];    
                  }else{  
                      echo "";
                }?></strong>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing Address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email<span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="name@gmail.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Jl. Jendral Sudirman" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="zip">Zip Code</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Must be filled.
                </div>
              </div>
            </div>
            <!-- <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Simpan informasi</label>
            </div>
            <hr class="mb-4"> -->

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit Card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit Card</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on Card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Card Number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Card number is required.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required.
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
            <button class="btn btn-primary btn-lg btn-block" type="submit" >Place Order</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; PCraft</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="helper/js/jquery-slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="helper/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="helper/js/popper.min.js"></script>
    <script src="helper/js/bootstrap.min.js"></script>
    <script src="helper/js/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
