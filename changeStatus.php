<?php
include('db-conn.php');
$status = $_GET['status_id'];
   $sql = "UPDATE `transaction_log` SET `order_status`='Delivered' WHERE transaction_log.id = $status";
    if ($conn->query($sql) === TRUE) {
      echo "Updated successfully";
    }else{
      echo "Error creating entry: " . $conn->error;
    }
?>