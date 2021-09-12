<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $pw = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputLogin($name, $pw) !== false){
    header("location: ../login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $name, $pw);
}

else{
  header("location: ../login.php");
  exit();
}
