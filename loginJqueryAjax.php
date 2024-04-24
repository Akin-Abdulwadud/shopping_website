<?php
session_start();
include("db-conn.php");
$json_data = file_get_contents('php://input');
$data = json_decode($json_data,true);

if($json_data!=null){
    $email=  $data['email'];
    $password = sha1($data['password']);
    // echo $password;
}else{
    http_response_code(400);
    $message =  "Invalid JSON Data";
    $response = array('status'=>'failed', 'message' => $message     );
        echo json_encode($response);

}

// $password = sha1($_POST['password']);
// $email = $_POST['email'];
 // echo $email;
if (($password != "" )||( $email!= "")) {
    // code...else{
$sql = "SELECT id, first_name, last_name, email, password FROM member_tb WHERE password ='$password' and email ='$email'";
;
// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];

        $_SESSION['id'] = $id;  
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
    $response = array('status'=>'success', 'userdata' => $row);
        echo json_encode($response);
} else {
    $response =  array('status' => 'failed', 'message'=> 'Invalid Credentials' );
    echo json_encode($response);
}
}


?>