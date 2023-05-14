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
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/calender.css">
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/common.css">
    <script src="../../../public/service provider/js/calender.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
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

            <h6> <?php echo $row['sp_name']; ?> </h6>
        </div>

        <div class="sidebar">

            <ul>

                <li>
                    <a class="active" href="dashboard.php">
                        <i class="fa fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="my_packages.php">
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
                        <div>Messages</div>
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
                    <a href="../../php/service_provider/logout.php">
                        <i class="fa fa-sign-out"></i>
                        <div>Log out</div>
                    </a>
                </li>


            </ul>
        </div>
    </div>
<div class="main">

<div class="box">
    <div class="calendar">
        
        <div class="calendar-header">
            <span class="month-picker" id="month-picker"> May </span>
            <div class="year-picker" id="year-picker">
                <span class="year-change" id="pre-year">
                    <pre><</pre>
                </span>
                <span id="year">2020 </span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>

        <div class="calendar-body">
            <div class="calendar-week-days">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days">
            </div>
        </div>

        
        <div class="calendar-footer">

        <div class="date-time-formate">
</hr>
            <div class="day-text-formate">TODAY</div>
            <div class="date-time-value">
                <div class="time-formate">02:51:20</div>
                <div class="date-formate">23 - july - 2022</div>
                
            </div>
            
            
            <div class="month-list"></div>

        </div>
        </div>
        
    </div>
</div>

</div>

    
</body>
</html>

<?php //include(''); ?>