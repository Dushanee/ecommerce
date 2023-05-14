<?php

  if(isset($_GET["data1"]) && $_GET["data2"] && $_GET["data3"]){

    $viewingPage = $_GET["data1"];
    $senderID    = $_GET["data2"];
    $receiverID  = $_GET["data3"];

    //echo $viewingPage;
    //echo $senderID;
    //echo $receiverID;

    if($viewingPage == true){

    require "../connection.php";  

    $sql = "UPDATE checkmsg SET MsgStatus = 'read' WHERE receiverID = $senderID AND senderID = $receiverID";
    $result = mysqli_query($connection,$sql);

    }
  }


?>