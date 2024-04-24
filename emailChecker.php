<?php
include("db-conn.php");
$content=$_GET['email'];
// echo "You inputed " .$content;
$sql = "SELECT first_name, last_name, email, password FROM member_tb WHERE email ='$content'";
// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "exist";
    // output data of each row
    // while($row = $result->fetch_assoc()) {
	// $('#available').show();
    // }
} else {
	echo "void";
}
?>