<?php
session_start();
include("db-conn.php");
$otherData = json_decode($_POST['otherData']);
$cartItems = json_decode($_POST['cartItems']);
$member_id = $_SESSION['id'];
$orderCalculationTotal = $otherData->orderCalculationTotal;
$userAddress = $otherData->userAddress;
$deliveryType = $otherData->deliveryType;
  // echo json_encode($userAddress);
  // die();
  $target_file = "paymentProof/" . basename($_FILES["paymentProof"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // echo $imageFileType;
  $check = getimagesize($_FILES["paymentProof"]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      // echo "File is not an image.";
      $uploadOk = 0;
    }
    // echo $deliveryType;
    // die();
    move_uploaded_file($_FILES["paymentProof"]["tmp_name"], $target_file);
  if ($target_file == " ") {
    echo $target_file;
    echo "input Proof";
    die();
  }
$sql = "INSERT INTO `transaction_log`(`member_id`, `member_delivery_address_id`, `total_price`,`delivery_type`, `payment_proof`, `order_status`, `created_at`, `updated_at`) VALUES ('$member_id','$userAddress->id','$orderCalculationTotal','$deliveryType','$target_file','Not Delivered',now(),now())";
      if ($conn->query($sql) === TRUE) {
        echo "Entry created successfully";
        $last_id = mysqli_insert_id($conn);
        if ($deliveryType == "Pickup") {
        $sql = "INSERT INTO `transaction-address`(`transaction_id`, `receiver_name`, `phone_number`, `address`, `updated_at`, `created_at`) VALUES ('$last_id','$userAddress->location_name','$userAddress->pickup_officer_number','$userAddress->location_address',now(),now())";
          if ($conn->query($sql) === TRUE) {}else{};
        }else{
        $sql = "INSERT INTO `transaction-address`(`transaction_id`, `receiver_name`, `phone_number`, `address`, `updated_at`, `created_at`) VALUES ('$last_id','$userAddress->receiver_name','$userAddress->receiver_phone_number , $userAddress->street_address , $userAddress->direction , $userAddress->city , $userAddress->state , $userAddress->L_G_A',now(),now())";
          if ($conn->query($sql) === TRUE) {}else{};
          }
        } 
  // $last_id = mysqli_insert_id($conn);
// $sql = "UPDATE `member_delivery_addresses` SET `transaction_id`='$last_id' WHERE member_id = $member_id";
//   $result = $conn->query($sql);
//   if ($result=== TRUE) {
//     // echo "Entry Created Succesfully";
//   }else{
//     echo "Error creating entry: " . $conn->error;
//   }
  // $last_id = mysqli_insert_id($conn);
    foreach ($cartItems as $x => $y) {
      // echo json_encode($cartItems[$x]);
      $product_name = $cartItems[$x]->product_name;
      $category_name = $cartItems[$x]->category_name;
      $product_image = $cartItems[$x]->product_image;
      $product_price = $cartItems[$x]->product_price;
      $quantity = $cartItems[$x]->Quantity;
      // echo "Last inserted ID is: " . $last_id;
      $sql = "INSERT INTO `transaction_details`(`member_id`, `transaction_log_id`, `cart_item_name`, `cart_item_category`, `cart_item_product_image`, `cart_item_product_price`, `cart_item_product_quantity`, `created_at`, `updated_at`) VALUES ('$member_id','$last_id','$product_name','$category_name','$product_image','$product_price','$quantity',now(),now())";
          if ($conn->query($sql) === TRUE) {
            // echo "Entry created successfully";
          } else {
            echo "Error creating entry: " . $conn->error;
          } 
    }
?>