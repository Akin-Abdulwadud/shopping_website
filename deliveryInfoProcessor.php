<?php
include('db-conn.php');
$transaction_data = array();

$transaction_id = $_POST['transaction_id'];
$sql = "SELECT * FROM `transaction_log` tl JOIN `member_delivery_addresses` md on(tl.member_delivery_address_id=md.id) WHERE tl.id = $transaction_id";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // echo "yes";
        $address = $result->fetch_assoc();
        // echo json_encode($row);

        // die();
    }else{
        // echo $applicant_id;
    }
$sql = "SELECT * FROM `transaction_details` td WHERE td.transaction_log_id = $transaction_id";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // echo "yes";
        $transaction_details = array();
        while($row = $result->fetch_assoc()) {
                $transaction_details[] = $row;
        }

        // die();
    }else{
        // echo $applicant_id;
    }
$transaction_data = array('address'=>$address, 'details'=>$transaction_details);
echo json_encode($transaction_data);
?>