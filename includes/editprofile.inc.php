<?php

if (isset($_POST["submit"])) {

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  editName($conn, $usersID, 'bob');

}

else{
  header("location: ../login.php");
  exit();
}



 ?>
