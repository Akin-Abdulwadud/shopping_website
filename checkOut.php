<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="popUp.css">
	<title>Check Out</title>
	<style type="text/css">
		body{
            background: rgb(0 0 0 / 6%);
/*			overflow: hidden;*/
		}
		.checkout-header{
			border-bottom: solid 4px #fd7e14;
			width: 100%;
			height: 100px;
			padding-top: 20px;
			background-color: white;
		}
		.checkout-header p{
			font-weight: bold;
			font-size: 25px;
			text-align: center;
/*            color: #fd7e14;*/
		}
		.delivery-payment{
			display: inline-block;
			position: absolute;
			border-radius: 5px;
			width: 60%;
			margin: 20px 0px 0px 80px;
			background-color: white;
		}
		.order-details{
			padding: 5px;
			position: absolute;
			background-color: white;
			display: inline-block;
			border-radius: 5px;
			width: 30%;
			right: 10px;
			margin-top: 20px;
		}
		#orderDetails{
			width: 103%;
			margin-left: -1.5%;
			border-bottom: 1px solid;
			padding-left: 10px;
		}
		#orderDetails p{
			font-weight: bold;
			font-size: 15px;
			display: inline-block;
		}
		#orderDetails span{
			position: absolute;
			right: 10px;
		}
		#orderDetails span:hover{
			color: #fd7e14;
		}
		#orderCalculations span{
			position: absolute;
			right: 10px;
			font-size: 13px;
		}
		#deliveryAddress,#pickupLocation{
			padding: 30px;
            background: rgb(0 0 0 / 4%);
		}
		.add-delivery-address,.add-pickup-location{
			width: 55%;
			padding: 20px;
			background-color: white;
		}
		#peakyButton, #deliveryButton,#changeButton{
			background-color: #fd7e14;
			border: none;
			border-radius: 5px;
			padding: 10px;
			font-weight: bold;
			color: white;
		}
		.add-delivery-address p,.add-pickup-location p{
			font-size: 13px;
			font-weight: bold;
		}
		#deliveryExplain p,#pickupExplain p{
			width: 40%;
			margin-top: -140px;
			right: 10px;
			position: absolute;
			background-color: white;
			color: #fd7e14;
			font-size: 13px;
			padding: 7px;
		}
		.modal-dialog{
			height: 500px;
		}
		#useAddress{
			width: 100%;
		}
        #close{
            position: absolute;
            margin: -100px 0px 0px 0px;
        }
        #popup{
/*            border: solid;*/
            background: rgb(0 0 0 / 90%);
            height: 527px;
            overflow: scroll;
            overflow-x: hidden;
        }
        .all-product-container{
            padding-left: 40px;
            padding-right: 40px;
        }
        #checkOut, #updateAddress, #updateAddressForm{
            color: white;
            width: 100%;
            margin: -10px 0px 0px 0px;
            background: rgb(0 0 0 / 90%);
            text-align: center;
        }
        #addressQuestion{
        	color: white;
        	display: inline-block;
        	font-size: 15px;
        	margin-left: 15px;
        }
        #addressQuestionButton{
        	position: absolute;
        	display: inline-block;
        	right: 10px;
        	color: white;
        	background-color: rgb(0 0 0 / 90%);
        	border: solid 1px;
        	padding: 7px;
        	font-size: 15px;
        	border-radius: 5px;
        }
        #form{
        	padding-left: 13px;
        }
        #form label{
        	color: white;
        }
		input[type=text],select{
		  width: 95%;
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
		.container{
			display: none;
		}
		#pickupLocations,#newAddress{
			padding: 0px 10px 10px 10px;
		}
		#pickupLocationsDisplay,#newAddress{
			padding: 0px 10px 0px 10px;
			margin-bottom: 10px;
			border: solid white 1px;
		}
		#pickupLocationsDisplay p{
			color: white;
			font-size: 13px;
			display: inline;
		}
		#pickupLocationsDisplay span{
			color: white;
			font-size: 13px;
		}
		#newAddressDisplay p{
			font-size: 13px;
			display: inline;
		}
		#newAddressDisplay span{
			font-size: 13px;
		}
		#deliveryOptions{
			padding: 10px 0px 10px 60px;
		}
		#kongaNow p,#standardDelivery p{
			font-size: 13px;
			display: inline-block;
		}
		#standardDelivery span,#kongaNow span{
			position: absolute;
			right: 30px;
		}
		#kongaNow span{
			margin-top: -50px;
		}
		#kongaNow div{
			margin-left: 20px;
			text-align: center;
			width: 65%;
			background-color: #fd7e14;
			border-radius: 30px;
		}
		#newAddress{
			width: 70%;
			margin-top: 30px;
			background-color: white;
		}
		.chooseDeliveryoption{
			width: 100%;
			height: 55px;
			padding-top: 10px;
		}
		.chooseDeliveryoption p{
			display: inline-block;
		}
		#changeButton{
			position: absolute;
			display: none;
			background-color: white;
			color: #fd7e14;
			right: 10px;
			border: 1px solid #fd7e14;
		}
		#availableAddress{
			margin-top: 20px;
			width: 96%;
			margin-left: 1.5%;
			border: 1px solid white;
			padding: 5px;
			color: white;
		}
		#availableAddress p{
			display: inline;
		}
		#receiverName{
			font-weight: bold;
		}
		#selectThisAddress{
			padding-left: 10px;
			margin-left: -1.5%;
			width: 103%;
			border-bottom: 1px solid;
		}
		#selectThisAddress p{
			margin-left: 5px;
			font-weight: bold;
		}
		#deliveryFee,#pickupFee,#orderCalculationTotal{
			display: none;
		}
		#useExistingAddress, #useSelectedLocation{
			width: 100%;
			position: absolute;
			right: 1px;
			bottom: 1px;
		}
		#submitOrder{
			width: 100%;
			padding: 10px;
			background-color: #fd7e14;
			border: none;
			color: white;
			font-weight: bold;
			font-size: 20px;
		}
		#change{
            position: absolute;
            right: 10px;
            top: 22px;
		}
		#verification{
			display: none;
		}
	</style>
