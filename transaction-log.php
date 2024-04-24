<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>All Orders</title>
	<style>
	#customers {
	  font-family: Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #04AA6D;
	  color: white;
	}
	.profile-picture{
		width: 50px;
	}
	#deliveryInfoDisplay{
		width: 200px;
	}
	#cartItemImage{
		width: 50px;
	}
	</style>
</head>
<body>
	<div id="simpleModal" class="modal" tabindex="-1" role="dialog">
    	<div class="modal-dialog" role="document">
        	<div class="modal-content">
            	<div class="modal-header">
                	<h3 class="modal-title">Akintola Abdulwadud Order</h3>
                	<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="dismiss">
                    	<span aria-hidden="true">&times;</span>
                	</button>
            	</div>
            	<div class="modal-body" id="statusMessage">
                	<!-- <p id="userName"></p>Your Account was created Sucessfully. -->
				<div class="order-preview">
					<p>Receiver Name: <span id="receiverName"></span></p>
					<p>Receiver Phone Number: <span id="receiverNumber"></span></p>
					<p>Delivery Type: <span id="deliveryType"></span></p>
					<p><span id="address">Address:</span> <span id="deliveryAddress"></span></p>
					<table id="customers">
						<thead>
							<tr>
					    		<th>Quantity</th>
					    		<th>Category Name</th>
					    		<th>Product Name</th>
					    		<th>Price</th>
					  		</tr>
						</thead>
						<tbody id="cartItems">
						</tbody>
					</table>
					<p>Total Price: ₦<span id="totalPrice"></span></p>
				</div>
			    </div>
            	<div class="modal-footer">
                	<button type="button" class="btn btn-secondary" id="dismiss2" data-bs-dismiss="modal">Close</button>
            	</div>
        	</div>
    	</div>
	</div>

<h1>My Order Table</h1>

<table id="customers">
	<thead>
		<tr>
    		<th>Order Status</th>
    		<th>Total Price</th>
    		<th>Payment Proof</th>
    		<th>Delivery Type</th>
    		<th>Delivery Info</th>
  		</tr>
	</thead>
	<tbody id="allApplicants">

  </tbody>
</table>


</body>
<script type="text/javascript">
$(window).on("load" ,function(){
	document.getElementById('allApplicants').innerHTML = "";
	rerender();
});
const statusUpdate = (i)=>{
    $.get("changeStatus.php",{status_id:i}, function(response){
    	alert(response);
    	document.getElementById('statusUpdate').style.display = "none";
		document.getElementById('allApplicants').innerHTML = "";
		rerender();
    })
};
const rerender = () =>{
    $.get("transactionLogProcessor.php", function(response){
    		// alert(response);
			var response = JSON.parse(response);
    		for(let i in response){
    			// console.log(response[i].first_name);
				document.getElementById('allApplicants').innerHTML +=
					'<tr>'+
					'<td>'+response[i].order_status+' <button id="statusUpdate" onclick="statusUpdate('+response[i].id+')">Delivered</button></td>'+
					'<td>₦'+response[i].total_price+'</td>'+
					'<td><img src='+response[i].payment_proof+' class="profile-picture"></td>'+
					'<td><button id="deliveryInfo" onclick="getDeliveryInfo('+response[i].id+')">Check</button><div id="deliveryInfoDisplay"></div></td>'+
					'</tr>';
    		}
    });
}
const getDeliveryInfo = (i)=> {
	alert(i);
    $.post("deliveryInfoProcessor.php",{transaction_id:i}, function(response){
	var response = JSON.parse(response);
    	console.log(response);
    	var address = response.address;
    	document.getElementById("receiverName").innerHTML = address.receiver_name;
    	document.getElementById("receiverNumber").innerHTML = address.receiver_phone_number;
    	// alert(address.delivery_type);
    	document.getElementById("deliveryType").innerHTML = address.delivery_type;
    	if (address.delivery_type == "Pickup") {
    		var selectedLocation = address.member_delivery_address_id;
    		$.post("getPickupLocation.php",{pickupId:selectedLocation}, function(gottenPickuplocation){
		var gottenPickuplocation = JSON.parse(gottenPickuplocation);
    		console.log(gottenPickuplocation);
    		document.getElementById("address").innerHTML = "Pickup Location:";
    		document.getElementById("deliveryAddress").innerHTML = gottenPickuplocation.location_name+','+gottenPickuplocation.location_address+' CAll: '+gottenPickuplocation.pickup_officer_number;
    		})
    	}else{
    		document.getElementById("deliveryAddress").innerHTML = address.street_address+','+address.direction+','+address.city+','+address.state;
	}
    	document.getElementById("totalPrice").innerHTML = address.total_price;
    	var cartItems = response.details;
    	document.getElementById('cartItems').innerHTML = "";
    	for(let i in cartItems){
    		console.log(cartItems[i].cart_item_product_quantity);
			document.getElementById('cartItems').innerHTML +=
				'<tr>'+
					'<td>'+cartItems[i].cart_item_product_quantity+'</td>'+
					'<td>'+cartItems[i].cart_item_category+'</td>'+
					'<td><img src='+cartItems[i].cart_item_product_image+' id="cartItemImage">'+cartItems[i].cart_item_name+'</td>'+
					'<td>'+cartItems[i].cart_item_product_price+'</td>'+
				'</tr>';
    		}
    });
    // $.post("getCartItems.php",{member_id:i}, function(cartItems){
    	// alert(cartItems);
		// var cartItems = JSON.parse(cartItems);
    // });
	OpenBootstrapPopup();
}
   	function OpenBootstrapPopup() {
        $("#simpleModal").modal('show');
    }
</script>
</html>