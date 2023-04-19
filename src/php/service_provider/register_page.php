<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>register</title>
       <link rel="stylesheet" href="../../../public/css/signup_process.css">
       
    </head>
    <body>  
        
        <div class="topnav">
            <img src="../img/logo.png" alt="logo" style="width:100px;height:45px;margin-top: 5px; margin-left: 5px;" >
          <div class="topnav-right">
          <p><b><h4>1. Registration</h4></b></p>
          <p>2. Business Details</p>
          <p>3. Bank Account Details</p>
          <p>4.Finish</p>
        </div>
        </div>

        <div class="container">
            <div class="description">
               <h2> Let's create your free EventsLab <br> Business account</h2>
        </div>

        <div class="regform">
            <center><img src="../img/logo.png" style="height: 60px;
                width: 100px;"></center>
            <div class="title">
                LET'S CREATE YOUR BUSINESS ACCOUNT<br>
            </div>
            
            <div class="form">

            <form action="register_page_check.php" method="post">
            
            <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
       <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


               <div class="inputfield">
                  <label>Your email</label>

                  <?php if (isset($_GET['sp_email'])) { ?>

                <input type="text" name="sp_email" class="input" value="<?php echo $_GET['sp_email']; ?>">
                <?php }else{ ?>
                <input type="text" name="sp_email" class="input"><?php }?>
               </div>  


                <div class="inputfield">
                  <label>Your Name</label>

                  <?php if (isset($_GET['sp_name'])) { ?>
                  <input type="text" name="sp_name" class="input"  value="<?php echo $_GET['sp_name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="sp_name"
                      class="input" >
          <?php }?>

               </div> 

               <div class="inputfield">
                  <label>Password</label>
                  <input type="password" name="sp_password" class="input" >
               </div>  

              <div class="inputfield">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_pass" class="input">
               </div>
               <br>  
              <div class="inputfield">
                
                <input type="submit" value="Next" class="btn"></div>

              </div>
            </div>
        </div>
    
</form>

        <footer>
            <center>copyrights reserved</center>
        </footer>
         
    </body>
</html>