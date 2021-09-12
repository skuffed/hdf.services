<?php

if (isset($_POST["submit"])) {

  $username = $_POST["username"];
  $pw = $_POST["pw"];
  $pwrepeat = $_POST["pwrepeat"];
  $code = $_POST["code"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($username, $pw, $pwrepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUID($username) !== false) {
    header("location: ../signup.php?error=invaliduid");
    exit();
  }
  if (pwMatch($pw, $pwrepeat) !== false) {
    header("location: ../signup.php?error=pwsdontmatch");
    exit();
  }
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
  }
  if (checkCode($conn, $code) !== false) {
    $userCode = checkCode($conn, $code);
    $used = $userCode["used"];
    $coderole = $userCode["codeRole"];
    error_log(print_r($used,true));
    if ($used == "false") {
      codeUsed($conn, $code);
      createUser($conn, $username, $pw, $coderole);
      }
    }
    if (checkCode($conn, $code) == false) {
      error_log(print_r($username,true));
      header("location: ../signup.php?error=codeused");
      exit();
      }
}
  else {
    header("location: ../signup.php");
    exit();
}
