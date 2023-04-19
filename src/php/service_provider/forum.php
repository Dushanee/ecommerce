<?php

require_once('connection.php');
session_start();
if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id=$_SESSION['sp_id'];

    $sql="SELECT * FROM `service_providers` WHERE sp_id = '$sp_id';";
    $result=mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/forum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    
</body>
</html>

<?php include('../../../public/html/forum.html'); ?>