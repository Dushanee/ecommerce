<?php
require('connection.php');

$holder_name = $_POST['holder_name'];
$bank = $_POST['bank'];
$branch = $_POST['branch'];
$account_no = $_POST['account_no'];

if (isset($_POST['submit'])) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $userID = $_GET['user_id'];
  $holder_name = validate($_POST['holder_name']);
  $bank = validate($_POST['bank']);
  $branch = validate($_POST['branch']);
  $account_no = validate($_POST['account_no']);


  if (empty($holder_name)) {
    header("Location: bank_account.php?user_id=$userID&error=Account holder's Name is required&$user_data");
    exit();
  } else if (empty($bank)) {
    header("Location: bank_account.php?user_id=$userID&error=Bank is required&$user_data");
    exit();
  } else if (empty($branch)) {
    header("Location: bank_account.php?user_id=$userID&error=Branch is required&$user_data");
    exit();
  } else if (empty($account_no)) {
    header("Location: bank_account.php?user_id=$userID&error=Account number is required&$user_data");
    exit();
  }

  $user_data = 'holder_name=' . $holder_name . 'account_no=' . $account_no . 'bank=' . $bank . 'branch=' . $branch;

  
  $sql = "UPDATE `service_provider_bank` SET holder_name = '$holder_name', bank = '$bank', branch = '$branch', account_no = '$account_no' WHERE sp_id = $userID";
  $result = mysqli_query($connection, $sql);
  
  if ($result) {
    echo "successfully registered";
    header("Location:finish.php");
  } else {
    header("Location: bank_account.php?error=unknown error occurred&$user_data");
    exit();
  }
}
