<?php
session_start();
include('db-conn.php');
if(!isset($_SESSION['id'])){
    echo  json_encode(array('status' => 0 ));
    return;
}
$member_id = $_SESSION['id'];
if(isset ($member_id)) {

$sql = "SELECT * FROM `member_tb` m JOIN member_profile_picture mp on(m.id=mp.member_id) WHERE m.id = $member_id";
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
}
// $sql = "SELECT `picture_link` FROM `member_profile_picture` WHERE member_id = $member_id";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // echo "yes";
//     while($row = $result->fetch_assoc()) {
//         $picture_link = $row['picture_link'];
//     }
// };
// $sql = "SELECT * FROM `applicant_department_tb` ad join applicant_tb a on(ad.student_id=a.id) JOIN department_tb dt on(dt.id=ad.dept_id) WHERE a.id = $applicant_id";
// //echo $_SESSION['name'];$result = $conn->query($sql);
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // echo "yes";
//     $row = $result->fetch_assoc();
//     echo json_encode($row);
//     while($row = $result->fetch_assoc()) {
//         $dept_name = $row["dept_name"];
//     }
// };

?>