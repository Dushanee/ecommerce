<?php

require_once('connection.php');
session_start();
if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id=$_SESSION['sp_id'];
    
    $sql="SELECT * FROM `service_provider_bank` WHERE sp_id = '$sp_id';";

    $result=mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql2="SELECT * FROM `service_providers` WHERE sp_id = '$sp_id';";
    $result2=mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../../../public/css/common.css">
    <link rel="stylesheet" href="../../../public/css/new_profile.css">

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
                <a href="profile.php"><img src="../../../public/image/propic.jpg" alt="propic"> </a>

            </div>

            <h6> <?php echo $row2['sp_name']; ?> </h6>
        </div>

        <div class="sidebar">

            <ul>

                <li>
                    <a  href="dashboard.php">
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
                    <a href="settings.php">
                        <i class="fa fa-cog"></i>
                        <div>Settings</div>
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

        

        <center>    <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle"></center>

       

        <div class="profile_details">
            <form>
                <fieldset>
                    <legend>Personal</legend>
                  
                    <label for="field1"><span>Service provider ID  </span>
                    <table>
                        <tr><td><?php echo $_SESSION['sp_id'];?></td></tr>
                    </table>
                    <label for="field1"><span>Name </span>
                    <table>
                        <tr><td><?php echo $row2['sp_name'];?></td></tr>
                    </table>
                    <label for="field1"><span>Email </span>
                    <table>
                        <tr><td><?php echo $_SESSION['sp_email'];?></td></tr>
                    </table>
                </fieldset>

                <fieldset>
                    <legend>Business Details</legend>
                    <label for="field1"><span>Bussiness Name </span>
                    <table>
                        <tr><td><?php echo $row2['business_name'];?></td></tr>
                    </table>
                    <label for="field1"><span>Business Type </span>
                    <table>
                        <tr><td><?php echo $row2['sp_type'];?></td></tr>
                    </table>
                    <label for="field1"><span>Telephone Number</span>
                    <table>
                        <tr><td><?php echo $row2['contact_num'];?></td></tr>
                    </table>
                    <label for="field1"><span>Alt Telephone Number </span>
                    <table>
                        <tr><td><?php echo $row2['alt_contact_num'];?></td></tr>
                    </table>
                    <label for="field1"><span>City</span>
                    <table>
                        <tr><td><?php echo $row2['sp_city'];?></td></tr>
                    </table>
                    <label for="field1"><span>Business Address</span>
                    <table>
                        <tr><td><?php echo $row2['business_address'];?></td></tr>
                    </table>
                    
                </fieldset>

                <fieldset>
                    <legend>Bank Account Details</legend>
                 
                    <label for="field1"><span>Account Holder's Name </span>
                    <table>
                        <tr><td><?php echo $row['holder_name'];?></td></tr>
                    </table>
                    <label for="field1"><span>Bank Name </span>
                    <table>
                        <tr><td><?php echo $row['bank'];?></td></tr>
                    </table>
                    <label for="field1"><span>Branch </span>
                    <table>
                        <tr><td><?php echo $row['branch'];?></td></tr>
                    </table>
                    <label for="field1"><span>Account number </span>
                    <table>
                        <tr><td><?php echo $row['account_no'];?></td></tr>
                    </table>
                </fieldset>


                <input type="button" onclick="window.location.href='update_profile.php';" name="update" value="Update" class="update">

            </form>
        </div>


    </div>






</body>

</html>