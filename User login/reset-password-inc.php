<?php
$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "login";
// connect to the server and select database
$con = mysqli_connect($server, $user, $pass, $db);

  if(isset($_POST["submit"])) {


      $selector = $_POST["selector"];
      $validator = $_POST["validator"];
      $password = $_POST["pwd"];
      $passwordRepeat = $_POST["pwd-repeat"];

      if (empty($password) || empty($passwordRepeat)) {

          header("location: createNewPass.php?newpwd=empty");
          exit();
      } else if ($password != $passwordRepeat) {
          header("location: createNewPass.php?newpwd=pwdnotsame");
          exit();
      }

      $currentDate = date("U");


      $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "There was an error";
          exit();
      } else {
          mysqli_stmt_bind_param($stmt, "s", $selector);
          mysqli_stmt_execute($stmt);

          $result = mysqli_stmt_get_result($stmt);
          if (!$row = mysqli_fetch_assoc($result)) {
              echo "You need to re-submit your reset request.";
              exit();
          } else {

              $tokenBin = hex2bin($validator);
              $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

              if ($tokenCheck === false) {
                  echo "You need to re-submit your reset request";
                  exit();
              } elseif ($tokenCheck === true) {

                  $tokenEmail = $row['pwdResetEmail'];

                  $sql = "SELECT * FROM user WHERE emailUsers=?;";
                  $stmt = mysqli_stmt_init($con);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                      echo "There was an error";
                      exit();
                  } else {
                      mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      if (!$row = mysqli_fetch_assoc($result)) {
                          echo "There was an error";
                          exit();
                      } else {

                          $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
                          $stmt = mysqli_stmt_init($con);
                          if (!mysqli_stmt_prepare($stmt, $sql)) {
                              echo "There was an error";
                              exit();
                          } else {
                              $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                              mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                              mysqli_stmt_execute($stmt);

                              $sql = "DELETE * FROM pwdReset WHERE pwdResetEmaol=?";
                              $stmt = mysqli_stmt_init($con);
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                  echo "There was an error";
                                  exit();
                              } else {
                                  mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                  mysqli_stmt_execute($stmt);
                                  header("location: UserSignUp.php?newpwd=passwordupdated");


                              }

                          }
                      }
                  }

              } else {
                  header("login.php");
              }
          }
      }
  }
