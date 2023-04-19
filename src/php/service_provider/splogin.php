<?php
session_start();
include "connection.php";
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['sp_email']) && isset($_POST['sp_password'])) {



  $sp_email = validate($_POST['sp_email']);
  $sp_password = validate($_POST['sp_password']);

  if (empty($sp_email)) {
    header("Location: login.php?error= Email is Required");
    exit();
  } else if (empty($sp_password)) {
    header("Location: login.php?error=Password is Required");
    exit();
  } else {
    $sql = "SELECT * FROM service_providers WHERE sp_email='$sp_email' AND sp_password='$sp_password'";
    $result = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      die(mysqli_error($connection));
    } else {
      $row = mysqli_fetch_assoc($result);

      if ($row['sp_email'] === $sp_email && $row['sp_password'] === $sp_password) {

        $_SESSION['sp_email'] = $row['sp_email'];
        $_SESSION['sp_id'] = $row['sp_id'];
        header("Location: dashboard.php");
      } else {
        header("Location: login.php?error=Incorrect Email or Password");
      }
    }
  }
} else {
  header("Location: login.php");
  exit();
}

// $_SESSION['userLogin'] = "Loggedin";