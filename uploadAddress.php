<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Upload Address</title>
	<style type="text/css">
        #form{
        	padding-left: 13px;
        }
		input[type=text],select{
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
		  background-color: #fd7e14;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}
	</style>
</head>
<body>
	<form method="post" enctype="multipart/form-data" id="form">
		<label>Receiver First Name</label><br>
		<input type="text" name="fname" id="fname" placeholder="First Name" required>
		<label>Receiver Last Name</label><br>
		<input type="text" name="lname" id="lname" placeholder="Last Name" required>
		<label>Receiver Phone Number</label><br>
		<input type="text" name="pnumber" id="pnumber" placeholder="Mobile Number" required>
		<label>Street Address</label>
		<input type="text" name="daddress" placeholder="Enter delivery address" required>
		<label>Direction(Optional)</label>
		<input type="text" name="directions" placeholder="Directions">
		<label>City</label>
		<input type="text" name="city" placeholder="City">
		<label>State</label>
		<select name="state">
			<option>Select</option>
			<option>Oyo State</option>
		</select>
		<label>LGA(Local Govt.Area)</label>
		<select name="lga">
		   	<option>Select</option>
		    <option>Ibarapa Central</option>
		</select>
		<input type="submit" value="Save changes" id="updateAddressForm">
	</form>
	<a href="checkOut.php">Proceed to Checkout</a>

<script type="text/javascript">
$("#updateAddressForm").click(function(e){
    e.preventDefault();    
    var form = document.getElementById('form');
    var form = $('form')[0];
    var formData = new FormData(form);

    $.ajax({
        url: "updateAddressProcessor.php",
        type: 'POST',
        data: formData,
        success: function (response) {
    		alert(response);
	    if(response == "incomplete inputs"){
	    	var accountStatus = document.getElementById("accountStatus");
	    	var statusMessage = document.getElementById("statusMessage");
	    	accountStatus.innerHTML = "Failure";
	    	statusMessage.innerHTML = "Make sure all you fill all inputs.";
        	// OpenBootstrapPopup();
	    }else if(response == "Entry created successfully"){
			document.getElementById("container").style.display = "none";
			document.getElementById("deliveryAddress").style.backgroundColor = "white";
	    	document.getElementById("pickupLocation").innerHTML = "";
	    	document.getElementById("changeButton").style.display = "block";
                document.getElementById("deliveryAddress").innerHTML = "";
            $.get("getMemberAddress.php", function(response){
                alert(response);
                location.replace("checkOut.php");
                var response = JSON.parse(response);
                availableProducts = response;
                document.getElementById("deliveryAddress").innerHTML +=
				'<div id="newAddress">'+
					'<div id="newAddressDisplay">'+
				        '<p>'+response.receiver_name+'</p><br>'+
				        '<p>'+response.street_address+','+response.direction+','+response.city+','+response.state+'</p><br>'+
				        '<p>'+response.receiver_phone_number+'</p>'+
				   	'</div>'+
				'</div>';
            });
	    }else if(response == "Updated successfully"){
			// document.getElementById("container").style.display = "none";
			// document.getElementById("deliveryAddress").style.backgroundColor = "white";
	    	// document.getElementById("pickupLocation").innerHTML = "";
	    	// document.getElementById("changeButton").style.display = "block";
            // document.getElementById("deliveryAddress").innerHTML = "";
            $.get("getMemberAddress.php", function(response){
                alert(response);
                location.replace("checkOut.php");
                // var response = JSON.parse(response);
                // availableProducts = response;
                // document.getElementById("deliveryAddress").innerHTML +=
				// '<div id="newAddress">'+
				// 	'<div id="newAddressDisplay">'+
				//         '<p>'+response.receiver_name+'</p><br>'+
				//         '<p>'+response.street_address+','+response.direction+','+response.city+','+response.state+'</p><br>'+
				//         '<p>'+response.receiver_phone_number+'</p>'+
				//    	'</div>'+
				// '</div>';
            });
	    }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});	
</script>
</body>
</html>