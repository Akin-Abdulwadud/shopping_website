<?php
session_start();
include("db-conn.php");
$member_id = $_SESSION['id'];
$sql = "SELECT * FROM `transaction_log` WHERE member_id = $member_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // echo "yes";
    // $row = $result->fetch_assoc();
    // echo json_encode($row);

    // die();
   $outp = array();
    while($row = $result->fetch_assoc()) {
    		$outp[] = $row;
    }
    echo json_encode($outp);
}else{
    // echo $applicant_id;
}
?>