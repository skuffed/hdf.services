<?php

function emptyInputSignup($username, $pw, $pwrepeat){
  $result;

  if(empty($username) || empty($pw) || empty($pwrepeat)){
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;

}

function invalidUID($username){
  $result;

  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  }
  else {
    $result = false;
  }

  return $result;

}


function pwMatch($pw, $pwrepeat){
  $result;

  if ($pw != $pwrepeat) {
    return true;
  }
  else {
    return false;
  }
}

function uidExists($conn, $username){
  $sql = "SELECT * FROM users WHERE userName = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close();
}

function checkCode($conn, $code){
  $sql = "SELECT * FROM codes WHERE code = ? AND used = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }
  $used = "false";
  mysqli_stmt_bind_param($stmt, "ss", $code, $used);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close();
}

function codeUsed($conn, $code){
  $sql = "UPDATE codes SET used = ? WHERE code = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }
  $used = "true";
  mysqli_stmt_bind_param($stmt, "ss", $used, $code);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function createCode($conn, $coderole){
  $sql = "INSERT INTO codes (code, codeRole, used) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }
  $acode = md5(uniqid());

  $used = "false";
  mysqli_stmt_bind_param($stmt, "sss", $acode, $coderole, $used);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
  return $acode;
}

function createUser($conn, $username, $pw, $role){
  $sql = "INSERT INTO users (userName, userPass, userRole) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  $hashedpw = password_hash($pw, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sss", $username, $hashedpw, $role);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../signup.php?error=none");
  exit();
}

function emptyInputLogin($name, $pw){
  $result;

  if(empty($name) || empty($pw)){
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;

}

function loginUser($conn, $name, $pw){
  $uidExists = uidExists($conn, $name, $name);

  if ($uidExists === false) {
    header("location: ../login.php?error=doesnotexist");
    exit();
  }

  $pwhashed = $uidExists["userPass"];
  $checkpw = password_verify($pw, $pwhashed);

  if ($checkpw === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }
  elseif ($checkpw === true) {
    session_start();
    $_SESSION["userName"] = $uidExists["userName"];
    $_SESSION["userRole"] = $uidExists["userRole"];

    header("location: ../index.php");
    exit();
  }

}

function getName($conn, $username){
  $sql = "SELECT usersName FROM users WHERE userName= ?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($resultData)) {

  }

    return $row[usersName];

}


function editName($conn, $usersID, $usersName){
  error_log($usersID);
  $sql = "UPDATE users SET usersName='$usersName' WHERE usersID='$usersID'";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usersName);
  mysqli_stmt_execute($stmt);


}
