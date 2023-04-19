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
            <p>2. Business Details</p>
            <p>
            <h4><b>3. Bank Account Details</h4></b></p>
            <P>4.Finish</P>
        </div>
    </div>

    <div class="container">
        <div class="description">
            <h2> Fill all the fields in the form <br>
                Events Lab guarantee about the bank details <br>
                customer provides won't be revealed to a third <br>
                party under any circumstance</h2>
        </div>

        <div class="regform">
            <center><img src="../img/logo.png" style="height: 60px;
                    width: 100px;"></center>
            <div class="title">
                Enter Your Bank Account DetailS </div>

            <div class="form">

                <form action="bank_account_check.php?user_id=<?php echo $_GET['user_id'] ?>" method="post">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <div class="inputfield">
                        <label>Bank Account Holders Name</label>
                        <?php if (isset($_GET['holder_name'])) { ?>

                            <input type="text" name="holder_name" class="input" value="<?php echo $_GET['holder_name']; ?>">
                        <?php } else { ?>
                            <input type="text" name="holder_name" class="input"><?php } ?>
                    </div>


                    <div class="inputfield">
                        <label>Bank Name</label>
                        <?php if (isset($_GET['bank'])) { ?>

                            <input type="text" name="bank" class="input" value="<?php echo $_GET['bank']; ?>">
                        <?php } else { ?>
                            <input type="text" name="bank" class="input"><?php } ?>
                    </div>

                    <div class="inputfield">
                        <label>Name of the Branch</label>
                        <?php if (isset($_GET['branch'])) { ?>

                            <input type="text" name="branch" class="input" value="<?php echo $_GET['branch']; ?>">
                        <?php } else { ?>
                            <input type="text" name="branch" class="input"><?php } ?>
                    </div>

                    <div class="inputfield">
                        <label>Account Number </label>
                        <?php if (isset($_GET['account_no'])) { ?>

                            <input type="text" name="account_no" class="input" value="<?php echo $_GET['account_no']; ?>">
                        <?php } else { ?>
                            <input type="text" name="account_no" class="input"><?php } ?>
                    </div>

                    <br>
                    <div class="inputfield">
                        <span class="privacy-policy">
                            <input type="checkbox" name="policy">You agree to our <a href="">Terms and Policy.</a>
                        </span><br>
                        <input type="submit" name="submit" value="Submit" class="btn">
                    </div>

            </div>
        </div>

        <footer>
            copyrights reserved
        </footer>

</body>

</html>