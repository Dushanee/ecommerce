<?php
require_once('connection.php');
session_start();
if (!(isset($_SESSION['sp_email']) && isset($_SESSION['sp_name']) ))
{
    header("Location:splogin.php");
}

session_destroy();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    
</body>
</html>

<?php include('login.php'); ?>
