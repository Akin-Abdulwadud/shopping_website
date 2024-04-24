<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Another Home Page Ajax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Poultry Field - Agriculture & Farming Category Bootstrap Responsive Template | Home :: W3layouts </title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  .topnav {
    overflow: hidden;
    top: 0;
    z-index: 3;
    padding: 10px 0px 0px 120px;
    position: -webkit-sticky;
    position: sticky;
    background-color: white;
  }
  .nav-links{
  }

  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a{
    color: black;
  }
  .topnav a:hover {
    color: green;
  }
  .topnav a.active {
    color: white;
  }
  .nav-links button{
    width: 120px;
    height: 50px;
    border-radius: 50px;
    border: none;
    color: white;
    background-color: green;
    margin: -10px 0px 0px 0px;
  }
  .nav-links a{
    font-size: 13px;
  }
  .topnav .icon {
    display: none;
  }
  .first-logo{
    display: inline-block;
  }
  .hawkit-logo{
    width: 120px;
  }
  .active{
    margin: 0px 50px 0px 0px;
  }
  .caro .carousel-inner{
    z-index: 1;
  }

  @media screen and (max-width: 925px) {
    .topnav a:not(.active) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
    .topnav {
      padding: 0px 0px 0px 0px;
    }
  }
  @media screen and (max-width: 1100px) {
    .topnav {
      padding: 0px 0px 0px 0px;
    }
    .active{
      margin: 0px 0px 0px 0px;
    }
  }
  @media screen and (max-width: 830px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }
  @media screen and (min-width: 700px) {
    .caro .carousel-inner{
      height: 500px;
    }
  }
		.log-out{
			text-decoration: none;
		}
		.profile-picture{
			width: 100px;
		}
		#myImage{
			display: none;
		}
	</style>
</head>
<body>
	<h1>Home</h1>
	<div><img id="profilePicture" class="profile-picture" /></div>
	<label for="myImage">Change profile picture</label>
	<input type="file" name="myImage" id="myImage" accept="image/png, image/jpeg" onchange="previewImage()"><br>
	<h2>Name: <span id="userName"></span></h2>
	<h2>Email address: <span id="email"></span></h2>
	<!-- <h2>Department:  <span id="department"></span></h2> -->
	<a class="log-out" id="logOut" href="cancellingSessionAjax.php">Log Out</a>
	



<script type="text/javascript">
$(window).on("load" ,function(){
    $.get("fetchUserData.php", function(userData){
           // alert(userData);
    		userData = JSON.parse(userData);
    		console.log(userData.picture_link);
    		$('#profilePicture'). attr('src', userData.picture_link);
    		$('#userName').html(userData.first_name +" "+ userData.last_name); 
    		$('#email').html(userData.email); 
    		// $('#department').html(userData.dept_name); 
    });
});

$("#myImage").click( function(){
	// alert("okay");
})
</script>
</body>
</html>