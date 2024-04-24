<?php
session_start();
// echo "string";
include("db-conn.php");
$member_id = $_SESSION['id'];
$sql = "SELECT `id`, `member_id`, `receiver_name`, `receiver_phone_number`, `street_address`, `direction`, `city`, `state`, `L_G_A` FROM `member_delivery_addresses` WHERE member_id = $member_id";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	// echo "Address exists";
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }else{
    	echo "No Address";
    }
?>