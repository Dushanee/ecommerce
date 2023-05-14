<?php
require 'connection.php';

if (isset($_SESSION['sp_email']) && isset($_SESSION['sp_id'])) {
    //header("Location:splogin.php");
    $sp_id=$_SESSION['sp_id'];
}

// SQL query to retrieve data
$sql = "SELECT o.order_id, o.order_date, o.time, o.event_type, o.event_location, o.price, c.cust_fname, cust_lname,
        FROM order_details od 
        INNER JOIN `orders` o ON o.order_id = od.order_id 
        INNER JOIN customers c ON c.cust_id = o.cust_id 
        WHERE od.sp_id = $sp_id";

$result = mysqli_query($conn, $sql);

// Check if any data was retrieved
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Order ID: " . $row["order_id"]. " - Order Date: " . $row["order_date"]. " - Time: " . $row["time"]. " - Event Type: " . $row["event_type"]. " - Event Location: " . $row["event_location"]. " - Price: " . $row["price"]. " - Customer Name: " . $row["cust_lname"]. "<br>";
  }
} else {
  echo "No results found";
}

mysqli_close($conn);
?>
