<?php
session_start();
//include ('connection.php');
require('connection.php');

if (
  isset($_POST['sp_email']) && isset($_POST['sp_name'])
  && isset($_POST['sp_password']) && isset($_POST['confirm_pass'])
) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //Forms' data
  $sp_email = validate($_POST['sp_email']);
  $sp_name = validate($_POST['sp_name']);
  $sp_password = validate($_POST['sp_password']);
  $confirm_pass = validate($_POST['confirm_pass']);
  

  $user_data = 'sp_name=' . $sp_name . '&sp_email=' . $sp_email;


  if (empty($sp_name)) {
    header("Location: register_page.php?error=User Name is required&$user_data");
    exit();
  } else if (empty($sp_password)) {
    header("Location: register_page.php?error=Password is required&$user_data");
    exit();
  } else if (empty($confirm_pass)) {
    header("Location: register_page.php?error=Re Password is required&$user_data");
    exit();
  } else if (empty($sp_email)) {
    header("Location: register_page.php?error=Email is required&$user_data");
    exit();
  } else if ($sp_password !== $confirm_pass) {
    header("Location: register_page.php?error=The confirmation password  does not match&$user_data");
    exit();
  } else {

    // hashing the password
    // $pass = md5($pass);

    $sql = "SELECT * FROM service_providers WHERE sp_email='$sp_email' ";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: register_page.php?error=The Email is taken try another&$user_data");
      exit();
    } else {
      $sql2 = "INSERT INTO service_providers (sp_email, sp_name, sp_password, confirm_pass) VALUES ('$sp_email', '$sp_name', '$sp_password', '$confirm_pass')";
      session_start();
      $_SESSION['sp_email'] = $sp_email;
      $result2 = mysqli_query($connection, $sql2);

      if ($result2) {
        $sp_id = mysqli_insert_id($connection);  // Get the last inserted ID
        $sql = "INSERT INTO service_provider_bank (sp_id) VALUES ('$sp_id')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
          header("Location: create_account.php?user_id=$sp_id");
          exit();
        } else {
          header("Location: register_page.php?error=unknown error occurred&$user_data");
          exit();
        }
      } else {
        header("Location: register_page.php?error=unknown error occurred&$user_data");
        exit();
      }
    }
  }
}

?>



<!DOCTYPE html>