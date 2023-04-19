<?php
session_start();
include('connection.php');

if (
    // isset($_POST['business_name']) && isset($_POST['business_address']) && isset($_POST['sp_city'])
    // && isset($_POST['contact_num']) && isset($_POST['alt_contact_num'])
    isset($_POST['submit'])
) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $business_name = validate($_POST['business_name']);
    $sp_type = $_POST['sp_type'];
    $contact_num = validate($_POST['contact_num']);
    $alt_contact_num = validate($_POST['alt_contact_num']);
    $sp_city = validate($_POST['sp_city']);
    $business_address = validate($_POST['business_address']);
    
    
    




    $user_data = 'business_name=' . $business_name . '&business_address=' . $business_address;


    if (empty($business_name)) {
        header("Location: create_account.php?error= Bussiness name is required&$user_data");
        exit();
    } else if (empty($business_address)) {
        header("Location: create_account.php?error=Bussiness address is required&$user_data");
        exit();
    } else if (empty($contact_num)) {
        header("Location: create_account.php?error=Contact number is required&$user_data");
        exit();
    } else if (empty($sp_city)) {
        header("Location: create_account.php?error=City is required&$user_data");
        exit();
    } else {

        // hashing the password
        // $pass = md5($pass);

        $sp_email = $_SESSION['sp_email'];
        echo $sp_email;

        $sql = "SELECT * FROM service_providers WHERE sp_email='$sp_email'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        print_r($row);

        if ($connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
        if (!mysqli_num_rows($result) > 0) {
            header("Location: create_account.php?error=does-not-exsist&$user_data");
            exit();
        } else {
            $sql3 = "UPDATE  service_providers SET business_name='$business_name', contact_num='$contact_num',alt_contact_num='$alt_contact_num', sp_city= '$sp_city', business_address = '$business_address', sp_type = '$sp_type' WHERE sp_email = '$sp_email'";
            //    $sql2 = "INSERT INTO service_provider (sp_business_name, sp_tel, sp_address, business_address) VALUES('$bname', '$tel', '$address','$baddress')";
            $result2 = mysqli_query($connection, $sql3);
        }

        if (!$result2) {
            echo ("Error description: " . $connection->error);
            header("Location: create_account.php?error=unknown error occurred&$user_data");
        } else {
            
            $sp_ID = $row['sp_id'];
            header("Location:bank_account.php?user_id=$sp_ID");
            exit();
        }
    }
} else {
    header("Location: create_account.php");
    exit();
}
