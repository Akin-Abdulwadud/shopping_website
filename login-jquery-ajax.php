<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Log In Jquery Ajax</title>
	<style type="text/css">
		input[type=text], input[type=password], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=submit] {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}
		div {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
		#invalid{
			display: none;
			color: red;
		}
	</style>
</head>
<body>
	<span id="invalid">Invalid Credentials</span>
	<div>
	  <form method="post" action="login-jquery-ajax.php">
	    <label for="email">Email</label>
	    <input type="text" id="email" name="email" placeholder="Your email address.." required onkeyup="validateEmail()">
	    <label for="password">Password</label>
	    <input type="password" id="password" name="password" placeholder="Your password.." required >
	    <input type="submit" value="Log in" id="logIn" disabled>
	  </form>
	  <a href="signupIncludingPicture.php">Create Account</a>
	</div>

<script type="text/javascript">
	const validateEmail = () =>{
    var email = document.getElementById('email').value;
    $.get("validatingEmail.php", {email:email}, function(response){
    	response= JSON.parse(response);
    	// alert(response.status);
    	if (response.status=='failed') {
      	document.getElementById('logIn').disabled = true;
    	document.getElementById('logIn').setAttribute('style','cursor:not-allowed;')
		// document.getElementById("logIn").style.backgroundColor = "grey";
      }else if (response.status =='valid'){
      	// alert("ssssss");
      	document.getElementById('logIn').removeAttribute("disabled");
    	document.getElementById('logIn').setAttribute('style','cursor:default;')
		// document.getElementById("logIn").style.backgroundColor = "#4CAF50";
      }
    });
	}
$("#logIn").click(function(){
    	var password = document.getElementById('password').value;
    	var email = document.getElementById('email').value;
    	var data = {email:email,password:password};
    	// console.log(data.email);
    	data = JSON.stringify(data); 
		if (email == "" || password == "") {
			alert("Fill the input Field");
			return;
		}
    $.ajax({
    	type:'post',
    	url: 'loginJqueryAjax.php',
    	data: data,
    	contentType: 'application/json; charset=utf-8',
    	success: function(response){
    		response= JSON.parse(response);
    		// return;
    	if(response.status=='success'){
  			location.replace("services.html");
    	}else{
    		document.getElementById("invalid").style.display = "block";
    	}
    }
    })
});
	document.getElementById("logIn").addEventListener("click",function(event){
		event.preventDefault();
		// logIn();
	});
</script>
</body>
</html>