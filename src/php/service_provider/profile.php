<?php
require_once('connection.php');
session_start();
if (!(isset($_SESSION['sp_email']) && isset($_SESSION['sp_name']) && isset($_SESSION['business_name'])
&& isset($_SESSION['sp_id']) && isset($_SESSION['sp_city']) && isset($_SESSION['business_address'])
 && isset($_SESSION['sp_type']) && isset($_SESSION['contact_num'])))
{
    header("Location:splogin.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../../../public/css/common.css">
    <link rel="stylesheet" href="../../../public/css/profile.css">

</head>
<body>

<div class="main">
        
        <div class="card">
            <div class="card-profile-image">
                <a href="#">
                  <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="rounded-circle">
                </a>
              </div>

<div class="card-body" style="padding-top: 120px;">
                <div class="split left">
                      <br><br><br>
                    <h4>Personnal Details</h4>
                    <table>
                        <tbody>
                            
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_name'];?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_email'];?></td>
                            </tr>
                            <tr>
                                <td>Service provider ID</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_id'];?></td>
                            </tr>

                           
                        </tbody>
                    </table>

                    <h4>Business Details</h4>
                    <table>
                        <tbody>
                            
                            <tr>
                                <td>Business Name</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['business_name'];?></td>
                            </tr>

                            <tr>
                                <td>Business city</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_city'];?></td>
                            </tr>
                            
                            <tr>
                                <td>Business Address</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['business_address'];?></td>
                            </tr>

                            <tr>
                                <td>Contact Number</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['contact_num'];?></td>
                            </tr>
                            <tr>
                                <td>Alternative contact number</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['contact_num'];?></td>
                            </tr>
                            <tr>
                                <td>Business Type</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_type'];?></td>
                            </tr>

                           
                        </tbody>
                    </table>
                      
                    </div>
                  

                <div class="vertical-line" style="height: 500px;"></div>

                <div class="split right">
                    <br><br><br>
                    <h4>Bank Details</h4>
                    <table>
                        <tbody>
                            
                            <tr>
                                <td>Bank Holder Name</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_name'];?></td>
                            </tr>
                            <tr>
                                <td>Bank Name</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_name'];?></td>
                            </tr>
                            <tr>
                                <td>Branch</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_name'];?></td>
                            </tr>
                            <tr>
                                <td>Account Number</td>
                                <td>:</td>
                                <td><?php echo $_SESSION['sp_name'];?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                      
                      
                    </div>

                    <input type="button" onclick="window.location.href='update_profile.html';" value="Edit" class="button">
                  </div>

            </div>
        </div>

      
    </div>
    
        




</body>
</html>

<?php //include('../../../public/html/new_dashboard.html'); ?>