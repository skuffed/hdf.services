<?php
  $memberOnly = true;
  include_once 'header.php';
  if (isset($_SESSION["lastCode"])) {
    $lastCode = $_SESSION["lastCode"];
    $lastRole = $_SESSION["lastRole"];
  }

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
     <div class="container text-light">
      <div class="row text-light">
        <div class="col-sm text-light">
          <?php  if ($_SESSION["userRole"] == "admin") {
            echo "<br><br><br>";
          echo "Generate Activation Code";
        }
          ?>
        </div>
        <div class="col-sm">
          <?php
          echo "<div class=\"alert alert-light center\" role=\"alert\">
            Welcome, {$userName} <br> Status: {$userRole}
          </div>";
           ?>

        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>
    <?php  if ($_SESSION["userRole"] == "admin") {
    echo "<div class=\"container\">
     <div class=\"row text-light\">
       <div class=\"col-sm\">
         <form action=\"includes/code.inc.php\" method=\"post\">
         <select select name=\"selectitem\" class=\"form-select form-select-sm\" aria-label=\".form-select-sm example\">
              <option selected=\"lua\">lua</option>
              <option value=\"beta\">beta</option>
            </select>

       </div>
       <div class=\"col-sm\">
         <button type=\"submit\" name=\"submit\" class=\"btn btn-success\">Submit</button>
       </div></form>";}
       if (isset($_SESSION["lastCode"])) {
         echo "Code created:&nbsp;";
         echo "{$lastCode}<br>Role:&nbsp;{$lastRole}";
       }
       ?>
       <div class="col-sm">
       </div>
     </div>
   </div>

  </body>
</html>
<?php  ?>