</head>
<body>
		<div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    		<div class="modal-dialog" role="document">
        		<div class="modal-content">
            		<div class="modal-header">
                		<h5 class="modal-title" id="accountStatus">Success</h5>
                		<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="dismiss">
                    		<span aria-hidden="true">&times;</span>
                		</button>
            		</div>
            		<div class="modal-body" id="statusMessage">
            			<span id="message">Your has been recieved Sucessfully.</span>
            		</div>
            		<div class="modal-footer">
                		<button type="button" class="btn btn-secondary" id="dismiss2" data-bs-dismiss="modal">Close</button>
            		</div>
        		</div>
    		</div>
		</div>
		<p id="verification">Choose</p>
<form method="post" enctype="multipart/form-data" id="bodyForm">
	<div class="checkout-header">
		<p>Checkout</p>
	</div>
	<div class="delivery-payment">
		<div>
			<div class="chooseDeliveryoption">
				<p>1. CHOOSE DELIVERY OPTION</p>
				<a href="checkOut.php" id="change">Change</a> 
				<!-- <button id="changeButton" href="#search">Change</button> -->
			</div>
			<div id="deliveryAddress">
				<input type="radio" id="delivery" name="delivery" onclick="deliver()"><span>Deliver to me</span>
				<div class="add-delivery-address">
					<p>Hi <span id="memberName"></span>, Click on Add Address to specify a delivery address.</p>
                    <a href="#search" onclick="addAddress()" class="btn search-btn btn-primary" id="deliveryButton">Add Delivery Address</a> 
				</div>
				<div id="deliveryExplain">
					<p>Your item should be delivered to you in about 5 working days within Lagos & Abuja, and 7 to 14 days outside Lagos & Abuja.</p>
				</div>
			</div>
			<div id="pickupLocation">
				<input type="radio" id="pickup" name="delivery" onclick="pickUpp()"><span>Pickup from a store</span>
				<div class="add-pickup-location">
					<p>Select a pickup location in your area from our 30 locations nationwide.</p>
                    <a href="#search" onclick="checkPickupLocation()"class="btn search-btn btn-primary" id="peakyButton">Select Pickup Location</a> 
				</div>
				<div id="pickupExplain">
					<p>Pickup items from a Konga Store that is convenient for you. Save some amount on delivery charges.</p>
				</div>
			</div>
		</div>
		<div id="deliveryOptions">
			<p>Delivery Options</p>
			<div id="kongaNow">
				<input type="radio" name="deliveryType">
				<p>KongaNow - (1 - 6 hours Estimated delivery time)</p>
				<div>Same day delivery available on select products in Lagos and Abuja.</div>
				<span id="kongaNowPrice"></span>
			</div>
			<div id="standardDelivery">
				<input type="radio" name="deliveryType">
				<p>Standard Delivery (3 - 5 Business days Estimated)</p>
				<span id="standardDeliveryPrice"></span>
			</div>
		</div>
	</div>
	<div class="order-details">
		<div id="orderDetails">
			<p>ORDER DETAILS</p><span>Modify cart</span>
		</div>
		<div id="orderCalculations">
			<p>Sub total:<span id="orderSubtotal"></span></p>
			<p id="deliveryFee">Delivery Fee:<span id="orderDeliveryPrice">₦4500</span></p>
			<p id="pickupFee">Pickup Fee:<span id="orderDeliveryPrice">₦3500</span></p>
			<p>Total:<span id="orderCalculationTotal"></span></p>
		</div>
		<div id="orderDetails">
			<p>Payment Option</p>
		</div>
		<div id="orderCalculations">
			<p>Please make your payment into this Account</p>
			<p>Account Number:<span>1445036658</span></p>
			<p>Bank Account:<span>Access Bank</span></p>
			<p>Account Name:<span>Akintola Abdulwadud</span></p>
			<form id="proofForm" enctype="multipart/form-data">
	  			<label for="paymentProof">Attach Payment Proof Here</label>
	  			<input type="file" name="paymentProof" id="paymentProof" onchange="previewImage()"><br>
	  			<div><img src="" id="preview"></div><br>
	  			<input type="submit" id="submitOrder" value="Process My Order">
	  		</form>
			<!-- <p>Total:<span id="orderCalculationTotal"></span></p> -->
		</div>
	</div>
