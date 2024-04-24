<?php
session_start();
session_unset();
session_destroy();
header("location: services.html");
        // $first_name = $row['first_name'];
        // $last_name = $row['last_name'];
        // $email = $row['email'];


        // $_SESSION['first_name'] = $first_name;
        // $_SESSION['last_name'] = $last_name;
        // $_SESSION['email'] = $email;
// echo "Done";
?>