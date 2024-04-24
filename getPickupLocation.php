<?php
include('db-conn.php');
$pickupId = $_POST['pickupId'];
$sql = "SELECT `id`, `location_name`, `location_address`, `pickup_officer_number`, `updated_at`, `created_at` FROM `pickup_locations_tb` WHERE id = $pickupId";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    	// echo "Address exists";
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }else{
    	echo "No Address";
    }
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // echo "yes";
//     // $row = $result->fetch_assoc();
//     // echo json_encode($row);

//     // die();
//    // $outp = array();
//     $row = $result->fetch_assoc()
//     // $outp[] = $row;
//     echo json_encode($row);
// }else{
//     // echo $applicant_id;
// }
?>