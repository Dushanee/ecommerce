<?php 

$servername = "localhost";
$DBUserame  = "root";
$DBPassword = "";
$DBName     = "eventslab";

$conn = mysqli_connect($servername, $DBUserame, $DBPassword, $DBName);
  
   if($conn == TRUE){
       //echo 'DB connected';
   }else{
       echo 'DB not connected.<br>';
   }     
?>