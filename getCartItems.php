<?php
session_start();
include('db-conn.php');
$member_id = $_POST['member_id'];
$sql = "SELECT * FROM `transaction_details` td WHERE td.member_id =$member_id";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // echo "yes";
        $row = $result->fetch_assoc();
        echo json_encode($row);

        // die();
        while($row = $result->fetch_assoc()) {

        }
    }else{
        // echo $applicant_id;
    }
?>