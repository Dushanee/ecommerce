<?php
session_start();
require('connection.php');
$sp_id = $_SESSION['sp_id'];

if(isset($_POST['update'])){
    
    $sp_name = $_POST['sp_name'];
    $sp_email = $_POST['sp_email'];
    $business_name = $_POST['business_name'];
    $sp_type = $_POST['sp_type'];
    $contact_num = $_POST['contact_num'];
    $alt_contact_num = $_POST['alt_contact_num'];
    $sp_city = $_POST['sp_city'];
    $business_address = $_POST['business_address'];
    $holder_name = $_POST['holder_name'];
    $bank = $_POST['bank'];
    $branch = $_POST['branch'];
    $account_no = $_POST['account_no'];
    
$sql = "UPDATE service_providers SET sp_name= '$sp_name', sp_email= '$sp_email', business_name='$business_name',sp_type = '$sp_type',
 contact_num='$contact_num',alt_contact_num='$alt_contact_num', sp_city= '$sp_city', business_address = '$business_address'
 WHERE sp_id = '$sp_id'";

 $result = mysqli_query($connection,$sql);
 

 $sql2 = "UPDATE service_provider_bank SET holder_name= '$holder_name', bank= '$bank', branch='$branch',account_no = '$account_no'
 WHERE sp_id = '$sp_id'";

 $result = mysqli_query($connection,$sql2);
 header("location:new_profile.php");

}


?>