</form>
        <div class="container" id="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                <!-- </button> -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="header-search me-lg-4">
	                    <li class="nav-item search-right">
	                        <div id="search" class="pop-overlay">
						        <div class="popup" id="popup">
						            <h3 class="title-w3l two mb-4 text-left" id="popupHeader">Address Form</h3>
						            <a class="close" href="#close" id="close">×</a>
						            <div id="peaky">
							    		<input type="submit" value="Use This Pickup Location" id="useSelectedLocation">
						            </div>
							        <div id="addAddress">
							            <a href="uploadAddress.php" id="addressQuestion">Click Here to Add an Address</a>
							            <!-- <button id="addressQuestionButton" onclick="inputAddressDetails()">Add Address</button> -->
							        </div>
									<div id="availableAddress">
										<div id="selectThisAddress">
											<p id="headerName"></p>
										</div>
					                    <span class="material-symbols-outlined">person</span><p id="existingName"></p><br>
					                    <span class="material-symbols-outlined">location_on</span><p id="existingAddress"></p><br>
					                    <span class="material-symbols-outlined">call</span><p id="existingPhoneNumber"></p>
							    		<input type="submit" value="Use This Address" id="useExistingAddress">
									</div>

						            <!-- <a id="updateAddress">Use this Address</a>'; -->
						        </div>
	                        </div>
                    	</li>
                    </ul>
                </div>
            </nav>
        </div>


<script type="text/javascript">
	pickupLocations = [];
	selectedPickupLocation = {};
	// pickupLocationId = 1;
