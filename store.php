<?php
  include_once 'header.php';

 ?>

 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   </head>

   <body>
     <body style="background-color:black;">
     <div class="container">
      <div class="row">
        <div class="col-sm">


          <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Lua Access</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$43<small class="text-muted fw-light">/Lifetime</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Lifetime access</li>
              <li>Lifetime updates</li>
              <li>Free Support</li>
              <li>Unlimited Hwid Resets</li>
              <li><a style="text-decoration:none" href= "http://localhost/features.php">Features</a></li>
            </ul>
            <div id="paypal-button"></div>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script>
    paypal.Button.render({
      // Configure environment
      env: 'sandbox',
      client: {
        sandbox: 'demo_sandbox_client_id',
        production: 'demo_production_client_id'
      },
      // Customize button (optional)
      locale: 'en_US',
      style: {
        size: 'large',
        color: 'black',
        shape: 'rect',
      },

      // Enable Pay Now checkout flow (optional)
      commit: true,

      // Set up a payment
      payment: function(data, actions) {
        return actions.payment.create({
          transactions: [{
            amount: {
              total: '0.01',
              currency: 'USD'
            }
          }]
        });
      },
      // Execute the payment
      onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
          // Show a confirmation message to the buyer
          window.alert('Thank you for your purchase!');
        });
      }
    }, '#paypal-button');

  </script>
          </div>
        </div>
      </div>
        </div>
        <div class="col-sm">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Beta Access</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$85<small class="text-muted fw-light">/Lifetime</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Lifetime access</li>
                <li>Lifetime updates</li>
                <li>Free Support</li>
                <li>Unlimited Hwid Resets</li>
                <li><a style="text-decoration:none" href= "http://localhost/features.php">Features</a></li>
              </ul>
              <div id="paypal-button2"></div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
      paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
          sandbox: 'demo_sandbox_client_id',
          production: 'demo_production_client_id'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
          size: 'large',
          color: 'black',
          shape: 'rect',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function(data, actions) {
          return actions.payment.create({
            transactions: [{
              amount: {
                total: '0.01',
                currency: 'USD'
              }
            }]
          });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
          return actions.payment.execute().then(function() {
            // Show a confirmation message to the buyer
            window.alert('Thank you for your purchase!');
          });
        }
      }, '#paypal-button2');

    </script>
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br><br><br><br><br><br><br><br><br>
     <div class="d-flex justify-content-center">


<button class="btn btn-success btn-lg btn-block" type="submit">Questions? Join our discord!</button>

  </body>
</html>
