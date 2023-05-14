<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../public/Service provider/css/common.css">
  <link rel="stylesheet" href="../service_provider/notification.css">
  <script type="text/javascript" src="../service_provider/notification.js" defer></script>
</head>

<body>
<div class="container" id="container">
  <div class="topbar">

    <div class="logo">
      <img src="../../../public/service provider/image/logo.png">
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
      <?php //echo $row['sp_name']; 
      ?>
    </h6>
  </div>

  <div class="sidebar">

    <ul>

      <li>
        <a href="dashboard.php">
          <i class="fa fa-th-large"></i>
          <div>Dashboard</div>
        </a>
      </li>

      <li>
        <a class="active" href="my_packages.php">
          <i class="fa fa-list-alt"></i>
          <div>My Packages</div>
        </a>
      </li>

      <li>
        <a href="my_order.php">
          <i class="fa fa-shopping-cart"></i>
          <div>My Orders</div>
        </a>
      </li>

      <li>
        <a href="calender.php">
          <i class="fa fa-calendar"></i>
          <div>Calendar</div>
        </a>
      </li>

      <li>
        <a href="notification.php">
          <i class="fa fa-envelope"></i>
          <div>Notifications</div>
        </a>
      </li>

      <li>
        <a href="help.php">
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

  <div class= "main">



  


    <?php


    require 'connection.php';

    session_start();

    $sp_id = $_SESSION['sp_id'];




    //echo $sp_id."<br>";

    // $sql = "SELECT receiverID, senderID, msg, date_time
    // FROM checkmsg 
    // INNER JOIN packages ON checkmsg.receiverID = packages.pack_id
    // WHERE (receiverID, senderID, date_time) IN 
    //     (SELECT receiverID, senderID, MAX(date_time) 
    //      FROM checkmsg 
    //      GROUP BY receiverID, senderID) AND packages.sp_id = $sp_id ORDER BY checkmsg.date_time DESC";

    // $sql = "SELECT senderID, receiverID, msg, date_time FROM checkmsg INNER JOIN ( SELECT pack_id FROM packages WHERE sp_id = $sp_id
    // ) AS p ON checkmsg.receiverID = p.pack_id 
    // WHERE receiverID = p.pack_id 
    // AND ID IN (
    //   SELECT MAX(ID) 
    //   FROM checkmsg 
    //   WHERE receiverID = p.pack_id
    //   GROUP BY senderID 
    // ) 
    // ORDER BY date_time DESC";

    $sql = "SELECT cm.senderID, cm.receiverID, cm.msg, cm.date_time
FROM checkmsg cm
INNER JOIN (
  SELECT pack_id
  FROM packages
  WHERE sp_id = $sp_id
) p ON (cm.senderID = p.pack_id OR cm.receiverID = p.pack_id)
WHERE cm.ID IN (
  SELECT MAX(ID)
  FROM checkmsg
  WHERE (senderID = p.pack_id OR receiverID = p.pack_id)
  GROUP BY CASE
    WHEN senderID = p.pack_id THEN receiverID
    ELSE senderID
  END
)
ORDER BY cm.date_time DESC";

    $result = mysqli_query($connection, $sql);

    $i = 0;

    if ($result == true) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $senderID = $row['senderID'];
          echo $senderID . "<br>";
          $receiverID = $row['receiverID'];
          echo $receiverID . "<br>";
          $msg = $row['msg'];
          //echo $msg."<br>";
          $dateTime = $row['date_time'];
          //echo $dateTime."<br>";

          $sql1 = "SELECT pack_id from packages WHERE sp_id = $sp_id";
          $result1 = mysqli_query($connection, $sql1);

          while ($row = mysqli_fetch_array($result1)) {

            $pack_id = $row['pack_id'];

            if ($senderID == $pack_id) {
              $picId = $receiverID;
            } else if ($receiverID == $pack_id) {
              $picId = $senderID;
            }
          }

          //echo $picId;

          $sql2 = "SELECT cust_pro_pic from customers where cust_id = $picId";
          $result2 = mysqli_query($connection, $sql2);

          if ($result2 == true) {
            if (mysqli_num_rows($result2)) {
              while ($row = mysqli_fetch_assoc($result2)) {
                $senderImg = $row["cust_pro_pic"];
              }
            }
          }


          $sql3 = "SELECT senderID,COUNT(MsgStatus) AS unReadCount FROM checkmsg WHERE receiverID = $receiverID AND MsgStatus = 'unread' AND senderID = $senderID GROUP BY senderID";
          //$sql1 = "SELECT senderID,COUNT(MsgStatus) AS unReadCount FROM checkmsg WHERE receiverID = $receiverID AND MsgStatus = 'unread' GROUP BY senderID";
          $result3 = mysqli_query($connection, $sql3);
          //var_dump($result1);

          //if($result1 == true){
          if (mysqli_num_rows($result3) > 0) {
            while ($row = mysqli_fetch_assoc($result3)) {
              $unreadMsgCount = $row["unReadCount"];
              //echo $unreadMsgCount;
            }
          } else {
            $unreadMsgCount = 0;
          }

          echo

          "<form method='POST' action='serviceProviderLiveChat/check5.php' class='notificationBox' id='notificationForm" . $i . "'>" .
            "<input type='hidden' id='senderID" . $i . "' name='senderID' value=" . $senderID . " readonly>" .
            "<input type='hidden' id='receiverID" . $i . "' name='receiverID' value=" . $receiverID . " readonly>" .
            "<input type='hidden' id='picID" . $i . "' name='picID' value=" . $picId . " readonly>" .
            "<img id='receiverImg' src='../../../public/customer/image/images1/ProfilePic/" . $senderImg . "'>" .
            "<input type='text' id='msg" . $i . "'" . "class='msg' value='" . $msg . "' name='msg' readonly>" .
            "<div class='countDateContainer'>" .
            "<div class='unreadMsg' id='unreadMsg" . $i . "'>" .
            "<p class='unreadMsgCount' id='unreadMsgCount" . $i . "'>" . $unreadMsgCount . "</p>" .
            "</div>" .
            "<input type='text' id='dateTime" . $i . "'" . "class='dateTime' name='dateTime' value=" . $dateTime . " readonly>" .
            "</div>" .
            "<input type='submit' class='sendmsg' id='sendmsg" . $i . "'" . "name='submit" . $i . "'>" .
            "</form>";

          $i++;
        }
        echo "<p id='ival'>$i<p>";
      }
      //}
    }


    ?>
  </div>
  </div>


</body>

</html>