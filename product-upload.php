<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Upload</title>
</head><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Signup Including Picture</title>
	<style type="text/css">
		input[type=text], input[type=email], input[type=password], input[type=number],select {
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
		#checker{
			display: none;
		}
		#available{
			display: none;
		}
		#exist{
			display: none;
			color: red;
		}
		#myImage{
			display: none;
		}
		#accountSucess{
			display: none;
		}
		#preview{
			width: 100px;
		}
	</style>
</head>
<body>
	<div>
	  <form method="post" action="productUploadProcessor.php"  enctype="multipart/form-data" id="form">
	  	<!-- <p id="accountSucess">Account created successfully</p> -->
	  	<label for="myImage" class="glyphicon glyphicon-camera"> Product Image</label>
	  	<input type="file" name="myImage" id="myImage" accept="image/png, image/jpeg" onchange="previewImage()"><br>
	  	<div><img src="" id="preview"></div><br>
	  	<label for="fname">Category Name</label>
	    <input type="text" id="cname" name="cname" placeholder="Enter Category Name here..." required>
	  	<label for="lname">Product Name</label>
	    <input type="text" id="pname" name="pname" placeholder="Enter Product Name here..." required>
	  	<label for="lname">Product Price</label>
	    <input type="text" id="pprice" name="pprice" placeholder="Enter Product Price here..." required>
	    <input type="submit" value="Upload Product" id="pUpload">
		<div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    		<div class="modal-dialog" role="document">
        		<div class="modal-content">
            		<div class="modal-header">
                		<h5 class="modal-title" id="accountStatus">Success</h5>
                		<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    		<span aria-hidden="true">&times;</span>
                		</button>
            		</div>
            		<div class="modal-body" id="statusMessage">
                		<p id="userName"></p>You Sucessfully Upload a Product.
            		</div>
            		<div class="modal-footer">
                		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            		</div>
        		</div>
    		</div>
		</div>
	  </form>
	</div>


<script type="text/javascript">
	const previewImage = () =>{
  		const [file] = myImage.files
  		if (file) {
    		preview.src = URL.createObjectURL(file);
  		}
		// document.getElementById("preview").src = document.getElementById("myImage").value;
	}
     // window.onload = department();
	// const checkingEmail = (content) =>{
	// 	var xmlhttp = new XMLHttpRequest();
	// 	xmlhttp.onreadystatechange = function() {
   	// if (this.readyState == 4 && this.status == 200) {
   	// 	// console.log(this.responseText);
    //   		if (this.responseText == "exist") {
    //   			console.log("done");
    //   			document.getElementById('exist').style.display = "block";
    //   			document.getElementById('available').style.display = "none";
    //   			document.getElementById('signUp').disabled = true;
    //   		}else{
    //   			console.log("none");
    //   			document.getElementById('exist').style.display = "none";
    //   			document.getElementById('available').style.display = "block";
    //   			document.getElementById('signUp').removeAttribute("disabled");
    //   		}
   	// 		if (document.getElementById('email').value == "") {
    //   			document.getElementById('exist').style.display = "none";
    //   			document.getElementById('available').style.display = "none";
   	// 		}
    //   	}
    // }			
	// 	xmlhttp.open("GET", "emailChecker.php?email="+content, true);
	// 	xmlhttp.send();
	// }
	// const passwordCheck = () =>{
	// 	var firstPassword = document.getElementById('firstPassword').value;
	// 	var secondPassword = document.getElementById('secondPassword').value;
	// 	if (firstPassword != secondPassword) {
	// 		document.getElementById('checker').style.display = "block";
    //   		document.getElementById('signUp').disabled = true;
	// 		return;
	// 	}else{
	// 		document.getElementById('checker').style.display = "none";
    //   		document.getElementById('signUp').removeAttribute("disabled");
	// 	}
	// }
$("#pUpload").click(function(e){
    e.preventDefault();    
    var form = document.getElementById('form');
    var form = $('form')[0];
    var formData = new FormData(form);

    $.ajax({
        url: "productUploadProcessor.php",
        type: 'POST',
        data: formData,
        success: function (response) {
    		console.log(response);
	    if (response == "Entry created successfully") {
			// var firstname = document.getElementById("fname").value;
	    	// var user = document.getElementById("userName");
      		// document.getElementById('accountSucess').style.display = "block";
			// document.getElementById("fname").value = " ";
			// document.getElementById("lname").value = " ";
			// document.getElementById("email").value = " ";
			// document.getElementById("firstPassword").value = "";
			// document.getElementById("secondPassword").value = "";
			// document.getElementById("showingDepartments").value = " ";
    		// user.innerHTML = "Dear " + firstname+ ",";
        	OpenBootstrapPopup();
	    }else if(response == "Incomplete inputs"){
	    	var accountStatus = document.getElementById("accountStatus");
	    	var statusMessage = document.getElementById("statusMessage");
	    	accountStatus.innerHTML = "Failure";
	    	statusMessage.innerHTML = "Make sure all you fill all inputs.";
	    }else{
	    	var accountStatus = document.getElementById("accountStatus");
	    	var statusMessage = document.getElementById("statusMessage");
	    	accountStatus.innerHTML = "Failure";
	    	statusMessage.innerHTML = "There has been an error creating your Account.";
	    	// alert("failure");
        	OpenBootstrapPopup();
	    }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
    		function OpenBootstrapPopup() {
        		$("#simpleModal").modal('show');
    		}
	document.getElementById("pUpload").addEventListener("click",function(event){
		event.preventDefault();
		// signUp();
	});
</script>
</body>
</html>
</html>