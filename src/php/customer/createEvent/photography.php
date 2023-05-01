<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutus</title>
    <script type="text/javascript" src="../../../../public/customer/js/front.js" defer></script>
    <script type="text/javascript" src="../../../../public/customer/js/first.js" defer></script>
    <script type="text/javascript" src="../../../../public/customer/js/createEvent/photography.js" defer></script>
    <link rel="stylesheet" href="../../../../public/customer/css/front.css">
    <link rel="stylesheet" href="../../../../public/customer/css/first.css">
    <link rel="stylesheet" href="../../../../public/customer/css/createEvent/photography.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
</head>
<body>
   
   <div id="navBar">
    <div class="navigator_background"></div>
    <div class="wrapper">

    <a class="aboutus p" id="a" href="../../php/customerDashboardNew.php" >Home</a>
       <a class="blog p" id="a" href="../../second.html" >Blog</a>
       <a class="customerSpt p" id="a" href="../../customersupport.html">Customer Support</a>
       <a class="login p" id="a" href="../logout.php">Logout</a>
    </div>

    
    <div>
         <img class="eventslab" src="../../../../public/customer/image/images1/logo.png" >
    </div>
    

         
    <div id="userbar">
    <?php
             session_start();
                $ID    = $_SESSION['cust_id'];
                $Email = $_SESSION['cust_email'];
              
              require '../DBH.php';

              $sql = "SELECT cust_fname,cust_lname,cust_pro_pic FROM customers WHERE cust_id = '$ID' ";
              $result = mysqli_query($conn,$sql);
               

               if($result == true){
                 if(mysqli_num_rows($result)>0){
                     while($row = mysqli_fetch_assoc($result)){
                       $FirstName  = $row['cust_fname'];
                       $SecondName = $row['cust_lname'];
                       $profilePic = $row['cust_pro_pic'];    
                 }
                }                   
               }
                
               echo "<div id='userName'>
                  <p>Hello ".$FirstName."</p>              
               </div>";
            ?>
         <img id="userMenu" src="../../../../public/customer/image/images1/Right_30px.png" onclick="dropdown()">

         <div id="sideMenuBar">
           <div id="sideMenuBarLinks">   
            
            <?php 
                if($profilePic == 'NULL' || $profilePic == ''){
                  $profilePic = 'Account_50px.png';
                } 

               
                echo "<img id='profilepic' src='../../../../public/customer/image/images1/ProfilePic/$profilePic'". "onclick='showProfileDetails()'>";  
            ?>
             
            <a id="op1" href="#">My Orders</a>
            <a id="op2" href="#">Notifications</a>
            <a id="op3" href="#">My Vouches</a>
            <a id="op4" href="#">Settings</a>
           </div> 
         </div>
      </div> 

      
       
      <div id="search">
        <p>Search</p>
        <img id="searchGlass" src="../../../../public/customer/image/images1/Search_32px.png">
      </div>
      
      <div id="icons">
         <img src="../../../../public/customer/image/images1/Shopping_Cart_32px.png">
         <img src="../../../../public/customer/image/images1/alarm_32px.png">
         <img src="../../../../public/customer/image/images1/Chat_Bubble_32px.png">
      </div>

    </div>


    <div id="content">

     <h2 id="h2">Create an event</h2>

     
      <div id="venueFilter">
        <p>Choose your event venue</p>
        <!-- <div id="filterWrapper">
         <form method="POST" action="#">
          <label for="location" id="lblLocation">Location</label>
          <input type="text" name="location" id="location" placeholder="kandy">

          <label for="date" id="lblDate">Date</label>
          <input type="text" name="date" id="date" placeholder="16/03/2024">

          <label for="count" id="lblCount">Approximate Guest Count</label>
          <input type="number" name="count" id="count" placeholder="300">

          <input type="submit" name="venueFilter" id="sendFilter" value="Go!">
         </form>
        </div>  -->
      </div>


      <?php

       require '../DBH.php';


       $sql = "SELECT * FROM packages INNER JOIN service_providers ON packages.sp_id = service_providers.sp_id WHERE service_providers.sp_type = 'photo'";
       $result = mysqli_query($conn,$sql);

      


       echo '<div class="wrapper1">';

       $j = 0;

        if($result == true){
         if(mysqli_num_rows($result)>0){
             while($row = mysqli_fetch_assoc($result)){
               $sp_id  = $row['sp_id']; 
               $pack_id  = $row['pack_id'];  
               $bussinessName = $row['pack_name'];
               $businessCity = $row['pack_location'];
               $packImage = $row['packImage'];
               $packageRate1 = $row['packageRate1'];
               $packageRate2 = $row['packageRate2'];
               $packageRate3 = $row['packageRate3'];
               $packageRate4 = $row['packageRate4'];
               $packageRate5 = $row['packageRate5'];

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

              $sql1 = "SELECT MIN(option_id) FROM options WHERE pack_id = $pack_id";
              $result1 = mysqli_query($conn,$sql1);
              if(mysqli_num_rows($result1)>0){
                while($row = mysqli_fetch_assoc($result1)){
                  $min_option_id = $row['MIN(option_id)'];
                }
              }
                       
                         $j++;

                       echo 
         
                       "<div class='card'>".
                       
                         "<img id='accountImg'"."src='../../../../public/image/packageImage/".$packImage."' alt='Avatar'>".
                         "<div class='businessName'>".
                         "<h4><b>".$bussinessName."</b></h4>".
                         "</div>".
                         "<div class='container1'>".
                         "<img id='locationImg'"." src='../../../../public/customer/image/images1/location_district_30px.png'>". 
                         "<p>".$businessCity."</p>".
                         "<img id='ratingImg'"."src=../../../../public/customer/image/images1/rating/".$packRatingImage.">".
               
                         "<form action='photography_provider_shopPage.php' method='POST'>".
                         "<input type='hidden' name='sp_id' value=".$sp_id." />".
                         "<input type='hidden' name='pack_id' value=".$pack_id." />".
                         "<input type='hidden' name='min_option_id' value=".$min_option_id." />".
                         "<input type='submit' name='viewshop' id='viewshop' value='view'>".
                        //  "<span id='backgroundSubmit'></span>".
                         "</form>".            
                         "</div>".
                        "</div>";
                    }
                    echo '</div>'; 
                }
            }         

      //  echo 
         
      //   "<div class='card'>".
        
      //     "<img id='accountImg'"."src='../../images1/venue.jpg' alt='Avatar'>".
      //     "<div class='container1'>".
      //     "<h4><b>".$bussinessName."</b></h4>".
      //     "<img id='locationImg'"." src='../../images1/location_district_30px.png'>". 
      //     "<p>".$businessDistrict."</p>".
      //     "<img id='ratingImg'"."src=../../images1/rating/ranking".array_search(max($rating),$rating).".jpg>".

      //     "<form action='venue_provider_shopPage.php' method='POST'>".
      //     "<input type='hidden' name='spID' value=".$spId." />".
      //     "<input type='submit' name='viewshop' id='viewshop' value='See Store'>".
      //     "<span id='backgroundSubmit'></span>".
      //     "</form>".

      //     "</div>".
      //    "</div>";

      //  }
      //   echo '</div>';
      //  }                   
      // }
    ?>    
   
    </div>

















    <!-- <div class="footer" id="footer1">
     
     <img id="logo2" src = "../../../FrontUi/images1/logo.png" >
      <span class="slogan">Make your dream</span><br>
      <span class="slogan">event come true</span> 
      
      <p class="contactus">Contact us</p>

      <img id="footerPhone" src="../../images1/footer_ringer_volume_32px.png">
      <p>+94 33 234 1249</p>
      
      <img id="mail" src="../../images1/footer_secured_letter_32px.png">
      <p>eventslab@gmail.com</p>

      <img id="location" src="../../images1/footer_location_32px.png">
      <p>UCSC complec, Reid avenue, Colombo 7</p>
      
      <p class="socialMedia">Follow us on social media</p>
       
      <div class="socialMediaIcon">
        <img id="icon" src="../../images1/social media/footer_facebook_32px.png">
        <img id="icon" src="../../images1/social media/footer_instagram_32px.png">
        <img id="icon" src="../../images1/social media/footer_LinkedIn_32px.png">
      </div>

     <div class="rights_footer">
       <p>Copyrights reserved</p>
     </div>
   </div> -->


    </body>
</html>