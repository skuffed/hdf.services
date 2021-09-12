<?php
include_once '../header.php';
if (isset($_POST["submit"])) {

  $coderole = $_POST["selectitem"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $code = createCode($conn, $coderole);
  $_SESSION["lastCode"] = $code;
  $_SESSION["lastRole"] = $coderole;
  error_log(print_r($_SESSION,true));
  header("location: ../profile.php");
  exit();
}

else{
  header("location: ../profile.php?=error");
  exit();
}
