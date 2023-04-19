
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/my_packages.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <a  href="dashboard.php">
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

echo '<div class="wrapper1">';

require_once('connection.php');
session_start();
if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id=$_SESSION['sp_id'];

    $sql="SELECT * FROM `service_providers` WHERE sp_id = '$sp_id'";

    $result=mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql2="SELECT * FROM `packages` WHERE sp_id = '$sp_id'";
    $result2=mysqli_query($connection, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    if($result2 == true) {
     if (mysqli_num_rows($result2)>0){
        while($row = mysqli_fetch_assoc($result2)){
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

            //echo $pack_id."</br>";

            if($packageRate1 == "" && $packageRate2 == "" && $packageRate3 == "" && $packageRate4 == "" && $packageRate5 == ""){
                $packRatingImage = "ranking0.jpg";
             }else{
                $packRatingCount = (1*$packageRate1 + 2*$packageRate2 + 3*$packageRate3 + 4*$packageRate4 + 5*$packageRate5)/($packageRate1 + $packageRate2 + $packageRate3 + $packageRate4 + $packageRate5);

                $packRatingCount = round($packRatingCount,1);

                if($packRatingCount >= 0 && $packRatingCount <= 0.2){
                  $packRatingImage = "ranking0.jpg";
                }elseif($packRatingCount >= 0.3 && $packRatingCount <= 0.7){
                  $packRatingImage = "ranking0.5.jpg";
                }elseif($packRatingCount >= 0.8 && $packRatingCount <= 1.2){
                  $packRatingImage = "ranking1.jpg";
                }elseif($packRatingCount >= 1.3 && $packRatingCount <= 1.7){
                  $packRatingImage = "ranking1.5.jpg";
                }elseif($packRatingCount >= 1.8 && $packRatingCount <= 2.2){
                  $packRatingImage = "ranking2.jpg";
                }elseif($packRatingCount >= 2.3 && $packRatingCount <= 2.7){
                  $packRatingImage = "ranking2.5.jpg";
                }elseif($packRatingCount >= 2.8 && $packRatingCount <= 3.2){
                  $packRatingImage = "ranking3.jpg";
                }elseif($packRatingCount >= 3.3 && $packRatingCount <= 3.7){
                  $packRatingImage = "ranking3.5.jpg";
                }elseif($packRatingCount >= 3.8 && $packRatingCount <= 4.2){
                  $packRatingImage = "ranking4.jpg";
                }elseif($packRatingCount >= 4.3 && $packRatingCount <= 4.7){
                  $packRatingImage = "ranking4.5.jpg";
                }elseif($packRatingCount >= 1.7 && $packRatingCount <= 5){
                  $packRatingImage = "ranking5.jpg";
                }
             }
            //  "<img id='locationImg'"." src='../../../../public/customer/image/images1/location_district_30px.png'>".
             echo 
         
                       "<div class='card'>".
                       
                         "<img id='accountImg'"."src='../../../public/image/packageImage/".$packImage."' alt='Avatar'>".
                         "<div class='businessName'>".
                         "<h4><b>".$pack_name."</b></h4>".
                         "</div>".
                         "<div class='container1'>".
                          
                         "<p>".$pack_location."</p>".
                         "<img id='ratingImg'"."src=../../../public/image/rating/".$packRatingImage.">".
               
                         "<form action='view_package.php' method='POST'>".
                         "<input type='hidden' name='sp_id' value=".$sp_id." />".
                         "<input type='hidden' name='pack_id' value=".$pack_id." />".
                        // "<input type='hidden' name='min_option_id' value=".$min_option_id." />".
                         "<input type='submit' name='viewshop' id='viewshop' value='view'>".
                          "<span id='backgroundSubmit'></span>".
                         "</form>".            
                         "</div>".
                        "</div>";
        }
     }
    }
 
}
?>


</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/my_packages.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <a  href="dashboard.php">
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
    <div class="main">

        <h2>My packages</h2>
        <div class="gigcontainer">
            <div class="box">
                
                <div class="easy">
                    <div class="name_package"><?php //echo $row2['pack_name'];?></div>
                    <p><b><?php //echo $row2['pack_location'];?></b></p>


                    <p>
                    <?php //echo $row2['pack_description'];?>
                   
                    </p>
                    <br>
                    <hr>
                    <div class="options">
                    <h4>Options</h4>
                    <table>
                        <tr>
                            <td>
                                Option name 
                            </td>
                            <td>
                                hall1
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Option type 
                            </td>
                            <td>
                                hall1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Description 
                            </td>
                            <td>
                                hall1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Price 
                            </td>
                            <td>
                                hall1
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>
                                <div class="image">
                                    <img src="../../public/image/propic.jpg">    
                                </div> 
                            </th>
                            <th>
                                <div class="image">
                                    <img src="../../public/image/hall1.jpg">    
                                </div> 
                            </th>
                        </tr>
                    </table>
                    
                    
                
                    
                </div>
                    <div class="btns">
                        
                        <button>Edit</button>
                    </div>
                </div>
            </div>


        </div>



    
</body>
</html> -->

<?php //include('../../../public/html/my_package.html'); ?>