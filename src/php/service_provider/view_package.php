<?php

require_once('connection.php');

if (isset($_POST['viewshop'])) {
    $sp_id = $_POST['sp_id'];
    $pack_id = $_POST['pack_id'];

    echo $sp_id."<br>"; 
    echo $pack_id;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/my_orders.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    
</body>
</html>