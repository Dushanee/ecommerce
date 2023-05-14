<?php

require_once('connection.php');
session_start();
if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id = $_SESSION['sp_id'];

   

    $sql2 = "SELECT * FROM orders 
    INNER JOIN order_details ON orders.order_id = order_details.order_id
    INNER JOIN customers ON orders.cust_id = customers.cust_id
    INNER JOIN packages ON packages.pack_id = order_details.pack_id 
    INNER JOIN options ON options.option_id = order_details.option_id 
    INNER JOIN service_providers ON service_providers.sp_id = packages.sp_id
    WHERE packages.sp_id = $sp_id";

    $result2 = mysqli_query($connection,$sql2);


 

    if($result2 == true) {
        if(mysqli_num_rows($result2) > 0) {
        while($row2 = mysqli_fetch_assoc($result2)) {

            $order_id = $row2["order_id"];
            $order_date = $row2["order_date"];
            $time = $row2["time"];
            $event_type = $row2["event_type"];
            $event_location = $row2["event_location"];
            $price = $row2["price"];
            $quantity = $row2["quantity"];
            $cust_lname = $row2["cust_lname"];
            $phone_number = $row2["phone_number"];
            $pack_name = $row2["pack_name"];
            $option_name = $row2["option_name"];
            $sp_name = $row2["sp_name"];


        }
    } 
    
    else {
        echo "No results found";
    }

    mysqli_close($connection);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/my_orders.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <img src="../../../public/service provider/image/logo.png" alt="logo">

            </div>


            <div class="search">
                <input type="text" id="search" placeholder="search here">
                <label for="search"><i class="fa fa-search"></i></label>
            </div>
            <i class="fa fa-bell"></i>

            <div class="user">
                <a href="new_profile.php"><img src="../../../public/service provider/image/propic.jpg" alt="propic"> </a>

            </div>

            <h6> <?php echo $sp_name; ?>  </h6>
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
                    <a href="my_packages.php">
                        <i class="fa fa-list-alt"></i>
                        <div>My Packages</div>
                    </a>
                </li>

                <li>
                    <a class="active" href="my_order.php">
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
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i>
                        <div>Log out</div>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main">
        <div class="select-menu">
            
            
                <div class="title">
                    <h3>My Orders</h3>
                </div>
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer name</th>
                        <th>Customer contact</th>
                        <th>Event type</th>
                        <th>Event Date and time</th>
                        <th>Event location</th>
                        <th>Package name </th>
                        <th>option name</th>
                        <th>option type </th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Order Status </th>
                    </tr>
                    <tr>
                       
                        <td><?php echo $order_id; ?></td>
                        <td><?php echo $cust_lname; ?></td>
                        <td><?php echo $phone_number; ?></td>
                        <td><?php echo $event_type; ?></td>
                        <td><?php echo $order_date; ?><?php echo $time; ?> </td>
                        <td><?php echo $event_location; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $pack_name; ?></td>
                        <td><?php echo $option_name; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $price; ?></td>
                        <td class ="ongoing"><b><?php

$order_date = "";

if (strtotime($order_date) > strtotime('today')) {
    echo "Ongoing";
} else {
    echo "Completed";
}
?></b></td>
                    </tr>
                   
                </table>

            </ul>
        </div>
        
       
         
         
    </div>


</body>
</html>
