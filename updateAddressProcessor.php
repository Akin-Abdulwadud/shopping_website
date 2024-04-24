<?php
session_start();
// echo "string";
include("db-conn.php");
$member_id = $_SESSION['id'];
// echo $member_id;
// return;
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phonenumber = $_POST['pnumber'];
$deliveryaddress = $_POST['daddress'];
$directions = $_POST['directions'];
$city = $_POST['city'];
$state = $_POST['state'];
$lga = $_POST['lga'];
if ($member_id!= "" && $firstname!= "" && $lastname!= "" && $phonenumber!="" && $deliveryaddress!="" && $city!="" && isset($_POST['state']) && isset($_POST['lga'])) {
  $sql = "SELECT `id` FROM `member_delivery_addresses` WHERE member_id = $member_id";
  $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $sql = "UPDATE `member_delivery_addresses` SET `receiver_name`='$firstname $lastname',`receiver_phone_number`='$phonenumber',`street_address`='$deliveryaddress',`direction`='$directions',`city`='$city',`state`='$state',`L_G_A`='$lga',`updated_at`=now() WHERE member_id = $member_id";
          $result = $conn->query($sql);
          if ($result=== TRUE) {
            echo "Updated successfully";
          }else{
              echo "Error creating entry: " . $conn->error;
          }
          // $row = $result->fetch_assoc();
          // echo json_encode($row);
      }else{
        $sql = "INSERT INTO `member_delivery_addresses`(`member_id`,`receiver_name`, `receiver_phone_number`, `street_address`, `direction`, `city`, `state`, `L_G_A`, `updated_at`, `created_at`) VALUES ('$member_id','$firstname $lastname','$phonenumber','$deliveryaddress','$directions','$city' ,'$state', '$lga',now(),now())";
        echo $sql;
        $result = $conn->query($sql);
        if ($result=== TRUE) {
          echo "Entry Created Succesfully";
        }else{
          echo "Error creating entry: " . $conn->error;
        }
      }
}else{
  echo "incomplete inputs";
}

?>