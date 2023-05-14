<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../../../public/service provider/css/common.css">
<link rel="stylesheet" href="../../../../public/service provider/css/notification.css">
<script type="text/javascript" src="../notification.js" defer></script>
</head>

<body>
   <div class="container">
        <div class="topbar">

            <div class="logo">
                <img src="../../../public/image/logo.png">
            </div>


            <div class="search">
                <input type="text" id="search" placeholder="search here">
                <label for="search"><i class="fa fa-search"></i></label>
            </div>
            <i class="fa fa-bell"></i>

            <div class="user">
                <a href="new_profile.php"><img src="../../../public/image/propic.jpg" alt="propic"> </a>

            </div>

            <h6>
                <?php //echo $row['sp_name']; ?>
            </h6>
        </div>

        <div class="sidebar">

            <ul>

                <li>
                    <a  href="../dashboard.php">
                        <i class="fa fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>

                <li>
                    <a  href="../my_packages.php">
                        <i class="fa fa-list-alt"></i>
                        <div>My Packages</div>
                    </a>
                </li>

                <li>
                    <a href="../my_order.php">
                        <i class="fa fa-shopping-cart"></i>
                        <div>My Orders</div>
                    </a>
                </li>

                <li>
                    <a href="../calender.php">
                        <i class="fa fa-calendar"></i>
                        <div>Calendar</div>
                    </a>
                </li>

                <li>
                    <a class="active" href="../notification.php">
                        <i class="fa fa-envelope"></i>
                        <div>Notifications</div>
                    </a>
                </li>

                <li>
                    <a href="../help.php">
                        <i class="fa fa-volume-control-phone"></i>
                        <div>Help</div>
                    </a>
                </li>
                <br><br><br>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i>
                        <div>Log out</div>
                    </a>
                </li>


            </ul>
        </div>
    </div>

<?php

     
if(isset($_POST["senderID"]) && isset($_POST["receiverID"])){
  $senderID = $_POST["senderID"];
  //echo $senderID."<br>";
  $receiverID = $_POST["receiverID"];  
  //echo $receiverID."<br>";
  $cust_id = $_POST["picID"];
}
require '../connection.php';

$sql = "SELECT cust_fname, cust_pro_pic from customers WHERE cust_id = $cust_id";
$result = mysqli_query($connection,$sql);

if($result == true){
  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
      $custName = $row['cust_fname'];
      $CustProPic = $row['cust_pro_pic'];
    }
  }
}

?>

<div class = "main">
<div id="msgbox">
<section class="msger">
<div class="msger-header"> 
  <img class="msg-img" src="../../../../public/customer/image/images1/ProfilePic/<?php echo $CustProPic ?>">
  <p class="msger-header-title"><b><?php echo $custName ?></b></p>
 </div>

 <div id ="messagebox">



  <p id="receiverID"><?php echo $receiverID ?></p>
  <p id="senderID"><?php echo $senderID ?></p>

</div>

 <form class="msger-inputarea">
  <input type="text" class="msger-input" placeholder="Enter your message..." name="msg" id="msg">
  <button class="msger-send-btn" id="sendMsg" onclick="sendData()">Send </button>
 </form>
</section>
</div>
</div>




<script>

      function sendData(){  //send data to database

        var msg = document.getElementById("msg").value;
        var senderID = document.getElementById("senderID").innerHTML;
        var recevierID = document.getElementById("recevierID").innerHTML;

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "check3.php?data1="+msg+"&"+"data2="+senderID+"&"+"data3="+recevierID, false);
        xhr.onreadystatechange = function() {
          if(xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
          }
        }
        xhr.send();

        document.getElementById("msg").value = "";
      }
       

      var sendMsg = document.getElementById("sendMsg");
      var msgbox = document.getElementById("msgbox");

      sendMsg.addEventListener('click', function(){  //bring scroll bar to bottom after sending message
        setTimeout(function() {
          msgbox.scrollTo({ top: msgbox.scrollHeight, behavior: 'smooth' });
        },1000)
      })
      
      function passmsg() {//get data from database and show message

         
        var senderID = document.getElementById("senderID").innerHTML;
        //console.log(senderID);
        var recevierID = document.getElementById("recevierID").innerHTML;
        //console.log(recevierID);

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "check1.php?data2="+senderID+"&"+"data3="+recevierID, false);
        xmlhttp.send(null);

        let responseArray = xmlhttp.responseText.split('<brk>');
        //console.log(responseArray);

        if (responseArray.length > 1) { // check if there is data to show

          arrlength = responseArray.length;
          numofdata = (arrlength - 1) / 4;

          var ArrsenderID = 1;
          var msg = 3;
          var fieldcount = 0;
          var msgbox = document.getElementById('messagebox');

          var senderID   = document.getElementById("senderID").innerHTML;
          //console.log(senderID);
          var recevierID = document.getElementById("recevierID").innerHTML;
          //console.log(recevierID);

        for (var i = 0; i < numofdata; i++) {

          if (responseArray[ArrsenderID] == senderID) {
           if (!document.getElementById(responseArray[fieldcount])) { // check if element already exists
            var msgbx1 = document.createElement("div");
            msgbx1.id = responseArray[fieldcount];
            msgbx1.classList.add("messagebox","darker", "msg-bubble");
            msgbox.appendChild(msgbx1);
        }
        document.getElementById(responseArray[fieldcount]).innerHTML = responseArray[msg];
       }

        if (responseArray[ArrsenderID] == recevierID) {
         if (!document.getElementById(responseArray[fieldcount])) { // check if element already exists
          var msgbx2 = document.createElement("div");
          msgbx2.id = responseArray[fieldcount];
          msgbx2.classList.add("messagebox", "right-msg", "msg-bubble");
          msgbox.appendChild(msgbx2);
         }
        document.getElementById(responseArray[fieldcount]).innerHTML = responseArray[msg];
        }
        fieldcount = fieldcount + 4;
        ArrsenderID = ArrsenderID + 4;
        msg = msg + 4;
       }
      }
     }

passmsg();


setInterval(function () {
  passmsg();
}, 1000);

     
      function updateReadList(){
        
        var senderID = document.getElementById("senderID").innerHTML;
        var recevierID = document.getElementById("recevierID").innerHTML;
  
        //console.log(senderID);
        //console.log(recevierID);
        var pagePath = window.location.pathname;
        //console.log(pagePath);

        var check = pagePath.includes("check5.php");
        //console.log(check);
        
        if(check == true && senderID.length > 0 && recevierID.length > 0) {
          //console.log("inside loop");
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "check4.php?data1="+check+"&"+"data2="+senderID+"&"+"data3="+recevierID, false);
          xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
              //console.log(xhr.responseText);
           }
          }
          xhr.send();
         }

      }
      
       updateReadList();

setInterval(function () {
  updateReadList();
}, 1000);
     
    
</script>

</body>
</html>
