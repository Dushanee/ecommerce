<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/service provider/css/view_pack.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


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
                    <a href="new_profile.php"><img src="../../../public/service provider/image/propic.jpg" alt="propic"> </a>

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

        <?php



        echo '<div class="main">';

        require_once('connection.php');

        if (isset($_POST['viewshop'])) {
            $sp_id = $_POST['sp_id'];
            $pack_id = $_POST['pack_id'];
        }

        $sql = "SELECT * FROM packages  WHERE sp_id = $sp_id AND pack_id = $pack_id";
        $result = mysqli_query($connection, $sql);


        if ($result == true) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $pack_id = $row['pack_id'];
                    $pack_name = $row['pack_name'];
                    $pack_description = $row['pack_description'];
                    $pack_location = $row['pack_location'];
                    $pack_address = $row['pack_address'];
                    $packImage = $row['packImage'];
                    $packageRate1 = $row['packageRate1'];
                    $packageRate2 = $row['packageRate2'];
                    $packageRate3 = $row['packageRate3'];
                    $packageRate4 = $row['packageRate4'];
                    $packageRate5 = $row['packageRate5'];
                }
            }
        }
        


        echo '<h2>Pack Details</h2>';
        echo'<div class="maincard">';
        echo'<div class="cardl">';
        echo '<table>';
        echo '<tr><th>Pack ID</th><td>' . $pack_id . '</td></tr>';
        echo '<tr><th>Pack Name</th><td>' . $pack_name . '</td></tr>';
        echo '<tr><th>Location</th><td>' . $pack_location . '</td></tr>';
        echo '<tr><th>Address</th><td>' . $pack_address . '</td></tr>';
        echo '<tr><th>Description</th><td>' . $pack_description . '</td></tr>';
        echo '</table>';
        echo '</div>';
        echo'<div class="cardr">';
        echo "<img src='../../../public/service provider/image/packageImage/".$packImage."' alt='Avatar'>";
        echo '</div>';
        echo '</div>';

        // $sql2 = "SELECT * FROM options 
        // INNER JOIN option_type ON options.option_id = option_type.option_id 
        // INNER JOIN venue_pack_options ON venue_pack_options.option_id = option_type.option_id 
        // WHERE packages.pack_id = $pack_id";
        // $result2 = mysqli_query($connection, $sql);


        // if ($result2 == true) {
        //     if (mysqli_num_rows($result2) > 0) {
        //         while ($row2 = mysqli_fetch_assoc($result2)) {
        //             $option_id = $row['option_id'];
        //         }
        //     }
        // }
        
       echo'<br>';





        $packages = "SELECT * FROM options WHERE pack_id = $pack_id ";
        $packages1 = mysqli_query($connection, $packages);

        if ($packages1 == true) {
            if (mysqli_num_rows($packages1) > 0) {
                echo'<div class="optioncard">';
                echo '<h2>Option Details</h2>';
                while ($row = mysqli_fetch_assoc($packages1)) {

                    $packageRate1 = $row['packageRate1'];
                    $packageRate2 = $row['packageRate2'];
                    $packageRate3 = $row['packageRate3'];
                    $packageRate4 = $row['packageRate4'];
                echo '<div class="details">';
                    echo $row['option_name'] . "<br>";
                    echo $row['option_description'] . "<br>";
                    echo $row['option_rate'] . "<br>";

                


                echo '</div>';
                echo '<div class="right-side">';
                echo "<img src='../../../public/service provider/image/SPOptionImage/".$optionPic1."' alt='Avatar'>";
                echo "<img src='../../../public/service provider/image/SPOptionImage/".$optionPic2."' alt='Avatar'>";
                echo '</div>';
                echo '<div class="left-side">';
                echo "<img src='../../../public/service provider/image/SPOptionImage/".$optionPic2."' alt='Avatar'>";
                echo "<img src='../../../public/service provider/image/SPOptionImage/".$optionPic2."' alt='Avatar'>";
                echo '</div>';
                }
                echo'</div>';
            }
        }




        
        ?>








    </body>

</html>