<?php
  include_once 'header.php';

 ?>
 <body style="background-color:black;">
 <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link href="/css/signin.css" rel="stylesheet">
 <main class="form-signin">
   <form action="includes/signup.inc.php" method="post">


     <?php
       if (isset($_GET["status"])) {
         if ($_GET["status"] == "success") {
           echo "<p>Signup successful.</p>";
         }
         else{
           exit();
         }
       }

       if (isset($_GET["error"])) {
         if ($_GET["error"] == "emptyinput") {
           echo "<p>Fill in required fields!</p>";
         }
         else if ($_GET["error"] == "doesnotexist") {
           echo "<p>User does not exist.</p>";
         }
         else if ($_GET["error"] == "wronglogin") {
           echo "<h1 class=\"h6 mb-3 fw-normal\" style=\"color:red;\">Incorrect Password</h1>";
         }
       }

      ?>

      <div class="alert alert-light center" role="alert">
        <h1 class="h3 mb-3 fw-normal text-dark text-center">Please purchase the lua before creating an account</h1>
      </div>
     <div class="form-floating">
       <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username">
       <label for="floatingInput">Username</label>
     </div>
     <div class="form-floating">
       <input type="password" class="form-control" name="pw" id="floatingPassword" placeholder="Password">
       <label for="floatingPassword">Password</label>
     </div>
     <div class="form-floating">
       <input type="password" class="form-control" name="pwrepeat" id="floatingPassword2" placeholder="Password">
       <label for="floatingPassword2">Repeat Password</label>
     </div>
     <div class="form-floating">
       <input type="text" class="form-control" name="code" id="activation code" placeholder="activation code">
       <label for="activation code">Activation Code</label>
     </div>


     <br>

      <button id="loginb" onclick='document.getElementById("loginb").classList.add("spinner-border"); document.getElementById("loginb").innerHTML = ""; document.getElementById("loginb").classList.add("w-10"); document.getElementById("loginb").classList.remove("w-100");' class="w-100 btn btn-lg btn-success" type="submit" name="submit">Sign Up</button>


   </form>
  <footer class="pt-3 mt-4 text-muted border-top">
    <br><br><br>
    <p class="text-light text-center">activation code given at purchase</p>
 </main>

 </section>
</body>
