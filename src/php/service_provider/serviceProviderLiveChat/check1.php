<?php

require 'DBH.php';

if(isset($_GET['data2']) && isset($_GET['data3'])){
    
    $senderID = $_GET['data2'];
    $receiverID = $_GET['data3'];



$sql = "SELECT * FROM checkmsg WHERE (senderID = $senderID AND receiverID = $receiverID) OR (senderID = $receiverID AND receiverID = $senderID)";
$result = mysqli_query($conn,$sql);

if($result == true){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
           $id = $row['ID'];
           $senderID = $row['senderID'];
           $receiverID = $row['receiverID'];
           $msg = $row['msg'];

           echo $id .'<brk>'.$senderID.'<brk>'.$receiverID.'<brk>'.$msg.'<brk>';
           //echo $id .' '.$senderID.' '.$receiverID.' '.$msg.' ';
        }
    }
  }            
}
?>