<?php
// echo "string";
include("db-conn.php");
$categoryname = $_POST['cname'];
$productname = $_POST['pname'];
$productprice = $_POST['pprice'];
// if ($categoryname!= "" && $productname!= "" && $productprice!="") {
  $target_file = "uploads/" . basename($_FILES["myImage"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // echo $imageFileType;
  $check = getimagesize($_FILES["myImage"]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      // echo "File is not an image.";
      $uploadOk = 0;
    }
  // $picture = $_FILES['myImage'];
  // die();

  // $sql = "SELECT email FROM applicant_tb WHERE email ='$email'";
  // $result = $conn->query($sql);
  // if ($result->num_rows > 0) {
      // echo 'Email Already Exist';
      // die();
      // $last_id = mysqli_insert_id($conn);
      // echo "Last inserted ID is: " . $last_id;
  // } else {
      // echo "Error creating entry: " . $conn->error;
      move_uploaded_file($_FILES["myImage"]["tmp_name"], $target_file);
      $sql = "INSERT INTO `product_tb`(`category_name`, `product_name`, `product_price`, `product_image`, `status`, `updated_at`, `created_at`) VALUES ('$categoryname','$productname','$productprice','$target_file','Active',now(),now())";
      if ($conn->query($sql) === TRUE) {
        echo "Entry created successfully";
        $last_id = mysqli_insert_id($conn);
        // echo "Last inserted ID is: " . $last_id;
      } else {
        echo "Error creating entry: " . $conn->error;
      } 

  $sql = "SELECT category_name FROM category_tb WHERE category_name ='$categoryname'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      
    }else{
      $sql = "INSERT INTO `category_tb`(`category_name`, `status`, `created_at`, `updated_at`) VALUES ('$categoryname','Active',now(),now())";
      if ($conn->query($sql) !== TRUE) {
        echo "Error creating entry: " . $conn->error;
      };
    }
      // move_uploaded_file($_FILES["myImage"]["tmp_name"], $target_file);
      // $sql = "INSERT INTO `applicant_profile_picture`(`applicant_id`, `picture_link`, `status`, `created_at`, `updated_at`) VALUES ('$last_id','$target_file','active',now(),now())";
      // if ($conn->query($sql) === TRUE) {
        // echo "Upload successfully";
      // } else {
      //   echo "Unsuccessfully Upload: " . $conn->error;
      // };
  // }

// }else{
//   echo "Incomplete inputs";
// }

?>