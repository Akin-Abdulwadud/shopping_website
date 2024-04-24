<?php
$email = $_GET['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $response = array('status'=>'failed', 'message' => 'Invalid Email');
    echo json_encode($response);
}else{
    $response = array('status'=>'valid', 'message' => 'Valid Email');
    echo json_encode($response);
}
?>