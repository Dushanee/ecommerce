
	<?php
		if (isset($_GET['data1']) && isset($_GET['data2']) && isset($_GET['data3'])) {
			$msg = $_GET['data1'];
			$senderID = $_GET['data2'];
			$receiverID = $_GET['data3'];

			echo "msg: " . $msg . "<br>";
			echo "senderID: " . $senderID . "<br>";
			echo "ReceiverID: " . $receiverID . "<br>";

		} else {
			echo "No data received";
		}
 
        require 'DBH.php';
		$sql = "SELECT (EXISTS( SELECT * FROM chat WHERE senderID = $senderID AND receiverID = $receiverID)) AS 'Exist'";
		$result = mysqli_query($conn,$sql);

		if($result == true){
		  if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$exist = $row['Exist'];
				echo $exist;
			}
		  }	
		}

		if($exist == 0){

        $sql = "INSERT INTO chat(senderID,receiverID) VALUES($senderID,$receiverID)";
		$result = mysqli_query($conn,$sql);
		}

		$sql = "SELECT chatID FROM chat WHERE senderID = $senderID and receiverID = $receiverID";
		$result = mysqli_query($conn,$sql);

		if($result == true){
		  if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$chatID = $row['chatID'];
				echo $chatID;
			}
		  }	
		}
        
		//echo "hi";

		$status = "unread";

        $sql = "INSERT INTO checkmsg(chatID,senderID,receiverID,msg,MsgStatus) VALUES ('$chatID','$senderID','$receiverID','$msg','$status')";
        $result = mysqli_query($conn,$sql);

	?>

