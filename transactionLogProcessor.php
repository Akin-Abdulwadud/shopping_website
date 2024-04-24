<?php
include("db-conn.php");
$sql = "SELECT * FROM `transaction_log`";
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