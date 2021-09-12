<?php
  session_start();
  $userName = $_SESSION['userName'];
  $userRole = $_SESSION['userRole'];

  if (isset($memberOnly)) {
    if (empty($_SESSION['userName'])) {
      header('Location: index.php');
      exit;
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <meta name="theme-color" content="#7952b3">
    <title>DEFAULT</title>
  </head>
  <body>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .bg-success{
        font-size: .50em!important;
      }


    </style>

  </head>
  <body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
</svg>

<main>





  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php
        if (basename($_SERVER['PHP_SELF'] == "/index.php")){
            echo "<li><a href=\"index.php\" class=\"nav-link px-2 link-secondary btn disabled\">Home</a></li>";
        }
        else{
          echo "<li><a href=\"index.php\" class=\"nav-link px-2 link-light\">Home</a></li>";
        }
        if (isset($_SESSION["usersuid"])) {
          if (basename($_SERVER['PHP_SELF'] == "/profile.php")){
              echo "<li><a href=\"profile.php\" class=\"nav-link px-2 link-secondary btn disabled\">Profile <sup><span class=\"badge bg-success\">NEW</span></sup></a></li>";
          }
          else{
            echo "<li><a href=\"profile.php\" class=\"nav-link px-2 link-light\">Profile </a></li>";
          }
        }
        if (basename($_SERVER['PHP_SELF'] == "/store.php")){
            echo "<li><a href=\"store.php\" class=\"nav-link px-2 link-secondary btn disabled\">Store </a></li>";
        }
        else{
          echo "<li><a href=\"store.php\" class=\"nav-link px-2 link-light\">Store </a></li>";
        }
        if (basename($_SERVER['PHP_SELF'] == "/features.php")){
            echo "<li><a href=\"features.php\" class=\"nav-link px-2 link-secondary btn disabled\">Features</a></li>";
        }
        else{
          echo "<li><a href=\"features.php\" class=\"nav-link px-2 link-light\">Features</a></li>";
        }
        if (basename($_SERVER['PHP_SELF'] == "/update.php")){
            echo "<li><a href=\"update.php\" class=\"nav-link px-2 link-secondary btn disabled\">Updates <sup><span class=\"badge bg-success\">v1.0</span></sup></a></li>";
        }
        else{
          echo "<li><a href=\"update.php\" class=\"nav-link px-2 link-light\">Updates <sup><span class=\"badge bg-success\">v1.0</span></sup></a></li>";
        }


         ?>

      </ul>

      <div class="col-md-3 text-end">
        <img src="img/hdf.png" alt="HDF.SERVICES"></img>

      </div>


      <div class="col-md-4 text-end">
        <?php
          if (isset($_SESSION["userName"])) {
            if (basename($_SERVER['PHP_SELF'] == "/profile.php")) {
              echo "<div class=\"btn-group\"> <a href='profile.php' class='logoutbutton' style=\"pointer-events: none\"><button type=\"button\" class=\"btn btn-outline-success\" disabled>Profile</button></a>";
              echo "<p>&nbsp;</p>";
              echo "<a href='../includes/logout.inc.php' class='logoutbutton'><button type=\"button\" class=\"btn btn-success\">Logout</button></a></div>";

             }
             else {
               echo "<div class=\"btn-group\"> <a href='profile.php' class='logoutbutton'><button type=\"button\" class=\"btn btn-outline-success\">Profile</button></a>";
               echo "<p>&nbsp;</p>";
               echo "<a href='../includes/logout.inc.php' class='logoutbutton'><button type=\"button\" class=\"btn btn-success\">Logout</button></a></div>";

             }
          }
          else {
            if (basename($_SERVER['PHP_SELF'] == "/login.php")){
              echo "<a href='login.php' class='loginbutton' style=\"pointer-events: none\"><button type=\"button\" class=\"btn btn-outline-success me-2\" disabled>Login</button></a>";
              echo "<a href='signup.php' class='signupbutton'><button type=\"button\" class=\"btn btn-success\">Sign up</button></a>";

            }
            elseif (basename($_SERVER['PHP_SELF'] == "/signup.php")) {
              echo "<a href='login.php' class='loginbutton'><button type=\"button\" class=\"btn btn-outline-success me-2\">Login     </button></a>";
              echo "<a href='signup.php' class='signupbutton' style=\"pointer-events: none\"><button type=\"button\" class=\"btn btn-success\" disabled>Sign up</button></a>";

             }
            else{
            echo "<a href='login.php' class='loginbutton'><button type=\"button\" class=\"btn btn-outline-success me-2\">Login</button></a>";
            echo "<a href='signup.php' class='signupbutton'><button type=\"button\" class=\"btn btn-success\">Sign up</button></a>";
            }
          }
         ?>

      </div>
    </header>
  </div>

</main>



  </body>
</html>
