<?php
// echo "string";
include("db-conn.php");
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
// echo $_FILES["myImage"]["name"];
// return;
if ($firstname!= "" && $lastname!= "" && $email!="" && $password!="" && $_FILES["myImage"]["name"] !== "" ) {
  // $departmentId = $_POST['showingdepartments'];
  // $file = $_FILES['myImage']['tmp_name']['mime'];
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

  $sql = "SELECT email FROM member_tb WHERE email ='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      echo 'Email Already Exist';
      die();
      $last_id = mysqli_insert_id($conn);
  //     // echo "Last inserted ID is: " . $last_id;
  } else {
      // echo "Error creating entry: " . $conn->error;
      $sql = "INSERT INTO `member_tb`(`first_name`, `last_name`, `email`, `password`,`created_at`, `updated_at`) VALUES ('$firstname','$lastname','$email','$password',now(), now())";
      if ($conn->query($sql) === TRUE) {
        echo "Entry created successfully";
        $last_id = mysqli_insert_id($conn);
        // echo "Last inserted ID is: " . $last_id;
      } else {
        echo "Error creating entry: " . $conn->error;
      } 
      // $sql = "INSERT INTO `applicant_department_tb`(`student_id`,`dept_id`,`created_at`, `updated_at`) VALUES ('$last_id','$departmentId',now(), now())";
      // if ($conn->query($sql) !== TRUE) {
      //   echo "Error creating entry: " . $conn->error;
      // };
      move_uploaded_file($_FILES["myImage"]["tmp_name"], $target_file);
      $sql = "INSERT INTO `member_profile_picture`(`member_id`, `picture_link`, `status`, `created_at`, `updated_at`) VALUES ('$last_id','$target_file','active',now(),now())";
      if ($conn->query($sql) === TRUE) {
        // echo "Upload successfully";
      } else {
        echo "Unsuccessfully Upload: " . $conn->error;
      };
  }

}else{
  echo "Incomplete inputs";
}

?>