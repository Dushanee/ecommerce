<?php


  if(isset($_GET['data2']) && isset($_GET['data3'])){ // get data from service provide notification.js to update status to read
     $senderID = $_GET["data2"];
     $receiverID = $_GET["data3"];

    require "../connection.php"; 

    echo $senderID."<br>";
    echo $receiverID;

    //$sql = "UPDATE checkmsg SET MsgStatus = 'read' WHERE receiverID = $receiverID AND senderID = $senderID";
    //$result = mysqli_query($connection,$sql);

    
    //var_dump($result);
  }

    



?>