$(document).ready(function(e){
// alert();	
$("#submitOrder").click(function(e){
	e.preventDefault();
    $.get("getMemberAddress.php", function(userAddress){
	// return;
    // alert(userAddress.id);
    var gottenSubtotal = localStorage.getItem("subtotal");
    console.log(gottenSubtotal);
   	var gottenStorage = localStorage.getItem("storage");
    var cartItems = JSON.parse(gottenStorage);
    console.log(cartItems);
    var orderCalculationTotal = JSON.parse(gottenSubtotal)+4500;
    // console.log(selectedPickupLocation.id);
    if(document.getElementById("verification").innerHTML == "Choose"){
    	alert("Pls Add address for Pickup or Delivery");
    	return;
    }
    if (Object.keys(selectedPickupLocation).length === 0) {
    	var userAddress = JSON.parse(userAddress);
    	// alert("yes");
    	// return;
    	userAddress = userAddress;
	    // alert(userAddress);
	    var form = $('form')[0];
	    var data = new FormData(form);
	    // alert(data);
	   var otherData = {orderCalculationTotal:orderCalculationTotal,userAddress:userAddress,deliveryType:"Deliver To Me"};
	   data.append("otherData",JSON.stringify(otherData));
	   data.append("cartItems",JSON.stringify(cartItems));
    }else{
    	// alert("no");
    	// return;
    	userAddress = selectedPickupLocation;
	    var form = $('form')[0];
	    var data = new FormData(form);
	    // alert(data);
	   var otherData = {orderCalculationTotal:orderCalculationTotal,userAddress:userAddress,deliveryType:"Pickup"};
	   data.append("otherData",JSON.stringify(otherData));
	   data.append("cartItems",JSON.stringify(cartItems));
    }
    $.ajax({
    	type:'POST',
    	url: 'checkOutProcessor.php',
    	data: data,
    	async:false,
    	success: function(response){
    		console.log(response);
    		return;
    		if (response === "Entry Created Succesfully") { 
    			OpenBootstrapPopup();
    			$("#dismiss").click(function(){
    				location.replace("services.html")
    			});
    			$("#dismiss2").click(function(){
    				location.replace("services.html")
    			})
    		}else if(response === "input Proof"){
    			OpenBootstrapPopup();
    			document.getElementById("accountStatus").innerHTML = "Order Failed";
    			document.getElementById("message").innerHTML = "Pls input your paymentProof";
    		}
    },
        cache: false,
        contentType: false,
        processData: false

    })

    })
});

})
const previewImage = () =>{
  	const [file] = paymentProof.files
  	if (file) {
    	preview.src = URL.createObjectURL(file);
  	}
	// document.getElementById("preview").src = document.getElementById("myImage").value;
}
$(window).on("load" ,function(){
    var gottenSubtotal = localStorage.getItem("subtotal");
    var gottenSubtotal = JSON.parse(gottenSubtotal);
    console.log(gottenSubtotal);
	document.getElementById('orderSubtotal').innerHTML = "₦"+gottenSubtotal.toFixed(2);
	document.getElementById('pickupExplain').style.display = "none";
	document.getElementById('deliveryExplain').style.display = "none";
	document.getElementById("peakyButton").removeAttribute('href');
	document.getElementById("deliveryButton").removeAttribute('href');
	document.getElementById("peakyButton").style.backgroundColor = "rgb(0 0 0 / 8%)";
	document.getElementById("deliveryButton").style.backgroundColor = "rgb(0 0 0 / 8%)";
    $.get("fetchUserData.php", function(userData){
           // alert(userData);
            userData = JSON.parse(userData);
           if(userData.status=="0"){
                console.log("not logged in");                 
                return;
           }
           $('#memberName').html(userData.first_name);
           // alert(userData.id);
    });
});
	$("#close").click(function(){
		location.replace("checkOut.php");
	})
	const deliver = () =>{
		document.getElementById('kongaNowPrice').innerHTML = "₦4500";
		document.getElementById('standardDeliveryPrice').innerHTML = "₦4500";
		document.getElementById('pickupFee').style.display = "none";
		document.getElementById('deliveryFee').style.display = "block";
		document.getElementById('orderCalculationTotal').style.display = "inline";
		document.getElementById('pickupExplain').style.display = "none";
		// document.getElementById('pickupLocations').style.display = "none";
		document.getElementById('pickupFee').style.display = "none";
		document.getElementById('deliveryExplain').style.display = "block";
		document.getElementById("peakyButton").removeAttribute('href'); 
		document.getElementById("deliveryButton").href = "#search";
		document.getElementById("pickupLocation").style.backgroundColor = "white";
		document.getElementById("peakyButton").style.backgroundColor = "rgb(0 0 0 / 8%)";
		document.getElementById("deliveryButton").style.backgroundColor = "#fd7e14";
		document.getElementById("deliveryAddress").style.backgroundColor = "rgb(0 0 0 / 4%)";
    	var gottenSubtotal = localStorage.getItem("subtotal");
    	console.log(gottenSubtotal);
    	var gottenSubtotal = JSON.parse(gottenSubtotal)+4500;
		document.getElementById('orderCalculationTotal').innerHTML ="₦"+ gottenSubtotal.toFixed(2);
	}
	$("#deliveryButton").click(function(){
	    $.get("getMemberAddress.php", function(userAddress){
	        // alert(userAddress);
	        if (userAddress != "No Address") {
	        getUserAddress = userAddress;
            var userAddress = JSON.parse(userAddress);
            document.getElementById("addressQuestion").innerHTML = "Click Here to Use another Address";
	        document.getElementById("headerName").innerHTML = userAddress.receiver_name;
	        document.getElementById("existingName").innerHTML = userAddress.receiver_name;
	        document.getElementById("existingAddress").innerHTML = userAddress.street_address+","+userAddress.direction+","+userAddress.city+","+userAddress.state+","+userAddress.L_G_A;
	        document.getElementById("existingPhoneNumber").innerHTML = userAddress.receiver_phone_number;
	        }else{
	        	document.getElementById("availableAddress").style.display = "none"
	        }
	    });
	})
	$("#useExistingAddress").click(function(){
		document.getElementById("container").style.display = "none";
		document.getElementById("deliveryAddress").style.backgroundColor = "white";
		document.getElementById("verification").innerHTML = " ";
	    document.getElementById("pickupLocation").innerHTML = "";
	    // document.getElementById("changeButton").style.display = "block";
            document.getElementById("deliveryAddress").innerHTML = "";
        $.get("getMemberAddress.php", function(response){
            // alert(response);
            var response = JSON.parse(response);
            availableProducts = response;
           	document.getElementById("deliveryAddress").innerHTML +=
				'<div id="newAddress">'+
					'<div id="newAddressDisplay">'+
				        '<p>'+response.receiver_name+'</p><br>'+
				        '<p>'+response.street_address+','+response.direction+','+response.city+','+response.state+','+response.L_G_A+'</p><br>'+
				        '<p>'+response.receiver_phone_number+'</p>'+
				   	'</div>'+
				'</div>';
            });
	});
	const pickUpp = () =>{
		document.getElementById('kongaNowPrice').innerHTML = "₦3500";
		document.getElementById('standardDeliveryPrice').innerHTML = "₦3500";
		document.getElementById('pickupFee').style.display = "block";
		document.getElementById('deliveryFee').style.display = "none";
		document.getElementById('orderCalculationTotal').style.display = "inline";
		document.getElementById('pickupExplain').style.display = "block";
		document.getElementById('peaky').style.display = "block";
		document.getElementById('pickupFee').style.display = "block";
		document.getElementById('deliveryExplain').style.display = "none";
		document.getElementById("deliveryButton").removeAttribute('href'); 
		document.getElementById("peakyButton").href = "#search";
		// document.getElementById("peakyButton").href = "#search";
		document.getElementById("deliveryAddress").style.backgroundColor = "white";
		document.getElementById("deliveryButton").style.backgroundColor = "rgb(0 0 0 / 8%)";
		document.getElementById("peakyButton").style.backgroundColor = "#fd7e14";
		document.getElementById("pickupLocation").style.backgroundColor = "rgb(0 0 0 / 4%)";
    	var gottenSubtotal = localStorage.getItem("subtotal");
    	console.log(gottenSubtotal);
    	var gottenSubtotal = JSON.parse(gottenSubtotal)+3500;
		document.getElementById('orderCalculationTotal').innerHTML ="₦"+ gottenSubtotal;
	};
	const addAddress = () =>{
		document.getElementById("container").style.display = "block";
		// document.getElementById("cartDisplay").style.display = "none";
		document.getElementById("availableAddress").style.display = "block";
	}
	const checkPickupLocation = () =>{
		document.getElementById("container").style.display = "block";
		document.getElementById("popupHeader").innerHTML = "Pickup Locations";
		document.getElementById("availableAddress").style.display = "block";
		document.getElementById("addAddress").style.display = "none";
		document.getElementById("availableAddress").style.display = "none";
	}
        $("#peakyButton").click(function(){
		    $.get("pickupLocationsImport.php", function(response){
		        // alert(response);
		        pickupLocations = JSON.parse(response);
		        console.log(pickupLocations);
		    for(i in pickupLocations){
		    	document.getElementById("peaky").innerHTML +=
				    '<div id="pickupLocationsDisplay">'+
				        '<input type="radio" name="pickup" onclick="pickupSelect('+i+')"><span>Select This Pickup Location</span><br>'+
				        '<span class="material-symbols-outlined">person</span><p>'+pickupLocations[i].location_name+'</p><br>'+
				        '<span class="material-symbols-outlined">location_on</span><p>'+pickupLocations[i].location_address+'</p><br>'+
				        '<span class="material-symbols-outlined">call</span><p>'+pickupLocations[i].pickup_officer_number+'</p>'+
				    '</div>'
		    }
		    });
        });
	const pickupSelect = (i) =>{
		// alert(i);
		pickupLocationId = i;
		console.log(pickupLocationId);
		$("#useSelectedLocation").click(function(){
			selectedPickupLocation = [];
			selectedPickupLocation = pickupLocations[i];
			// console.log(pickupLocations[i]);
			// console.log(selectedPickupLocation);
			document.getElementById("container").style.display = "none";
			document.getElementById("deliveryAddress").style.backgroundColor = "white";
			document.getElementById("verification").innerHTML = " ";
			alert(document.getElementById("verification").innerHTML);
		    document.getElementById("pickupLocation").innerHTML = "";
	            document.getElementById("deliveryAddress").innerHTML = "";
	           	document.getElementById("deliveryAddress").innerHTML +=
					'<div id="newAddress">'+
						'<div id="newAddressDisplay">'+
					        '<p>'+pickupLocations[i].location_name+'</p><br>'+
					        '<p>'+pickupLocations[i].location_address+'</p><br>'+
					        '<p>'+pickupLocations[i].pickup_officer_number+'</p>'+
					   	'</div>'+
					'</div>';
		});
	}
