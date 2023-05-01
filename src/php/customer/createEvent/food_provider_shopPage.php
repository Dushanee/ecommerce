

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/customer/css/front.css">
    <link rel="stylesheet" href="../../../../public/customer/css/createEvent/food_provider_shopPage.css">
    <script type="text/javascript" src="../../../../public/customer/js/createEvent/food_provider_shopPage.js" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
     

    <div id="navBar">
    <div class="navigator_background"></div>
    <div class="wrapper">

    <a class="aboutus p" id="a" href="../../front.html" >Home</a>
       <a class="blog p" id="a" href="../../second.html" >Blog</a>
       <a class="customerSpt p" id="a" href="../../customersupport1/public/index.php">Customer Support</a>
       <a class="login p" id="a" href="../../selectLogintype.html">Log In</a>
       <a class="signup p" id="a" href="../../selectUserType.html">Sign Up</a>
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






    <div id="sp_info">

     <!-- <div id="spImg">
       <img src="../../../../public/customer/image/images/serviceProvider_pic/sp_img1.jpg" id="spImg1">
       <img src="../../../../public/customer/image/images/serviceProvider_pic/sp_img2.jpg" id="spImg2">
       <img src="../../../../public/customer/image/images/serviceProvider_pic/sp_img3.jpg" id="spImg3">
       <img src="../../../../public/customer/image/images/serviceProvider_pic/sp_img4.jpg" id="spImg4">
     </div> -->
     

      <?php 

      require '../DBH.php';
 
        if(isset($_POST['viewshop'])){
          $sp_id = $_POST['sp_id'];
          $pack_id = $_POST['pack_id'];
          //$min_option_id = $_POST['min_option_id'];
          //echo $min_option_id;
        }

        if(isset($_GET['sp_id'])){
          $sp_id = $_GET['sp_id'];
          $pack_id = $_GET['pack_id'];
        }

        echo "<p id='sp_id'>".$sp_id."</p>";
        echo "<p id='pack_id'>".$pack_id."</p>";

      

       
      
      $sql = "SELECT * FROM packages INNER JOIN service_providers ON packages.sp_id = service_providers.sp_id WHERE service_providers.sp_type = 'cater' AND packages.pack_id = $pack_id";
      $result = mysqli_query($conn, $sql);

      if($result == true){
        if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            $pack_name        = $row['pack_name'];
            $pack_location    = $row['pack_location'];
            $pack_description = $row['pack_description'];
            $sp_name          = $row['sp_name'];

          }
        }
      }      
      
      

      ?>

    <div id="pack_info">
      
     <h2 id="pack_name"><?php echo $pack_name ?></h2>
     <p id="pack_location"><?php echo $pack_location ?></p>
      
    
     <p id="pack_info1"><?php echo $pack_description ?></p>
    
     
     <!-- <p id="pack_owner_name">By <?php //echo $sp_name ?></p> -->
     <p id="pack_select_hall">select preferred hall/place</p>
     
     </div>
     <?php
     
     if(isset($_POST['viewshop'])){ // get first option detail when loading package
      
      $min_option_id = $_POST['min_option_id'];

     //$sql1 = "SELECT options.option_rate,options.option_description,venue_pack_options.capacity, option_type.type FROM((options INNER JOIN venue_pack_options ON options.option_id = venue_pack_options.option_id) INNER JOIN option_type ON options.option_id = option_type.option_id) WHERE options.option_id = $min_option_id";
     $sql1   = "SELECT * FROM options INNER JOIN option_type ON options.option_id = option_type.option_id WHERE options.option_id = $min_option_id";
     $result1 = mysqli_query($conn,$sql1); 

     if(mysqli_num_rows($result1)>0){
      while($row = mysqli_fetch_array($result1)){
        // $option_rate = $row['option_rate'];
        // $option_description = $row['option_description'];
        // $capacity    = $row['capacity'];
        // $type        = $row['type'];

        $option_rate        = $row['option_rate'];
        $option_description = $row['option_description']; 
        $type               = $row['type'];
        $optionPic1  = $row['optionPic1'];
        $optionPic2  = $row['optionPic2'];
        $optionPic3  = $row['optionPic3'];
        $optionPic4  = $row['optionPic4'];
      }
     }
     echo '
     <div id="spImg">
       <img src="../../../../public/image/SPOptionImage/'.$optionPic1.'"'.' id="spImg1">
       <img src="../../../../public/image/SPOptionImage/'.$optionPic2.'"'.' id="spImg2">
       <img src="../../../../public/image/SPOptionImage/'.$optionPic3.'"'.' id="spImg3">
       <img src="../../../../public/image/SPOptionImage/'.$optionPic4.'"'.' id="spImg4">
     </div> ';
    }

     $sql = "SELECT * FROM options INNER JOIN packages ON options.pack_id = packages.pack_id WHERE packages.pack_id = $pack_id";
     $result = mysqli_query($conn, $sql);
     

     if($result == true){
      if(mysqli_num_rows($result)>0){

          echo "<select id='halls'>";
          echo "</br>";
           if(isset($_GET['pack_id'])){
             
             $option_id = $_GET['option_id']; //get option details when changing options
             
             $sql1 = "SELECT * FROM options INNER JOIN option_type ON options.option_id = option_type.option_id WHERE options.option_id = $option_id";
             $result1 = mysqli_query($conn, $sql1);

             if(mysqli_num_rows($result1)>0){
              while($row = mysqli_fetch_assoc($result1)){
                echo "<option id='test' value='" . $row["option_id"] . "'>" . $row["option_name"] . " </option>";
                //$option_rate = $row["option_rate"];
              }
              //$sql2 = "SELECT option_rate FROM options WHERE option_id = $option_id";
              //$sql2 =  "SELECT options.option_rate,options.option_description,venue_pack_options.capacity, option_type.type FROM((options INNER JOIN venue_pack_options ON options.option_id = venue_pack_options.option_id) INNER JOIN option_type ON options.option_id = option_type.option_id) WHERE options.option_id = $option_id";
              
              $sql2    = "SELECT * FROM options INNER JOIN option_type ON options.option_id = option_type.option_id WHERE options.option_id = $option_id";
              $result2 = mysqli_query($conn,$sql2);
      
              if(mysqli_num_rows($result2)>0){
              while($row = mysqli_fetch_assoc($result2)){

               $option_rate        = $row['option_rate'];
               $option_description = $row['option_description'];
               $type               = $row['type'];
               $optionPic1  = $row['optionPic1'];
               $optionPic2  = $row['optionPic2'];
               $optionPic3  = $row['optionPic3'];
               $optionPic4  = $row['optionPic4'];
        }
      }

             }
          }

           while($row = mysqli_fetch_assoc($result)){
          
            echo "<option value='" . $row["option_id"] . "'>" . $row["option_name"] . "</option>";
          
           }
          echo "</select>";
         

          echo '
          <div id="spImg">
            <img src="../../../../public/image/SPOptionImage/'.$optionPic1.'"'.' id="spImg1">
            <img src="../../../../public/image/SPOptionImage/'.$optionPic2.'"'.' id="spImg2">
            <img src="../../../../public/image/SPOptionImage/'.$optionPic3.'"'.' id="spImg3">
            <img src="../../../../public/image/SPOptionImage/'.$optionPic4.'"'.' id="spImg4">
          </div> ';
      }

    }  

     ?>


    <?php    

         

     echo '<p id="option_info">'.$option_description.'</p>';
  
    ?>

  <div id="hall_payment_info">

   <table id="hall_info">
    <tr>
      <th>Maximum guest count</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
     <tr>
      <td><?php echo $option_rate ?></td>
      <td><?php echo $type ?></td>
      <td><?php echo $option_description ?></td>
    </tr>
   </table>
  
  

  <!-- The Modal -->
   <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
     <div class="modal-header">
      <span class="close">&times;</span>
     <h2>Your item is added to your cart</h2>
   </div>
  <!-- <div class="modal-body">
    <p>Product name : </p>
    <p>Some other text...</p>
  </div> -->
   <!-- <div class="modal-footer">
     <h3>Modal Footer</h3>
   </div> -->
  </div>
  </div>


   <!-- Trigger/Open The Modal -->
   <?php
   //echo '<form action="" id="pay" method="POST">';
   echo '<input type="submit" id="add_to_cart" value="Add to Events cart Rs - '.$option_rate.'" >';
   //echo '</form>';
   ?>
    
    <!-- <input type="submit" id="add_to_cart" placeholder="Add to Events cart RS-" value="'.$option_rate.'"> -->

    <a href="#" id="Cancellation_policy">Cancellation policy</a>
    <p>For custoimizstions or special requests</p>
    <a href="#">click here</a>
   </div>
  </div>
</body>
</html>