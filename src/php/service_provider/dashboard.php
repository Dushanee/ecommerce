<?php
require_once('connection.php');
session_start();
if (!(isset($_SESSION['sp_email']) && isset($_SESSION['sp_id']))) {
    //header("Location:splogin.php");
}
$id = $_SESSION['sp_id'];
$sql = "SELECT * FROM service_providers WHERE sp_id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/common.css">
    <link rel="stylesheet" href="../../../public/css/new_dashboard.css">

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
    <div class="main">

        <div class="line">
            <h2>Hello <?php echo $row['sp_name']; ?> </h2>

            <?php
            if (($row['sp_type']) == 'venue') {
                echo "<a href='../../../public/html/venue_package.html'> <button>Add Your Package</button> </a>";
            }
            if (($row['sp_type']) == 'photo') {
                echo "<a href='../../../public/html/photo_package.html'> <button>Add Your Package</button> </a>";
            }
            if (($row['sp_type']) == 'sounds') {
                echo "<a href='../../../public/html/sound_and_light_package.html'> <button>Add Your Package</button> </a>";
            }
            if (($row['sp_type']) == 'cater') {
                echo "<a href='../../../public/html/catering_package.html'> <button>Add Your Package</button> </a>";
            }
            if (($row['sp_type']) == 'entertainment') {
                echo "<a href='../../../public/html/ent_package.html'> <button>Add Your Package</button> </a>";
            }
            if (($row['sp_type']) == 'deco') {
                echo "<a href='../../../public/html/deco_package.html'> <button>Add Your Package</button> </a>";
            }
            ?>
            <!-- <a href="../../../public/html/photo_package.html"> <button>Add Your Package</button> </a> -->
        </div>

        <h5>&nbsp &nbsp My Activity</h5>
        <div class="cards">
            <div class="card">
                <div class="icon-box">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="card-content">
                    <div class="number">024</div>
                    <div class="card-name">ongoing orders</div>
                </div>

            </div>

            <div class="card">
                <div class="icon-box">
                    <i class="fa fa-check-circle-o"></i>
                </div>
                <div class="card-content">
                    <div class="number">010</div>
                    <div class="card-name">Completed orders</div>
                </div>

            </div>

            <div class="card">
                <div class="icon-box">
                    <i class="fa fa-tasks"></i>
                </div>
                <div class="card-content">
                    <div class="number">20</div>
                    <div class="card-name">orders of the month</div>
                </div>

            </div>

            <div class="card">
                <div class="icon-box">
                    <i class="fa fa-money"></i>
                </div>
                <div class="card-content">
                    <div class="number">20k</div>
                    <div class="card-name">Income of the month</div>
                </div>

            </div>
        </div>

        <div class="ongoing-orders">
            <div class="ordertable">
                <div class="title">
                    <h3>ongoing-orders</h3>
                </div>
                <div class="order-details">
                    <ul class="details">
                        <li class="topic">Order number</li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">55</a></li>
                        <li><a href="#">85</a></li>
                        <li><a href="#">22</a></li>
                        <li><a href="#">21</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                    <ul class="details">
                        <li class="topic">Date</li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                        <li><a href="#">02 Jan 2021</a></li>
                    </ul>
                    <ul class="details">
                        <li class="topic">Customer</li>
                        <li><a href="#">Alex Doe</a></li>
                        <li><a href="#">David Mart</a></li>
                        <li><a href="#">Roe Parter</a></li>
                        <li><a href="#">Diana Penty</a></li>
                        <li><a href="#">Martin Paw</a></li>
                        <li><a href="#">Doe Alex</a></li>
                        <li><a href="#">Aiana Lexa</a></li>
                    </ul>

                    <ul class="details">
                        <li class="topic">Amount</li>
                        <li><a href="#">50 000/=</a></li>
                        <li><a href="#">25 000/=</a></li>
                        <li><a href="#">175 000/=</a></li>
                        <li><a href="#">45 000/=</a></li>
                        <li><a href="#">25 000/=</a></li>
                        <li><a href="#">10 000/=</a></li>
                        <li><a href="#">85 000/=</a></li>
                    </ul>

                    <ul class="details">
                        <li class="topic"></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                        <li><a href="my_order.php">view more</a></li>
                    </ul>

                </div>
            </div>
        </div>

    </div>



</body>

</html>

<?php //include('../../../public/html/new_dashboard.html'); 
?>