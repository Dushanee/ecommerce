<?php

  require 'connection.php';

     if(isset($_POST['addpackage'])){

        session_start();
         $sp_id = $_SESSION['sp_id'];  
        

         $pack_name        = $_POST['pack_name'];
         $pack_location    = $_POST['pack_location'];
         $pack_address     = $_POST['pack_address'];
         $pack_description = $_POST['pack_description'];  //data to package table


        //  session_start();

         $_SESSION['pack_name'] = $pack_name;
         $_SESSION['pack_location'] = $pack_location;
         $_SESSION['pack_address'] = $pack_address;
         $_SESSION['pack_description'] = $pack_description;

        $option_name        = $_POST['option_name'];//option
        $type               = $_POST['type']; //option_type
        $capacity           = $_POST['capacity']; //venue_pack_option
        $option_description = $_POST['option_description'];//option
        $option_rate        = $_POST['option_rate'];//option
        
        
        $sql = "INSERT INTO packages(sp_id,pack_name, pack_location, pack_address, pack_description) VALUES ('$sp_id','$pack_name', '$pack_location', '$pack_address', '$pack_description')";

        $result = mysqli_query($connection,$sql);
        
        //print_r($result);
        //$sql = "INSERT INTO `option`(`option_name`, `type`, `capacity`, `option_description`, `option_rate`) VALUES ('$option_name', '$type', '$capacity', '$option_description', '$option_rate')";
        
        $sql1 = "SELECT pack_id FROM packages WHERE sp_id = '$sp_id'";
        $result1 = mysqli_query($connection,$sql1);
        if($result1 == true){
            if(mysqli_num_rows($result1)>0){
                while($row = mysqli_fetch_assoc($result1)){
                    $pack_id = $row['pack_id'];
                }
            }
        }
       


        $sql2 = "INSERT INTO options(pack_id,option_name,option_description,option_rate) VALUES ('$pack_id','$option_name','$option_description','$option_rate')";
        $result2 = mysqli_query($connection,$sql2);
    
        

     }
?>