// $("#updateAddressForm").click(function(e){
//     e.preventDefault();    
//     var form = document.getElementById('form');
//     var form = $('form')[0];
//     var formData = new FormData(form);

//     $.ajax({
//         url: "updateAddressProcessor.php",
//         type: 'POST',
//         data: formData,
//         success: function (response) {
//     		alert(response);
// 	    if(response == "incomplete inputs"){
// 	    	var accountStatus = document.getElementById("accountStatus");
// 	    	var statusMessage = document.getElementById("statusMessage");
// 	    	accountStatus.innerHTML = "Failure";
// 	    	statusMessage.innerHTML = "Make sure all you fill all inputs.";
//         	// OpenBootstrapPopup();
// 	    }else if(response == "Entry created successfully"){
// 			document.getElementById("container").style.display = "none";
// 			document.getElementById("deliveryAddress").style.backgroundColor = "white";
// 	    	document.getElementById("pickupLocation").innerHTML = "";
// 	    	document.getElementById("changeButton").style.display = "block";
//                 document.getElementById("deliveryAddress").innerHTML = "";
//             $.get("getMemberAddress.php", function(response){
//                 alert(response);
//                 var response = JSON.parse(response);
//                 availableProducts = response;
//                 document.getElementById("deliveryAddress").innerHTML +=
// 				'<div id="newAddress">'+
// 					'<div id="newAddressDisplay">'+
// 				        '<p>'+response.receiver_name+'</p><br>'+
// 				        '<p>'+response.street_address+','+response.direction+','+response.city+','+response.state+'</p><br>'+
// 				        '<p>'+response.receiver_phone_number+'</p>'+
// 				   	'</div>'+
// 				'</div>';
//             });
// 	    }else if(response == "Updated successfully"){
// 			document.getElementById("container").style.display = "none";
// 			document.getElementById("deliveryAddress").style.backgroundColor = "white";
// 	    	document.getElementById("pickupLocation").innerHTML = "";
// 	    	document.getElementById("changeButton").style.display = "block";
//                 document.getElementById("deliveryAddress").innerHTML = "";
//             $.get("getMemberAddress.php", function(response){
//                 alert(response);
//                 var response = JSON.parse(response);
//                 availableProducts = response;
//                 document.getElementById("deliveryAddress").innerHTML +=
// 				'<div id="newAddress">'+
// 					'<div id="newAddressDisplay">'+
// 				        '<p>'+response.receiver_name+'</p><br>'+
// 				        '<p>'+response.street_address+','+response.direction+','+response.city+','+response.state+'</p><br>'+
// 				        '<p>'+response.receiver_phone_number+'</p>'+
// 				   	'</div>'+
// 				'</div>';
//             });
// 	    }
//         },
//         cache: false,
//         contentType: false,
//         processData: false
//     });
// });
   	function OpenBootstrapPopup() {
        $("#simpleModal").modal('show');
    }
</script>
</body>
</html>