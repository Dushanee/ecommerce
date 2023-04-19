<?php

require_once('connection.php');
session_start();
if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id = $_SESSION['sp_id'];

    $sql = "SELECT * FROM `service_provider_bank` WHERE sp_id = '$sp_id';";

    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql2 = "SELECT * FROM `service_providers` WHERE sp_id = '$sp_id';";
    $result2 = mysqli_query($connection, $sql2);
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
    <link rel="stylesheet" href="../../../public/css/update_profile.css">

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

            <h6>
                <?php echo $row2['sp_name']; ?>
            </h6>
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



        <center> <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle"></center>



        <div class="profile_details">
            <form action="profile_update_check.php" method="post">
                <fieldset>
                    <legend>Personal</legend>
                    <label for="field1"><span>Name </span><input class="input-field" name="sp_name" value=" <?php echo $row2['sp_name'];?>" /></label>
                    <label for="field1"><span>Email </span><input class="input-field" name="sp_email" value="<?php echo $_SESSION['sp_email'];?>" /></label>
                </fieldset>

                <fieldset>
                    <legend>Business Detials</legend>
                    <label for="field1"><span>Business Name </span><input class="input-field" name="business_name" value="<?php echo $row2['business_name'];?>" /></label>
                    <label for="field1"><span>Business Type</span><input class="input-field" name="sp_type" value="<?php echo $row2['sp_type'];?>" /></label>
                    <label for="field1"><span>Contact Number </span><input class="input-field" name="contact_num" value="<?php echo $row2['contact_num'];?>" /></label>
                    <label for="field1"><span>Alt Contact Number </span><input class="input-field" name="alt_contact_num" value="<?php echo $row2['alt_contact_num'];?>" /></label>
                    <label for="field1"><span>City  </span><input class="input-field" name="sp_city" value="<?php echo $row2['sp_city'];?>" /></label>
                    <label for="field1"><span>Business Address </span><input class="input-field" name="business_address" value="<?php echo $row2['business_address'];?>" /></label>

                </fieldset>

                <fieldset>
                    <legend>Personal</legend>
                    <label for="field1"><span>Bank Holder Name </span><input class="input-field" name="holder_name" value="<?php echo $row['holder_name'];?> " /></label>
                    <label for="field1"><span>Bank Name </span><input class="input-field" name="bank" value="<?php echo $row['bank'];?>" /></label>
                    <label for="field1"><span>Branch </span><input class="input-field" name="branch" value="<?php echo $row['branch'];?>" /></label>
                    <label for="field1"><span>Account Number </span><input class="input-field" name="account_no" value="<?php echo $row['account_no'];?>" /></label>

                </fieldset>


                <input type="submit" name="update" value="Update" class="btn">

            </form>
        </div>


    </div>






</body>

</html>