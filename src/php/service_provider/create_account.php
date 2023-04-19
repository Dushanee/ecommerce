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
        <img src="../img/logo.png" alt="logo" style="width:100px;height:45px;margin-top: 5px; margin-left: 5px;">
        <div class="topnav-right">
            <p>1. Registration</p>
            <p>
            <h4><b>2. Business Details</h4></b></p>
            <p>3. Bank Account Details</p>
            <P>4.Finish</P>
        </div>
    </div>

    <div class="container">
        <div class="description">
            <h2> Tell us about you and your business <br>
                so we can verify it.Please provide information<br>
                per your official documents to get verified <br>
                quicker</h2>
        </div>

        <div class="regform">
            <center><img src="../img/logo.png" style="height: 60px;
                width: 100px;"></center>
            <div class="title">
                Enter Your Business DetailS </div>

            <div class="form">

                <form action="create_account_check.php?user_id=<?php echo $_GET['user_id']?>" method="post">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <div class="inputfield">
                        <label>Your Business Name</label>
                        <?php if (isset($_GET['business_name'])) { ?>

                            <input type="text" name="business_name" class="input" value="<?php echo $_GET['business_name']; ?>">
                        <?php } else { ?>
                            <input type="text" name="business_name" class="input"><?php } ?>
                    </div>

                    <div class="inputfield">
                        <label>Business Type</label>
                        <div class="custom_select">
                            <select name="sp_type">
                                <option value="service_type" style="color:#777698;">Select a service type</option>
                                <option value="venue">venue provider</option>
                                <option value="cater">catering service</option>
                                <option value="decor">decoration provider</option>
                                <option value="sounds">sounds and light</option>
                                <option value="photo">photographer</option>
                                <option value="entertainment">entertainment</option>


                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label>Telephone Number</label>
                        <?php if (isset($_GET['contact_number'])) { ?>

                            <input type="text" name="contact_num" class="input" value="<?php echo $_GET['contact_num']; ?>">
                        <?php } else { ?>
                            <input type="text" name="contact_num" class="input"><?php } ?>
                    </div>

                    <div class="inputfield">
                        <label>Additional Telephone Number (optional)</label>
                        <?php if (isset($_GET['alt_contact_number'])) { ?>

                            <input type="text" name="alt_contact_num" class="input" value="<?php echo $_GET['alt_contact_num']; ?>">
                        <?php } else { ?>
                            <input type="text" name="alt_contact_num" class="input"><?php } ?>
                    </div>
                    <div class="inputfield">
                        <label>city</label>
                        <?php if (isset($_GET['sp_city'])) { ?>

                            <input type="text" name="sp_city" class="input" value="<?php echo $_GET['sp_city']; ?>">
                        <?php } else { ?>
                            <input type="text" name="sp_city" class="input"><?php } ?>
                    </div>
                    <div class="inputfield">
                        <label>Business Address</label>
                        <?php if (isset($_GET['business_address'])) { ?>

                            <input type="text" name="business_address" class="input" value="<?php echo $_GET['business_address']; ?>">
                        <?php } else { ?>
                            <input type="text" name="business_address" class="input"><?php } ?>
                    </div>

                    <!-- <div class="inputfield">
                <label>Business Description</label>
                <?php if (isset($_GET['description'])) { ?>

<textarea class="textarea" name="description" class="input" value="<?php echo $_GET['description']; ?>"></textarea>
  <?php } else { ?>
  <textarea class="textarea" 
    name="description" ><?php } ?>

             </div> -->
                    <br>
                    <div class="inputfield">

                        <input type="submit" name="submit" value="Next" class="btn">
                    </div>
            </div>
        </div>
    </div>

    <footer>
        <center>copyrights reserved</center>
    </footer>

</body>

</html>